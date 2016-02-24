<?php
/**
 * Transport - single service page layout
 * This page contain single service
 *
 * @package transport
 * @since transport 1.0.0
 */
get_header();
?>
<div class="common-page comment-drop-box">
    <?php do_action("transport_banner", get_the_title()); ?>
    <!--Section area starts Here -->
    <section id="section">
        <!--Section box starts Here -->
        <div class="section">
            <div class="blog">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="heading top-heading">
                                <span><?php esc_html_e('our', 'transport'); ?></span>
                                <h3><?php echo esc_html(get_the_title()); ?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                            <?php
                            if (have_posts()) :
                                while (have_posts()) :
                                    the_post();
                                    ?>
                                    <div <?php post_class('blog-text'); ?>>
                                        <div class="user-blog ">
                                            <?php
                                            $url = wp_get_attachment_url(get_post_thumbnail_id());
                                            if (esc_url($url)):
                                                ?>
                                                <div class="blog-banner ">
                                                    <img alt="" src="<?php echo apply_filters('transport_image_resize', $url, '1140', '361'); ?>">
                                                </div>
                                                <?php
                                            endif;
                                            ?>
                                            <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                                            <div class="post-content">
                                                <?php
                                                the_content();
                                                wp_link_pages();
                                                ?>
                                            </div>
                                            <div class="post-content">
                                                <div class="services-page">
                                                <div class="more-services ">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-xs-12 col-sm-3">
                                                                <div class="heading">
                                                                    <?php
                                                                    $sub_title = get_post_meta(get_the_id(), 'services_slider_sub_title', true);
                                                                    $title = get_post_meta(get_the_id(), 'services_slider_title', true);
                                                                    ?>
                                                                    <span><?php echo esc_html((!empty($sub_title)) ? $sub_title : __('more', 'transport') ); ?></span>
                                                                    <h3><?php echo esc_html((!empty($title)) ? $title : __('services', 'transport') ); ?></h3>
                                                                </div>
                                                                <p><?php echo wp_kses(get_post_meta(get_the_id(), 'services_slider_description', true), wp_kses_allowed_html('post')); ?></p>
                                                            </div>
                                                            <div class="col-xs-12 col-sm-9">
                                                                <div id="more-slides" class="more-slides">
                                                                    <?php
                                                                    $services_query = new WP_Query(array('post_type' => 'service', 'post_status' => 'publish'));
                                                                    if ($services_query->have_posts()) :
                                                                        while ($services_query->have_posts()) :
                                                                            $services_query->the_post();
                                                                            ?>
                                                                            <div class="more-tab zoom">
                                                                                <?php $thumbnail_id = get_post_thumbnail_id(); ?>
                                                                                    <?php if($thumbnail_id): ?>
                                                                                    <figure>
                                                                                        <a href="<?php the_permalink(); ?>"><img src="<?php echo apply_filters('transport_image_resize', wp_get_attachment_url($thumbnail_id), '262', '186'); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" /></a>
                                                                                    </figure>
                                                                                <?php endif; ?>
                                                                                
                                                                                <div class="more-text">
                                                                                    <h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                                                                                </div>
                                                                            </div>
                                                                            <?php
                                                                        endwhile;
                                                                    endif;
                                                                    ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <?php
                            endwhile;
                            if (comments_open() || get_comments_number()) :
                                comments_template();
                            endif;
                        else:
                            get_template_part('content/none');
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <?php do_action('transport_query_section'); ?> 
<!--Section box ends Here -->
</section>
<!--Section area ends Here -->
</div>
<?php
get_footer();
