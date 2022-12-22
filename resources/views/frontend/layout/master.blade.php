<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @include('frontend.includes.css')

</head>
<!--paste this code under the head tag-->
<div id="loader">
    <span id="loaderGif"></span>
</div>
<!--paste this code under the head tag-->
<body>
@include('frontend.includes.header')

@yield('content')

@include('frontend.includes.footer')
@include('frontend.includes.js')
<script>
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
@yield('js')
@include('frontend.message')

</body>

</html>








