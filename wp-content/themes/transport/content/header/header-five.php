<?php
/**
 * Transport - header five template part
 * 
 * @package transport
 * @subpackage transport.content.header
 * @since transport 1.0.0
 * 
 */
?><header id="header" class="header header-layout-five">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 no-padding">
                <div class="logo-wrap">
                    <?php
                    $transport_logo = ot_get_option('transport_logo');
                    $logo = (!empty($transport_logo)) ? $transport_logo : TRANSPORT_THEME_URL . '/assets/images/logo.png';
                    ?><a href="<?php echo esc_url(home_url('/')); ?>" class="logo"> <img src="<?php echo esc_url($logo); ?>" title="<?php echo esc_attr(get_bloginfo('name')); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" /> </a>
                </div>
                <div class="nav-wrap">
                    <!-- primary header Start Here -->
                    <div class="primary-header clearfix">
                        <?php
                        $email_label_text = ot_get_option('email_label_text');
                        $transport_email = ot_get_option('transport_email');
                        ?>
                        <div class="mail">
                            <?php
                            if (!empty($transport_email)):
                                ?>
                                <img alt="" src="<?php echo TRANSPORT_THEME_URL; ?>/assets/images/icon-mail2.png">
                                <span><?php echo ($email_label_text) ? $email_label_text : esc_html__('Email us at :', 'transport'); ?> <a class="email-us" href="mailto:<?php echo esc_attr($transport_email); ?>"><?php echo esc_html($transport_email); ?></a></span>
                            <?php endif; ?>
                        </div>
                        <div class="social-wrap clearfix">
                            <?php
                            $request_quote_label_text = ot_get_option('request_quote_label_text');
                            $request_quote_page = ot_get_option('request_quote_page');
                            $request_quote_page_url = '';
                            if (!empty($request_quote_page)):
                                $request_quote_page_url = esc_url(get_permalink($request_quote_page));
                            endif;
                            ?><a href="<?php echo (!empty($request_quote_page_url)) ? esc_url($request_quote_page_url) : 'javascript: void(0);'; ?>" class="request"><?php echo ($request_quote_label_text) ? esc_html($request_quote_label_text) : esc_html__('request a quote', 'transport'); ?></a> 
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
                    <!-- primary header Ends Here -->
                    <!-- main header Starts Here -->
                    <div class="main-header">
                        <?php do_action('transport_nav_menu'); ?>
                    </div>
                    <!-- main header Ends Here -->
                </div>
            </div>
            <div class="nav-icon">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
</header>