@include('frontend.includes.css')
@include('frontend.includes.without_login_header')
<div class="admin-main-content">
    <div class="col-xl-4 col-lg-6 col-sm-8 col-11 px-0 my-5 mx-auto sign-in light-box-shadow">
        <div class="sign-in-block-header">
            <div class="sign-in-block-header-inner">
                <p class="mb-2 text-white">Welcome!</p>
                <p class="mb-0 text-white">Please log in to your user account at<br><b>Garantihuset AS</b></p>
            </div>
            <div class="PolygonRuler"><svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" class="PolygonRuler__SVG"><polygon points="2560 0 2560 100 0 100" class="PolygonRuler__Polygon PolygonRuler__Polygon--fill-white"></polygon></svg></div>
        </div>

        <form id="signInForm" action="{{url('client/sign-in')}}" method="POST">

            @csrf
            <div class="form-group">
                <label for="userEmail">Email<span class="required"> *</span></label>
                <input id="userEmail" name="email" type="text" class="form-control"
                       placeholder="example@gmail.com">
                @error('email')
                <span class="text-danger">{{$errors->first('email')}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="userPassword">Password<span class="required"> *</span></label>
                <input id="userPassword" name="password" type="password" class="form-control"
                       placeholder="Password">
                @error('password')
                <span class="text-danger">{{$errors->first('password')}}</span>
                @enderror
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input"
                       id="remMe">
                <label class="custom-control-label" for="remMe">Remember me</label>
            </div>
            <div align="center" class="my-4">
                <button type="submit" class="btn btn-bg">Sign in</button>
            </div>
            <div class="d-flex flex-wrap justify-content-between">
                <a href="{{url('client/forgot-password')}}" class="btn p-0">Forgot your password?</a>
                <a href="{{url('client/sign-up')}}" class="btn p-0">Create new account</a>
            </div>
        </form>
    </div>
</div>
@include('frontend.includes.without_login_footer')
<script>
    toastr.options = {
        "closeButton": true,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "3000",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
</script>
@include('frontend.message')
