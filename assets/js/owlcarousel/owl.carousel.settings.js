jQuery(document).ready(function( $ ) {

    var topslider = $("#top-slider");
    var owl = $('.owl-carousel');
    var clients = $('#clientsSlider');

    topslider.owlCarousel({
        items:1,
        loop: true,
        mouseDrag: true,
        touchDrag: true,
        dots: false,
        nav: false,
        autoplay: true,
        autoplayTimeout: 8000
    });

    clients.owlCarousel({
         loop:true,
    margin:10,
    nav:false,
    dots: false,
    autoplay: true,
    autoplayTimeout: 3000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
    });



  });
