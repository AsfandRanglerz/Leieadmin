@extends('frontend.frontend_panel.user_panel')
@section('content')

    <h4>Info about rental property</h4>
    <p><span class="fa fa-home"></span> - <a href="#" class="text-decoration-none font-weight-bold">Your properties</a> - <a href="#" class="text-decoration-none font-weight-bold">{{$data->property->property_name}}</a>  - <span class="text-muted"> {{$data->name}}</span></p>
    <div class="row mb-4">
        <div class="col-lg-7 mb-lg-0 mb-4">
            <div class="rounded p-lg-4 p-3 light-box-shadow">
                <h6 class="mb-4">Rental object: <b>Rental Name</b></h6>
                <form action="{{url('client/properties/rental-update')}}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{$data->id}}">
                    <div class="form-group">
                        <label>Name</label>
                        <input class="form-control" name="name" value="{{$data->name}}" placeholder="Name" />
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" name="description" placeholder="Description">{{$data->description}}</textarea>
                        <small>Here you can create a description of your rental property. This is automatically retrieved if you want to create an ad</small>
                    </div>
                    <div align="right">
                        <button  class="btn btn-bg">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="rounded  p-lg-4 p-3 light-box-shadow">
                <h6 class="mb-4">Info</h6>
                <div class="row">
                    <div class="col-md-6">
                        <h6>Housing type</h6>
                        <p>{{$data->rental_object}}</p>
                    </div>
                    <div class="col-md-6">
                        <h6>Apartment number</h6>
                        <p>{{$data->appartment_number}}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h6>Property Number</h6>
                        <p>{{$data->property->street_number}}</p>
                    </div>
                    <div class="col-md-6">
                        <h6>Number of rooms</h6>
                        <p>{{$data->total_rooms}}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h6>Number of bedrooms</h6>
                        <p>{{$data->number_of_bedrooms}}</p>
                    </div>
                    <div class="col-md-6">
                        <h6>Property</h6>
                        <p>{{$data->property_name}}</p>
                    </div>
                </div>
                <div align="right">
                    <a role="button" class="btn btn-bg-white" data-toggle="modal" data-target="#editRentalObjModal"><span class="fa fa-edit mr-2"></span>Edit</a>
                </div>
                <div class="modal fade" id="editRentalObjModal" tabindex="-1" role="dialog"
                     aria-labelledby="editRentalObjModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="d-flex align-items-center modal-header">
                                <h6 class="modal-title" id="editRentalObjModalLabel">Change rental
                                    object</h6>
                                <a class="p-0 btn" class="close" data-dismiss="modal"
                                   aria-label="Close"><span
                                        class="fa fa-times"></span></a>
                            </div>
                            <div class="modal-body">
                                @include('frontend.front_panel_files.common.edit_rental_block')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if(isset($data->lease->id))
    <div class="mx-auto p-lg-4 p-3 rounded light-box-shadow all-leases-container">
        <div class="all-leases-container-inner">
            <div class="row mx-0 rounded light-box-shadow">
                <div class="col-lg-3 p-3 text-center all-leases-first-block">
                    <h6 class="mb-2 text-white lease-name"><span class="fas fa-history text-white mr-2"></span>Waiting for
                        tenant</h6>
                    <p class="mb-2 text-white lease-name">{{$data->property->street_name}}</p>
                    <p class="text-white mb-0 lease-name">{{$data->rental_object}}</p>
                </div>
                <div class="col-lg-9 row mx-0 pt-3">
                    <div class="col-md-4 px-lg-3 px-0 pb-lg-0 pb-3">
                        <h6>Tenant:</h6>

                        <p class="mb-0">{{isset($data->lease->tenant->first_name)? $data->lease->tenant->first_name :''}}</p>
                    </div>
                    <div class="col-md-4 px-lg-3 px-0 pb-lg-0 pb-3">
                        <h6>Rent:</h6>
                        <p class="mb-0">kr {{isset($data->lease->rent_per_month)?$data->lease->rent_per_month:''}}</p>
                    </div>
                    <div class="col-md-4 px-lg-3 px-0 pb-lg-0 pb-3">
                        <h6>Rental period:</h6>
                        <p class="mb-0">{{isset($data->lease->start_date_of_agreement)? $data->lease->start_date_of_agreement:''}} - {{isset($data->lease->end_date_of_agreement)? $data->lease->end_date_of_agreement:''}}</p>
                    </div>
                    <div class="w-100 my-3 d-flex flex-wrap justify-content-lg-around justify-content-sm-end justify-content-center leases-btns-block">
                        <a href="{{url('client/leases/open-lease',$data->lease->id)}}" role="button" class="btn btn-bg">Open the Lease</a>

                        <a  role="button" data-id="{{isset($data->lease->id)?$data->lease->id:''}}"  id="deleteLease" class="btn btn-bg-white"><span class="fa fa-trash-alt mr-2"></span>Delete</a>


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
@endif
@endsection
@section('js')
    <script>
        $(document).on('click','#deleteLease',function (){
            let id=$(this).data("id");
            $('#deleteNow').attr('href', 'lease-delete/'+id);
            $('#deleteModel').modal('show');

        });
    </script>
    <script>
        function editRecord(){

            let property_number=$('#editpropNo').val();
            let appartment_number=$('#editapartNo').val();
            let room_and_other=$('#editroom_and_other').val();
            let Bid_number=$('#editBid_number').val();
            let size_useable_area=$('#editsize_useable_area').val();
            let number_of_parking_other=$('#editnumber_of_parking_other').val();
            let number_of_keys_in_parking_space=$('#editnumber_of_keys_in_parking_space').val();
            let number_of_parking=$('#editnumber_of_parking').val();
            let number_of_bathrooms=$('#editnumber_of_bathrooms').val();
            let number_of_bedrooms=$('#editnumber_of_bedrooms').val();

            let number_of_kitchen=$('#editnumber_of_kitchen').val();
            let number_of_stalls=$('#editnumber_of_stalls').val();
            let share_bethroom_people=$('#editshare_bethroom_people').val();
            let share_kitchen_people=$('#editshare_kitchen_people').val();
            let share_living_room_common_area_people=$('#editshare_kitchen_people').val();
            let size_m2_room=$('#editsize_m2_room').val();
            let story=$('#editstory').val();
            let total_rooms=$('#edittotal_rooms').val();
            let internet=$('#editinternetIncl').val();
            let cable=$('#edittvIncluded').val();

            let smoking=$('#editsmokeIncl').val();
            let pets=$('#editpetsAllow').val();
            let house_role=$('#edithouse_role').val();
            let furnishing=$('input[name="editfurnishing"]:checked').val();
            let electricity_heating=$('input[name="editelectricity_heating"]:checked').val();
            let water_wastewater=$('input[name="editwater_wastewater"]:checked').val();

            let name=$('#editname').val();
            let description=$('#editdescription').val();
            let editId=$('#editId').val();
            $.ajaxSetup({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
            });
            var csrf =  $("input[name=_token]").val();
            $.ajax({
                url: '{{URL::to('/client/edit-rentalObject')}}',
                type: 'post',
                data: { 'property_number':property_number,'appartment_number':appartment_number,'room_and_other':room_and_other,'Bid_number':Bid_number,'size_useable_area':size_useable_area,'number_of_parking_other':number_of_parking_other,'number_of_keys_in_parking_space':number_of_keys_in_parking_space,'number_of_parking':number_of_parking,'number_of_bathrooms':number_of_bathrooms,'number_of_bedrooms':number_of_bedrooms ,'number_of_kitchen':number_of_kitchen,'number_of_stalls':number_of_stalls,'share_bethroom_people':share_bethroom_people,'share_kitchen_people':share_kitchen_people,'share_living_room_common_area_people':share_living_room_common_area_people,'size_m2_room':size_m2_room,'story':story,'total_rooms':total_rooms,'internet':internet,'cable':cable,'smoking':smoking,'pets':pets,'house_role':house_role,'furnishing':furnishing,'electricity_heating':electricity_heating,'water_wastewater':water_wastewater,'name':name,'description':description,'editId':editId },
                success: function(response)
                {
                    $('#editRentalObjModal').modal('hide');
                    toastr.success( response.message);

                }
            });


        }
    </script>


@endsection
