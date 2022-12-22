@extends('frontend.layout.master')
@section('title')
    Management System
@endsection

@section('content')
    <div class="main-content">
        <div class="management-system">
            <section class="banner">
                <div class="row mx-0 banner-content">
                    <div class="col-md-6 wow slideInLeft" data-wow-duration="2s">
                        <div class="p-md-5 p-4 banner-content-block">
                            <h3 class="banner-heading">{{$free_management->title}}</h3>
                            <p class="my-4 text-white">{{$free_management->description}}</p>
                            <a href="{{url('client/login')}}" class="w-100 btn btn-bg banner-btn">Try Management System for free!</a>
                        </div>
                    </div>
                    <div class="col-md-6 mt-md-0 mt-4 wow bounceInUp" data-wow-duration="2s">
                        <img src="{{asset('public/uploads/'.$free_management->image)}}" class="w-100"/>
                    </div>
                </div>
            </section>
            <div class="col-md-7 mx-auto py-5 text-center content-container-upper-one">
                <h3 class="wow fadeInUp" data-wow-duration="2s">Management System</h3>
                <p class="wow fadeInUp" data-wow-duration="2s">Rental is suitable both for you who are going to rent out
                    one dormitory, apartment or room in a shared apartment, and for you who are going to rent out many
                    rental homes. Rental allows you to pick and mix the services and tools you want to ensure a simple,
                    profitable and safe rental of housing. Try Management for free for 2 months now!</p>
            </div>
            <div class="content-container-upper-two">
                <div class="container-lg">
                    <div class="row mx-0 my-md-3 my-5 align-items-center content-container-inner">
                        <div class="col-md-6 wow fadeInUp" data-wow-duration="2s">
                            <div class="content-container-inner-section">
                                <h4>{{$try_management[0]->title}}</h4>
                                <p>{{$try_management[0]->description}}</p>
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeInDown" data-wow-duration="2s">
                            <div class="content-container-inner-img">
                                <img src="{{asset('public/uploads/'.$try_management[0]->image)}}"/>
                            </div>
                        </div>
                    </div>
                    <div class="row mx-0 align-items-center content-container-inner">
                        <div class="col-md-6 wow fadeInDown" data-wow-duration="2s">
                            <div class="content-container-inner-img">
                                <img src="{{asset('public/uploads/'.$try_management[1]->image)}}"/>
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeInUp" data-wow-duration="2s">
                            <div class="content-container-inner-section">
                                <h4>{{$try_management[1]->title}}</h4>
                                <p>{{$try_management[1]->description}}</p>
                                <a href="{{url('client/login')}}" class="btn btn-bg">Try Management System for free!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-icon">
                <div class="text-center banner-icon-inner">
                    <div class="container-lg">
                        <div class="row mx-0">
                            <div class="col-md-6 banner-content-half wow fadeInUp" data-wow-duration="2s">
                                <div class="img-holder">
                                    <img src="{{asset('public/front_end/images/aprila.png')}}"
                                         class="w-100 h-100 object-fit-contain"/>
                                </div>
                                <h2>Deposit account</h2>
                                <p>You get a cheap, simple and digital deposit account with Presis Husleie via our
                                    partner Aprila Bank</p>
                            </div>
                            <div class="col-md-6 banner-content-half wow fadeInDown" data-wow-duration="2s">
                                <div class="img-holder">
                                    <img src="{{asset('public/front_end/images/card15.png')}}"
                                         class="w-100 h-100 object-fit-contain"/>
                                </div>
                                <h2>Occupancy protocol and relocation protocol</h2>
                                <p>The market's crudest digital takeover protocol for documenting the condition of the
                                    home when moving in and moving out. Integration with many relevant third parties
                                    helps you make the right choices when moving in and out.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-container-upper-two">
                <div class="container-lg">
                    <div class="row mx-0 align-items-center content-container-inner">
                        <div class="col-md-6 wow fadeInUp" data-wow-duration="2s">
                            <div class="content-container-inner-section">
                                <h4>{{$try_management[2]->title}}</h4>
                                <p>{{$try_management[2]->description}}</p>
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeInDown" data-wow-duration="2s">
                            <div class="content-container-inner-img">
                                <img src="{{asset('public/uploads/'.$try_management[2]->image)}}"/>
                            </div>
                        </div>
                    </div>
                    <div class="row mx-0 my-md-3 my-5 align-items-center content-container-inner">
                        <div class="col-md-6 wow fadeInUp" data-wow-duration="2s">
                            <div class="content-container-inner-img">
                                <img src="{{asset('public/uploads/'.$try_management[3]->image)}}"/>
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeInDown" data-wow-duration="2s">
                            <div class="content-container-inner-section">
                                <h4>{{$try_management[3]->title}}</h4>
                                <p>{{$try_management[3]->description}}</p>
                                <a href="{{url('client/login')}}" class="btn btn-bg">Try Management System for free!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-icon">
                <div class="banner-icon-inner light-grey-bg">
                    <h2 class="text-center heading wow fadeInDown" data-wow-duration="2s">Prices and subscription
                        plans</h2>
                    <div class="container-lg px-md-3 px-0">
                        <p class="text-center p-text wow fadeInDown" data-wow-duration="2s">You can choose between two
                            versions of Precise Rentals. Precise Management System gives you everything you need for
                            easy rental, and Rent Guarantee gives you guaranteed rent on due date every single month</p>
                        <div class="row mx-0">
                            <div class="col-md-6 my-md-5 my-2 px-md-3 px-0 wow fadeInUp" data-wow-duration="2s">
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
                                    <a  class="w-100 mt-4 btn btn-bg">Select</a>
                                </div>
                            </div>
                            <div class="col-md-6 my-md-5 my-2 px-md-3 px-0 wow fadeInDown" data-wow-duration="2s">
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
