<?php
/**
 * Auth header
 *
 * @author  WooThemes
 * @package WooCommerce/Templates/Auth
 * @version 2.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
	<meta name="viewport" content="width=device-width" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="robots" content="noindex, nofollow" />
         <?php           
         function woo_transport_wp_title($title, $sep) {
        return esc_html__('Application Authentication Request', "transport");
        }
        add_filter('wp_title', 'transport_wp_title', 12, 2); ?>
        <title><?php wp_title('|', true, 'right'); ?></title>
	<?php wp_admin_css( 'install', true ); ?>
	<link rel="stylesheet" href="<?php echo esc_url( str_replace( array( 'http:', 'https:' ), '', WC()->plugin_url() ) . '/assets/css/auth.css' ); ?>" type="text/css" />
</head>
<body class="wc-auth wp-core-ui">
	<h1 id="wc-logo"><img src="<?php echo WC()->plugin_url(); ?>/assets/images/woocommerce_logo.png" alt="WooCommerce" /></h1>
	<div class="wc-auth-content">
