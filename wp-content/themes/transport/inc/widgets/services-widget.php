<?php

/**
 * Transport -  Services Widget 
 *  
 * @package transport
 * @subpackage transport.inc.widgets
 * @since transport 1.0.0
 */

namespace Transport\Widgets\ServicesWidget;

class Services_Widget extends \WP_Widget {

	public function __construct() {
		$widget_ops = array('classname' => 'Services_Widget', 'description' => __('Transport Services Widget.', 'transport'));
		$control_ops = array('width' => 400, 'height' => 350);
		parent::__construct('transport_services_widget', __('Transport Service Widget', 'transport'), $widget_ops, $control_ops);
	}

	/**
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance ) {
		/** This filter is documented in wp-includes/default-widgets.php */
		$title = \apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base );

		print($args['before_widget']);
		?>
		<div class="service-quote-wrap">
                    <div class="our-service-wrap">
                      <?php
                      if (! empty( $title )) {
			print($args['before_title'] . $title . $args['after_title']);
                      }
                      ?>
                      <?php
                       $services_query = new \WP_Query(array('post_type' => 'service', 'posts_per_page' => get_option('posts_per_page')));
                        if ( $services_query->have_posts() ) : ?>
                        <ul class="our-service">
                        <?php  while ( $services_query->have_posts() ) : $services_query->the_post(); ?>
                         <li> <a href="<?php \the_permalink(); ?>"> <img src="<?php echo \get_template_directory_uri(); ?>/assets/svg/bullet-svg.svg" alt="" class="svg img-cont"/><?php \the_title(); ?></a> </li>
                        <?php endwhile; ?>
                        </ul>
                    <?php endif; \wp_reset_postdata(); ?>
                    </div>
                </div>
		<?php
		print($args['after_widget']);
	}

	/**
	 * @param array $new_instance
	 * @param array $old_instance
	 * @return array
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = \strip_tags($new_instance['title']);
		return $instance;
	}

	/**
	 * @param array $instance
	 */
	public function form( $instance ) {
		$instance = wp_parse_args( (array) $instance, array( 'title' => '') );
		$title = strip_tags($instance['title']);
                
?>
		<p><label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:', 'transport'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>" /></p>

<?php
	}
}


function widgets_init(){
    \register_widget( __NAMESPACE__.'\\Services_Widget' );
}
