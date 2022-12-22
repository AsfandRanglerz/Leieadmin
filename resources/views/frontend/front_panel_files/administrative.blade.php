@extends('frontend.frontend_panel.user_panel')

@section('content')

    <h4>User Account</h4>

    <p><span class="fa fa-home"></span> - {{Auth::user()->name}}</p>

    <div class="row mx-0 py-3 rounded light-box-shadow">

        <div class="col-lg-3 nav-pills-container">

            <h5>Shortcuts</h5>

            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                <a class="mb-1 nav-link active" id="v-my-profile-tab" data-toggle="pill" href="#v-my-profile" role="tab"

                   aria-controls="v-my-profile" aria-selected="true">My Profile</a>

                <a class="mb-1 nav-link" id="v-settings-tab" data-toggle="pill" href="#v-settings" role="tab"

                   aria-controls="v-settings" aria-selected="false">Settings</a>

                <a class="mb-1 nav-link" id="v-subscriptions-tab" data-toggle="pill" href="#v-subscriptions" role="tab"

                   aria-controls="v-subscriptions" aria-selected="false">Subscriptions</a>

                <a class="nav-link" id="v-order-tab" data-toggle="pill" href="#v-order" role="tab"

                   aria-controls="v-order" aria-selected="false">Order</a>

            </div>

        </div>

        <div class="col-lg-9 mt-lg-0 mt-3">

            <div class="tab-content" id="v-pills-tabContent">

                <div class="tab-pane fade show active" id="v-my-profile" role="tabpanel"

                     aria-labelledby="v-my-profile-tab">

                    <form class="needs-validation" @if (Auth::user()->user_type=="tenant")action="{{url('tenant/update-profile')}}"@else action="{{url('client/update-profile')}}" @endif  method="POST"

                          enctype="multipart/form-data">

                        @csrf

                        <div class="mb-3 d-flex flex-wrap align-items-center justify-content-between">

                            <h5 class="mb-0">My profile</h5>

                            <a class="btn btn-bg" onclick="submitForm()">Update</a>

                        </div>

                        <p class="text-muted">Here you will find an overview of your personal information and what is

                            visible to others.</p>

                        <div class="avatar-wrapper">

                            <img class="profile-pic" id="uploadedImage"

                                 @if($data->image) src="{{asset('public/images/'.$data->image)}}" @else src=""

                                 id="output" @endif/>

                            <div class="upload-button">

                                <span class="fa fa-plus profile-img-uploaded-icon"></span>

                            </div>

                            <input class="file-upload" name="avatar" type="file" accept="image/*"/>

                        </div>

                        <h5>Contact information</h5>

                        <div class="form-row">

                            <div class="form-group col-md-6">

                                {{--                                        {{dd($data->name)}}--}}

                                <label>First Name</label>

                                <input type="text" placeholder="First Name" name="first_name" class="form-control  @if($errors->has('first_name')) is-invalid  @endif "

                                       value="{{$data->name}}"/>

                                @error('first_name') <span

                                    class="text-danger">{{$errors->first('first_name')}}</span> @enderror

                            </div>

                            <div class="form-group col-md-6">

                                <label>Last Name</label>

                                <input type="text" placeholder="Last Name" name="last_name" class="form-control @if($errors->has('last_name')) is-invalid  @endif "

                                       value="{{$data->surname}}"/>

                            </div>

                        </div>

                        <div class="form-row">

                            <div class="form-group col-md-6">

                                <label>Email</label>

                                <input type="email" placeholder="example@gmail.com" name="email" class="form-control @if($errors->has('email')) is-invalid  @endif "

                                       value="{{$data->email}}"/>

                                @error('email') <span class="text-danger">{{$errors->first('email')}}</span> @enderror

                            </div>

                            <div class="form-group col-md-6">

                                <label>Mobile Number</label>

                                <input type="tel" placeholder="Mobile Number" name="phone_no" class="form-control @if($errors->has('phone_no')) is-invalid  @endif "

                                       value="{{$data->phone}}"/>

                                @error('phone_no') <span

                                    class="text-danger">{{$errors->first('phone_no')}}</span> @enderror

                            </div>

                            <div class="form-group col-md-6">

                                <label>Address</label>

                                <input type="text" placeholder="Address" class="form-control  @if($errors->has('address')) is-invalid  @endif " name="address"

                                       value="{{$data->address}}"/>

                            </div>

                        </div>

                        <button id="submit-form" class="d-none">Submit Now</button>

                    </form>

                </div>

                <div class="tab-pane fade" id="v-settings" role="tabpanel" aria-labelledby="v-settings-tab">

                    <div class="mb-3 d-flex flex-wrap align-items-center justify-content-between">

                        <h5 class="mb-0">Settings</h5>

                        <a class="btn btn-bg" onclick="saveSettings()">Update</a>

                    </div>

                    <form action="{{url('client/profile-settings')}}" method="POST">

                        @csrf

                        <p class="text-muted">Here you will find an overview of your settings</p>

                        <h6>Agree</h6>

                        <div class="row">

                            <div class="col-md-9">

                                <b class="text-muted">subscribe to newsletter</b>

                                <p class="text-muted">Precise Rentals will send you relevant news to your email

                                    address</p>

                            </div>

                            <div class="col-md-3 text-right">

                                <div class="custom-control custom-switch">

                                    <input type="checkbox" class="custom-control-input" id="agreeYes"

                                           name="send_precise" @if($data->send_precise) checked @endif>

                                    <label class="custom-control-label" for="agreeYes"></label>

                                </div>

                            </div>

                        </div>

                        <h6>Settings</h6>

                        <div class="row">

                            <div class="col-md-9">

                                <b class="text-muted">Copy of email to tenant about payment of rent</b>

                                <p class="text-muted">When the tenant receives monthly payment information about rent,

                                    you as the landlord can receive an email with information about this</p>

                            </div>

                            <div class="col-md-3 text-right">

                                <div class="custom-control custom-switch">

                                    <input type="checkbox" class="custom-control-input" id="payYes" name="send_tenant"

                                           @if($data->send_tenant) checked @endif>

                                    <label class="custom-control-label" for="payYes"></label>

                                </div>

                            </div>

                        </div>

                        <div class="row">

                            <div class="col-md-9">

                                <b class="text-muted">Notification of unpaid rent</b>

                                <p class="text-muted">You as a landlord can receive notification of unpaid rent 5 days

                                    after the payment deadline</p>

                            </div>

                            <div class="col-md-3 text-right">

                                <div class="custom-control custom-switch">

                                    <input type="checkbox" class="custom-control-input" id="unPayYes" name="send_unpaid"

                                           @if($data->send_unpaid) checked @endif>

                                    <label class="custom-control-label" for="unPayYes"></label>

                                </div>

                            </div>

                        </div>

                        <h6>Payment card</h6>

                        <p class="text-muted">No payment card is stored on your profile</p>

                        <button id="submit-settings" class="d-none">Submit Now</button>



                    </form>

                </div>

                <div class="tab-pane fade" id="v-subscriptions" role="tabpanel" aria-labelledby="v-subscriptions-tab">

                    <h5>Subscriptions</h5>

                    <p class="text-muted">Here you will find an overview of your subscriptions</p>

                    <p class="text-muted text-center">No subscription found</p>

                </div>

                <div class="tab-pane fade" id="v-order" role="tabpanel" aria-labelledby="v-order-tab">

                    <h5>Order</h5>

                    <p class="text-muted">Here you will find an overview of your orders</p>

                    <p class="text-muted text-center">No order found</p>

                </div>

            </div>

        </div>

    </div>

@endsection

@section('js')

    <script>

        function submitForm() {

            $('#submit-form').click();

        }



        function saveSettings() {

            $('#submit-settings').click();

        }

    </script>

@endsection



