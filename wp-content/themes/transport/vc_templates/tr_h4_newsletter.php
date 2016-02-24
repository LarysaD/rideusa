<?php
/**
 * Transport - tr_h4_newsletter
 * 
 * This template is use by js composer plugin 
 * 
 * @package transport
 * @subpackage transport.vc_templates
 * @since transport 1.0.0
 */
extract(shortcode_atts(array(
    'main_title' => '',
    'form' => '',
                ), $atts));
?><div class="transport-page-settings-four">
    <div class="newsletter">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <span> <i class="fa fa-envelope-o"></i><?php echo esc_html($main_title); ?></span>
                </div>
                <div class="col-xs-12 col-sm-8 col-md-9">
                    <?php
                    if (!empty($form)):
                        echo do_shortcode('['.$form.']');
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
echo $this->endBlockComment('tr_h4_newsletter');