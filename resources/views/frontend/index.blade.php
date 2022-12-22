@extends('frontend.layout.master')
@section('content')
    <div class="main-content">
        <div class="home">
            <section class="banner">
                <div class="banner-content">

                    <h1 class="banner-heading wow fadeInUp"
                        data-wow-duration="2s">{{$completely_free->description}}</h1>
                    <h4 class="banner-sub-heading wow fadeInUp" data-wow-duration="2s">{{$completely_free->title}}</h4>
                    <a href="{{url('client/login')}}" class="btn btn-bg banner-btn wow fadeInUp" data-wow-duration="2s">It's completely
                        free!</a>
                </div>
            </section>
            <div class="img-holder wow fadeInDown" data-wow-duration="2s">
                <img src="{{asset('public/uploads/'.$completely_free->image)}}"/>
            </div>
            <div class="mb-lg-0 mb-4 content-container-upper-one">
                <div class="container text-center">
                    <h2 class="wow fadeInDown" data-wow-duration="2s">How does it work?</h2>
                    <p class="text-center wow fadeInDown" data-wow-duration="2s">It is easy to get started with Felag management
                        system</p>
                    <div class="row mx-0 content-container-inner justify-content-center">
                        <div class="col-lg-4 col-md-6 my-lg-5 my-2 wow fadeInUp" data-wow-duration="2s">
                            <a href="{{url('client/digital-lease')}}" class="d-inline-block text-reset text-decoration-none inner-block">
                                <div class="content-container-inner-section">
                                    <img
                                        src="https://w7.pngwing.com/pngs/312/1018/png-transparent-orange-blue-and-black-logo-logo-circle-technology-circle-blue-text-information-technology-thumbnail.png"/>
                                    <h6>Digital lease</h6>
                                    <p>Rental contract simple, secure and digital, signed with BankID!</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 my-lg-5 my-2 wow fadeInDown" data-wow-duration="2s">
                            <a href="{{url('client/management-system')}}" class="d-inline-block text-reset text-decoration-none inner-block">
                                <div class="content-container-inner-section">
                                    <img
                                        src="https://w7.pngwing.com/pngs/312/1018/png-transparent-orange-blue-and-black-logo-logo-circle-technology-circle-blue-text-information-technology-thumbnail.png"/>
                                    <h6>Complete management system</h6>
                                    <p>Felag Management System is everything you as a homeowner need - all gathered in
                                        one complete rental platform!</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 my-lg-5 my-2 wow fadeInUp" data-wow-duration="2s">
                            <a href="{{url('client/rent-guarantee')}}" class="d-inline-block text-reset text-decoration-none inner-block">
                                <div class="content-container-inner-section">
                                    <img
                                        src="https://w7.pngwing.com/pngs/312/1018/png-transparent-orange-blue-and-black-logo-logo-circle-technology-circle-blue-text-information-technology-thumbnail.png"/>
                                    <h6>Deposit guarantee</h6>
                                    <p>Do you drive, or do you want to rent, but think it is too much to think about?
                                        Rent guarantee is guaranteed a product for you!</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-container-upper-two">
                <div class="container-lg">
                    <div class="row mx-0 align-items-center content-container-inner">
                        <div class="col-md-6 wow fadeInDown" data-wow-duration="2s">
                            <div class="content-container-inner-img">
                                <img src="{{asset('public/uploads/'.$get_started[0]->image)}}"/>
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeInUp" data-wow-duration="2s">
                            <div class="content-container-inner-section">
                                <p>Web-based management system</p>
                                <h4>{{$get_started[0]->title}}</h4>
                                <p>{{$get_started[0]->description}}</p>
                                <a href="{{url('client/login')}}" class="btn btn-bg">Get started now!</a>
                            </div>
                        </div>
                    </div>
                    <div class="row mx-0 my-md-3 my-5 align-items-center content-container-inner">
                        <div class="col-md-6 wow fadeInUp" data-wow-duration="2s">
                            <div class="content-container-inner-section">
                                <p>Lease with BankID signing</p>
                                <h4>{{$get_started[1]->title}}</h4>
                                <p>{{$get_started[1]->description}}</p>
                                <a href="{{url('client/login')}}" href="{{url('client/login')}}" class="btn btn-bg">Get started now!</a>
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeInDown" data-wow-duration="2s">
                            <div class="content-container-inner-img">
                                <img src="{{asset('public/uploads/'.$get_started[1]->image)}}"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-icon">
                <div class="banner-icon-inner">
                    <h2 class="text-center wow fadeInUp" data-wow-duration="2s">Prices and subscription plans</h2>
                    <p class="text-center wow fadeInUp" data-wow-duration="2s">Everything from a completely simple and
                        digital rental contract, to guaranteed rent due every single month</p>
                    <div class="container-lg px-md-3 px-0">
                        <div class="row mx-0">
                            <div class="col-md-4 my-md-5 my-2 px-md-3 px-0 wow fadeInUp" data-wow-duration="2s">
                                <div class="banner-icon-inner-section">
                                    @php
                                        $plan1=App\Models\Plane::where('plan',1)->get();
                                    @endphp
                                    <h5>Simple rental contract</h5>
                                    <h4 class="my-3 sub-heading">For free</h4>
                                    <ul class="list-style-none">

                                        @forelse($plan1 as $plane_detail)
                                            <li><span
                                                    class="fa fa-check-circle mr-2"></span><span>{{$plane_detail->description}}</span>
                                            </li>
                                        @empty
                                        @endforelse

                                    </ul>
                                    <a class="w-100 mt-4 mb-3 btn btn-bg">Select</a>
                                    <small class="d-block text-center">Only 1 free rental contract per customer</small>
                                </div>
                            </div>
                            <div class="col-md-4 my-md-5 my-2 px-md-3 px-0 wow fadeInDown" data-wow-duration="2s">
                                <div class="position-relative overflow-hidden banner-icon-inner-section">
                                    @php
                                        $plan2=App\Models\Plane::where('plan',2)->get();
                                    @endphp
                                    <span class="green-ribbon">Guarantee</span>
                                    <h5>Rent guarantee</h5>
                                    <h4 class="my-3 sub-heading">5%<span> of the rent / month</span></h4>
                                    <ul class="list-style-none">
                                        @forelse($plan2 as $plane_detail)
                                            <li><span
                                                    class="fa fa-check-circle mr-2"></span><span>{{$plane_detail->description}}</span>
                                            </li>
                                        @empty
                                        @endforelse
                                    </ul>
                                    <a class="w-100 mt-4 btn btn-bg">Select</a>
                                </div>
                            </div>
                            <div class="col-md-4 my-md-5 my-2 px-md-3 px-0 wow fadeInUp" data-wow-duration="2s">
                                <div class="banner-icon-inner-section">
                                    @php
                                        $plan3=App\Models\Plane::where('plan',3)->get();
                                    @endphp
                                    <h5>Recommended</h5>
                                    <h4 class="my-3 sub-heading">49,- <span>per tenancy / month</span></h4>
                                    <ul class="list-style-none">
                                        @forelse($plan3 as $plane_detail)
                                            <li><span
                                                    class="fa fa-check-circle mr-2"></span><span>{{$plane_detail->description}}</span>
                                            </li>
                                        @empty
                                        @endforelse
                                    </ul>
                                    <a class="w-100 mt-4 btn btn-bg">Select</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-container-upper-two">
                <div class="container-lg">
                    <div class="row mx-0 align-items-center content-container-inner">
                        <div class="col-md-6 wow fadeInUp" data-wow-duration="2s">
                            <div class="content-container-inner-img">
                                <img src="{{asset('public/uploads/'.$get_started[2]->image)}}"/>
                            </div>
                        </div>

                        <div class="col-md-6 wow fadeInDown" data-wow-duration="2s">
                            <div class="content-container-inner-section">
                                <p>Collection of rent</p>
                                <h4>{{$get_started[2]->title}}</h4>
                                <p>{{$get_started[2]->description}}</p>
                                <a  href="{{url('client/login')}}" class="btn btn-bg">Get started now!</a>
                            </div>
                        </div>
                    </div>
                    <div class="row mx-0 mt-3 align-items-center content-container-inner">
                        <div class="col-md-6 wow fadeInDown" data-wow-duration="2s">
                            <div class="content-container-inner-section">
                                <p>Rent guarantee from Aprila Bank</p>
                                <h4>{{$get_started[3]->title}}</h4>
                                <p>{{$get_started[3]->description}}</p>
                                <a href="{{url('client/login')}}" class="btn btn-bg">Get start Prices and subscription plansted now!</a>
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeInUp" data-wow-duration="2s">
                            <div class="content-container-inner-img">
                                <img src="{{asset('public/uploads/'.$get_started[3]->image)}}"/>
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
                    <a href="{{url('client/login')}}" class="btn banner-icon-btn wow fadeInUp" data-wow-duration="2s">YouIt's completely free!</a>
                </div>
            </div>
        </div>
    </div>
@endsection
