@extends('frontend.frontend_panel.user_panel')
@section('content')

    <div class="dashboard-front-pg">
        <h4>front page</h4>
        <p><span class="fa fa-home"></span> - <span class="text-muted">Main overview</span></p>
{{--        <div class="row mx-0 mb-3 px-md-3 py-md-4 px-0 py-3 info-container">--}}
{{--            <div class="col-sm-1">--}}

        {{--                <span class="fa fa-info info-icon mx-auto mb-md-0 mb-3"></span>--}}
{{--            </div>--}}
{{--            <div class="col-sm-7">--}}
{{--                <h6>Documents ready for signing!</h6>--}}
{{--                <span class="text-muted">Precise Rental Lease</span>--}}
{{--            </div>--}}
{{--            <div class="col-sm-4 mt-md-0 mt-3 d-flex align-items-center">--}}
{{--                <a role="button" class="w-100 btn btn-bg">Sign now</a>--}}
{{--            </div>--}}
{{--        </div>--}}
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-3">
                <div class="p-3 rounded light-box-shadow total-block-section">
                    <div class="pb-3 mb-3 d-flex justify-content-between top-head-block">
                        <h6 class="mb-0">Rental income this month</h6>
                        <span class="fa fa-money-bill-wave ml-3 green-text"></span>
                    </div>
                    <div class="row mx-0 below-head-block">
                        <b class="col-md-9 col-8 pl-0">Total leiesum:</b>
                        <span class="col-md-3 col-4 px-0">kr <span>0</span></span>
                    </div>
                    <div class="row mx-0 below-head-block">
                        <b class="col-md-9 col-8 pl-0">Total invoiced:</b>
                        <span class="col-md-3 col-4 px-0">kr <span>0</span></span>
                    </div>
                    <div class="row mx-0 below-head-block">
                        <b class="col-md-9 col-8 pl-0">Total paid:</b>
                        <span class="col-md-3 col-4 px-0">kr <span>0</span></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-3">
                <div class="p-3 rounded light-box-shadow total-block-section">
                    <div class="pb-3 mb-3 d-flex justify-content-between top-head-block">
                        <h6 class="mb-0">Outstanding this month</h6>
                        <span class="fa fa-coins ml-3 green-text"></span>
                    </div>
                    <div class="row mx-0 below-head-block">
                        <b class="col-md-9 col-8 pl-0">Not invoiced:</b>
                        <span class="col-md-3 col-4 px-0">kr <span>0</span></span>
                    </div>
                    <div class="row mx-0 below-head-block">
                        <b class="col-md-9 col-8 pl-0">Total outstanding:</b>
                        <span class="col-md-3 col-4 px-0">kr <span>0</span></span>
                    </div>
                    <div class="row mx-0 below-head-block">
                        <b class="col-md-9 col-8 pl-0">Overdue:</b>
                        <span class="col-md-3 col-4 px-0">kr <span>0</span></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-3">
                <div class="p-3 rounded light-box-shadow total-block-section">
                    <div class="pb-3 mb-3 d-flex justify-content-between top-head-block">
                        <h6 class="mb-0">Leases</h6>
                        <span class="fa fa-handshake ml-3 green-text"></span>
                    </div>
                    <div class="row mx-0 below-head-block">
                        <b class="col-md-9 col-8 pl-0">Quantity:</b>
                        <span class="col-md-3 col-4 px-0"><span>{{count($leases)}}</span></span>
                    </div>
                    <div class="row mx-0 below-head-block">
                        <b class="col-md-9 col-8 pl-0">Active:</b>
                        <span class="col-md-3 col-4 px-0"><span>{{$active}}</span></span>
                    </div>
                    <div class="row mx-0 below-head-block">
                        <b class="col-md-9 col-8 pl-0">Upcoming:</b>
                        <span class="col-md-3 col-4 px-0"><span>{{$upcomming}}</span></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-3">
                <div class="p-3 rounded light-box-shadow total-block-section">
                    <div class="pb-3 mb-3 d-flex justify-content-between top-head-block">
                        <h6 class="mb-0">Rental properties</h6>
                        <span class="fa fa-home ml-3 green-text"></span>
                    </div>
                    <div class="row mx-0 below-head-block">
                        <b class="col-md-9 col-8 pl-0">Quantity:</b>
                        <span class="col-md-3 col-4 px-0"> <span>{{$total_rental_object}}</span></span>
                    </div>
                    <div class="row mx-0 below-head-block">
                        <b class="col-md-9 col-8 pl-0">Rented status:</b>
                        <span class="col-md-3 col-4 px-0">kr <span>3/3</span></span>
                    </div>
                    <div class="mt-3 progress">
                        <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-3">
                <div class="p-3 text-decoration-none rounded light-box-shadow d-flex flex-column justify-content-center align-items-center total-block-section">
                    <b>Create simple lease</b>
                    <span class="small font-weight-bold green-text">FOR FREE</span>
                    <a href="{{url('client/leases')}}" role="button" class="my-3 btn btn-bg">Simple lease</a>
                    <a class="font-weight-bold text-decoration-none small" href="{{url('client/digital-lease')}}">Digital Lease</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-3">
                <a href="{{url('client/leases')}}" class="p-3 text-decoration-none rounded light-box-shadow d-flex flex-column justify-content-center align-items-
