<?php
/**
 * Transport - location slider template part
 * 
 * @package transport
 * @subpackage transport.content
 * @since transport 1.0.0
 * 
 */
?><div class="location parallax">
    <div class="">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="heading"> <span><?php echo esc_html((get_post_meta(get_the_ID(), 'location_sub_title', true) != '') ? get_post_meta(get_the_ID(), 'location_sub_title', true) : esc_html__('more', 'transport')); ?></span>
                        <h3><?php echo esc_html((get_post_meta(get_the_ID(), 'location_title', true) != '') ? get_post_meta(get_the_ID(), 'location_title', true) : esc_html__('locations', 'transport')); ?></h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div id="location-slides" class="location-slider">
                    <?php
                    
                    $args=array(
                            'post_type' => 'location',  
                            'post_status' => 'publish'
                        );
                    
                    $locationQuery = new WP_Query($args);
                    
                    if ($locationQuery->have_posts()):
                        while ($locationQuery->have_posts()):
                            $locationQuery->the_post();
                            
                            ?>
                            <div class="location-slide-tab">
                                <h6><?php the_title(); ?></h6>
                                <address><?php the_content(); ?></address>
                                <?php 
                                
                                $phone = get_post_meta(get_the_ID(), 'phone', true); 
                                $eamil = get_post_meta(get_the_ID(), 'email', true); 
                                if (!empty($phone)): 
                                ?>
                                    <span class="call"><?php esc_html_e('call :', 'transport'); ?> <a href="tel:<?php echo str_replace(' ', '', $phone); ?>"><?php echo esc_html($phone); ?></a></span>
                                <?php 
                                
                                endif; 
                                if (!empty($phone)): 
                                ?>
                                    <span class="location-email"><?php esc_html_e('email :', 'transport'); ?> <a href="mailto:<?php echo esc_attr($eamil); ?>"><?php echo esc_html($eamil); ?></a></span> 
                                <?php endif; ?>
                            </div>
                            <?php
                        endwhile;
                    endif;
                    wp_reset_postdata();
                    
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 