@include('frontend.includes.css')
@include('frontend.includes.without_login_header')
<div class="admin-main-content">
    <div class="col-xl-4 col-lg-6 col-sm-8 col-11 px-0 my-5 mx-auto forget-password light-box-shadow">
        <div class="forget-pass-block-header">
            <div class="forget-pass-block-header-inner">
                <p class="mb-2 text-white">Forgot your password</p>
                <p class="mb-0 text-white">Reset passwords on your account at<br><b>Garantihuset AS</b></p>
            </div>
            <div class="PolygonRuler"><svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" class="PolygonRuler__SVG"><polygon points="2560 0 2560 100 0 100" class="PolygonRuler__Polygon PolygonRuler__Polygon--fill-white"></polygon></svg></div>
        </div>
        <form id="forgetPassForm" action="{{url('client/send-new-password')}}" method="post">
            @csrf
            <b class="d-block mb-3">To set a new password for your account, you must fill out the form below</b>
            <div class="form-group">
                <label for="existUserEmail">Email<span class="required"> *</span></label>
                <input id="existUserEmail" name="email" type="text" class="form-control"
                       placeholder="example@gmail.com">
            </div>
            <div class="form-group">
                <label>Mobile Number<span class="required"> *</span></label>
                <div class="row">
                    <div class="col-md-4 col-5">
                        <select class="form-control" name="phone_code">
                            <option value="+1">+1</option>
                            <option value="+91">+91</option>
                            <option value="+92">+92</option>
                            <option value="+93">+93</option>
                            <option value="+47">+47</option>
                        </select>
                    </div>
                    <div class="pl-0 col-md-8 col-7">
                        <input type="tel" placeholder="Mobile Number" class="form-control" name="phone_no">
                    </div>
                </div>
            </div>
            <div align="center" class="mt-5">
                <button type="submit" class="w-100 btn btn-bg">Get a new password</button>
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
