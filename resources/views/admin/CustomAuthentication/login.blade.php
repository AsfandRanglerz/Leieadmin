<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
{{--@include('Includes.csslinks')--}}
    @include('frontend.includes.css')
    @include('frontend.includes.without_login_header')

</head>
<body>
<div class="admin-main-content">
    <div class="col-xl-4 col-lg-6 col-sm-8 col-11 px-0 my-5 mx-auto sign-in light-box-shadow">
        <div class="sign-in-block-header">
            <div class="sign-in-block-header-inner">
                <p class="mb-2 text-white">Welcome!</p>
                <p class="mb-0 text-white">Please log in to your user account at<br><b>Garantihuset AS</b></p>
            </div>
            <div class="PolygonRuler"><svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" class="PolygonRuler__SVG"><polygon points="2560 0 2560 100 0 100" class="PolygonRuler__Polygon PolygonRuler__Polygon--fill-white"></polygon></svg></div>
        </div>
        <div class="mt-3"> @include('admin.Errors.errors')</div>

        <form class="mx-3" id="login" action="{{url('/sign-in')}}" method="POST">

            @csrf
            @error('unAuthorizedError')
            <span class="text-danger">Credentials Not Matched.</span>
            @enderror
            <div class="form-group">
                <label for="userEmail">Email<span class="required"> *</span></label>
                <input id="userEmail" id="email" name="email" type="email" class="form-control"
                       placeholder="example@gmail.com">
                @error('email')
                <span class="text-danger">This field is Required.</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="userPassword">Password<span class="required"> *</span></label>
                <input id="userPassword" id="password" name="password" type="password" class="form-control"
                       placeholder="Password">
                @error('password')
                <span class="text-danger">This field is Required.</span>
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
            <div class="d-flex flex-wrap justify-content-between ">
                <a href="{{url('/forgot-password')}}" class="btn p-0 mb-2">Forgot Password?</a>

            </div>
        </form>
    </div>
</div>
@include('frontend.includes.without_login_footer')
<script>
    $(document).ready(function () {
        $('body').on('click','#btnlogin',function (e) {

            $('#login').validate({
                email: {
                    required: true,
                },
                password: {
                    required: true,
                },
            });
        });
    });
    let resetPasswordSession = @if(session()->has('message')) {{ session()->get('message') }}@endif
    if(resetPasswordSession)
    {
        alert('Password Reset successful.')
    }
</script>
@include('Includes.jslinks')
</body>
</html>
