<footer class="footer">
    <div class="footer-inner-upper wow fadeInUp" data-wow-duration="2s">
        <div class="footer-logo">

            @php
                $data=App\Models\LeieadminLogo::first();
            @endphp
            <img src="{{asset('public/uploads/'.$data->logo)}}" class="site-logo" />
        </div>
        <div>
            <h5>Navigation</h5>
            <ul class="mb-0 list-style-none">
                <li><a href="{{url('client/all-features')}}" class="link">See all features</a></li>
                <li><a href="{{url('client/prices')}}" class="link">Prices</a></li>
                <li><a href="{{url('client/contact-us')}}" class="link">Support</a></li>
            </ul>
        </div>
        <div>
            <h5>Our solutions</h5>
            <ul class="mb-0 list-style-none">
                <li><a href="{{url('client/management-system')}}" class="link">Management system</a></li>
                <li><a href="{{url('client/digital-lease')}}" class="link">Digital lease</a></li>
                <li><a href="{{url('client/rent-collection')}}" class="link">Collection of rent</a></li>
                <li><a href="{{url('client/deposit-account')}}" class="link">Deposit account and other security</a></li>
                <li><a href="{{url('client/rent-guarantee')}}" class="link">Rent guarantee from Aprila Bank</a></li>
                <li><a href="{{url('client/occupancy-protocol')}}" class="link">Occupancy protocol and relocation protocol</a></li>
            </ul>
        </div>
        <div>
            <h5>Resources</h5>
            <ul class="mb-0 list-style-none">
                <li><a href="{{url('/')}}" class="link">front page</a></li>
                <li><a href="{{url('client/login')}}" class="link">sign in</a></li>
                <li><a href="{{url('client/sign-up')}}" class="link">create user</a></li>
                <li><a href="{{url('client/terms-conditions')}}" class="link">Terms of use</a></li>
                <li><a href="{{url('client/privacy')}}" class="link">Privacy statement</a></li>
            </ul>
        </div>
        <div>
            <h5>Contact Us</h5>
            <ul class="mb-0 list-style-none">
                <li><a href="mailto:info@leieadmin.no">info@leieadmin.no</a></li>
            </ul>
        </div>
    </div>
    <div class="footer-inner-below wow fadeInUp" data-wow-duration="2s">
        <p class="mb-0 text-center">Powered by Garantihuset AS</p>
        <p class="text-center copyright-text">Copyright <span id="current-year"></span> Precise Rentals</p>
    </div>
</footer>
