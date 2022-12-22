<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index(){
        $data=Property::where('user_id',auth()->id())->orderBy('created_at', 'desc')->withCount('rental_object')->get();

        return view('frontend.front_panel_files.property.all-properties',compact('data'));
    }
    public  function store(Request $request){

        $this->validate($request,[
           'street_name'=> 'required',
           'street_number'=> 'required',
           'zip_code'=> 'required',
           'city'=> 'required',
           'commune'=> 'required',
        ]);
        $data=$request->only(['street_name','street_number','zip_code','city','commune','usage_number','farm_number','fixed_number','property_name','property_description']);
        $data['status']='unblock';
        $data['user_id']=auth()->id();
         Property::create($data);
         if($request->check_return_pages=='0'){

             return redirect('/client/properties/create-property')->with(['status'=>true, 'message' => 'Property Created Successfully']);
         }else{

            $data=Property::where('user_id',auth()->id())->get();
            $toast=array('status'=>true, 'message' => 'Property Created Successfully');
            return response()->json(['message'=>$toast,'data'=>$data]);
         }

    }
    public  function edit($id){
        $data=Property::find($id);
        return view('frontend.front_panel_files.property.info_property',compact('data'));
    }
    public  function update(Request $request){
        $data=[
            'property_name'=> $request->name,
            'property_description'=> $request->description,
        ];
          Property::find($request->id)->update($data);
          $data=Property::find($request->id);
        return view('frontend.front_panel_files.property.info_property',compact('data'))->with(['status'=>true, 'message' => 'Property Updated Successfully']);

    }

}
