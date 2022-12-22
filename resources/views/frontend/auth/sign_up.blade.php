@include('frontend.includes.css')
@include('frontend.includes.without_login_header')
<div class="admin-main-content">
    <div class="px-3 my-5 sign-up">

        <div class="mx-auto col-xl-8 col-lg-10">
            <div class="row alert alert-danger" id="error_exist" style="display: none">Please Check previous steps some
                fields may required
            </div>
            <div class="row panel light-box-shadow">
                <div class="col-md-3 d-md-block d-none p-0"><img src="{{asset('public/uploads/signup-side-img.jpg')}}" class="w-100 h-100" /></div>
                <div class="col-md-9 p-0 panel-body wizard-content">
                    <form id="signUpForm" action="#" class="tab-wizard wizard-circle wizard clearfix">
                        <h6>Account</h6>
                        <section>
                            <div class="row">
                                <div class="col-sm-12">
                                    <b>Choose whether you want to use the service as a private landlord, landlord
                                        organized in a company, or as a tenant.</b>
                                    <div class="text-center mt-3 mb-4">
                                        <div class="w-100 btn-group btn-group-toggle landlord-choose-options"
                                             data-toggle="buttons">
                                            <label class="btn landlord-group-btns active d-flex flex-column">
                                                <input type="radio" name="options"  id="privlord" autocomplete="off"
                                                       value="private_landlord" @if(!isset(request()->tenant)) checked @endif/>
                                                <span class="fa fa-home"></span>
                                                <span class="text">Private landlord</span>
                                            </label>
                                            <label class="btn landlord-group-btns d-flex flex-column">
                                                <input type="radio" name="options" id="lanOrgan" autocomplete="off"
                                                       value="landlord_company"/>
                                                <span class="fa fa-building"></span>
                                                <span class="text">Landlord organized in company</span>
                                            </label>
{{--                                            {{dd(request()->tenant)}}--}}
                                            <label class="btn landlord-group-btns d-flex flex-column">
                                                <input type="radio" name="options" id="lanTenant" autocomplete="off"
                                                       value="tenant" @if(isset(request()->tenant)) checked @endif/>
                                                <span class="fa fa-user"></span>
                                                <span class="text">Tenant</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="my-1">
                                        <i class="fa fa-exclamation-triangle" id="error_icon" style="display: none"></i>
                                        <span class="text-danger" id="term_checkbox_err"></span>
                                        <div class="custom-control custom-checkbox mr-sm-2">
                                            <input type="checkbox" class="custom-control-input"
                                                   id="term_checkbox" name="term_checkbox">
                                            <label class="custom-control-label" for="term_checkbox">
                                                I agree to the
                                                Terms of Use and the Privacy Statement for the use of Presis Utleie's
                                                digital services</label>
                                        </div>
                                        <div class="custom-control custom-checkbox mr-sm-2">
                                            <input type="checkbox" class="custom-control-input"
                                                   id="email_letter_checkbox" name="email_letter_checkbox">
                                            <label class="custom-control-label" for="email_letter_checkbox">Yes
                                                please, I
                                                would like to receive information and newsletters from Presis Utleie by
                                                e-mail based on my areas of interest. I can unsubscribe from this again
                                                at
                                                any time.</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <h6>Profile</h6>
                        <section>
                            <b>Please enter information about yourself so that we can create a new user account for
                                you</b>
                            <div class="row mt-3">
                                <div class="form-group col-sm-6">
                                    <label for="name">First Name</label>
                                    <input id="name" name="name" type="text" class="form-control"
                                           placeholder="First Name">
                                    <span class="text-danger" id="name_err"></span>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="lastname">Last Name</label>
                                    <input id="last_name" name="surname" type="text" class="form-control"
                                           placeholder="Last Name">
                                    <span class="text-danger" id="last_name_err"></span>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="email">Email<span class="required"> *</span></label>
                                    <input id="email" name="email" type="text" class="form-control"
                                           placeholder="example@gmail.com">
                                    <span class="text-danger" id="email_err"></span>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="password">Password<span class="required"> *</span></label>
                                    <input id="password" name="password" type="password" class="form-control">
                                    <span class="text-danger" id="password_err"></span>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="password_confirmation">Confirm Password<span class="required"> *</span></label>
                                    <input id="password_confirmation" name="password_confirmation" type="password"
                                           class="form-control">
                                    <span class="text-danger" id="password_confirmation_err"></span>
                                </div>
                            </div>
                        </section>

                        <h6>Warning</h6>
                        <section>
                            <b>Please enter your mobile number. You will receive an SMS with a verification code.</b>
                            <div class="form-group col-sm-8 px-0 mt-3">
                                <label>Mobile Number<span class="required"> *</span></label>
                                <div class="row">
                                    <div class="col-md-3 col-5">
                                        <select class="form-control" id="phoneCode">
                                            <option value="+1">+1</option>
                                            <option value="+91">+91</option>
                                            <option value="+92">+92</option>
                                            <option value="+93">+93</option>
                                            <option value="+47">+47</option>
                                        </select>
                                    </div>
                                    <div class="pl-0 col-7">
                                        <input type="tel" placeholder="Mobile Number" id="phone_no"
                                               class="form-control">
                                        <span class="text-danger" id="phone_err"></span>

                                    </div>
                                </div>
                            </div>
                        </section>

                        <h6>Finish</h6>
                        <section>
                            <b>Verification of mobile.</b>
                            <div class="form-group col-sm-6 px-0 mt-3">
                                <label for="name-2">Code from SMS (12345)</label>
                                <input id="verification_code" type="number" class="form-control"
                                       placeholder="Verification Code" required>
                                <span class="text-danger" id="verify_code_err"></span>
                            </div>
                        </section>
                    </form>
                </div>
            </div>
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
    $("#signUpForm").steps({
        headerTag: "h6",
        bodyTag: "section",
        transitionEffect: "fade",
        titleTemplate: '<span class="step">#index#</span>',
        onStepChanged: function (event, currentIndex, priorIndex) {
            if (currentIndex == 2) {
                $("a[href='#next']").css("display", "none");
                var $input = $('<button type="button" class="btn btn-success" id="stepSubmitBtn">Submit</button>');
                $input.appendTo($('ul[aria-label=Pagination]'));
            } else {
                $("a[href='#next']").css("display", "block");
                $('ul[aria-label=Pagination] button[type="button"]').remove();

            }

            if (currentIndex == 3){
                $("a[href='#previous']").css("display", "none");
                $("#signUpForm-t-0").prop("disabled", true );
                $("#signUpForm-t-1").prop("disabled", true );
                $("#signUpForm-t-2").prop("disabled", true );
            }
        }
    });
    let termcheck = '';
    let email_letter = '';
    $('#term_checkbox').change(function () {
        if ($(this).prop('checked') === true) {
            termcheck = 1;
        } else {
            termcheck = '';

        }
        console.log('term = ' + termcheck)
    });
    $('#email_letter_checkbox').change(function () {
        if ($(this).prop('checked') === true) {
            email_letter = 1;
        } else {
            email_letter = '';

        }
        console.log('email_letter = ' + email_letter);
    });

    $(document).on('click', '#stepSubmitBtn', function () {
        // let term = $('input[name="term_checkbox"]').is(":checked") == 'false' ? 1 : '';
        // let email_letter = $('input[name="email_letter_checkbox"]').is(":checked") == 'false' ? 1 : '';
        $('#stepSubmitBtn').prop( "disabled", true );
        $('#email_err').text('');
        $('#error_exist').css('display', 'none');
        $('#name_err').text('');
        $('#password_err').text('');
        $('#phone_err').text('');
        $('#error_icon').css('display', 'none');

        $('#term_checkbox_err').text('');


        $.ajax({
            url: '{{url('/client/register')}}',
            method: 'post',
            data: {
                _token: '{{csrf_token()}}',
                type:$('input[name="options"]:checked').val(),
                name: $('#name').val(),
                term_checkbox: termcheck,
                email_letter_checkbox: email_letter,
                last_name: $('#last_name').val(),
                email: $('#email').val(),
                password: $('#password').val(),
                password_confirmation: $('#password_confirmation').val(),
                phone_code: $('#phoneCode').val(),
                phone_no: $('#phone_no').val(),
            },

            success: function (response) {
                if (response.status) {
                    $('#stepSubmitBtn').prop( "disabled", false );
                    $("a[href='#next']").click();
                }
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                $('#stepSubmitBtn').prop( "disabled", false );
                console.log(errorThrown, textStatus, XMLHttpRequest.responseJSON.errors);
                let errors = XMLHttpRequest.responseJSON.errors;
                if (errors) {
                    $('#error_exist').css('display', 'block');
                }
                if (errors.email) {
                    $('#email_err').text(errors.email[0])
                }
                if (errors.name) {
                    $('#name_err').text(errors.name[0])
                }
                if (errors.password) {
                    $('#password_err').text(errors.password[0])
                }
                if (errors.phone_no) {
                    $('#phone_err').text(errors.phone_no[0])
                }
                if (errors.term_checkbox) {
                    $('#error_icon').css('display', 'inline');
                    $('#term_checkbox_err').text('You need to accept term and condition if you want to register.');
                }
            }
        });
    });
    $('#verification_code').on('input', function () {
        let code = $('#verification_code').val();
        if (code.length>0) {
            $('a[href="#finish"]').prop( "disabled", false );
        }else{
            $('a[href="#finish"]').prop( "disabled", true );
        }
    });
    $('a[href="#finish"]').on('click', function () {
        let code = $('#verification_code').val();
        $('#verify_code_err').text('');
        $.ajax({
            url: '{{url('client/verify-phone-token')}}' + '/' + code,
            method: 'post',
            data:{
                _token: '{{csrf_token()}}',
                email: $('#email').val(),
                code: code,
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
