<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


    public function create()
    {
        $tenants=User::where('user_type','tenant')->get();
        $land_lords=User::where('user_type','private_landlord')->get();
//        $data->paginate(10);
        return view('admin.User.user_list',compact('tenants','land_lords'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            "first_name" => 'required',
            "surname" => 'required',
            "email" => 'required|unique:users',
            "phone" => 'required',
            "gender" => 'required',
            'password' => 'required|confirmed|min:8',
        ]);
//        dd($request);
        $arr=[
            'password' => bcrypt($request->password),
            'name'=>$request->first_name.' '.$request->surname,
            "first_name" => $request->first_name,
            "surname" => $request->surname,
            "email" => $request->email,
            "phone" => $request->phone,
            "date_of_birth" => $request->date_of_birth,
            "gender" => $request->gender,
            "user_type" => $request->user_type
        ];
        $saveUser = User::create($arr);
        if ($saveUser){
            return back()->with(['message'=>'User Created Successfully']);
        }else{
            return back()->with(['err_message'=>'Some thing Went Wrong']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $data = User::where('id',$id)->first();
        return view('admin.User.edit_user')->with(['data'=>$data]);
    }


    public function update(Request $request, $id)
    {
//        dd($request,$id);
        $this->validate($request,[
            "first_name" => 'required',
            "surname" => 'required',
            "email" => 'required|unique:users,email,'.$id.'id',
            "phone" => 'required',
            "gender" => 'required',
        ]);
//        dd($request);
        $arr=[
//            'password' => $request->password,
            'name'=>$request->first_name.' '.$request->surname,
            "first_name" => $request->first_name,
            "surname" => $request->surname,
            "email" => $request->email,
            "phone" => $request->phone,
            "date_of_birth" => $request->date_of_birth,
            "gender" => $request->gender
        ];
        $updateUser = User::where('id',$id)->update($arr);
        if ($updateUser){
            return redirect('admin/users-list')->with(['message'=>'User Updated Successfully']);
        }else{
            return back()->with(['err_message'=>'Some thing Went Wrong']);
        }
    }

    public function destroy($id)
    {
        $deleteUser = User::where('id',$id)->delete();
        if ($deleteUser){
            return back()->with(['message'=>'User deleted Successfully']);
        }else{
            return back()->with(['err_message'=>'Some thing Went Wrong']);
        }
    }
}
