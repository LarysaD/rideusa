<?php

/**
 * Transport - tr_banner
 * 
 * This template is use by js composer plugin 
 * 
 * @package transport
 * @subpackage transport.vc_templates.vc-map
 * @since transport 1.0.0
 */

add_action( 'vc_before_init', 'tr_banner' );

function tr_banner(){
vc_map(array( 
    "name" => __("Transport Banner Section", 'transport'),
    "base" => "tr_banner",
    "class" => "",
    "icon" => "icon-wpb-vc_extend",
    "category" => 'Content',
    "description" => __("Transport Banner Section.", "transport"), 
    "params" => array(
        array(
            "type" => "attach_images",
            "holder" => "",
            "class" => "",
            "heading" => __("Section Image", 'transport'),
            "param_name" => "content_image",
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
            "heading" => __("Enter button label", 'transport'),
            "param_name" => "link_label",
            "value" => '',
            "description" => __("Button label.", 'transport')
        ),
        array(
            "type" => "textfield",
            "holder" => "",
            "class" => "",
            "heading" => __("Enter button link", 'transport'),
            "param_name" => "link",
            "value" => '',
            "description" => __("Button Link.", 'transport')
        ),
        )
));
}
class WPBakeryShortCode_tr_banner extends WPBakeryShortCode { } 