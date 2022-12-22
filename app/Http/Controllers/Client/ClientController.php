<?php



namespace App\Http\Controllers\Client;



use App\Http\Controllers\Controller;

use App\Mail\ClientRegistration;

use App\Mail\ClientResetPasswordMail;

use App\Mail\ResetPasswordMail;

use App\Models\Account;

use App\Models\Admin;

use App\Models\Tenant;
use App\Models\User;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Mail;

use Illuminate\Support\Str;



class ClientController extends Controller

{
    public function index(){
        if(auth::check()){
            if(auth::user()->user_type=='private_landlord'){
                return redirect('client/dashboard');
            }elseif (auth::user()->user_type=='tenant'){
                return redirect('tenant/dashboard');
            }
        }else{
            return view('frontend.auth.login');
        }
    }
    public function clientSignIn(Request $request)

    {
        $this->validate($request, [

            'email' => 'required|email',

            'password' => 'required'

        ]);

//        User::where('')

        $credentials = $request->only('email', 'password');

        $email = $request->email;

        if (Auth::attempt($credentials)) {

            if (Auth::user()->is_verified) {

                if (Auth::user()->email_verified_at)

                if(Auth::user()->user_type=="tenant"){
                    return redirect()->to('tenant/dashboard');
                }else {
                    return redirect()->to('client/dashboard');
                }

                else

                    return back()->with(['message' => 'Please Check your Email']);

            } else {

                Auth::logout();

                return view('frontend.auth.verify_code')->with(['data'=>$email]);

            }

        } else {

            return back()->with(['err_message' => 'Credentials Not Match']);

        }

    }



    public function logout(Request $request)

    {

        Auth::logout();

        return redirect('/client/login');

    }



    public function ResetPassword(Request $request)

    {

//        dd($request);

        $this->validate($request, [

            'email' => 'required|email',

        ]);

//        dd($request->email);

        $UserExist = User::where('email', $request->email)->first();

//        dd($UserExist);

        if ($UserExist) {

            $random_token = rand(1000000, 99999999);

            $makeUrl = url('client/check-reset-token/' . $random_token);

            DB::table('password_resets')->insert([

                'email' => $request->email,

                'token' => $random_token,

                'created_at' => date('Y-m-d')

            ]);

            Mail::to($UserExist)->send(new ClientResetPasswordMail($makeUrl));

            return back()->with(['message' => 'Check your Email']);

        } else {

            return back()->with(['err_message' => 'Email not exist.']);

        }

    }



    public function CheckResetPasswordToken(Request $request, $token)

    {

        $data = DB::table('password_resets')->where('token', $token)->first();

        if ($data) {

            return view('frontend.auth.new_password')->with(['data' => $data]);

        } else {

            return redirect('client/login');

        }

    }



    public function NewPassword(Request $request)

    {

        $this->validate($request, [

            'email' => 'email',

            'password' => 'required|confirmed|min:6',

        ]);

        $updatePassword = User::where('email', $request->email)->update([

            'password' => bcrypt($request->password)

        ]);

        if ($updatePassword)

            return redirect('client/login')->with('message', 'Password Reset Successfully.!');

    }



    public function registerUser(Request $request)

    {



        $this->validate($request, [

            'name' => 'required',

            'term_checkbox' => 'required',

            'email' => 'required|email|unique:users',

            'password' => 'required|confirmed|min:6',

            'phone_no'=>'required|min:7|max:10'

        ]);



//        dd($request->all());

//        $random_token = rand(1000000, 99999999);

        $random_token =12345;

        $emailToken = Str::random(16);

        $makeUrl = url('client/check-email-token/' . $emailToken);

        $signUp = User::create([

            'name' => $request->name,

            'first_name' => $request->name,

            'surname' => $request->lname,

            'email' => $request->email,

            'password' => bcrypt($request->password),

            'phone'=> $request->phone_code . $request->phone_no ,

            'send_email_letter'=>$request->email_letter_checkbox,

            'is_verified' => 0,

            'verification_code' => $random_token,

            'email_verification_token' => $emailToken,

            'user_type' => $request->type



        ]);
         $tenant=Tenant::where('email',$request->email)->first();
         if($tenant){
             Tenant::find($tenant->id)->update(['user_id'=>$signUp->id]);
         }
//        $assignData=Tenant::where('user_id',NULL)->where('email',$request->email)->first();
//        Tenant::find($assignData->id)->update(['user_id'=>$signUp->id]);
        if ($signUp) {

            Mail::to($request->email)->send(new ClientRegistration($makeUrl));

            return response()->json(['status'=>true, 'message' => 'Please Verify Your Email.']);

        } else {

            return response()->json(['status'=>true, 'err_message' => 'Something went wrong']);

        }

    }



    public function CheckEmailToken($emailToken)

    {

//        dd($emailToken);
        $data = User::where('email_verification_token', $emailToken)->update([
            'email_verified_at' => now()
        ]);

        return redirect('client/login');
    }



    public function VerifyPhoneNumber(Request $request){

        $this->validate($request, [

            'code' => 'required',

        ]);

        $verifyUserPhone = User::where('verification_code',$request->code)->first();

        if ($verifyUserPhone) {

            User::where('verification_code',$request->code)->update([

                'is_verified' => 1

            ]);

            return response()->json(['status'=>true, 'message' => 'Please Verify Your Email.']);

//            return redirect('client/login');

        } else {

            return response()->json(['status'=>false, 'message' => 'Something went wrong']);

//            return back()->with(['err_message' => 'Something went wrong']);

        }

    }

    public  function account_save(Request $request){

        $this->validate($request,[

            'account'=>'required|numeric|digits:11',

        ]);

        $data=$request->only(['account']);

        $data['user_id']=auth()->id();

        Account::create($data);

        $message=array('status'=>true, 'message' => 'Account Created Successfully');

        $data=Account::where('user_id',auth()->id())->get();

        return response()->json(['data'=>$data,'meassage'=>$message]);

    }

}

