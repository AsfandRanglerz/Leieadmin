@extends('frontend.frontend_panel.user_panel')
@section('content')
    <h4>Info about rental property</h4>
    <p><span class="fa fa-home"></span> - <a href="#" class="text-decoration-none font-weight-bold">Your properties</a>
        - <a href="#" class="text-decoration-none font-weight-bold">{{$data->street_name}}</a> - <span class="text-muted"> Rental Name</span>
    </p>
    <div class="row mb-lg-4 mb-3">
        <div class="col-lg-7 mb-lg-0 mb-4">
            <div class="rounded p-lg-4 p-3 light-box-shadow">
                <h6 class="mb-4">Property</h6>
                <form action="{{url('client/property-update')}}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{$data->id}}">
                    <div class="form-group">
                        <label>Name</label>
                        <input class="form-control" name="name" value="{{$data->property_name}}" placeholder="Name"/>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" name="description" placeholder="Description of the property" >{{$data->property_description}}</textarea>
                    </div>
                    <div align="right">
                        <button role="submit" class="btn btn-bg">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-lg-5">
            <iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d27227.56817891118!2d74.3077077!3d31.456914649999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1635161989372!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-7 mb-lg-0 mb-4">
            <div class="rounded p-lg-4 p-3 light-box-shadow">
            <h6 class="mb-4">Rental properties</h6>
            <div class="table-responsive">
                <table class="table table-bordered table-striped mb-4">
                    <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Type</th>
                        <th scope="col">Standard Rent</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($data->rental_object as $rentalObject)
                    <tr>
                        <td>{{$rentalObject->name}}</td>
                        <td>{{$rentalObject->rental_object}}</td>
                        <td>kr 0.00</td>
                    </tr>
                    @empty
                    @endforelse
                    </tbody>
                </table>
            </div>
            <div align="right">
                <a href="{{url('client/properties/create-rental-object')}}" class="btn btn-bg-white"><span
                        class="fa fa-building mr-2"></span>Create new rental object</a>
            </div>
        </div>
        </div>
        <div class="col-lg-5">
            <div class="rounded  p-lg-4 p-3 light-box-shadow">
                <h6 class="mb-4">Address information</h6>
                <div class="row">
                    <div class="col-md-6">
                        <h6>Street name</h6>
                        <p>{{$data->street_name}}</p>
                    </div>
                    <div class="col-md-6">
                        <h6>House number</h6>
                        <p>1</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h6>Letter</h6>
                        <p>D</p>
                    </div>
                    <div class="col-md-6">
                        <h6>Use no</h6>
                        <p>54</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h6>Farm no</h6>
                        <p>{{$data->farm_number}}</p>
                    </div>
                    <div class="col-md-6">
                        <h6>Fixed no</h6>
                        <p>{{$data->fixed_number}}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h6>Section</h6>
                        <p>{{$data->section_number}}</p>
                    </div>
                    <div class="col-md-6">
                        <h6>ZIP code</h6>
                        <p>{{$data->zip_code}}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h6>City</h6>
                        <p>{{$data->city}}</p>
                    </div>
                    <div class="col-md-6">
                        <h6>commune</h6>
                        <p>{{$data->commune}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
