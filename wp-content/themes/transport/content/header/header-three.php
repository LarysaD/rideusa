<?php
/**
 * Transport - header three template part
 * 
 * @package transport
 * @subpackage transport.content.header
 * @since transport 1.0.0
 * 
 */
?><header id="header" class="header header-layout-three">
    <!-- primary header Start Here -->
    <div class="primary-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <?php $transport_social_icons = ot_get_option('transport_social_icons'); 
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
                    
                    
                    <?php $phone_no = ot_get_option('phone_no'); ?>
                     <?php if (!empty($phone_no)): ?>
                        <div class="call">
                             <a href="tel:<?php echo str_replace(' ', '', $phone_no); ?>"> <img src="<?php echo TRANSPORT_THEME_URL; ?>/assets/images/call.png" alt="" /> <span>: <?php echo esc_html($phone_no); ?></span> </a>
                         </div> 
                     <?php endif; ?>
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
                    ?><a href="<?php echo esc_url(home_url('/')); ?>" class="logo"> <img src="<?php echo esc_url($logo); ?>" title="<?php echo get_bloginfo('name'); ?>" alt="<?php echo get_bloginfo('name'); ?>" /> </a>
                </div>
                <div class="col-xs-12 col-sm-9 custom-nav">
                    <?php do_action('transport_nav_menu'); ?>
                    <div class="nav-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- main header Ends Here -->
</header>