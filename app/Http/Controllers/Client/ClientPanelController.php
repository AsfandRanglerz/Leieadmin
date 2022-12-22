<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Mail\ClientRegistration;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ClientPanelController extends Controller
{
    public function administrative(){
        $data = User::where('id',Auth::id())->first();
        return view('frontend.front_panel_files.administrative')->with(['data'=>$data]);

    }
    public function updateProfile(Request $request){
        $this->validate($request, [
            'first_name' => 'required',
            'email' => 'required|email|unique:users,id,'.Auth::id(),
            'phone_no'=>'required|min:11|max:14'
        ]);
//        dd($request);
        $imgName=Auth::user()->image;
        if ($request->hasFile('avatar')) {
//            dd($request->file('file'));
            $image = $request->file('avatar');
            $imgName = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('images');
//            dd($destinationPath);
            $image->move($destinationPath, $imgName);
        }
        $user = User::where('id',Auth::id())->update([
            'name'=>$request->first_name,
            'email'=>$request->email,
            'phone'=>$request->phone_no,
            'surname'=>$request->last_name,
            'address'=>$request->address,
            'image'=>$imgName
        ]);
        if ($user) {
            return back()->with(['status'=>true, 'message' => 'User Updated Successfully']);
        } else {
            return back()->with(['status'=>true, 'err_message' => 'Something went wrong']);
        }
    }

    public function profileSetting(Request $request){
        $tenant = 0;
        $precise = 0;
        $unpaid = 0;
        if(isset($request->send_precise)){
            $precise = 1;
        }
        if(isset($request->send_tenant)){
            $tenant = 1;
        }
        if(isset($request->send_unpaid)){
            $unpaid = 1;
        }

        $user = User::where('id',Auth::id())->update([
            'send_precise'=>$precise,
            'send_tenant'=>$tenant,
            'send_unpaid'=>$unpaid
        ]);
        if ($user) {
            return back()->with(['status'=>true, 'message' => 'Setting Updated Successfully']);
        } else {
            return back()->with(['status'=>true, 'err_message' => 'Something went wrong']);
        }
    }
}
