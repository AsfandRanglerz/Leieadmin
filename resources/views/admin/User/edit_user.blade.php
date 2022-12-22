@extends('admin.layouts.master')
@section('content')
    @include('admin.Errors.errors')
    <div class="card mb-4">
        <div class="card-body">
            <div class="card-title mb-3">Edit User</div>
            <form action="{{url('admin/update-user/'.$data->id)}}" method="POST" autocomplete="off">
                @csrf
                <div class="row">
                    <div class="col-md-6 form-group mb-3">
                        <label for="firstName">First name</label>
                        <input class="form-control" id="firstName" name="first_name" type="text" placeholder="Enter your first name" value="{{$data->first_name}}" >
                        @error('first_name') <span class="text-danger">This field is required</span> @enderror
                    </div>
                    <div class="col-md-6 form-group mb-3">
                        <label for="surName">Sur name</label>
                        <input class="form-control" id="surName" name="surname" type="text" placeholder="Enter your Sur name"  value="{{$data->surname}}">
                        @error('first_name') <span class="text-danger">This field is required</span> @enderror

                    </div>
                    <div class="col-md-6 form-group mb-3">
                        <label for="email">Email address</label>
                        <input class="form-control" id="email" name="email" type="email" placeholder="Enter email" autocomplete="off"  value="{{$data->email}}">
                        @error('email') <span class="text-danger">{{$errors->first('email')}}</span> @enderror
                    <!--  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                    </div>
                    <div class="col-md-6 form-group mb-3">
                        <label for="phone">Phone</label>
                        <input class="form-control" id="phone" name="phone" placeholder="Enter phone"  value="{{$data->phone}}">
                        @error('phone') <span class="text-danger">This field is required</span> @enderror
                    </div>
                    <div class="col-md-6 form-group mb-3">
                        <label for="picker2">Birth date</label>
                        <input class="form-control" id="picker2"  placeholder="yyyy-mm-dd" name="date_of_birth" type="date"  value="{{$data->date_of_birth}}">
                    </div>
                    <div class="col-md-6 form-group mb-3">
                        <label for="picker1">Gender</label>
                        <select class="form-control" name="gender"  >
                            <option value="male" @if($data->gender=='male') selected @endif>Male</option>
                            <option value="female" @if($data->gender=='female') selected @endif>Female</option>
                        </select>
                    </div>
                    @if(!$data->password)
                        <div class="col-md-6 form-group mb-3">
                            <label for="password">Password</label>
                            <input class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Enter Password" type="password" autocomplete="off">
                        </div>
                        <div class="col-md-6 form-group mb-3">
                            <label for="password_confirmation">Re-type Password</label>
                            <input class="form-control @error('password') is-invalid @enderror" id="password_confirmation" name="password_confirmation" type="password" placeholder="Re-Enter Password">
                            @error('password')
                            <span class="text-danger">{{$errors->first('password')}}</span>
                            @enderror
                        </div>
                    @endif
                    <div class="col-md-12">
                        <button class="btn btn-primary" type="submit">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
