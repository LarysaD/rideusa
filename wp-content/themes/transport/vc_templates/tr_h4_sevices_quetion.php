<?php
/**
 * Transport - tr_h4_sevices_quetion
 * 
 * This template is use by js composer plugin 
 * 
 * @package transport
 * @subpackage transport.vc_templates
 * @since transport 1.0.0
 */

    extract(shortcode_atts(array(
        'title' => '',
        'description' => '',
        'buttion_text' => '',
        'buttion_url' => '',
    ), $atts));
    
?>
          <!-- Query section starts here -->
        <div class="transport-page-settings-four">
        <div class="query">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-10">
                        <h5><?php echo esc_html($title); ?></h5>
                        <p><?php echo esc_html($description); ?></p>
                    </div>
                    <div class="col-xs-12 col-sm-2">
                        <a href="<?php echo esc_html($buttion_url); ?>" class="contact-us button"><?php echo esc_html($buttion_text); ?></a>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- Query section ends here -->
<?php
echo $this->endBlockComment('tr_h4_sevices_quetion');
