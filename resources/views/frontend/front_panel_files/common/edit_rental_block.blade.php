<h6>Rental object</h6>

<div class="form-group">
    <label for="typeRentObj">Type of rental object <sup
            class="fa fa-question label-fa-question" data-toggle="tooltip" data-placement="top"
            title="Select the type of rental object. The fields below are different depending on the type of rental object."></sup></label>
    <select name="rental_object" class="form-control single-select-dropdown" id="editTypeRentObj">
        <option ></option>
       @if(isset($data->rental_object))
        <option value="{{$data->rental_object}}">{{$data->rental_object}}</option>
       @endif
    </select>
    @error('rental_object') <span
        class="text-danger">{{$errors->first('rental_object')}}</span> @enderror
</div>

<input type="hidden" value="{{isset($data->id)?$data->id:''}}" id="editId">
<div class="form-row">
    <div
        class="form-group col-md-6 d-none hidden-fields semi-detach-fields detach-house-fields town-house-fields">
        <label for="propNo">Property number <sup
                class="fa fa-question label-fa-question" data-toggle="tooltip" data-placement="top"
                title="Select the correct property number from the list. If you do not find the correct property number, please fill it in manually or skip this step. Examples of housing numbers are: H0101, U0101, H0811 etc."></sup></label>
        <select name="property_number" class="form-control single-select-dropdown" id="editpropNo">
            <option value=""></option>
            @if(!$property_data->isEmpty())
            @forelse($property_data as $data1)
                <option value="{{$data1->id}}">{{$data1->street_name}}</option>
            @empty
            @endforelse
            @endif
        </select>
    </div>
    @if(isset($data))
    <div class="form-group col-md-6 d-none hidden-fields apartment-fields dorm-fields">
        <label for="apartNo">Apartment number <sup

                class="fa fa-question label-fa-question" data-toggle="tooltip" data-placement="top"
                title="Select the correct property number from the list. If you do not find the correct property number, please fill it in manually or skip this step. Examples of housing numbers are: H0101, U0101, H0811 etc."></sup></label>
        <select name="apartment_number" class="form-control single-select-dropdown" id="editapartNo">
            <option value=""></option>
            <option @if($data->appartment_number=="H0101") selected="selected"  @endif value="H0101">H0101</option>
        </select>
    </div>
    <div class="form-group col-md-12 d-none hidden-fields bearing-bid-fields">
        <label>Bearing/bid number</label>
        <input type="text" value="{{$data->Bearing_bid_number}}" id="editBid_number" placeholder="Ex: Storage space in the basement" class="form-control"/>
    </div>
    <div class="form-group col-md-6 d-none hidden-fields rooms-in-flats-fields">
        <label>Room number or other</label>
        <input name="room_and_other" value="{{$data->room_and_other}}" id="editroom_and_other" type="text" placeholder="Ex: The bedroom in the basement" class="form-control"/>
    </div>
    <div
        class="form-group col-md-6 d-none hidden-fields apartment-fields dorm-fields semi-detach-fields detach-house-fields town-house-fields rooms-in-flats-fields">
        <label>Size usable area (m2)</label>
        <div class="input-group">
            <input name="size_useable_area" value="{{$data->size_useable_area}}" id="editsize_useable_area" type="number" placeholder="Ex: 50" class="form-control"/>
            <div class="input-group-append">
                <small class="input-group-text">m2</small>
            </div>
        </div>
    </div>
</div>

<div class="form-group d-none hidden-fields parking-garage-fields">
    <label>Parking number or other</label>
    <input name="number_of_parking_other" value="{{$data->number_of_parking_other}}" id="editnumber_of_parking_other" type="text" placeholder="Ex: Garage space 103" class="form-control"/>
</div>

<div class="form-row">
    <div class="form-group col-md-4 d-none hidden-fields parking-garage-fields">
        <div class="h-100 d-flex flex-column justify-content-between">
            <h6>Number of keys included in the parking space (s)</h6>
            <div class="d-flex number">
                <span class="fa fa-minus minus"></span>
                <input name="number_of_keys_in_parking_space" value="{{$data->number_of_keys_in_parking_space}}" id="editnumber_of_keys_in_parking_space" type="number" value="0" class="form-control text-center"/>
                <span class=" fa fa-plus plus"></span>
            </div>
        </div>
    </div>
    <div class="form-group col-md-4 d-none hidden-fields parking-garage-fields">
        <div class="h-100 d-flex flex-column justify-content-between">
            <h6>Number of remote controls included with parking space (s)</h6>
            <div class="d-flex number">
                <span class="fa fa-minus minus"></span>
                <input name="number_of_remotes" value="{{$data->number_of_remotes}}" id="number_of_remotes" type="number"  class="form-control text-center"/>
                <span class=" fa fa-plus plus"></span>
            </div>
        </div>
    </div>
    <div class="form-group col-md-4 d-none hidden-fields parking-garage-fields">
        <div class="h-100 d-flex flex-column justify-content-between">
            <h6>Number of parking spaces</h6>
            <div class="d-flex number">
                <span class="fa fa-minus minus"></span>
                <input name="number_of_parking" value="{{$data->number_of_parking}}" id="editnumber_of_parking" type="number"  class="form-control text-center"/>
                <span class=" fa fa-plus plus"></span>
            </div>
        </div>
    </div>
