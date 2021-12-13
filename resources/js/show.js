$(function(){
    $('.secondary-image').on('click', function(event){
        $('.main-image').addClass('secondary-image');
        $('.main-image').removeClass('main-image');

        $(event.target).addClass('main-image');
        $(event.target).removeClass('secondary-image');

        $('.active-image').attr('src', $(event.target).attr('src'));
    });

    $('.main-image').on('click', function(event){
        $('.main-image').addClass('secondary-image');
        $('.main-image').removeClass('main-image');

        $(event.target).addClass('main-image');
        $(event.target).removeClass('secondary-image');

        $('.active-image').attr('src', $(event.target).attr('src'));
    });
});

$(function(){
    var mainImgSrc = $('.main-image').attr('src');
    $('.active-image').css('background-image', "url(" + mainImgSrc + ")");

    $('.secondary-image').on('click', function(event){
        $('.main-image').addClass('secondary-image');
        $('.main-image').removeClass('main-image');
        //

        $(event.target).addClass('main-image');
        $(event.target).removeClass('secondary-image');

        var imgSrc = $(event.target).attr('src');
         $('.active-image').css('background-image', "url(" + imgSrc + ")");
    });

    $('.main-image').on('click', function(event){
        $(event.target).addClass('main-image');
        $(event.target).removeClass('secondary-image');

        var imgSrc = $(event.target).attr('src');
         $('.active-image').css('background-image', "url(" + imgSrc + ")");
    });
});