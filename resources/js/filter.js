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


$(function(){
    $('#heading-gender').on('click', function(){
        $('#form-group-gender').slideToggle(300);
    });
});

$(function(){
    $('#heading-category').on('click', function(){
        $('#form-group-category').slideToggle(300);
    });
});

$(function(){
    $('#heading-featured-category').on('click', function(){
        $('#form-group-featured-category').slideToggle(300);
    });
});

$(function(){
    $('#heading-color').on('click', function(){
        $('#form-group-color').slideToggle(300);
    });
});

$(function(){
    $('#heading-size').on('click', function(){
        $('#form-group-size').slideToggle(300);
    });
});