</div>

<div class="form-row">
    <div
        class="form-group col-md-4 d-none hidden-fields apartment-fields dorm-fields semi-detach-fields detach-house-fields town-house-fields">
        <div class="h-100 d-flex flex-column justify-content-between">
            <h6>Number of bathrooms</h6>
            <div class="d-flex number">
                <span class="fa fa-minus minus"></span>
                <input name="number_of_bathrooms" value="{{$data->number_of_bathrooms}}" id="editnumber_of_bathrooms" type="number"  class="form-control text-center"/>
                <span class=" fa fa-plus plus"></span>
            </div>
        </div>
    </div>
    <div
        class="form-group col-md-4 d-none hidden-fields apartment-fields dorm-fields semi-detach-fields detach-house-fields town-house-fields">
        <div class="h-100 d-flex flex-column justify-content-between">
            <h6>Number of bedrooms</h6>
            <div class="d-flex number">
                <span class="fa fa-minus minus"></span>

                <input name="number_of_bedrooms"   id="editnumber_of_bedrooms" type="number" VALUE="{{$data->number_of_bedrooms}}" class="form-control text-center"/>
                <span class=" fa fa-plus plus"></span>
            </div>
        </div>
    </div>
    <div
        class="form-group col-md-4 d-none hidden-fields apartment-fields dorm-fields semi-detach-fields detach-house-fields town-house-fields">
        <div class="h-100 d-flex flex-column justify-content-between">
            <h6>Number of kitchens</h6>
            <div class="d-flex number">
                <span class="fa fa-minus minus"></span>
                <input name="number_of_kitchen" id="editnumber_of_kitchen" type="number" value="{{$data->number_of_kitchen}}" class="form-control text-center"/>
                <span class=" fa fa-plus plus"></span>
            </div>
        </div>
    </div>
</div>
<div class="form-row">
    <div
        class="form-group col-md-4 d-none hidden-fields apartment-fields dorm-fields semi-detach-fields detach-house-fields town-house-fields">
        <div class="h-100 d-flex flex-column justify-content-between">
            <h6>Number of stalls</h6>
            <div class="d-flex number">
                <span class="fa fa-minus minus"></span>
                <input name="number_of_stalls" id="editnumber_of_stalls" type="number" value="{{$data->number_of_stalls}}" class="form-control text-center"/>
                <span class=" fa fa-plus plus"></span>
            </div>
        </div>
    </div>
    <div class="form-group col-md-4 d-none hidden-fields rooms-in-flats-fields">
        <div class="h-100 d-flex flex-column justify-content-between">
            <h6>How many people share a bathroom?</h6>
            <div class="d-flex number">
                <span class="fa fa-minus minus"></span>
                <input name="share_bethroom_people" id="editshare_bethroom_people" type="number" value="{{$data->share_bethroom_people}}" class="form-control text-center"/>
                <span class=" fa fa-plus plus"></span>
            </div>
        </div>
    </div>
    <div class="form-group col-md-4 d-none hidden-fields rooms-in-flats-fields">
        <div class="h-100 d-flex flex-column justify-content-between">
            <h6>How many people share a kitchen?</h6>
            <div class="d-flex number">
                <span class="fa fa-minus minus"></span>
                <input name="share_kitchen_people" id="editshare_kitchen_people" type="number" value="{{$data->share_kitchen_people}}" class="form-control text-center"/>
                <span class=" fa fa-plus plus"></span>
            </div>
        </div>
    </div>
    <div class="form-group col-md-4 d-none hidden-fields rooms-in-flats-fields">
        <div class="h-100 d-flex flex-column justify-content-between">
            <h6>How many people share a living room / common area?</h6>
            <div class="d-flex number">
                <span class="fa fa-minus minus"></span>
                <input name="share_living_room_common_area_people" id="editshare_living_room_common_area_people" type="number" value="{{$data->share_living_room_common_area_people}}" class="form-control text-center"/>
                <span class=" fa fa-plus plus"></span>
            </div>
        </div>
    </div>
    <div class="form-group col-md-4 d-none hidden-fields rooms-in-flats-fields">
        <div class="h-100 d-flex flex-column justify-content-between">
            <h6>Size (m2) of room</h6>
            <div class="d-flex number">
                <span class="fa fa-minus minus"></span>
                <input name="size_m2_room" id="editsize_m2_room" type="number" value="{{$data->size_m2_room}}" class="form-control text-center"/>
                <span class=" fa fa-plus plus"></span>
            </div>
        </div>
    </div>
    <div
        class="form-group col-md-4 d-none hidden-fields apartment-fields dorm-fields semi-detach-fields town-house-fields rooms-in-flats-fields">
        <div class="h-100 d-flex flex-column justify-content-between">
            <h6>Story</h6>
            <div class="d-flex number">
                <span class="fa fa-minus minus"></span>
                <input name="story" id="editstory" type="number" value="{{$data->story}}" class="form-control text-center"/>
                <span class=" fa fa-plus plus"></span>
            </div>
        </div>
    </div>
