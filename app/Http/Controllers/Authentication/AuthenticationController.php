<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use App\Mail\ResetPasswordMail;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AuthenticationController extends Controller
{
    public function signUp(Request $request){

        $this->validate($request,[

        ]);
        $signUp = User::create([]);
        if ($signUp){
            return redirect('login')->with(['message'=>'Sign Up Successfully.']);
        }else{
            return back()->with(['err_message'=>'Something went wrong']);
        }
    }


    public function SigningIn(Request $request){
//        dd($request->all());
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required'
        ]);
//dd('sdaasd');
        $credentials = $request->only('email', 'password');

//dd($credentials);
//        dd(Auth::guard('admin')->attempt($credentials));

        if (Auth::guard('admin')->attempt($credentials))
        {
//            dd('sdasdasd');
            // Authentication passed...
            return redirect()->to('/admin/dashboard');
        }else{
            return back()->withErrors(['unAuthorizedError'=>'Password not matched!']);
        }

    }


    public function logout(Request $request) {
        Auth::guard('admin')->logout();
        return redirect('/login');
    }

    public function Dashboard(){

        return view('admin.Dashboard.dashboard');
    }
    public function ResetPassword(Request $request){

        $this->validate($request,[
            'email'=>'required|email',
        ]);
//        dd($request->email);
        $UserExist = Admin::where('email',$request->email)->first();
//        dd($UserExist);
        if($UserExist) {
            $random_token = rand(1000000,99999999);
            $makeUrl = url('/check-reset-token/'.$random_token);
            DB::table('password_resets')->insert([
               'email'=>$request->email,
                'token'=>$random_token,
                'created_at'=>date('Y-m-d')
            ]);
//            dd($makeUrl);
            Mail::to($UserExist)->send(new ResetPasswordMail($makeUrl));
//            dd('sadasdas');
        }else{
            return back()->with(['err_message'=>'Email not exist.']);
        }
    }
    public function CheckResetPasswordToken(Request $request, $token){
       $data =  DB::table('password_resets')->where('token',$token)->first();

        if ($data){
            return view('admin.CustomAuthentication.new_password')->with(['data'=>$data]);
        }else{
            return redirect('login');
        }
    }

    public function NewPassword(Request $request){

        $this->validate($request, [
            'email' => 'email',
            'password' => 'required|confirmed|min:6',
        ]);
        $updatePassword = Admin::where('email',$request->email)->update([
           'password'=>bcrypt($request->password)
        ]);
        if ($updatePassword)
            return redirect('/login')->with('message', 'Password Reset Successfully.!');
    }
}
