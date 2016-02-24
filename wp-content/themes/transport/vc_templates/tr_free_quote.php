<?php
/**
 * Transport - tr_free_quote
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
?>
<div class="transport-page-settings-three">
<div class="free-quote">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="quote">
                    <span><?php echo (!empty($main_title))? $main_title : esc_html__('get a free quote', 'transport');?></span>
                        <?php 
                            if(!empty($form)):
                                echo do_shortcode('[contact-form-7 id="'.$form.'" title="'.get_the_title($form).'"]');
                            endif;
                        ?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php
echo $this->endBlockComment('tr_free_quote');