@extends('frontend.frontend_panel.user_panel')
@section('content')
    <div class="property-pg create-lease-pg">
        <h4>Add new lease</h4>
        <p><span class="fa fa-home"></span> - <a href="#" class="text-decoration-none font-weight-bold">Your leases
            </a> - <span class="text-muted"> Create lease</span></p>
        <div class="rounded light-box-shadow">
            <input id="id" type="hidden" value="{{ $lease->id }}">
            <div class="panel-body steps-container">
                <span id="createLeaseForm" class="tab-wizard wizard-circle wizard clearfix">
                    <h6>Start</h6>
                    <section class="mt-4">
                        <h5 class="text-center">Digital lease from Leieadmin</h5>
                        <p class="text-center mb-xl-5 mb-4">Please complete the following steps for signing the lease</p>
                        <div class="steps-info-main">
                            <div class="steps-info">
                                <div>
                                    <span class="fa fa-check fa-icons"></span>
                                </div>
                                <p class="mb-0">Click on "Next" and review the information in the lease</p>
                            </div>
                            <div class="steps-info">
                                <div>
                                    <span class="fa fa-building fa-icons"></span>
                                </div>
                                <p class="mb-0">Change where there are errors or omissions.</p>
                            </div>
                            <div class="steps-info">
                                <div>
                                    <span class="fa fa-piggy-bank fa-icons"></span>
                                </div>
                                <p class="mb-0">Choose whether you want to create a deposit guarantee.</p>
                            </div>
                            <div class="steps-info">
                                <div>
                                    <span class="fa fa-file-pdf fa-icons"></span>
                                </div>
                                <p class="mb-0">See a preview of the lease.</p>
                            </div>
                            <div class="steps-info">
                                <div>
                                    <span class="fa fa-file-signature fa-icons"></span>
                                </div>
                                <p class="mb-0">Sign the lease.</p>
                            </div>
                            <div class="steps-info">
                                <div>
                                    <span class="fa fa-star fa-icons"></span>
                                </div>
                                <p class="mb-0">You are finished!</p>
                            </div>
                        </div>
                    </section>
                    <h6>Overview</h6>
                    <section class="mt-4">
                        <h5 class="text-center">Your lease with <span>User</span></h5>
                        <p class="text-center mb-xl-5 mb-4">Please review the information in the rental agreement below and
                            fill in the missing information. It can then be signed electronically and downloaded as a PDF.
                        </p>
                        <h6>Landlord</h6>
                        <div class="form-row">
                            <div class="form-group col-lg-6">
                                <label>First Name</label>
                                <input type="text" id="firstNameReadOnly" value="{{ $lease->user->name }}"
                                    class="form-control" readonly />
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Last Name</label>
                                <input id="lastNameReadOnly" value="{{ $lease->user->name }}" type="text"
                                    class="form-control" readonly />
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Email</label>
                                <input id="emailReadOnly" type="email" value="{{ $lease->user->email }}"
                                    class="form-control" readonly />
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Telephone</label>
                                <input type="tel" id="telephoneReadOnly" value="{{ $lease->user->phone }}"
                                    class="form-control" readonly />
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Street Name</label>
                                <input id="streetNameReadOnly" value="{{ $lease->property->street_name }}" type="text"
                                    class="form-control" readonly />
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Zip Code</label>
                                <input type="text" value="{{ $lease->property->zip_code }}" id="zipCodeReadOnly"
                                    class="form-control" readonly />
                            </div>
                        </div>
                        <h6>Tenant (you)</h6>
                        <div class="form-row">
                            <div class="form-group col-lg-6">
                                <label>First Name</label>
                                <input type="text" value="{{ $lease->tenant->first_name }}" class="form-control"
                                    placeholder="First Name" />
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Last Name</label>
                                <input type="text" value="{{ $lease->tenant->surname }}" class="form-control"
                                    placeholder="Last Name" />
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Email</label>
                                <input type="email" value="{{ $lease->tenant->email }}" class="form-control" readonly />
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Mobile Number</label>
                                <input type="tel" value="{{ $lease->tenant->phone }}" class="form-control" readonly />
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Street name <span class="required">*</span> <sup
                                        class="fa fa-question label-fa-question" data-toggle="tooltip" data-placement="top"
                                        title="Start entering the street name in which the property is located and select the correct street name from the list."></sup></label>
                                <select class="form-control" disabled>
                                    <option value="">{{ $lease->property->street_name }}</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Street number <span class="required">*</span> <sup
                                        class="fa fa-question label-fa-question" data-toggle="tooltip" data-placement="top"
                                        title="Select the street number that the property is located in. If you do not find the right street number, then double check that the street name above is correct."></sup></label>
                                <select class="form-control" disabled>
                                    <option value="">{{ $lease->property->street_number }}</option>
                                </select>
                            </div>
                        </div>
                        <h6>Rental object</h6>
                        <div class="form-row">
                            <div class="form-group col-lg-6">
                                <label>Street Name</label>
                                <input type="text" value="{{ $lease->rentalObject->property->street_name }}"
                                    class="form-control" readonly />
                            </div>
                            <div class="form-group col-lg-6">
                                <label>ZIP Code</label>
                                <input type="text" value="{{ $lease->rentalObject->property->zip_code }}"
                                    class="form-control" readonly />
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Property Number</label>
                                <input type="text" value="{{ $lease->rentalObject->property->farm_number }}"
                                    class="form-control" readonly />
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Type of rental object</label>
                                <input type="text" value="{{ $lease->rentalObject->rental_object }}"
                                    class="form-control" readonly />
                            </div>
                        </div>
                        <h6>Rental period and rent</h6>
                        <div class="form-row">
                            <div class="form-group col-lg-6">
                                <label>Type of lease</label>
                                <input type="text" value="{{ $lease->rentalObject->rental_object }}"
                                    class="form-control" readonly />
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Termination period</label>
                                <input type="text" value="{{ $lease->termination_peroid }}Years" class="form-control"
                                    readonly />
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Binding time</label>
                                <input type="text" value="{{ $lease->binding_peroid }}" class="form-control"
                                    readonly />
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Start date</label>
                                <input type="text" value="{{ $lease->start_date_of_agreement }}" class="form-control"
                                    readonly />
                            </div>

                            <div class="form-group col-lg-6">
                                <label>End date</label>
                                <input type="text" value="{{ $lease->end_date_of_agreement }}" class="form-control"
                                    readonly />
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Rent amount</label>
                                <input type="text" value="{{ $lease->rent_per_month }}" class="form-control"
                                    readonly />
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Deposit amount</label>
                                <input type="text" value="{{ $lease->payment_for_first_rent }}" class="form-control"
                                    readonly />
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Due date for rent</label>
                                <input type="text" value="{{ $lease->due_date }}" class="form-control" readonly />
                            </div>
                        </div>
                    </section>
                    <h6>Deposit Guarantee</h6>
                    <section class="mt-4 depo-gurantee-sec">
                        <h5 class="text-center">A smart alternative to a deposit:</h5>
                        <h5 class="text-center">Deposit guarantee</h5>
                        <p class="text-center mb-0">In collaboration with Söderberg & Partners, we offer a good alternative
                            to a regular deposit account. If you buy a deposit guarantee, you only pay a lump sum of 16% of
                            the deposit amount.</p>
                        <p class="text-center">Just sure , just a lot easier .</p>
                        <div align="center" class="my-4">
                            <a role="button" class="btn btn-bg-white depo-gurantee-btn" data-toggle="modal"
                                data-target="#orderDepositGuranteeModal">Yes please! I will order a deposit guarantee</a>
                            <div class="modal fade" id="orderDepositGuranteeModal" tabindex="-1" role="dialog"
                                aria-labelledby="orderDepositGuranteeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="rounded p-3 light-box-shadow"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-xl-5 mb-xl-4 row">
                            <div class="col-lg-4 col-md-6 deposit-sec-outer">
                                <div class="dark-box-shadow deposit-section-block">
                                    <span class="fa fa-tachometer-alt fa-deposit-icons"></span>
                                    <h6 class="my-3 text-white">Much easier</h6>
                                    <p class="text-white">You only sign up for the deposit guarantee with a few keystrokes.
                                        The guarantee is created in your name, and the landlord has the security he / she
                                        needs.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 deposit-sec-outer">
                                <div class="dark-box-shadow deposit-section-block">
                                    <span class="fa fa-umbrella-beach fa-deposit-icons"></span>
                                    <h6 class="my-3 text-white">Low one-time cost means greater freedom</h6>
                                    <p class="text-white">Do not lock the money in a deposit account, rather be free to
                                        spend it on what you want. You only pay 16% of the deposit amount.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3 deposit-sec-outer">
                                <div class="dark-box-shadow deposit-section-block">
                                    <span class="fa fa-piggy-bank fa-deposit-icons"></span>
                                    <h6 class="my-3 text-white">Avoid expensive loans</h6>
                                    <p class="text-white">You do not have to take out expensive consumer loans if you do
                                        not have money for a deposit. Rather pay a low lump sum.</p>
                                </div>
                            </div>
                        </div>
                        <h5 class="mb-4 text-center">How to order a Deposit Guarantee from Presis Utleie</h5>
                        <div class="steps-info-main">
                            <div class="steps-info">
                                <div>
                                    <span class="fa fa-check fa-icons"></span>
                                </div>
                                <div>
                                    <h6>Deposit guarantee OK from the landlord</h6>
                                    <p class="mb-0">Your landlord has already accepted that you can take out a deposit
                                        guarantee in favor of a deposit account if you wish.</p>
                                </div>
                            </div>
                            <div class="steps-info">
                                <div>
                                    <span class="fa-icons"><b>2</b></span>
                                </div>
                                <div>
                                    <h6>Credit check</h6>
                                    <p class="mb-0">To ensure that you as a tenant meet the subscription criteria, a
                                        credit check will be performed.</p>
                                </div>
                            </div>
                            <div class="steps-info">
                                <div>
                                    <span class="fa-icons"><b>3</b></span>
                                </div>
                                <div>
                                    <h6>Payment of warranty cost</h6>
                                    <p class="mb-0">When you order the guarantee here with us, you will be asked to enter
                                        payment information. The amount is reserved on your card until the lease is signed
                                        by all parties.</p>
                                </div>
                            </div>
                            <div class="steps-info">
                                <div>
                                    <span class="fa-icons"><b>4</b></span>
                                </div>
                                <div>
                                    <h6>The guarantee takes effect!</h6>
                                    <p class="mb-0">The guarantee is ordered and takes effect on the move-in date in the
                                        rental object!</p>
                                </div>
                            </div>
                        </div>
                        <h5 class="mb-0 text-center">What is the deposit guarantee for your rental with User?</h5>
                        {{--                        <div class="light-box-shadow deposit-rental-user-sec"> --}}
                        {{--                            <div> --}}
                        {{--                                <h6>Deposit amount <span class="required">*</span></h6> --}}
                        {{--                                <b class="text-success">kr <span class="text-success">20,000</span></b> --}}
                        {{--                            </div> --}}
                        {{--                            <b class="text-success">X</b> --}}
                        {{--                            <div> --}}
                        {{--                                <h6>Warranty cost</h6> --}}
                        {{--                                <b class="text-success">16%</b> --}}
                        {{--                            </div> --}}
                        {{--                            <b class="text-success">=</b> --}}
                        {{--                            <div> --}}
                        {{--                                <h6>Price</h6> --}}
                        {{--                                <b class="text-success">kr <span class="text-success">3,200</span></b> --}}
                        {{--                            </div> --}}
                        {{--                        </div> --}}
                        <h6>Important information about the deposit guarantee from Söderberg & Partners</h6>
                        <ul class="pl-3">
                            <li>The deposit guarantee is a one-time cost that secures the lease for three years.</li>
                            <li>Deposit guarantee is not an insurance: A guarantee is not an insurance, but a surety. This
                                means that you as a tenant must repay the guarantor, if the landlord is paid an amount
                                during the guarantee period. The guarantee is covered by the Rent Act and claims for
                                compensation are assessed on the same basis as with a deposit account.</li>
                            <li>The guarantee must be renewed if the tenancy is not terminated by the expiry date of the
                                guarantee.</li>
                        </ul>
                    </section>
                    <h6>Preview</h6>
                    <section class="mt-4">
                        <div class="pdf-images">
                            <div>
                                @php
                                    $data = App\Models\LeieadminLogo::first();
                                @endphp
                                <div class="mb-3 pb-2 d-flex justify-content-between"
                                    style="border-bottom: 1px solid #000">
                                    <div>
                                        <h5>Tenant</h5>
                                    </div>
                                    <div>
                                        <img src="{{ asset('public/uploads/' . $data->logo) }}"
                                            class="float-right site-logo" style="height: 35px;filter: invert(.8)">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-lg-6">
                                        <label>First name of tenant</label>
                                        <input id="firstNameTenantpreview" type="text"
                                            value="{{ $lease->tenant->first_name }}"class="form-control"
                                            placeholder="First name of tenant" readonly />
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Surname of tenant</label>
                                        <input id="surnameTenantpreview" type="text"
                                            value="{{ $lease->tenant->surname }}" class="form-control"
                                            placeholder="Surname of tenant" readonly />
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label>Email to tenant</label>
                                        <input id="emailTenantpreview" type="text "
                                            value="{{ $lease->tenant->email }}" class="form-control"
                                            placeholder="example@gmail.com" readonly />
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label>Mobile number for tenant</label>
                                        <input id="phoneTenantpreview" type="text"
                                            value="{{ $lease->tenant->phone }}" placeholder="Mobile Number"
                                            class="form-control" readonly>
                                    </div>

                                </div>
                                <div class="mt-3 pt-2 d-flex justify-content-between"
                                    style="border-top: 1px solid;padding-top: 8px">
                                    <span class="font-weight-bold font-italic">Leieadmin</span>
                                    <span class="font-weight-bold font-italic">Slide: 1</span>
                                </div>
                            </div>
                            <div>
                                <div class="mb-3 pb-2 d-flex justify-content-between" style="border-bottom: 1px solid #000">
                                    <div><h5>LandLord</h5></div>
                                    <div>
                                        <img src="{{ asset('public/uploads/' . $data->logo) }}" class="float-right site-logo" style="height: 35px;filter: invert(.8)">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-lg-12">
                                        <label>Name of LandLord</label>
                                        <input id="firstNameTenantpreview" type="text"
                                            value="{{ $lease->user->name }}"class="form-control"
                                            placeholder="First name of tenant" readonly />
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label>Email to LandLord</label>
                                        <input id="emailTenantpreview" type="text " value="{{ $lease->user->email }}"
                                            class="form-control" placeholder="example@gmail.com" readonly />
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label>Mobile number for LandLord</label>
                                        <input id="phoneTenantpreview" type="text" value="{{ $lease->user->phone }}"
                                            placeholder="Mobile Number" class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="mt-3 pt-2 d-flex justify-content-between"
                                    style="border-top: 1px solid;padding-top: 8px">
                                    <span class="font-weight-bold font-italic">Leieadmin</span>
                                    <span class="font-weight-bold font-italic">Slide: 2</span>
                                </div>
                            </div>
                            <div>
                                <div class="mb-3 pb-2 d-flex justify-content-between" style="border-bottom: 1px solid #000">
                                    <div><h5>Rental object</h5></div>
                                    <div>
                                        <img src="{{ asset('public/uploads/' . $data->logo) }}" class="float-right site-logo" style="height: 35px;filter: invert(.8)">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-lg-12">
                                        <label>Street Name</label>
                                        <input type="text" value="{{ $lease->rentalObject->property->street_name }}"
                                            class="form-control" readonly />
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label>ZIP Code</label>
                                        <input type="text" value="{{ $lease->rentalObject->property->zip_code }}"
                                            class="form-control" readonly />
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label>Property Number</label>
                                        <input type="text" value="{{ $lease->rentalObject->property->farm_number }}"
                                            class="form-control" readonly />
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label>Type of rental object</label>
                                        <input type="text" value="{{ $lease->rentalObject->rental_object }}"
                                            class="form-control" readonly />
                                    </div>
                                </div>
                                <div class="mt-3 pt-2 d-flex justify-content-between"
                                    style="border-top: 1px solid;padding-top: 8px">
                                    <span class="font-weight-bold font-italic">Leieadmin</span>
                                    <span class="font-weight-bold font-italic">Slide: 3</span>
                                </div>
                            </div>
                            <div>
                                <div class="mb-3 pb-2 d-flex justify-content-between" style="border-bottom: 1px solid #000">
                                    <div><h5>Rental period and rent</h5></div>
                                    <div>
                                        <img src="{{ asset('public/uploads/' . $data->logo) }}" class="float-right site-logo" style="height: 35px;filter: invert(.8)">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-lg-6">
                                        <label>Type of lease</label>
                                        <input type="text" value="{{ $lease->rentalObject->rental_object }}"
                                            class="form-control" readonly />
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Termination period</label>
                                        <input type="text" value="{{ $lease->termination_peroid }}Years"
                                            class="form-control" readonly />
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Binding time</label>
                                        <input type="text" value="{{ $lease->binding_peroid }}" class="form-control"
                                            readonly />
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Rent amount</label>
                                        <input type="text" value="{{ $lease->rent_per_month }}" class="form-control"
                                            readonly />
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Start date</label>
                                        <input type="text" value="{{ $lease->start_date_of_agreement }}"
                                            class="form-control" readonly />
                                    </div>

                                    <div class="form-group col-lg-6">
                                        <label>End date</label>
                                        <input type="text" value="{{ $lease->end_date_of_agreement }}"
                                            class="form-control" readonly />
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Deposit amount</label>
                                        <input type="text" value="{{ $lease->payment_for_first_rent }}"
                                            class="form-control" readonly />
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Due date for rent</label>
                                        <input type="text" value="{{ $lease->due_date }}" class="form-control"
                                            readonly />
                                    </div>
                                </div>
                                <div class="mt-3 pt-2 d-flex justify-content-between"
                                    style="border-top: 1px solid;padding-top: 8px">
                                    <span class="font-weight-bold font-italic">Leieadmin</span>
                                    <span class="font-weight-bold font-italic">Slide: 4</span>
                                </div>
                            </div>
                            <div>
                                <div class="mb-3 pb-2 d-flex justify-content-between" style="border-bottom: 1px solid #000">
                                    <div>
                                        <h5></h5>
                                    </div>
                                    <div>
                                        <img src="{{ asset('public/uploads/' . $data->logo) }}" class="float-right site-logo" style="height: 35px;filter: invert(.8)">
                                    </div>
                                </div>
                                <div class="mt-3 pt-2 d-flex justify-content-between"
                                    style="border-top: 1px solid;padding-top: 8px">
                                    <span class="font-weight-bold font-italic">Leieadmin</span>
                                    <span class="font-weight-bold font-italic">Slide: 5</span>
                                </div>
                            </div>
                            <div>
                                <div class="mb-3 pb-2 d-flex justify-content-between" style="border-bottom: 1px solid #000">
                                    <div>
                                        <h5></h5>
                                    </div>
                                    <div>
                                        <img src="{{ asset('public/uploads/' . $data->logo) }}" class="float-right site-logo" style="height: 35px;filter: invert(.8)">
                                    </div>
                                </div>
                                <div class="mt-3 pt-2 d-flex justify-content-between"
                                    style="border-top: 1px solid;padding-top: 8px">
                                    <span class="font-weight-bold font-italic">Leieadmin</span>
                                    <span class="font-weight-bold font-italic">Slide: 6</span>
                                </div>
                            </div>
                            <div>
                                <div class="mb-3 pb-2 d-flex justify-content-between" style="border-bottom: 1px solid #000">
                                    <div>
                                        <h5></h5>
                                    </div>
                                    <div>
                                        <img src="{{ asset('public/uploads/' . $data->logo) }}" class="float-right site-logo" style="height: 35px;filter: invert(.8)">
                                    </div>
                                </div>
                                <div class="mt-3 pt-2 d-flex justify-content-between"
                                    style="border-top: 1px solid;padding-top: 8px">
                                    <span class="font-weight-bold font-italic">Leieadmin</span>
                                    <span class="font-weight-bold font-italic">Slide: 7</span>
                                </div>
                            </div>
                            <div>
                                <div class="mb-3 pb-2 d-flex justify-content-between" style="border-bottom: 1px solid #000">
                                    <div>
                                        <h5></h5>
                                    </div>
                                    <div>
                                        <img src="{{ asset('public/uploads/' . $data->logo) }}" class="float-right site-logo" style="height: 35px;filter: invert(.8)">
                                    </div>
                                </div>
                                <div class="mt-3 pt-2 d-flex justify-content-between"
                                    style="border-top: 1px solid;padding-top: 8px">
                                    <span class="font-weight-bold font-italic">Leieadmin</span>
                                    <span class="font-weight-bold font-italic">Slide: 8</span>
                                </div>
                            </div>
                            <div>
                                <div class="mb-3 pb-2 d-flex justify-content-between" style="border-bottom: 1px solid #000">
                                    <div>
                                        <h5></h5>
                                    </div>
                                    <div>
                                        <img src="{{ asset('public/uploads/' . $data->logo) }}" class="float-right site-logo" style="height: 35px;filter: invert(.8)">
                                    </div>
                                </div>
                                <div class="mt-3 pt-2 d-flex justify-content-between"
                                    style="border-top: 1px solid;padding-top: 8px">
                                    <span class="font-weight-bold font-italic">Leieadmin</span>
                                    <span class="font-weight-bold font-italic">Slide: 9</span>
                                </div>
                            </div>
                            <div>
                                <div class="mb-3 pb-2 d-flex justify-content-between" style="border-bottom: 1px solid #000">
                                    <div>
                                        <h5></h5>
                                    </div>
                                    <div>
                                        <img src="{{ asset('public/uploads/' . $data->logo) }}" class="float-right site-logo" style="height: 35px;filter: invert(.8)">
                                    </div>
                                </div>
                                <div class="mt-3 pt-2 d-flex justify-content-between"
                                    style="border-top: 1px solid;padding-top: 8px">
                                    <span class="font-weight-bold font-italic">Leieadmin</span>
                                    <span class="font-weight-bold font-italic">Slide: 10</span>
                                </div>
                            </div>
                        </div>
                        <div class="my-xl-5 mt-4 text-center">
                            <a role="button" class="slide-arrow prev-arrow btn btn-bg-white"><span
                                    class="fa fa-arrow-left mr-2"></span>Last Page</a>
                            <a role="button" class="slide-arrow next-arrow ml-2 btn btn-bg">Next Page<span
                                    class="fa fa-arrow-right ml-2"></span></a>
                        </div>
                    </section>
                    <h6>Sign agreement</h6>
                    <section class="my-4 ready-for-sign-sec">
                        <div class="p-4 light-box-shadow ready-for-sign-sec-inner">
                            <div class="d-flex align-items-center justify-content-between">
                                <h6>Signing of documents</h6>
                                <span class="badge badge-success text-white">READY FOR SIGNING</span>
                            </div>
                            <hr>
                            <div class="mt-4">
                                <a target="__blank" href="{{ route('view.pdf', ['id' => $lease->id]) }}">
                                    <img src="{{ asset('public/front_end/images/file-icons/pdf.svg') }}"
                                        class="pdf-img" />
                                    <span>- Leieadmin Rental Lease</span>
                                </a>
                            </div>
                            <hr>
                            <p class="my-4">Press the button below to sign your documents. You will then be sent to an
                                external partner for signing, but can close this window and return here when signing is
                                completed.</p>
                            <div align="center">
                                <a target="__blank" href="{{ route('open.pdf', ['id' => $lease->id]) }}" role="button"
                                    class="btn btn-bg">Open documents and sign now</a>
                            </div>
                            <div align="center" class="mt-4">
                                <a role="button" class="btn btn-bg-white thankyou-btn">Yes, thank you, I want to buy
                                    super contents insurance for 179, - per month!</a>
                            </div>
                        </div>
                    </section>
                </span>
            </div>

        </div>
    </div>

    <script src="{{ asset('public/front_end/js/jquery-3.5.1.min.js') }}"></script>
    <script>
        $(function() {
            $("#createLeaseForm").steps({

                headerTag: "h6",
                bodyTag: "section",
                transitionEffect: "fade",
                titleTemplate: '<span class="step">#index#</span>' +
                    '<span class="text-decoration-none step-title">#title#</span>',
                onInit: function(event, currentIndex, priorIndex) {
                    if (currentIndex == 0) {
                        $('a[href="#previous"]').hide();
                    }
                },
                onStepChanged: function(event, currentIndex, priorIndex) {
                    if (currentIndex == 0) {
                        $('a[href="#previous"]').hide();
                    } else if (currentIndex != 0) {
                        $('a[href="#previous"]').show();
                    }
                    if (currentIndex == 3) {

                        $('.pdf-images').slick({
                            dots: false,
                            arrows: true,
                            fade: true,
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            prevArrow: $('.prev-arrow'),
                            nextArrow: $('.next-arrow')
                        });
                        let id = $('#id').val();
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        var csrf = $("input[name=_token]").val();
                        $.ajax({
                            url: '{{ URL::to('/tenant/tenant-lease-complete') }}' + '/' + id,
                            type: 'post',
                            success: function(response) {
                                $("#loader").fadeOut("slow");
                                toastr.success(response.message);

                            }
                        });
                    }
                }
            });

            /*step icons*/
            $('.step').eq(0).empty().addClass('fa fa-check');
            $('.step').eq(1).empty().addClass('fa fa-building');
            $('.step').eq(2).empty().addClass('fa fa-piggy-bank');
            $('.step').eq(3).empty().addClass('fa fa-file-pdf');
            $('.step').eq(4).empty().addClass('fa fa-file-signature');
            /*step icons*/
        });
    </script>
@endsection
