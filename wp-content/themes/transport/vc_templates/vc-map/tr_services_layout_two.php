<?php

/**
 * Transport - tr_services_layout_two
 * 
 * This template is use by js composer plugin 
 * 
 * @package transport
 * @subpackage transport.vc_templates.vc-map
 * @since transport 1.0.0
 */

add_action( 'vc_before_init', 'tr_services_layout_two' );
function tr_services_layout_two(){
vc_map(array( 
    "name" => __("Transport Services Carousel Two", 'transport'),
    "base" => "tr_services_layout_two",
    "class" => "",
    "icon" => "icon-wpb-vc_extend",
    "category" => 'Content',
    "description" => __("Transport Services Carousel Two", "transport"),
    "params" => array(
         array(
            "type" => "textfield",
            "holder" => "",
            "class" => "",
            "heading" => __("Enter Main Title", 'transport'),
            "param_name" => "main_title",
            "value" => "",
            "description" => __("Section main title.", 'transport')
        ),
        array(
            "type" => "textfield",
            "holder" => "",
            "class" => "",
            "heading" => __("Enter Sub Title", 'transport'),
            "param_name" => "sub_title",
            "value" => "",
            "description" => __("Section sub title.", 'transport')
        ),
        array(
            "type" => "textfield",
            "holder" => "",
            "class" => "",
            "heading" => __("Enter No. of Slides", 'transport'),
            "param_name" => "no_slides",
            "value" => '',
            "description" => __("No. of slides.", 'transport')
        ),
    )
));
}
class WPBakeryShortCode_tr_services_layout_two extends WPBakeryShortCode { }