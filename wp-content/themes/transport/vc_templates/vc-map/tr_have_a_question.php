<?php

/**
 * Transport - tr_have_a_question
 * 
 * This template is use by js composer plugin 
 * 
 * @package transport
 * @subpackage transport.vc_templates.vc-map
 * @since transport 1.0.0
 */

add_action( 'vc_before_init', 'tr_have_a_question' );

function tr_have_a_question(){

    vc_map(array( 
    "name" => __("Transport Have a Question", 'transport'),
    "base" => "tr_have_a_question",
    "class" => "",
    "icon" => "icon-wpb-vc_extend",
    "category" => 'Content',
    "description" => __("Transport Have a Question", "transport"), 
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
            "heading" => __("Enter link label", 'transport'),
            "param_name" => "link_label",
            "value" => '',
            "description" => __("link label.", 'transport')
        ),
        array(
            "type" => "textfield",
            "holder" => "",
            "class" => "",
            "heading" => __("Enter link", 'transport'),
            "param_name" => "link",
            "value" => '',
            "description" => __("Link.", 'transport')
        ),
    )
));
}
class WPBakeryShortCode_tr_have_a_question extends WPBakeryShortCode { } 