</div>
<div class="form-row">
    <div
        class="form-group col-md-4 d-none hidden-fields apartment-fields dorm-fields semi-detach-fields detach-house-fields town-house-fields">
        <div class="h-100 d-flex flex-column justify-content-between">
            <h6>Number of bedrooms and living rooms in total</h6>
            <div class="d-flex number">
                <span class="fa fa-minus minus"></span>
                <input name="total_rooms" id="edittotal_rooms"  type="number" value="{{$data->total_rooms}}" class="form-control text-center"/>
                <span class=" fa fa-plus plus"></span>
            </div>
        </div>
    </div>
</div>

<div class="form-row">
    <div
        class="form-group col-lg-3 col-md-4 d-none hidden-fields apartment-fields dorm-fields semi-detach-fields detach-house-fields town-house-fields rooms-in-flats-fields">
        <div class="custom-control p-0">
            <h6>Is the internet included?</h6>
        </div>
        <div class="custom-control custom-switch">
            <input name="editinternet" @if ($data->internet=='on') checked @endif value="" type="checkbox" class="custom-control-input" id="editinternetIncl">
            <label class="custom-control-label" for="editinternetIncl"></label>
        </div>
    </div>
    <div
        class="form-group col-lg-3 col-md-4 d-none hidden-fields apartment-fields dorm-fields semi-detach-fields detach-house-fields town-house-fields rooms-in-flats-fields">
        <div class="custom-control p-0">
            <h6>Is Cable TV included?</h6>
        </div>
        <div class="custom-control custom-switch">
            <input name="cable" @if ($data->cable=='on') checked @endif value="" type="checkbox" class="custom-control-input" id="edittvIncluded">
            <label class="custom-control-label" for="edittvIncluded"></label>
        </div>
    </div>
    <div
        class="form-group col-lg-3 col-md-4 d-none hidden-fields apartment-fields dorm-fields semi-detach-fields detach-house-fields town-house-fields rooms-in-flats-fields">
        <div class="custom-control p-0">
            <h6>Is smoking allowed?</h6>
        </div>
        <div class="custom-control custom-switch">
            <input name="smoking" @if ($data->smoking=='on') checked @endif  value="" type="checkbox" class="custom-control-input" id="editsmokeIncl">
            <label class="custom-control-label" for="editsmokeIncl"></label>
        </div>
    </div>
    <div
        class="form-group col-lg-3 col-md-4 d-none hidden-fields apartment-fields dorm-fields semi-detach-fields detach-house-fields town-house-fields rooms-in-flats-fields">
        <div class="custom-control p-0">
            <h6>Are pets allowed?</h6>
        </div>
        <div class="custom-control custom-switch">
            <input name="pets" @if ($data->pets=='on') checked @endif value="" type="checkbox" class="custom-control-input" id="editpetsAllow">
            <label class="custom-control-label" for="editpetsAllow"></label>
        </div>
    </div>
</div>

<div class="form-group d-none common-fields">
    <label>House Rules</label>
    <textarea name="house_role" id="edithouse_role" placeholder="House Rules" class="form-control">{{$data->house_role}}</textarea>
    <small>If there are special house rules for this object, these can be specified here</small>
</div>

