$(document).ready(function(){
    $('.latest-products-slider').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        variableWidth:true,
        adaptiveHeight: true,
        prevArrow: $('.latest-prev'),
        nextArrow: $('.latest-next'),
    });

    $('.featured-products-slider').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        variableWidth:true,
        adaptiveHeight: true,
        prevArrow: $('.featured-prev'),
        nextArrow: $('.featured-next'),
    });
});