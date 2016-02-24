<?php

/**
 * Transport - tr_h4_newsletter
 * 
 * This template is use by js composer plugin 
 * 
 * @package transport
 * @subpackage transport.vc_templates.vc-map
 * @since transport 1.0.0
 */

add_action( 'vc_before_init', 'tr_h4_newsletter' );
function tr_h4_newsletter(){
vc_map(array( 
    "name" => __("Transport News Letter h4", 'transport'),
    "base" => "tr_h4_newsletter",
    "class" => "",
    "icon" => "icon-wpb-vc_extend",
    "category" => 'Content',
    "description" => __("Transport News Letter h4", "transport"),
    "params" => array(
         array(
            "type" => "textfield",
            "holder" => "",
            "class" => "",
            "heading" => __("Enter Main Title", 'transport'),
            "param_name" => "main_title",
            "value" => '',
            "description" => __("Section main title.", 'transport')
        ),
        array(
            "type" => "textfield",
            "holder" => "",
            "class" => "",
            "heading" => __("Enter Form Shortcode Name", 'transport'),
            "param_name" => "form",
            "value" => '',
            "description" => __("NewsLetter Form Shortcode.", 'transport')
        ),
	
    )
));
}
class WPBakeryShortCode_tr_h4_newsletter extends WPBakeryShortCode { }
