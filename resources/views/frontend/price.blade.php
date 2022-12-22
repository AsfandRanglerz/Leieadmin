@extends('frontend.layout.master')
@section('title')
    Prices
@endsection

@section('content')
    <div class="main-content">
        <div class="prices">
            <section class="banner">
                <div class="banner-content">
                    <div class="col-md-8 mx-auto p-md-5 p-4 banner-content-block wow fadeInLeft" data-wow-duration="2s">
                        <h3 class="banner-heading">Prices and subscription</h3>
                        <p class="mt-4 mb-0 text-white">You can choose from three different versions of Precise Rentals.
                            Simple lease is for you who only need a lease here and now. Precise Management System is for
                            you who want control over your tenancies, and Rent Guarantee is for you who want to make the
                            least of the job yourself.</p>
                    </div>
                </div>
            </section>
            <div class="banner-icon">
                <div class="banner-icon-inner light-grey-bg">
                    <h2 class="text-center heading wow fadeInUp" data-wow-duration="2s">Prices and subscription
                        plans</h2>
                    <p class="text-center p-text wow fadeInUp" data-wow-duration="2s">Everything from a completely
                        simple and digital rental contract, to guaranteed rent due every single month</p>
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
