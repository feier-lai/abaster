jQuery(document).ready(function( $ ) {

    var topslider = $("#top-slider");
    var owl = $('.owl-carousel');

    topslider.owlCarousel({
        items:1,
        loop: true,
        mouseDrag: true,
        touchDrag: true,
        dots: false,
        nav: false,
        autoplay:true,
        autoplayTimeout: 8000
    });


  });
