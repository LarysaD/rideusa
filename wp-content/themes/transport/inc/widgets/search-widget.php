<?php

/**
 * Transport -  Search Widget 
 *  
 * @package transport
 * @subpackage transport.inc.widgets
 * @since transport 1.0.0
 */

namespace Transport\Widgets\SearchWidget;

class Widget_Search extends \WP_Widget {

	public function __construct() {
		$widget_ops = array('classname' => 'transport_widget_search', 'description' => __( "A search form for your site.", 'transport') );
		parent::__construct( 'transport_search', __( 'Transport Search', 'transport' ), $widget_ops );
	}

	/**
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance ) {
		/** This filter is documented in wp-includes/default-widgets.php */
		$title = \apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base );

		print($args['before_widget']);
		if ( $title ) {
			print($args['before_title'] . $title . $args['after_title']);
		}

		// Use current theme search form if it exists
		//get_search_form(); ?>
                <form role="search" method="get"  class="search-box" action="<?php echo \home_url( '/' ); ?>">
                        <input type="text" placeholder="Search" id="search" value="<?php echo \get_search_query() ?>" name="s">
                        <input type="submit" value="">
                </form>
                <?php
		print($args['after_widget']);
	}

	/**
	 * @param array $instance
	 */
	public function form( $instance ) {
		$instance = \wp_parse_args( (array) $instance, array( 'title' => '') );
		$title = $instance['title'];
?>
		<p><label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:', 'transport'); ?> <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_html($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>" /></label></p>
<?php
	}

	/**
	 * @param array $new_instance
	 * @param array $old_instance
	 * @return array
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$new_instance = \wp_parse_args((array) $new_instance, array( 'title' => ''));
		$instance['title'] = strip_tags($new_instance['title']);
		return $instance;
	}

}


function widgets_init(){
    \register_widget( __NAMESPACE__.'\\Widget_Search' );
}
