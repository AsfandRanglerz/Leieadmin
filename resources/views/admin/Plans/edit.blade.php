@extends('admin.layouts.master')
@section('title','Edit Plan')
@section('content')

    @include('admin.Errors.errors')

    <div class="card mb-4">
        <div class="card-body">
            <div class="card-title mb-3">Edit Plan</div>
            <form action="{{route('plan.update',$data->id)}}" method="POST" autocomplete="off">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6 form-group mb-3">

                        <div class="form-group">
                            <label for="sel1">Plan</label>
                            <select class="form-control" id="sel1" name="plan" required>

                                <option @if($data->plan==1) selected @endif value="1">Rental contract</option>
                                <option @if($data->plan==2) selected @endif value="2">Rent guarantee</option>
                                <option @if($data->plan==3) selected @endif value="3">Recommended</option>

                            </select>
                        </div>

                    </div>
                    <div class="col-md-6 form-group mb-3">
                        <label for="firstName">Description</label>
                        <input class="form-control" id="firstName" name="description" value="{{$data->description}}" type="text" placeholder="Enter description" required>
                        @error('first_name') <span class="text-danger">This field is required</span> @enderror
                    </div>
                </div>


                <div class="col-md-12">
                    <button class="btn btn-primary " type="submit">Submit</button>
                </div>

            </form>
        </div>
    </div>

@endsection
