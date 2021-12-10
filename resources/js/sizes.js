$(function(){
    $('.sizes-wrapper .size-label').on('click', function(){
        $('.size-label').removeClass('checked');
        $(this).toggleClass('checked');
    });
});