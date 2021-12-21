$(function(){
    $('.fa-search').on('click', function(event){
        $('.search').toggleClass('search-clicked');
        $('.search form input').focus();
    });

    $('.fa-times').on('click', function(event){
        $('.search').removeClass('search-clicked');
    });
})