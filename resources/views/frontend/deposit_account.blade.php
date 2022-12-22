@extends('frontend.layout.master')

@section('title')

    Deposit Account

@endsection



@section('content')

    <div class="main-content">

        <div class="deposit-account">

            <section class="banner">

                <div class="row mx-0 banner-content">

                    <div class="col-md-6 wow slideInLeft" data-wow-duration="2s">

                        <div class="p-md-5 p-4 banner-content-block">

                            <h3 class="banner-heading">{{$occupancy_protocol->title}}</h3>

                            <p class="my-4 text-white">{{$occupancy_protocol->description}}</p>

                            <a href="{{url('client/sign-up')}}" class="w-100 btn btn-bg banner-btn">Create user for free now</a>

                        </div>

                    </div>

                    <div class="col-md-6 mt-md-0 mt-4 wow bounceInUp" data-wow-duration="2s">

                        <img src="{{url('public/uploads/'.$occupancy_protocol->image)}}" class="w-100"/>

                    </div>

                </div>

            </section>

            <div class="col-md-7 mx-auto py-5 text-center content-container-upper-one">

                <h3 class="wow fadeInUp" data-wow-duration="2s">Precise security and security deposit</h3>

                <p class="wow fadeInUp" data-wow-duration="2s">As a landlord, you should always have some form of

                    security for your tenants. You can set up a deposit account via our partner Aprila Bank from NOK

                    0!</p>

            </div>

            <div class="banner-icon">

                <div class="banner-icon-inner">

                    <p class="text-center wow fadeInUp l-spacing-6px" data-wow-duration="2s">3 CHOICES</p>

                    <h2 class="text-center wow fadeInUp" data-wow-duration="2s">How to set up a deposit account with

                        Presis Utleie?</h2>

                    <div class="container-lg px-md-3 px-0">

                        <div class="row mx-0">

                            <div class="col-md-4 my-md-5 my-2 px-md-3 px-0 wow fadeInUp" data-wow-duration="2s">

                                <div class="banner-icon-inner-section">

                                    <h5>Deposit account free of charge via Aprila Bank if you are a Rent Guarantee

                                        customer</h5>

                                    <ul class="list-style-none">

                                        <li><span class="fa fa-check-circle mr-2"></span><span><b>If you choose a rent guarantee from Aprila Bank, we will make sure to get a 3 month deposit from your tenant</b> - you pay nothing for the deposit account if you are a Rent Guarantee customer</span>

                                        </li>

                                        <li><span class="fa fa-check-circle mr-2"></span><span><b>Access to Precise Rental Management system including the entire tenancy</b><em

                                                    class="d-block">(value: 588, - / year)</em></span></li>

                                        <li><span class="fa fa-check-circle mr-2"></span><b>Guaranteed paid every month

                                                on due date</b></li>

                                        <li><span class="fa fa-check-circle mr-2"></span><b>No administration with

                                                collection of rent</b></li>

                                        <li><span class="fa fa-check-circle mr-2"></span><span><b>Digital rental contract</b> with e-signing</span>

                                        </li>

                                    </ul>

                                    <a class="w-100 mt-4 mb-3 btn btn-bg">Read more about Aprila Rent Guarantee</a>

                                    <small class="d-block text-center">5% of the rent / month</small>

                                </div>

                            </div>

                            <div class="col-md-4 my-md-5 my-2 px-md-3 px-0 wow fadeInDown" data-wow-duration="2s">

                                <div class="position-relative overflow-hidden banner-icon-inner-section">

                                    <h5>Deposit account via Aprila Bank: Coming!</h5>

                                    <ul class="list-style-none">

                                        <li><span class="fa fa-check-circle mr-2"></span><span>The deposit account from Aprila Bank is in development these days and is just around the corner!</span>

                                        </li>

                                    </ul>

                                </div>

                            </div>

                            <div class="col-md-4 my-md-5 my-2 px-md-3 px-0 wow fadeInUp" data-wow-duration="2s">

                                <div class="banner-icon-inner-section">

                                    <h5>Deposit account or other security in another bank or institution</h5>

                                    <ul class="list-style-none">

                                        <li>If you do not want a Rent Guarantee from Aprila Bank, then the following is

                                            of course also possible to enter in the rental contract:

                                        </li>

                                        <li><span class="fa fa-check-circle mr-2"></span><span><b>Deposit account in another bank:</b> Enter the account number for the deposit account in the rental contract, and it will automatically appear in both the rental agreement on your pages</span>

                                        </li>

                                        <li><span class="fa fa-check-circle mr-2"></span><span><b>Deposit guarantee in another bank or NAV guarantee:</b> Enter information about the guarantee and who the guarantee issuer is in the rental contract, and it will appear both in the rental agreement and on your pages</span>

                                        </li>

                                        <li><span class="fa fa-check-circle mr-2"></span><span><b>No security:</b> Of course not recommended, but it is possible to choose no security if both the landlord and tenant agree on this.</span>

                                        </li>

                                    </ul>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="content-container-upper-two">

                <div class="container-lg px-md-3 px-0">

                    <h3 class="mb-4 text-center wow fadeInDown" data-wow-duration="2s">Useful information about deposit

                        account</h3>

                    <div class="mx-0 row">

                        <div class="mb-sm-4 mb-3 col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="2s">

                            <div class="h-100 light-box-shadow block-content">

                                <h5 class="mb-3 heading">Coverage for unpaid rent and costs for damages and the

                                    like</h5>

                                <p class="mb-0">Deposit account is the landlord's security for unpaid rent and any costs

                                    the landlord incurs in connection with damage to the home, or costs related to

                                    eviction.</p>

                            </div>

                        </div>

                        <div class="mb-sm-4 mb-3 col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="2s">

                            <div class="h-100 light-box-shadow block-content">

                                <h5 class="mb-3 heading">Maximum 6 month deposit</h5>

                                <p class="mb-0">It is not allowed to demand more than six months' deposit according to

                                    Rent Act §3-5.</p>

                            </div>

                        </div>

                        <div class="mb-sm-4 mb-3 col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="2s">

                            <div class="h-100 light-box-shadow block-content">

                                <h5 class="mb-3 heading">Created in the tenant's name</h5>

                                <p class="mb-0">The deposit amount must be deposited in a separate deposit account,

                                    created in the tenant's name. The tenant is the owner of the account, and earns

                                    earned interest paid to him.</p>

                            </div>

                        </div>

                        <div class="mb-sm-4 mb-3 col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="2s">

                            <div class="h-100 light-box-shadow block-content">

                                <h5 class="mb-3 heading">Not binding until the agreed security has been established</h5>

                                <p class="mb-0">The lease agreement is not binding on the landlord as long as the agreed

                                    security is not established. If the agreed security is not in order before moving

                                    in, this is to be regarded as a material breach of the lease, and the lease can be

                                    terminated by the landlord unless otherwise agreed.</p>

                            </div>

                        </div>

                        <div class="mb-sm-4 mb-3 col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="2s">

                            <div class="h-100 light-box-shadow block-content">

                                <h5 class="mb-3 heading">Landlord bears the cost of creating a deposit account</h5>

                                <p class="mb-0">Any expenses related to the establishment of a deposit account will be

                                    covered by the landlord, cf. the Rent Act § 3-5.</p>

                            </div>

                        </div>

                        <div class="mb-sm-4 mb-3 col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="2s">

                            <div class="h-100 light-box-shadow block-content">

                                <h5 class="mb-3 heading">Depositumsgaranti</h5>

                                <p class="mb-0">As an alternative to a deposit, a guarantee can be created. A guarantee

                                    works in the same way as a deposit, but here the landlord's counterparty in the

                                    event of a conflict will be an insurance company. The advantage for tenants when

                                    using a guarantee is that you pay a smaller lump sum. Remember that the guarantee

                                    has a limited duration, and if the tenant lives in the home for many years, you may

                                    have to renew the guarantee.</p>

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

