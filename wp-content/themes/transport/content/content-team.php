<?php
/**
 * Transport - contact team template part
 * 
 * @package transport
 * @subpackage transport.content
 * @since transport 1.0.0
 * 
 */
?><div class="row">
    <div class="col-md-7 col-sm-7 col-xs-12">
        <div class="heading "> 
            <span><?php echo esc_html(get_post_meta(get_the_ID(), 'transport_sub_title', true)); ?></span>
            <h3 class="h4"><?php the_title(); ?></h3>
        </div>
    </div>
    <div class="col-md-5 col-sm-5 col-xs-12">
        <div class="head-cont head-info">
            <?php the_content(); ?>
        </div>
    </div>
</div>
<?php 