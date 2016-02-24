<?php

/**
 * Transport - tr_services_layout_banner
 * 
 * This template is use by js composer plugin 
 * 
 * @package transport
 * @subpackage transport.vc_templates.vc-map
 * @since transport 1.0.0
 */

add_action('vc_before_init', 'tr_services_layout_banner');

function tr_services_layout_banner() {

    vc_map(array(
        "name" => __("Transport Services Banner Layout", 'transport'),
        "base" => "tr_services_layout_banner",
        "class" => "",
        "icon" => "icon-wpb-vc_extend",
        "category" => 'Content',
        "description" => __("Transport Services Banner Layout", "transport"),
        "params" => array(
            array(
                "type" => "attach_image",
                "holder" => "",
                "class" => "",
                "heading" => __("Upload Banner Image", 'transport'),
                "param_name" => "banner_img",
                "value" => '',
                "description" => __("Banner Image.", 'transport')
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
                "type" => "textarea",
                "holder" => "",
                "class" => "",
                "heading" => __("Enter Description", 'transport'),
                "param_name" => "desc",
                "value" => '',
                "description" => __("Section Description", 'transport')
            ),
            array(
                "type" => "textfield",
                "holder" => "",
                "class" => "",
                "heading" => __("Enter Button Text", 'transport'),
                "param_name" => "btn_text",
                "value" => '',
                "description" => __("View More Button.", 'transport')
            ),
            array(
                "type" => "textfield",
                "holder" => "",
                "class" => "",
                "heading" => __("Enter Button Link", 'transport'),
                "param_name" => "btn_link",
                "value" => '',
                "description" => __("View More Button Link.", 'transport')
            ),
        )
    ));
}

class WPBakeryShortCode_tr_services_layout_banner extends WPBakeryShortCode {
    
}

