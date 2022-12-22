{{--Side Bar Start--}}

<div class="sidebar-panel">
    <div class="gull-brand pr-3 text-center mt-4 mb-2 d-flex justify-content-center align-items-center">
        <img class="pl-3" src="{{asset('public/dist-assets/images/logo.png')}}" alt="alt"/>
        <!--  <span class=" item-name text-20 text-primary font-weight-700">GULL</span> -->
        <div class="sidebar-compact-switch ml-auto"><span></span></div>
    </div>
    <!--  user -->
    <div class="scroll-nav ps ps--active-y" data-perfect-scrollbar="data-perfect-scrollbar"
         data-suppress-scroll-x="true">
        <div class="side-nav">
            <div class="main-menu">
                <ul class="metismenu" id="menu">
                    <li class="Ul_li--hover">
                        <a  href="{{url('admin/dashboard')}}">
                            <i class="i-Bar-Chart text-20 mr-2 text-muted"></i>
                            <span class="item-name text-15 text-muted">Dashboard</span>
                        </a>
                    </li>
                    <li class="Ul_li--hover">
                        <a class="has-arrow" href="#">
                            <i class="i-Library text-20 mr-2 text-muted"></i>
                            <span class="item-name text-15 text-muted">Users</span>
                        </a>
                        <ul class="mm-collapse">
                            <li class="item-name">
                                <a href="{{url('admin/add-user')}}"><i
                                        class="nav-icon i-Bell1"></i><span
                                        class="item-name">Add Users</span></a></li>
                            <li class="item-name"><a href="{{url('admin/users-list')}}"><i class="nav-icon i-Bell1"></i><span
                                        class="item-name">Users List</span></a></li>
                        </ul>
                    </li>
                    {{-- start plans --}}
                    <li class="Ul_li--hover"><a class="has-arrow" href="#"><i
                                class="i-Library text-20 mr-2 text-muted"></i><span
                                class="item-name text-15 text-muted">Plans</span></a>
                        <ul class="mm-collapse">
                            <li class="item-name"><a href="{{route('plan.index')}}"><i
                                        class="nav-icon i-Bell1"></i><span
                                        class="item-name">Plans List</span></a></li>
                            <li class="item-name"><a href="{{route('plan.create')}}"><i
                                        class="nav-icon i-Bell1"></i><span
                                        class="item-name">Add Plan</span></a></li>

                        </ul>
                    </li>
                    {{-- end plans--}}
                    <li class="Ul_li--hover"><a class="has-arrow" href="#"><i
                                class="i-Suitcase text-20 mr-2 text-muted"></i><span
                                class="item-name text-15 text-muted">Customizations</span></a>
                        <ul class="mm-collapse">
{{--                            <li class="item-name">--}}
{{--                                <a href="{{url('admin/home-page-customization')}}"><i class="nav-icon i-Crop-2"></i>--}}
{{--                                    <span class="item-name">Home Page</span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
                            <li class="item-name"><a href="{{route('termsConditions.index')}}"><i
                                        class="nav-icon i-Bell1"></i><span
                                        class="item-name">Terms Conditions</span></a></li>
                            <li class="item-name"><a href="{{route('privacy.index')}}"><i
                                        class="nav-icon i-Bell1"></i><span
                                        class="item-name">Privacy Policy</span></a></li>
                            <li class="item-name"><a href="{{route('section.index')}}"><i
                                        class="nav-icon i-Bell1"></i><span
                                        class="item-name">Get Started Section</span></a></li>
                            <li class="item-name"><a href="{{url('admin/section/completely-free')}}"><i
                                        class="nav-icon i-Bell1"></i><span
                                        class="item-name">Completely Free</span></a></li>
                            <li class="item-name"><a href="{{url('admin/section/logo')}}"><i
                                        class="nav-icon i-Bell1"></i><span
                                        class="item-name">Logo</span></a></li>
                        </ul>
                    </li>
                    <li class="Ul_li--hover"><a class="has-arrow" href="#"><i
                                class="i-Library text-20 mr-2 text-muted"></i><span
                                class="item-name text-15 text-muted">Management Customizations</span></a>
                        <ul class="mm-collapse">
                            <li class="item-name"><a href="{{url('admin/section/free-system')}}"><i
                                        class="nav-icon i-Bell1"></i><span
                                        class="item-name">System Free</span></a></li>
                            <li class="item-name"><a href="{{url('admin/section/try-system')}}"><i
                                        class="nav-icon i-Bell1"></i><span
                                        class="item-name">Try System</span></a></li>
                            <li class="item-name"><a href="{{url('admin/section/occupancy-protocol')}}"><i
                                        class="nav-icon i-Bell1"></i><span
                                        class="item-name">Occupancy Protocol</span></a></li>
                            <li class="item-name"><a href="{{url('admin/section/lease')}}"><i
                                        class="nav-icon i-Bell1"></i><span
                                        class="item-name">Create Lease</span></a></li>
                            <li class="item-name"><a href="{{url('admin/section/rent')}}"><i
                                        class="nav-icon i-Bell1"></i><span
                                        class="item-name">Rent Collection</span></a></li>
                            <li class="item-name"><a href="{{url('admin/section/rent-guarantee')}}"><i
                                        class="nav-icon i-Bell1"></i><span
                                        class="item-name">Rent Guarantee</span></a></li>
                            <li class="item-name"><a href="{{url('admin/section/all-features')}}"><i
                                        class="nav-icon i-Bell1"></i><span
                                        class="item-name">All Features</span></a></li>

                        </ul>
                    </li>
                    <li class="Ul_li--hover"><a class="has-arrow" href="#"><i
                                class="i-Library text-20 mr-2 text-muted"></i><span
                                class="item-name text-15 text-muted">Questions</span></a>
                        <ul class="mm-collapse">
                            <li class="item-name"><a href="{{route('question.index')}}"><i class="nav-icon i-Bell1"></i><span
                                        class="item-name">Questions List</span></a></li>
                            <li class="item-name"><a href="{{route('question.create')}}"><i
                                        class="nav-icon i-Bell1"></i><span
                                        class="item-name">Add Question</span></a></li>

                        </ul>
                    </li>
                    <li class="Ul_li--hover"><a class="has-arrow" href="#"><i
                                class="i-Library text-20 mr-2 text-muted"></i><span
                                class="item-name text-15 text-muted">Property</span></a>
                        <ul class="mm-collapse">
                            <li class="item-name"><a href="{{route('admin-property.index')}}"><i class="nav-icon i-Bell1"></i><span
                                        class="item-name">Property List</span></a></li>
                            <li class="item-name"><a href="{{route('admin-property.create')}}"><i
                                        class="nav-icon i-Bell1"></i><span
                                        class="item-name">Add Property</span></a></li>

                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
        </div>
        <div class="ps__rail-y" style="top: 0px; height: 404px; right: 0px;">
            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 325px;"></div>
        </div>
        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
        </div>
        <div class="ps__rail-y" style="top: 0px; height: 404px; right: 0px;">
            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 325px;"></div>
        </div>
    </div>
    <!--  side-nav-close -->
</div>

{{--Side Bar End--}}
