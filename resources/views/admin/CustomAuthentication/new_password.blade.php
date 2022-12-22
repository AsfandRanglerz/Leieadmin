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
        <div class="mt-3"> @include('admin.Errors.errors')</div>

        <form id="login" action="{{url('admin/update-password')}}" method="post">

            @csrf
            <input type="hidden" value="{{$data->email}}" name="email" />
            <div class="form-group mx-3">
                <label for="userPassword">Password<span class="required"> *</span></label>
                <input class="form-control form-control-rounded @error('password') is-invalid @enderror" id="password" name="password" type="password" placeholder="New password" required>
            </div>
            <div class="form-group mx-3">
                <label for="userPassword">Confirm Password<span class="required"> *</span></label>
                <input class="form-control form-control-rounded @error('password') is-invalid @enderror" id="password_confirmation" name="password_confirmation" type="password" placeholder="Confirm password" required>
                @error('password')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
            <div align="center" class="my-4">
                <button type="submit" id="btnlogin" class="btn btn-bg mb-3">Submit</button>
            </div>
        </form>
    </div>
</div>
@include('frontend.includes.without_login_footer')
