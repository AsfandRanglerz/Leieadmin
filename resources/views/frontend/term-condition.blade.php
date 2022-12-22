@extends('frontend.layout.master')
@section('title')
   Term of use
@endsection

@section('content')
    <div class="main-content">
        <div class="privacy-policy">
            <section class="banner">
                <div class="banner-content">
                    <div class="col-lg-8 mx-auto p-md-5 p-4 banner-content-block wow fadeInLeft" data-wow-duration="2s">
                        <h2 class="banner-heading">Term & Condition</h2>
                    </div>
                </div>
            </section>
            <div class="mt-md-5 mt-4 container-lg">
                {!! $data->description !!}
            </div>
        </div>
    </div>
@endsection
