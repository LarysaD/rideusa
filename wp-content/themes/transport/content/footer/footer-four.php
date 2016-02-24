<?php
/**
 * Transport - footer four template part
 * 
 * @package transport
 * @subpackage transport.content.header
 * @since transport 1.0.0
 * 
 */
?>
<footer class="transport-footer-three transport-footer-four" id="footer">
    <!--Footer box starts Here -->
    <?php
    $background_style = '';
    $background = ot_get_option('transport_footer_background');
    if (!empty($background)) {
        $background_style .= 'style="';
        foreach ($background as $key => $val) {
            if (!empty($val)) {
                $value = (!filter_var($val, FILTER_VALIDATE_URL) === false) ? 'url(' . $val . ')' : $val;
                $background_style .= $key . ': ' . $value . '; ';
            }
        }
        $background_style .= '"';
    }
    ?>
    <div <?php print($background_style); ?> class="footer clearfix">
        <div class="container">
            <div class="row">
                <?php
                if (is_active_sidebar('sidebar-footer-4')) {
                    dynamic_sidebar('sidebar-footer-4');
                }
                ?>  
            </div>
            <div class="row custom-row">
                <div class="col-xs-12 col-sm-5">
                    <div class="copyright">
                            <?php
                            $transport_copyright = ot_get_option('transport_copyright');
                            if (!empty($transport_copyright)): 
                                echo wp_kses($transport_copyright, wp_kses_allowed_html( 'post' ));
                            endif;
                            ?>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-7 no-wrap-mobile">
                    <div class="footer-nav">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'footer_navigation',
                            'container' => 'nav',
                            'container_id' => '',
                            'menu_class' => 'footer_navigation',
                        ));
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Footer box ends Here -->
</footer>