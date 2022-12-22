<!DOCTYPE html>
<html>

<head>
    <title>Leie Admin Agreement File </title>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css">

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css"
        rel="stylesheet">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="http://keith-wood.name/js/jquery.signature.js"></script>

    <link rel="stylesheet" type="text/css" href="http://keith-wood.name/css/jquery.signature.css">

    <style>
        .kbw-signature {
            width: 100%;
            height: 200px;
        }

        #sig canvas {
            width: 100% !important;
            height: auto;
        }
    </style>
</head>

<body>
    <section class="m-4">
        <div class="d-flex flex-column">
            <div>
                <button class="float-right border-0" onclick="window.print()"><img
                        src="{{ asset('public/front_end/images/print-button.png') }}" height="40px"></button>
            </div>
            <div>
                <h5 class="text-center">Your lease with <span>User</span></h5>
                <p class="text-center mb-xl-5 mb-4">Please review the information in the rental agreement below and
                    fill in the missing information. It can then be signed electronically and downloaded as a PDF.
                </p>
                <h6>Landlord</h6>
            </div>
        </div>

        <div class="form-row">
            <div class="row">
                <div class="form-group col-lg-6">
                    <label>First Name</label>
                    <input type="text" id="firstNameReadOnly" value="{{ $data->user->name }}" class="form-control"
                        readonly />
                </div>
                <div class="form-group col-lg-6">
                    <label>Last Name</label>
                    <input id="lastNameReadOnly" value="{{ $data->user->name }}" type="text" class="form-control"
                        readonly />
                </div>
            </div>
            <div class="form-group col-lg-6">
                <label>Email</label>
                <input id="emailReadOnly" type="text" value="{{ $data->user->email }}" class="form-control"
                    readonly />
            </div>
            <div class="form-group col-lg-6">
                <label>Telephone</label>
                <input type="text" id="telephoneReadOnly" value="{{ $data->user->phone }}" class="form-control"
                    readonly />
            </div>
            <div class="form-group col-lg-6">
                <label>Street Name</label>
                <input id="streetNameReadOnly" value="{{ $data->property->street_name }}" type="text"
                    class="form-control" readonly />
            </div>
            <div class="form-group col-lg-6">
                <label>Zip Code</label>
                <input type="text" value="{{ $data->property->zip_code }}" id="zipCodeReadOnly" class="form-control"
                    readonly />
            </div>
        </div>

        <h5>LandLord Signature: </h5>
        @if (isset($data->landlord_signature))
            <img src="{{ asset('public/signature/' . $data->landlord_signature) }}" height="100px">
        @else
            @if ($title == 'landlord')
                <div class="card-body">
                    <form method="POST" action="{{ route('signature.save', ['id' => $data->id]) }}">
                        @csrf
                        <div class="col-md-12">
                            <h5>LandLord Signature: </h5>
                            <br />
                            <div id="sig"></div>
                            <br />
                            <textarea id="signature64" name="signed" style="display: none"></textarea>
                        </div>
                        <button id="clear" class="btn btn-danger btn-sm">Clear</button>
                        <button class="btn btn-success btn-sm">Save</button>
                    </form>
                </div>
            @endif
        @endif
        <h6>Tenant (you)</h6>
        <div class="form-row">
            <div class="form-group col-lg-6">
                <label>First Name</label>
                <input type="text" value="{{ $data->tenant->first_name }}" class="form-control"
                    placeholder="First Name" readonly />
            </div>
            <div class="form-group col-lg-6">
                <label>Last Name</label>
                <input type="text" value="{{ $data->tenant->surname }}" class="form-control" placeholder="Last Name"
                    readonly />
            </div>
            <div class="form-group col-lg-6">
                <label>Email</label>
                <input type="text" value="{{ $data->tenant->email }}" class="form-control" readonly />
            </div>
            <div class="form-group col-lg-6">
                <label>Mobile Number</label>
                <input type="text" value="{{ $data->tenant->phone }}" class="form-control" readonly />
            </div>
            <div class="form-group col-lg-6">
                <label>Street name </label>
                <input type="text" value="{{ $data->property->street_name }}" class="form-control" readonly />
            </div>
            <div class="form-group col-lg-6">
                <label>Street number </label>
                <input type="text" value="{{ $data->property->street_number }}" class="form-control" readonly />
            </div>
        </div>
        @if ($title == 'view')
            <h5>Tenant Signature: </h5>
            @if (isset($data->tenant_signature))
                <img src="{{ asset('public/signature/' . $data->tenant_signature) }}" height="100px">
            @endif
        @else
            @if (isset($data->tenant_signature))
                <div class="d-flex">
                    <h5>Tenant Signature: </h5>
                    <img src="{{ asset('public/signature/' . $data->tenant_signature) }}" height="100px">
                </div>
            @else
                <div class="card-body">
                    <form method="POST" action="{{ route('signature.save', ['id' => $data->id]) }}">
                        @csrf
                        <div class="col-md-12">
                            <h5>Tenant Signature: </h5>
                            <br />
                            <div id="sig"></div>
                            <br />
                            <textarea id="signature64" name="signed" style="display: none"></textarea>
                        </div>
                        <button id="clear" class="btn btn-danger btn-sm">Clear</button>
                        <button class="btn btn-success btn-sm">Save</button>
                    </form>
                </div>
            @endif
        @endif
        <h6>Rental object</h6>
        <div class="form-row">
            <div class="form-group col-lg-6">
                <label>Street Name</label>
                <input type="text" value="{{ $data->rentalObject->property->street_name }}" class="form-control"
                    readonly />
            </div>
            <div class="form-group col-lg-6">
                <label>ZIP Code</label>
                <input type="text" value="{{ $data->rentalObject->property->zip_code }}" class="form-control"
                    readonly />
            </div>
            <div class="form-group col-lg-6">
                <label>Property Number</label>
                <input type="text" value="{{ $data->rentalObject->property->farm_number }}" class="form-control"
                    readonly />
            </div>
            <div class="form-group col-lg-6">
                <label>Type of rental object</label>
                <input type="text" value="{{ $data->rentalObject->rental_object }}" class="form-control"
                    readonly />
            </div>
        </div>
        <h6>Rental period and rent</h6>
        <div class="form-row">
            <div class="form-group col-lg-6">
                <label>Type of lease</label>
                <input type="text" value="{{ $data->rentalObject->rental_object }}" class="form-control"
                    readonly />
            </div>
            <div class="form-group col-lg-6">
                <label>Termination period</label>
                <input type="text" value="{{ $data->termination_peroid }}Years" class="form-control" readonly />
            </div>
            <div class="form-group col-lg-6">
                <label>Binding time</label>
                <input type="text" value="{{ $data->binding_peroid }}" class="form-control" readonly />
            </div>
            <div class="form-group col-lg-6">
                <label>Start date</label>
                <input type="text" value="{{ $data->start_date_of_agreement }}" class="form-control" readonly />
            </div>

            <div class="form-group col-lg-6">
                <label>End date</label>
                <input type="text" value="{{ $data->end_date_of_agreement }}" class="form-control" readonly />
            </div>
            <div class="form-group col-lg-6">
                <label>Rent amount</label>
                <input type="text" value="{{ $data->rent_per_month }}" class="form-control" readonly />
            </div>
            <div class="form-group col-lg-6">
                <label>Deposit amount</label>
                <input type="text" value="{{ $data->payment_for_first_rent }}" class="form-control" readonly />
            </div>
            <div class="form-group col-lg-6">
                <label>Due date for rent</label>
                <input type="text" value="{{ $data->due_date }}" class="form-control" readonly />
            </div>
        </div>
    </section>
    <script type="text/javascript">
        var sig = $('#sig').signature({
            syncField: '#signature64',
            syncFormat: 'PNG'
        });
        $('#clear').click(function(e) {
            e.preventDefault();
            sig.signature('clear');
            $("#signature64").val('');
        });
    </script>
</body>

</html>
