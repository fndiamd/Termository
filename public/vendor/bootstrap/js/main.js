/* ----------------------------------------------------------------------------------------
* Author        	: Anik
* Author Web        : http://smartitsource.com/
* Template Name 	: Utrun is a App Landing Page Template.
* File          	: Custom js file
* Version       	: 1.0.0
* ---------------------------------------------------------------------------------------- */
(function ($) {
    "use strict";

        /*==============================
          Activate scrollspy to add active class to navbar items on scroll
        ================================*/ 
        $('body').scrollspy({
            target: '#header-top .navbar',
            offset: 100
        });

      /*==============================
        AOS
      ================================*/ 
        AOS.init();

      /*==============================
        Bootstrap collapse 
      ================================*/ 
        jQuery('.navbar-nav>li>a').on('click', function(){
            $('.navbar-collapse').collapse('hide');
        });

      /*==============================
        Smoth Scroll js
      ================================*/ 
      $('a.utrun-scroll[href*="#"]:not([href="#"])').on('click', function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: (target.offset().top -90)
                }, 1000, "easeInOutExpo");
                return false;
            }
        }
    });


      /*==============================
        Tabl Active class
      ================================*/ 
        jQuery(".cd-pricing-switcher label").on('click', function () {
          $(".cd-pricing-switcher label").removeClass('active');
          $(this).addClass("active");
        });


      /*==============================
        Sticky Menu Header
      ================================*/ 
        var windows = $(window);
        var sticky = $('.sticky-hidden');

        windows.on('scroll', function() {
            var scroll = windows.scrollTop();
            if (scroll < 80) {
                sticky.removeClass('sticky-opnen');
            }else{
                sticky.addClass('sticky-opnen');
            }
        });
      /*==============================
        Preloader js
      ================================*/ 
        var preLoader = $(window);
        preLoader.on("load", function () {
            var preloader = jQuery('#loading');
            var spinnerTime = jQuery('.lds-dual-ring');
            preloader.fadeOut();
            spinnerTime.delay(400).fadeOut('slow');
        });

      /*==============================
        Owl Carousel Client Logo
      ================================*/ 
        $('#client-logo').owlCarousel({

            autoplay:true,
            autoplayTimeout:3000,
            autoplayHoverPause:true,
            loop:true,
            dots: false,
            singleItem:true,
            // margin:10,
            responsive:{
              0:{
                items: 1,
                nav: false
              },
              768:{
                items: 3,
                nav: false
              },
              991:{
                items: 6,
                nav: false,
                singleItem:false,
              }
            }
        });


      /*==============================
        Owl Carousel Client Testimonial
      ================================*/ 
        $('#client-testimoni').owlCarousel({

            autoplay:true,
            autoplayTimeout:3000,
            autoplayHoverPause:true,
            loop:true,
            dots: false,
            singleItem:true,
             margin:30,
             nav:true, 
             navText: ["<i class='flaticon-back'></i>","<i class='flaticon-next'></i>"],
            responsive:{
              0:{
                items: 1,
                nav: false
              },
              768:{
                items: 2,
                nav: false
              },
              991:{
                items: 3,
                nav: true,
                singleItem:false
              }
            }
        });

     /*==============================
        Scroll To Top
      ================================*/ 
      $(window).on('scroll',function(){
          if ($(this).scrollTop() > 200) {
            $(".scroll-top-top").fadeIn('600');
          }else{
            $(".scroll-top-top").fadeOut('700');
          }
      });

      // Top to Scroll 
      $(document).ready(function() {
          $(".scroll-top-top").on("click", function(){
             $('html, body').animate({scrollTop: 0}, 'slow');
          });
      });

     
})(jQuery);


