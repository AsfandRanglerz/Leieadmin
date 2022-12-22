<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Property;
use App\Models\RentalObject;
use Illuminate\Http\Request;

class RentalController extends Controller
{
    //
    public function allRental(){

        $data=RentalObject::with(['lease'])->where('user_id',auth()->id())->get();
        return view('frontend.front_panel_files.property.all-rental-properties',compact('data'));
    }
    public function index(){

        $data=Property::where('user_id',auth()->id())->where('status','unblock')->get();
        return view('frontend.front_panel_files.property.create_rental_object',compact('data'));
    }
    public function store(Request $request){
        $this->validate($request,[
           'property_id'=> 'required',
            'rental_object'=>'required',
        ]);
        $data=[
            'property_id'=>$request->property_id,
            'rental_object'=>$request->rental_object,
            'appartment_number'=>$request->apartment_number,
            'property_number'=>$request->property_number,
            'size_useable_area'=>$request->size_useable_area,
            'number_of_bathrooms'=>$request->number_of_bathrooms,
            'number_of_bedrooms'=>$request->number_of_bedrooms,
            'number_of_kitchen'=>$request->number_of_kitchen,
            'number_of_parking'=>$request->number_of_parking,
            'number_of_parking_other'=>$request->number_of_parking_other,
            'number_of_stalls'=>$request->number_of_stalls,
            'story'=>$request->story,
            'total_rooms'=>$request->total_rooms,
            'internet'=>$request->internet,
            'cable'=>$request->cable,
            'smoking'=>$request->smoking,
            'pets'=>$request->pets,
            'house_role'=>$request->house_role,
            'furnishing'=>$request->furnishing,
            'electricity_heating'=>$request->electricity_heating,
            'water_wastewater'=>$request->water_wastewater,
            'name'=>$request->name,
            'description'=>$request->description,
            'number_of_remotes'=>$request->number_of_remotes,
            'number_of_keys_in_parking_space'=>$request->number_of_keys_in_parking_space,
            'share_bethroom_people'=>$request->share_bethroom_people,
            'share_living_room_common_area_people'=>$request->share_living_room_common_area_people,
            'share_kitchen_people'=>$request->share_kitchen_people,
            'room_and_other'=>$request->room_and_other,
            'size_m2_room'=>$request->size_m2_room,
        ];
        $data['user_id']=auth()->id();
        RentalObject::create($data);
        if($request->number==1){
            $toast=array('status'=>true, 'message' => 'Rental Object Created Successfully');
            $data=RentalObject::with(['lease'])->where('user_id',auth()->id())->where('property_id',$request->property_id)->get();
            return response()->json(['message'=>$toast,'data'=>$data]);
        }else {
            return redirect('client/properties/create-rental-object')->with(['status'=>true, 'message' => 'Rental Object Successfully']);

        }
    }
    public function edit($id){

        $data=RentalObject::with('lease.tenant')->find($id);
        $property_data=Property::where('user_id',auth()->id())->get();
        return view('frontend.front_panel_files.property.info_rental_property',compact('data','property_data'));
    }
    public function update(Request $request)
    {
         $data=[
             'name'=>$request->name,
             'description'=>$request->description,
         ];
         RentalObject::find($request->id)->update($data);
         $data=RentalObject::find($request->id);
         $property_data=Property::where('user_id',auth()->id())->get();
         return view('frontend.front_panel_files.property.info_rental_property',compact('data','property_data'))->with(['status'=>true, 'message' => 'Rental Property Updated Successfully']);


    }
}
