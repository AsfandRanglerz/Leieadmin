function smoothScroll(){$(".navigation-bar").removeClass("position-sticky"),$(".navigation-bar .btn").on("click",(function(a){if(""!==this.hash){a.preventDefault();var n=this.hash,o=$(".header-navbar").innerHeight();$("html, body").animate({scrollTop:$(n).offset().top-(o+20)},1e3),window.location.hash=n}}))}$((function(){$("#loader").fadeOut("slow"),$(".navigation-bar .btn").on("click",(function(a){if(""!==this.hash){a.preventDefault();var n=this.hash,o=$(".header-navbar").innerHeight(),s=$(".navigation-bar").innerHeight();$("html, body").animate({scrollTop:$(n).offset().top-(o+s+20)},1e3),window.location.hash=n}})),$(window).scroll((function(){var n=$(".navigation-bar").innerHeight(),o=$(window).scrollTop()+a+n+40;$(".page-section").each((function(a){$(this).position().top<=o&&($(".navigation-bar a.active").removeClass("active"),$(".navigation-bar a").eq(a).addClass("active"))}))}));var a=$(".header-navbar").innerHeight(),n=Math.ceil(a);$(".position-sticky").css("top",n),$(".collapse.show").each((function(){$(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus")})),$(".collapse").on("show.bs.collapse",(function(){$(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus")})).on("hide.bs.collapse",(function(){$(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus")})),wow=new WOW({boxClass:"wow",animateClass:"animated",offset:0,mobile:!0,live:!0}),wow.init();var o=(new Date).getFullYear();$("#current-year").text(o),0!=$(window).scrollTop()&&($(".header-navbar").addClass("bg-white light-box-shadow"),$(window).width()>=992&&$(".sign-in-btn").css({border:"2px solid #48a955",color:"#48a955"}),$(".header-navbar .navbar-links .nav-link").css({color:"#000","text-shadow":"unset"}),$(".header-navbar .navbar-brand .feelag-logo").css("filter","invert(0.8)")),$(window).on("scroll",(function(){$(".header-navbar").addClass("bg-white light-box-shadow"),$(window).width()>=992&&($(".sign-in-btn").css({border:"2px solid #48a955",color:"#48a955"}),0==$(window).scrollTop()&&$(".sign-in-btn").css({border:"2px solid #FFF",color:"#FFF"})),$(".header-navbar .navbar-links .nav-link").css({color:"#000","text-shadow":"unset"}),$(".header-navbar .navbar-brand .feelag-logo").css("filter","invert(0.8)"),0==$(window).scrollTop()&&($(".header-navbar").removeClass("bg-white light-box-shadow"),$(".header-navbar .navbar-links .nav-link").css({color:"","text-shadow":""}),$(".header-navbar .navbar-brand .feelag-logo").css("filter",""))})),$(window).width()>=992&&$(".header-navbar .navbar-nav .nav-item.dropdown").hover((function(){$(this).addClass("show"),$(this).find(".dropdown-menu").addClass("show")}),(function(){$(this).removeClass("show"),$(this).find(".dropdown-menu").removeClass("show")})),$(window).width()<=575&&smoothScroll(),$(window).resize((function(){$(window).width()>=992&&$(".header-navbar .navbar-nav .nav-item.dropdown").hover((function(){$(this).addClass("show"),$(this).find(".dropdown-menu").addClass("show")}),(function(){$(this).removeClass("show"),$(this).find(".dropdown-menu").removeClass("show")})),$(window).width()<=575&&smoothScroll()}))}));
//# sourceMappingURL=main.js.map