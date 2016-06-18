jQuery(document).ready(function($) {

    var toggleList = $('.toggle-text-heading');

    toggleList.click(function(){
        if($(this).hasClass('toggle-text-open')){
            var toggler = $(this);
            toggler.next().slideUp();
            toggler.find('.toggle-text-icon').slideDown();
            toggler.removeClass('toggle-text-open');
        }
        else{
            var toggler = $(this);
            toggler.next('.toggle-text-body').slideDown();
            toggler.find('.toggle-text-icon').slideUp();
            toggler.addClass('toggle-text-open');
        }
    });
});

