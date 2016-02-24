<?php

/**
 * Transport - tr_h8_news
 * 
 * This template is use by js composer plugin 
 * 
 * @package transport
 * @subpackage transport.vc_templates.vc-map
 * @since transport 1.0.0
 */

add_action( 'vc_before_init', 'tr_h8_news' );

function tr_h8_news(){
vc_map(array( 
    "name" => __("Transport News h8", 'transport'),
    "base" => "tr_h8_news",
    "class" => "",
    "icon" => "icon-wpb-vc_extend",
    "category" => 'Content',
    "description" => __("Transport News", "transport"),
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
            "heading" => __("Buttion Title", 'transport'),
            "param_name" => "buttion_title",
            "value" => '',
            "description" => __("Buttion Title.", 'transport')
        ),
        array(
            "type" => "textfield",
            "holder" => "",
            "class" => "",
            "heading" => __("Buttion Url", 'transport'),
            "param_name" => "buttion_url",
            "value" => '',
            "description" => __("", 'transport')
        ),
         array(
            "type" => "textfield",
            "holder" => "",
            "class" => "",
            "heading" => __("Enter No. of items", 'transport'),
            "param_name" => "no_slides",
            "value" => '',
            "description" => __("No. of items.", 'transport')
        ),
    )
));

}
class WPBakeryShortCode_tr_h8_news extends WPBakeryShortCode { }
