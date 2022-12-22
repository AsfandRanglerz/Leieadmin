@extends('admin.layouts.master')
@section('title','Add Property')
@section('content')

    @include('admin.Errors.errors')
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <div class="card mb-4">
        <div class="card-body">
            <div class="card-title mb-3">Add Property</div>
            <form action="{{route('admin-property.store')}}" method="POST" autocomplete="off">
                @csrf
                <div class="row">
                    <div class="col-md-12 form-group">
                        <label for="selectProp">Select User<span class="required">*</span> </label>
                        <select name="user_id" class="form-control single-select-dropdown" id="selectProp">
                            <option value=""></option>
                            @forelse($data as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                            @empty
                            @endforelse
                        </select>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-12 form-group mb-3">
                    <div class=" form-group mb-3">
                        <label for="firstName">Street Name<span class="required">*</span></label>
                        <input class="form-control"  name="street_name" type="text" placeholder="Enter Name" >
                        @error('street_name') <span class="text-danger">{{$errors->first('street_name')}}</span> @enderror
                    </div>
                   </div>
                </div>
                    <div class="row">
                        <div class="col-md-12 form-group mb-3">
                            <div class=" form-group mb-3">
                                <label for="firstName">Street Number <span class="required">*</span></label>
                                <input class="form-control"  name="street_number" type="text" placeholder="Enter Number" >
                                @error('street_number') <span class="text-danger">{{$errors->first('street_number')}}</span> @enderror
                            </div>
                        </div>
                    </div>
                <div class="row">
                    <div class="col-md-4 form-group mb-3">
                        <div class=" form-group mb-3">
                            <label for="firstName">Zip Code <span class="required">*</span></label>
                            <input class="form-control"  name="zip_code" type="text" placeholder="Enter Zip Code" >
                            @error('zip_code') <span class="text-danger">{{$errors->first('zip_code')}}</span> @enderror
                        </div>
                    </div>
                    <div class="col-md-4 form-group mb-3">
                        <div class=" form-group mb-3">
                            <label for="firstName">city <span class="required">*</span></label>
                            <input class="form-control"  name="city" type="text" placeholder="Enter City" >
                            @error('city') <span class="text-danger">{{$errors->first('city')}}</span> @enderror
                        </div>
                    </div>
                    <div class="col-md-4 form-group mb-3">
                        <div class=" form-group mb-3">
                            <label for="firstName">Commune <span class="required">*</span></label>
                            <input class="form-control"  name="commune" type="text" placeholder="Enter commune" >
                            @error('commune') <span class="text-danger">T{{$errors->first('commune')}}</span> @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3 form-group mb-3">
                        <div class=" form-group mb-3">
                            <label for="firstName">Usage Number</label>
                            <input class="form-control"  name="usage_number" type="text" placeholder="Enter Usage Number" >
                            @error('usage_number') <span class="text-danger">{{$errors->first('usage_number')}}</span> @enderror
                        </div>
                    </div>
                    <div class="col-md-3 form-group mb-3">
                        <div class=" form-group mb-3">
                            <label for="firstName">Farm Number</label>
                            <input class="form-control"  name="farm_number" type="text" placeholder="Enter Farm Number" >
                            @error('farm_number') <span class="text-danger">{{$errors->first('farm_number')}}</span> @enderror
                        </div>
                    </div>
                    <div class="col-md-3 form-group mb-3">
                        <div class=" form-group mb-3">
                            <label for="firstName">Fixed Number</label>
                            <input class="form-control"  name="fixed_number" type="text" placeholder="Enter Fixed Number" >
                            @error('fixed_number') <span class="text-danger">{{$errors->first('fixed_number')}}</span> @enderror
                        </div>
                    </div>

                    <div class="col-md-3 form-group mb-3">
                        <div class=" form-group mb-3">
                            <label for="firstName">Section Number</label>
                            <input class="form-control"  name="section_number" type="text" placeholder="Enter Section Number" >
                            @error('section_number') <span class="text-danger">{{$errors->first('section_number')}}</span> @enderror
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <button class="btn btn-primary " type="submit">Submit</button>
                </div>

            </form>
        </div>
    </div>
@endsection
