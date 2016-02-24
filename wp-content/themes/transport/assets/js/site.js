(function ($) {
    "use strict";
    var isMobile;
    $(document).ready(function () {
        $(".nav-icon").on('click', function () {
            if ($(window).width() < 768) {
                $('.navigation').slideToggle();
            }
        })

        $(".navigation li").on('click', function () {
            if ($(window).width() < 768) {
                $(this).children('.sub-menu').slideToggle();
            }
        })
//=======================audio player function===================

        if ($('audio.audio').length) {
           $('audio.audio').each(function(){
               $(this).audioPlayer();
           });
        }

        //===========owl carousel========
        $(".services-slides").each(function () {
            $(this).owlCarousel({
                autoPlay: false, //Set AutoPlay to 3 seconds
                items: 3,
                itemsDesktop: [1199, 3],
                itemsDesktopSmall: [979, 3],
                itemsMobile: [480, 1]
            });
        });


        $("#about-slides").owlCarousel({
            items: 1,
            itemsDesktop: [1199, 1],
            itemsDesktopSmall: [979, 1],
            itemsTablet: [768, 1],
            navigation: true
        });

        $(".news-slides").each(function(){
            $(this).owlCarousel({
                autoPlay: false, //Set AutoPlay to 3 seconds

                items: 3,
                itemsDesktop: [1199, 3],
                itemsDesktopSmall: [979, 3],
                itemsMobile: [480, 1]
            });
        });
                

        $("#testimonial-text").owlCarousel({
            autoPlay: false, //Set AutoPlay to 3 seconds

            items: 2,
            itemsDesktop: [1199, 2],
            itemsDesktopSmall: [979, 2],
            itemsMobile: [480, 1]

        });

        $("#more-slides").owlCarousel({
            autoPlay: false, //Set AutoPlay to 3 seconds

            items: 3,
            itemsDesktop: [1199, 3],
            itemsDesktopSmall: [979, 2],
            itemsMobile: [480, 1]

        });

        $("#location-slides").owlCarousel({
            autoPlay: false, //Set AutoPlay to 3 seconds

            items: 3,
            itemsDesktop: [1199, 3],
            itemsDesktopSmall: [979, 2],
            itemsMobile: [480, 1]
        });

        $("#best-seller-items").owlCarousel({
            autoPlay: false, //Set AutoPlay to 3 seconds
            navigation: true,
            pagination: false,
            navigationText: ["", ""],
            items: 4,
            itemsDesktop: [1199, 4],
            itemsDesktopSmall: [979, 3],
            itemsMobile: [480, 1]
        });

        $("#countries").owlCarousel({
            autoPlay: false, //Set AutoPlay to 3 seconds
            singleItem: true,
            items: 1,
        });

        if ($('.select').length > 0) {
            $(".select").selectbox();
        }
//==========================	Map function ===============

        if ($('#map-box').length) {
            var map = new GMaps({
                div: '#map-box',
                lat: TRANSPORT_DATA.latitude,
                lng: TRANSPORT_DATA.longitude,
                disableDefaultUI: true,
                zoom: 10,
                scrollwheel: false
            });
            map.drawOverlay({
                lat: map.getCenter().lat(),
                lng: map.getCenter().lng(),
                content: '<a href="#" class="mapmarker"></a>',
                verticalAlign: 'top',
                horizontalAlign: 'center'
            });

            if ($(window).width() >= 1200) {
                map.setOptions({
                    center: new google.maps.LatLng(TRANSPORT_DATA.latitude, TRANSPORT_DATA.longitude),
                });
            } else if ($(window).width() >= 992) {
                map.setOptions({
                    center: new google.maps.LatLng(TRANSPORT_DATA.latitude, TRANSPORT_DATA.longitude),
                });
            } else if ($(window).width() >= 768) {
                map.setOptions({
                    center: new google.maps.LatLng(TRANSPORT_DATA.latitude, TRANSPORT_DATA.longitude),
                });
            } else {
                map.setOptions({
                    center: new google.maps.LatLng(TRANSPORT_DATA.latitude, TRANSPORT_DATA.longitude),
                });
            }
        }


        //this function only for Desktop view
        isMobile = navigator.userAgent.match(/(iPhone|iPod|Android|BlackBerry|iPad|IEMobile|Opera Mini)/);
        if ((!isMobile)) {

            var animSection = function () {
                jQuery('.anim-section').each(function () {
                    if (jQuery(window).scrollTop() > (jQuery(this).offset().top - jQuery(window).height() / 1.15)) {
                        jQuery(this).addClass('animate')
                    }
                })
            };
            if (jQuery('.anim-section').length) {
                animSection()
                jQuery(window).scroll(function () {
                    animSection()
                })
            }
            ;

            jQuery(window).load(function () {
                if (jQuery('.parallax').length) {
                    jQuery('.parallax').each(function () {
                        parallax(jQuery(this), 0.1);
                    })
                }
            });
            jQuery(window).scroll(function () {
                if (jQuery('.parallax').length) {
                    jQuery('.parallax').each(function () {
                        parallax(jQuery(this), 0.1);
                    })
                }
            });

            jQuery(window).scroll(function () {
                if (jQuery('.help-info.parallax').length) {
                    jQuery('.help-info.parallax').each(function () {
                        parallax(jQuery(this), 0);
                    })
                }
            })
        }
        if ($('#slider-range').length) {
            $("#slider-range").slider({
                range: true,
                min: 0,
                max: 500,
                values: [75, 300],
                slide: function (event, ui) {
                    $("#amount").val("$" + ui.values[0]);
                    $("#amount1").val("$" + ui.values[1]);
                }
            });

            $("#amount").val("$" + $("#slider-range").slider("values", 0));
            $("#amount1").val("$" + $("#slider-range").slider("values", 1));

            $('#slider-range .ui-slider-handle:first').append(amount);
            $('#slider-range .ui-slider-handle:last').append(amount1);
        }

        // Shop Details
        $(".custom-thumbnail li img").on('click', function () {
            var thumbnail = $(this).attr("src");
            $(".product-1 img").attr("src", thumbnail)
        });

        //=========== Shopping cart value increase and decrease function ================
        $('.increase').on('click', function () {
            var value = $(this).parents('.quantity-value').find('input').val();
            value++;
            $(this).parents('.quantity-value').find('input').val(value);
        });

        $('.decrease').on('click', function () {
            var value = $(this).parents('.quantity-value').find('input').val();
            if (value > 0) {
                value--;
                $(this).parents('.quantity-value').find('input').val(value);
            }

        });


        $('.aside > section ul > li > a ').each(function () {
            if(!$(this).hasClass('remove')){
                $(this).prepend('<i class="fa fa-angle-right"></i>');
            }
        });
        	// Svg implement
 jQuery('img.svg').each(function() {
  var $img = jQuery(this);
  var imgID = $img.attr('id');
  var imgClass = $img.attr('class');
  var imgURL = $img.attr('src');

  jQuery.get(imgURL, function(data) {
   // Get the SVG tag, ignore the rest
   var $svg = jQuery(data).find('svg');

   // Add replaced image's ID to the new SVG
   if ( typeof imgID !== 'undefined') {
    $svg = $svg.attr('id', imgID);
   }
   // Add replaced image's classes to the new SVG
   if ( typeof imgClass !== 'undefined') {
    $svg = $svg.attr('class', imgClass + ' replaced-svg');
   }

   // Remove any invalid XML tags as per http://validator.w3.org
   $svg = $svg.removeAttr('xmlns:a');

   // Replace image with new SVG
   $img.replaceWith($svg);

  }, 'xml');

 });
});
//===========window scroll function========
    $(window).scroll(function () {
        if (!isMobile) {
            if ($('.parallax').length) {
                $('.parallax').each(function () {
                    parallax($(this), 0.1);
                })
            }
        }

        //Header Fix On Scroll
        var posScroll = $(window).scrollTop();
        var primaryH = $('.primary-header').outerHeight();
        if (posScroll > primaryH) {
            $('#header').addClass('fix');
        }
        else {
            $('#header').removeClass('fix');
        }
    })
//===========window Load function========
    $(window).load(function () {
        if ($('.flexslider1').length > 0) {
            $('.flexslider1').each(function () {
                $(this).flexslider({
                    animation: "slide",
                    controlNav: false
                });
            });
        }

        $('.loader-block').delay(50).fadeOut();

        if ($('#content-1').length) {
            $("#content-1").mCustomScrollbar({
                theme: "minimal"
            });
        }
        if ($('#content-2').length) {
            $("#content-2").mCustomScrollbar({
                theme: "minimal"
            });
        }
        if (!isMobile) {
            if ($('.parallax').length) {
                $('.parallax').each(function () {
                    parallax($(this), 0.1);
                })
            }
        }
        if ($('.masonry-section').length) {
            var container = document.querySelector('.masonry-section');
            var msnry = new Masonry(container, {
                itemSelector: '.blog-items'
            });
        }
        
           /*Home Page Four js*/
        $(".feedback-slider").each(function(){
            $(this).owlCarousel({
		autoPlay : false, 
		items : 1,
		itemsDesktop : [1199, 1],
		itemsDesktopSmall : [979, 1],
		itemsTablet : [768,1],
		itemsMobile : [480, 1]
            });
        });
	
        $(".transport-services-slides-four").each(function(){
            $(this).owlCarousel({
		autoPlay : false, 
		items : 3,
		itemsDesktop : [1199, 3],
		itemsDesktopSmall : [979, 3],
		itemsMobile : [480, 1]

            });
        });
        /* Home page five js */
        
        $(".feedback-5").each(function(){
            $(this).owlCarousel({
		autoPlay : false, 
		items : 2,
		itemsDesktop : [1199, 2],
		itemsDesktopSmall : [979, 2],
		itemsTablet : [768,2],
		itemsMobile : [480, 1]
            });
        });
        
        $(document).on('click', '.features-tabing li', function(){	
                $('.features-tabing li').removeClass('active');
                $(this).addClass('active');
                if($(window).width() < 768){
                        $(this).children('.tab-content').slideToggle();
                $(this).siblings('li').children('.tab-content').slideUp();
                }

        });
        
        /* Home Page Six js */
        $(".services-slides-6").each(function(){
            $(this).owlCarousel({
		autoPlay : false,
		items : 2,
		itemsDesktop : [1199, 2],
		itemsDesktopSmall : [979, 2],
		itemsTablet : [768,2],
		itemsMobile : [480, 1]

            });
        });
        
        
        $(".testimonial-tabbing-slides").each(function(){
            $(this).owlCarousel({
		autoPlay : false,
		items : 1,
		itemsDesktop : [1199, 1],
		itemsDesktopSmall : [979, 1],
		itemsTablet : [768,1],
		itemsMobile : [480, 1]
            });
        });
        
        $(document).on('click', '.testimonial-tabbing-list li',function(){
            if($(window).width() > 767){	
                $('.testimonial-tabbing-list li').removeClass('active-tab');
                $(this).addClass('active-tab');
            }
        });
        
        /* Home page Seven js */
        if ($('.bxslider').length) {
	$('.bxslider').bxSlider({
                minSlides: 2,
                maxSlides: 2,
                slideWidth: 415,
                slideMargin: 10
            });
        }
         $('.tab > div').hide();
        $('.tab > div:first').show(); 
        $('.bxslider li .features-tab').on('click',function() {
                $('.bxslider li').removeClass('active');
                $(this).parent().addClass('active');  
                var blockList = $(this).attr('data-filter');
               //alert(blockList)
       $('.tab > div').hide();
       $('#' + blockList).css({'display':'block'});
       });
       $('.bxslider li .features-tab:first-child').click(); 
       if(jQuery('.flexslider').length){ 
            jQuery('.flexslider').flexslider({
            animation: "slide"
        });
	}
       
       
       /* Home Page Eight js */
        $('.features-text-wrap > div').hide();
        $('.features-text-wrap > div:first').show();
        $('.features-icon li i').on('click',function(){
            $('.features-icon li').removeClass('active');
            $(this).parent().addClass('active'); 
            var blockList = $(this).attr('data-filter');
            $('.features-text-wrap > div').hide();
            $('#' + blockList).css({'display':'block'}); 
       }); 
       $(".testimonial-homepage-8").each(function(){
           $(this).owlCarousel({
		autoPlay : false, 
		items : 3,
		itemsDesktop : [1199, 3],
		itemsDesktopSmall : [979, 2],
		itemsMobile : [480, 1]
	});
       });
        
        
        
        
        
    });
    var parallax = function (id, val) {
        if ($(window).scrollTop() > id.offset().top - $(window).height() && $(window).scrollTop() < id.offset().top + id.outerHeight()) {
            var px = parseInt($(window).scrollTop() - (id.offset().top - $(window).height()));
            px *= -val;
            id.css({
                'background-position': 'left ' + px + 'px'
            });
        }
    };

})(jQuery);