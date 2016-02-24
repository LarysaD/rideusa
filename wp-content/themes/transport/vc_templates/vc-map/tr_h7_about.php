<?php

/**
 * Transport - tr_h7_about
 * 
 * This template is use by js composer plugin 
 * 
 * @package transport
 * @subpackage transport.vc_templates.vc-map
 * @since transport 1.0.0
 */

add_action( 'vc_before_init', 'tr_h7_about' );
function tr_h7_about(){
vc_map(array( 
    "name" => __("Transport About Us h7", 'transport'),
    "base" => "tr_h7_about",
    "class" => "",
    "icon" => "icon-wpb-vc_extend",
    "category" => 'Content',
    "description" => __("Transport About Us h7", "transport"),
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
			"type" => "textfield",
			"holder" => "",
			"class" => "",
			"heading" => __("Description text", 'transport'),
			"param_name" => "description",
			"value" => '',
			"description" => '',
		),
        array(
			"type" => "attach_image",
			"holder" => "",
			"class" => "",
			"heading" => __("Left Image", 'transport'),
			"param_name" => "left_image",
			"value" => '',
			"description" => '',
		),
	   array(
			"type" => "attach_image",
			"holder" => "",
			"class" => "",
			"heading" => __("Right Image", 'transport'),
			"param_name" => "right_image",
			"value" => '',
			"description" => '',
		),	
		array(
			"type" => "textfield",
			"holder" => "",
			"class" => "",
			"heading" => __("Queto Description text", 'transport'),
			"param_name" => "queto_description",
			"value" => '',
			"description" => '',
		),
		array(
			"type" => "textfield",
			"holder" => "",
			"class" => "",
			"heading" => __("Queto Main Title", 'transport'),
			"param_name" => "queto_main_title",
			"value" => '',
			"description" => '',
		),
				array(
			"type" => "textfield",
			"holder" => "",
			"class" => "",
			"heading" => __("Queto Sub Title text", 'transport'),
			"param_name" => "queto_sub_title",
			"value" => '',
			"description" => '',
		),
    )
));
}
class WPBakeryShortCode_tr_h7_about extends WPBakeryShortCode { }
