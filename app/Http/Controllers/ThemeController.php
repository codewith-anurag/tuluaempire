<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database;
use App\Models\Theme;
use App\Models\SubTheme;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Crypt;

class ThemeController extends Controller
{
    public function index(){
        $data['theme'] = Theme::orderBy('id','desc')->get();
        return view('admin.themes.index',$data);
    }

    public function create_themes(){
        return view('admin.themes.create');
    }

    public function store_themes(Request $request){
        $this->validate($request, [
            'title' => 'required|max:80|unique:themes',
        ],
        [
            'title' => 'Theme Title is required.',
            'title.unique'=> $request->title.' Theme is already exists.',
            'title.max'=> 'Please Enter 80 Character of Sub Package Title.',

        ]);
        $title     = $request->title;
        $slug      =   str_replace(" ","_",strtolower(substr($title, 0,20)));
        $image      =   Theme::create(["title" => $title ,"theme_slug" => $slug]);
        if($image){
            $request->session()->flash('success', 'Theme Add Successfully.');
            return redirect('themes');
        }
    }

    public function edit_themes($id){
        $id = Crypt::decrypt($id);
        $data['edit_theme'] = Theme::where('id',$id)->first();
        return view('admin.themes.edit',$data);
    }

    public function update_themes(Request $request){
        $id         = $request->theme_id;
        $title     = $request->title;
        $slug      =   str_replace(" ","_",strtolower(substr($title, 0,20)));

        $this->validate($request, [
            'title' => 'required|max:80',
        ],
        [
            'title' => 'Theme Title is required.',
        ]);
        $image      =   Theme::where('id',$id)->update(["title" => $title ,"theme_slug" => $slug]);
        if($image){

            $request->session()->flash('success', 'Theme Update Successfully.');
            return redirect('themes');
        }
    }

    public function delete_themes(Request $request,$id){
        $id = Crypt::decrypt($id);
        $subtheme = SubTheme::where('theme_id',$id)->get();
        if(empty($subtheme)){
            Theme::find($id)->delete();
            $request->session()->flash('success', 'Theme Delete Successfully.');
            return redirect('themes');
        }else{
            $request->session()->flash('success', 'Please First Delete Sub Themes.');
            return redirect('themes');
        }
    }

    public function change_status(Request $request){
        $id             = $request->id;
        $status         = $request->status;
        $result          = Theme::where('id',$id)->update(["status"=>$status]);
       if($result){
            $data["response"] = array("statuscode"=>200,"status"=>true,"message"=>"Success");
            echo json_encode($data);exit;
       }else{
            $data["response"] = array("statuscode"=>500,"status"=>false,"message"=>"Fail");
            echo json_encode($data);exit;
       }
    }
}
