@extends('frontend.frontend_panel.user_panel')
@section('content')

    <div class="property-pg">
        <h4>Add new property</h4>
        <p><span class="fa fa-home"></span> - <a href="#" class="text-decoration-none font-weight-bold">Your
                properties</a> - <span class="text-muted">Create new property</span></p>
        <div class="rounded light-box-shadow">
            <div class="col-lg-10 mx-auto py-lg-5 py-md-4 py-3">
                <h5 class="text-center">Create new rental object</h5>
                <p class="text-center">Please use the form below to create a new rental property.</p>
                <div class="mt-3">
                    <form id="submit_form" action="{{url('/client/rental-object-store')}}" method="post">
                                               @csrf

                    <h6>Property</h6>
                    <div class="form-group">
                        <label for="selectProp">Select property <sup
                                class="fa fa-question label-fa-question" data-toggle="tooltip" data-placement="top"
                                title="Here you choose which property applies to the lease"></sup></label>
                        <select name="property_id" class="form-control single-select-dropdown" id="selectProp">
                            <option value=""></option>
                            @forelse($data as $property)
                                <option value="{{$property->id}}">{{$property->street_name}}</option>
                            @empty
                            @endforelse
                        </select>
                        @error('property_id') <span
                            class="text-danger">{{$errors->first('property_id')}}</span> @enderror
                    </div>
                    <div class="mb-5">
                        <a class="btn btn-bg-white " data-toggle="modal" data-target="#createPropModal"><span
                                class="fa fa-plus mr-2"></span>Create new property</a>

                        <div class="modal fade" id="createPropModal" tabindex="-1" role="dialog"
                             aria-labelledby="createPropModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="d-flex align-items-center modal-header">
                                        <h6 class="modal-title" id="createPropModalLabel">Create new property</h6>
                                        <a class="p-0 btn" class="close" data-dismiss="modal" aria-label="Close"><span
                                                class="fa fa-times"></span></a>
                                    </div>
                                    <div class="modal-body" id="append_id">

                                            <input type="hidden" name="check_return_pages" value="1">
                                            @include('frontend.front_panel_files.common.create_property_block')
                                            <div class="mt-md-4 mt-3 text-center">
                                                <button type="button" id="newPropSubmit" class="btn btn-bg submit">Save this
                                                    property
                                                </button>
                                            </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('frontend.front_panel_files.common.create_rental_block')
                                        </form>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('public/front_end/js/jquery-3.5.1.min.js')}}"></script>
    <script>

        $(document).ready(function(){
            $(document).on('click','#newPropSubmit',function(event){
                var street_name= $('#street_name').val();
                var street_number= $('#street_number').val();
                var zip_code= $('#zip_code').val();
                var city= $('#city').val();
                var commune= $('#commune').val();
                var usage_number= $('#usage_number').val();
                var farm_number= $('#farm_number').val();
                var fixed_number= $('#fixed_number').val();
                var section_number= $('#section_number').val();
                var property_name= $('#property_name').val();
                var property_description= $('#property_description').val();
                $.ajaxSetup({
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
                });
                var csrf =  $("input[name=_token]").val();
                $.ajax({
                    url: '{{URL::to('/client/store-property')}}',
                    type: 'post',
                    data: { 'street_name':street_name,'street_number':street_number,'zip_code':zip_code,'city':city,'commune':commune,'usage_number':usage_number,'farm_number':farm_number,'fixed_number':fixed_number,'section_number':section_number,'property_name':property_name,'property_description':property_description},
                    success: function(response)
                    {

                        $('#createPropModal').modal('hide');
                        toastr.success( response.message);
                    },
                    error: function (request, status, error) {
                        console.log(request,status,error);
                        let errors = request.responseJSON.errors;
                        if (errors['street_name']){
                            $('#street_name_err').text(errors['street_name'][0]);
                        }
                        if(errors['street_number']){
                            $('#street_number_err').text(errors['street_number'][0]);
                        }
                        if(errors['zip_code']){
                            $('#zip_code_err').text(errors['zip_code'][0]);
                        }
                        if(errors['city']){
                            $('#city_err').text(errors['city'][0]);
                        }
                        if(errors['commune']){
                            $('#commune_err').text(errors['commune'][0]);
                        }
                    }
                });

            });


        });
    </script>
@endsection
