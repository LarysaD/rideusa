<?php

/**
 * TGM integration
 * 
 * List of plugins
 *
 * @package wptm.inc.tgm
 * @since wptm 1.0.0
 */
return array(
    array(
	'name' => __('Transport App', 'transport'),
	'slug' => 'transport-bundle',
	'source' => WPTM_PLUGIN_DIR . 'transport-bundle.zip',
	'required' => true,
	'force_activation' => true,
    ),
    array(
	'name' => __('WPBakery Visual Composer', 'transport'),
	'slug' => 'js_composer',
	'source' => WPTM_PLUGIN_DIR . 'js_composer.zip',
	'required' => true,
	'force_activation' => true,
    ), array(
	'name' => __('Revolution Slider', 'transport'),
	'slug' => 'revslider',
	'source' => WPTM_PLUGIN_DIR . 'revslider.zip',
	'required' => true,
	'force_activation' => true,
    ),
    array(
	'name' => __('Contact Form 7', 'transport'),
	'slug' => 'contact-form-7',
	'source' => WPTM_PLUGIN_DIR . 'contact-form-7.zip',
	'required' => true,
    ),
    array(
	'name' => __('Mailchimp', 'transport'),
	'slug' => 'mailchimp-for-wp',
	'source' => WPTM_PLUGIN_DIR . 'mailchimp-for-wp.zip',
	'required' => true,
    ),
    array(
	'name' => __('Woocommerce', 'transport'),
	'slug' => 'woocommerce',
	'source' => WPTM_PLUGIN_DIR . 'woocommerce.zip',
	'required' => true,
    ),
    array(
	'name' => __('Envato Market', 'transport'),
	'slug' => 'envato-market',
	'source' => WPTM_PLUGIN_DIR . 'envato-market.zip',
	'required' => true,
    ),
);
