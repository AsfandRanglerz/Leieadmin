<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    @include('frontend.includes.css')
</head>
<!--paste this code under the head tag-->
<div id="loader">
    <span id="loaderGif"></span>
</div>
<!--paste this code under the head tag-->
<body>
@include('frontend.front_panel_files.common.side_bar')
<div id="dashboardSidebarRightContent" class="position-relative">
    <nav class="row mx-0 position-sticky top-0 d-flex align-items-center admin-panel-header">
        <div id="sideNavOverlay" class="position-fixed d-none"></div>
        <div class="col-6">
            <button class="btn p-0" id="menuToggle"><span class="fa fa-bars text-white"></span></button>
        </div>
        <div class="col-6">
{{--            @if(\Illuminate\Support\Facades\Auth::user()->image)--}}
                <div class="navbar p-0">
                    <div class="dropdown ml-auto">
                        <a class="p-0 btn dropdown-toggle" role="button" id="profContentBtn" data-toggle="dropdown">
                            <img src="{{asset('public/images/'.\Illuminate\Support\Facades\Auth::user()->image)}}"
                                 class="profile-user-pic"/>
                        </a>
                        @if(\Illuminate\Support\Facades\Auth::user()->user_type=='private_landlord')
                        <div class="dropdown-menu dropdown-menu-right animated-dropdown slideIn w-100 border-0 dark-box-shadow">
                            <b class="text-muted text-uppercase d-block mb-2 user-name-text">User Menu</b>
                            <a class="dropdown-item" href="{{url('client/administration')}}"><span class="fa fa-user-alt mr-2"></span>My Profile</a>
                            <hr class="my-1">
                            <a class="dropdown-item" href="{{url('client/administration')}}"><span class="fa fa-cogs mr-2"></span>Settings</a>
                            <hr class="my-1">

                                <a class="dropdown-item" href="{{url('client/logout')}}"><span class="fa fa-sign-out-alt mr-2"></span>Logout</a>
                            @else
                                <div class="dropdown-menu dropdown-menu-right animated-dropdown slideIn w-100 border-0 dark-box-shadow">
                                    <b class="text-muted text-uppercase d-block mb-2 user-name-text">User Menu</b>
                                    <a class="dropdown-item" href="{{url('tenant/administration')}}"><span class="fa fa-user-alt mr-2"></span>My Profile</a>
                                    <hr class="my-1">
                                    <a class="dropdown-item" href="{{url('tenant/administration')}}"><span class="fa fa-cogs mr-2"></span>Settings</a>
                                    <hr class="my-1">
                                <a class="dropdown-item" href="{{url('tenant/logout')}}"><span class="fa fa-sign-out-alt mr-2"></span>Logout</a>
                            @endif
                        </div>
                    </div>
                </div>
{{--            @else--}}
{{--                <a href="{{url('client/login')}}" class="a-link">Sign in</a>--}}
{{--            @endif--}}

        </div>
    </nav>
    <div class="p-xl-4 p-3 admin-main-content">
        @yield('content')
    </div>
    <footer class="row mx-0 admin-panel-footer">
        <div class="col-sm-6">
            © <span id="current-year"></span> <a href="{{url('/')}}" class="text-decoration-none">Garantihuset AS</a>
        </div>
        <div class="col-sm-6 text-sm-right mt-sm-0 mt-1">
            <a href="{{url('/')}}" class="mr-3 text-decoration-none">front page</a>
            <a href="{{url('client/contact-us')}}" class="text-decoration-none">Support</a>
        </div>
    </footer>
