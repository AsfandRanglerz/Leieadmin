@include('frontend.includes.css')
@include('frontend.includes.without_login_header')
<div class="admin-main-content">
    <div class="col-xl-4 col-lg-6 col-sm-8 col-11 px-0 my-5 mx-auto sign-in light-box-shadow">
        <div class="sign-in-block-header">
            <div class="sign-in-block-header-inner">
                <p class="mb-2 text-white">Welcome!</p>
                <p class="mb-0 text-white">Please Enter New Password<br><b>Garantihuset AS</b></p>
            </div>
            <div class="PolygonRuler"><svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" class="PolygonRuler__SVG"><polygon points="2560 0 2560 100 0 100" class="PolygonRuler__Polygon PolygonRuler__Polygon--fill-white"></polygon></svg></div>
        </div>

        <form id="signInForm" action="{{url('client/change-password')}}" method="POST">

            @csrf
            <input type="hidden" value="{{$data->email}}" name="email" />
            <div class="form-group">
                <label for="userPassword">Password<span class="required"> *</span></label>
                <input id="userPassword" name="password" type="password" class="form-control  @error('password') is-invalid @enderror"
                       placeholder="Password" >
            </div>
            <div class="form-group">
                <label for="userPassword">Confirm Password<span class="required"> *</span></label>
                <input id="userPassword" name="password_confirmation" type="password" class="form-control @error('password') is-invalid @enderror"
                       placeholder="Confirm Password">
                @error('password')
                <span class="text-danger">{{$errors->first('password')}}</span>
                @enderror
            </div>
            <div align="center" class="my-4">
                <button type="submit" class="btn btn-bg">Submit</button>
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
