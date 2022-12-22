<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function changePassword(Request $request){
       $this->validate($request,[
          'old_password'=>'required',
           'password' => 'required|confirmed|min:8'
       ]);
       $active_user = Auth::guard('admin')->user();
//dd($active_user);
       $arr =[
         'email'=>$active_user->email,
         'password'=>$request->old_password
       ];

        $current_password = Auth::guard('admin')->user()->password;

       if (Hash::check($request->old_password,$current_password)) {
           $updateUser = Admin::where('email', $active_user->email)->update([
               'password' => bcrypt($request->passwrod)
           ]);
           if ($updateUser) {
               return back()->with(['message'=>'Password Changed Successfully']);
           }
       }else{
           return back()->with(['err_message'=>'Old Password not matched']);
       }
    }
    public function editProfile(){
        $auth = Auth::guard('admin')->user();
        return view('admin.User.admin_profile')->with(['data'=>$auth]);
    }
    public function updateAdminProfile(Request $request,$id){
//        dd($id);
        $this->validate($request, [
            'file' => 'mimes:jpeg,png,jpg,bmp,gif,svg',
            'name'=>'required',
            'email'=>'required'
        ]);
        $imgName=null;
        if ($request->hasFile('file')) {
//            dd($request->file('file'));
            $image = $request->file('file');
            $imgName = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('\images');
//            dd($destinationPath);
            $image->move($destinationPath, $imgName);
        }
            $updateData = Admin::where('id',$id)->update([
               'name'=>$request->name,
               'email'=>$request->email,
               'image'=>$imgName
            ]);

            if ($updateData)
            return back()->with('message','Profile Updated successfully');
        }
//        dd($request);

}
