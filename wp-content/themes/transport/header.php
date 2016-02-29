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
        <meta name="description" content="BestRideUSA is the leading provider of non-emergency medical transportation in MA, offering a worry-free, personalized experience on time, every time.">

        <link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php wp_head(); ?>

<!-- GA CODE -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-74296229-1', 'auto');
  ga('send', 'pageview');

</script>


    </head>
    <body <?php body_class(); ?>>
        <!--Wrapper Section Start Here -->
        <?php  $transport_layout = (ot_get_option('transport_theme_layout') != "")? ot_get_option('transport_theme_layout') : "full-width"; ?>
        <div id="wrapper" class="transport-page-layout transport-page-settings <?php echo esc_attr($transport_layout); ?>">
            <!--header Section Start Here -->
            <?php do_action('transport_header'); ?>
            <!--header Section Ends Here -->
<?php             