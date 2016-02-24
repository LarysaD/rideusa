<?php

/**
 * Transport - tr_news_layout_three
 * 
 * This template is use by js composer plugin 
 * 
 * @package transport
 * @subpackage transport.vc_templates.vc-map
 * @since transport 1.0.0
 */

add_action( 'vc_before_init', 'tr_news_layout_three' );

function tr_news_layout_three(){
vc_map(array( 
    "name" => __("Transport News Layout Three", 'transport'),
    "base" => "tr_news_layout_three",
    "class" => "",
    "icon" => "icon-wpb-vc_extend",
    "category" => 'Content',
    "description" => __("Transport News Layout Three", "transport"),
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
            "heading" => __("Enter No. of items", 'transport'),
            "param_name" => "no_slides",
            "value" => '',
            "description" => __("No. of items.", 'transport')
        ),
    )
));

}
class WPBakeryShortCode_tr_news_layout_three extends WPBakeryShortCode { }