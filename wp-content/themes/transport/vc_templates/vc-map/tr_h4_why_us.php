<?php

/**
 * Transport - tr_h4_why_us
 * 
 * This template is use by js composer plugin 
 * 
 * @package transport
 * @subpackage transport.vc_templates.vc-map
 * @since transport 1.0.0
 */

add_action( 'vc_before_init', 'tr_h4_why_us' );
function tr_h4_why_us(){
vc_map(array( 
    "name" => __("Transport Why Us h4", 'transport'),
    "base" => "tr_h4_why_us",
    "class" => "",
    "icon" => "icon-wpb-vc_extend",
    "category" => 'Content',
    "description" => __("Transport Services h4", "transport"),
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
			"heading" => __("Buttion text", 'transport'),
			"param_name" => "buttion_text",
			"value" => '',
			"description" => '',
		),
		 array(
			"type" => "textfield",
			"holder" => "",
			"class" => "",
			"heading" => __("Buttion url", 'transport'),
			"param_name" => "buttion_url",
			"value" => '',
			"description" => '',
		),
         array(
                'type' => 'param_group',
                'value' => '',
                'param_name' => 'why_us',
                "params" => array(
                     array(
                        "type" => "attach_images",
                        "heading" => __("Tab Icon", 'transport'),
                        "param_name" => "tab_icon",
                        "description" => __("Tab Icon.", 'transport')
                    ),
                    array(
                        "type" => "textfield",
                        "holder" => "",
                        "class" => "",
                        "heading" => __("Enter Title", 'transport'),
                        "param_name" => "title",
                        "value" => '',
                        "std" => '',
                        "description" => __("Enter Title here.", 'transport')
                    ),
                     array(
                        "type" => "textfield",
                        "holder" => "",
                        "class" => "",
                        "heading" => __("Enter Description", 'transport'),
                        "param_name" => "description",
                        "value" => '',
                        "std" => '',
                        "description" => __("Enter Description here.", 'transport')
                    ),
                )
            )

    )
));
}
class WPBakeryShortCode_tr_h4_why_us extends WPBakeryShortCode { }
