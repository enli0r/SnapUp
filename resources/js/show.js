//Active images
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

//Sizes
$(function(){
    $('.sizes-wrapper input').on('click', function(event){
        if($(event.target).is(":checked")){
            $('.checked').removeClass('checked');
            var inputId = $(event.target).attr('id');

            $('.label-for-' + inputId).addClass('checked');
        }
    });
});