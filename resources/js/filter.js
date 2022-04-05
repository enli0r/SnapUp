//submiting form on checkbox click
$(function(){
    $('.filterable').on('change', function(){
        $('.filters-form').submit();
    });
});
