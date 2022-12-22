@extends('frontend.frontend_panel.user_panel')
@section('content')
    <h4>Add new lease</h4>
    <p><span class="fa fa-home"></span> - <a href="#" class="text-decoration-none font-weight-bold">Your leases
        </a> - <span class="text-muted"> Create lease</span></p>
    <div class="col-xl-4 col-sm-6 mx-auto py-md-4 py-3 rounded light-box-shadow">

        <div class="leases-container">
            <form id="leasesForm" action="#">
                <h4>Simple lease</h4>
                <h6 class="mb-3 green-text">For free</h6>
                <p>Free, safe and easy lease for you who only want one lease. Follow a smooth, step-by-step process for
                    creating a lease, sign with BankID, and download the signed lease in PDF. Only one free lease with
                    BankID per landlord.</p>
                <div class="navbar p-0">
                    <div class="dropdown mx-auto w-100">
                        <a class="btn btn-lg dropdown-toggle w-100 btn-bg" role="button" id="createEasyLeases" data-toggle="dropdown">
                            Create easy lease now
                        </a>

                        <div class="dropdown-menu animated-dropdown slideIn w-100 border-0 light-box-shadow">
                            <a class="dropdown-item" href="{{url('client/leases/create-lease')}}">I want to create a new lease</a>
                            <hr class="my-1">
                            <a class="dropdown-item" href="{{url('client/leases/all-leases')}}">I already have a lease</a>
                        </div>
                    </div>
                </div>


                <ul class="my-3 list-style-none">
                    <li class="d-flex align-items-baseline">
                        <span
                            class="fa fa-check-circle mr-2"></span><span>Creation of digital lease with BankID signing</span>
                    </li>
                    <li class="d-flex align-items-baseline">
                        <span class="fa fa-check-circle mr-2"></span><span>Signed PDF copy of the lease is sent to both landlord and tenant</span>
                    </li>
                    <li class="d-flex align-items-baseline">
                        <span class="fa fa-check-circle mr-2"></span><span>Free access to Presis Utleie's tailor-made system for landlords for 2 months. This includes automatic invoicing of the rent, reminders, module for termination of tenancy, moving-in protocol, and much more</span>
                    </li>
                </ul>

                <div class="text-right">
                    <a class="font-weight-bold text-decoration-none" href="{{url('client/digital-lease')}}">Digital
                        Lease</a>
                </div>

            </form>
        </div>

    </div>
@endsection