<div
    class="form-group d-none hidden-fields apartment-fields dorm-fields semi-detach-fields detach-house-fields town-house-fields rooms-in-flats-fields">
    <h6>Furnishing</h6>
    <div class="w-100 btn-group btn-group-toggle" data-toggle="buttons">
        <label class="py-3 btn active">
            <input type="radio" @if($data->furnishing=="furnishing") checked @endif value="furnishing" name="editfurnishing" id="editnoFurnish" autocomplete="off" >
            <span class="d-block text-center text">Not furnished</span>
            <span class="text-center fas fa-check check-mark"></span>
        </label>
        <label class="py-3 btn">
            <input type="radio" @if($data->furnishing=="Partly furnished") checked @endif value="Partly furnished" name="editfurnishing" id="editpartFurnish" autocomplete="off">
            <span class="d-block text-center text">Partly furnished</span>
            <span class="text-center fas fa-check check-mark"></span>
        </label>
        <label class="py-3 btn">
            <input type="radio" @if($data->furnishing=="Furnished") checked @endif value="Furnished" name="editfurnishing" id="edityesFurnish" autocomplete="off">
            <span class="d-block text-center text">Furnished</span>
            <span class="text-center fas fa-check check-mark"></span>
        </label>
    </div>
</div>

<div
    class="form-group d-none hidden-fields apartment-fields dorm-fields semi-detach-fields detach-house-fields town-house-fields rooms-in-flats-fields">
    <h6>Electricity and heating</h6>
    <div class="w-100 btn-group btn-group-toggle" data-toggle="buttons">
        <label class="py-3 btn active">
            <input type="radio" @if($data->electricity_heating=="Including") checked @endif value="Including"  name="editelectricity_heating" id="electIncl" autocomplete="off"
                   >
            <span class="d-block text-center text">Including</span>
            <span class="text-center fas fa-check check-mark"></span>
        </label>
        <label class="py-3 btn">
            <input  type="radio" @if($data->electricity_heating=="Not included") checked @endif value="Not included" name="editelectricity_heating" id="electNotIncl" autocomplete="off">
            <span class="d-block text-center text">Not included</span>
            <span class="text-center fas fa-check check-mark"></span>
        </label>
        <label class="py-3 btn">
            <input type="radio" @if($data->electricity_heating=="Paid in addition") checked @endif value="Paid in addition" name="editelectricity_heating" id="electPaidIncl" autocomplete="off">
            <span class="d-block text-center text">Paid in addition</span>
            <span class="text-center fas fa-check check-mark"></span>
        </label>
    </div>
</div>

<div
    class="form-group d-none hidden-fields apartment-fields dorm-fields semi-detach-fields detach-house-fields town-house-fields rooms-in-flats-fields">
    <h6>Water and wastewater</h6>
    <div class="w-100 btn-group btn-group-toggle" data-toggle="buttons">
        <label class="py-3 btn active">
            <input type="radio" @if($data->water_wastewater=="Including") checked @endif value="Including" name="editwater_wastewater" id="waterIncl" autocomplete="off" >
            <span class="d-block text-center text">Including</span>
            <span class="text-center fas fa-check check-mark"></span>
        </label>
        <label class="py-3 btn">
            <input type="radio" @if($data->water_wastewater=="Not included") checked @endif value="Not included" name="editwater_wastewater" id="waterNotIncl" autocomplete="off">
            <span class="d-block text-center text">Not included</span>
            <span class="text-center fas fa-check check-mark"></span>
        </label>
        <label class="py-3 btn">
            <input type="radio" @if($data->water_wastewater=="Paid in addition") checked @endif value="Paid in addition" name="editwater_wastewater" id="waterPaidIncl" autocomplete="off">
            <span class="d-block text-center text">Paid in addition</span>
            <span class="text-center fas fa-check check-mark"></span>
        </label>
    </div>
</div>

<div
    class="form-group d-none hidden-fields apartment-fields dorm-fields semi-detach-fields detach-house-fields town-house-fields">
    <label>Name of rental object <sup class="fa fa-question label-fa-question" data-toggle="tooltip"
                                      data-placement="top"
                                      title="Here you can define a name for the rental object to more easily identify this in the system"></sup></label>
    <input name="name" value="{{$data->name}}"  id="editname" type="text" placeholder="Ex: The basement apartment" class="form-control"/>
</div>
<div
    class="form-group d-none hidden-fields apartment-fields dorm-fields semi-detach-fields detach-house-fields town-house-fields rooms-in-flats-fields">
    <label>Description of the rental object</label>
    <textarea name="description" id="editdescription" placeholder="Description" class="form-control">{{$data->description}}</textarea>
    <small>Here you can create a description of your rental property. This is automatically
        retrieved if you want to create an ad</small>
</div>
<div class="text-md-right text-center">
    <button onclick="editRecord()" type="submit" class="btn btn-bg">Edit this rental property</button>
</div>
@endif

