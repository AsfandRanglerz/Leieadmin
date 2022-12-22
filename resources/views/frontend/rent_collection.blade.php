@extends('frontend.layout.master')

@section('title')

    Rent Collection

@endsection



@section('content')

    <div class="main-content">

        <div class="collection-rent">

            <section class="banner">

                <div class="row mx-0 banner-content">

                    <div class="col-md-6 wow slideInLeft" data-wow-duration="2s">

                        <div class="p-md-5 p-4 banner-content-block">

                            <h3 class="banner-heading">Precise, safe and easy collection of rent from your tenants</h3>

                            <p class="my-4 text-white">Collecting rent has never been easier!</p>

                            <a href="{{url('client/login')}}" class="w-100 btn btn-bg banner-btn">Try Management System Now!</a>

                        </div>

                    </div>

                    <div class="col-md-6 mt-md-0 mt-4 wow bounceInUp" data-wow-duration="2s">

                        <img src="{{asset('public/uploads/'.$rent_collection[0]->image)}}" class="w-100"/>

                    </div>

                </div>

            </section>

            <div class="col-md-7 mx-auto py-5 text-center content-container-upper-one">

                <h3 class="wow fadeInUp" data-wow-duration="2s">Collection of rent</h3>

                <p class="wow fadeInUp" data-wow-duration="2s">Precise Rental ensures that the rent is invoiced to all

                    your tenants monthly. Automatic reminders by SMS and e-mail if the tenant is late with payment. You

                    can also be guaranteed to pay the rent every single month on due date, through our partnership with

                    Aprila Bank . Regardless of whether you choose Rent Guarantee from Aprila Bank or only use the

                    Precise Management System, fully automatic invoicing of all your tenants is included.</p>

                <h3 class="wow fadeInUp mt-5" data-wow-duration="2s">As a landlord and user of the Precise Management

                    System, you have two choices when it comes to collecting the rent</h3>

            </div>

            <div class="content-container-upper-two">

                <div class="container-lg">

                    <div class="row mx-0 my-md-3 my-5 align-items-center content-container-inner">

                        <div class="col-md-6 wow fadeInUp" data-wow-duration="2s">

                            <div class="content-container-inner-section">

                                <h4>Precise Management System:</h4>

                                <ul class="list-style-none">

                                    <li class="mb-2 d-flex align-items-baseline"><span

                                            class="fa fa-check-circle mr-2"></span><span>Digital rental contract with e-signing</span>

                                    </li>

                                    <li class="mb-2 d-flex align-items-baseline"><span

                                            class="fa fa-check-circle mr-2"></span><span>Access to Felag Management System for free for 2 months</span>

                                    </li>

                                    <li class="mb-2 d-flex align-items-baseline"><span

                                            class="fa fa-check-circle mr-2"></span><span>You collect the rent yourself if the tenant does not pay the rent</span>

                                    </li>

                                    <li class="mb-2 d-flex align-items-baseline"><span

                                            class="fa fa-check-circle mr-2"></span><span>You carry out all processes in connection with any forced deviation and eviction should this occur</span>

                                    </li>

                                </ul>

                            </div>

                        </div>

                        <div class="col-md-6 wow fadeInDown" data-wow-duration="2s">

                            <div class="content-container-inner-img">

                                <img src="{{asset('public/uploads/'.$rent_collection[1]->image)}}"/>

                            </div>

                        </div>

                    </div>

                    <div class="row mx-0 align-items-center content-container-inner">

                        <div class="col-md-6 wow fadeInDown" data-wow-duration="2s">

                            <div class="content-container-inner-img">

                                <img src="{{asset('public/uploads/'.$rent_collection[2]->image)}}"/>

                            </div>

                        </div>

                        <div class="col-md-6 wow fadeInUp" data-wow-duration="2s">

                            <div class="content-container-inner-section">

                                <h4>April Rent Guarantee</h4>

                                <ul class="list-style-none">

                                    <li class="mb-2 d-flex align-items-baseline"><span

                                            class="fa fa-check-circle mr-2"></span><span>The rent is invoiced automatically and is guaranteed in your account until the due date every month. This also applies in cases where the tenant is behind with payment. In the event of non-payment by the tenant, you are guaranteed rent on account on the due date every month for up to 6 months.</span>

                                    </li>

                                    <li class="mb-2 d-flex align-items-baseline"><span

                                            class="fa fa-check-circle mr-2"></span><span>No administration with collection of rent</span>

                                    </li>

                                    <li class="mb-2 d-flex align-items-baseline"><span

                                            class="fa fa-check-circle mr-2"></span><span>Assistance in the entire coercive waiver and eviction process if this should be relevant</span>

                                    </li>

                                </ul>

                                <a href="{{url('client/login')}}" class="btn btn-bg">Try Management System for free!</a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="banner-icon">

                <div class="banner-icon-inner">

                    <h2 class="text-center heading wow fadeInUp" data-wow-duration="2s">Prices and subscription

                        plans</h2>

                    <p class="text-center p-text wow fadeInUp" data-wow-duration="2s">Everything from a completely

                        simple and digital rental contract, to guaranteed rent due every single month</p>

                    <div class="container-lg px-md-3 px-0">

                        <div class="row mx-0">

                            <div class="col-md-4 my-md-0 my-2 px-md-3 px-0 wow fadeInUp" data-wow-duration="2s">

                                <div class="banner-icon-inner-section">

                                    <h5>Simple rental contract</h5>

                                    <h4 class="my-3 sub-heading">For free</h4>

                                    <ul class="list-style-none">

                                        <li><span class="fa fa-check-circle mr-2"></span><span>Digital rental contract with e-signing</span>

                                        </li>

                                        <li><span class="fa fa-check-circle mr-2"></span><span>Access to Felag Management System for free for 2 months</span>

                                        </li>

                                    </ul>

                                    <a class="w-100 mt-4 mb-3 btn btn-bg">Select</a>

                                    <small class="d-block text-center">Only 1 free rental contract per customer</small>

                                </div>

                            </div>

                            <div class="col-md-4 my-md-0 my-2 px-md-3 px-0 wow fadeInUp" data-wow-duration="2s">

                                <div class="banner-icon-inner-section">

                                    <h5 class="heading">Recommended</h5>

                                    <h4 class="my-3 sub-heading">49,- <span>per tenancy / month</span></h4>

                                    <ul class="list-style-none">

                                        <li><span class="fa fa-check-circle mr-2"></span><span>Automatic invoicing of rent from your tenants</span>

                                        </li>

                                        <li><span

                                                class="fa fa-check-circle mr-2"></span><span>Automatic reminders</span>

                                        </li>

                                        <li><span class="fa fa-check-circle mr-2"></span><span>Electronic move-in and move-out protocol</span>

                                        </li>

                                        <li><span class="fa fa-check-circle mr-2"></span><span>Dashboard with many useful key figures</span>

                                        </li>

                                        <li><span

                                                class="fa fa-check-circle mr-2"></span><span>Advertising on Finn.no</span>

                                        </li>

                                        <li><span class="fa fa-check-circle mr-2"></span><span>Credit check of stakeholders</span>

                                        </li>

                                        <li><span class="fa fa-check-circle mr-2"></span><span>Termination and termination of agreement</span>

                                        </li>

                                        <li><span class="fa fa-check-circle mr-2"></span><span>Much more</span></li>

                                    </ul>

                                    <a class="w-100 mt-4 btn btn-bg">Select</a>

                                </div>

                            </div>

                            <div class="col-md-4 my-md-0 my-2 px-md-3 px-0 wow fadeInDown" data-wow-duration="2s">

                                <div class="position-relative overflow-hidden banner-icon-inner-section">

                                    <span class="green-ribbon">Guarantee</span>

                                    <h5>Rent guarantee</h5>

                                    <h4 class="my-3 sub-heading">5%<span> of the rent / month</span></h4>

                                    <ul class="list-style-none">

                                        <li><span class="fa fa-check-circle mr-2"></span><span>Digital rental contract with e-signing</span>

                                        </li>

                                        <li><span class="fa fa-check-circle mr-2"></span><span>Access to Felag Management System for free for 2 months</span>

                                        </li>

                                        <li><span class="fa fa-check-circle mr-2"></span><span>Digital rental contract with e-signing</span>

                                        </li>

                                        <li>

                                            <span class="fa fa-check-circle mr-2"></span><span>Access to Felag Rental Management system including the entire tenancy<em

                                                    class="d-block">(value: 588, - / year)</em></span>

                                        </li>

                                        <li><span class="fa fa-check-circle mr-2"></span><span>Guaranteed paid every month on due date</span>

                                        </li>

                                        <li><span class="fa fa-check-circle mr-2"></span><span>No administration with collection of rent</span>

                                        </li>

                                        <li><span class="fa fa-check-circle mr-2"></span><span>Credit check by tenant

                                                <em class="d-block">(value: 49, - / credit check)</em></span></li>

                                        <li><span class="fa fa-check-circle mr-2"></span><span>Deposit account included

                                        <em class="d-block">(value: 249, - / deposit account)</em></span></li>

                                        <li><span class="fa fa-check-circle mr-2"></span><span>Rental insurance included

                                        <em class="d-block">(value: 1188, - / year)</span></em></li>

                                    </ul>

                                    <a class="w-100 mt-4 btn btn-bg">Select</a>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

@endsection

