<?php

/**
 * Transport - tr_h4_sevices_quetion
 * 
 * This template is use by js composer plugin 
 * 
 * @package transport
 * @subpackage transport.vc_templates.vc-map
 * @since transport 1.0.0
 */

add_action( 'vc_before_init', 'tr_h4_sevices_quetion' );
function tr_h4_sevices_quetion(){
vc_map(array( 
    "name" => __("Transport Question h4", 'transport'),
    "base" => "tr_h4_sevices_quetion",
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
            "param_name" => "title",
            "value" => '',
            "description" => __("Section title.", 'transport')
        ),
        array(
            "type" => "textfield",
            "holder" => "",
            "class" => "",
            "heading" => __("Enter description", 'transport'),
            "param_name" => "description",
            "value" => '',
            "description" => __("Enter description.", 'transport')
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


    )
));
}
class WPBakeryShortCode_tr_h4_sevices_quetion extends WPBakeryShortCode { }
