@forelse($data as $lease)
<div class="mx-auto p-lg-4 p-3 rounded light-box-shadow all-leases-container">
    <div class="all-leases-container-inner">
        <div class="row mx-0 rounded light-box-shadow">
            <div class="col-lg-3 p-3 text-center all-leases-first-block">
                @if($lease->complete_status=="complete")
                <h6 class="mb-2 text-white lease-name"><span class="fas fa-history text-white mr-2"></span>Waiting for
                    tenant</h6>
                @else
                    <h6 class="mb-2 text-white lease-name"><span class="fas fa-history text-white mr-2"></span>Draft</h6>
                @endif

                <p class="mb-2 text-white lease-name">{{$lease->property->street_name}}</p>
                <p class="text-white mb-0 lease-name">{{$lease->rentalObject->appartment_number}}</p>
            </div>
            <div class="col-lg-9 row mx-0 pt-3">
                <div class="col-md-4 px-lg-3 px-0 pb-lg-0 pb-3">
                    <h6>Tenant:</h6>
                    <p class="mb-0">{{isset($lease->tenant->first_name)?$lease->tenant->first_name:''}}</p>
                </div>
                <div class="col-md-4 px-lg-3 px-0 pb-lg-0 pb-3">
                    <h6>Rent:</h6>
                    <p class="mb-0">kr {{$lease->rent_per_month}}</p>
                </div>
                <div class="col-md-4 px-lg-3 px-0 pb-lg-0 pb-3">
                    <h6>Rental period:</h6>
                    <p class="mb-0">{{$lease->start_date_of_agreement}} - {{$lease->end_date_of_agreement}}</p>
                </div>
                <div class="w-100 my-3 d-flex flex-wrap justify-content-lg-around justify-content-sm-end justify-content-center leases-btns-block">
                    @if($lease->complete_status=="complete")
                    <a href="{{url('client/leases/open-lease',$lease->id)}}" role="button" class="btn btn-bg">Open the Lease</a>
                    @else
                        <a href="{{url('client/lease-edit',$lease->id)}}" role="button" class="btn btn-bg">Continue for filling</a>
                    @endif

                    <a role="button" data-id="{{$lease->id}}"  id="deleteLease" class="btn btn-bg-white"><span class="fa fa-trash-alt mr-2"></span>Delete</a>

                    <!-- On click delete button, this model appears -->
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
                                    <div class="rounded py-5 px-3 light-box-shadow text-center">
                                        <span class="fa fa-bell text-danger" style="font-size: 36px;transform: rotate(16deg)"></span>
                                        <h6 class="my-4">ARE YOU SURE YOU WANT TO DELETE THE RENTAL PROPERTY?</h6>
                                        <p class="mb-0">The rental object will then be deleted and can not be restored!</p>
                                    </div>
                                    <div class="mt-md-4 mt-3 text-right">
                                        <a role="button" id="deleteNow" class="btn btn-bg">Yes, delete now</a>
                                        <a role="button" class="btn btn-bg-white" data-dismiss="modal">Cancel</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@empty
@endforelse
@section('js')
    <script>
        $(document).on('click','#deleteLease',function (){

            let id=$(this).data("id");
            $('#deleteNow').attr('href', 'lease-delete/'+id);
            $('#deleteModel').modal('show');

        });
    </script>
@endsection
