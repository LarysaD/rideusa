<?php
/**
 * Transport - achivement template part
 * 
 * @package transport
 * @subpackage transport.content
 * @since transport 1.0.0
 * 
 */
?><section class="achivement container">
    <div class="heading">
        <span><?php echo esc_html(get_post_meta(get_the_ID(), 'transport_sub_title', true)); ?></span>
        <h3><?php the_title(); ?></h3>
    </div>
    <div class="progress-graph"> <i class="base-line"> </i>
        <?php
        $treetop = get_post_meta(get_the_ID(), 'tree_foot', true);
        if (!empty($treetop)):
            ?><span class="button progress-btn"> <?php echo esc_html($treetop); ?> </span><?php
        endif;

        $tree = get_post_meta(get_the_id(), 'tree_item', true);
        $count = 1;

        if (is_array($tree) && count($tree) > 0):
            foreach ($tree as $item):
                $class = (($count % 2) == 0) ? ' right' : '';
                ?>
                <article class="row">
                    <div class="col-md-6 progress-content-wrap<?php echo esc_html($class); ?>">
                        <figure> <img src="<?php echo esc_url($item['image']); ?>" alt="<?php echo esc_html($item['title']); ?>" title="<?php echo esc_html($item['title']); ?>" /> </figure>
                        <div class="progress-content">
                            <div class="heading">
                                <h5><?php echo esc_html($item['date']); ?></h5>
                            </div>
                            <h6 class="h5"><?php echo esc_html($item['title']); ?></h6>
                            <p><?php echo wp_kses($item['content'], wp_kses_allowed_html( 'post' )); ?></p>
                        </div>
                    </div>
                </article>
                <?php
                $count++;
            endforeach;
        endif;

        $treeBottom = get_post_meta(get_the_ID(), 'tree_foot', true);
        if (!empty($treeBottom)):
            ?>
            <span class="button progress-btn btm"><?php echo esc_html($treeBottom); ?></span> 
        <?php endif; ?>
    </div>
</section>
<?php 