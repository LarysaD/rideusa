<?php

/**
 * Transport - tr_h6_about
 * 
 * This template is use by js composer plugin 
 * 
 * @package transport
 * @subpackage transport.vc_templates.vc-map
 * @since transport 1.0.0
 */

add_action( 'vc_before_init', 'tr_h6_about' );
function tr_h6_about(){
vc_map(array( 
    "name" => __("Transport About Us h6", 'transport'),
    "base" => "tr_h6_about",
    "class" => "",
    "icon" => "icon-wpb-vc_extend",
    "category" => 'Content',
    "description" => __("Transport About Us h6", "transport"),
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
            "heading" => __("Enter Sub Title", 'transport'),
            "param_name" => "sub_title",
            "value" => '',
            "description" => __("Section sub title.", 'transport')
        ),
        array(
			"type" => "attach_image",
			"holder" => "",
			"class" => "",
			"heading" => __("Image", 'transport'),
			"param_name" => "image",
			"value" => '',
			"description" => '',
		),
		 array(
			"type" => "textfield",
			"holder" => "",
			"class" => "",
			"heading" => __("Description text", 'transport'),
			"param_name" => "description",
			"value" => '',
			"description" => '',
		),

    )
));
}
class WPBakeryShortCode_tr_h6_about extends WPBakeryShortCode { }
