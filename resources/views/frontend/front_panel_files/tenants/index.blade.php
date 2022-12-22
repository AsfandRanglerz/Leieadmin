@extends('frontend.frontend_panel.user_panel')
@section('content')

    <div class="dashboard-front-pg">
        <h4>front page</h4>
        <p><span class="fa fa-home"></span> - <span class="text-muted">Main overview</span></p>
        @forelse($data as $lease)

            @if($lease->tanant_complete_status=='complete')
        <div class="row mx-0 mb-3 px-md-3 py-md-4 px-0 py-3 info-container">
            <div class="col-sm-1">
                <span class="fa fa-info info-icon mx-auto mb-md-0 mb-3"></span>
            </div>
            <div class="col-sm-7">
                <h6>Documents ready for signing!</h6>
                <span class="text-muted">Precise Rental Lease</span>
            </div>
            <div class="col-sm-4 mt-md-0 mt-3 d-flex align-items-center">
                <a href="" role="button" class="w-100 btn btn-bg">Sign now</a>
            </div>
        </div>
            @endif
        @empty

        @endforelse
        @forelse($data as $leases)

        <div class="row">
            <div class="col-lg-3 col-md-6 mb-3">
                <div class="p-3 rounded light-box-shadow total-block-section">
                    <div class="pb-3 mb-3 d-flex justify-content-between top-head-block">
                        <h6 class="mb-0">Deposit</h6>
                        <span class="fa fa-money-bill-wave ml-3 green-text"></span>
                    </div>
                    <div class="row mx-0 below-head-block">
                        <span class="col-md-12 col-12 px-0 text-center">kr <span>{{isset($leases->lease->payment_for_first_rent)?$leases->lease->payment_for_first_rent:''}}</span></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-3">
                <div class="p-3 rounded light-box-shadow total-block-section">
                    <div class="pb-3 mb-3 d-flex justify-content-between top-head-block">
                        <h6 class="mb-0">Next rent</h6>
                        <span class="fa fa-coins ml-3 green-text"></span>
                    </div>
                    <div class="row mx-0 below-head-block">
                        <span class="col-md-12 col-12 px-0 text-center">kr <span>{{isset($leases->lease->rent_per_month)?$leases->lease->rent_per_month:''}}</span></span>

                    </div>


                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-3">
                <div class="p-3 rounded light-box-shadow total-block-section">
                    <div class="pb-3 mb-3 d-flex justify-content-between top-head-block">
                        <h6 class="mb-0">Landlord</h6>
                        <span class="fa fa-handshake ml-3 green-text"></span>
                    </div>
                    <div class="row mx-0 below-head-block">
                        <b class="col-md-6 col-6 pl-0">Name:</b>
                        <span class="col-md-6 col-6 px-0 ">{{isset($leases->lease->user->name)?$leases->lease->user->name:''}}</span>
                    </div>
                    <div class="row mx-0 below-head-block">
                        <b class="col-md-6 col-6 pl-0">Phone:</b>
                        <span class="col-md-6 col-6 px-0 break-word">{{isset($leases->lease->user->phone)?$leases->lease->user->phone:''}}</span>
                    </div>

                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-3">
                <div class="p-3 rounded light-box-shadow total-block-section">
                    <div class="pb-3 mb-3 d-flex justify-content-between top-head-block">
                        <h6 class="mb-0">Property</h6>
                        <span class="fa fa-home ml-3 green-text"></span>
                    </div>
                    <div class="row mx-0 below-head-block">
                        <b class="col-md-6 col-6 pl-0">Property:</b>
                        <span class="col-md-6 col-6 px-0 ">{{isset($leases->lease->property->street_name)?$leases->lease->property->street_name:''}}</span>
                    </div>
                    <div class="row mx-0 below-head-block">
                        <b class="col-md-6 col-6 pl-0">Street:</b>
                        <span class="col-md-6 col-6 px-0 ">{{isset($leases->lease->property->street_number)?$leases->lease->property->street_number:''}}</span>
                    </div>
                    <div class="mt-4">
                        <a href="{{url('tenant/open-lease',isset($leases->lease->id)?$leases->lease->id:'')}}" role="button" class="w-100 btn btn-bg">See the lease</a>
                    </div>
                </div>
            </div>



        </div>
        @empty

        @endforelse
        <div class="mt-4 row">

            <div class="col-lg-6">
                <div class="p-3 rounded light-box-shadow follow-up-section-block">
                    <h6 class="pb-3 mb-4 top-head-block">Events</h6>
                    <div class="timeline timeline-one-side">

                      @if(count($data)>0)

                        <div class="timeline-block">
                            <span class="timeline-step">
                                <span class="fas fa-bell text-white"></span>
                            </span>
                            <div class="pl-5 timeline-content">
                                <div class="d-flex justify-content-between">
                                    <h6>Lease created</h6>
                                    <small class="text-muted font-weight-bold">{{isset($data[count($data)-1]->lease->created_at)?$data[count($data)-1]->lease->created_at->diffForHumans():''}}</small>
                                </div>
                                <p class="text-muted mb-0">Lease has been created by landlord {{isset($data[count($data)-1]->lease->user->name)?$data[count($data)-1]->lease->user->name:''}}</p>
                                <small class="text-muted font-weight-bold">{{isset($data[count($data)-1]->lease->created_at)?$data[count($data)-1]->lease->created_at->toDateString():''}}</small>
                            </div>
                        </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $(document).on('click','#deleteLease',function (){

            let id=$(this).data("id");
            $('#deleteNow').attr('href', 'lease-delete/'+id);
            $('#deleteModel').modal('show');

        });
    </script>
@endsection
