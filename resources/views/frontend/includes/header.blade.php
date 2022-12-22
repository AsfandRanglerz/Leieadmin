<nav class="navbar navbar-expand-lg header-navbar">
    <div class="container-xl container-fluid">
        <div class="d-flex align-items-center justify-content-between navbar-brand-toggle-outer main-nav-bar">
            <a class="mr-0 navbar-brand" href="{{route('home')}}">

                @php
                    $data=App\Models\LeieadminLogo::first();
                @endphp

                <img src="{{asset('public/uploads/'.$data->logo)}}" class="feelag-logo">
                {{--                <span class="felag-logo-text">Logo</span>--}}
            </a>
            <div class="d-flex" style="column-gap: 8px">
                @if(\Illuminate\Support\Facades\Auth::user())
                    <div class="d-lg-none d-block navbar p-0 rounded-circle admin-panel-header">
                        <div class="dropdown ml-auto">
                            <a class="p-0 btn dropdown-toggle" role="button" id="profContentBtn" data-toggle="dropdown">
                                <img src="{{asset('public/images/'.\Illuminate\Support\Facades\Auth::user()->image)}}"
                                     class="profile-user-pic"/>
                            </a>
                            @if(\Illuminate\Support\Facades\Auth::user()->user_type=='private_landlord')
                            <div
                                class="dropdown-menu dropdown-menu-right animated-dropdown slideIn w-100 border-0 dark-box-shadow">
                                <b class="text-muted text-uppercase d-block mb-2 user-name-text">User Menu</b>
                                <a class="dropdown-item" href="{{url('client/dashboard')}}"><span
                                        class="fa fa-tachometer-alt mr-2"></span>Dashboard</a>
                                <hr class="my-1">
                                <a class="dropdown-item" href="{{url('client/administration')}}"><span
                                        class="fa fa-user-alt mr-2"></span>My Profile</a>
                                <hr class="my-1">
                                <a class="dropdown-item" href="#"><span class="fa fa-cogs mr-2"></span>Settings</a>
                                <hr class="my-1">

                                <a class="dropdown-item" href="{{url('client/logout')}}"><span
                                        class="fa fa-sign-out-alt mr-2"></span>Logout</a>
                            </div>
                            @else
                            <div
                                class="dropdown-menu dropdown-menu-right animated-dropdown slideIn w-100 border-0 dark-box-shadow">
                                <b class="text-muted text-uppercase d-block mb-2 user-name-text">User
                                    Menu</b>
                                <a class="dropdown-item" href="{{url('tenant/administration')}}"><span
                                        class="fa fa-user-alt mr-2"></span>My Profile</a>
                                <hr class="my-1">
                                <a class="dropdown-item" href="#"><span class="fa fa-cogs mr-2"></span>Settings</a>
                                <hr class="my-1">
                                <a class="dropdown-item" href="{{url('tenant/logout')}}"><span
                                        class="fa fa-sign-out-alt mr-2"></span>Logout</a>
                            </div>
                            @endif
                        </div>
                    </div>
                @endif
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#felagNavBar"
                        aria-controls="felagNavBar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span>
                </button>
            </div>
        </div>
        <div class="collapse navbar-collapse justify-content-around navbar-links" id="felagNavBar">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="dropdownNavOne" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        Precise Management System<span class="ml-2 fa fa-angle-down"></span>
                    </a>
                    <div class="dropdown-menu animated-dropdown slideIn" aria-labelledby="dropdownNavOne">
                        <div class="row">
                            <div class="col-md-4 dropdown-menu-section">
                                <div class="d-flex flex-column">
                                    <a class="dropdown-item d-inline-block" href="{{url('client/management-system')}}">Management
                                        System</a>
                                    <a class="dropdown-item d-inline-block" href="{{url('client/digital-lease')}}">Digital
                                        Lease</a>
                                    <a class="dropdown-item d-inline-block" href="{{url('client/rent-collection')}}">Collection
                                        of rent</a>
                                </div>
                            </div>
                            <div class="col-md-4 dropdown-menu-section">
                                <div class="d-flex flex-column">
                                    <a class="dropdown-item d-inline-block" href="{{url('client/deposit-account')}}">Deposit
                                        Account</a>
                                    <a class="dropdown-item d-inline-block" href="{{url('client/rent-guarantee')}}">Rent
                                        Guarantee</a>
                                    <a class="dropdown-item d-inline-block" href="{{url('client/occupancy-protocol')}}">Occupancy
                                        Protocol</a>
                                </div>
                            </div>
                            <div class="col-md-4 dropdown-menu-section">
                                <a class="dropdown-item d-inline-block" href="{{url('client/prices')}}">Prices</a>
                                <a class="dropdown-item d-inline-block" href="{{url('client/all-features')}}">All
                                    Features</a>
                                {{--                                <a class="dropdown-item d-inline-block" href="{{url('client/prices')}}">Prices</a>--}}
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('client/precise-rent-contract')}}">Precise Rent Contract</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('client/prices')}}">Prices</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="dropdownNavTwo" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        Contact Support<span class="ml-2 fa fa-angle-down"></span>
                    </a>
                    <div class="dropdown-menu animated-dropdown slideIn" aria-labelledby="dropdownNavTwo">
                        <a class="dropdown-item" href="{{url('client/contact-us')}}">Contact Us</a>
                    </div>
                </li>
            </ul>
            {{--            {{dd(Auth::user())}}--}}
                
                @if(\Illuminate\Support\Facades\Auth::user())
                    <div class="d-lg-block d-none navbar p-0 rounded-circle admin-panel-header">
                        <div class="dropdown ml-auto">
                            <a class="p-0 btn dropdown-toggle" role="button" id="profContentBtn" data-toggle="dropdown">
                                <img src="{{asset('public/images/'.\Illuminate\Support\Facades\Auth::user()->image)}}"
                                    class="profile-user-pic"/>
                            </a>
                            @if(\Illuminate\Support\Facades\Auth::user()->user_type=='private_landlord')
                                <div
                                    class="dropdown-menu dropdown-menu-right animated-dropdown slideIn w-100 border-0 dark-box-shadow">
                                    <b class="text-muted text-uppercase d-block mb-2 user-name-text">User Menu</b>
                                    <a class="dropdown-item" href="{{url('client/dashboard')}}"><span
                                            class="fa fa-tachometer-alt mr-2"></span>Dashboard</a>
                                    <hr class="my-1">
                                    <a class="dropdown-item" href="{{url('client/administration')}}"><span
                                            class="fa fa-user-alt mr-2"></span>My Profile</a>
                                    <hr class="my-1">
                                    <a class="dropdown-item" href="#"><span class="fa fa-cogs mr-2"></span>Settings</a>
                                    <hr class="my-1">

                                    <a class="dropdown-item" href="{{url('client/logout')}}"><span
                                            class="fa fa-sign-out-alt mr-2"></span>Logout</a>
                                    @elseif(\Illuminate\Support\Facades\Auth::user()->user_type=='tenant')
                                        <div
                                            class="dropdown-menu dropdown-menu-right animated-dropdown slideIn w-100 border-0 dark-box-shadow">
                                            <b class="text-muted text-uppercase d-block mb-2 user-name-text">User Menu</b>
                                            <a class="dropdown-item" href="{{url('client/dashboard')}}"><span
                                                    class="fa fa-tachometer-alt mr-2"></span>Dashboard</a>
                                            <hr class="my-1">
                                            <a class="dropdown-item" href="{{url('client/administration')}}"><span
                                                    class="fa fa-user-alt mr-2"></span>My Profile</a>
                                            <hr class="my-1">
                                            <a class="dropdown-item" href="#"><span class="fa fa-cogs mr-2"></span>Settings</a>
                                            <hr class="my-1">

                                            <a class="dropdown-item" href="{{url('client/logout')}}"><span
                                                    class="fa fa-sign-out-alt mr-2"></span>Logout</a>

                                            @else
                                                <div
                                                    class="dropdown-menu dropdown-menu-right animated-dropdown slideIn w-100 border-0 dark-box-shadow">
                                                    <b class="text-muted text-uppercase d-block mb-2 user-name-text">User
                                                        Menu</b>
                                                    <a class="dropdown-item" href="{{url('tenant/administration')}}"><span
                                                            class="fa fa-user-alt mr-2"></span>My Profile</a>
                                                    <hr class="my-1">
                                                    <a class="dropdown-item" href="#"><span class="fa fa-cogs mr-2"></span>Settings</a>
                                                    <hr class="my-1">
                                                    <a class="dropdown-item" href="{{url('tenant/logout')}}"><span
                                                            class="fa fa-sign-out-alt mr-2"></span>Logout</a>
                                                    @endif
                                                </div>
                                        </div>
                                </div>
                                {{--            @else--}}
                                {{--                <a href="{{url('client/login')}}" class="a-link">Sign in</a>--}}
                                {{--            @endif--}}

                        </div>
                    </div>
                @else
                    <div class="d-lg-none d-block mt-4 mb-2" align="center">
                        <a href="{{url('client/login')}}" class="mr-2 btn sign-in-btn">Sign in</a>
                        <a href="{{url('client/sign-up')}}" class="btn btn-bg">Start now</a>
                    </div>
                @endif
                
                @if(!\Illuminate\Support\Facades\Auth::user())
                    <div class="d-lg-inline-block d-none">
                        <a href="{{url('client/login')}}" class="mr-2 btn sign-in-btn">Sign in</a>
                        <a href="{{url('client/sign-up')}}" class="btn btn-bg">Start now</a>
                    </div>
                @endif
        </div>
    </div>
</nav>
