
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
    $(window).scroll(function(){
        if($(this).scrollTop() > 150) {
            $('.mims-header').addClass('scrollnav');
            $('#more-scroll').fadeOut(300);
        }
        else{
            $('.mims-header').removeClass('scrollnav');
            $('#more-scroll').fadeIn(300); 
        }
    });
    $('body').on('mouseleave','.sub-menu.active', function(){
        console.log('leave');
        $(this).slideUp(300);
    });

    /* Landing page */
    $('body').on('mouseenter','#Asset_1_x40_4x_xA0_Image', function(){
        $('#elementor-tab-title-9641').trigger('click');
        $('g path').removeClass('active');
        console.log('map over');
    });
    $('body').on('mouseenter','.Remotely-sensed', function(){
        $('#elementor-tab-title-9642').trigger('click');
        $('g path').removeClass('active');
        $('.Remotely-sensed path').addClass('active');
    });
    $('body').on('mouseenter','.Research-vessels', function(){
        $('#elementor-tab-title-9643').trigger('click');
        $('g path').removeClass('active');
        $('.Research-vessels path').addClass('active');
    });
    $('body').on('mouseenter','.point-observations', function(){
        $('#elementor-tab-title-9644').trigger('click');
        $('g path').removeClass('active');
        $('.point-observations path').addClass('active');
    });

    // $('body').on('click','#Group_1_1_ g', function(){
    //     var activegroup = $(this).attr('class');
    //     // if( $(activegroup).length != 'undefined' ){
    //     //     $('g path').removeClass('active');
    //     //     $('g.'+activegroup+' path').addClass('active');
    //     // }
    //     if( activegroup == 'Remotely-sensed' ){
    //         $('#elementor-tab-title-9642').trigger('click');
    //         $('g path').removeClass('active');
    //         $('.Remotely-sensed').addClass('active');
    //     }
    //     else if( activegroup == 'Research-vessels' ){
    //         $('#elementor-tab-title-9643').trigger('click');
    //         $('g path').removeClass('active');
    //         $('.Research-vessels').addClass('active');
    //     }
    //     else if( activegroup == 'point-observations' ){
    //         $('#elementor-tab-title-9644').trigger('click');
    //         $('g path').removeClass('active');
    //         $('.point-observations').addClass('active');
    //     }

    //     //  Slider
    //     console.log(activegroup);
    // });
});