<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Crypt;

class ContactController extends Controller
{
    public function index(){
        $data['contact'] = Contact::orderBy('id','desc')->get();
        return view('admin.contactus.index',$data);
    }

    public function delete_contact(Request $request,$id){
        $id = Crypt::decrypt($id);


        $slider = Contact::find($id)->delete();
        if($slider){
            $request->session()->flash('success', 'Contact Delete Successfully.');
            return redirect('contact');
        }
    }

}
