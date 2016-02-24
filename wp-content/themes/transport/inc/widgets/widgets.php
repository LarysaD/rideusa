<?php

/**
 * Transport - Widgets Setup
 * It has theme widget setup functionality
 *  
 * @package transport
 * @subpackage transport.inc.widgets
 * @since transport 1.0.0
 */

//inclusion 
transport_inclusion('inc/widgets/register-sidebar.php');
transport_inclusion('inc/widgets/nav-menu-widget.php');
transport_inclusion('inc/widgets/contact-info-widget.php');
transport_inclusion('inc/widgets/search-widget.php');
transport_inclusion('inc/widgets/services-widget.php');
transport_inclusion('inc/widgets/quote-widget.php');

//widgets
add_action('widgets_init', "Transport\\Widgets\\register_sidebar");
add_action('widgets_init', "Transport\Widgets\\NavMenuWidget\\widgets_init");
add_action('widgets_init', "Transport\Widgets\\ContactInfoWidget\\widgets_init");
add_action('widgets_init', "Transport\Widgets\\SearchWidget\\widgets_init");
add_action('widgets_init', "Transport\\Widgets\\ServicesWidget\\widgets_init");
add_action('widgets_init', "Transport\\Widgets\\QuoteWidget\\widgets_init");


/**
 * Transport- tag cloud
 * 
 * @param array $args
 * @return array $args
 */
function transport_tag_cloud_widget($args) {
    $args['smallest'] = '12';
    $args['largest'] = '20';
    $args['unit'] = 'px';
    return $args;
}
add_filter('widget_tag_cloud_args', 'transport_tag_cloud_widget');
