@extends('frontend.layout.master')
@section('title')
    Rent Guarantee
@endsection

@section('content')
    <div class="main-content">
        <div class="rent-guarantee">
            <section class="banner">
                <div class="row mx-0 banner-content">
                    <div class="col-md-6 wow slideInLeft" data-wow-duration="2s">
                        <div class="p-md-5 p-4 banner-content-block">
                            <h3 class="banner-heading">{{$rent_guarantee[0]->title}}</h3>
                            <p class="my-4 text-white">{{$rent_guarantee[0]->description}}</p>
                            <a href="{{url('client/sign-up')}}" class="w-100 btn btn-bg banner-btn">Create user for free now!</a>
                        </div>
                    </div>
                    <div class="col-md-6 mt-md-0 mt-4 wow bounceInUp" data-wow-duration="2s">
                        <img src="{{asset('public/uploads/'.$rent_guarantee[0]->image)}}" class="w-100"/>
                    </div>
                </div>
            </section>

            <div class="content-container-upper-two">
                <div class="col-md-8 mx-auto px-md-3 px-0">


                    <div class="mx-0 row">
                        @for ($i = 1; $i < count($rent_guarantee); $i++)
                            <div class="mb-sm-4 mb-3 col-sm-6 wow fadeInUp" data-wow-duration="2s">
                                <div class="h-100 light-box-shadow block-content">
                                    <div class="mb-2 img-holder">
                                        <img src="{{asset('public/uploads/'.$rent_guarantee[$i]->image)}}"
                                             class="w-100 h-100 object-fit-contain">
                                    </div>
                                    <h5 class="mb-3 heading">{{$rent_guarantee[$i]->title}}</h5>
                                    <p class="mb-0">{{$rent_guarantee[$i]->description}}</p>
                                </div>
                            </div>
                        @endfor
                        {{--                    <div class="mb-sm-4 mb-3 col-sm-6 wow fadeInUp" data-wow-duration="2s">--}}
                        {{--                        <div class="h-100 light-box-shadow block-content">--}}
                        {{--                            <div class="mb-2 img-holder">--}}
                        {{--                                <img src="{{asset('public/front_end/images/aprila.png')}}" class="w-100 h-100 object-fit-contain">--}}
                        {{--                            </div>--}}
                        {{--                            <h5 class="mb-3 heading">Rental insurance</h5>--}}
                        {{--                            <p class="mb-0">Including rental insurance that covers damage to the home, costs in the event of theft or embezzlement of the tenant, or costs in the event of eviction of the tenant. The rental insurance is offered by If Forsikring and covers costs in addition to the coverage from the deposit up to NOK 500,000.</p>--}}
                        {{--                        </div>--}}
                        {{--                    </div>--}}
                        {{--                    <div class="mb-sm-4 mb-3 col-sm-6 wow fadeInUp" data-wow-duration="2s">--}}
                        {{--                        <div class="h-100 light-box-shadow block-content">--}}
                        {{--                            <div class="mb-2 img-holder">--}}
                        {{--                                <img src="{{asset('public/front_end/images/aprila.png')}}" class="w-100 h-100 object-fit-contain">--}}
                        {{--                            </div>--}}
                        {{--                            <h5 class="mb-3 heading">Deposit account</h5>--}}
                        {{--                            <p class="mb-0">A deposit account is created automatically upon signing the rental contract - completely without administration on your part. Aprila Bank ensures that the tenant transfers 3 months' rent to the deposit account before moving in.</p>--}}
                        {{--                        </div>--}}
                        {{--                    </div>--}}
                        {{--                    <div class="mb-sm-4 mb-3 col-sm-6 wow fadeInUp" data-wow-duration="2s">--}}
                        {{--                        <div class="h-100 light-box-shadow block-content">--}}
                        {{--                            <div class="mb-2 img-holder">--}}
                        {{--                                <img src="{{asset('public/front_end/images/aprila.png')}}" class="w-100 h-100 object-fit-contain">--}}
                        {{--                            </div>--}}
                        {{--                            <h5 class="mb-3 heading">Credit check by tenant</h5>--}}
                        {{--                            <p class="mb-0">Included in the rent guarantee, the tenant is credit-checked under the auspices of Experian, to ensure that you have a payable tenant without payment remarks.</p>--}}
                        {{--                        </div>--}}
                        {{--                    </div>--}}
                    </div>

                </div>
            </div>

            <div class="content-container-upper-three">
                <div class="container-lg px-md-3 px-1">
                    <h3 class="text-center mb-4 wow fadeInDown" data-wow-duration="2s">That's how simple Aprila Rent
                        Guarantee is</h3>
                    <div class="mx-0 row justify-content-md-center position-relative">
                        <div class="mb-sm-4 mb-3 col-lg-5 wow fadeInLeft" data-wow-duration="2s">
                            <div class="h-100 block-content block-content-right">
                                <h5>Create a user in Precise Rental</h5>
                                <p class="mb-0">To access the Aprila Rent Guarantee, you must be a user of Presis
                                    Utleie.</p>
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
                                <h5>Verification and onboarding</h5>
                                <p class="mb-0">You verify with BankID, answer a few simple questions, and sign a rent
                                    guarantee agreement with Aprila Bank.</p>
                            </div>
                        </div>
                    </div>
                    <div class="mx-0 row justify-content-md-center position-relative">
                        <div class="mb-sm-4 mb-3 col-lg-5 wow fadeInLeft" data-wow-duration="2s">
                            <div class="h-100 block-content block-content-right">
                                <h5>Create a lease and add a tenant</h5>
                                <p class="mb-0">Create a lease, add a tenant, and sign the lease with BankID.</p>
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
                                <h5>Get the lease approved by Aprila Bank</h5>
                                <p class="mb-0">Aprila Bank spends up to one day approving the lease, but typically this
                                    is much faster.</p>
                            </div>
                        </div>
                    </div>
                    <div class="mx-0 row justify-content-md-center position-relative">
                        <div class="mb-sm-4 mb-3 col-lg-5 wow fadeInLeft" data-wow-duration="2s">
                            <div class="h-100 block-content block-content-right">
                                <h5>Deposit account is created automatically</h5>
                                <p class="mb-0">The deposit account is created automatically in the tenant's name. The
                                    tenant is automatically sent a request for payment on a deposit corresponding to 3
                                    months' rent.</p>
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
                                <h5>The tenancy starts and you are guaranteed the rent on account every month</h5>
                                <p class="mb-0">The rent is invoiced automatically and is guaranteed in your account
                                    until the due date every month. This also applies in cases where the tenant is
                                    behind with payment. In the event of non-payment by the tenant, you are guaranteed
                                    rent on account on the due date every month for up to 6 months.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="banner-icon">
                <div class="banner-icon-inner light-grey-bg">
                    <h2 class="mb-4 text-center heading wow fadeInDown" data-wow-duration="2s">Questions and answers
                        about Rent Guarantee</h2>
                    <div class="container-lg px-md-3 px-0">
                        <div class="accordion" id="rentGuaranteeFaqs">
                            @forelse($questions as $question)
                                <div class="card">
                                    <div class="p-0 card-header">
                                        <h5 class="mb-0 p-3 d-flex justify-content-between collapsing-bar"
                                            data-toggle="collapse" data-target="#rentGuaranteeFaqs{{$question->id}}">
                                            {{$question->question}}
                                            <span class="fa fa-plus"></span>
                                        </h5>
                                    </div>
                                    <div id="rentGuaranteeFaqs{{$question->id}}" class="collapse"
                                         data-parent="#rentGuaranteeFaqs">
                                        <div class="card-body">
                                            <p>{!! $question->answer !!}</p>
                                        </div>
                                    </div>
                                </div>
                            @empty
                            @endforelse
                            {{--                        <div class="card">--}}
                            {{--                            <div class="p-0 card-header">--}}
                            {{--                                <h5 class="mb-0 p-3 d-flex justify-content-between collapsing-bar" data-toggle="collapse" data-target="#rentGuaranteeFaqsTwo">--}}
                            {{--                                    Can I rent to anyone?--}}
                            {{--                                    <span class="fa fa-plus"></span>--}}
                            {{--                                </h5>--}}
                            {{--                            </div>--}}
                            {{--                            <div id="rentGuaranteeFaqsTwo" class="collapse" data-parent="#rentGuaranteeFaqs">--}}
                            {{--                                <div class="card-body">--}}
                            {{--                                    <p>You choose which tenant you want to rent to. In order to offer the rent guarantee, on the other hand, it is a requirement that the tenant does not have payment remarks, has a Norwegian birth number or D-number, and must be able to sign the lease with BankID.</p>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                            {{--                        </div>--}}
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection
