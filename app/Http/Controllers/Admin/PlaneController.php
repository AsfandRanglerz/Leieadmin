<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Plane;
use Illuminate\Http\Request;

class PlaneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $db_plane1=Plane::where('plan',1)->get();
        $db_plane2=Plane::where('plan',2)->get();
        $db_plane3=Plane::where('plan',3)->get();
        return view('admin.Plans.index',compact('db_plane1','db_plane2','db_plane3'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Plans.add_plane');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            "plan" => 'required',

        ]);
        $description_length=count($request->description);

        for($i=0;$i<$description_length;$i++)
        {
            $data= new Plane();
            $data->plan=$request->plan;
            $data->description=$request->description[$i];
            $data->save();

        }
        return redirect()->route('plan.index')->with('message','Plan added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
           dd('hellohhhh');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=Plane::find($id);
        return view('admin.Plans.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate($request,[
            "plan" => 'required',
            "description" => 'required',

        ]);

        $data=$request->only(['plan','description']);

        Plane::where('id',$id)->update($data);
        return redirect()->route('plan.index')->with('message','Plan updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Plane::find($id)->delete();
        return redirect()->route('plan.index')->with('message','Plan deleted successfully!');
    }
}
