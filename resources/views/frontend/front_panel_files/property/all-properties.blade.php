@extends('frontend.frontend_panel.user_panel')
@section('content')
    <h4>Your properties</h4>
    <p><span class="fa fa-home"></span> - <span class="text-muted"> Your properties</span></p>
    <div class="mx-auto p-lg-4 p-3 rounded light-box-shadow">
       @forelse($data as $property)
        <div class="properties-container">
            <div class="row mx-0 rounded light-box-shadow all-prop-block">
                <div class="col-lg-3 p-3 all-prop-block-inner">
                    <span class="text-white prop-name">{{$property->street_name}}</span>
                </div>
                <div class="col-lg-3 text-lg-center p-3 pb-lg-3 pb-md-0">
                    <h6>Address</h6>
                    <p class="mb-0">{{$property->city.','.$property->street_number}}</p>
                </div>
                <div class="col-lg-3 text-lg-center p-3 pb-lg-3 pb-md-0">
                    <h6>Number of rental properties</h6>
                    <p class="mb-0">{{$property->rental_object_count}}</p>
                </div>
                <div class="col-lg-3 text-center p-3">
                    <a href="{{url('client/properties/info-property',$property->id)}}" class="btn btn-bg">Open the property</a>
                </div>
            </div>
        </div>
        @empty
        @endforelse


    </div>
@endsection
