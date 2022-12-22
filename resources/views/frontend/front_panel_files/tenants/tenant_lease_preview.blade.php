<meta charset="UTF-8">
<meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link data-n-head="ssr" rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link rel="icon" type="image/png" href="{{asset('public/front_end/images/header/presis-logo-white.svg')}}">
<link rel="stylesheet" href="{{asset('public/front_end/css/bootstrap-4.5.3.min.css')}}">
<link rel="stylesheet" href="{{asset('public/front_end/css/poppins.css')}}">
<link  rel="stylesheet" href="{{asset('public/front_end/css/inter.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('dist/style.css')}}">
<style>
    .email-template-content {
        border-radius: 8px;
    }

    .email-template-content .center-content {
        border: 1px solid #48a955;
        padding: 15px;
        border-radius: 8px;
        box-shadow: 0 2px 10px #00000020;
    }

    .email-template-content .email-site-logo .site-logo {
        filter: invert(1);
        object-fit: contain;
        width: 120px;
    }

    .email-template-content .btn-bg-white, .email-template-content .btn-bg {
        min-width: 140px;
    }
</style>
<div class="col-xl-6 col-lg-8 mx-auto mt-5 admin-main-content">
    <div class="p-3 mb-5 light-box-shadow email-template-content">
        <div class="email-site-logo text-center mb-3">
            <img src="https://felagnew.ranglerz.pw/public/uploads/1632825280.png" class="site-logo" />
        </div>
        <div class="mt-5 text-center">
            <h6 class="text-muted">You have been invited to Leieadmin to enter into a rental agreement.</h6>
            <h6 class="mb-3 text-muted">Fortunately, getting started is very easy.</h6>
            <h6 class="text-muted">First you need to register a new user, or login if you are already registered.</h6>
            <h6 class="text-muted">Then we help you along the way.</h6>
        </div>
        <div class="my-5 center-content">
            <div class="row mx-0 below-head-block">
                <b class="col-6 pl-0 green-text">Type of rental Object:</b>
                <span class="col-6 px-0">{{$data->lease->rentalObject->rental_object}}</span>
            </div>
            <div class="row mx-0 below-head-block">
                <b class="col-6 pl-0 green-text">Property:</b>
                <span class="col-6 px-0">{{$data->lease->property->street_name}}</span>
            </div>
            <div class="row mx-0 below-head-block">
                <b class="col-6 pl-0 green-text">Rent:</b>
                <span class="col-6 px-0">kr {{$data->lease->rent_per_month}}</span>
            </div>
            <div class="row mx-0 below-head-block">
                <b class="col-6 pl-0 green-text">Agreement start date:</b>
                <span class="col-md-3 col-4 px-0">{{$data->lease->start_date_of_agreement}}</span>
            </div>
            <div class="row mx-0 below-head-block">
                <b class="col-6 pl-0 green-text">Agreement end date:</b>
                <span class="col-6 px-0">{{$data->lease->end_date_of_agreement}}</span>
            </div>
        </div>

        @if(Auth::check())
            <div class="text-md-right text-center">
                <a href="{{asset('tenant/create-lease')}}" class="mb-2 btn btn-bg">Go to your lease</a>
            </div>
        @else
            <div class="text-md-right text-center">
                <a href="{{asset('tenant/create-lease')}}" class="mb-2 btn btn-bg-white">login</a>
                <a href="{{asset('client/sign-up?tenant=tenant')}}" class="mb-2 btn btn-bg">Create new user</a>
            </div>
        @endif
    </div>
</div>












@include('frontend.includes.without_login_footer')
