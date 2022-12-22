<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Mail\Contact_us;
use App\Models\LeieadminLogo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public  function contact_us(Request $request){
        $validator=$request->validate([
            'email'=>'required',
            'phone'=>'required',
            'description'=>'required',
        ]);
        $data=$request->only(['first_name','last_name','email','phone','description']);
        Mail::to($request->email)->send(new Contact_us($data));
        return back()->with(['status'=>true, 'message' => 'Message Sent']);
    }
    public function index(){
        $data=LeieadminLogo::first();
        return view('admin.logo.index',compact('data'));

    }
    public function chnage_logo($id){
        $data=LeieadminLogo::find($id);
        return view('admin.logo.edit',compact('data'));
    }
    public function update_logo(Request $request,$id){
        $validator=$request->validate([
            'logo'=>'required',
        ]);
            $file =$request->file('logo');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time().'.' . $extension;
            $file->move(public_path('uploads/'),$filename);
            $data['logo']=$filename;
            LeieadminLogo::where('id',$id)->update($data);
            return redirect('admin/section/logo')->with('message','Logo updated successfully');

    }
}
