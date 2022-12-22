@extends('frontend.layout.master')

@section('title')

    Digital Lease

@endsection



@section('content')

    <div class="main-content">

        <div class="precise-rent-contract">

            <section class="banner">

                <div class="row mx-0 banner-content">

                    <div class="col-md-6 wow slideInLeft" data-wow-duration="2s">

                        <div class="p-md-5 p-4 banner-content-block">

                            <h3 class="banner-heading">{{$create_lease->title}}</h3>

                            <p class="my-4 text-white">{{$create_lease->description}}</p>

                            <a href="{{url('client/login')}}" class="w-100 btn btn-bg banner-btn">Create lease now</a>

                        </div>

                    </div>

                    <div class="col-md-6 mt-md-0 mt-4 wow bounceInUp" data-wow-duration="2s">

                        <img src="{{url('public/uploads/'.$create_lease->image)}}" class="w-100"/>

                    </div>

                </div>

            </section>

            <div class="col-md-7 mx-auto py-5 text-center content-container-upper-one">

                <h3 class="wow fadeInUp" data-wow-duration="2s">Easy with bankID signing</h3>

                <p class="wow fadeInUp" data-wow-duration="2s">Precise Rental gives you access to perhaps the market's

                    simplest and safest digital rental contract. When you are going to rent out your home, a proper

                    lease is important, even if you are only going to rent out a dormitory. Precise Rental ensures

                    digital creation and digital signing of the lease - safe for both landlord and tenant.</p>

            </div>

            <div class="content-container-upper-two">

                <div class="container-lg px-md-3 px-0">

                    <h3 class="text-center mb-4 wow fadeInDown" data-wow-duration="2s">Why choose Precise Lease?</h3>

                    <div class="mx-0 row">

                        <div class="mb-sm-4 mb-3 col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="2s">

                            <div class="h-100 light-box-shadow block-content">

                                <span class="number">1</span>

                                <h5 class="mb-3 heading">Digital</h5>

                                <p class="mb-0">You create the entire rental contract easily on your own PC, mobile or

                                    tablet - zero pen and paper, zero nonsense.</p>

                            </div>

                        </div>

                        <div class="mb-sm-4 mb-3 col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="2s">

                            <div class="h-100 light-box-shadow block-content">

                                <span class="number">2</span>

                                <h5 class="mb-3 heading">Lots of great tips and advice</h5>

                                <p class="mb-0">You will be guided through the entire process from A to Z - we help you

                                    make sure that you choose the most appropriate choices, and that you avoid breaking

                                    the rent law.</p>

                            </div>

                        </div>

                        <div class="mb-sm-4 mb-3 col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="2s">

                            <div class="h-100 light-box-shadow block-content">

                                <span class="number">3</span>

                                <h5 class="mb-3 heading">Signing with BankID</h5>

                                <p class="mb-0">Signing of the rental contract with BankID. This makes the signing

                                    process simple, safe and smooth for both landlord and tenant.</p>

                            </div>

                        </div>

                        <div class="mb-sm-4 mb-3 col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="2s">

                            <div class="h-100 light-box-shadow block-content">

                                <span class="number">4</span>

                                <h5 class="mb-3 heading">Legally approved lease</h5>

                                <p class="mb-0">Our rental contact safeguards the Rent Act, as well as the best

                                    interests of both the landlord and tenant. Secure lease for both parties. The lease

                                    is based on the Consumer Council's lease.</p>

                            </div>

                        </div>

                        <div class="mb-sm-4 mb-3 col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="2s">

                            <div class="h-100 light-box-shadow block-content">

                                <span class="number">5</span>

                                <h5 class="mb-3 heading">Everything stored digitally</h5>

                                <p class="mb-0">After signing the rental contract, you will have access to a PDF of the

                                    file, which you will have stored digitally with all signatures in place.</p>

                            </div>

                        </div>

                        <div class="mb-sm-4 mb-3 col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="2s">

                            <div class="h-100 light-box-shadow block-content">

                                <span class="number">6</span>

                                <h5 class="mb-3 heading">For free!</h5>

                                <p class="mb-0">No hidden fees, no nonsense. Rent contract with BankID signing is

                                    completely free at Presis Utleie (maximum 1 lease free per customer).</p>

                            </div>

                        </div>

                    </div>

                    <div align="center" class="wow fadeInUp" data-wow-duration="2s">

                        <a href="{{url('client/login')}}" class="mt-md-3 btn btn-bg section-btn">Create lease now</a>

                    </div>

                </div>

            </div>

            <div class="content-container-upper-three">

                <div class="container-lg px-md-3 px-1">

                    <h3 class="text-center mb-4 wow fadeInDown" data-wow-duration="2s">That's how easy it is to create a

                        Precise Rental Contract</h3>

                    <div class="mx-0 row justify-content-md-center position-relative">

                        <div class="mb-sm-4 mb-3 col-lg-5 wow fadeInLeft" data-wow-duration="2s">

                            <div class="h-100 block-content block-content-right">

                                <p class="mb-0">Enter the address of the rental object you want to rent. Information

                                    such as farm number and use number is retrieved automatically from the Mapping

                                    Authority, so you do not need to think about this.</p>

                            </div>

                        </div>

                        <div class="col-lg-1 text-center">

                            <Span class="seperator">|</Span>

                        </div>

                        <div class="col-lg-5 number-outer wow fadeInLeft" data-wow-duration="2s">

                            <span class="number">1</span>

                        </div>

                    </div>

                    <div class="mx-0 row justify-content-md-center position-relative">

                        <div class="col-lg-5 number-outer wow fadeInRight" data-wow-duration="2s">

                            <span class="ml-lg-auto number">2</span>

                        </div>

                        <div class="col-lg-1 text-center">

                            <Span class="seperator">|</Span>

                        </div>

                        <div class="mb-sm-4 mb-3 col-lg-5 wow fadeInRight" data-wow-duration="2s">

                            <div class="h-100 block-content block-content-left">

                                <p class="mb-0">Select the start date (and any end time) of the rental agreement, the

                                    rental amount, and to which account you want to have the rent paid.</p>

                            </div>

                        </div>

                    </div>

                    <div class="mx-0 row justify-content-md-center position-relative">

                        <div class="mb-sm-4 mb-3 col-lg-5 wow fadeInLeft" data-wow-duration="2s">

                            <div class="h-100 block-content block-content-right">

                                <p class="mb-0">Enter the e-mail address of the tenant and press send!</p>

                            </div>

                        </div>

                        <div class="col-lg-1 text-center">

                            <Span class="seperator">|</Span>

                        </div>

                        <div class="col-lg-5 number-outer wow fadeInLeft" data-wow-duration="2s">

                            <span class="number">3</span>

                        </div>

                    </div>

                    <div class="mx-0 row justify-content-md-center position-relative">

                        <div class="col-lg-5 number-outer wow fadeInRight" data-wow-duration="2s">

                            <span class="ml-lg-auto number">4</span>

                        </div>

                        <div class="col-lg-1 text-center">

                            <Span class="seperator">|</Span>

                        </div>

                        <div class="mb-sm-4 mb-3 col-lg-5 wow fadeInRight" data-wow-duration="2s">

                            <div class="h-100 block-content block-content-left">

                                <p class="mb-0">The tenant receives a link by e-mail and opens it. When the tenant has

                                    read over the rental agreement, he / she signs super easily with BankID.</p>

                            </div>

                        </div>

                    </div>

                    <div class="mx-0 row justify-content-md-center position-relative">

                        <div class="mb-sm-4 mb-3 col-lg-5 wow fadeInLeft" data-wow-duration="2s">

                            <div class="h-100 block-content block-content-right">

                                <p class="mb-0">You will receive a link by e-mail with information that the tenant has

                                    signed the tenancy agreement. You sign the agreement with BankID.</p>

                            </div>

                        </div>

                        <div class="col-lg-1 text-center">

                            <Span class="seperator">|</Span>

                        </div>

                        <div class="col-lg-5 number-outer wow fadeInLeft" data-wow-duration="2s">

                            <span class="number">5</span>

                        </div>

                    </div>

                    <div class="mx-0 row justify-content-md-center position-relative">

                        <div class="col-lg-5 number-outer wow fadeInRight" data-wow-duration="2s">

                            <span class="ml-lg-auto number">6</span>

                        </div>

                        <div class="col-lg-1 text-center">

                            <Span class="seperator">|</Span>

                        </div>

                        <div class="mb-sm-4 mb-3 col-lg-5 wow fadeInRight" data-wow-duration="2s">

                            <div class="h-100 block-content block-content-left">

                                <p class="mb-0">Both you and the tenant get access to the signed document digitally in

                                    PDF.</p>

                            </div>

                        </div>

                    </div>

                    <div class="mx-0 row justify-content-md-center position-relative">

                        <div class="mb-sm-4 mb-3 col-lg-5 wow fadeInLeft" data-wow-duration="2s">

                            <div class="h-100 block-content block-content-right">

                                <p class="mb-0">You will receive a link by e-mail with information that the tenant has

                                    signed the tenancy agreement. You sign the agreement with BankID.</p>

                            </div>

                        </div>

                        <div class="col-lg-1 text-center">

                            <Span class="seperator">|</Span>

                        </div>

                        <div class="col-lg-5 number-outer wow fadeInLeft" data-wow-duration="2s">

                            <span class="number">7</span>

                        </div>

                    </div>

                </div>

            </div>

            <div class="content-container-upper-four">

                <div class="container-lg px-md-3 px-1">

                    <h3 class="text-center wow fadeInDown" data-wow-duration="2s">Contents of the lease</h3>

                    <p class="text-center wow fadeInDown" data-wow-duration="2s">The lease contract for Presis Utleie

                        contains all the elements that a traditional lease contract contains.</p>

                    <div class="mx-0 row">

                        <div class="mb-sm-4 mb-3 col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="2s">

                            <div class="h-100 light-box-shadow block-content">

                                <span class="mr-3 fa fa-check-circle"></span>

                                <h6 class="mb-0">Information about the property and the rental object</h6>

                            </div>

                        </div>

                        <div class="mb-sm-4 mb-3 col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="2s">

                            <div class="h-100 light-box-shadow block-content">

                                <span class="mr-3 fa fa-check-circle"></span>

                                <h6 class="mb-0">Information about landlord and tenant</h6>

                            </div>

                        </div>

                        <div class="mb-sm-4 mb-3 col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="2s">

                            <div class="h-100 light-box-shadow block-content">

                                <span class="mr-3 fa fa-check-circle"></span>

                                <h6 class="mb-0">Information about furnishing, house rules, electricity, internet and

                                    the like</h6>

                            </div>

                        </div>

                        <div class="mb-sm-4 mb-3 col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="2s">

                            <div class="h-100 light-box-shadow block-content">

                                <span class="mr-3 fa fa-check-circle"></span>

                                <h6 class="mb-0">The type and length of the tenancy</h6>

                            </div>

                        </div>

                        <div class="mb-sm-4 mb-3 col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="2s">

                            <div class="h-100 light-box-shadow block-content">

                                <span class="mr-3 fa fa-check-circle"></span>

                                <h6 class="mb-0">Rent amount (including any supplements such as electricity and water),

                                    rent account and due date</h6>

                            </div>

                        </div>

                        <div class="mb-sm-4 mb-3 col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="2s">

                            <div class="h-100 light-box-shadow block-content">

                                <span class="mr-3 fa fa-check-circle"></span>

                                <h6 class="mb-0">Bonding time and notice period</h6>

                            </div>

                        </div>

                        <div class="mb-sm-4 mb-3 col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="2s">

                            <div class="h-100 light-box-shadow block-content">

                                <span class="mr-3 fa fa-check-circle"></span>

                                <h6 class="mb-0">Deposit type, deposit size and deposit account number</h6>

                            </div>

                        </div>

                        <div class="mb-sm-4 mb-3 col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="2s">

                            <div class="h-100 light-box-shadow block-content">

                                <span class="mr-3 fa fa-check-circle"></span>

                                <h6 class="mb-0">Custom content</h6>

                            </div>

                        </div>

                        <div class="mb-sm-4 mb-3 col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="2s">

                            <div class="h-100 light-box-shadow block-content">

                                <span class="mr-3 fa fa-check-circle"></span>

                                <h6 class="mb-0">Reference to the legislation, as well as the parties' obligations in

                                    the tenancy</h6>

                            </div>

                        </div>

                    </div>

                    <div align="center" class="wow fadeInUp" data-wow-duration="2s">

                        <a href="{{url('client/login')}}" class="mt-md-3 btn btn-bg section-btn">Create lease now</a>

                    </div>

                </div>

            </div>

            <!--    <div class="content-container-upper-five">

                    <div class="container-lg px-md-3 px-0">

                        <h3 class="mb-4 text-center">also read</h3>

                        <div class="mx-0 row justify-content-center">

                            <div class="mb-sm-4 mb-3 col-lg-4 col-sm-6">

                                <a href="#" class="text-reset text-decoration-none d-inline-block h-100 light-box-shadow block-content">

                                    <div class="img-container">

                                        <img src="images/banner-img.jpg" class="w-100 h-100 object-fit-cover" />

                                    </div>

                                    <div class="p-3">

                                        <h5 class="mb-3">Rent contract - Security for landlord and tenant</h5>

                                        <p class="mb-0">Read about why you should have a good, written rental contract.</p>

                                    </div>

                                </a>

                            </div>

                            <div class="mb-sm-4 mb-3 col-lg-4 col-sm-6">

                                <a href="#" class="text-reset text-decoration-none d-inline-block h-100 light-box-shadow block-content">

                                    <div class="img-container">

                                        <img src="images/banner-img.jpg" class="w-100 h-100 object-fit-cover" />

                                    </div>

                                    <div class="p-3">

                                        <h5 class="mb-3">Rent contract - Security for landlord and tenant</h5>

                                        <p class="mb-0">Read about why you should have a good, written rental contract.</p>

                                    </div>

                                </a>

                            </div>

                            <div class="mb-sm-4 mb-3 col-lg-4 col-sm-6">

                                <a href="#" class="text-reset text-decoration-none d-inline-block h-100 light-box-shadow block-content">

                                    <div class="img-container">

                                        <img src="images/banner-img.jpg" class="w-100 h-100 object-fit-cover" />

                                    </div>

                                    <div class="p-3">

                                        <h5 class="mb-3">Rent contract - Security for landlord and tenant</h5>

                                        <p class="mb-0">Read about why you should have a good, written rental contract.</p>

                                    </div>

                                </a>

                            </div>

                        </div>

                    </div>

                </div>-->

        </div>

    </div>

@endsection

