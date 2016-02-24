<?php
/**
 * Template Name: Coming Soon
 * 
 * This is coming soon page template layout 
 * 
 * @package transport
 * @since transport 1.0.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class('construct-bg parallax'); ?> style="background-image: url(<?php echo ot_get_option('coming_soon_background'); ?>);">
        <!--Wrapper Section Start Here -->
        <div id="wrapper" class="transport-page-layout common-page about-us-page about"> 
            <!--Content Section starts Here -->
            <div id="content">
                <div class="container">
                    <div class="contruction-wrap">
                        <section class="title-bar">
                            <div class="title-bar-img">
                                <?php
                                $transport_logo = ot_get_option('coming_soon_logo');
                                $logo = (!empty($transport_logo)) ? $transport_logo : TRANSPORT_THEME_URL . '/assets/images/coming-soon-logo.png';
                                ?>
                                <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo get_bloginfo('name'); ?>">
                                    <img src="<?php echo esc_url($logo); ?>" alt="<?php echo get_bloginfo('name'); ?>"/>
                                </a>
                            </div>
                            <div class="title">
                                <?php
                                $title = esc_html(ot_get_option('coming_soon_title'));
                                $titleheading = (!empty($title)) ? $title : esc_html__('under construction', 'transport');
                                ?>
                                <h1><?php echo esc_html($titleheading); ?></h1>
                            </div>
                        </section>
                        <section class="new-way-cont clearfix">
                            <div class="new-way-head">
                                <h2><?php echo esc_html(ot_get_option('coming_soon_description')); ?></h2>
                            </div>
                            <div id="countdown">
                                <?php
                                wp_enqueue_script('transport.count-down');
                                ?>
                            </div>
                        </section>
                        <div class="contact-details clearfix"> 
                            <?php
                            $phone = ot_get_option('coming_soon_phone');
                            if (!empty($phone)):
                                ?><a href="tel:<?php echo str_replace(' ', '', $phone); ?>" class="contact"> <i class="fa fa-mobile"> </i><?php echo esc_html($phone); ?></a>
                                <?php
                            endif;

                            $email = ot_get_option('coming_soon_email');
                            if (!empty($email)):
                                ?><a href="mailto:<?php echo esc_attr($email); ?>" class="mail"><?php echo esc_html($email); ?></a> 
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>

            <!--Content Section ends Here --> 
        </div>
        <!--Wrapper Section Ends Here --> 
        <?php
        wp_footer();
        ?>
    </body>
</html>