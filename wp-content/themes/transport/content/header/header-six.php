<?php
/**
 * Transport - header six template part
 * 
 * @package transport
 * @subpackage transport.content.header
 * @since transport 1.0.0
 * 
 */
?><header id="header" class="header header-layout-six">
    <!-- primary header Start Here -->
    <div class="primary-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-6">
                    <ul class="link-wrap clearfix">
                            <?php $transport_email = ot_get_option('transport_email');
                            if(!empty($transport_email)):
                            ?>
                            <li class="mail">
                            <img src="<?php echo TRANSPORT_THEME_URL; ?>/assets/images/icon-mail.png" alt="" />
                            <span><a class="email-us" href="mailto:<?php echo esc_attr($transport_email); ?>"><?php echo esc_html($transport_email); ?></a></span>
                            </li>
                            <?php endif; ?>
                        <?php $phone_no = ot_get_option('phone_no'); 
                        if(!empty($phone_no)):
                        ?>
                        <li>
                            <a href="tel:<?php echo str_replace(' ', '', esc_attr($phone_no)); ?>"> <i class="fa fa-phone-square"> </i> <?php echo esc_html($phone_no); ?> </a>
                        </li>
                        <?php endif; ?>
                        <?php $available_time = ot_get_option('available_time');
                            if(!empty($available_time)):
                        ?>
                        <li>
                            <a href="javascript: void(0)"> <i class="fa fa-clock-o"> </i> <?php echo esc_html($available_time); ?></a>
                        </li>
                        <?php endif; ?>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-6">
                    <div class="social-wrap clearfix">
                        <?php    
                        $transport_social_icons = ot_get_option('transport_social_icons'); 
                        if (is_array($transport_social_icons) && !empty($transport_social_icons)): 
                            ?>
                            <ul class="social">
                                <?php foreach ($transport_social_icons as $social): ?>
                                    <li>
                                        <a target="_blank" href="<?php echo esc_url($social['link']); ?>" title="<?php echo esc_attr($social['title']); ?>"> <i class="fa <?php echo esc_attr($social['class']); ?>"></i> </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- primary header Ends Here -->
    <!-- main header Starts Here -->
    <div class="main-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-3">
                    <?php
                    $transport_logo = ot_get_option('transport_logo');
                    $logo = (!empty($transport_logo)) ? $transport_logo : TRANSPORT_THEME_URL . '/assets/images/logo.png';
                    ?><a href="<?php echo esc_url(home_url('/')); ?>" class="logo"> <img src="<?php echo esc_url($logo); ?>" title="<?php echo esc_attr(get_bloginfo('name')); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" /> </a>
                </div>

                <div class="col-xs-12 hidden-xs col-sm-9">
                    <div class="call-us">
                        <ul>
                            <?php if (!empty($phone_no)): ?>
                                <?php $phone_no_label = ot_get_option('phone_no_label'); ?>
                                <li>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/iphone.png" alt="" />
                                    <span class="transport"><?php echo (!empty($phone_no_label)) ? wp_kses($phone_no_label, wp_kses_allowed_html( 'post' )) : wp_kses(__('CALL US NOW FOR <br /> YOUR TRANSPORT', 'transport'), wp_kses_allowed_html( 'post' )); ?></span>
                                </li>
                            <?php endif; ?>
                            <li>
                                <a href="tel:<?php echo str_replace(' ', '', esc_attr($phone_no)); ?>"><?php echo esc_html($phone_no); ?></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- secondary header Starts Here -->
    <div class="secondary-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-10 col-md-10 custom-nav">
                    <?php do_action('transport_nav_menu'); ?>
                    <div class="nav-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>

                <div class="col-md-2 col-sm-2">
                     <?php
                        $request_quote_label_text = ot_get_option('request_quote_label_text');
                        $request_quote_page = ot_get_option('request_quote_page');
                        $request_quote_page_url = '';
                        if (!empty($request_quote_page)):
                            $request_quote_page_url = esc_url(get_permalink($request_quote_page));
                        endif;
                        ?><a href="<?php echo (!empty($request_quote_page_url)) ? esc_url($request_quote_page_url) : 'javascript: void(0);'; ?>" class="request"><?php echo ($request_quote_label_text) ? esc_html($request_quote_label_text) : esc_html__('request a quote', 'transport'); ?></a> 
                </div>
                <!-- secondary header Ends Here -->
            </div>
        </div>
    </div>

    <!-- main header Ends Here -->
</header>