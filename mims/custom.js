
jQuery(document).ready(function($) {
    // console.log('hi');
    /* Navigation */
    var childmenu ='';
    $('.menu-item-has-children').on('mouseenter', function(){
        $('.sub-menu').addClass('inactive');
        
        childmenu = $(this).find('.sub-menu');
        $(childmenu).removeClass('inactive').addClass('active');
        $('.sub-menu.active').slideDown(300);
        $('.sub-menu.inactive').hide();
        // $(childmenu).on('mouseleave', function(){
        //     $(this).slideUp(300);
        // });
    });
    $('body').on('mouseleave','.sub-menu.active', function(){
        console.log('leave');
        $(this).slideUp(300);
    });
});