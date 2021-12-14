<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Review;
use App\Models\About_dubaicategory;
use App\Models\Ourservice;
use App\Models\PremiumActivity;
use App\Models\SubTheme;
use App\Models\Inquiry;
use App\Models\Theme;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\HttpFoundation\Session\Session;
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

    public function send_inquiry(Request $request)
    {
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


}
