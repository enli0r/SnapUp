$(function(){
    $('.reveal-link').on('mouseover', function(event){
        $('.for-' + $(event.target).attr('id')).addClass('revealed');
    });

    $('.navbar-reveal').on('mouseleave', function(){
        $('.navbar-reveal').removeClass('revealed');
    });

    $('.reveal-link').on('mouseleave', function(){
        if (!$('.navbar-reveal:hover').length != 0) {
            $('.navbar-reveal').removeClass('revealed');
        }
    });


});