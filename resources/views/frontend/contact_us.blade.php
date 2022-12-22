@extends('frontend.layout.master')
@section('title')
    Contact Us
@endsection

@section('content')
    <div class="main-content">
        <div class="contact-us">
            <section class="banner">
                <div class="banner-content">
                    <div class="col-md-8 mx-auto p-md-5 p-4 banner-content-block wow fadeInLeft" data-wow-duration="2s">
                        <h3 class="banner-heading">Help and support</h3>
                        <p class="mt-4 mb-0 text-white">Feel free to send us an e-mail and we will help you as soon as
                            possible! PS: Precise Rental is still in beta, and we develop the support pages as we
                            receive questions from users.</p>
                    </div>
                </div>
            </section>
            <div class="banner-icon">
                <div class="banner-icon-inner light-grey-bg">
                    <h2 class="mb-md-4 text-center heading wow fadeInUp" data-wow-duration="2s">Contact Us</h2>
                    <div class="container-lg px-md-3 px-0 wow fadeInUp" data-wow-duration="2s">
                        <div class="row mx-0 justify-content-center">
                            <div class="my-md-0 my-2 px-0 col-lg-7 col-md-9">
                                <div class="banner-icon-inner-section">
                                    <form action="{{url('/contact-us')}}" method="post" class="needs-validation"
                                          novalidate>
                                        @csrf
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>First Name</label>
                                                <input type="text" name="first_name" placeholder="First Name" class="form-control"/>

                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Last Name</label>
                                                <input type="text" name="last_name" placeholder="Last Name" class="form-control"/>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Email<span class="required"> *</span></label>
                                                <input type="email" name="email" placeholder="example@gmail.com"
                                                       class="form-control @error('email') is-invalid @enderror"/>
                                                @error('email') <span
                                                    class="text-danger">{{$errors->first('email')}}</span> @enderror
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Mobile Number<span class="required"> *</span></label>
                                                <input type="tel" name="phone" placeholder="Mobile Number"
                                                       class="form-control @error('phone') is-invalid @enderror"/>
                                                @error('phone') <span
                                                    class="text-danger">{{$errors->first('phone')}}</span> @enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Description <span class="required">*</span></label>
                                            <textarea name="description" class="form-control @error('description') is-invalid @enderror "
                                                      placeholder="Description..."></textarea>
                                            @error('description') <span
                                                class="text-danger">{{$errors->first('description')}}</span> @enderror
                                        </div>
                                        <div align="center">
                                            <button type="submit" class="mt-4 btn btn-bg">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-icon">
                <div class="text-center banner-icon-inner">
                    <h2 class="wow fadeInUp" data-wow-duration="2s">Get started with Felag Rentals for free now!</h2>
                    <p class="text-center wow fadeInUp" data-wow-duration="2s">You can create your first rental contract in less
                        than 2 minutes.</p>
                    <a href="{{url('client/login')}}" class="btn banner-icon-btn wow fadeInUp" data-wow-duration="2s">It's completely free!</a>
                </div>
            </div>
        </div>
    </div>
@endsection
{{--@section('js')--}}
{{--    <script>--}}

{{--    </script>--}}

{{--@endsection--}}
