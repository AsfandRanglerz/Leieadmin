@extends('frontend.frontend_panel.user_panel')
@section('content')
    <div class="property-pg create-lease-pg">
        <h4>Add new lease</h4>
        <p><span class="fa fa-home"></span> - <a href="#" class="text-decoration-none font-weight-bold">Your leases
            </a> - <span class="text-muted"> Create lease</span></p>
        <div class="rounded light-box-shadow">

            <div class="panel-body steps-container">
                <span id="createLeaseForm" class="tab-wizard wizard-circle wizard clearfix">
                    <h6>Rental object</h6>
                    <section class="mt-4">
                        <h5 class="text-center">Create lease</h5>
                        <p class="text-center">Please use the form below to create a lease</p>
                        <h6>Language</h6>
                        <div class="form-group">
                            <label for="selectLang">Select the language to be used in the lease <sup
                                    class="fa fa-question label-fa-question" data-toggle="tooltip" data-placement="top"
                                    title="Here you set the language used in the lease"></sup></label>
                            <select itemid="languageID" class="form-control single-select-dropdown" id="selectLang">
                                <option value=""></option>
                            </select>
                        </div>
                        <h6>Select property and rental object</h6>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="selProp">Select property <span class="required">*</span> <sup
                                        class="fa fa-question label-fa-question" data-toggle="tooltip" data-placement="top"
                                        title="Here you choose which property applies to the lease"></sup></label>
                                <select class="form-control single-select-dropdown" id="selProp">
                                    <option value=""></option>
                                    @if (!$property_data->isEmpty())
                                        @forelse($property_data as $data)
                                            <option value="{{ $data->id }}">{{ $data->street_name }}</option>
                                        @empty
                                        @endforelse
                                    @endif
                                </select>
                                <span id="propertyIdErr" class="text-danger"></span>
                                <div class="my-3">
                                    <a class="btn btn-bg-white" data-toggle="modal" data-target="#createPropModal"><span
                                            class="fa fa-plus mr-2"></span>Create new property</a>

                                    <div class="modal fade" id="createPropModal" tabindex="-1" role="dialog"
                                        aria-labelledby="createPropModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="d-flex align-items-center modal-header">
                                                    <h6 class="modal-title" id="createPropModalLabel">Create new
                                                        property</h6>
                                                    <a class="p-0 btn" class="close" data-dismiss="modal"
                                                        aria-label="Close"><span class="fa fa-times"></span></a>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="rounded p-3 light-box-shadow">
                                                        @include('frontend.front_panel_files.common.property_address')
                                                    </div>
                                                    <div class="mt-md-4 mt-3 text-center">
                                                        <button id="newPropSubmit" class="btn btn-bg">Save this
                                                            property
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group col-md-6 d-none sel-prop-fields">
                                <label for="selRentObj">Select rental object <span class="required">*</span> <sup
                                        class="fa fa-question label-fa-question" data-toggle="tooltip" data-placement="top"
                                        title="Here you choose which rental object applies to the lease"></sup></label>
                                <select class="form-control single-select-dropdown" id="selRentObj">
                                    <option value="0"></option>




                                </select>

                                <span id="rentalObjectIdErr" class="text-danger"></span>
                                <div class="my-3">
                                    <a class="btn btn-bg-white" data-toggle="modal" data-target="#createRentObjModal"><span
                                            class="fa fa-plus mr-2"></span>Create new rental object</a>

                                    <div class="modal fade" id="createRentObjModal" tabindex="-1" role="dialog"
                                        aria-labelledby="createRentObjModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="d-flex align-items-center modal-header">
                                                    <h6 class="modal-title" id="createRentObjModalLabel">Create new
                                                        rental object</h6>
                                                    <a class="p-0 btn" class="close" data-dismiss="modal"
                                                        aria-label="Close"><span class="fa fa-times"></span></a>
                                                </div>
                                                <div class="modal-body">
                                                    @include('frontend.front_panel_files.common.create_rental_block')
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="mt-md-4 d-none sel-prop-fields">
                            <a
                                class="d-flex align-items-center justify-content-between font-weight-bold text-decoration-none more-info-btn">Property<span
                                    class="fa fa-angle-up ml-2"></span></a>
                            <div class="mt-3 show-info">
                                <div class="form-group">
                                    <label>Street name</label>
                                    <input type="text" id="lease_street_name" placeholder="Street name"
                                        class="form-control" disabled />
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-lg-6">
                                        <label>House number</label>
                                        <input type="text" id="lease_house_number" placeholder="House number"
                                            class="form-control" disabled />
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>ZIP code</label>
                                        <input type="number" id="lease_zip_code" placeholder="ZIP code"
                                            class="form-control" disabled />
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-lg-6">
                                        <label>City</label>
                                        <input type="text" id="lease_city" placeholder="City" class="form-control"
                                            disabled />
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Commune</label>
                                        <input type="text" id="lease_commune" placeholder="Commune"
                                            class="form-control" disabled />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-md-4 d-none sel-rent-obj-fields">
                            <a
                                class="d-flex align-items-center justify-content-between font-weight-bold text-decoration-none more-info-btn">Rental
                                Object<span class="fa fa-angle-up ml-2"></span></a>
                            <div class="mt-3 show-info">
                                <div class="form-row">
                                    <div class="form-group col-lg-6 d-none sel-rent-obj-fields">
                                        <label>Housing type</label>
                                        <input type="text" id="lease_house" placeholder="Housing type"
                                            class="form-control" />
                                    </div>
                                    <div class="form-group col-lg-6 d-none dorm-fields">
                                        <label>Apartment number</label>
                                        <input id="lease_appartment_number" type="text" placeholder=""
                                            class="form-control" />
                                    </div>
                                    <div class="form-group col-lg-6 d-none sel-rent-obj-fields">
                                        <label>Property number</label>
                                        <input type="text" id="lease_property_number" placeholder=""
                                            class="form-control" />
                                    </div>
                                    <div class="form-group col-lg-6 d-none sel-rent-obj-fields">
                                        <label>Internet</label>
                                        <input id="lease_internet" type="text" placeholder="" class="form-control" />
                                    </div>
                                    <div class="form-group col-lg-6 d-none sel-rent-obj-fields">
                                        <label>Cable TV</label>
                                        <input id="lease_cable" type="text" placeholder="Cable TV"
                                            class="form-control" />
                                    </div>
                                    <div class="form-group col-lg-6 d-none sel-rent-obj-fields">
                                        <label>Furnishing</label>
                                        <input id="lease_furnishing" type="text" placeholder=""
                                            class="form-control" />
                                    </div>
                                    <div class="form-group col-lg-6 d-none sel-rent-obj-fields">
                                        <label>Water and wastewater</label>
                                        <input id="lease_water_wastewater" type="text" placeholder=""
                                            class="form-control" />
                                    </div>
                                    <div class="form-group col-lg-6 d-none sel-rent-obj-fields">
                                        <label>Smoking</label>
                                        <input id="lease_smoking" type="text" placeholder="" class="form-control" />
                                    </div>
                                    <div class="form-group col-lg-6 d-none sel-rent-obj-fields">
                                        <label>Pets</label>
                                        <input id="lease_pets" type="text" placeholder="" class="form-control" />
                                    </div>
                                    <div class="form-group col-lg-6 d-none sel-rent-obj-fields">
                                        <label>Number of rooms</label>
                                        <input id="lease_total_rooms" type="number" placeholder=""
                                            class="form-control" />
                                    </div>
                                    <div class="form-group col-lg-6 d-none sel-rent-obj-fields">
                                        <label>Number of bedrooms</label>
                                        <input id="lease_number_of_bathrooms" type="number" placeholder=""
                                            class="form-control" />
                                    </div>
                                    {{--                                    <div class="form-group col-lg-6 d-none sel-rent-obj-fields"> --}}
                                    {{--                                        <label>Property</label> --}}
                                    {{--                                        <input type="text" placeholder="Property" class="form-control"/> --}}
                                    {{--                                    </div> --}}
                                </div>
                                <div class="mt-3">
                                    <a class="btn btn-bg-white" data-toggle="modal"
                                        data-target="#editRentalObjModal"><span class="fa fa-edit mr-2"></span>Edit rental
                                        property</a>

                                    <div class="modal fade" id="editRentalObjModal" tabindex="-1" role="dialog"
                                        aria-labelledby="editRentalObjModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="d-flex align-items-center modal-header">
                                                    <h6 class="modal-title" id="editRentalObjModalLabel">Change rental
                                                        object</h6>
                                                    <a class="p-0 btn" class="close" data-dismiss="modal"
                                                        aria-label="Close"><span class="fa fa-times"></span></a>
                                                </div>
                                                <div class="modal-body">
                                                    @include('frontend.front_panel_files.common.edit_rental_block')
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <h6>Rental conditions</h6>
                    <section class="mt-4">
                        <h6>The lease applies</h6>
                        <div class="form-group">
                            <label for="applyLease">With reference to the Rent Act, please select what applies to
                                this
                                lease <span class="required">*</span> <sup class="fa fa-question label-fa-question"
                                    data-toggle="tooltip" data-placement="top"
                                    title="Select one of the options below. Help text will appear below each of the options, to ensure that you select correctly."></sup></label>
                            <select class="form-control" id="applyLease">
                                <option value="House or apartment (most common)">House or apartment (most common)
                                </option>
                                <option
                                    value="Attic or basement dwelling in a detached house or dwelling in a semi-detached house where the landlord lives in the same house">
                                    Attic or basement dwelling in a detached house or dwelling in a semi-detached house
                                    where the landlord lives in the same house
                                </option>
                                <option value="A simple living space where the tenant has access to someone else's home">A
                                    simple living space where the tenant has access to someone else's home
                                </option>
                                <option
                                    value="Housing that the landlord himself has used as his own home, and which is rented out as a result of temporary absence of up to five years">
                                    Housing that the landlord himself has used as his own home, and which is rented out
                                    as a result of temporary absence of up to five years
                                </option>
                                <option value="Warehouse / other premises">Warehouse / other premises</option>
                            </select>
                            <span id="rentActErr" class="text-danger"></span>
                        </div>
                        <div class="form-group d-none apply-lease-fields">
                            <div class="row mx-0 info-container">
                                <div class="col-md-11 px-0 order-md-1 order-2">
                                    <p class="font-weight-bold">Housing that the landlord himself has used as his own
                                        home, and which is rented out as a result of temporary absence of up to five
                                        years</p>
                                    <p class="mb-siblings-rm">The tenant has fewer rights than usual. See the Rent Act §
                                        11-4.</p>
                                    <p class="mb-0">An indefinite lease agreement for a single living space where the
                                        tenant has access to another's home according to the lease agreement may be
                                        terminated by the landlord without hindrance, cf. the Rent Act § 9-5 third
                                        paragraph. The notice period shall be one month, cf. the Rent Act § 9-6, second
                                        paragraph, first sentence.</p>
                                </div>
                                <div class="col-md-1 px-0 order-md-2 order-1">
                                    <span class="fa fa-info info-icon mx-auto mb-md-0 mb-2"></span>
                                </div>
                            </div>
                        </div>
                        <h6>Rental period</h6>
                        <p>A rental agreement can be entered into for a fixed period (with an end date) or an
                            indefinite
                            period (without an end date), and is regulated by the Rent Act, Chapter 9.</p>
                        <div class="form-group">
                            <h6>Type of agreement</h6>
                            <div class="w-100 btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="py-3 btn active">
                                    <input type="radio" value="with end date" name="agreement" id="endTimed"
                                        autocomplete="off" checked />
                                    <span class="d-block text-center text">Timed (with end date)</span>
                                    <span class="text-center fa fa-check check-mark"></span>
                                </label>
                                <label class="py-3 btn">
                                    <input type="radio" value="without end date" name="agreement" id="endIndefinite"
                                        autocomplete="off" />
                                    <span class="d-block text-center text">Indefinite (without end date)</span>
                                    <span class="text-center fa fa-check check-mark"></span>
                                </label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-lg-6">
                                <a
                                    class="d-flex align-items-center justify-content-between font-weight-bold text-decoration-none more-info-btn">Read
                                    more about Fixed-term agreement<span class="fa fa-angle-down ml-2"></span></a>
                                <div class="hidden-info">
                                    <ul class="pl-3">
                                        <li>The vast majority of leases are fixed-term and have an end date.
                                        </li>
                                        <li>According to the Rent Act, it is not permitted to enter into lease
                                            agreements for housing for less than three years, but there are
                                            exceptions to this rule. If you choose a rental period shorter than
                                            3 years, you will be asked to choose which exception applies to this
                                            rental.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="form-group col-lg-6">
                                <a
                                    class="d-flex align-items-center justify-content-between font-weight-bold text-decoration-none more-info-btn">Read
                                    more about Indefinite agreement<span class="fa fa-angle-down ml-2"></span></a>
                                <div class="hidden-info">
                                    <ul class="pl-3">
                                        <li>If you do not set an end date in the lease, the lease is to be
                                            regarded as indefinite. The lease agreement continues to run until
                                            one of the parties terminates the agreement.
                                        </li>
                                        <li>In principle, it is difficult for a landlord to terminate an
                                            indefinite lease. This requires objective reasons, for example
                                            driven by default, that the housing space must be used by the
                                            landlord himself, or that the property must be demolished or
                                            rebuilt.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-lg-6">
                                <label>Start date of the agreement <span class="required">*</span></label>
                                <div class="input-group">
                                    <input type="text" name="datePicker" placeholder="dd.mm.yyyy"
                                        class="form-control datepicker from-earliest-date" id="staDateAgree" />
                                    <div class="input-group-append">
                                        <small class="input-group-text from-earliest-date-calender-icon"><span
                                                class="fa fa-calendar"></span></small>
                                    </div>
                                </div>
                                <span id="startDateErr" class="text-danger"></span>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="end-date-agreement">End date of the agreement <span
                                        class="required">*</span></label>
                                <div class="input-group">
                                    <input type="text" name="datePicker" placeholder="dd.mm.yyyy"
                                        class="form-control datepicker to-latest-date" id="endDateAgree" />
                                    <div class="input-group-append">
                                        <small class="input-group-text to-latest-date-calender-icon"><span
                                                class="fa fa-calendar"></span></small>
                                    </div>
                                </div>
                                <span id="endDateErr" class="text-danger"> </span>
                            </div>
                            <div class="form-group col-12">
                                <label for="specRentalPer">You have specified a rental period that is shorter than 3
                                    years, please select one of the options below as the reason for this:</label>
                                <select class="form-control" id="specRentalPer">
                                    <option value=""></option>
                                    <option
                                        value="At the end of the rental period, the housing space shall be used as housing by the landlord himself or others who belong to the landlord's household.">
                                        At the end of the rental period, the housing space shall be used as housing by
                                        the landlord himself or others who belong to the landlord's household.
                                    </option>
                                    <option
                                        value="The rental unit is an attic or basement dwelling or dwelling in a semi-detached dwelling where the landlord lives in the same house.">
                                        The rental unit is an attic or basement dwelling or dwelling in a semi-detached
                                        dwelling where the landlord lives in the same house.
                                    </option>
                                    <option value="The landlord has other objective reasons for the time limit">The
                                        landlord has other objective reasons for the time limit
                                    </option>
                                </select>
                            </div>
                            <div class="form-group col-12 d-none landlord-obj-time-fields">
                                <label>Please specify objective reason for the time limit <span class="required">*</span>
                                    <sup class="fa fa-question label-fa-question" data-toggle="tooltip"
                                        data-placement="top"
                                        title="The requirement that there must be a factual reason is that the landlord must have a clearly demonstrable and acceptable reason for entering into such an agreement. As an example of objective reasons, it can be mentioned that the home is to be demolished or rebuilt or that the landlord has very specific plans to sell it (without attachment of the tenancy). (Ot. Prp. Nr. 82 (1997-98))"></sup></label>
                                <textarea placeholder="Rationale" class="form-control"></textarea>
                            </div>
                        </div>

                        <h6>Binding and termination</h6>
                        <p>Choose which lock-in period and notice period will apply to this lease.</p>
                        <div class="form-row">
                            <div class="form-group col-lg-6">
                                <label for="bindTime">Binding time <sup class="fa fa-question label-fa-question"
                                        data-toggle="tooltip" data-placement="top"
                                        title="The binding period indicates the number of months in which the lease is non-cancellable from the start of the agreement. The binding period is 9 months in most tenancies."></sup></label>
                                <select class="form-control" id="bindTime">
                                    <option value=""></option>
                                    <option value="No time restraint">No time restraint</option>
                                    <option value="1 months">1 months</option>
                                    <option value="3 months">3 months</option>
                                    <option value="6 months">6 months</option>
                                    <option value="9 months">9 months</option>
                                    <option value="12 months">12 months</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="noticePer">Notice period <sup class="fa fa-question label-fa-question"
                                        data-toggle="tooltip" data-placement="top"
                                        title="The notice period is the time from the time a notice is received until the tenancy ends, with the addition of the time remaining in the current month. The notice period is normally set at 3 months."></sup></label>
                                <select class="form-control" id="noticePer">
                                    <option value=""></option>
                                    <option value="No time restraint">No time restraint</option>
                                    <option value="1 month">1 month</option>
                                    <option value="2 months">2 months</option>
                                    <option value="3 months">3 months</option>
                                    <option value="4 months">4 months</option>
                                    <option value="5 months">5 months</option>
                                    <option value="6 months">6 months</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <a
                                class="d-flex align-items-center justify-content-between font-weight-bold text-decoration-none more-info-btn">Read
                                more about Fixed-term agreement<span class="fa fa-angle-down ml-2"></span></a>
                            <div class="mt-3 hidden-info">
                                <div class="form-group">
                                    <label>House Rules</label>
                                    <textarea id="houserRuleId" placeholder="House Rules" class="form-control"></textarea>
                                    <small>If there are special house rules for this object, these can be specified
                                        here</small>
                                </div>
                                <div class="form-group">
                                    <label>Special terms</label>
                                    <textarea id="specialTerm" placeholder="Special terms" class="form-control"></textarea>
                                    <small>If there are special terms for this lease, these can be specified here. This
                                        will appear in the rental contract.</small>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control p-0">
                                        <h6>The rental object is rented out "as is"?</h6>
                                    </div>
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" value="1" class="custom-control-input"
                                            id="internetIncl1" />
                                        <label class="custom-control-label" for="internetIncl1"></label>
                                    </div>
                                    <p>When a reservation is made that a home is rented out "as is", it means that the
                                        tenant takes over much of the risk that the home may have hidden defects. If the
                                        tenant discovers deficiencies after the conclusion of the agreement, there is
                                        normally no breach of contract unless the landlord has provided errors or
                                        missing information or if the home is in significantly worse condition than the
                                        tenant could reasonably expect based on the size of the rent and other
                                        circumstances.</p>
                                </div>
                            </div>
                        </div>
                    </section>
                    <h6>Rent and security</h6>
                    <section class="mt-4">
                        <h6>Rent</h6>
                        <div class="form-row">
                            <div class="form-group col-lg-6">
                                <label>Rent per month <span class="required">*</span> <sup
                                        class="fa fa-question label-fa-question" data-toggle="tooltip"
                                        data-placement="top"
                                        title="Enter the agreed rent per month. NB: Any surcharges for electricity and / or water consumption are not entered here."></sup></label>
                                <div class="input-group">
                                    <input id="rentPerMonth" type="number" placeholder="Rent" class="form-control" />
                                    <div class="input-group-append">
                                        <small class="input-group-text text-uppercase">Enough</small>
                                    </div>
                                </div>
                                <span id="rePerMonthErr"></span>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="accRent">Account for rent <span class="required">*</span> <sup
                                        class="fa fa-question label-fa-question" data-toggle="tooltip"
                                        data-placement="top"
                                        title="Here you choose which account the deposit is to be paid to. This can not be the same as for rent"></sup></label>
                                <select id="accRent" class="form-control">
                                    <option value=""></option>
                                    @forelse($account_data as $accountData)
                                        <option value="{{ $accountData->id }}">{{ $accountData->account }}</option>
                                    @empty
                                    @endforelse
                                </select>
                                <span id="accRentErr"></span>
                                <a class="mt-3 btn btn-bg-white" data-toggle="modal" data-target="#addAccountModal"><span
                                        class="fa fa-plus mr-2"></span>Add Account</a>

                                <div class="modal fade" id="addAccountModal" tabindex="-1" role="dialog"
                                    aria-labelledby="addAccountModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="d-flex align-items-center modal-header">
                                                <h6 class="modal-title" id="addAccountModalLabel">Create a new bank
                                                    account</h6>
                                                <a class="p-0 btn" class="close" data-dismiss="modal"
                                                    aria-label="Close"><span class="fa fa-times"></span></a>
                                            </div>
                                            <div class="modal-body">
                                                <div class="rounded p-3 light-box-shadow">
                                                    <div class="form-group">
                                                        <label>Account number (11 digits) <span class="required">*</span>
                                                            <sup class="fa fa-question label-fa-question"
                                                                data-toggle="tooltip" data-placement="top"
                                                                title="Enter account number without spaces"></sup></label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <small class="input-group-text"><span
                                                                        class="fa fa-university"></span></small>
                                                            </div>
                                                            <input id="account" type="number"
                                                                placeholder="Enter bank account" class="form-control" />

                                                        </div>
                                                        <span id="accountErr" class="text-danger"></span>
                                                    </div>
                                                </div>
                                                <div class="mt-md-4 mt-3 text-right">
                                                    <button id="saveAccount" class="btn btn-bg">Save this
                                                        account
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="dueDate">Due date <sup class="fa fa-question label-fa-question"
                                    data-toggle="tooltip" data-placement="top"
                                    title="Select the day of the month the rent is due for payment. The most common is the first of the month."></sup></label>
                            <select id="dueDate" class="form-control">
                                <option value=""></option>
                                <option value="The 1st current month">The 1st current month</option>
                                <option value="The 5th of the current month">The 5th of the current month</option>
                                <option value="The 10th of the current month">The 10th of the current month</option>
                                <option value="The 15th of the current month">The 15th of the current month</option>
                                <option value="The 20th of the current month">The 20th of the current month</option>
                                <option value="The 25th of the current month">The 25th of the current month</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <h6>First rent due <sup class="fa fa-question label-fa-question" data-toggle="tooltip"
                                    data-placement="top"
                                    title="Choose whether you want rent for the first rental month to fall due for payment on the move-in date or due date. It is most common to demand the first rent on the move-in date, to ensure that the tenant pays at least one rent before moving in."></sup>
                            </h6>
                            <div class="w-100 btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="py-3 btn active">
                                    <input type="radio" value="By moving date" name="rent_due" autocomplete="off"
                                        value="" id="movDatingInput" checked />
                                    <span class="d-block text-center text">By moving-date (<span id="movDating"
                                            class="text"></span>)</span>
                                    <span class="text-center fa fa-check check-mark"></span>
                                </label>
                                <label class="py-3 btn">
                                    <input type="radio" name="rent_due" autocomplete="off" value="By due date"
                                        id="byDueDate" />
                                    <span class="d-block text-center text">By due date (<span id="dueDating"
                                            class="text">25-10-2011</span>)</span>
                                    <span class="text-center fa fa-check check-mark"></span>
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <h6>Payment of first rent <sup class="fa fa-question label-fa-question" data-toggle="tooltip"
                                    data-placement="top"
                                    title="Rent is always paid for the current month. If you move in outside the 1st of the month, the tenant will be liable for less than one full monthly rent at the due date of the first rent. Choose how the first rent is to be paid."></sup>
                            </h6>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="firstRentFullMonth" value="1" name="payment_first_rent"
                                    class="custom-control-input" />
                                <label class="custom-control-label" for="firstRentFullMonth">The first rent applies to
                                    the period until the first full month starts</label>
                            </div>
                            <div class="row mx-0 my-2 d-none info-container first-rent-full-month-radio">
                                <div class="col-md-11 px-0 order-md-1 order-2">
                                    <ul class="pl-3 mb-0">
                                        <li>Rent October: NOK 25,041 due 25.10.2021 <span class="d-none by-due-date">(By
                                                due date)</span>
                                        </li>
                                        <li>Rent November: NOK 32,345 due 25.11.2021 (By due date)</li>
                                    </ul>
                                </div>
                                <div class="col-md-1 px-0 order-md-2 order-1">
                                    <span class="fa fa-info info-icon mx-auto mb-md-0 mb-2"></span>
                                </div>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="firstRentEntMonth" value="2" name="payment_first_rent"
                                    class="custom-control-input" />
                                <label class="custom-control-label" for="firstRentEntMonth">The first rent applies to
                                    the period until the first full month starts, and the entire following month</label>
                            </div>
                            <div class="row mx-0 my-2 d-none info-container first-rent-entire-month-radio">
                                <div class="col-md-11 px-0 order-md-1 order-2">
                                    <ul class="pl-3 mb-0">
                                        <li>Rent October and November: NOK 57,386 is due 25.10.2021 <span
                                                class="d-none by-due-date">(By due date)</span></li>
                                        <li>Rent December: NOK 32,345 due 25.12.2021 (By due date)</li>
                                    </ul>
                                </div>
                                <div class="col-md-1 px-0 order-md-2 order-1">
                                    <span class="fa fa-info info-icon mx-auto mb-md-0 mb-2"></span>
                                </div>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customFirstRent" value="3" name="payment_first_rent"
                                    class="custom-control-input" />
                                <label class="custom-control-label" for="customFirstRent">Custom</label>
                            </div>
                            <div class="my-3 form-group d-none custom-first-rent-radio">
                                <label>Rent for the period <span class="required">*</span></label>
                                <div class="input-group">
                                    <input type="number" placeholder="Rent" class="form-control" />
                                    <div class="input-group-append">
                                        <small class="input-group-text text-uppercase">Enough</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row mx-0 my-2 d-none info-container custom-first-rent-radio">
                                <div class="col-md-11 px-0 order-md-1 order-2">
                                    <ul class="pl-3 mb-0">
                                        <li>Rent October: NOK 0 due 25.10.2021 <span class="d-none by-due-date">(By due
                                                date)</span>
                                        </li>
                                        <li>Rent November: NOK 32,345 due 25.11.2021 (By due date)</li>
                                    </ul>
                                </div>
                                <div class="col-md-1 px-0 order-md-2 order-1">
                                    <span class="fa fa-info info-icon mx-auto mb-md-0 mb-2"></span>
                                </div>
                            </div>
                        </div>

                        <h6>Deposit and security for the tenancy</h6>
                        <div class="form-group">
                            <h6>Lease security</h6>
                            <div class="w-100 btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="py-3 btn active">
                                    <input type="radio" value="Deposit account in another bank" name="lease_security"
                                        autocomplete="off" id="leaseDepositAccount" checked />
                                    <span class="d-block text-center text">Deposit account in another bank</span>
                                    <span class="text-center fa fa-check check-mark"></span>
                                </label>
                                <label class="py-3 btn">
                                    <input type="radio" name="lease_security" value="Other security"
                                        autocomplete="off" id="leaseOtherSecurity" value="25-10-2011" />
                                    <span class="d-block text-center text">Other security</span>
                                    <span class="text-center fa fa-check check-mark"></span>
                                </label>
                                <label class="py-3 btn" data-toggle="modal" data-target="#noSecurityModel">
                                    <input type="radio" name="lease_security" value="No security" autocomplete="off"
                                        id="leaseNoSecurity" />
                                    <span class="d-block text-center text">No security</span>
                                    <span class="text-center fa fa-check check-mark"></span>
                                </label>
                            </div>
                            <div class="modal fade" id="noSecurityModel" tabindex="-1" role="dialog"
                                aria-labelledby="noSecurityModelLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="d-flex align-items-center modal-header">
                                            <h6 class="modal-title" id="noSecurityModelLabel">Are you sure?</h6>
                                            <a class="p-0 btn" class="close" data-dismiss="modal"
                                                aria-label="Close"><span class="fa fa-times"></span></a>
                                        </div>
                                        <div class="modal-body">
                                            <div class="rounded p-3 light-box-shadow">
                                                <p class="mb-0">You have selected "no security" for the tenancy. If your
                                                    tenant defaults on the tenancy, you must remember that you have no
                                                    financial security for any claims.</p>
                                            </div>
                                            <div class="mt-md-4 mt-3 text-right">
                                                <button class="btn btn-bg">I understand, move on</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-row d-none lease-deposit-account-checkbox">
                            <div class="form-group col-lg-8 choose-deposit-amount-checkbox">
                                <h6>Number of months deposit <sup class="fa fa-question label-fa-question"
                                        data-toggle="tooltip" data-placement="top"
                                        title="Here you can choose to set the deposit amount based on the rent"></sup>
                                </h6>
                                <div id="monthDepositRange"></div>
                            </div>
                            <div class="form-group col-lg-4 choose-deposit-amount-checkbox">
                                <h6>Deposit Amount</h6>
                                <h4 class="text-muted">kr 97 035</h4>
                            </div>
                            <div class="form-group col-lg-6 mb-2 d-none choose-deposit-amount-checkbox">
                                <label>Custom deposit amount <sup class="fa fa-question label-fa-question"
                                        data-toggle="tooltip" data-placement="top"
                                        title="Please enter the sum for the deposit. This must be a maximum of 6 months rent"></sup></label>
                                <div class="input-group">
                                    <input id="customDepositAmount" type="number" placeholder="Ex: 30000"
                                        class="form-control" />
                                    <div class="input-group-append">
                                        <small class="input-group-text text-uppercase">Enough</small>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-12">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="chooseDepositAmount" />
                                    <label class="custom-control-label" for="chooseDepositAmount">I will choose a custom
                                        deposit amount</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-2 d-none lease-deposit-account-checkbox do-not-have-account-checkbox">
                            <label for="accDeposit">Account for deposit <span class="required">*</span> <sup
                                    class="fa fa-question label-fa-question" data-toggle="tooltip" data-placement="top"
                                    title="Here you choose which account the deposit is to be paid to. This can not be the same as for rent"></sup></label>
                            <select id="accDeposit" class="form-control">
                                <option value=""></option>
                                @forelse($account_data as $accountData)
                                    <option value="{{ $accountData->id }}">{{ $accountData->account }}</option>
                                @empty
                                @endforelse
                            </select>
                            <p class="mt-1 mb-0 text-muted small">Deposit account cannot be the same as rent account</p>
                            {{--                            <a class="mt-2 btn btn-bg-white" data-toggle="modal" --}}
                            {{--                               data-target="#addAccDepositModal"><span --}}
                            {{--                                    class="fa fa-plus mr-2"></span>Add Account</a> --}}

                            <div class="modal fade" id="addAccDepositModal" tabindex="-1" role="dialog"
                                aria-labelledby="addAccDepositModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="d-flex align-items-center modal-header">
                                            <h6 class="modal-title" id="addAccDepositModalLabel">Create a new bank
                                                account</h6>
                                            <a class="p-0 btn" class="close" data-dismiss="modal"
                                                aria-label="Close"><span class="fa fa-times"></span></a>
                                        </div>
                                        <div class="modal-body">
                                            <div class="rounded p-3 light-box-shadow">
                                                <div class="form-group">
                                                    <label>Account number (11 digits) <sup
                                                            class="fa fa-question label-fa-question" data-toggle="tooltip"
                                                            data-placement="top"
                                                            title="Enter account number without spaces"></sup></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <small class="input-group-text"><span
                                                                    class="fa fa-university"></span></small>
                                                        </div>
                                                        <input type="number" placeholder="Enter bank account"
                                                            class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-md-4 mt-3 text-right">
                                                <button class="btn btn-bg">Save this
                                                    account
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group d-none lease-deposit-account-checkbox">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" value="1" class="custom-control-input" id="notAccountNo" />
                                <label class="custom-control-label" for="notAccountNo">I do not have the account number
                                    for the deposit account ready yet</label>
                            </div>
                        </div>
                        <div class="form-group d-none lease-deposit-account-checkbox">
                            <div class="custom-control p-0">
                                <h6>I accept that the tenant can create a deposit guarantee as an alternative to a
                                    deposit? <sup class="fa fa-question label-fa-question" data-toggle="tooltip"
                                        data-placement="top"
                                        title="Deposit guarantee gives you as a landlord the same coverage as a regular deposit. Creation of a deposit guarantee is free of charge for the landlord"></sup>
                                </h6>
                            </div>
                            <div class="custom-control custom-switch">
                                <input type="checkbox" value="1" class="custom-control-input" id="altDeposit" />
                                <label class="custom-control-label" for="altDeposit"></label>
                            </div>
                        </div>

                        <div class="form-group d-none other-security-checkbox">
                            <h6>Other security</h6>
                            <div class="w-100 btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="py-3 btn active">
                                    <input type="radio" name="other_security" autocomplete="off"
                                        id="depositAccGuarantee" checked />
                                    <span class="d-block text-center text">Deposit account guarantee</span>
                                    <span class="text-center fa fa-check check-mark"></span>
                                </label>
                                <label class="py-3 btn">
                                    <input type="radio" name="other_security" autocomplete="off" id="otherSecCustom"
                                        value="25-10-2011" />
                                    <span class="d-block text-center text">Other security (custom)</span>
                                    <span class="text-center fa fa-check check-mark"></span>
                                </label>
                            </div>
                        </div>

                        <div class="form-row d-none deposit-account-guarantee-checkbox">
                            <div class="form-group col-lg-8 choose-deposit-guarantee-amount-checkbox">
                                <h6>Number of months deposit guarantee <sup class="fa fa-question label-fa-question"
                                        data-toggle="tooltip" data-placement="top"
                                        title="Here you can choose to set the deposit guarantee amount based on the rent"></sup>
                                </h6>
                                <div id="monthDepositGuaranteeRange"></div>
                            </div>
                            <div class="form-group col-lg-4 choose-deposit-guarantee-amount-checkbox">
                                <h6>Deposit Guarantee</h6>
                                <h4 class="text-muted">kr 0</h4>
                            </div>
                            <div class="form-group col-lg-6 mb-2 d-none choose-deposit-guarantee-amount-checkbox">
                                <label>Custom deposit amount <sup class="fa fa-question label-fa-question"
                                        data-toggle="tooltip" data-placement="top"
                                        title="Please enter the sum for the deposit. This must be a maximum of 6 months rent"></sup></label>
                                <div class="input-group">
                                    <input type="number" placeholder="Ex: 30000" class="form-control" />
                                    <div class="input-group-append">
                                        <small class="input-group-text text-uppercase">Enough</small>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-12">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input"
                                        id="chooseDepositGuaranteeAmount" />
                                    <label class="custom-control-label" for="chooseDepositGuaranteeAmount">I will choose
                                        a custom deposit guarantee amount</label>
                                </div>
                            </div>
                            <div class="form-group col-12">
                                <label>Warranty issuer <sup class="fa fa-question label-fa-question" data-toggle="tooltip"
                                        data-placement="top"
                                        title="Fill in the name of the guarantor. This will appear in the rental contract."></sup></label>
                                <input class="form-control" placeholder="Waranty issuer" />
                            </div>
                        </div>

                        <div class="form-group d-none other-security-custom-checkbox">
                            <label>Information about other security (will appear in the lease) <span
                                    class="required">*</span></label>
                            <textarea class="form-control" placeholder="Information on other safety"></textarea>
                        </div>
                    </section>
                    <h6>Tenant</h6>
                    <section class="mt-4">
                        <h6>Summary</h6>
                        <div class="form-row">
                            <div class="form-group col-lg-6">
                                <label>Property</label>
                                <input type="text" id="propertyReadOnly" class="form-control" readonly />
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Rental object</label>
                                <input id="rentalObjectReadOnly" type="text" class="form-control" readonly />
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Type of rental object</label>
                                <input id="rentalObjectTypeReadOnly" type="text" class="form-control" readonly />
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Rent</label>
                                <input type="number" id="rentReadonly" class="form-control" readonly />
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Agreement start date</label>
                                <input id="StartDateReadOnly" type="text" class="form-control" readonly />
                            </div>
                            <div class="form-group col-lg-6">
                                <label>End date of the agreement</label>
                                <input type="text" id="EndDateReadOnly" class="form-control" readonly />
                            </div>
                        </div>
                        <h6>Landlord's address</h6>
                        <div class="form-group">
                            <label for="strName">Street name <span class="required">*</span> <sup
                                    class="fa fa-question label-fa-question" data-toggle="tooltip" data-placement="top"
                                    title="Start entering the street name in which the property is located and select the correct street name from the list."></sup></label>
                            {{--                            <select  id="street_nameReadOnly" class="form-control single-select-dropdown" id="strName" readonly> --}}
                            {{--                                <option value=""></option> --}}
                            {{--                            </select> --}}
                            <input id="street_nameReadOnly" type="text" class="form-control" readonly />
                        </div>
                        <div class="form-group">
                            <label for="strNumber">Street number <span class="required">*</span> <sup
                                    class="fa fa-question label-fa-question" data-toggle="tooltip" data-placement="top"
                                    title="Select the street number that the property is located in. If you do not find the right street number, then double check that the street name above is correct."></sup></label>
                            {{--                            <select id="Street_numberReadOnly" class="form-control single-select-dropdown" id="strNumber" disabled> --}}
                            {{--                                <option value=""></option> --}}
                            {{--                            </select> --}}
                            <input id="Street_numberReadOnly" type="text" class="form-control" readonly />
                        </div>
                        <div class="form-row">
                            <div class="form-group col-lg-4">
                                <label>Zip code <span class="required">*</span></label>
                                <input id="zip_codeReadOnly" type="number" class="form-control" readonly />
                            </div>
                            <div class="form-group col-lg-4">
                                <label>City <span class="required">*</span></label>
                                <input id="cityReadOnly" type="text" class="form-control" readonly />
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Commune <span class="required">*</span></label>
                                <input id="CommuneReadOnly" type="text" class="form-control" readonly />
                            </div>
                        </div>
                        <div>
                            <a class="btn btn-bg-white">Save Changes</a>
                            <a class="btn btn-bg">Close</a>
                        </div>
                        <h6 class="mt-4">Tenant</h6>
                        <div class="form-row">
                            <div class="form-group col-lg-6">
                                <label>First name of tenant <span class="required">*</span> <sup
                                        class="fa fa-question label-fa-question" data-toggle="tooltip"
                                        data-placement="top" title="Here you write the tenant's first name"></sup></label>
                                <input id="firstNameTenant" type="text" class="form-control"
                                    placeholder="First name of tenant" />
                                <span id="firstNameTenantErr" class="text-danger"></span>
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Surname of tenant <span class="required">*</span> <sup
                                        class="fa fa-question label-fa-question" data-toggle="tooltip"
                                        data-placement="top" title="Here you write the tenant's last name"></sup></label>
                                <input id="surnameTenant" type="text" class="form-control"
                                    placeholder="Surname of tenant" />
                                <span id="surnameTenantErr" class="text-danger"></span>
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Email to tenant <span class="required">*</span> <sup
                                        class="fa fa-question label-fa-question" data-toggle="tooltip"
                                        data-placement="top"
                                        title="Here you write the tenant's email address"></sup></label>
                                <input id="emailTenant" type="email " class="form-control"
                                    placeholder="example@gmail.com" />
                                <span id="emailTenantErr" class="text-danger"></span>
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Mobile number for tenant <span class="required">*</span> <sup
                                        class="fa fa-question label-fa-question" data-toggle="tooltip"
                                        data-placement="top"
                                        title="Here you enter the mobile number of the tenant"></sup></label>
                                <div class="form-row">
                                    <div class="col-4">
                                        <select class="form-control" id="dialCode">
                                            <option value="+1">+1</option>
                                            <option value="+91">+91</option>
                                            <option value="+92">+92</option>
                                            <option value="+93">+93</option>
                                            <option value="+47">+47</option>
                                        </select>
                                    </div>
                                    <div class="col-8">
                                        <input id="phoneTenant" type="tel" placeholder="Mobile Number"
                                            class="form-control">
                                        <span id="phoneTenantErr" class="text-danger"></span>
                                    </div>

                                </div>
                            </div>

                            <div
                                class="text-center col-lg-10 mx-auto mb-4 light-box-shadow check-tenant-pay-remarks-container">
                                <h5 class="mb-3">Check if the tenant has payment remarks</h5>
                                <p>Secure yourself against bad payers by checking if your tenant has payment remarks
                                    even before you sign the lease. Bad payers can cost you dearly, so it pays to credit
                                    check the tenant to get an insight into the tenant's ability to pay. <a href="#"
                                        data-toggle="modal" data-target="#creditCheckModal" class="font-weight-bold">read
                                        more<span class="ml-2 fa fa-angle-right"></span></a></p>
                                <p class="font-italic mb-0">The service costs 69 kroner, and is provided by Experian.</p>

                                <div class="mt-3 col-md-5 col-sm-7 col-12 btn-group btn-group-toggle"
                                    data-toggle="buttons">
                                    <label class="py-2 btn active">
                                        <input type="radio" name="tenant_remarks" autocomplete="off"
                                            value="Yes please!" checked />
                                        <span class="d-block text-center text">Yes please!</span>
                                        <span class="text-center fa fa-check check-mark"></span>
                                    </label>
                                    <label class="py-2 btn">
                                        <input type="radio" name="tenant_remarks" autocomplete="off"
                                            value="No thanks" />
                                        <span class="d-block text-center text">No thanks</span>
                                        <span class="text-center fa fa-check check-mark"></span>
                                    </label>
                                </div>

                                <div class="modal fade" id="creditCheckModal" tabindex="-1" role="dialog"
                                    aria-labelledby="creditCheckModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="d-flex align-items-center modal-header">
                                                <h6 class="modal-title" id="creditCheckModalLabel">Create new
                                                    property</h6>
                                                <a class="p-0 btn" class="close" data-dismiss="modal"
                                                    aria-label="Close"><span class="fa fa-times"></span></a>
                                            </div>
                                            <div class="modal-body">
                                                <div class="rounded p-3 light-box-shadow">
                                                    <p>Poor payers are many landlords' cause of poor night's sleep, and are
                                                        something that can be a very costly affair. If you credit check the
                                                        tenant, you get very useful information about the tenant's ability
                                                        to pay, and can eliminate a lot of uncertainty!</p>
                                                    <p>As a landlord, you have a valid reason to perform a credit check of
                                                        the tenant, as long as it can be probable that you will be included
                                                        in a lease agreement, and that the rent will be paid in full or in
                                                        part in advance. Credit checks are carried out by Experian, and copy
                                                        letters are sent to the tenant from Experian afterwards.</p>
                                                    <p class="font-italic mb-0">The service costs 69 kroner, and is
                                                        provided by Experian.</p>
                                                </div>
                                                <div class="mt-3 text-right">
                                                    <button class="btn btn-bg" data-dismiss="modal">Back</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control p-0">
                                    <h6>No need to think about collecting the rent - Try Precise Management for
                                        free</h6>
                                </div>
                                <div class="custom-control custom-switch">
                                    <input value="1" type="checkbox" class="custom-control-input"
                                        id="preManageFree">
                                    <label class="custom-control-label" for="preManageFree"></label>
                                </div>
                                <p class="small mt-2 mb-0">Try Precise Management completely free for 2 months, without
                                    a lock-in period and completely without entering payment information. With Precise
                                    Management, you do not have to follow up the payment of the rent. The rent is
                                    invoiced completely automatically every month, and in the event of late payment, you
                                    can easily use Precise Management to send reminders. In addition, you get access to
                                    a dashboard with key figures, full insight into the tenancy, messaging function with
                                    the tenant, and much more.</p>
                                <a href="{{ url('client/management-system') }}" class="small font-weight-bold">read
                                    more<span class="ml-2 fa fa-angle-right"></span></a>
                            </div>
                        </div>
                    </section>
                    <h6>Preview</h6>
                    <section class="mt-4">
                        <div class="pdf-images">
                            <div>
                                @php
                                    $data = App\Models\LeieadminLogo::first();
                                @endphp
                                <div class="mb-3 pb-2 d-flex justify-content-between" style="border-bottom: 1px solid #000">
                                    <div><h5>Tenant</h5></div>
                                    <div>
                                        <img src="{{ asset('public/uploads/' . $data->logo) }}" class="float-right site-logo" style="height: 35px;filter: invert(.8)">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-lg-6">
                                        <label>First name of tenant</label>
                                        <input id="firstNameTenantpreview" type="text"
                                            value=""class="form-control" placeholder="First name of tenant"
                                            readonly />
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Surname of tenant</label>
                                        <input id="surnameTenantpreview" type="text" value=""
                                            class="form-control" placeholder="Surname of tenant" readonly />
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label>Email to tenant</label>
                                        <input id="emailTenantpreview" type="email " value=""
                                            class="form-control" placeholder="example@gmail.com" readonly />
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label>Mobile number for tenant</label>
                                        <input id="phoneTenantpreview" type="tel" value=""
                                            placeholder="Mobile Number" class="form-control" readonly>
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
                                    <div class="form-group col-lg-6">
                                        <label>First name of Landlord</label>
                                        <input id="firstNameTenantpreview" type="text"
                                            value="{{ auth()->user()->name }}"class="form-control"
                                            placeholder="First name of tenant" readonly />
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Surname of Landlord</label>
                                        <input id="surnameTenantpreview" type="text" value=""
                                            class="form-control" placeholder="Surname of tenant" readonly />
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label>Email to Landlord</label>
                                        <input id="emailTenantpreview" type="email "
                                            value="{{ auth()->user()->email }}" class="form-control"
                                            placeholder="example@gmail.com" readonly />
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label>Mobile number for Landlord</label>
                                        <input id="phoneTenantpreview" type="tel"
                                            value="{{ auth()->user()->phone }}" placeholder="Mobile Number"
                                            class="form-control" readonly>
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
                                    <div class="form-group col-lg-6">
                                        <label>Street Name</label>
                                        <input type="text" id="streatname" value="" class="form-control"
                                            readonly />
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Street Number</label>
                                        <input type="text" id="streatnumber" value="" class="form-control"
                                            readonly />
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>ZIP Code</label>
                                        <input type="text" id="zipcode" value="" class="form-control"
                                            readonly />
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Property Number</label>
                                        <input type="text" id="farmnumber" value="" class="form-control"
                                            readonly />
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Type of rental object</label>
                                        <input type="text" id="rentaltype" value=""  class="form-control"  readonly />
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
                                        <input type="text" id="leasetype" value=""  class="form-control"  readonly />
                                    </div>
                                    {{-- <div class="form-group col-lg-6">
                                        <label>Termination period</label>
                                        <input type="text" id="terminationPeriod" value="" class="form-control" readonly />
                                    </div> --}}
                                    <div class="form-group col-lg-6">
                                        <label>Binding time</label>
                                        <input type="text" id="bindingPeriod" value="" class="form-control" readonly />
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Start date</label>
                                        <input type="text" id="startDate" value="" class="form-control" readonly />
                                    </div>

                                    <div class="form-group col-lg-6">
                                        <label>End date</label>
                                        <input type="text" id="endDate" value="" class="form-control" readonly />
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Rent amount</label>
                                        <input type="text" id="rent" value="" class="form-control" readonly />
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Deposit amount</label>
                                        <input type="text" id="depositAmnt" value="" class="form-control" readonly />
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Due date for rent</label>
                                        <input type="text" id="due_Date" value="" class="form-control" readonly />
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
                    <h6>Finished</h6>
                    <section class="mt-4">
                        <div class="col-md-8 mx-auto">
                            <h6 class="text-center">Finished! The lease will be sent to the tenant</h6>
                            <p class="text-center">We are now sending an invitation to your tenant. When the tenant has
                                signed, you will be notified, and you can also sign the lease.</p>
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
                    if (currentIndex == 1) {
                        let rental_object_id = $("#selRentObj option:selected").val();
                        let property_id = $("#selProp option:selected").val()
                        let language = $("#languageID option:selected").val()
                        let step = 1;
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        var csrf = $("input[name=_token]").val();
                        $.ajax({
                            url: '{{ URL::to('/client/lease-step1') }}',
                            type: 'post',
                            data: {
                                'property_id': property_id,
                                'rental_object_id': rental_object_id,
                                'step': step,
                                'language': language
                            },
                            success: function(response) {
                                $("#loader").fadeOut("slow");
                            },
                            error: function(request, status, error) {
                                $("#loader").fadeOut("slow");
                                console.log(request, status, error);
                                let errors = request.responseJSON.errors;
                                $("a[href='#previous']").click();
                                $('#propertyIdErr').text(errors['property_id'][0]);
                                $('#rentalObjectIdErr').text(errors['rental_object_id'][0]);

                            }
                        });
                    }
                    if (currentIndex == 2) {
                        let rental_act = $("#applyLease option:selected").val();

                        let agreement_type = $('input[name="agreement"]:checked').val();
                        let start_date_of_agreement = $("#staDateAgree").val();

                        let end_date_of_agreement = $("#endDateAgree").val();
                        let rental_peroid = $("#specRentalPer option:selected").val();
                        let binding_peroid = $("#bindTime option:selected").val();
                        let notice_peroid = $("#noticePer option:selected").val();
                        let house_rule = $("#houserRuleId").val();
                        let special_term = $("#specialTerm").val();
                        let rent_out_as = $("#internetIncl1").val();
                        let step = 2;
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        var csrf = $("input[name=_token]").val();
                        $.ajax({
                            url: '{{ URL::to('/client/lease-step1') }}',
                            type: 'post',
                            data: {
                                'rental_act': rental_act,
                                'agreement_type': agreement_type,
                                'start_date_of_agreement': start_date_of_agreement,
                                'end_date_of_agreement': end_date_of_agreement,
                                'rental_peroid': rental_peroid,
                                'binding_peroid': binding_peroid,
                                'notice_peroid': notice_peroid,
                                'house_rule': house_rule,
                                'agreement_type': agreement_type,
                                'special_term': special_term,
                                'special_term': rent_out_as,
                                'step': step
                            },
                            success: function(response) {
                                $("#loader").fadeOut("slow");
                            },
                            error: function(request, status, error) {
                                $("#loader").fadeOut("slow");
                                console.log(request, status, error);
                                let errors = request.responseJSON.errors;
                                $("a[href='#previous']").click();

                                $('#rentalActErr').text(errors['rental_act'][0]);
                                $('#startDateErr').text(errors['start_date_of_agreement'][
                                    0
                                ]);
                                $('#endDateErr').text(errors['end_date_of_agreement'][0]);


                            }
                        });

                        /*First rent due*/
                        var staDateAgree = $('#staDateAgree').val();
                        var movDating = $('#movDating').text(staDateAgree);
                        $('#movDatingInput').val(movDating.text());
                        /*First rent due*/

                        /*month deposit range slider or selector*/
                        $('#monthDepositRange').alRangeSlider({
                            range: {
                                min: 1,
                                max: 6,
                                step: 1
                            }
                        });
                        /*month deposit range slider or selector*/

                        /*month deposit range slider or selector*/
                        $('#monthDepositGuaranteeRange').alRangeSlider({
                            range: {
                                min: 1,
                                max: 6,
                                step: 1
                            }
                        });
                        /*month deposit range slider or selector*/
                    }
                    if (currentIndex == 3) {
                        let number_of_months_deposit = $('input[name="to"]').val();

                        let rent_per_month = $("#rentPerMonth").val();
                        let account_id = $("#accRent option:selected").val();
                        let dueDate = $("#dueDate option:selected").val();
                        let rent_due = $('input[name="rent_due"]:checked').val();
                        let payment_for_first_rent = $('input[name="payment_first_rent"]:checked')
                            .val();
                        let lease_security = $('input[name="lease_security"]:checked').val();
                        //let number_of_months_deposit=$( "#monthDepositRange" ).val();
                        let custom_deposit_amount = $("#chooseDepositAmount option:selected").val();
                        let deposit_account = $("#accDeposit option:selected").val();
                        let no_account = $("#notAccountNo option:selected").val();
                        let altDeposit = $("#altDeposit option:selected").val();
                        let step = 3;
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        var csrf = $("input[name=_token]").val();
                        $.ajax({
                            url: '{{ URL::to('/client/lease-step1') }}',
                            type: 'post',
                            data: {
                                'rent_per_month': rent_per_month,
                                'account_id': account_id,
                                'dueDate': dueDate,
                                'rent_due': rent_due,
                                'payment_for_first_rent': payment_for_first_rent,
                                'lease_security': lease_security,
                                'number_of_months_deposit': number_of_months_deposit,
                                'custom_deposit_amount': custom_deposit_amount,
                                'deposit_account': deposit_account,
                                'no_account': no_account,
                                'altDeposit': altDeposit,
                                'step': step
                            },
                            success: function(response) {
                                $("#loader").fadeOut("slow");
                                $("#propertyReadOnly").val(response.street_name);
                                $("#street_nameReadOnly").val(response.street_name);
                                $("#Street_numberReadOnly").val(response.street_number);
                                $("#zip_codeReadOnly").val(response.zip_code);
                                $("#cityReadOnly").val(response.city);
                                $("#CommuneReadOnly").val(response.commune);
                                $("#rentalObjectReadOnly").val(response.rental_object);
                                $("#rentalObjectTypeReadOnly").val(response.rental_object);
                                $("#rentReadonly").val(response.rent);
                                $("#StartDateReadOnly").val(response.start_date);
                                $("#EndDateReadOnly").val(response.end_date);

                            },
                            error: function(request, status, error) {
                                $("#loader").fadeOut("slow");
                                console.log(request, status, error);
                                let errors = request.responseJSON.errors;
                                $("a[href='#previous']").click();
                                $('#rePerMonthErr').text(errors['rent_per_month'][0]);
                                $('#accRentErr').text(errors['account_id'][0]);
                            }
                        });
                    }
                    if (currentIndex == 4) {

                        let first_name = $("#firstNameTenant").val();
                        let surname = $("#surnameTenant").val();
                        let email = $("#emailTenant").val();
                        let think_about_collecting_rent = $("#phoneTenant").val();
                        let phone = $("#phoneTenant").val();
                        let countryCode = $("#dialCode option:selected").val();
                        let payment_remarks = $('input[name="tenant_remarks"]:checked').val();

                        /* assign value to the preview slide */
                        $("#firstNameTenantpreview").val(first_name);
                        $("#surnameTenantpreview").val(surname);
                        $("#emailTenantpreview").val(email);
                        $("#phoneTenantpreview").val(countryCode + phone);

                        let step = 4;
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        var csrf = $("input[name=_token]").val();
                        $.ajax({
                            url: '{{ URL::to('/client/lease-step1') }}',
                            type: 'post',
                            data: {
                                'first_name': first_name,
                                'surname': surname,
                                'email': email,
                                'phone': phone,
                                'countryCode': countryCode,
                                'step': step,
                                'payment_remarks': payment_remarks,
                                'think_about_collecting_rent': think_about_collecting_rent
                            },
                            success: function(response) {
                                $("#loader").fadeOut("slow");
                                $("#streatname").val(response.property.street_name);
                                $("#streatnumber").val(response.property.street_number);
                                $("#zipcode").val(response.property.zip_code);
                                $("#farmnumber").val(response.property.farm_number);
                                $("#rentaltype").val(response.lease.rental_object.rental_object);
                                
                                $("#leasetype").val(response.lease.rental_object.rental_object);
                                $("#terminationPeriod").val(response.lease.termination_peroid);
                                $("#bindingPeriod").val(response.lease.binding_peroid);
                                $("#startDate").val(response.lease.start_date_of_agreement);
                                $("#endDate").val(response.lease.end_date_of_agreement);
                                $("#rent").val(response.lease.rent_per_month);
                                $("#depositAmnt").val(response.lease.payment_for_first_rent);
                                $("#due_Date").val(response.lease.due_date);
                            },
                            error: function(request, status, error) {
                                $("#loader").fadeOut("slow");
                                console.log(request, status, error);
                                let errors = request.responseJSON.errors;
                                $("a[href='#previous']").click();
                                $('#firstNameTenantErr').text(errors['first_name'][0]);
                                $('#surnameTenantErr').text(errors['surname'][0]);
                                $('#emailTenantErr').text(errors['email'][0]);
                                $('#phoneTenantErr').text(errors['phone'][0]);

                            }
                        });

                        $('.pdf-images').slick({
                            dots: false,
                            arrows: true,
                            fade: true,
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            prevArrow: $('.prev-arrow'),
                            nextArrow: $('.next-arrow')
                        });
                    }
                    if (currentIndex == 5) {

                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        var csrf = $("input[name=_token]").val();

                        $.ajax({
                            url: '{{ URL::to('/client/lease-store') }}',
                            type: 'post',


                            success: function(response) {
                                $("#loader").fadeOut("slow");
                                toastr.success(response.message);

                            }
                        });

                    }
                    $(document).on('click', 'a[href="#finish"]', function() {
                        window.location.href = '{{ asset('client/leases/all-leases') }}';
                    });


                }

            });

            $(document).on('click', 'a[href="#next"]', function() {
                $('#loader').css('background-color', '#ffffffc5');
                $('#loader').show();
            });

            /*choose deposit guarantee amount checkbox*/
            $(document).on('click', '#chooseDepositGuaranteeAmount', function() {
                $('.choose-deposit-guarantee-amount-checkbox').toggleClass('d-none');
            });
            /*choose deposit guarantee amount checkbox*/

            /*Other security*/
            otherSecurityCheckbox();

            $(document).on('click', 'input[name="other_security"]', function() {
                otherSecurityCheckbox();
            });
            /*Other security*/

            /*Lease security*/
            leaseSecurityCheckbox();

            $(document).on('click', 'input[name="lease_security"]', function() {
                leaseSecurityCheckbox();
            });
            /*Lease security*/

            /*First rent due*/
            $(document).on('click', 'input[name="rent_due"]', function() {
                if ($('#byDueDate').is(':checked')) {
                    $('.first-rent-full-month-radio').find('.by-due-date').removeClass('d-none');
                    $('.first-rent-entire-month-radio').find('.by-due-date').removeClass('d-none');
                    $('.custom-first-rent-radio').find('.by-due-date').removeClass('d-none');
                } else {
                    $('.first-rent-full-month-radio').find('.by-due-date').addClass('d-none');
                    $('.first-rent-entire-month-radio').find('.by-due-date').addClass('d-none');
                    $('.custom-first-rent-radio').find('.by-due-date').addClass('d-none');
                }
            });
            /*First rent due*/

            /*Payment of first rent*/
            $(document).on('click', 'input[name="payment_first_rent"]', function() {
                if ($('#firstRentFullMonth').is(':checked')) {
                    $('.first-rent-full-month-radio').removeClass('d-none');
                    $('.first-rent-entire-month-radio').addClass('d-none');
                    $('.custom-first-rent-radio').addClass('d-none');
                } else if ($('#firstRentEntMonth').is(':checked')) {
                    $('.first-rent-full-month-radio').addClass('d-none');
                    $('.first-rent-entire-month-radio').removeClass('d-none');
                    $('.custom-first-rent-radio').addClass('d-none');
                } else if ($('#customFirstRent').is(':checked')) {
                    $('.first-rent-full-month-radio').addClass('d-none');
                    $('.first-rent-entire-month-radio').addClass('d-none');
                    $('.custom-first-rent-radio').removeClass('d-none');
                }
            });
            /*Payment of first rent*/

            /*choose deposit amount checkbox*/
            $(document).on('click', '#chooseDepositAmount', function() {
                $('.choose-deposit-amount-checkbox').toggleClass('d-none');
            });
            /*choose deposit amount checkbox*/

            /*do not have account checkbox*/
            $(document).on('click', '#notAccountNo', function() {
                $('.do-not-have-account-checkbox').toggleClass('d-none');
            });
            /*do not have account checkbox*/

            /*step icons*/
            $('.step').eq(0).empty().addClass('fa fa-building');
            $('.step').eq(1).empty().addClass('fa fa-calendar-alt');
            $('.step').eq(2).empty().addClass('fa fa-money-bill-alt');
            $('.step').eq(3).empty().addClass('fa fa-user');
            $('.step').eq(4).empty().addClass('fa fa-file-pdf');
            $('.step').eq(5).empty().addClass('fa fa-check');
            /*step icons*/
        });

        /*Other security*/
        function otherSecurityCheckbox() {
            if ($('#depositAccGuarantee').is(':checked')) {
                $('.deposit-account-guarantee-checkbox').removeClass('d-none');
                $('.other-security-custom-checkbox').addClass('d-none');
            } else if ($('#otherSecCustom').is(':checked')) {
                $('.deposit-account-guarantee-checkbox').addClass('d-none');
                $('.other-security-custom-checkbox').removeClass('d-none');
            }
        }
        /*Other security*/

        /*Lease security*/
        function leaseSecurityCheckbox() {
            if ($('#leaseDepositAccount').is(':checked')) {
                $('.other-security-checkbox').addClass('d-none');
                $('.lease-deposit-account-checkbox').removeClass('d-none');
                $('.deposit-account-guarantee-checkbox').addClass('d-none');
            } else if ($('#leaseOtherSecurity').is(':checked')) {
                $('.other-security-checkbox').removeClass('d-none');
                $('.lease-deposit-account-checkbox').addClass('d-none');
                $('.deposit-account-guarantee-checkbox').removeClass('d-none');
            } else if ($('#leaseNoSecurity').is(':checked')) {
                $('.other-security-checkbox').addClass('d-none');
                $('.lease-deposit-account-checkbox').addClass('d-none');
                $('.deposit-account-guarantee-checkbox').addClass('d-none');
            }
        }
        /*Lease security*/

        $(document).on('click', '#newPropSubmit', function(event) {
            var street_name = $('#street_name').val();
            var street_number = $('#street_number').val();
            var zip_code = $('#zip_code').val();
            var city = $('#city').val();
            var commune = $('#commune').val();
            var usage_number = $('#usage_number').val();
            var farm_number = $('#farm_number').val();
            var fixed_number = $('#fixed_number').val();
            var section_number = $('#section_number').val();
            var property_name = $('#property_name').val();
            var property_description = $('#property_description').val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var csrf = $("input[name=_token]").val();
            $.ajax({
                url: '{{ URL::to('/client/store-property') }}',
                type: 'post',
                data: {
                    'street_name': street_name,
                    'street_number': street_number,
                    'zip_code': zip_code,
                    'city': city,
                    'commune': commune,
                    'usage_number': usage_number,
                    'farm_number': farm_number,
                    'fixed_number': fixed_number,
                    'section_number': section_number,
                    'property_name': property_name,
                    'property_description': property_description
                },
                success: function(response) {

                    let option_data = "";
                    option_data += '<option  value=""></option>';
                    response.data.forEach((data, index) => {

                        option_data += '<option  value="' + data.id + '">' + data.street_name +
                            '</option>';
                    })
                    $('#selProp').find('option').remove().end();
                    $("#selProp").append(option_data);

                    $('#createPropModal').modal('hide');

                    toastr.success(response.message.message);
                },
                error: function(request, status, error) {
                    console.log(request, status, error);
                    let errors = request.responseJSON.errors;
                    if (errors['street_name']) {
                        $('#street_name_err').text(errors['street_name'][0]);
                    }
                    if (errors['street_number']) {
                        $('#street_number_err').text(errors['street_number'][0]);
                    }
                    if (errors['zip_code']) {
                        $('#zip_code_err').text(errors['zip_code'][0]);
                    }
                    if (errors['city']) {
                        $('#city_err').text(errors['city'][0]);
                    }
                    if (errors['commune']) {
                        $('#commune_err').text(errors['commune'][0]);
                    }
                }
            });

        });
        $(document).on('click', '#saveAccount', function(event) {

            let account = $('#account').val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var csrf = $("input[name=_token]").val();
            $.ajax({
                url: '{{ URL::to('/client/account-save') }}',
                type: 'post',
                data: {
                    'account': account
                },
                success: function(request) {
                    let option_data = '';
                    // console.log(request.meassage.message,response);
                    request.data.forEach((data, index) => {
                        console.log(data.account)
                        option_data += '<option  value="' + data.id + '">' + data.account +
                            '</option>';
                    })

                    $('#accRent').find('option').remove().end();
                    $('#accDeposit').find('option').remove().end();
                    $("#accRent").append(option_data);
                    $("#accDeposit").append(option_data);
                    $('#addAccountModal').modal('hide');
                    if (request.meassage)
                        toastr.success(request.meassage.message);
                },
                error: function(request, status, error) {
                    console.log(request, status, error);
                    let errors = request.responseJSON.errors;

                    $('#accountErr').text(errors['account'][0]);

                }
            });
        });

        function submitRecord() {
            let rental_object = $('#typeRentObj').val();
            let property_id = $('#selProp').val();
            let property_number = $('#addproperty_number').val();
            let appartment_number = $('#apartNo').val();
            let room_and_other = $('#room_and_other').val();
            let Bid_number = $('#bidNumber').val();
            let size_useable_area = $('#size_useable_area').val();
            let number_of_parking_other = $('#number_of_parking_other').val();
            let number_of_keys_in_parking_space = $('#number_of_keys_in_parking_space').val();
            let number_of_remotes = $('#number_of_remotes').val();
            let number_of_parking = $('#number_of_parking').val();
            let number_of_bathrooms = $('#number_of_bathrooms').val();
            let number_of_bedrooms = $('#number_of_bedrooms').val();
            let number_of_kitchen = $('#number_of_kitchen').val();
            let number_of_stalls = $('#number_of_stalls').val();
            let share_bethroom_people = $('#share_bethroom_people').val();
            let share_kitchen_people = $('#share_kitchen_people').val();
            let share_living_room_common_area_people = $('#share_living_room_common_area_people').val();
            let size_m2_room = $('#size_m2_room').val();
            let story = $('#editstory').val();
            let total_rooms = $('#story').val();
            let internet = $('#internetIncl').val();
            let cable = $('#tvIncluded').val();
            let smoking = $('#smokeIncl').val();
            let pets = $('#petsAllow').val();
            let house_role = $('#house_role').val();
            let furnishing = $('input[name="furnishing"]:checked').val();
            let electricity_heating = $('input[name="electricity_heating"]:checked').val();
            let water_wastewater = $('input[name="water_wastewater"]:checked').val();
            let name = $('#name').val();
            let description = $('#description').val();
            let number = 1;

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var csrf = $("input[name=_token]").val();
            $.ajax({
                url: '{{ URL::to('/client/rental-object-store') }}',
                type: 'post',
                data: {
                    'rental_object': rental_object,
                    'property_id': property_id,
                    'property_number': property_number,
                    'appartment_number': appartment_number,
                    'room_and_other': room_and_other,
                    'Bid_number': Bid_number,
                    'size_useable_area': size_useable_area,
                    'number_of_parking_other': number_of_parking_other,
                    'number_of_keys_in_parking_space': number_of_keys_in_parking_space,
                    'number_of_parking': number_of_parking,
                    'number_of_bathrooms': number_of_bathrooms,
                    'number_of_bedrooms': number_of_bedrooms,
                    'number_of_kitchen': number_of_kitchen,
                    'number_of_stalls': number_of_stalls,
                    'share_bethroom_people': share_bethroom_people,
                    'share_kitchen_people': share_kitchen_people,
                    'share_living_room_common_area_people': share_living_room_common_area_people,
                    'size_m2_room': size_m2_room,
                    'story': story,
                    'total_rooms': total_rooms,
                    'internet': internet,
                    'cable': cable,
                    'smoking': smoking,
                    'pets': pets,
                    'house_role': house_role,
                    'furnishing': furnishing,
                    'electricity_heating': electricity_heating,
                    'water_wastewater': water_wastewater,
                    'name': name,
                    'description': description,
                    'number_of_remotes': number_of_remotes,
                    'number': number
                },
                success: function(response) {

                    let option_data = '';
                    option_data += '<option  value=""></option>';
                    response.data.forEach((data, index) => {
                        option_data += '<option  value="' + data.id + '">' + data.rental_object +
                            '</option>';
                    })
                    $('#selRentObj').find('option').remove().end();
                    $("#selRentObj").append(option_data);
                    $('#createRentObjModal').modal('hide');
                    toastr.success(response.message.message);

                },
                error: function(request, status, error) {

                    // console.log(request,status,error);
                    // let errors = request.responseJSON.errors;
                    // // $("a[href='#previous']").click();
                    // $('#rePerMonthErr').text(errors['rent_per_month'][0]);
                    // $('#accRentErr').text(errors['account_id'][0]);
                }
            });
        }
    </script>
@endsection
