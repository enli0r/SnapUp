$(function(){
    $('.fa-search').on('click', function(event){
        $('.search').toggleClass('search-clicked');
    });

    $('.fa-times').on('click', function(event){
        $('.search').removeClass('search-clicked');
    });
})