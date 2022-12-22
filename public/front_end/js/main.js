$(function() {
    /*Animate loader off screen*/
    $("#loader").fadeOut("slow");
    /*Animate loader off screen*/

    /*Add smooth scrolling for navigation-bar-section on all features page*/
    $(".navigation-bar .btn").on('click', function(event) {
        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;
            var navbarHeight = $('.header-navbar').innerHeight();
            var navigationHeight = $('.navigation-bar').innerHeight();

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top - (navbarHeight + navigationHeight + 20)
            }, 1000);
            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
        } // End if
    });

    $(window).scroll(function() {
        // Assign active class to navigation-bar-section nav links while scolling
        var navigationHeight = $('.navigation-bar').innerHeight();
        var scrollDistance = $(window).scrollTop() + navbarHeight + navigationHeight + 40;
        $('.page-section').each(function (i) {
            if ($(this).position().top <= scrollDistance) {
                $('.navigation-bar a.active').removeClass('active');
                $('.navigation-bar a').eq(i).addClass('active');
            }
        });
        // Assign active class to navigation-bar-section nav links while scolling
    });
    /*Add smooth scrolling for navigation-bar-section on all features page*/

    /*position-sticky div top 0 (below header)*/
    var navbarHeight = $('.header-navbar').innerHeight();
    var navbarHeightFloatToInt = Math.ceil(navbarHeight);
    $('.position-sticky').css('top', navbarHeightFloatToInt);
    /*position-sticky div top 0 (below header)*/

    // Add minus icon for collapse element which is open by default
    $(".collapse.show").each(function () {
        $(this)
            .prev(".card-header")
            .find(".fa")
            .addClass("fa-minus")
            .removeClass("fa-plus");
    });

    // Toggle plus minus icon on show hide of collapse element
    $(".collapse").on("show.bs.collapse", function () {
        $(this)
            .prev(".card-header")
            .find(".fa")
            .removeClass("fa-plus")
            .addClass("fa-minus");
    }).on("hide.bs.collapse", function () {
        $(this)
            .prev(".card-header")
            .find(".fa")
            .removeClass("fa-minus")
            .addClass("fa-plus");
    });

    /*wow animation*/
    wow = new WOW(
        {
            boxClass:     'wow',      // default
            animateClass: 'animated', // default
            offset:       0,          // default
            mobile:       true,       // default
            live:         true        // default
        }
    )
    wow.init();
    /*wow animation*/

    /*footer*/
    var currentYear = (new Date).getFullYear();
    $('#current-year').text(currentYear);
    /*footer*/

    /*header view, if user not at page top*/
    if ($(window).scrollTop() != 0) {
        $('.header-navbar').addClass('bg-white light-box-shadow');
        if ($(window).width() >= 992) {
            $('.sign-in-btn').css({'border': '2px solid #48a955', 'color': '#48a955'});
        }
        $('.header-navbar .navbar-links .nav-link').css({'color': '#000', 'text-shadow': 'unset'});
        $('.header-navbar .navbar-brand .feelag-logo').css('filter', 'invert(0.8)');
    }
    /*header view, if user not at page top*/

    $(window).on('scroll', function () {
        /*header view on scroll*/
        $('.header-navbar').addClass('bg-white light-box-shadow');
        if ($(window).width() >= 992) {
            $('.sign-in-btn').css({'border': '2px solid #48a955', 'color': '#48a955'});
            if ($(window).scrollTop() == 0) {
                $('.sign-in-btn').css({'border': '2px solid #FFF', 'color': '#FFF'});
            }
        }
        $('.header-navbar .navbar-links .nav-link').css({'color': '#000', 'text-shadow': 'unset'});
        $('.header-navbar .navbar-brand .feelag-logo').css('filter', 'invert(0.8)');
        if ($(window).scrollTop() == 0) {
            $('.header-navbar').removeClass('bg-white light-box-shadow');
            $('.header-navbar .navbar-links .nav-link').css({'color': '', 'text-shadow': ''});
            $('.header-navbar .navbar-brand .feelag-logo').css('filter', '');
        }
        /*header view on scroll*/
    });

    if ($(window).width() >= 992) {
        /*header navbar link hover effect*/
        $(".header-navbar .navbar-nav .nav-item.dropdown").hover(function () {
            $(this).addClass("show");
            $(this).find(".dropdown-menu").addClass("show");
        }, function () {
            $(this).removeClass("show");
            $(this).find(".dropdown-menu").removeClass("show");
        });
        /*header navbar link hover effect*/
    }

    if($(window).width()<=575) {
        smoothScroll();
    }

    $(window).resize(function () {
        if ($(window).width() >= 992) {
            /*header navbar link hover effect*/
            $(".header-navbar .navbar-nav .nav-item.dropdown").hover(function () {
                $(this).addClass("show");
                $(this).find(".dropdown-menu").addClass("show");
            }, function () {
                $(this).removeClass("show");
                $(this).find(".dropdown-menu").removeClass("show");
            });
            /*header navbar link hover effect*/
        }

        if($(window).width()<=575) {
            smoothScroll();
        }
    });
});
function smoothScroll() {
    $('.navigation-bar').removeClass('position-sticky');
    $(".navigation-bar .btn").on('click', function(event) {
        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;
            var navbarHeight = $('.header-navbar').innerHeight();

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top - (navbarHeight + 20)
            }, 1000);
            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
        } // End if
    });
}
