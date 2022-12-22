<div class="form-group">
    <h5 class="mb-0">Address</h5>
    <small class="text-muted">Required fields are marked with <span
            class="required">*</span></small>
</div>
<div class="form-group">
    <label for="selStreetName">Street name <span class="required">*</span> <sup
            class="fa fa-question label-fa-question" data-toggle="tooltip" data-placement="top"
            title="Start entering the street name in which the property is located and select the correct street name from the list."></sup></label>
    {{--<select class="form-control single-select-dropdown" id="selStreetName">
        <option value=""></option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
    </select>--}}
    <input type="text" name="street_name" id="street_name" placeholder="Street Name"
           class="form-control @if($errors->has('street_name')) is-invalid @endif"/>
    <span id="street_name_err" class="text-danger"></span>
    @error('street_name') <span
        class="text-danger">{{$errors->first('street_name')}}</span> @enderror
</div>
<div class="form-group">
    <label for="selStreetNo">Street Number <span class="required">*</span> <sup
            class="fa fa-question label-fa-question" data-toggle="tooltip" data-placement="top"
            title="Select the street number that the property is located in. If you do not find the right street number, then double check that the street name above is correct."></sup></label>
    {{--<select class="form-control single-select-dropdown" id="selStreetNo" disabled>
        <option value=""></option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
    </select>--}}
    <input type="text" name="street_number" id="street_number" placeholder="Street Number"
           class="form-control @if($errors->has('street_number')) is-invalid @endif"/>
    <span id="street_number_err" class="text-danger"></span>
    @error('street_number') <span
        class="text-danger">{{$errors->first('street_number')}}</span> @enderror
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        <label>Zip Code <span class="required">*</span></label>
        <input name="zip_code" id="zip_code" type="number" placeholder="Zip Code"
               class="form-control @if($errors->has('zip_code')) is-invalid @endif"/>
        <span id="zip_code_err" class="text-danger"></span>
        @error('zip_code') <span
            class="text-danger">{{$errors->first('zip_code')}}</span> @enderror
    </div>
    <div class="form-group col-md-4">
        <label>City <span class="required">*</span></label>
        <input name="city" id="city" type="text" placeholder="City"
               class="form-control @if($errors->has('city')) is-invalid @endif"/>
        <span id="city_err" class="text-danger"></span>
        @error('city') <span
            class="text-danger">{{$errors->first('city')}}</span> @enderror
    </div>
    <div class="form-group col-md-4">
        <label>Commune <span class="required">*</span></label>
        <input name="commune" id="commune" type="number" placeholder="Commune"
               class="form-control @if($errors->has('commune')) is-invalid @endif"/>
        <span id="commune_err" class="text-danger"></span>
        @error('commune') <span
            class="text-danger">{{$errors->first('commune')}}</span> @enderror
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-3">
        <label>Usage Number</label>
        <input name="usage_number" id="usage_number" type="number" placeholder="Usage Number" class="form-control"/>
    </div>
    <div class="form-group col-md-3">
        <label>Farm Number</label>
        <input name="farm_number" id="farm_number" type="number" placeholder="Farm Number" class="form-control"/>
    </div>
    <div class="form-group col-md-3">
        <label>Fixed Number</label>
        <input name="fixed_number" id="fixed_number" type="number" placeholder="Fixed Number" class="form-control"/>
    </div>
    <div class="form-group col-md-3">
        <label>Section Number</label>
        <input name="section_number" id="section_number" type="number" placeholder="Section Number" class="form-control"/>
    </div>
</div>
<div class="mt-md-4">
    <a class="d-flex align-items-center justify-content-between font-weight-bold text-decoration-none more-info-btn">Optional:
        Description of the property<span class="fa fa-angle-down ml-2"></span></a>
    <div class="hidden-info">
        <p>To make it easier to keep track of your properties, you have the opportunity to create an
            optional name and an optional description of the property. This will only be visible to you.</p>
        <div class="form-row">
            <div class="form-group col-lg-6">
                <label>Optional: Name of the property</label>
                <input name="property_name" id="property_name" type="name" placeholder="The property in the center of Bergen"
                       class="form-control"/>
            </div>
            <div class="form-group col-12">
                <label>Optional: Description of the property</label>
                <textarea name="property_description" id="property_description" type="name"
                          placeholder="The property in the center of Bergen with 3 rental units, of which 2 apartments and 1 dormitory."
                          class="form-control"></textarea>
            </div>
        </div>
    </div>
</div>
