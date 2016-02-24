<?php

/**
 * Transport - tr_h7_shipping
 * 
 * This template is use by js composer plugin 
 * 
 * @package transport
 * @subpackage transport.vc_templates.vc-map
 * @since transport 1.0.0
 */

add_action( 'vc_before_init', 'tr_h7_shipping' );
function tr_h7_shipping(){
vc_map(array( 
    "name" => __("Transport Shipping h7", 'transport'),
    "base" => "tr_h7_shipping",
    "class" => "",
    "icon" => "icon-wpb-vc_extend",
    "category" => 'Content',
    "description" => __("Transport Shipping h7", "transport"),
    "params" => array(
               array(
                'type' => 'param_group',
                'value' => '',
                'param_name' => 'shipping',
                "params" => array(
                  array(
						"type" => "textfield",
						"holder" => "",
						"class" => "",
						"heading" => __("Icon Class", 'transport'),
						"param_name" => "icon",
						"value" => '',
						"description" => 'Font Awesome Icon Class ',
					),
                    array(
						"type" => "textfield",
						"holder" => "",
						"class" => "",
						"heading" => __("Enter Title", 'transport'),
						"param_name" => "title",
						"value" => '',
						"description" => __("Section title.", 'transport')
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
                     array(
                        "type" => "textfield",
                        "holder" => "",
                        "class" => "",
                        "heading" => __("Enter Buttion Text", 'transport'),
                        "param_name" => "buttion_text",
                        "value" => '',
                        "std" => '',
                        "description" => __("Enter buttion text.", 'transport')
                    ),
                     array(
                        "type" => "textfield",
                        "holder" => "",
                        "class" => "",
                        "heading" => __("Enter Buttion url", 'transport'),
                        "param_name" => "buttion_url",
                        "value" => '',
                        "std" => '',
                        "description" => __("Enter buttion url.", 'transport')
                    ),
                )
            )

    )
));
}
class WPBakeryShortCode_tr_h7_shipping extends WPBakeryShortCode { }
