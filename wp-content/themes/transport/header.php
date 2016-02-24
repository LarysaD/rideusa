<?php
/**
 * Transport - header layout
 * 
 * @package transport
 * @since transport 1.0.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv='X-UA-Compatible' content='IE=edge' />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <!--Wrapper Section Start Here -->
        <?php  $transport_layout = (ot_get_option('transport_theme_layout') != "")? ot_get_option('transport_theme_layout') : "full-width"; ?>
        <div id="wrapper" class="transport-page-layout transport-page-settings <?php echo esc_attr($transport_layout); ?>">
            <!--header Section Start Here -->
            <?php do_action('transport_header'); ?>
            <!--header Section Ends Here -->
<?php             