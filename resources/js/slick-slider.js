$(document).ready(function(){
    $('.latest-products-slider').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        variableWidth:true,
        adaptiveHeight: true,
        prevArrow: $('.latest-prev'),
        nextArrow: $('.latest-next'),
        speed: 800,

        

        responsive: [
            {
              breakpoint: 768,
              settings: {
                slidesToScroll: 2,
                infinite: true,
              }
            }
        ]
    });

    $('.featured-products-slider').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        variableWidth:true,
        adaptiveHeight: true,
        prevArrow: $('.featured-prev'),
        nextArrow: $('.featured-next'),
        speed: 800,


        responsive: [
            {
              breakpoint: 768,
              settings: {
                slidesToScroll: 2,
                infinite: true,
              }
            }
        ]
    });

    $('.header-slider').slick({
        autoplay: true,
        autoplaySpeed: 7500,
        speed: 800,
        prevArrow: $('.header-prev'),
        nextArrow: $('.header-next'),
        fade: true,
    });
});