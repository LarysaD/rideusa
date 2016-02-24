<?php
/**
 * Transport -  Conatct Info Widget 
 *  
 * @package transport
 * @subpackage transport.inc.widgets
 * @since transport 1.0.0
 */

namespace Transport\Widgets\QuoteWidget;

class Quote_Widget extends \WP_Widget {

    public function __construct() {
        $widget_ops = array('classname' => 'quote_widget', 'description' => __('Transport Quote Widget.','transport'));
        $control_ops = array('width' => 400, 'height' => 350);
        parent::__construct('transport_quote', __('Transport Quote', 'transport'), $widget_ops, $control_ops);
    }

    /**
     * @param array $args
     * @param array $instance
     */
    public function widget($args, $instance) {
        /** This filter is documented in wp-includes/default-widgets.php */
        $title = \apply_filters('widget_title', empty($instance['title']) ? '' : $instance['title'], $instance, $this->id_base);

        /**
         * Filter the content of the Text widget.
         *
         * @since 2.3.0
         *
         * @param string    $widget_text The widget content.
         * @param WP_Widget $instance    WP_Widget instance.
         */
        $text = \apply_filters('widget_text', empty($instance['text']) ? '' : $instance['text'], $instance);
        print($args['before_widget']);
        ?>

        <div class="service-quote-wrap">
            <div class="quote">
                <?php
                if (!empty($title)) {
                    print($args['before_title'] . $title . $args['after_title']);
                }
                ?>
                <p><?php echo wp_kses($text, wp_kses_allowed_html( 'post' )); ?></p>
                <a class="button contact-us" href="<?php echo esc_url($instance['link']); ?>"><?php echo esc_html($instance['button_label']); ?></a>
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
    public function update($new_instance, $old_instance) {
        $instance = $old_instance;
        $instance['title'] = \strip_tags($new_instance['title']);

        if (current_user_can('unfiltered_html')) {
            $instance['text'] = $new_instance['text'];
        } else {
            $instance['text'] = stripslashes(\wp_filter_post_kses(addslashes($new_instance['text']))); // wp_filter_post_kses() expects slashed
        }
        $instance['button_label'] = \strip_tags($new_instance['button_label']);
        $instance['link'] = strip_tags($new_instance['link']);
        return $instance;
    }

    /**
     * @param array $instance
     */
    public function form($instance) {
        $instance = wp_parse_args((array) $instance, array('title' => '', 'button_label' => '', 'text' => '', 'link' => ''));
        $title = strip_tags($instance['title']);
        $button_label = strip_tags($instance['button_label']);
        $text = esc_textarea($instance['text']);
        $link = esc_textarea($instance['link']);
        ?>
        <p><label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:', 'transport'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_html($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>" /></p>

        <p><label for="<?php echo esc_attr($this->get_field_id('text')); ?>"><?php esc_html_e('Content:', 'transport'); ?></label>
            <textarea class="widefat" rows="16" cols="20" id="<?php echo esc_attr($this->get_field_id('text')); ?>" name="<?php echo esc_attr($this->get_field_name('text')); ?>"><?php echo wp_kses($text, wp_kses_allowed_html( 'post' )); ?></textarea></p>

        <p><label for="<?php echo esc_attr($this->get_field_id('button_label')); ?>"><?php esc_html_e('Button lable:', 'transport'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('button_label')); ?>" name="<?php echo esc_attr($this->get_field_name('button_label')); ?>" type="text" value="<?php echo esc_attr($button_label); ?>" /></p>

        <p><label for="<?php echo esc_attr($this->get_field_id('link')); ?>"><?php esc_html_e('Link:', 'transport'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('link')); ?>" name="<?php echo esc_attr($this->get_field_name('link')); ?>" type="text" value="<?php echo esc_attr($link); ?>" /></p>
        <?php
    }

}

function widgets_init() {
    \register_widget(__NAMESPACE__ . '\\Quote_Widget');
}
