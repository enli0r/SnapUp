$(document).ready(function(){
    $('.latest-products-slider').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        variableWidth:true,
        adaptiveHeight: true,
        prevArrow: $('.latest-prev'),
        nextArrow: $('.latest-next'),

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
        speed: 600,
        prevArrow: $('.header-prev'),
        nextArrow: $('.header-next'),
    });
});