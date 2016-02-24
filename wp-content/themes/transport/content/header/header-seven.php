<?php
/**
 * Transport - header seven template part
 * 
 * @package transport
 * @subpackage transport.content.header
 * @since transport 1.0.0
 * 
 */
?><header id="header" class="header header-layout-seven">
    <!-- primary header Start Here -->
    <div class="primary-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <?php
                    $transport_email = ot_get_option('transport_email');
                    if (!empty($transport_email)):
                        ?>
                        <ul class="link-wrap clearfix">
                            <li class="mail">
                                <img src="<?php echo TRANSPORT_THEME_URL; ?>/assets/images/homepage8-mail.png" alt="" />
                                <span><a class="email-us" href="mailto:<?php echo esc_attr($transport_email); ?>"><?php echo esc_html($transport_email); ?></a></span>
                            </li>
                        </ul>
                    <?php endif; ?>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <?php $phone_no = ot_get_option('phone_no'); ?>
                    <div class="call-us">
                        <ul>
                            <?php if (!empty($phone_no)): ?>
                                <?php $phone_no_label = ot_get_option('phone_no_label'); ?>
                                <li>
                                    <img src="<?php echo TRANSPORT_THEME_URL; ?>/assets/images/homepage8-iphone.png" alt="" />
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
    <!-- primary header Ends Here -->
    <!-- main header Starts Here -->
    <div class="main-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <?php
                    $transport_logo = ot_get_option('transport_logo');
                    $logo = (!empty($transport_logo)) ? $transport_logo : TRANSPORT_THEME_URL . '/assets/images/logo.png';
                    ?><a href="<?php echo esc_url(home_url('/')); ?>" class="logo"> <img src="<?php echo esc_url($logo); ?>" title="<?php echo esc_attr(get_bloginfo('name')); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" /> </a>

                </div>

                <div class="col-xs-12 col-sm-8 col-md-8">
                    <?php do_action('transport_nav_menu'); ?>
                    <div class="nav-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>

                </div>
                <div class="col-xs-12 col-sm-1 col-md-1">
                     <?php
                        $request_quote_label_text = ot_get_option('request_quote_label_text');
                        $request_quote_page = ot_get_option('request_quote_page');
                        $request_quote_page_url = '';
                        if (!empty($request_quote_page)):
                            $request_quote_page_url = esc_url(get_permalink($request_quote_page));
                        endif;
                        ?><a href="<?php echo (!empty($request_quote_page_url)) ? esc_url($request_quote_page_url) : 'javascript: void(0);'; ?>" class="request"><?php echo ($request_quote_label_text) ? esc_html($request_quote_label_text) : esc_html__('request a quote', 'transport'); ?></a>
                </div>

            </div>
        </div>
    </div>
</header>