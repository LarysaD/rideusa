/**
 * Transport - Theme option 
 * 
 * This is using by less 
 * 
 * @package transport
 * @subpackage transport.assets.option
 * @since transport 1.0.0
 */

(function ($) {
    "use strict";

    /**
     * Color, Font & Heading
     * 
     * @since transport 1.0.0
     */
    less.modifyVars({
        skinColor: TRANSPORT_OPTION.color,
        fontFamily: TRANSPORT_OPTION.font,
        headingFont: TRANSPORT_OPTION.heading_font
    });

    /**
     * Animation Effect
     * 
     * @since transport 1.0.0
     */
    /*if (TRANSPORT_OPTION.effect == 'yes') {
        for (var i = 0; i < $('.animate-effect').length; i++) {
            $('.animate-effect')[i].addClass('anim-section');
        }
    }*/

    var headerHeight = $('#header').outerHeight();
    var st = $(window).scrollTop();
   var stickOnScroll = function () {
        if (TRANSPORT_OPTION.header == "intelligent") {

            $('#header').removeClass('normal');
            $('.spacetop').addClass('top-m');
            $('#header').addClass('intelligent fixed');
            var pos = $(window).scrollTop();

            if (pos > headerHeight) {
                if (pos > st) {
                    $('#header').addClass('simple');
                    $('#header.simple').removeClass('down');
                    $('#header.simple').addClass('fixed up');

                } else {
                    $('#header.simple').removeClass('up');
                    $('#header.simple').addClass('fixed down');

                }
                st = pos;

            } else {
                $('#header.simple').removeClass('fixed down up simple');
            }
            if (pos == $(document).height() - $(window).height()) {
                $('#header.simple').removeClass('up');
                $('#header.simple').addClass('fixed down');
            }

        } else if (TRANSPORT_OPTION.header == "fix") {

            $('.spacetop').addClass('top-m');
            $('#header').addClass('simple fixed');
            $('#header').removeClass('down up');
            $('#header').removeClass('intelligent');
            /*$('#wrapper').css({
                paddingTop: 0
            });*/
        }
        else {

            $('#header.simple').removeClass('fixed down up simple');
            $('#header').addClass('normal');
            $('.spacetop').removeClass('top-m');
            $('#header').removeClass('intelligent');
            $('#wrapper').css({
                paddingTop: 0
            });
        }
    };
    stickOnScroll();
    $(window).scroll(function () {
        stickOnScroll();
    });
    // end for sticky header

    window.onload = function() {
        if($("body .rev_slider_wrapper").length> 0){
            if(TRANSPORT_OPTION.header == "fix" || TRANSPORT_OPTION.header == "intelligent"){ 
                $('#wrapper').css({
                    paddingTop: $('#wrapper #header').outerHeight(),
                });
            }
        }
    }


})(jQuery);
