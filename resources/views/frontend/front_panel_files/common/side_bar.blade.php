<div id="dashboardSidebar">
    @php
        $data=App\Models\LeieadminLogo::first();
    @endphp
    <img src="{{asset('public/uploads/'.$data->logo)}}" class="p-3 sidebar-logo"/>
    <aside class="side-nav">
        <ul class="mb-0 side-nav-links">
            @if(auth()->user()->user_type !='tenant')
                <li class="position-relative {{(request()->is('client/dashboard')) ? 'active' : ''}}">
                    <a href="{{url('client/dashboard')}}" class="sidebar-links"><span
                            class="fa fa-tachometer-alt text-white pr-2 sidebar-link-icons"></span>Front Page</a>
                </li>
            @else
                <li class="position-relative  {{(request()->is('tenant/dashboard')) ? 'active':''}}">
                    <a href="{{url('tenant/dashboard')}}" class="sidebar-links"><span
                            class="fa fa-tachometer-alt text-white pr-2 sidebar-link-icons"></span>Front Page</a>
                </li>
            @endif

            @if(auth()->user()->user_type !='tenant')

                <li class="position-relative dropdown @if(request()->routeIs('allProperties', 'allRental','client/properties/create-property','client/properties/create-rental-object')) active @endif">
                    <a href="#" class="sidebar-links"><span
                            class="fa fa-building text-white pr-2 sidebar-link-icons"></span>Property</a>
                    <ul class="side-nav-dropdown">
                        <li class="@if(request()->routeIs('allProperties')) active @endif">
                            <a href="{{url('client/properties/all-properties')}}" class="sidebar-links">All
                                Properties</a>
                        </li>
                        <li class="@if(request()->routeIs('allRental')) active @endif">
                            <a href="{{url('client/properties/all-rental-properties')}}" class="sidebar-links">All
                                Rental Properties</a>
                        </li>
                        <li class="{{(request()->is('client/properties/create-property')) ? 'active' : ''}}">
                            <a href="{{url('client/properties/create-property')}}" class="sidebar-links">Create
                                Property</a>
                        </li>
                        <li class="{{(request()->is('client/properties/create-rental-object')) ? 'active' : ''}}">
                            <a href="{{url('client/properties/create-rental-object')}}" class="sidebar-links">Create
                                Rental Object</a>
                        </li>
                    </ul>
                </li>
            @endif
            @if(auth()->user()->user_type !='tenant')
                <li class="position-relative dropdown  @if(request()->is('client/leases/all-leases','client/leases/open-lease','client/leases/create-lease','client/leases')) active @endif">
                    <a href="#" class="sidebar-links"><span
                            class="fa fa-handshake text-white pr-2 sidebar-link-icons"></span>Leases</a>
                    <ul class="side-nav-dropdown">
                        <li class="{{(request()->is('client/leases/all-leases','client/leases/open-lease')) ? 'active' : ''}}">
                            <a href="{{url('client/leases/all-leases')}}" class="sidebar-links">All Leases</a>
                        </li>
                        <li class="{{(request()->is('client/leases/create-lease','client/leases')) ? 'active' : ''}}">
                            <a href="{{url('client/leases')}}" class="sidebar-links">Create Lease</a>
                        </li>
                    </ul>
                </li>

            @else
                <li class="position-relative {{(request()->is('tenant/create-lease')) ? 'active' : ''}}">
                    <a href="{{url('tenant/create-lease')}}" class="sidebar-links">
                        <span class="fa fa fa-handshake text-white pr-2 sidebar-link-icons"></span>Leases</a>
                </li>
                {{--                <li class="{{((request()->is('client/leases/all-leases')) ? 'active' : '') || ((request()->is('client/leases/open-lease')) ? 'active' : '')}}">--}}
                {{--                    <a href="{{url('client/leases/all-leases')}}" class="sidebar-links"><span class="fa fa-handshake text-white pr-2 sidebar-link-icons"></span>Leases</a>--}}
                {{--                </li>--}}
            @endif
            @if(auth()->user()->user_type !='tenant')
                <li class="position-relative {{(request()->is('client/administration')) ? 'active' : ''}}">
                    <a href="{{url('client/administration')}}" class="sidebar-links">
                        <span class="fa fa fa-user-cog text-white pr-2 sidebar-link-icons"></span>Administration</a>
                </li>
            @endif
            @if(auth()->user()->user_type !='tenant')
                <li class="position-relative {{(request()->is('client/messages')) ? 'active' : ''}}">
                    <a href="{{url('client/messages')}}" class="sidebar-links"><span
                            class="fa fa-comments text-white pr-2 sidebar-link-icons"></span>Messages</a>
                </li>
            @else
                <li class="position-relative {{(request()->is('tenant/messages')) ? 'active' : ''}}">
                    <a href="{{url('tenant/messages')}}" class="sidebar-links"><span
                            class="fa fa-comments text-white pr-2 sidebar-link-icons"></span>Messages</a>
                </li>
            @endif

            <li class="position-relative {{(request()->is('client/contact-us')) ? 'active' : ''}}">
                <a href="{{url('client/contact-us')}}" class="sidebar-links"><span
                        class="fa fa-question text-white pr-2 sidebar-link-icons"></span>Help</a>
            </li>
        </ul>
    </aside>
</div>
