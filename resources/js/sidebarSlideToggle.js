$(function(){
    $('.category-wrapper').on('click', function(event){
        $('.toggled-' + $(event.target).attr('id')).toggleClass('category-toggled');
        $('.sidebar-category-'+ $(event.target).attr('id')).toggleClass('sidebar-category-visible');
    });
});

$(function(){
    $('.subcategory-wrapper').on('click', function(event){
        $('.toggled-' + $(event.target).attr('id')).toggleClass('subcategory-toggled');
        $('.sidebar-subcategory-' + $(event.target).attr('id')).toggleClass('sidebar-subcategories-visible');
    })
});