<?php
/**
 * Transport - header four template part
 * 
 * @package transport
 * @subpackage transport.content.header
 * @since transport 1.0.0
 * 
 */
?><header id="header" class="header header-layout-four">
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