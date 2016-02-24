<?php
/**
 * Transport - general
 * 
 * @package transport-bundle
 * @subpackage transport-bundle.shortcode
 * @since transport_bundle 1.0.0 
 */


function checklist_wrapper($atts, $content = null) {
    return '<ul class="air-fright-cont list-wrapper-single-column">' . do_shortcode($content) . '</ul>';
}

add_shortcode('list-wrapper', 'checklist_wrapper');

function checklist_wrapper_twocolumn($atts, $content = null) {
    return '<ul class="air-fright-cont clearfix">' . do_shortcode($content) . '</ul>';
}

add_shortcode('list-wrap-two-col', 'checklist_wrapper_twocolumn');

function check_list($atts, $content = null) {
    $img_src = get_stylesheet_directory_uri() . '/assets/svg/bullet-svg.svg';
    $checklist = <<<checklist
            
        <li class = "clearfix">
<div class = "img-cont"> <img src = "{$img_src}" alt = "" class = "svg"/> </div>
<span class = "member-profile">{$content}</span> </li>
            
checklist;
    return $checklist;
}

add_shortcode('checklist', 'check_list');

function bold_link($atts, $content = null) {
    return '<strong class="page-layout-two-link">' . $content . '</strong>';
}

add_shortcode('bold-link', 'bold_link');