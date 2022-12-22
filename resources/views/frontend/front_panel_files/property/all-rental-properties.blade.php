@extends('frontend.frontend_panel.user_panel')
@section('content')

    <h4>Your rental properties</h4>
    <p><span class="fa fa-home"></span> - <span class="text-muted"> Your rental properties</span></p>
    <div class="mx-auto p-lg-4 p-3 rounded light-box-shadow">
       @forelse($data as $rentalobject)
        <div class="properties-container">
            <div class="row mx-0 rounded light-box-shadow all-prop-block">
                <div class="col-lg-3 p-3 all-prop-block-inner">
                    <span class="text-white prop-name">{{$rentalobject->name}}</span>

                </div>
                <div class="col-lg-3 text-lg-center p-3 pb-lg-3 pb-md-0">
                    <h6>Address</h6>
                    <p class="mb-0">{{$rentalobject->property->city.','.$rentalobject->property->street_name}}</p>
                </div>
                <div class="col-lg-3 text-lg-center p-3 pb-lg-3 pb-md-0">
                    <h6>Type of Object</h6>
                    <p class="mb-0">{{$rentalobject->rental_object}}</p>
                </div>
                <div class="col-lg-3 text-center p-3">
                    <a href="{{url('client/properties/info-rental-property',$rentalobject->id)}}" class="btn btn-bg">Open object</a>
                </div>
            </div>
        </div>
        @empty
        @endforelse


    </div>
@endsection
