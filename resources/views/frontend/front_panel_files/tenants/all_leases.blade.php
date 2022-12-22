@extends('frontend.frontend_panel.user_panel')
@section('content')
    <h4>All leases</h4>
    {{--    {{$data}}--}}
    <p><span class="fa fa-home"></span> - <span class="text-muted"> Your leases</span></p>
    @forelse($data as $leases)
        <div class="mx-auto p-lg-4 p-3 rounded light-box-shadow all-leases-container">
            <div class="all-leases-container-inner">
                <div class="row mx-0 rounded light-box-shadow">
                    <div class="col-lg-3 p-3 text-center all-leases-first-block">
                        @if($leases->lease->tanant_complete_status=="complete")

                            <h6 class="mb-2 text-white lease-name"><span class="fas fa-history text-white mr-2"></span>Finished</h6>
                        @else
                            <h6 class="mb-2 text-white lease-name"><span class="fas fa-history text-white mr-2"></span>Waiting for
                                tenant</h6>
                        @endif

                        <p class="mb-2 text-white lease-name">{{$leases->lease->property->street_name}}</p>
                        <p class="text-white mb-0 lease-name">{{$leases->lease->rentalObject->appartment_number}}</p>
                    </div>
                    <div class="col-lg-9 row mx-0 pt-3">
                        <div class="col-md-4 px-lg-3 px-0 pb-lg-0 pb-3">
                            <h6>Landlord:</h6>
                            <p class="mb-0">{{$leases->lease->user->name}}</p>
                        </div>
                        <div class="col-md-4 px-lg-3 px-0 pb-lg-0 pb-3">
                            <h6>Rent:</h6>
                            <p class="mb-0">kr {{$leases->lease->rent_per_month}}</p>
                        </div>
                        <div class="col-md-4 px-lg-3 px-0 pb-lg-0 pb-3">
                            <h6>Rental period:</h6>
                            <p class="mb-0">{{$leases->lease->start_date_of_agreement}} - {{$leases->lease->end_date_of_agreement}}</p>
                        </div>
                        <div class="w-100 my-3 d-flex flex-wrap justify-content-lg-around justify-content-sm-end justify-content-center leases-btns-block">
                            @if($leases->lease->tanant_complete_status=="complete")
                                <a href="" role="button" class="btn btn-bg">Sign the lease</a>

                            @else
                                <a href="{{url('tenant/open-lease',$leases->lease->id)}}" role="button" class="btn btn-bg">Open the Lease</a>
                            @endif
                            <div>
                                <a href="{{url('tenant/chat/'.$leases->lease->user_id)}}">Message</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @empty
    @endforelse
@endsection
