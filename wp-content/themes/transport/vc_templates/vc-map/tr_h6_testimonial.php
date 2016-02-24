<?php

/**
 * Transport - tr_h6_testimonial
 * 
 * This template is use by js composer plugin 
 * 
 * @package transport
 * @subpackage transport.vc_templates.vc-map
 * @since transport 1.0.0
 */
add_action( 'vc_before_init', 'tr_h6_testimonial' );

function tr_h6_testimonial() {
vc_map(array( 
    "name" => __("Transport Testimonial h6", 'transport'),
    "base" => "tr_h6_testimonial",
    "class" => "",
    "icon" => "icon-wpb-vc_extend",
    "category" => 'Content',
    "description" => __("Transport Testimonial", "transport"),
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

    )
));
}
class WPBakeryShortCode_tr_h6_testimonial extends WPBakeryShortCode { }
