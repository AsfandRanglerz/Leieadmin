@extends('frontend.layout.master')

@section('title')

    Occupancy Protocol

@endsection



@section('content')

    <div class="main-content">

        <div class="occupancy-protocol">

            <section class="banner">

                <div class="row mx-0 banner-content">

                    <div class="col-md-6 wow slideInLeft" data-wow-duration="2s">

                        <div class="p-md-5 p-4 banner-content-block">

                            <h3 class="banner-heading">{{$occupancy_protocol[0]->title}}</h3>

                            <p class="my-4 text-white">{{$occupancy_protocol[0]->description}}</p>

                            <a href="{{url('client/sign-up')}}" class="w-100 btn btn-bg banner-btn">Create user for free now</a>

                        </div>

                    </div>

                    <div class="col-md-6 mt-md-0 mt-4 wow bounceInUp" data-wow-duration="2s">

                        <img src="{{asset('public/uploads/'.$occupancy_protocol[0]->image)}}" class="w-100"/>

                    </div>

                </div>

            </section>

            <div class="col-lg-9 mx-auto content-container-upper-one">

                <div class="row mx-0 py-sm-5 py-4">

                    <div class="col-sm-9 mt-sm-0 mt-4 order-sm-1 order-2">

                        <h3 class="mb-md-4 mb-3 wow fadeInUp"

                            data-wow-duration="2s">{{$occupancy_protocol[1]->title}}</h3>

                        <p class="wow fadeInUp" data-wow-duration="2s">{{$occupancy_protocol[1]->description}}</p>

                        {{--                    <p class="wow fadeInUp" data-wow-duration="2s">The moving-in protocol helps both landlord and tenant to make the right choices when moving in and moving out. We recommend all landlords to use our moving-in protocol to avoid disagreements or quarrels with tenants.</p>--}}

                        <a href="{{url('client/sign-up')}}" class="mt-md-4 mt-2 btn btn-bg wow fadeInUp" data-wow-duration="2s">Create user for

                            free now</a>

                    </div>

                    <div class="col-sm-3 order-sm-2 order-1">

                        <div class="img-holder wow fadeInDown" data-wow-duration="4s">

                            <img src="{{asset('public/uploads/'.$occupancy_protocol[1]->image)}}"

                                 class="w-100 h-100 object-fit-contain"/>

                        </div>

                    </div>

                </div>

            </div>

            <div class="content-container-upper-two">

                <div class="container-lg px-md-3 px-0">

                    <h3 class="text-center wow fadeInDown" data-wow-duration="2s">How can I easily create a move-in

                        protocol now?</h3>

                    <p class="text-center mb-lg-5 mb-md-4 wow fadeInDown" data-wow-duration="2s">Implementing a move-in

                        with our move-in protocol is easy!</p>

                    <div class="mx-0 row">

                        <div class="mb-sm-4 mb-3 col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="2s">

                            <div class="h-100 light-box-shadow block-content">

                                <span class="number">1</span>

                                <h5 class="mb-3 heading">Create a lease or add to an existing lease</h5>

                                <p class="mb-0">Add and sign a lease in Presis Utleie completely free with BankID

                                    signing.</p>

                            </div>

                        </div>

                        <div class="mb-sm-4 mb-3 col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="2s">

                            <div class="h-100 light-box-shadow block-content">

                                <span class="number">2</span>

                                <h5 class="mb-3 heading">The protocol is initiated by the landlord during the

                                    move-in</h5>

                                <p class="mb-0">The landlord opens the link to the move-in protocol that he / she has

                                    received by e-mail.</p>

                            </div>

                        </div>

                        <div class="mb-sm-4 mb-3 col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="2s">

                            <div class="h-100 light-box-shadow block-content">

                                <span class="number">3</span>

                                <h5 class="mb-3 heading">Deposit and first rent confirmed</h5>

                                <p class="mb-0">The landlord and tenant confirm that the deposit and first rent have

                                    been paid into the correct account.</p>

                            </div>

                        </div>

                        <div class="mb-sm-4 mb-3 col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="2s">

                            <div class="h-100 light-box-shadow block-content">

                                <span class="number">4</span>

                                <h5 class="mb-3 heading">The rental object is checked</h5>

                                <p class="mb-0">The home is inspected, and any errors and omissions can be documented

                                    with photos and text if desired. An electricity meter is read if the home has its

                                    own electricity meter. The tenant can order an electricity agreement directly in the

                                    move-in protocol!</p>

                            </div>

                        </div>

                        <div class="mb-sm-4 mb-3 col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="2s">

                            <div class="h-100 light-box-shadow block-content">

                                <span class="number">5</span>

                                <h5 class="mb-3 heading">Reading and signing of minutes</h5>

                                <p class="mb-0">The protocol is read by the landlord and tenant, and signed by both

                                    parties directly on the unit used.</p>

                            </div>

                        </div>

                        <div class="mb-sm-4 mb-3 col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="2s">

                            <div class="h-100 light-box-shadow block-content">

                                <span class="number">6</span>

                                <h5 class="mb-3 heading">A copy of the signed move-in protocol is sent to both

                                    parties</h5>

                                <p class="mb-0">The landlord and tenant will receive a signed PDF of the moving-in

                                    protocol by e-mail. The landlord can now safely hand over the keys to the

                                    tenant.</p>

                            </div>

                        </div>

                    </div>

                    <div align="center" class="wow fadeInUp" data-wow-duration="2s">

                        <a href="{{url('client/login')}}" class="mt-md-3 btn btn-bg section-btn">Create lease now</a>

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

