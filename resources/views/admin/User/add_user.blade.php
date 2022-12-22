@extends('admin.layouts.master')
@section('content')
    @include('admin.Errors.errors')
    <style>
        .nav-tabs .active{
            background-color: #673499 !important;
            color: white !important;
        }
    </style>
    <div class="card mb-4">
        <div class="card-body">
            <div class="card-title mb-3">Add User</div>
            <nav>
                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Tenants</a>
                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Land Lord</a>
                </div>
            </nav>
            <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="table-responsive">
                        <div id="deafult_ordering_table_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                            <div class="row">
                                <div class="col-sm-12">
                                    <form action="{{url('admin/save-user')}}" method="POST" autocomplete="off">
                                        @csrf
                                        <input type="hidden" name="user_type" value="tenant">
                                        <div class="row">
                                            <div class="col-md-6 form-group mb-3">
                                                <label for="firstName">First name</label>
                                                <input class="form-control" id="firstName" name="first_name" type="text" placeholder="Enter your first name" >
                                                @error('first_name') <span class="text-danger">This field is required</span> @enderror
                                            </div>
                                            <div class="col-md-6 form-group mb-3">
                                                <label for="surName">Sur name</label>
                                                <input class="form-control" id="surName" name="surname" type="text" placeholder="Enter your Sur name">
                                                @error('first_name') <span class="text-danger">This field is required</span> @enderror

                                            </div>
                                            <div class="col-md-6 form-group mb-3">
                                                <label for="email">Email address</label>
                                                <input class="form-control" id="email" name="email" type="email" placeholder="Enter email" autocomplete="off">
                                                @error('email') <span class="text-danger">{{$errors->first('email')}}</span> @enderror
                                            <!--  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                            </div>
                                            <div class="col-md-6 form-group mb-3">
                                                <label for="phone">Phone</label>
                                                <input class="form-control" id="phone" name="phone" placeholder="Enter phone">
                                                @error('phone') <span class="text-danger">This field is required</span> @enderror
                                            </div>
                                            <div class="col-md-6 form-group mb-3">
                                                <label for="picker2">Birth date</label>
                                                <input class="form-control" id="picker2"  placeholder="yyyy-mm-dd" name="date_of_birth" type="date">
                                            </div>
                                            <div class="col-md-6 form-group mb-3">
                                                <label for="picker1">Gender</label>
                                                <select class="form-control" name="gender">
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                </select>
                                            </div>
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
                                            <div class="col-md-12">
                                                <button class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="table-responsive">
                        <div id="deafult_ordering_table2_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                            <div class="row">
                                <div class="col-sm-12">
                                    <form action="{{url('admin/save-user')}}" method="POST" autocomplete="off">
                                        @csrf
                                        <input type="hidden" name="user_type" value="private_landlord">
                                        <div class="row">
                                            <div class="col-md-6 form-group mb-3">
                                                <label for="firstName">First name</label>
                                                <input class="form-control" id="firstName" name="first_name" type="text" placeholder="Enter your first name" >
                                                @error('first_name') <span class="text-danger">This field is required</span> @enderror
                                            </div>
                                            <div class="col-md-6 form-group mb-3">
                                                <label for="surName">Sur name</label>
                                                <input class="form-control" id="surName" name="surname" type="text" placeholder="Enter your Sur name">
                                                @error('first_name') <span class="text-danger">This field is required</span> @enderror

                                            </div>
                                            <div class="col-md-6 form-group mb-3">
                                                <label for="email">Email address</label>
                                                <input class="form-control" id="email" name="email" type="email" placeholder="Enter email" autocomplete="off">
                                                @error('email') <span class="text-danger">{{$errors->first('email')}}</span> @enderror
                                            <!--  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                            </div>
                                            <div class="col-md-6 form-group mb-3">
                                                <label for="phone">Phone</label>
                                                <input class="form-control" id="phone" name="phone" placeholder="Enter phone">
                                                @error('phone') <span class="text-danger">This field is required</span> @enderror
                                            </div>
                                            <div class="col-md-6 form-group mb-3">
                                                <label for="picker2">Birth date</label>
                                                <input class="form-control" id="picker2"  placeholder="yyyy-mm-dd" name="date_of_birth" type="date">
                                            </div>
                                            <div class="col-md-6 form-group mb-3">
                                                <label for="picker1">Gender</label>
                                                <select class="form-control" name="gender">
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                </select>
                                            </div>
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
                                            <div class="col-md-12">
                                                <button class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
