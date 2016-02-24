<?php

/**
 * Transport - Register sidebar
 * It has theme dynamic sidebar functionality
 *  
 * @package transport
 * @subpackage transport.inc.widgets
 * @since transport 1.0.0
 */

namespace Transport\Widgets;

/**
 * Transport - register dynamic widgets
 * @since transport 1.0.0
 */
function register_sidebar() {
    
    //primary 
    \register_sidebar(array(
        'name' => __('Primary', 'transport'),
        'id' => 'sidebar-primary',
        'before_widget' => '<section class="widget %1$s %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<div class="heading"><h6>',
        'after_title' => '</h6></div>'
    ));

    //footer
    \register_sidebar(array(
        'name' => __('Footer', 'transport'),
        'id' => 'sidebar-footer',
        'before_widget' => '<section class="col-xs-12 col-sm-4 footer-widget %1$s %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<div class="quick-links"><h5>',
        'after_title' => '</h5></div>'
    ));
    
    \register_sidebar(array(
        'name' => __('Footer Three', 'transport'),
        'id' => 'sidebar-footer-3',
        'before_widget' => '<section class="col-xs-12 col-sm-4 footer-widget %1$s %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<div class="quick-links"><h5>',
        'after_title' => '</h5></div>'
    ));
    
    \register_sidebar(array(
        'name' => __('Footer Four', 'transport'),
        'id' => 'sidebar-footer-4',
        'before_widget' => '<section class="col-xs-12 col-sm-4 footer-widget %1$s %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<div class="quick-links"><h5>',
        'after_title' => '</h5></div>'
    ));
    
    \register_sidebar(array(
        'name' => __('Footer Five', 'transport'),
        'id' => 'sidebar-footer-5',
        'before_widget' => '<section class="col-xs-12 col-sm-4 footer-widget %1$s %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<div class="quick-links"><h5>',
        'after_title' => '</h5></div>'
    ));
    
    
    //page layout two
    \register_sidebar(array(
        'name' => __('Page Layout Two', 'transport'),
        'id' => 'page-layout-two',
        'before_widget' => '<div class="service-quote-wrap"> <div class="our-service-wrap">',
        'after_widget' => '</div> </div>',
        'before_title' => '<h3 class="h5">',
        'after_title' => '</h3>'
    ));
    
    //shop
    \register_sidebar(array(
        'name' => __('Shop', 'transport'),
        'id' => 'sidebar-shop',
        'before_widget' => '<section class="widget %1$s %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<div class="heading"><h6>',
        'after_title' => '</h6></div>'
    ));
}
