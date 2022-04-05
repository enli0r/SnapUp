$(function(){
    $('.fa-search').on('click', function(event){
        $('.search').toggleClass('search-clicked');
        $('.search form input').focus();
    });

    $('.fa-times').on('click', function(event){
        $('.search').removeClass('search-clicked');
    });

    $('.fa-bars').on('click', function(event){
        $('.sidebar').toggleClass('sidebar-opened');
    });

    $('.sidebar-close-icon').on('click', function(){
        $('.sidebar').removeClass('sidebar-opened');
    });
});
