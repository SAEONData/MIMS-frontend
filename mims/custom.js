
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

    /* Landing page */
    $('body').on('mouseover','#Group_1_1_ g', function(){
        var activegroup = $(this).attr('class');
        if( $(activegroup).length != 'undefined' ){
            $('g path').removeClass('active');
            $('g.'+activegroup+' path').addClass('active');
        }

        //  Slider

        $('#elementor-tab-title-9642').trigger('click');
      
        
        // if( $('path').hasClass(activegroup) ){
        //     $(this).addClass('active');
        // }else{
        //     $(this).removeClass('active');
        // }
        
        console.log(activegroup);
    });
});