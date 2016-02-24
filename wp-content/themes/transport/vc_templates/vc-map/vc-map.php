<?php

/**
 * Transport - vc-map
 * 
 * This template is use by js composer plugin 
 * 
 * @package transport
 * @subpackage transport.vc_templates.vc-map
 * @since transport 1.0.0
 */

$vcmap = array(
    'tr_services_layout_one',
    'tr_services_layout_two',
    'tr_services_layout_three',
    'tr_about_section_layout_one',
    'tr_news_layout_one',
    'tr_news_layout_two',
    'tr_news_layout_three',
    'tr_testimonial_layout_one',
    'tr_testimonial_layout_two',
    'tr_have_a_question',
    'tr_features_layout_one',
    'tr_features_layout_two',
    'tr_about_section_layout_two',
    'tr_free_quote',
    'tr_feature',
    'tr_features_layout_extended',
    'tr_features_layout_two_wrap',
    'tr_features_layout_two_item',
    'tr_our_team',
    'tr_query_section',
    'tr_banner',
    'tr_simple_content',
    'tr_services_layout_four',
    'tr_services_layout_banner',
    'tr_services_layout_five',
    'tr_h4_services',
    'tr_h4_sevices_quetion',
    'tr_h4_testimonial',
    'tr_h4_why_us',
    'tr_h4_newsletter',
    'tr_h5_about_section_five',
    'tr_h5_service_tabbing',
    'tr_h5_testimonial',
    'tr_h6_about',
    'tr_h6_news',
    'tr_h6_services',
    'tr_h6_quick_offer',
    'tr_h6_testimonial',
    'tr_h7_about',
    'tr_h7_news',
    'tr_h7_quick_offer',
    'tr_h7_services',
    'tr_h7_shipping',
    'tr_h7_testimonial',
    'tr_h8_about',
    'tr_h8_news',
    'tr_h8_quick_offer',
    'tr_h8_testimonial',
);

foreach ($vcmap as $map) {
    transport_inclusion('vc_templates/vc-map/'.$map . '.php');
}