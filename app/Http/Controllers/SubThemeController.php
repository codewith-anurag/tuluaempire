<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubTheme;
use App\Models\Theme;
use Illuminate\Support\Facades\Crypt;

class SubThemeController extends Controller
{
    public function index($theme_id=""){

        $theme_id = Crypt::decrypt($theme_id);
        $subtheme  = new SubTheme();
        $theme_data = $subtheme->get_theme($theme_id);

        $data['theme'] = $theme_data['title'];
        $data['subtheme'] = SubTheme::where('theme_id',$theme_id)->orderBy('id','desc')->get();
        return view('admin.subthemes.index',$data);
    }

    public function create_subthemes(){
        return view('admin.subthemes.create');
    }

    public function store_subthemes(Request $request){
        $this->validate($request, [
            'title' => 'required|max:80|unique:subthemes',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'description' => 'required',
        ],
        [
            'title' => 'Sub Theme Title is required.',
            'title.unique'=> $request->title.' Sub Theme is already exists.',
            'title.max'=> 'Please Enter 80 Character of Sub Package Title.',
            'image' => 'Sub Theme Image is required.',
            'image.max' => "Please Upload Maximum Image size to 2MB (2048 KB).",
            'description' => 'Description is required.',

        ]);
        $theme_id       = Crypt::decrypt($request->theme_id);
        $theme_data          = Theme::where('id',$theme_id)->first();
        //dd($theme_data);

        $theme_slug     = $theme_data->theme_slug;

        $title          = $request->title;
        $slug           =  str_replace(" ","_",strtolower(substr($title, 0,20)));

        $imageName      =   time().'.'.$request->image->extension();
        $description    = $request->description;

        $image      =   SubTheme::create(["theme_id"=>$theme_id ,"theme_slug"=>$theme_slug,"title" => $title,"subtheme_slug"=>$slug,"image"=>$imageName,"description"=>$description]);
        if($image){
            $request->image->move(public_path('subtheme_image'), $imageName);
            $request->session()->flash('success', 'Sub theme Add Successfully.');
            return redirect(route('subthemes',Crypt::encrypt($theme_id)));
        }
    }

    public function edit_subthemes($id){
        $id = Crypt::decrypt($id);
        $data['edit_subtheme'] = SubTheme::where('id',$id)->first();

        return view('admin.subthemes.edit',$data);
    }

    public function update_subthemes(Request $request){
        $theme_id   = Crypt::encrypt($request->theme_id);
        $id         = $request->subtheme_id;
        $title      = $request->title;
        $slug       =  str_replace(" ","_",strtolower(substr($title, 0,20)));
        $description = $request->description;

        if($request->image == ""){
            $image      =   SubTheme::where('id',$id)->update(["title"=>$title,"subtheme_slug"=>$slug,"image" =>$request->old_image,"description"=>$description]);
            if($image){

                $request->session()->flash('success', 'Sub Theme Update Successfully.');
                return redirect(route('subthemes',$theme_id));
            }

        }else{

            $this->validate($request, [
                'title' => 'required|max:80',
            ],
            [
                'title' => 'Theme Title is required.',
            ]);
            $imageName      =   time().'.'.$request->image->extension();
            $image      =   SubTheme::where('id',$id)->update(["title"=>$title,"subtheme_slug"=>$slug,"image" =>$request->old_image,"description"=>$description]);
            if($image){

                $request->session()->flash('success', 'Sub Theme Update Successfully.');
                return redirect(route('subthemes',$theme_id));
            }
        }
    }

    public function delete_subthemes(Request $request,$id,$theme_id){
        $id = Crypt::decrypt($id);
        $theme_id = Crypt::encrypt($theme_id);
        $Exist_files = SubTheme::where('id',$id)->first();

        if( file_exists(public_path("subtheme_image/").$Exist_files->image)) {
            unlink(public_path("subtheme_image/").$Exist_files->image);
         }
        $slider = SubTheme::find($id)->delete();
        if($slider){
            $request->session()->flash('success', 'Sub Theme Delete Successfully.');
            return redirect(route('subthemes',$theme_id));
        }
    }

    public function change_status(Request $request){
        $id             = $request->id;
        $status         = $request->status;
        $result         = SubTheme::where('id',$id)->update(["status"=>$status]);
       if($result){
            $data["response"] = array("statuscode"=>200,"status"=>true,"message"=>"Success");
            echo json_encode($data);exit;
       }else{
            $data["response"] = array("statuscode"=>500,"status"=>false,"message"=>"Fail");
            echo json_encode($data);exit;
       }
    }
}
