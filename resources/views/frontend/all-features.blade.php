@extends('frontend.layout.master')
@section('title')
    All Features
@endsection
@section('content')
    <div class="main-content">
        <div class="all-features">
            <section class="banner">
                <div class="row mx-0 banner-content">
                    <div class="col-md-6 wow slideInLeft" data-wow-duration="2s">
                        <div class="p-md-5 p-4 banner-content-block">
                            <h3 class="banner-heading">{{$data[0]->title}}</h3>
                            <p class="my-4 text-white">{{$data[0]->description}}</p>
                            <a href="{{url('client/login')}}" class="w-100 btn btn-bg banner-btn">Got started!</a>
                        </div>
                    </div>
                    <div class="col-md-6 mt-md-0 mt-4 wow bounceInUp" data-wow-duration="2s">
                        <img src="{{asset('public/uploads/'.$data[0]->image)}}" class="w-100"/>
                    </div>
                </div>
            </section>
            <div class="col-md-6 mx-auto py-5 text-center content-container-upper-one">
                <h3 class="wow fadeInUp" data-wow-duration="2s">All functions in Precise Management System</h3>
                <p class="mb-0 wow fadeInUp" data-wow-duration="2s">We can help you with all aspects of renting out your home
                    from A to Z. The services are suitable both for you who are only renting a dormitory and for you who
                    have several rental homes. You can pick and choose the services that suit you and your needs.</p>
            </div>
            <div class="position-sticky navigation-bar">
                <a href="#pageSection1" class="btn">Before the tenancy start</a>
                <a href="#pageSection2" class="btn">Entering into the tenancy</a>
                <a href="#pageSection3" class="btn">Ongoing management and collection of rent</a>
                <a href="#pageSection4" class="btn">Termination of the tenancy</a>
                <a href="#pageSection5" class="btn">Other</a>
            </div>
            <div class="content-container-upper-two">
                <div class="container-lg">
                    <div id="pageSection1" class="page-section">
                        <h3 class="text-center wow fadeInUp" data-wow-duration="2s">Before the tenancy starts</h3>
                        <div class="row mx-0 my-3 align-items-center content-container-inner">
                            <div class="col-md-6 wow fadeInDown" data-wow-duration="2s">
                                <div class="content-container-inner-img">
                                    <img src="{{asset('public/uploads/'.$data[1]->image)}}"/>
                                </div>
                            </div>
                            <div class="col-md-6 wow fadeInUp" data-wow-duration="2s">
                                <div class="content-container-inner-section">
                                    <span class="text-white coming-soon-span">Coming Soon</span>
                                    <h4>{{$data[1]->title}}</h4>
                                    <p>{{$data[1]->description}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row mx-0 my-3 align-items-center content-container-inner">
                            <div class="col-md-6 wow fadeInUp" data-wow-duration="2s">
                                <div class="content-container-inner-section">
                                    <span class="text-white coming-soon-span">Coming Soon</span>
                                    <h4>{{$data[2]->title}}</h4>
                                    <p>{{$data[2]->description}}</p>
                                </div>
                            </div>
                            <div class="col-md-6 wow fadeInDown" data-wow-duration="2s">
                                <div class="content-container-inner-img">
                                    <img src="{{asset('public/uploads/'.$data[2]->image)}}"/>
                                </div>
                            </div>
                        </div>
                        <div class="row mx-0 my-3 align-items-center content-container-inner">
                            <div class="col-md-6 wow fadeInDown" data-wow-duration="2s">
                                <div class="content-container-inner-img">
                                    <img src="{{asset('public/uploads/'.$data[3]->image)}}"/>
                                </div>
                            </div>
                            <div class="col-md-6 wow fadeInUp" data-wow-duration="2s">
                                <div class="content-container-inner-section">
                                    <span class="text-white live-now-span">Live now!</span>
                                    <h4>{{$data[3]->title}}</h4>
                                    <p>{{$data[3]->description}}</p>
                                    <a href="{{url('client/login')}}" class="btn btn-bg section-btn">Got Started</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white content-container-upper-two">
                <div class="container-lg">
                    <div id="pageSection2" class="page-section">
                        <h3 class="text-center wow fadeInUp" data-wow-duration="2s">Entering into the tenancy</h3>
                        <div class="row mx-0 my-3 align-items-center content-container-inner">
                            <div class="col-md-6 wow fadeInDown" data-wow-duration="2s">
                                <div class="content-container-inner-img">
                                    <img src="{{asset('public/uploads/'.$data[4]->image)}}"/>
                                </div>
                            </div>
                            <div class="col-md-6 wow fadeInUp" data-wow-duration="2s">
                                <div class="content-container-inner-section">
                                    <span class="text-white live-now-span">Live now!</span>
                                    <h4>{{$data[4]->title}}</h4>
                                    <p>{{$data[4]->description}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row mx-0 my-3 align-items-center content-container-inner">
                            <div class="col-md-6 wow fadeInUp" data-wow-duration="2s">
                                <div class="content-container-inner-section">
                                    <span class="text-white live-now-span">Live now!</span>
                                    <h4>{{$data[5]->title}}</h4>
                                    <p>{{$data[5]->description}}</p>
                                </div>
                            </div>
                            <div class="col-md-6 wow fadeInDown" data-wow-duration="2s">
                                <div class="content-container-inner-img">
                                    <img src="{{asset('public/uploads/'.$data[5]->image)}}"/>
                                </div>
                            </div>
                        </div>
                        <div class="row mx-0 my-3 align-items-center content-container-inner">
                            <div class="col-md-6 wow fadeInDown" data-wow-duration="2s">
                                <div class="content-container-inner-img">
                                    <img src="{{asset('public/uploads/'.$data[6]->image)}}"/>
                                </div>
                            </div>
                            <div class="col-md-6 wow fadeInUp" data-wow-duration="2s">
                                <div class="content-container-inner-section">
                                    <span class="text-white live-now-span">Live now!</span>
                                    <h4>{{$data[6]->title}}</h4>
                                    <p>{{$data[6]->description}}</p>
                                    <a href="{{url('client/login')}}" class="btn btn-bg section-btn">Got Started</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-container-upper-two">
                <div class="container-lg">
                    <div id="pageSection3" class="page-section">
                        <h3 class="text-center wow fadeInUp" data-wow-duration="2s">Ongoing management and collection of rent</h3>
                        <div class="row mx-0 my-3 align-items-center content-container-inner">
                            <div class="col-md-6 wow fadeInDown" data-wow-duration="2s">
                                <div class="content-container-inner-img">
                                    <img src="{{asset('public/uploads/'.$data[7]->image)}}"/>
                                </div>
                            </div>
                            <div class="col-md-6 wow fadeInUp" data-wow-duration="2s">
                                <div class="content-container-inner-section">
                                    <span class="text-white coming-soon-span">Coming Soon</span>
                                    <h4>{{$data[7]->title}}</h4>
                                    <p>{{$data[7]->description}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row mx-0 my-3 align-items-center content-container-inner">
                            <div class="col-md-6 wow fadeInUp" data-wow-duration="2s">
                                <div class="content-container-inner-section">
                                    <span class="text-white coming-soon-span">Coming Soon</span>
                                    <h4>{{$data[8]->title}}</h4>
                                    <p>{{$data[8]->description}}</p>
                                </div>
                            </div>
                            <div class="col-md-6 wow fadeInDown" data-wow-duration="2s">
                                <div class="content-container-inner-img">
                                    <img src="{{asset('public/uploads/'.$data[8]->image)}}"/>
                                </div>
                            </div>
                        </div>
                        <div class="row mx-0 my-3 align-items-center content-container-inner">
                            <div class="col-md-6 wow fadeInDown" data-wow-duration="2s">
                                <div class="content-container-inner-img">
                                    <img src="{{asset('public/uploads/'.$data[9]->image)}}"/>
                                </div>
                            </div>
                            <div class="col-md-6 wow fadeInUp" data-wow-duration="2s">
                                <div class="content-container-inner-section">
                                    <span class="text-white live-now-span">Live now!</span>
                                    <h4>{{$data[9]->title}}</h4>
                                    <p>{{$data[9]->description}}</p>
                                    <a href="{{url('client/login')}}" class="btn btn-bg section-btn">Got Started</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white content-container-upper-two">
                <div class="container-lg">
                    <div id="pageSection4" class="page-section">
                        <h3 class="text-center wow fadeInUp" data-wow-duration="2s">Termination of the tenancy</h3>
                        <div class="row mx-0 my-3 align-items-center content-container-inner">
                            <div class="col-md-6 wow fadeInDown" data-wow-duration="2s">
                                <div class="content-container-inner-img">
                                    <img src="{{asset('public/uploads/'.$data[10]->image)}}"/>
                                </div>
                            </div>
                            <div class="col-md-6 wow fadeInUp" data-wow-duration="2s">
                                <div class="content-container-inner-section">
                                    <span class="text-white live-now-span">Live now!</span>
                                    <h4>{{$data[10]->title}}</h4>
                                    <p>{{$data[10]->description}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row mx-0 my-3 align-items-center content-container-inner">
                            <div class="col-md-6 wow fadeInUp" data-wow-duration="2s">
                                <div class="content-container-inner-section">
                                    <span class="text-white live-now-span">Live now!</span>
                                    <h4>{{$data[11]->title}}</h4>
                                    <p>{{$data[11]->description}}</p>
                                </div>
                            </div>
                            <div class="col-md-6 wow fadeInDown" data-wow-duration="2s">
                                <div class="content-container-inner-img">
                                    <img src="{{asset('public/uploads/'.$data[11]->image)}}"/>
                                </div>
                            </div>
                        </div>
                        <div class="row mx-0 my-3 align-items-center content-container-inner">
                            <div class="col-md-6 wow fadeInDown" data-wow-duration="2s">
                                <div class="content-container-inner-img">
                                    <img src="{{asset('public/uploads/'.$data[12]->image)}}"/>
                                </div>
                            </div>
                            <div class="col-md-6 wow fadeInUp" data-wow-duration="2s">
                                <div class="content-container-inner-section">
                                    <span class="text-white live-now-span">Live now!</span>
                                    <h4>{{$data[12]->title}}</h4>
                                    <p>{{$data[12]->description}}</p>
                                    <a href="{{url('client/login')}}" class="btn btn-bg section-btn">Got Started</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-container-upper-two">
                <div class="container-lg">
                    <div id="pageSection5" class="page-section">
                        <h3 class="text-center wow fadeInUp" data-wow-duration="2s">Other</h3>
                        <div class="row mx-0 my-3 align-items-center content-container-inner">
                            <div class="col-md-6 wow fadeInDown" data-wow-duration="2s">
                                <div class="content-container-inner-img">
                                    <img src="{{asset('public/uploads/'.$data[13]->image)}}"/>
                                </div>
                            </div>
                            <div class="col-md-6 wow fadeInUp" data-wow-duration="2s">
                                <div class="content-container-inner-section">
                                    <span class="text-white coming-soon-span">Coming Soon</span>
                                    <h4>{{$data[13]->title}}</h4>
                                    <p>{{$data[13]->description}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row mx-0 my-3 align-items-center content-container-inner">
                            <div class="col-md-6 wow fadeInUp" data-wow-duration="2s">
                                <div class="content-container-inner-section">
                                    <span class="text-white coming-soon-span">Coming Soon</span>
                                    <h4>{{$data[14]->title}}</h4>
                                    <p>{{$data[14]->description}}</p>
                                </div>
                            </div>
                            <div class="col-md-6 wow fadeInDown" data-wow-duration="2s">
                                <div class="content-container-inner-img">
                                    <img src="{{asset('public/uploads/'.$data[14]->image)}}"/>
                                </div>
                            </div>
                        </div>
                        <div class="row mx-0 my-3 align-items-center content-container-inner">
                            <div class="col-md-6 wow fadeInDown" data-wow-duration="2s">
                                <div class="content-container-inner-img">
                                    <img src="{{asset('public/uploads/'.$data[15]->image)}}"/>
                                </div>
                            </div>
                            <div class="col-md-6 wow fadeInUp" data-wow-duration="2s">
                                <div class="content-container-inner-section">
                                    <span class="text-white live-now-span">Live now!</span>
                                    <h4>{{$data[15]->title}}</h4>
                                    <p>{{$data[15]->description}}</p>
                                    <a href="{{url('client/login')}}" class="btn btn-bg section-btn">Got Started</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-icon">
                <div class="text-center banner-icon-inner">
                    <h2 class="wow fadeInUp" data-wow-duration="2s">Get started with Felag Rentals for free now!</h2>
                    <p class="text-center wow fadeInUp" data-wow-duration="2s">You can create your first rental contract in less than 2 minutes.</p>
                    <a href="{{url('client/login')}}" class="btn banner-icon-btn wow fadeInUp" data-wow-duration="2s">YouIt's completely free!</a>
                </div>
            </div>
        </div>
    </div>
@endsection
