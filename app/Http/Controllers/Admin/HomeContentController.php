<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomeContent;
use App\Models\PrivacyCondition;
use Illuminate\Http\Request;

class HomeContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=HomeContent::where('section_name','get started')->get();

        return view('admin.Content.getStarted.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=HomeContent::find($id);
        if($data->section_name=='get started'){
            return view('admin.Content.getStarted.edit_get_started',compact('data'));
        }elseif ($data->section_name=='completely free'){
            return view('admin.Content.homeCompletelyFree.edit_get_started',compact('data'));
        }elseif ($data->section_name=='free system'){
            return view('admin.Content.Mang_SystemFree.edit',compact('data'));
        }elseif ($data->section_name=='try system'){
            return view('admin.Content.Mang_SystemTry.edit',compact('data'));
        }elseif ($data->section_name=='occupancy protocol'){
            return view('admin.Content.OccupancyProtocol.edit',compact('data'));
        }elseif ($data->section_name=='create lease'){
            return view('admin.Content.lease.edit',compact('data'));
        }elseif ($data->section_name=='rent collection'){
            return view('admin.Content.rentCollection.edit',compact('data'));
        }elseif ($data->section_name=='rent guarantee'){
            return view('admin.Content.rentGuarantee.edit',compact('data'));
        }elseif ($data->section_name=='rent guarantee'){
            return view('admin.Content.rentGuarantee.edit',compact('data'));
        }elseif ($data->section_name=='all features'){
            return view('admin.Content.allFeatures.edit',compact('data'));
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required',
        ]);
        $data=$request->only(['title','description','section_name']);
        if ($request->hasfile('image'))
        {
            $file =$request->file('image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time().'.' . $extension;
            $file->move(public_path('uploads/'),$filename);
            $data['image']=$filename;
        }
        HomeContent::where('id',$id)->update($data);
        if($request->section_name=='get started'){
            return redirect()->route('section.index')->with('message','Get started section updated successfully');
        }elseif ($request->section_name=='completely free'){
            return redirect('admin/section/completely-free')->with('message','Completely free section updated successfully');
        }elseif ($request->section_name=='free system'){
            return redirect('admin/section/free-system')->with('message','Section updated successfully');
        }elseif ($request->section_name=='try system'){
            return redirect('admin/section/try-system')->with('message','Section updated successfully');
        }elseif ($request->section_name=='occupancy protocol'){
            return redirect('admin/section/occupancy-protocol')->with('message','Section updated successfully');
        }elseif ($request->section_name=='create lease'){
            return redirect('admin/section/lease')->with('message','Section updated successfully');
        }elseif ($request->section_name=='rent collection'){
            return redirect('admin/section/rent')->with('message','Section updated successfully');
        }elseif ($request->section_name=='rent guarantee'){
            return redirect('admin/section/rent-guarantee')->with('message','Section updated successfully');
        }elseif ($request->section_name=='all features'){
            return redirect('admin/section/all-features')->with('message','Section updated successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function completely_free()
    {
        $data=HomeContent::where('section_name','completely free')->first();
        return view('admin.Content.homeCompletelyFree.index',compact('data'));
    }
    public function  free_system(){
        $data=HomeContent::where('section_name','free system')->first();
        return view('admin.Content.Mang_SystemFree.index',compact('data'));
    }
    public function try_system(){
        $data=HomeContent::where('section_name','try system')->get();
        return view('admin.Content.Mang_SystemTry.index',compact('data'));
    }
    public  function occupancy_protocol(){
        $data=HomeContent::where('section_name','occupancy protocol')->get();
        return view('admin.Content.OccupancyProtocol.index',compact('data'));
    }
    public function lease(){

        $data=HomeContent::where('section_name','create lease')->first();
        return view('admin.Content.lease.index',compact('data'));
    }
    public  function rent(){

        $data=HomeContent::where('section_name','rent collection')->get();
        return view('admin.Content.rentCollection.index',compact('data'));
    }
    public  function rent_guarantee(){
        $data=HomeContent::where('section_name','rent guarantee')->get();
        return view('admin.Content.rentGuarantee.index',compact('data'));
    }
    public function all_features(){
        $data=HomeContent::where('section_name','all features')->get();
        return view('admin.Content.allFeatures.index',compact('data'));
    }
}
