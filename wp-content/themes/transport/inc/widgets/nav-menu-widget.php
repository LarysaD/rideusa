<?php

/**
 * Transport -  Nav Menu Widget 
 *  
 * @package transport
 * @subpackage transport.inc.widgets
 * @since transport 1.0.0
 */
namespace Transport\Widgets\NavMenuWidget;


class Nav_Menu_Widget extends \WP_Widget {

	public function __construct() {
		$widget_ops = array( 'description' => __('Add a transport custom menu to your sidebar.','transport') );
		parent::__construct( 'transport_nav_menu', __('Transport Custom Menu','transport'), $widget_ops );
	}

	/**
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance ) {
		// Get menu
		$nav_menu = ! empty( $instance['nav_menu'] ) ? wp_get_nav_menu_object( $instance['nav_menu'] ) : false;

		if ( !$nav_menu )
			return;

		/** This filter is documented in wp-includes/default-widgets.php */
		$instance['title'] = \apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base );

		print($args['before_widget']);

		if ( !empty($instance['title']) )
			print($args['before_title'] . $instance['title'] . $args['after_title']);

		$nav_menu_args = array(
			'fallback_cb' => '',
			'menu'        => $nav_menu
		);

		/**
		 * Filter the arguments for the Custom Menu widget.
		 *
		 * @since 4.2.0
		 *
		 * @param array    $nav_menu_args {
		 *     An array of arguments passed to wp_nav_menu() to retrieve a custom menu.
		 *
		 *     @type callback|bool $fallback_cb Callback to fire if the menu doesn't exist. Default empty.
		 *     @type mixed         $menu        Menu ID, slug, or name.
		 * }
		 * @param stdClass $nav_menu      Nav menu object for the current menu.
		 * @param array    $args          Display arguments for the current widget.
		 */
                echo '<div class="quick-list">';
		\wp_nav_menu( \apply_filters( 'widget_nav_menu_args', $nav_menu_args, $nav_menu, $args ) );
                echo '</div>';
		print($args['after_widget']);
	}

	/**
	 * @param array $new_instance
	 * @param array $old_instance
	 * @return array
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		if ( ! empty( $new_instance['title'] ) ) {
			$instance['title'] = strip_tags( stripslashes($new_instance['title']) );
		}
		if ( ! empty( $new_instance['nav_menu'] ) ) {
			$instance['nav_menu'] = (int) $new_instance['nav_menu'];
		}
		return $instance;
	}

	/**
	 * @param array $instance
	 */
	public function form( $instance ) {
		$title = isset( $instance['title'] ) ? $instance['title'] : '';
		$nav_menu = isset( $instance['nav_menu'] ) ? $instance['nav_menu'] : '';

		// Get menus
		$menus = \wp_get_nav_menus();

		// If no menus exists, direct the user to go and create some.
		?>
		<p class="nav-menu-widget-no-menus-message" <?php if ( ! empty( $menus ) ) { echo ' style="display:none" '; } ?>>
			<?php
			if ( isset( $GLOBALS['wp_customize'] ) && $GLOBALS['wp_customize'] instanceof \WP_Customize_Manager ) {
				$url = 'javascript: wp.customize.panel( "nav_menus" ).focus();';
			} else {
				$url = \admin_url( 'nav-menus.php' );
			}
			?>
			<?php echo sprintf( __( 'No menus have been created yet. <a href="%s">Create some</a>.','transport' ), esc_attr( $url ) ); ?>
		</p>
		<div class="nav-menu-widget-form-controls" <?php if ( empty( $menus ) ) { echo ' style="display:none" '; } ?>>
			<p>
				<label for="<?php echo esc_attr($this->get_field_id( 'title' )); ?>"><?php esc_html_e( 'Title:','transport' ) ?></label>
				<input type="text" class="widefat" id="<?php echo esc_attr($this->get_field_id( 'title' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'title' )); ?>" value="<?php echo esc_attr( $title ); ?>"/>
			</p>
			<p>
				<label for="<?php echo esc_attr($this->get_field_id( 'nav_menu' )); ?>"><?php esc_html_e( 'Select Menu:','transport' ); ?></label>
				<select id="<?php echo esc_attr($this->get_field_id( 'nav_menu' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'nav_menu' )); ?>">
					<option value="0"><?php _e( '&mdash; Select &mdash;', 'transport' ); ?></option>
					<?php foreach ( $menus as $menu ) : ?>
						<option value="<?php echo esc_attr( $menu->term_id ); ?>" <?php \selected( $nav_menu, $menu->term_id ); ?>>
							<?php echo esc_html( $menu->name ); ?>
						</option>
					<?php endforeach; ?>
				</select>
			</p>
		</div>
		<?php
	}
}

function widgets_init(){
     \register_widget( __NAMESPACE__.'\\Nav_Menu_Widget' );
}
