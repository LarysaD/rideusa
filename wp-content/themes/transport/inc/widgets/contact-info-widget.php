<?php

/**
 * Transport -  Conatct Info Widget 
 *  
 * @package transport
 * @subpackage transport.inc.widgets
 * @since transport 1.0.0
 */

namespace Transport\Widgets\ContactInfoWidget;

class Contact_Info_Widget extends \WP_Widget {

	public function __construct() {
		$widget_ops = array('classname' => 'widget_contact_info', 'description' => __('Transport Contact Information.', 'transport'));
		$control_ops = array('width' => 400, 'height' => 350);
		parent::__construct('transport_contact', __('Transport Contact Info', 'transport'), $widget_ops, $control_ops);
	}

	/**
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance ) {
		/** This filter is documented in wp-includes/default-widgets.php */
		$title = \apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base );

		/**
		 * Filter the content of the Text widget.
		 *
		 * @since 2.3.0
		 *
		 * @param string    $widget_text The widget content.
		 * @param WP_Widget $instance    WP_Widget instance.
		 */
		$text = \apply_filters( 'widget_text', empty( $instance['text'] ) ? '' : $instance['text'], $instance );
		print($args['before_widget']);
		if ( ! empty( $title ) ) {
			print($args['before_title'] . $title . $args['after_title']);
		} ?>
			<div class="textwidget">
                                <div class="our-address">
                                <div class="address">
                                     <?php if(!empty($instance['info_title']) ): ?>
                                        <h6><?php echo esc_html($instance['info_title']); ?></h6>
                                      <?php endif; ?>
                                  
                                  <address><?php echo !empty( $instance['filter'] ) ? \wpautop( $text ) : $text; ?></address>
                                  <div class="phone"> 
                                      <?php if(!empty($instance['phone']) ): ?>
                                      <span><?php esc_html_e('phone :', 'transport'); ?> <a href="tel:<?php echo str_replace(' ', '', $instance['phone']); ?>"><?php echo esc_html($instance['phone']); ?></a></span>
                                      <?php endif; ?>
                                      <?php if(!empty($instance['email']) ): ?>
                                      <span><?php esc_html_e('email :', 'transport'); ?> <a href="mailto:<?php echo esc_attr($instance['email']); ?>"><?php echo esc_html($instance['email']); ?></a></span>
                                      <?php endif; ?>
                                  </div>
                                </div>
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
		$instance['info_title'] = \strip_tags($new_instance['info_title']);
		if ( current_user_can('unfiltered_html') ) {
			$instance['text'] =  $new_instance['text'];
                }
		else {
			$instance['text'] = stripslashes( \wp_filter_post_kses( addslashes($new_instance['text']) ) ); // wp_filter_post_kses() expects slashed
                }
                $instance['filter'] = ! empty( $new_instance['filter'] );
                $instance['phone'] = strip_tags($new_instance['phone']);
                $instance['email'] = strip_tags($new_instance['email']);
		return $instance;
	}

	/**
	 * @param array $instance
	 */
	public function form( $instance ) {
		$instance = wp_parse_args( (array) $instance, array( 'title' => '', 'info_title'=> '', 'text' => '', 'phone' => '', 'email' => ''  ) );
		$title = strip_tags($instance['title']);
		$info_title = strip_tags($instance['info_title']);
		$text = esc_textarea($instance['text']);
		$phone = esc_textarea($instance['phone']);
		$email = esc_textarea($instance['email']);
                
?>
		<p><label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:', 'transport'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>" /></p>

                <p><label for="<?php echo esc_attr($this->get_field_id('info_title')); ?>"><?php esc_html_e('Contact Info Title:', 'transport'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('info_title')); ?>" name="<?php echo esc_attr($this->get_field_name('info_title')); ?>" type="text" value="<?php echo esc_attr($info_title); ?>" /></p>
                
		<p><label for="<?php echo esc_attr($this->get_field_id( 'text' )); ?>"><?php esc_html_e( 'Address Info:', 'transport' ); ?></label>
		<textarea class="widefat" rows="16" cols="20" id="<?php echo esc_attr($this->get_field_id('text')); ?>" name="<?php echo esc_attr($this->get_field_name('text')); ?>"><?php echo wp_kses($text, wp_kses_allowed_html( 'post' )); ?></textarea></p>

		<p><input id="<?php echo esc_attr($this->get_field_id('filter')); ?>" name="<?php echo esc_attr($this->get_field_name('filter')); ?>" type="checkbox" <?php checked(isset($instance['filter']) ? $instance['filter'] : 0); ?> />&nbsp;<label for="<?php echo esc_attr($this->get_field_id('filter')); ?>"><?php esc_html_e('Automatically add paragraphs', 'transport'); ?></label></p>
                
                <p><label for="<?php echo esc_attr($this->get_field_id('phone')); ?>"><?php esc_html_e('Phone No:', 'transport'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('phone')); ?>" name="<?php echo esc_attr($this->get_field_name('phone')); ?>" type="text" value="<?php echo esc_attr($phone); ?>" /></p>
                
                <p><label for="<?php echo esc_attr($this->get_field_id('email')); ?>"><?php esc_html_e('Eamil:', 'transport'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('email')); ?>" name="<?php echo esc_attr($this->get_field_name('email')); ?>" type="text" value="<?php echo esc_attr($email); ?>" /></p>
<?php
	}
} 


function widgets_init(){
    \register_widget( __NAMESPACE__.'\\Contact_Info_Widget' );
}
