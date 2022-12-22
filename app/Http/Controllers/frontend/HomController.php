<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\HomeContent;
use App\Models\Lease;
use App\Models\PrivacyCondition;
use App\Models\Question;
use App\Models\Tenant;
use App\Models\RentalObject;
use App\Models\TermCondition;
use Illuminate\Http\Request;

class HomController extends Controller
{
    public  function index(){

        $completely_free=HomeContent::where('section_name','completely free')->first();
        $get_started=HomeContent::where('section_name','get started')->get();
        return view('frontend.index',compact('completely_free','get_started'));
    }
    public function management(){
        $free_management=HomeContent::where('section_name','free system')->first();
        $try_management=HomeContent::where('section_name','try system')->get();
        return view('frontend.management_system',compact('free_management','try_management'));
    }
    public function deposit_account(){
        $occupancy_protocol=HomeContent::where('section_name','occupancy protocol')->first();
        return view('frontend.deposit_account',compact('occupancy_protocol'));
      }
      public function occupancy_protocol(){
          $occupancy_protocol=HomeContent::where('section_name','occupancy protocol')->get();
          return view('frontend.occupancy_protocol',compact('occupancy_protocol'));
      }
      public function precise_rent_contract(){
          $create_lease=HomeContent::where('section_name','create lease')->first();
          return view('frontend.precise_rent_contract',compact('create_lease'));
      }
      public function digital_lease(){
          $create_lease=HomeContent::where('section_name','create lease')->first();
          return view('frontend.digital_lease',compact('create_lease'));
      }
      public  function  rent_collection(){
          $rent_collection=HomeContent::where('section_name','rent collection')->get();
          return view('frontend.rent_collection',compact('rent_collection'));
      }
      public function rent_guarantee(){
          $rent_guarantee=HomeContent::where('section_name','rent guarantee')->get();
          $questions=Question::All();
          return view('frontend.rent_guarantee',compact('rent_guarantee','questions'));
      }
      public  function privacy_policy(){
        $data=PrivacyCondition::first();
        return view('frontend.privacy-policy',compact('data'));
      }
      public function features(){
        $data=HomeContent::where('section_name','all features')->get();
        return view('frontend.all-features',compact('data'));
      }
      public function front_index(){
      $leases=Lease::where('user_id',auth()->id())->get();
      $active=Lease::where('user_id',auth()->id())->where('complete_status','complete')->count();
      $upcomming=Lease::where('user_id',auth()->id())->where('complete_status',NULL)->count();
      $total_rental_object=RentalObject::where('user_id',auth()->id())->count();

      return view('frontend.front_panel_files.index',compact('leases','active','upcomming','total_rental_object'));
      }
      public function  tenant_index(){
        $data=Tenant::with('lease')->where('user_id',auth()->id())->get();

        return view('frontend.front_panel_files.tenants.index',compact('data'));
      }
    public function term_condition(){
        $data=TermCondition::first();
        return view('frontend.term-condition',compact('data'));
    }
}