</div>
@include('frontend.includes.js')
<script>
    $(function () {
        /*single-select-dropdowns*/
        // minimumResultsForSearch: -1
        $('#streetNameTenantsLease').select2({
            placeholder: 'Enter your street name',
        });

        $('#bankAccountSelect').select2({
            placeholder: 'Bank account for rent',
        });

        $('#dialCode').select2();

        $('#strName').select2({
            placeholder: 'Street name',
        });

        $('#strNumber').select2({
            placeholder: 'Street number',
        });

        $('#accDeposit').select2({
            placeholder: 'Account for deposit',
        });

        $('#dueDate').select2({
            placeholder: 'Due Date',
        });

        $('#accRent').select2({
            placeholder: 'Account for rent',
        });

        $('#specRentalPer').select2({
            placeholder: 'Specific rental period',
        });

        $('#specRentalPer').on('select2:select', function () {
            var $this = $(this);
            var selectVal = $this.val();
            switch (selectVal) {
                case 'The landlord has other objective reasons for the time limit':
                    $('.landlord-obj-time-fields').removeClass('d-none');
                    break;
                default:
                    $('.landlord-obj-time-fields').addClass('d-none');
            }
        });

        $('#noticePer').select2({
            placeholder: 'Notice period',
        });

        $('#bindTime').select2({
            placeholder: 'Binding time',
        });

        $('#applyLease').select2({
            placeholder: 'What applies to this lease',
        });

        $('#applyLease').on('select2:select', function () {
            var $this = $(this);
            var selectVal = $this.val();
            switch (selectVal) {
                case 'Housing that the landlord himself has used as his own home, and which is rented out as a result of temporary absence of up to five years':
                    $('.apply-lease-fields').find('.mb-siblings-rm').addClass('d-none mb-0');
                    $('.apply-lease-fields').removeClass('d-none');
                    break;
                case 'Warehouse / other premises':
                    $('.apply-lease-fields').addClass('d-none');
                    break;
                default:
                    $('.apply-lease-fields').find('.mb-siblings-rm').removeClass('d-none mb-0');
                    $('.apply-lease-fields').removeClass('d-none');
            }
        });

        $('#selectLang').select2({
            placeholder: 'Select Lease Language'
        });

        $('#selProp').select2({
            placeholder: 'Select Property'
        });

        $('#selProp').on('select2:select', function () {
            let id=$( "#selProp option:selected" ).val()
            $.ajax({
                url: '{{URL::to('/client/get-property')}}',
                type: 'GET',
                data: { 'id':id},
                success: function(response)
                {
                    $("#lease_street_name").val(response.street_name);
                    $("#lease_house_number").val(response.street_number);
                    $("#lease_zip_code").val(response.zip_code);
                    $("#lease_city").val(response.city);
                    $("#lease_commune").val(response.commune);
                    let option_data='';
                    option_data+='<option  value=""></option>';
                    response.rental_object.forEach((rental_object, index)=>{
                        console.log(rental_object.rental_object)
                        option_data+='<option  value="'+rental_object.id+'">'+rental_object.rental_object+'</option>';
                    })
                    $('#selRentObj').find('option').remove().end();
                     $("#selRentObj").append(option_data);
                }
            });
            $('.sel-prop-fields').removeClass('d-none');
        });

        $('#typeRentObj1').select2({
            placeholder: 'Type of rental object'
        });

        $('#selRentObj').select2({
            placeholder: 'Select rental object'
        });


        $('#selRentObj').on('select2:select', function () {

            var $this = $(this);
            var selectVal = $this.val();
            var selectText =$('#selRentObj').find(":selected").text();
            let option_rent_data='';
            option_rent_data+='<option  value=""></option>';
            $("#editId").val(selectVal)
            option_rent_data+='<option  value="'+selectText+'">'+selectText+'</option>';
            $('#editTypeRentObj').find('option').remove().end();
            $("#editTypeRentObj").append(option_rent_data);

            $('.sel-rent-obj-fields').removeClass('d-none');
            switch (selectVal) {
                case 'Dorm':
                    $('.dorm-fields').removeClass('d-none');
                    break;
                default:
                    $('.dorm-fields').addClass('d-none');
            }


            let rental_object_id=$( "#selRentObj option:selected" ).val();


            $.ajax({
                url: '{{URL::to('/client/get-property-rental-object')}}',
                type: 'GET',
                data: {'id':rental_object_id},
                success: function(response)
                {
                    $("#editroom_and_other").val(response.room_and_other);
                    $("#editsize_useable_area").val(response.size_m2_room);
                    $("#editnumber_of_parking_other").val(response.number_of_parking_other);
                    $("#editnumber_of_keys_in_parking_space").val(response.number_of_keys_in_parking_space);
                    $("#number_of_remotes").val(response.number_of_remotes);
                    $("#editnumber_of_parking").val(response.number_of_parking);
                    $("#editnumber_of_bathrooms").val(response.number_of_bathrooms);
                    $("#editnumber_of_bedrooms").val(response.number_of_bedrooms);
                    $("#editnumber_of_kitchen").val(response.number_of_kitchen);
                    $("#editnumber_of_stalls").val(response.number_of_stalls);
                    $("#editshare_bethroom_people").val(response.share_bethroom_people);
                    $("#editshare_kitchen_people").val(response.share_kitchen_people);
                    $("#editshare_kitchen_people").val(response.share_kitchen_people);
                    $("#share_living_room_common_area_people").val(response.share_living_room_common_area_people);
                    $("#editstory").val(response.story);
                    $("#edithouse_role").val(response.house_role);


                    $("#edittotal_rooms").val(response.total_rooms);
                    if (response.internet=="on"){
                        $("#editinternetIncl").click();

                    }
                    if (response.cable=="on"){
                        $("#edittvIncluded").click();

                    }
                    if (response.smoking=="on"){
                        $("#editsmokeIncl").click();

                    }
                    if (response.pets=="on"){
                        $("#editpetsAllow").click();

                    }if (response.furnishing=="furnishing"){
                    $("input:radio[value='furnishing'][name='editfurnishing']").click();
                    }if (response.furnishing=="Partly furnished"){
                    $("input:radio[value='Partly furnished'][name='editfurnishing']").click();

                    }if (response.furnishing=="Furnished"){
                    $("input:radio[value='Furnished'][name='editfurnishing']").click();
                    }
                    if (response.electricity_heating=="Including"){
                        $("input:radio[value='Including'][name='editelectricity_heating']").click();
                    }if (response.electricity_heating=="Not included"){
                    $("input:radio[value='Not included'][name='editelectricity_heating']").click();
                }if (response.electricity_heating=="Paid in addition"){
                    $("input:radio[value='Paid in addition'][name='editelectricity_heating']").click();
                }
                    if (response.water_wastewater=="Including"){
                        $("input:radio[value='Including'][name='editwater_wastewater']").click();
                    } if (response.water_wastewater=="Not included"){
                    $("input:radio[value='Not included'][name='editwater_wastewater']").click();
                }if (response.water_wastewater=="Paid in addition"){
                    $("input:radio[value='Paid in addition'][name='editwater_wastewater']").click();
                }
                    $("#editname").val(response.name);
                    $("#editdescription").val(response.description);


                    $("#lease_house").val(response.rental_object);
                    $("#lease_property_number").val(response.property_number);
                    $("#lease_appartment_number").val(response.appartment_number);
                    $("#lease_internet").val(response.internet);
                    $("#lease_cable").val(response.cable);
                    $("#lease_water_wastewater").val(response.water_wastewater);
                    $("#lease_furnishing").val(response.furnishing);
                    $("#lease_smoking").val(response.smoking);
                    $("#lease_pets").val(response.pets);
                    $("#lease_total_rooms").val(response.total_rooms);
                    $("#lease_number_of_bathrooms").val(response.number_of_bathrooms);


                }
            });


        });

        $('#typeRentObj, #editTypeRentObj').on('select2:select', function () {
            var $this = $(this);
            var selectVal = $this.val();
            $('.hidden-fields').addClass('d-none');
            switch (selectVal) {
                case 'Apartment':
                    $('.apartment-fields').removeClass('d-none');
                    break;
                case 'Dorm':
                    $('.dorm-fields').removeClass('d-none');
                    break;
                case 'Semi-detached house':
                    $('.semi-detach-fields').removeClass('d-none');
                    break;
                case 'Detached house':
                    $('.detach-house-fields').removeClass('d-none');
                    break;
                case 'Parking / Garage':
                    $('.parking-garage-fields').removeClass('d-none');
                    break;
                case 'Rooms in shared flats':
                    $('.rooms-in-flats-fields').removeClass('d-none');
                    break;
                case 'Rooms in apartment':
                    $('.rooms-in-flats-fields').removeClass('d-none');
                    break;
                case 'Bearing / bid':
                    $('.bearing-bid-fields').removeClass('d-none');
                    break;
                case 'Townhouse':
                    $('.town-house-fields').removeClass('d-none');
                    break;
            }
            $('.common-fields').removeClass('d-none');
        });

        $('#typeRentObj, #editTypeRentObj').select2({
            placeholder: 'Type of rental object'
        });

        $('#selectProp').select2({
            placeholder: 'Select Property'
        });

        $('#apartNo').select2({
            placeholder: 'Apartment Number'
        });

        $('#propNo').select2({
            placeholder: 'Property Number'
        });

        $('#selStreetName').select2({
            placeholder: 'Enter your street name and select the correct street name from the list'
        });

        $('#selStreetNo').select2({
            placeholder: 'Please select the correct street first'
        });
        /*single-select-dropdowns*/

        /*datepickers of all site*/
        var dateToday = new Date();
        $('.from-earliest-date').datepicker({
            startDate: new Date(),
            format: 'dd-mm-yyyy',
            todayHighlight:'TRUE',
            autoclose: true,
        });

        $('.to-latest-date').datepicker({
            format: 'dd-mm-yyyy',
            autoclose: true,
        });

        $('.from-earliest-date-calender-icon').click(function () {
            $(".from-earliest-date").focus();
        });

        $('.to-latest-date-calender-icon').click(function () {
            $(".to-latest-date").focus();
        });
        /*datepickers of all site*/

        /*counter with plus min signs on left right*/
        $('.number .minus').on('click', function () {
            var $input = $(this).parent().find('input');
            var count = parseInt($input.val()) - 1;
            count = count < 0 ? 0 : count;
            $input.val(count);
            $input.change();
            return false;
        });

        $('.number .plus').on('click', function () {
            var $input = $(this).parent().find('input');
            $input.val(parseInt($input.val()) + 1);
            $input.change();
            return false;
        });
        /*counter with plus min signs on left right*/

        /*tooltip*/
        $('[data-toggle="tooltip"]').tooltip({
            trigger: 'hover'
        });
        /*tooltip*/

        /*more-info*/
        $('.more-info-btn').on('click', function () {
            /*hidden content*/
            if (!$(this).children('.fa-angle-down').hasClass('angle-rotate-toward-up')) {
                $(this).children('.fa-angle-down').addClass('angle-rotate-toward-up');
            } else {
                $(this).children('.fa-angle-down').removeClass('angle-rotate-toward-up');
            }
            $(this).siblings('.hidden-info').slideToggle();
            /*hidden content*/

            /*visible content*/
            if (!$(this).children('.fa-angle-up').hasClass('angle-rotate-toward-up')) {
                $(this).children('.fa-angle-up').addClass('angle-rotate-toward-up');
            } else {
                $(this).children('.fa-angle-up').removeClass('angle-rotate-toward-up');
            }
            $(this).siblings('.show-info').slideToggle();
            /*visible content*/
        });
        /*more-info*/

        /*dashboard right side content toggle*/
        $(document).on('click', '#menuToggle', function () {
            $("#dashboardSidebarRightContent").toggleClass("toggled");
            $("#dashboardSidebar").toggleClass("sidebar-toggle");
        });
        /*dashboard right side content toggle*/

        /*dashboard sidebar*/
        $(".sidebar-links").each(function () {
            var currentUrlBase = window.location.href.split('/').pop();
            var activeUrlBase = $(this).attr("href").split('/').pop();

            /*if (currentUrlBase == activeUrlBase && currentUrlBase != undefined && activeUrlBase != undefined) {
                $(this).parent().addClass('active').parent().show().parent().addClass('opend');
            }*/

            if($(this).parent().hasClass('active')) {
                $(this).parent().addClass('active').parent().show().parent().addClass('opend active');
            }
        });

        $('#dashboardSidebar .side-nav .side-nav-links li').on('click', function () {

            var $this = $(this);

            $this.toggleClass('opend').siblings().removeClass('opend');

            if ($this.hasClass('opend')) {
                $this.find('.side-nav-dropdown').slideToggle('fast');
                $this.siblings().find('.side-nav-dropdown').slideUp('fast');
                $this.tooltip('disable');
            } else {
                $this.find('.side-nav-dropdown').slideUp('fast');
                $this.tooltip('enable');
            }
        });

        $('#dashboardSidebar .side-nav .close-aside').on('click', function () {
            $('#' + $(this).data('close')).addClass('show-side-nav');
            contents.removeClass('margin');
        });
        /*dashboard sidebar*/

        /*Avatar upload*/
        var readURL = function (input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#uploadedImage').attr('src', e.target.result);
                    $('.header-profile-pic').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $(".file-upload").on('change', function () {
            readURL(this);
        });

        $(".upload-button").on('click', function () {
            $(this).siblings('.file-upload').click();
        });
        /*Avatar upload*/

        /*dashboard right side content and sidebar toggle switching*/
        sideBarToggleSwitch();
        /*dashboard right side content and sidebar toggle switching*/

        if($(window).width()<=991) {
            /*Side-nav-overlay*/
            sideNavOverlay();
            /*Side-nav-overlay*/
        }
    });

    $(window).resize(function () {
        /*dashboard right side content and sidebar toggle switching*/
        sideBarToggleSwitch();
        /*dashboard right side content and sidebar toggle switching*/

        /*Side-nav-overlay*/
        sideNavOverlay();
        /*Side-nav-overlay*/
    });

    /*Side-nav-overlay*/
    function sideNavOverlay() {
        $(document).on('click', '#menuToggle', function () {
            $('#sideNavOverlay').removeClass('d-none');
        });
    }
    /*Side-nav-overlay*/

    /*dashboard right side content toggle*/
    function sideBarToggleSwitch() {
        $(document).on('click', function (event) {
            if ($(window).width()<=991 && !$(event.target).closest('#dashboardSidebar, #menuToggle').length) {
                $('#dashboardSidebar').addClass('sidebar-toggle');
                /*Side-nav-overlay*/
                $('#sideNavOverlay').addClass('d-none');
                /*Side-nav-overlay*/
            }
        });

        if ($(window).width()>=992) {
            $('#dashboardSidebar').removeClass('sidebar-toggle');
            $('#dashboardSidebarRightContent').removeClass('toggled');
        }
        else {
            $('#dashboardSidebar').addClass('sidebar-toggle');
            $('#sideNavOverlay').addClass('d-none');
        }
    }
    function editRecord(){

        let property_number=$('#editpropNo').val();
        let appartment_number=$('#editapartNo').val();
        let room_and_other=$('#editroom_and_other').val();
        let Bid_number=$('#editBid_number').val();
        let size_useable_area=$('#editsize_useable_area').val();
        let number_of_parking_other=$('#editnumber_of_parking_other').val();
        let number_of_keys_in_parking_space=$('#editnumber_of_keys_in_parking_space').val();
        let number_of_parking=$('#editnumber_of_parking').val();
        let number_of_bathrooms=$('#editnumber_of_bathrooms').val();
        let number_of_bedrooms=$('#editnumber_of_bedrooms').val();

        let number_of_kitchen=$('#editnumber_of_kitchen').val();
        let number_of_stalls=$('#editnumber_of_stalls').val();
        let share_bethroom_people=$('#editshare_bethroom_people').val();
        let share_kitchen_people=$('#editshare_kitchen_people').val();
        let share_living_room_common_area_people=$('#editshare_kitchen_people').val();
        let size_m2_room=$('#editsize_m2_room').val();
        let story=$('#editstory').val();
        let total_rooms=$('#edittotal_rooms').val();
        let internet=$('#editinternetIncl').val();
        let cable=$('#edittvIncluded').val();

        let smoking=$('#editsmokeIncl').val();
        let pets=$('#editpetsAllow').val();
        let house_role=$('#edithouse_role').val();
        let furnishing=$('input[name="editfurnishing"]:checked').val();
        let electricity_heating=$('input[name="editelectricity_heating"]:checked').val();
        let water_wastewater=$('input[name="editwater_wastewater"]:checked').val();

        let name=$('#editname').val();
        let description=$('#editdescription').val();
        let editId=$('#editId').val();
        $.ajaxSetup({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
        });
        var csrf =  $("input[name=_token]").val();
        $.ajax({
            url: '{{URL::to('/client/edit-rentalObject')}}',
            type: 'post',
            data: { 'property_number':property_number,'appartment_number':appartment_number,'room_and_other':room_and_other,'Bid_number':Bid_number,'size_useable_area':size_useable_area,'number_of_parking_other':number_of_parking_other,'number_of_keys_in_parking_space':number_of_keys_in_parking_space,'number_of_parking':number_of_parking,'number_of_bathrooms':number_of_bathrooms,'number_of_bedrooms':number_of_bedrooms ,'number_of_kitchen':number_of_kitchen,'number_of_stalls':number_of_stalls,'share_bethroom_people':share_bethroom_people,'share_kitchen_people':share_kitchen_people,'share_living_room_common_area_people':share_living_room_common_area_people,'size_m2_room':size_m2_room,'story':story,'total_rooms':total_rooms,'internet':internet,'cable':cable,'smoking':smoking,'pets':pets,'house_role':house_role,'furnishing':furnishing,'electricity_heating':electricity_heating,'water_wastewater':water_wastewater,'name':name,'description':description,'editId':editId },
            success: function(response)
            {
                $('#editRentalObjModal').modal('hide');
                toastr.success( response.message);

            }, error: function (request, status, error) {

                console.log(request,status,error);
                let errors = request.responseJSON.errors;
                // $("a[href='#previous']").click();
                $('#rePerMonthErr').text(errors['rent_per_month'][0]);
                $('#accRentErr').text(errors['account_id'][0]);
            }
        });


    }

    /*dashboard right side content toggle*/

    /*toastr popup function*/
    function toastrPopUp() {
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
    }

    /*toastr popup function*/
    toastrPopUp();

</script>
@include('frontend.message')
@yield('js')
</body>
</html>
