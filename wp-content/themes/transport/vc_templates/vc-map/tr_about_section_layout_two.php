<?php

/**
 * Transport - tr_about_section_layout_two
 * 
 * This template is use by js composer plugin 
 * 
 * @package transport
 * @subpackage transport.vc_templates.vc-map
 * @since transport 1.0.0
 */

add_action( 'vc_before_init', 'tr_about_section_layout_two' );

function tr_about_section_layout_two(){
vc_map(array( 
    "name" => __("Transport About Section Layout Two", 'transport'),
    "base" => "tr_about_section_layout_two",
    "class" => "",
    "icon" => "icon-wpb-vc_extend",
    "category" => 'Content',
    "description" => __("Transport About Section Layout Two", "transport"), 
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
        array(
            "type" => "textarea",
            "holder" => "",
            "class" => "",
            "heading" => __("Section main content", 'transport'),
            "param_name" => "main_content",
            "value" => '',
            "description" => __("Main Content.", 'transport')
        ),
    )
));
}
class WPBakeryShortCode_tr_about_section_layout_two extends WPBakeryShortCode { } 