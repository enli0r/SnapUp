$(function(){
        $('.filters-open-button').on('click', function(){
            $('.filter-sidebar').toggleClass('opened');
            $('.filters-open-button').css('display', 'none');
            $('.filters-close-icon').css('display', 'block');
        })
    
        $('.filters-close-icon').on('click', function(){
            $('.filter-sidebar').toggleClass('opened');
            $('.filters-open-button').css('display', 'block');
            $('.filters-close-icon').css('display', 'none');
        })
});