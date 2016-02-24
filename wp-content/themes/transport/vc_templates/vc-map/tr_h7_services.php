<?php

/**
 * Transport - tr_h7_services
 * 
 * This template is use by js composer plugin 
 * 
 * @package transport
 * @subpackage transport.vc_templates.vc-map
 * @since transport 1.0.0
 */

add_action( 'vc_before_init', 'tr_h7_services' );
function tr_h7_services(){
vc_map(array( 
    "name" => __("Transport Services h7", 'transport'),
    "base" => "tr_h7_services",
    "class" => "",
    "icon" => "icon-wpb-vc_extend",
    "category" => 'Content',
    "description" => __("Transport Services h7", "transport"),
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
            "heading" => __("Enter Sevices Title", 'transport'),
            "param_name" => "services_title",
            "value" => '',
            "description" => __("Section Sevices title.", 'transport')
        ),
        array(
            "type" => "attach_image",
            "holder" => "",
            "class" => "",
            "heading" => __("Services Image", 'transport'),
            "param_name" => "image",
            "value" => '',
            "description" => __("", 'transport')
        ),
       array(
            "type" => "textfield",
            "holder" => "",
            "class" => "",
            "heading" => __("Enter services description", 'transport'),
            "param_name" => "description",
            "value" => '',
            "description" => __("Enter services description.", 'transport')
        ),
        array(
            "type" => "textfield",
            "holder" => "",
            "class" => "",
            "heading" => __("Enter buttion Title", 'transport'),
            "param_name" => "buttion_title",
            "value" => '',
            "description" => __("Section buttion title.", 'transport')
        ),
       array(
            "type" => "textfield",
            "holder" => "",
            "class" => "",
            "heading" => __("Enter buttion link", 'transport'),
            "param_name" => "buttion_link",
            "value" => '',
            "description" => __("Section buttion link.", 'transport')
        ),
        
         array(
                'type' => 'param_group',
                'value' => '',
                'param_name' => 'services',
                "params" => array(                  
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
				)
            )
            
            
    )
));
}
class WPBakeryShortCode_tr_h7_services extends WPBakeryShortCode { }
