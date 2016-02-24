<?php

/**
 * Transport - tr_free_quote
 * 
 * This template is use by js composer plugin 
 * 
 * @package transport
 * @subpackage transport.vc_templates.vc-map
 * @since transport 1.0.0
 */

add_action('vc_before_init', 'tr_free_quote');

function tr_free_quote() {
    vc_map(array(
        "name" => __("Transport Free Quote", 'transport'),
        "base" => "tr_free_quote",
        "class" => "",
        "icon" => "icon-wpb-vc_extend",
        "category" => 'Content',
        "description" => __("Transport Free Quote", "transport"),
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
                "type" => "dropdown",
                "holder" => "",
                "class" => "",
                "heading" => __("Select a Form", 'transport'),
                "param_name" => "form",
                "value" => transport_select_form(),
                "description" => __("Select a Form.", 'transport')
            ),
        )
    ));
}

function transport_select_form() {
     $forms  = get_posts(array('post_type' => 'wpcf7_contact_form', 'posts_per_page' => '-1'));
    $forms_titles = array();
    foreach ($forms as $form) {
        $forms_titles[$form->post_title] = $form->ID;
    }
    return $forms_titles;
}

class WPBakeryShortCode_tr_free_quote extends WPBakeryShortCode {
    
}

