<?php

/**
 * Transport - tr_query_section
 * 
 * This template is use by js composer plugin 
 * 
 * @package transport
 * @subpackage transport.vc_templates.vc-map
 * @since transport 1.0.0
 */

add_action( 'vc_before_init', 'tr_query_section' );
function tr_query_section(){
vc_map(array( 
    "name" => __("Transport Query Section", 'transport'),
    "base" => "tr_query_section",
    "class" => "",
    "icon" => "icon-wpb-vc_extend",
    "category" => 'Content',
    "description" => __("Transport query Section.", "transport"), 
    "params" => array(
    array(
    		"type" => "custom_markup",
    		"holder" => "",
    		"class" => "",
    		"heading" => __("Query Section: Value set by theme option ", 'transport'),
    		"param_name" => "main_content",
    		"value" => "",
    		"description" => __("This is query section value set by theme options ", 'transport')
    ),
  )
 ));
}
class WPBakeryShortCode_tr_query_section extends WPBakeryShortCode { } 