@extends('frontend.frontend_panel.user_panel')
@section('content')
    <input value="{{$data->id}}" type="hidden" id="id">
    <div class="open-lease-pg">
        <h4>Lease agreement with tea tenants test tenants</h4>
        <p><span class="fa fa-home"></span> - <a href="#" class="text-decoration-none font-weight-bold">Your leases
            </a> - <span class="text-muted"> Benveien 4, Hybel</span></p>
        @if($data->tanant_complete_status==NULL)
        <div class="row mx-0 mb-3 px-md-3 py-md-4 px-0 py-3 info-container">
            <div class="col-sm-1">
                <span class="fa fa-info info-icon mx-auto mb-md-0 mb-3"></span>
            </div>
            <div class="col-sm-11">
                <h6>Waiting for tenant.</h6>
                <span class="text-muted">An invitation has been sent to the tenant, and is waiting for the lease to be approved</span>
            </div>
        </div>
        @endif
        <div class="row">
            <div class="col-lg-6">
                <div class="p-3 rounded light-box-shadow">
                    <h6 class="pb-3 mb-4 clearfix top-head-block">About the lease <span class="fa fa-handshake text-success float-right icon-head-block"></span></h6>
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h6 class="mb-0">Status of the lease:</h6>
                        </div>
                        <div class="col-md-6">
                            @if ($data->complete_status=='complete'&&$data->tanant_complete_status==NULL)
                                <span class="p-2 badge badge-success text-white">Tenant invited</span>
                            @elseif($data->complete_status=='complete'&&$data->tanant_complete_status=='complete')
                                <span class="p-2 badge badge-success text-white">Tenant accepted</span>
                                @else
                                <span class="p-2 badge badge-success text-white">Draft</span>
                            @endif

                        </div>
                    </div>
                    <hr>
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h6 class="mb-0">Rent:</h6>
                        </div>
                        <div class="col-md-6">
                            <span>NOK <span>{{$data->rent_per_month}}</span></span>
                        </div>
                    </div>
                    <hr>
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h6 class="mb-0">Deposit:</h6>
                        </div>
                        <div class="col-md-6">
                            <span>NOK <span>{{$data->custom_deposit_amount}}</span></span>
                        </div>
                    </div>
                    <hr>
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h6 class="mb-0">Bank account for rent:</h6>
                        </div>
                        <div class="col-md-6">
                            <p class="mb-1">{{$data->account->account}}</p>
                            <a href="" class="btn btn-bg-white text-decoration-none font-weight-bold" data-toggle="modal" data-target="#bankAccountModel">change</a>
                            <div class="modal fade" id="bankAccountModel" tabindex="-1" role="dialog"
                                 aria-labelledby="bankAccountModelLabel" aria-hidden="true">
                                <div class="modal-dialog modal-md modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="d-flex align-items-center modal-header">
                                            <h6 class="modal-title" id="bankAccountModelLabel">Change account number</h6>
                                            <a class="p-0 btn" class="close" data-dismiss="modal"
                                               aria-label="Close"><span
                                                    class="fa fa-times"></span></a>
                                        </div>
                                        <div class="modal-body">
                                            <div class="rounded p-3 light-box-shadow">
                                                <b class="d-block mb-3">Here you can change the account number the rent is paid to, or add a new one.</b>
                                                <div class="form-group">
                                                    <label for="bankAccountSelect">Account for rent</label>
                                                    <select id="bankAccountSelect" class="form-control">
                                                        <option value=""></option>
                                                       @forelse($account as $my_account)
                                                        <option value="{{$my_account->id}}">{{$my_account->account}}</option>
                                                        @empty
                                                        @endforelse
                                                    </select>
                                                    <span id="accountErr" class="text-danger"></span>
                                                </div>
                                            </div>
                                            <div class="mt-md-4 mt-3 text-right">
                                                <a role="button" id="saveAccount" class="btn btn-bg">Save</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h6 class="mb-0">Due date for rent:</h6>
                        </div>
                        <div class="col-md-6">
                            <p class="mb-1"> {{isset($data->due_date)?$data->due_date:'Update due date'}}</p>
                            <a href="#" class="btn btn-bg-white text-decoration-none font-weight-bold" data-toggle="modal" data-target="#dueDateModal">change</a>
                            <div class="modal fade" id="dueDateModal" tabindex="-1" role="dialog"
                                 aria-labelledby="dueDateModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-md modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="d-flex align-items-center modal-header">
                                            <h6 class="modal-title" id="dueDateModalLabel">Change due date</h6>
                                            <a class="p-0 btn" class="close" data-dismiss="modal"
                                               aria-label="Close"><span
                                                    class="fa fa-times"></span></a>
                                        </div>
                                        <div class="modal-body">
                                            <div class="rounded p-3 light-box-shadow">
                                                <b class="d-block mb-3">Here you can change the due date for the rent.</b>
                                                <div class="form-group">
                                                    <label for="dueDate">Due date <sup
                                                            class="fa fa-question label-fa-question" data-toggle="tooltip"
                                                            data-placement="top"
                                                            title="Select the day of the month the rent is due for payment. The most common is the first of the month."></sup></label>
                                                    <select id="dueDate" class="form-control">
                                                        <option value=""></option>
                                                        <option value="The 1st current month">The 1st current month</option>
                                                        <option value="The 5th of the current month">The 5th of the current month</option>
                                                        <option value="The 10th of the current month">The 10th of the current month</option>
                                                        <option value="The 15th of the current month">The 15th of the current month</option>
                                                        <option value="The 20th of the current month">The 20th of the current month</option>
                                                        <option value="The 25th of the current month">The 25th of the current month</option>
                                                    </select>
                                                    <span id="duedateErr" class="text-danger"></span>
                                                </div>
                                            </div>
                                            <div class="mt-md-4 mt-3 text-right">
                                                <a role="button" id="saveDueDate" class="btn btn-bg">Save</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h6 class="mb-0">Bank account for deposit:</h6>
                        </div>
                        <div class="col-md-6">
                            <span>{{$data->deposit_account}}</span>
                        </div>
                    </div>
                    <hr>
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h6 class="mb-0">Binding time:</h6>
                        </div>
                        <div class="col-md-6">
                            <span>{{isset($data->binding_peroid)?$data->binding_peroid:'No time restraint'}}</span>
                        </div>
                    </div>
                    <hr>
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h6 class="mb-0">Termination period:</h6>
                        </div>
                        <div class="col-md-6">
                            <span>{{$data->termination_peroid}}</span>
                        </div>
                    </div>
                    <hr>
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h6 class="mb-0">Agreement start date:</h6>
                        </div>
                        <div class="col-md-6">
                            <span>{{$data->start_date_of_agreement}}</span>
                        </div>
                    </div>
                    <hr>
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h6 class="mb-0">End date of the agreement:</h6>
                        </div>
                        <div class="col-md-6">
                            <span>{{$data->end_date_of_agreement}}</span>
                        </div>
                    </div>
                    <hr>
{{--                    <a role="button" class="btn btn-bg">Create the lease</a>--}}
                </div>
            </div>
            <div class="col-lg-6">
                <div class="h-100 rounded light-box-shadow">
                    <div class="px-3">
                        <h6 class="py-3 mb-4 top-head-block">Events</h6>
                    </div>
                    <div class="timeline-container">
                        <div class="timeline timeline-one-side">
                            <div class="timeline-block">
                                    <span class="timeline-step">
                                        <span class="fas fa-bell text-white"></span>
                                    </span>
                                <div class="pl-5 timeline-content">
                                    <div class="d-flex justify-content-between">
                                        <h6>Lease agreement created</h6>
                                        <small class="text-muted font-weight-bold">about an hour ago</small>
                                    </div>
                                    <p class="text-muted mb-0">New lease has been created</p>
                                    <small class="text-muted font-weight-bold">21.10.2021</small>
                                </div>
                            </div>
                            <div class="timeline-block">
                                    <span class="timeline-step">
                                        <span class="fas fa-bell text-white"></span>
                                    </span>
                                <div class="pl-5 timeline-content">
                                    <div class="d-flex justify-content-between">
                                        <h6>Lease agreement created</h6>
                                        <small class="text-muted font-weight-bold">about an hour ago</small>
                                    </div>
                                    <p class="text-muted mb-0">New lease has been created</p>
                                    <small class="text-muted font-weight-bold">21.10.2021</small>
                                </div>
                            </div>
                            <div class="timeline-block">
                                    <span class="timeline-step">
                                        <span class="fas fa-bell text-white"></span>
                                    </span>
                                <div class="pl-5 timeline-content">
                                    <div class="d-flex justify-content-between">
                                        <h6>Lease agreement created</h6>
                                        <small class="text-muted font-weight-bold">about an hour ago</small>
                                    </div>
                                    <p class="text-muted mb-0">New lease has been created</p>
                                    <small class="text-muted font-weight-bold">21.10.2021</small>
                                </div>
                            </div>
                            <div class="timeline-block">
                                    <span class="timeline-step">
                                        <span class="fas fa-bell text-white"></span>
                                    </span>
                                <div class="pl-5 timeline-content">
                                    <div class="d-flex justify-content-between">
                                        <h6>Lease agreement created</h6>
                                        <small class="text-muted font-weight-bold">about an hour ago</small>
                                    </div>
                                    <p class="text-muted mb-0">New lease has been created</p>
                                    <small class="text-muted font-weight-bold">21.10.2021</small>
                                </div>
                            </div>
                            <div class="timeline-block">
                                    <span class="timeline-step">
                                        <span class="fas fa-bell text-white"></span>
                                    </span>
                                <div class="pl-5 timeline-content">
                                    <div class="d-flex justify-content-between">
                                        <h6>Lease agreement created</h6>
                                        <small class="text-muted font-weight-bold">about an hour ago</small>
                                    </div>
                                    <p class="text-muted mb-0">New lease has been created</p>
                                    <small class="text-muted font-weight-bold">21.10.2021</small>
                                </div>
                            </div>
                            <div class="timeline-block">
                                    <span class="timeline-step">
                                        <span class="fas fa-bell text-white"></span>
                                    </span>
                                <div class="pl-5 timeline-content">
                                    <div class="d-flex justify-content-between">
                                        <h6>Lease agreement created</h6>
                                        <small class="text-muted font-weight-bold">about an hour ago</small>
                                    </div>
                                    <p class="text-muted mb-0">New lease has been created</p>
                                    <small class="text-muted font-weight-bold">21.10.2021</small>
                                </div>
                            </div>
                            <div class="timeline-block">
                                    <span class="timeline-step">
                                        <span class="fas fa-bell text-white"></span>
                                    </span>
                                <div class="pl-5 timeline-content">
                                    <div class="d-flex justify-content-between">
                                        <h6>Lease agreement created</h6>
                                        <small class="text-muted font-weight-bold">about an hour ago</small>
                                    </div>
                                    <p class="text-muted mb-0">New lease has been created</p>
                                    <small class="text-muted font-weight-bold">21.10.2021</small>
                                </div>
                            </div>
                            <div class="timeline-block">
                                    <span class="timeline-step">
                                        <span class="fas fa-bell text-white"></span>
                                    </span>
                                <div class="pl-5 timeline-content">
                                    <div class="d-flex justify-content-between">
                                        <h6>Lease agreement created</h6>
                                        <small class="text-muted font-weight-bold">about an hour ago</small>
                                    </div>
                                    <p class="text-muted mb-0">New lease has been created</p>
                                    <small class="text-muted font-weight-bold">21.10.2021</small>
                                </div>
                            </div>
                            <div class="timeline-block">
                                    <span class="timeline-step">
                                        <span class="fas fa-bell text-white"></span>
                                    </span>
                                <div class="pl-5 timeline-content">
                                    <div class="d-flex justify-content-between">
                                        <h6>Lease agreement created</h6>
                                        <small class="text-muted font-weight-bold">about an hour ago</small>
                                    </div>
                                    <p class="text-muted mb-0">New lease has been created</p>
                                    <small class="text-muted font-weight-bold">21.10.2021</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-6">
                <div class="p-3 rounded light-box-shadow">
                    <h6 class="pb-3 mb-4 clearfix top-head-block">Tenant info <span class="fa fa-user text-success float-right icon-head-block"></span></h6>
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h6 class="mb-0">Tenant:</h6>
                        </div>
                        <div class="col-md-6">
                            <span>{{isset($data->tenant->first_name)?$data->tenant->first_name:''}}</span>
                        </div>
                    </div>
                    <hr>
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h6 class="mb-0">Email to tenant:</h6>
                        </div>
                        <div class="col-md-6">
                            <span class="text-break">{{isset($data->tenant->email)?$data->tenant->email:''}}</span>
                        </div>
                    </div>
                    <hr>
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h6 class="mb-0">Telephone to tenant:</h6>
                        </div>
                        <div class="col-md-6">
                            <span>{{isset($data->tenant->phone)?$data->tenant->phone:''}}</span>
                        </div>
                    </div>

                    @if($data->tanant_complete_status==NULL)
                        <hr>
                    <a role="button" class="btn btn-bg-white"  data-toggle="modal" data-target="#deleteModel"><span class="fa fa-trash mr-2"></span>Cancel invitation</a>
                    @endif
                    <div class="modal fade del-model" id="deleteModel" tabindex="-1" role="dialog"
                         aria-labelledby="deleteModelLabel" aria-hidden="true">
                        <div class="modal-dialog modal-md modal-dialog-centered">
                            <div class="modal-content">

                                    <div class="d-flex align-items-center modal-header">
                                        <h6 class="modal-title" id="deleteModelLabel">Cancel invitation</h6>
                                        <a class="p-0 btn" class="close" data-dismiss="modal"
                                           aria-label="Close"><span
                                                class="fa fa-times"></span></a>
                                    </div>


                                <div class="modal-body">
                                    <div class="rounded py-5 px-3 light-box-shadow text-center">
                                        <span class="fa fa-bell text-danger" style="font-size: 36px;transform: rotate(16deg)"></span>
                                        <h6 class="my-4">ARE YOU SURE YOU WANT TO CANCEL THIS INVITATION?</h6>
                                        <p class="mb-0">The tenant can then no longer accept the lease, and can not sign the lease.</p>
                                    </div>
                                    <div class="mt-md-4 mt-3 text-right">
                                        <a href="{{url('client/leases/cancel-tenant-invitation',$data->id)}}" role="button" id="deleteNow" class="btn btn-bg">Yes,delete now</a>
                                        <a role="button" class="btn btn-bg-white" data-dismiss="modal">Cancel</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="p-3 rounded light-box-shadow">
                    <h6 class="pb-3 mb-4 clearfix top-head-block">Rental object info <span class="fa fa-home text-success float-right icon-head-block"></span></h6>
                    <div class="col-md-6">
                        <a target="__blank" href="{{ route('view.pdf', ['id' => $data->id]) }}">
                            <img src="{{ asset('public/front_end/images/file-icons/pdf.svg') }}"
                                class="pdf-img" width="30px" />
                            <span>-Rental Lease</span>
                        </a>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h6 class="mb-0">Property:</h6>
                        </div>
                        <div class="col-md-6">
                            <span>{{$data->property->street_name}}</span>
                        </div>
                    </div>
                    <hr>
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h6 class="mb-0">Type of rental object:</h6>
                        </div>
                        <div class="col-md-6">
                            <span>{{$data->rentalObject->rental_object}}</span>
                        </div>
                    </div>
                    <hr>
{{--                    <div class="row align-items-center">--}}
{{--                        <div class="col-md-6">--}}
{{--                            <h6 class="mb-0">Rental object:</h6>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-6">--}}
{{--                            <span>H0101</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <hr>--}}
                    <a href="{{url('client/properties/info-property',$data->property_id)}}" role="button" class="btn btn-bg">Open rental property</a>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('public/front_end/js/jquery-3.5.1.min.js')}}"></script>
    <script>
        $(document).on('click','#saveAccount',function(){
            let account=$( "#bankAccountSelect option:selected" ).val();
            let id=$( "#id" ).val();

            $.ajaxSetup({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
            });
            var csrf =  $("input[name=_token]").val();
            $.ajax({
                url: '{{URL::to('/client/lease/update-account')}}',
                type: 'post',
                data: { 'account_id':account,'id':id },
                success: function(response) {
                    $('#bankAccountModel').modal('hide');
                    toastr.success( response.message);
                },
                error: function (request, status, error) {

                    console.log(request,status,error);
                    let errors = request.responseJSON.errors;
                    $('#accountErr').text(errors['account_id'][0]);
                }
            });
        });
        $(document).on('click','#saveDueDate',function(){
            let dueDate=$( "#dueDate option:selected" ).val();

            let id=$( "#id" ).val();

            $.ajaxSetup({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
            });
            //var csrf =  $("input[name=_token]").val();
            $.ajax({
                url: '{{URL::to('/client/lease/update-duedate')}}',
                type: 'post',
                data: { 'dueDate':dueDate,'id':id },
                success: function(response) {
                    $('#dueDateModal').modal('hide');
                    toastr.success( response.message);
                },
                error: function (request, status, error) {

                    console.log(request,status,error);
                    let errors = request.responseJSON.errors;
                    $('#duedateErr').text(errors['account_id'][0]);
                }
            });
        });

    </script>
@endsection

