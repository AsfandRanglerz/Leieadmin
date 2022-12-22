@include('admin.Errors.errors')
@include('Includes.csslinks')

<?php //include "common/admin-panel-header.php" ?>
<div class="admin-main-content">
    <div class="my-5 sign-up">
        <div class="mx-auto col-lg-8">
            <div class="panel light-box-shadow">
                <div class="panel-body wizard-content">
                    <form id="signUpForm" action="#" class="tab-wizard wizard-circle wizard clearfix">
                        <h6>Account</h6>
                        <section>
                            <div class="row">
                                <div class="col-sm-12">
                                    <b>Choose whether you want to use the service as a private landlord, landlord
                                        organized in a company, or as a tenant.</b>
                                    <div class="text-center mt-3 mb-4">
                                        <div class="btn-group btn-group-toggle landlord-choose-options"
                                             data-toggle="buttons">
                                            <label class="btn landlord-group-btns active d-flex flex-column">
                                                <input type="radio" name="options" id="privlord" autocomplete="off"
                                                       value="Private landlord" checked/>
                                                <span class="fa fa-home"></span>
                                                <span class="text">Private landlord</span>
                                            </label>
                                            <label class="btn landlord-group-btns d-flex flex-column">
                                                <input type="radio" name="options" id="lanOrgan" autocomplete="off"
                                                       value="Landlord organized in company"/>
                                                <span class="fa fa-building"></span>
                                                <span class="text">Landlord organized in company</span>
                                            </label>
                                            <label class="btn landlord-group-btns d-flex flex-column">
                                                <input type="radio" name="options" id="lanTenant" autocomplete="off"
                                                       value="Tenant"/>
                                                <span class="fa fa-user"></span>
                                                <span class="text">Tenant</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="my-1">
                                        <div class="custom-control custom-checkbox mr-sm-2">
                                            <input type="checkbox" class="custom-control-input"
                                                   id="privStatement">
                                            <label class="custom-control-label" for="privStatement">I agree to
                                                the
                                                Terms of Use and the Privacy Statement for the use of Presis Utleie's
                                                digital services</label>
                                        </div>
                                        <div class="custom-control custom-checkbox mr-sm-2">
                                            <input type="checkbox" class="custom-control-input"
                                                   id="recInfo">
                                            <label class="custom-control-label" for="recInfo">Yes
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
                            <b>Please enter information about yourself so that we can create a new user account for you</b>
                            <div class="row mt-3">
                                <div class="form-group col-sm-6">
                                    <label for="name-2">First Name</label>
                                    <input id="name-2" name="name" type="text" class="form-control"
                                           placeholder="First Name">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="lastname-2">Last Name</label>
                                    <input id="lastname-2" name="surname" type="text" class="form-control"
                                           placeholder="Last Name">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="email-2">Email<span class="required"> *</span></label>
                                    <input id="email-2" name="email" type="text" class="form-control"
                                           placeholder="example@gmail.com">
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
                                        <select class="form-control">
                                            <option value="+1">+1</option>
                                            <option value="+91">+91</option>
                                            <option value="+92">+92</option>
                                            <option value="+93">+93</option>
                                            <option value="+47">+47</option>
                                        </select>
                                    </div>
                                    <div class="pl-0 col-7">
                                        <input type="tel" placeholder="Mobile Number" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </section>

                        <h6>Finish</h6>
                        <section>
                            <b>Verification of mobile.</b>
                            <div class="form-group col-sm-6 px-0 mt-3">
                                <label for="name-2">Code from SMS</label>
                                <input id="name-2" type="number" class="form-control"
                                       placeholder="Verification Code">
                            </div>
                        </section>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php //include "common/admin-panel-footer.php" ?>





















@include('Includes.jslinks')
