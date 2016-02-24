<?php

/**
 * Transport - tr_about_section_layout_one
 * 
 * This template is use by js composer plugin 
 * 
 * @package transport
 * @subpackage transport.vc_templates.vc-map
 * @since transport 1.0.0
 */

add_action( 'vc_before_init', 'tr_about_section_layout_one' );

function tr_about_section_layout_one(){
vc_map(array( 
    "name" => __("Transport About Layout One", 'transport'),
    "base" => "tr_about_section_layout_one",
    "class" => "",
    "icon" => "icon-wpb-vc_extend",
    "category" => 'Content',
    "description" => __("Transport about section", "transport"),
    "params" => array(
        array(
            "type" => "attach_images",
            "holder" => "",
            "class" => "",
            "heading" => __("Section Image", 'transport'),
            "param_name" => "sec_image",
            "value" => '',
            "description" => __("Section image.", 'transport')
        ),
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
            "type" => "textarea",
            "holder" => "",
            "class" => "",
            "heading" => __("Content", 'transport'),
            "param_name" => "main_content",
            "value" => '',
            "description" => __("Enter Section Content.", 'transport')
        ),
        array(
            "type" => "textarea",
            "holder" => "",
            "class" => "",
            "heading" => __("Secondary Content", 'transport'),
            "param_name" => "secondary_content",
            "value" => '',
            "description" => __("Enter Secondary Content.", 'transport')
        ),
        array(
            "type" => "textfield",
            "holder" => "",
            "class" => "",
            "heading" => __("Enter Sub Heading", 'transport'),
            "param_name" => "sub_heading",
            "value" => '',
            "description" => __("Section sub heading.", 'transport')
        ),
        array(
            "type" => "textfield",
            "holder" => "",
            "class" => "",
            "heading" => __("Enter Sub Heading Description", 'transport'),
            "param_name" => "sub_heading_desc",
            "value" => '',
            "description" => __("Section sub heading Description.", 'transport')
        ),
    )
));
}
class WPBakeryShortCode_tr_about_section_layout_one extends WPBakeryShortCode { }