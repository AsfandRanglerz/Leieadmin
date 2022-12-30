<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Mail\cancelTenantInvitation;
use App\Mail\lease_email;
use App\Mail\tenant_email;
use App\Models\Account;
use App\Models\Chat\Chat;
use App\Models\Lease;
use App\Models\Property;
use App\Models\RentalObject;
use App\Models\Tenant;
use App\Models\User;
use DateTime;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class LeaseController extends Controller
{
    public function index()
    {
        $property_data = Property::where('status', 'unblock')->where('user_id', Auth()->id())->get();
        $account_data = Account::where('user_id', auth()->id())->get();
        return view('frontend.front_panel_files.leases.create_lease', compact('property_data', 'account_data'));
    }
    public function open_lease($id)
    {
        $data = Lease::find($id);
        $datetime1 = new DateTime($data->start_date_of_agreement);
        $datetime2 = new DateTime($data->end_date_of_agreement);
        $interval = $datetime1->diff($datetime2);
        $interval = $interval->y . '.' . $interval->m;
        $data['termination_peroid'] = $interval;
        $account = Account::where('user_id', auth()->id())->get();
        // return $data->id;
        return view('frontend.front_panel_files.leases.open_lease', compact('data', 'account'));
    }
    public function get_property(Request $request)
    {
        $data = Property::with('rental_object')->find($request->id);
        Session::put('property', $data->id);
        return response()->json($data);
    }

    public function get_rental_object(Request $request)
    {
        $data = RentalObject::find($request->id);
        return response()->json($data);
    }
    public function lease_step1(Request $request)
    {
        // return response()->json($request);
        if ($request->step == 1) {

            $this->validate($request, [
                'property_id' => 'required',
                'rental_object_id' => 'required',
            ]);
            $data1 = [
                'property_id' => $request->property_id,
                'rental_object_id' => $request->rental_object_id,
                'language' => $request->language,
            ];
            $data1['user_id'] = auth()->id();
            $lease_id = Lease::create($data1);
            $data1['lease_id'] = $lease_id->id;
            Session::put('step1', $data1);
            return response()->json();
        } elseif ($request->step == 2) {
            $this->validate($request, [
                'rental_act' => 'required',
                'start_date_of_agreement' => 'required',
                'end_date_of_agreement' => 'required',
            ]);
            $data2 = [
                'rental_act' => $request->rental_act,
                'agreement_type' => $request->agreement_type,
                'start_date_of_agreement' => $request->start_date_of_agreement,
                'end_date_of_agreement' => $request->end_date_of_agreement,
                'rental_peroid' => $request->rental_peroid,
                'binding_peroid' => $request->binding_peroid,
                'notice_peroid' => $request->notice_peroid,
                'house_role' => $request->house_rule,
                'special_term' => $request->special_term,
                'rent_out_as' => $request->rent_out_as,
            ];
            $Step1 = Session::get('step1');
            Lease::find($Step1['lease_id'])->update($data2);
            Session::put('step2', $data2);
            return response()->json();
        } elseif ($request->step == 3) {
            $this->validate($request, [
                'rent_per_month' => 'required',
                'account_id' => 'required',
            ]);
            $data3 = [
                'rent_per_month' => $request->rent_per_month,
                'account_id' => $request->account_id,
                'due_date' => $request->dueDate,
                'rent_due' => $request->rent_due,
                'payment_for_first_rent' => $request->payment_for_first_rent,
                'lease_security' => $request->lease_security,
                'number_of_months_deposit' => $request->number_of_months_deposit,
                'custom_deposit_amount' => $request->custom_deposit_amount,
                'deposit_account' => $request->deposit_account,
                'no_account' => $request->no_account,
                'altDeposit' => $request->altDeposit,
            ];
            $Step1 = Session::get('step1');
            Lease::find($Step1['lease_id'])->update($data3);
            Session::put('step3', $data3);
            $property = Session::get('property');
            $property_data = Property::find($property);
            $rentalObject = Session::get('step1');
            $rentalObject = RentalObject::find($rentalObject['rental_object_id']);
            $property_data['rental_object'] = $rentalObject->rental_object;
            $date = Session::get('step2');
            $property_data['start_date'] = $date['start_date_of_agreement'];
            $property_data['end_date'] = $date['end_date_of_agreement'];
            $property_data['rent'] = $request->rent_per_month;
            return response()->json($property_data);
        } elseif ($request->step == 4) {
            $this->validate($request, [
                'first_name' => 'required',
                'surname' => 'required',
                'email' => 'required',
                'phone' => 'required',
            ]);
            $phone = $request->countryCode . ',' . $request->phone;
            $data4 = [
                'first_name' => $request->first_name,
                'surname' => $request->surname,
                'email' => $request->email,
                'phone' => $phone,
                'payment_remarks' => $request->payment_remarks,
                'think_about_collecting_rent' => $request->think_about_collecting_rent,
            ];
            $Step1 = Session::get('step1');
            Session::put('step4', $data4);
            $Step4 = Session::get('step4');
            $tenantData = new Tenant();
            $tenantData->lease_id = $Step1['lease_id'];
            if ($checkTenant = User::where('email', $Step4['email'])->where('user_type', 'tenant')->first()) {
                $tenantData->user_id = $checkTenant->id;
            }
            $tenantData->first_name = $Step4['first_name'];
            $tenantData->surname = $Step4['surname'];
            $tenantData->email = $Step4['email'];
            $tenantData->phone = $Step4['phone'];
            $tenantData->payment_remarks = $Step4['payment_remarks'];
            $tenantData->think_about_collecting_rent = $Step4['think_about_collecting_rent'];
            $tenantData->save();

            $lease = Lease::find($Step1['lease_id']);
            $property = Property::with('rental_object')->find($lease->property_id);

            return response()->json([
                'success' => "successfully",
                'lease' => $lease,
                'property' => $property,
            ]);
        }

    }
    public function lease_store(Request $request)
    {
        $Step1 = Session::get('step1');
        Lease::find($Step1['lease_id'])->update(['complete_status' => 'complete']);
        $data['demo'] = "success";
        $auth_email = User::find(auth()->id());
        Mail::to($auth_email->email)->send(new lease_email($data));
        $Step4 = Session::get('step4');
        $mydata = Tenant::where('email', $Step4['email'])->latest()->first();
        Mail::to($Step4['email'])->send(new tenant_email($mydata->id));
        $toast = array('status' => true, 'message' => 'Lease Created Successfully');
        $tenant = User::where('email', $Step4['email'])->first();
        $chat = Chat::where('sender_id', auth()->id())->where('receiver_id', $tenant->id)->orwhere('sender_id', $tenant->id)->where('receiver_id', auth()->id())->first();
        if (!$chat) {
            Chat::create(['sender_id' => auth()->id(), 'receiver_id' => $tenant->id]);
        } else {
            Chat::find($chat->id)->update(['sender_deleted' => 'active', 'receiver_deleted' => 'active']);
        }
        return response()->json($toast);
    }
    public function lease_edit(Request $request)
    {

        $toast = array('status' => true, 'message' => 'Lease Updated Successfully');
        return response()->json($toast);
    }
    public function edit_lease_steps(Request $request)
    {
        if ($request->step == 1) {

            $this->validate($request, [
                'property_id' => 'required',
                'rental_object_id' => 'required',
            ]);
            $data1 = [
                'property_id' => $request->property_id,
                'rental_object_id' => $request->rental_object_id,
                'language' => $request->language,
            ];
            Session::put('id', $request->id);
            Lease::find($request->id)->update($data1);
            Session::put('edit_step1', $data1);
            return response()->json($data1);
        } elseif ($request->step == 2) {
            $this->validate($request, [
                'rental_act' => 'required',
                'start_date_of_agreement' => 'required',
                'end_date_of_agreement' => 'required',
            ]);
            $data2 = [
                'rental_act' => $request->rental_act,
                'agreement_type' => $request->agreement_type,
                'start_date_of_agreement' => $request->start_date_of_agreement,
                'end_date_of_agreement' => $request->end_date_of_agreement,
                'rental_peroid' => $request->rental_peroid,
                'binding_peroid' => $request->binding_peroid,
                'notice_peroid' => $request->notice_peroid,
                'house_role' => $request->house_rule,
                'special_term' => $request->special_term,
                'rent_out_as' => $request->rent_out_as,
            ];
            $id = Session::get('id');
            Lease::find($id)->update($data2);
            Session::put('edit_step2', $data2);
            return response()->json($request->id);
        } elseif ($request->step == 3) {
            $this->validate($request, [
                'rent_per_month' => 'required',
                'account_id' => 'required',
            ]);
            $data3 = [
                'rent_per_month' => $request->rent_per_month,
                'account_id' => $request->account_id,
                'due_date' => $request->dueDate,
                'rent_due' => $request->rent_due,
                'payment_for_first_rent' => $request->payment_for_first_rent,
                'lease_security' => $request->lease_security,
                'number_of_months_deposit' => $request->number_of_months_deposit,
                'custom_deposit_amount' => $request->custom_deposit_amount,
                'deposit_account' => $request->deposit_account,
                'no_account' => $request->no_account,
                'altDeposit' => $request->altDeposit,
            ];

            $id = Session::get('id');
            Lease::find($id)->update($data3);
            Session::put('edit_step3', $data3);
            $property = Session::get('property');
            $property_data = Property::find($property);
            $rentalObject = Session::get('edit_step1');
            $rentalObject = RentalObject::find($rentalObject['rental_object_id']);
            $property_data['rental_object'] = $rentalObject->rental_object;

            $date = Session::get('edit_step2');
            $property_data['start_date'] = $date['start_date_of_agreement'];
            $property_data['end_date'] = $date['end_date_of_agreement'];
            $property_data['rent'] = $request->rent_per_month;
            return response()->json($property_data);
        } elseif ($request->step == 4) {
            $this->validate($request, [
                'first_name' => 'required',
                'surname' => 'required',
                'email' => 'required',
                'phone' => 'required',
            ]);
            $phone = $request->countryCode . ',' . $request->phone;
            $data4 = [
                'first_name' => $request->first_name,
                'surname' => $request->surname,
                'email' => $request->email,
                'phone' => $phone,
                'payment_remarks' => $request->payment_remarks,
                'think_about_collecting_rent' => $request->think_about_collecting_rent,
            ];

            $id = Session::get('id');
            Session::put('edit_step4', $data4);
            $Step4 = Session::get('edit_step4');
            //return response()->json($request->tenant_id);
            $tenantData = Tenant::find($request->tenant_id);
            if ($tenantData) {
                $tenantData->first_name = $Step4['first_name'];
                $tenantData->surname = $Step4['surname'];
                $tenantData->email = $Step4['email'];
                $tenantData->phone = $Step4['phone'];
                $tenantData->payment_remarks = $Step4['payment_remarks'];
                $tenantData->think_about_collecting_rent = $Step4['think_about_collecting_rent'];
                $tenantData->save();
            } else {
                $tenantData = new Tenant();
                $tenantData->first_name = $Step4['first_name'];
                $tenantData->surname = $Step4['surname'];
                $tenantData->email = $Step4['email'];
                $tenantData->phone = $Step4['phone'];
                $tenantData->payment_remarks = $Step4['payment_remarks'];
                $tenantData->think_about_collecting_rent = $Step4['think_about_collecting_rent'];
                $tenantData->save();
            }

            return response()->json();
        }
    }
    public function edit_rentalObject(Request $request)
    {

        $data = [
            'appartment_number' => $request->apartment_number,
            'property_number' => $request->property_number,
            'size_useable_area' => $request->size_useable_area,
            'number_of_bathrooms' => $request->number_of_bathrooms,
            'number_of_bedrooms' => $request->number_of_bedrooms,
            'number_of_kitchen' => $request->number_of_kitchen,
            'number_of_parking' => $request->number_of_parking,
            'number_of_parking_other' => $request->number_of_parking_other,
            'number_of_stalls' => $request->number_of_stalls,
            'story' => $request->story,
            'total_rooms' => $request->total_rooms,
            'internet' => $request->internet,
            'cable' => $request->cable,
            'smoking' => $request->smoking,
            'pets' => $request->pets,
            'house_role' => $request->house_role,
            'furnishing' => $request->furnishing,
            'electricity_heating' => $request->electricity_heating,
            'water_wastewater' => $request->water_wastewater,
            'name' => $request->name,
            'description' => $request->description,
            'number_of_remotes' => $request->number_of_remotes,
            'number_of_keys_in_parking_space' => $request->number_of_keys_in_parking_space,
            'share_bethroom_people' => $request->share_bethroom_people,
            'share_living_room_common_area_people' => $request->share_living_room_common_area_people,
            'share_kitchen_people' => $request->share_kitchen_people,
            'room_and_other' => $request->room_and_other,
            'size_m2_room' => $request->size_m2_room,
        ];
        RentalObject::find($request->editId)->update($data);
        $toast = array('status' => true, 'message' => 'Edit Rental Property Successfully');

        return response()->json($toast);
    }
    public function edit($id)
    {

        $property_data = Property::where('status', 'unblock')->where('user_id', Auth()->id())->get();
        $account_data = Account::where('user_id', auth()->id())->get();
        $data_lease = Lease::with(['tenant'])->find($id);
        $data_rebtal = RentalObject::where('property_id', $data_lease->property_id)->get();
        return view('frontend.front_panel_files.leases.edit_lease', compact('data_rebtal', 'data_lease', 'property_data', 'account_data'));
    }
    public function delete($id)
    {

        Lease::find($id)->delete();
        return redirect('/client/dashboard')->with(['status' => true, 'message' => 'Lease Deleted Successfully']);
    }
    public function all_leases()
    {
        //        if (auth()->user()->user_type == 'Tenant'){
        //            $data = Lease::with('property')->where('user_id',auth()->id())->get();
        //        }else{
        $data = Lease::with('property')->where('user_id', auth()->id())->get();
        //        }

        return view('frontend.front_panel_files.leases.all_leases', compact('data'));
    }
    public function lease_detail($id)
    {
        $data = Tenant::with('lease')->find($id);

        return view('frontend.front_panel_files.tenants.tenant_lease_preview', compact('data'));
    }
    public function tenant_leases()
    {
        $data = Tenant::with('lease')->where('user_id', auth()->id())->get();

        return view('frontend.front_panel_files.tenants.all_leases', compact('data'));
    }
    public function open_leases($id)
    {
        $data['lease'] = Lease::find($id);
        $datetime1 = new DateTime($data['lease']->start_date_of_agreement);
        $datetime2 = new DateTime($data['lease']->end_date_of_agreement);
        $interval = $datetime1->diff($datetime2);
        $interval = $interval->y . '.' . $interval->m;
        $data['termination_peroid'] = $interval;
        return view('frontend.front_panel_files.tenants.create_lease', $data);
    }
    public function tenant_leases_complete($id)
    {
        Lease::where('id', $id)->update(['tanant_complete_status' => 'complete']);
        $toast = array('status' => true, 'message' => 'Lease completed Successfully');
        return response()->json($toast);
    }
    public function update_account(Request $request)
    {

        $this->validate($request, [
            'account_id' => 'required',

        ]);
        Lease::find($request->id)->update(['account_id' => $request->account_id]);
        $toast = array('status' => true, 'message' => 'Lease updated Successfully');
        return response()->json($toast);
    }
    public function update_duedate(Request $request)
    {
        $this->validate($request, [
            'dueDate' => 'required',
        ]);
        Lease::find($request->id)->update(['due_date' => $request->dueDate]);
        $toast = array('status' => true, 'message' => 'Lease updated Successfully');
        return response()->json($toast);
    }
    public function cancel_invitation($id)
    {
        $send_email = Tenant::where('lease_id', $id)->first();
        if (isset($send_email->email)) {
            Mail::to($send_email->email)->send(new cancelTenantInvitation());
            Tenant::where('lease_id', $id)->first()->delete();
        }

        Lease::find($id)->update(['complete_status' => 'NULL']);

        return redirect('client/leases/all-leases')->with(['status' => true, 'message' => 'Cancel invitation Successfully']);
    }

}
