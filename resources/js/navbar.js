//sidebar toggle
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

//automatic navbar toggler display manager when resizing
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

//clickaway functionality
$(function(){
    $(document).on('click', function(event){
        var element = $(event.target);
        if($('#sidebar').hasClass('clicked') && !(element.hasClass('close-icon') || element.hasClass('sidebar') || element.hasClass('navbar-toggler-icon') || element.hasClass('nav-link'))){
            $('.close-icon').trigger('click');
        }
    });
})
