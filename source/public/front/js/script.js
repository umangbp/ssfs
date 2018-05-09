jQuery(document).ready(function($) {
    "use strict";
    
    /*
    Banner Slider*/
    if ($('#tnit-banner-slider').length) {
        var outerCarousel = $('#tnit-banner-slider');
        outerCarousel.owlCarousel({
            loop: true,
            dots: false,
            nav: false,
            navText: '',
            items: 1,
            autoplay: true,
            smartSpeed: 2000,
            animateIn: 'fadeIn',
            animateOut: 'fadeOut',
        });
    }
 

    /*
    Owl Slide For Testimonial*/
    if ($('#tnit-testimonial-slider').length) {
        $('#tnit-testimonial-slider').owlCarousel({
            loop: true,
            dots: false,
            nav: true,
            navText: '',
            items: 1,
            margin: 30,
            autoplay: false,
            smartSpeed: 2000,
            animateIn: 'fadeIn',
            animateOut: 'fadeOut',
        });
    }

    /*
    Counter Jquery*/
    if ($('.counter').length) {
        $('.counter').counterUp({
            delay: 15,
            time: 1500
        }); 
    }

    /*
    Facny Light Box Jquery*/
    if ($('.tnit-fancyvideo').length) {
        $('.tnit-fancyvideo').fancybox({
            width: 640,
            height: 400,
            type: 'iframe'
        });
    }
   
    /*
    Owl Slide For Testimonial*/
    if ($('#tnit-team-slider').length) {
        $('#tnit-team-slider').owlCarousel({
            loop: true,
            dots: true,
            nav: false,
            navText: '',
            items: 3,
            margin: 30,
            autoplay: false,
            smartSpeed: 2000,
            animateIn: 'fadeIn',
            animateOut: 'fadeOut',
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                },
                768: {
                    items: 2,
                },
                992: {
                    items: 3,
                },
                1199: {
                    items: 3,
                }
            }
        });
    }

    /*
    Accordian Jquery Code*/
    if ($('#tnit-accordion').length) {
        $( "#tnit-accordion" ).accordion();
    }

    /*
    Date Jquery Code*/
    if ($("#datepicker").length) {
        $( "#datepicker" ).datepicker();
    }


});



  