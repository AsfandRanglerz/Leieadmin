@include('frontend.includes.css')
@include('frontend.includes.without_login_header')
<div class="admin-main-content">
    <div class="col-xl-4 col-lg-6 col-sm-8 col-11 px-0 my-5 mx-auto forget-password light-box-shadow">
        <div class="forget-pass-block-header">
            <div class=" forget-pass-block-header-inner">
                <p class="mb-2 text-white">Forgot your password</p>
                <p class="mb-0 text-white">Reset passwords on your account at<br><b>Garantihuset AS</b></p>
            </div>
            <div class="PolygonRuler"><svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" class="PolygonRuler__SVG"><polygon points="2560 0 2560 100 0 100" class="PolygonRuler__Polygon PolygonRuler__Polygon--fill-white"></polygon></svg></div>
        </div>
        <div class="mt-3"> @include('admin.Errors.errors')</div>
        <form id="reset" action="{{url('/reset-password')}}" method="post" >
            @csrf
            <b class="d-block mb-3 mx-3">To set a new password for your account, you must fill out the field below</b>
            <div class="form-group mx-3">
                <label for="existUserEmail">Email<span class="required"> *</span></label>
                <input id="existUserEmail" id="email" name="email" type="email" class="form-control"
                       placeholder="example@gmail.com">
            </div>

            <div align="center" class="mt-5">
                <button type="submit"  id="btnlogin" class="w-100 btn btn-bg">Get a new password</button>
            </div>
        </form>
    </div>
</div>

@include('frontend.includes.without_login_footer')
@include('Includes.jslinks')
