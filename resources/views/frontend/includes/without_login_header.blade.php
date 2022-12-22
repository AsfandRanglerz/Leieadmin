<!DOCTYPE html>
<html lang="en">
<head>
    <title>Leieadmin</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{asset('public/front_end/images/header/presis-logo-white.svg')}}">
</head>
<!--paste this code under the head tag-->
<div id="loader">
    <span id="loaderGif"></span>
</div>
<!--paste this code under the head tag-->
<body>
<nav class="row mx-0 position-sticky top-0 d-flex align-items-center admin-panel-header">
    <div class="col-6">
        @php
            $data=App\Models\LeieadminLogo::first();
        @endphp
        <a href="{{route('home')}}" class="text-decoration-none a-link"><img src="{{asset('public/uploads/'.$data->logo)}}" width="95" class=object-fit-contain"></a>
    </div>
    <div class="col-6 text-right">
        @if(\Illuminate\Support\Facades\Auth::user())
            <img src="{{asset('public/images/'.\Illuminate\Support\Facades\Auth::user()->image)}}" class="profile-user-pic" />
        @else
        <a href="{{url('client/login')}}" class="a-link">Sign in</a>
        @endif

    </div>
</nav>
