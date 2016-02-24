<?php
/**
 * Transport - header two template part
 * 
 * @package transport
 * @subpackage transport.content.header
 * @since transport 1.0.0
 * 
 */
?><header id="header" class="header transport-page-settings-two">
    <!-- primary header Start Here -->
    <div class="primary-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-9 custom-nav">
                    <?php do_action('transport_nav_menu'); ?>
                    <div class="nav-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3">
                    <div class="social-wrap clearfix">
                        <?php
                        $transport_social_icons = ot_get_option('transport_social_icons');
                        if (!empty($transport_social_icons)):
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
                <div class="col-xs-12 col-sm-5 col-md-6">
                    <?php
                    $transport_logo = ot_get_option('transport_logo');
                    $logo = (!empty($transport_logo)) ? $transport_logo : TRANSPORT_THEME_URL . '/assets/images/logo.png';
                    ?>

                    <a href="<?php echo esc_url(home_url('/')); ?>" class="logo"> <img src="<?php echo esc_url($logo); ?>" title="<?php echo get_bloginfo('name'); ?>" alt="<?php echo get_bloginfo('name'); ?>" /> </a>

                </div>
                <div class="col-xs-12 col-sm-7 col-md-6 hidden-xs">
                    <?php $phone_no = ot_get_option('phone_no'); ?>
                    <div class="call-us">
                        <ul>
                            <?php if (!empty($phone_no)): ?>
                                <?php $phone_no_label = ot_get_option('phone_no_label'); ?>
                                <li>
                                    <img src="<?php echo esc_url(get_template_directory_uri().'/assets/images/iphone.png'); ?>" alt="" />
                                    <span class="transport"><?php echo (!empty($phone_no_label)) ? wp_kses($phone_no_label, wp_kses_allowed_html( 'post' )) : wp_kses(__('CALL US NOW FOR <br /> YOUR TRANSPORT', 'transport'), wp_kses_allowed_html( 'post' )); ?></span>
                                </li>
                            <?php endif; ?>
                            <li>
                                <a href="tel:<?php echo str_replace(' ', '', $phone_no); ?>"><?php echo esc_html($phone_no); ?></a>
                            </li>
                        </ul>
                    </div>
                    <?php
                    $request_quote_label_text = ot_get_option('request_quote_label_text');
                    $request_quote_page = ot_get_option('request_quote_page');
                    $request_quote_page_url = '';
                    if (!empty($request_quote_page)):
                        $request_quote_page_url = esc_url(get_permalink($request_quote_page));
                    endif;
                    ?> 
                    <a href="<?php echo (!empty($request_quote_page_url)) ? esc_url($request_quote_page_url) : 'javascript: void(0);'; ?>" class="request"><?php echo ($request_quote_label_text) ? esc_html($request_quote_label_text) : esc_html__('request a quote', 'transport'); ?></a>
                </div>

            </div>
        </div>
    </div>
    <!-- main header Ends Here -->
</header>
<?php 