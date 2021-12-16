<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Review;
use App\Models\About_dubaicategory;
use App\Models\About_dubaisubcategory;
use App\Models\Local_restaurant;
use App\Models\Ourservice;
use App\Models\PremiumActivity;
use App\Models\SubTheme;
use App\Models\Inquiry;
use App\Models\Theme;
use App\Models\Package;
use App\Models\SubPackage;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;



class FrontController extends Controller
{
    public function index()
    {
        $data['slider']         =   Slider::where('status',1)->get();
        $data['review']         =   Review::where('status',1)->get();

        $data['aboutdubai']    =    About_dubaicategory::where('status',1)->get();
        return view('front.index',$data);
    }

    public function aboutdubai_subcategory($slug,$id)
    {
        $id =  Crypt::decrypt($id);
        $subcategory_data                     = About_dubaisubcategory::where('category_id',$id)->get();
        $data['subcategory']                  = About_dubaisubcategory::where('category_id',$id)->get();

        $localresturant_data                  = Local_restaurant::where('category_id',$id)->get();
        $resturantdata['localresturant_data'] = Local_restaurant::where('category_id',$id)->get();

       // dd($subcategory_data);
        if($subcategory_data->count() > 0){

            foreach($subcategory_data as $subcate) {

                if($subcate->template_type == "simple"){

                    $categorydata   =  DB::table('about_dubaicategories')->where('id', $id)->first();
                    $data['category_title'] = !empty($categorydata) ? $categorydata->title : "";
                    return view('front.aboutdubaisubcategory',$data);

                }
            }
        }elseif($localresturant_data->count() > 0){

            foreach($localresturant_data as $resturant) {

                if($resturant->template_type == "localresturant"){

                    $categorydata   =  DB::table('about_dubaicategories')->where('id', $id)->first();
                    $resturantdata['category_title'] =  !empty($categorydata) ? $categorydata->title : '';
                    return view('front.localresturant',$resturantdata);

                }
            }

        }else{
            $resturantdata['title'] = "No Data Found.";
            return view('front.nodatafound',$resturantdata);
        }

    }

    public function about()
    {
        return view('front.about_us');
    }
    public function contact()
    {
        return view('front.contact_us');
    }
    public function ourservices()
    {
        $data['ourservices'] = Ourservice::where('status',1)->get();
        return view('front.our_services',$data);
    }
    public function premium_activity()
    {
        $data['premium_activity'] = PremiumActivity::where('status',1)->get();
        return view('front.premium_activity',$data);
    }

    public function themes_detail($id)
    {
        $data['subtheme_id'] = Crypt::decrypt($id);
        $theme = SubTheme::where('id',$data['subtheme_id'])->where('status',1)->first();


        $themeData =  DB::table('themes')->where('id', $theme->theme_id)->first();
        $data['theme_title'] = $themeData->title;

        $data['subthemes'] = SubTheme::where('theme_id',$theme->theme_id)->where('status',1)->get();
        return view('front.theme_detail',$data);
    }

    public function packages_detail ($slug){

        $data['package_detail'] = Package::where('packge_slug',$slug)->where('status',1)->first();
        $data['subpackage_detail'] = SubPackage::where('packge_slug',$slug)->where('status',1)->get();

        return view('front.package_detail',$data);
    }

    public function send_inquiry(Request $request){
        $options  = $request->options;
        $name     = $request->name;
        $to_email = $request->email;
        $phone    = $request->phone;
        $location = $request->location;
        $note     = $request->note;

        $data = ["username"=>$name,"email"=>$to_email,"phone"=>$phone,"location"=>$location,"option"=>implode(",",$options),"note"=>$note];
        $Insert_Data = ["type"=>implode(",",$options),"name"=>$name,"email"=>$to_email,"phone"=>$phone,"location"=>$location,"note"=>$note];

        $inquery  = Inquiry::create($Insert_Data);
        if($inquery){
            Mail::send("front.email_template.inquiry", $data, function($message) use ($to_email,$name,$request) {
                        $message->from($to_email,$name)
                        ->subject('Inquiry - '.env("MAIL_FROM_NAME"));
                        $message->to(env("MAIL_FROM_ADDRESS"));
                });

            //Session::flash('success', "Inquery Send Successfully!");
            return back()->with('success','Inquery Send Successfully!');

        }

    }

    public function send_contactus(Request $request){

       $name        = $request->name;
       $to_email    = $request->email;
       $phone       = $request->phone;
       $message     = $request->messege;



        $data        = ["name"=>$name,"email"=>$to_email,"phone"=>$phone,"usermessage"=>$message];
        $Insert_Data = ["name"=>$name,"email"=>$to_email,"phone"=>$phone,"message"=>$message];

        $inquery  = Contact::create($Insert_Data);
        if($inquery){
            Mail::send("front.email_template.contact-us", $data, function($message) use ($to_email,$name,$request) {
                        $message->from($to_email,$name)
                        ->subject('Contact us - '.env("MAIL_FROM_NAME"));
                        $message->to(env("MAIL_FROM_ADDRESS"));
                });

            Session::flash('success', "Contact Us Message Send Successfully!");
            //return redirect(route('contact_us'));

        }

    }


}
