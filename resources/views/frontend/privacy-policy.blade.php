@extends('frontend.layout.master')
@section('title')
    Privacy Policy
@endsection

@section('content')
    <div class="main-content">
        <div class="privacy-policy">
            <section class="banner">
                <div class="banner-content">
                    <div class="col-lg-8 mx-auto p-md-5 p-4 banner-content-block wow fadeInLeft" data-wow-duration="2s">
                        <h2 class="banner-heading">Privacy Statement</h2>
                    </div>
                </div>
            </section>
            <div class="mt-md-5 mt-4 container-lg">
                {!! $data->description !!}
            </div>
        </div>
    </div>
@endsection
