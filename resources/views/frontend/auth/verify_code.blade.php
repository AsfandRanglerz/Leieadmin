@include('frontend.includes.css')
@include('frontend.includes.without_login_header')

<div class="admin-main-content">
    <div class="my-5 sign-up">
        <div class="mx-auto col-lg-8">
            <form>
                <b>Verification of mobile.</b>
                <div class="form-group col-sm-6 px-0 mt-3">
                    <label for="name-2">Code from SMS (12345)</label>
                    <input id="verification_code" type="number"
                           class="form-control" placeholder="Verification Code" required>
                    <span class="text-danger" id="verify_code_err"></span>
                </div>
            </form>
            <button class="btn btn-success" style="color: white!important;" id="finish">Finish</button>
        </div>
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

<script>
    $(document).on('click', '#finish',function () {
        let code = $('#verification_code').val();
        // console.log('hi');
        $.ajax({
            url: '{{url('client/verify-phone-token')}}' + '/' + code,
            method: 'post',
            data: {
                _token: '{{csrf_token()}}',
                email: '{{$data}}',
                code: code
            },
            success: function (response) {
                if (response.status) {
                    window.location.href = "{{url('client/login')}}"
                }else{
                    alert('Verified Un Successfully. Please Enter Valid Code');
                }
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                let errors = XMLHttpRequest.responseJSON.errors;
                if (errors.code) {
                    $('#verify_code_err').text(errors.code[0]);
                }
            }
        });
    });

</script>