center total-block-section">

                <span class="fa fa-handshake text-center lg-block-icon"></span>
                    <p class="text-center mb-0 p-text">Register an existing lease</p>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 mb-3">
                <a href="{{url('client/properties/create-rental-object')}}" class="p-3 text-decoration-none rounded light-box-shadow d-flex flex-column justify-content-center align-items-center total-block-section">
                    <span class="fa fa-building lg-block-icon"></span>
                    <p class="text-center mb-0 p-text">Add property or rental property</p>
                </a>
            </div>
        </div>
        <div class="mt-4 row">
            <div class="col-lg-6 mb-lg-0 mb-4">
                <div class="p-3 rounded light-box-shadow follow-up-section-block">
                    <h6 class="pb-3 mb-4 top-head-block">Follow up</h6>

                    @forelse($leases as $lease)
                    <div class="p-sm-4 p-3 d-flex justify-content-between rounded light-box-shadow follow-up-section-inner">
                        <div class="icon-ellipse">
                            <span class="fa fa-handshake text-white"></span>
                        </div>

                        <div class="follow-up-inner-center-section">
                            <h6 class="mb-3 text-sm-left text-center">Started lease {{$lease->property->street_name}}</h6>
                            <div class="text-center">
                                <a href="{{url('client/lease-edit',$lease->id)}}" role="button" class="btn btn-bg"><span class="fa fa-edit mr-2"></span>Edit</a>
                                <a role="button" data-id="{{$lease->id}}" class="btn btn-bg-white" id="deleteLease"  ><span class="fa fa-trash-alt mr-2"></span>Delete</a>
                                <div class="modal fade del-model" id="deleteModel" tabindex="-1" role="dialog"
                                     aria-labelledby="deleteModelLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-md modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="d-flex align-items-center modal-header">
                                                <h6 class="modal-title" id="deleteModelLabel">Create new
                                                    property</h6>
                                                <a class="p-0 btn" class="close" data-dismiss="modal"
                                                   aria-label="Close"><span
                                                        class="fa fa-times"></span></a>
                                            </div>
                                            <div class="modal-body">
                                                <div class="rounded py-5 px-3 light-box-shadow">
                                                    <span class="fa fa-bell text-danger" style="font-size: 36px;transform: rotate(16deg)"></span>
                                                    <h6 class="my-4">ARE YOU SURE YOU WANT TO DELETE THE LEASE?</h6>
                                                    <p class="mb-0">The lease will then be canceled and can not be restored!</p>
                                                </div>
                                                <div class="mt-md-4 mt-3 text-right">
                                                    <a href="" id="deleteNow" role="button" class="btn btn-bg">Yes, delete now</a>
                                                    <a role="button" class="btn btn-bg-white" data-dismiss="modal">Cancel</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <small class="text-muted font-weight-bold">27.09.2021</small>
                            <small class="text-muted font-weight-bold">Draft</small>
                        </div>
                    </div>
                    @empty
                    @endforelse
                </div>
            </div>

            <div class="col-lg-6">
                <div class="p-3 rounded light-box-shadow follow-up-section-block">
                    <h6 class="pb-3 mb-4 top-head-block">Events</h6>
                    <div class="timeline timeline-one-side">
                        @if(!$leases->isEmpty())

                        @if ($leases[count($leases)-1]->complete_status=='complete')

                            <div class="timeline-block">
                            <span class="timeline-step">
                                <span class="fas fa-bell text-white"></span>
                            </span>
                                <div class="pl-5 timeline-content">
                                    <div class="d-flex justify-content-between">
                                        <h6>Invitation created</h6>
                                        <small class="text-muted font-weight-bold">{{$leases[count($leases)-1]->tenant->created_at->diffForHumans()}} </small>
                                    </div>
                                    <p class="text-muted mb-0">Invitation to lease for {{$leases[count($leases)-1]->tenant->first_name}} has been created</p>
                                    <small class="text-muted font-weight-bold">{{$leases[count($leases)-1]->tenant->created_at->toDateString()}}</small>
                                </div>
                            </div>
                        @endif

                            @if ($leases[count($leases)-1]->complete_status=='complete')
                        <div class="timeline-block">
                            <span class="timeline-step">
                                <span class="fas fa-bell text-white"></span>
                            </span>
                            <div class="pl-5 timeline-content">
                                <div class="d-flex justify-content-between">
                                    <h6>Tenant added</h6>
                                    <small class="text-muted font-weight-bold">{{$leases[count($leases)-1]->tenant->created_at->diffForHumans()}}</small>
                                </div>
                                <p class="text-muted mb-0">Tenant {{$leases[count($leases)-1]->tenant->first_name}} has been added to lease</p>
                                <small class="text-muted font-weight-bold">{{$leases[count($leases)-1]->tenant->created_at->toDateString()}}</small>
                            </div>
                        </div>
                        @endif
                        @if ($leases[count($leases)-1]->complete_status=='complete')
                                <div class="timeline-block">
                            <span class="timeline-step">
                                <span class="fas fa-bell text-white"></span>
                            </span>
                                    <div class="pl-5 timeline-content">
                                        <div class="d-flex justify-content-between">
                                            <h6>Invitation to the lease hase been sent</h6>
                                            <small class="text-muted font-weight-bold">{{$leases[count($leases)-1]->updated_at->diffForHumans()}}</small>
                                        </div>
                                        <p class="text-muted mb-0">Invitation to {{$leases[count($leases)-1]->tenant->first_name}} has been sent by email</p>
                                        <small class="text-muted font-weight-bold">{{$leases[count($leases)-1]->updated_at->toDateString()}}</small>
                                    </div>
                                </div>
                            @endif
                            @if ($leases[count($leases)-1]->tanant_complete_status=='complete')
                                <div class="timeline-block">
                            <span class="timeline-step">
                                <span class="fas fa-bell text-white"></span>
                            </span>
                                    <div class="pl-5 timeline-content">
                                        <div class="d-flex justify-content-between">
                                            <h6>Invitation is open</h6>
                                            <small class="text-muted font-weight-bold">{{$leases[count($leases)-1]->updated_at->diffForHumans()}}</small>
                                        </div>
                                        <p class="text-muted mb-0">Invitation is opened by tenant {{$leases[count($leases)-1]->tenant->first_name}}</p>
                                        <small class="text-muted font-weight-bold">{{$leases[count($leases)-1]->updated_at->toDateString()}}</small>
                                    </div>
                                </div>
                            @endif
                        @if ($leases[count($leases)-1]->tanant_complete_status=='complete')
                        <div class="timeline-block">
                            <span class="timeline-step">
                                <span class="fas fa-bell text-white"></span>
                            </span>

                            <div class="pl-5 timeline-content">
                                <div class="d-flex justify-content-between">
                                    <h6>Invitation accepted</h6>
                                    <small class="text-muted font-weight-bold">{{$leases[count($leases)-1]->updated_at->diffForHumans()}}</small>
                                </div>
                                <p class="text-muted mb-0">Invitation to the lease is accepted by {{$leases[count($leases)-1]->tenant->first_name}} </p>
                                <small class="text-muted font-weight-bold">{{$leases[count($leases)-1]->updated_at->toDateString()}}</small>
                            </div>

                        </div>
                        @endif
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
