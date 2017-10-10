

jQuery(document).ready(function( $ ) {

    var aboutus = $("#about-us-carousel");
    var topslider = $("#top-slider");
    var owl = $('.owl-carousel');

    aboutus.owlCarousel({
        items: 4,
        loop: true,
        margin: 10,
        nav: true,
        navText: ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        dots: false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:4
            }
        }
    });

    topslider.owlCarousel({
        items:1,
        loop: true,
        mouseDrag: true,
        touchDrag: true,
        dots: true,
        nav: false,
        autoplay:true,
        autoplayTimeout: 5000
    });


  });
