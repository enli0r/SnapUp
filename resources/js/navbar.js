$(function (){
    $('.navbar-toggler-icon').on('click', function(){
        $('#sidebar').toggleClass('clicked');
        $('.navbar-toggler-icon').css('display', 'none');
        $('.close-icon').css('display', 'block');
    })

    $('.close-icon').on('click', function(){
        $('#sidebar').toggleClass('clicked');
        $('.navbar-toggler-icon').css('display', 'block');
        $('.close-icon').css('display', 'none');
    })
});

$(function(){
    $(window).resize(function() {
        if ($(window).width() > 991) {
           $('.close-icon').css('display', 'none');
           $('.navbar-toggler-icon').css('display', 'none');
        }

        if ($(window).width() < 991 && $('#sidebar').hasClass('clicked')) {
            $('.close-icon').css('display', 'block');
        }
        
        if ($(window).width() < 991 && !($('#sidebar').hasClass('clicked'))) {
            $('.navbar-toggler-icon').css('display', 'block');
        }
    });
});
