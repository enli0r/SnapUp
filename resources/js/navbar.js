$(function(){
    $('.navbar-toggler-icon').on('click', function(event){
        $('#sidebar').toggleClass('clicked');
        $('.navbar').toggleClass('navbar-dark');
    });
});


$(function(){
    $(document).on('click', function(event){
        var opened = $('#sidebar').hasClass('clicked');
        var clickaway = $(event.target);

        if(opened){
            $('.navbar-toggler').css('display', 'none');
            $('.close-toggler').css('display', 'block');

            if(!clickaway.hasClass('navbar-toggler-icon') && !clickaway.hasClass('sidebar') && !clickaway.hasClass('nav-link')){
                $('.navbar-toggler-icon').trigger('click');
            }
        }
        else{
            $('.navbar-toggler').css('display', 'block');
            $('.close-toggler').css('display', 'none');

        }

    });
})