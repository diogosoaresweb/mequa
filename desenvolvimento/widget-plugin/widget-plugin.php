<?php
/*
Plugin Name: Widget Plugin
Plugin URI: http://www.diogosoares.com.br/
Description: Um simples plugin para adicionar widgets
Version: 1.0
Author: Diogo Soares
Author URI: http://www.diogosoares.com.br/
License: GPL2
*/
?>


<?php

class wp_my_plugin extends WP_Widget {

	
        // Controller
function __construct() {
	$widget_ops = array('classname' => 'my_widget_class', 'description' => __('Insert the plugin description here', 'wp_widget_plugin'));
	//$control_ops = array('width' => 400, 'height' => 300);
	parent::WP_Widget(false, $name = __('My Widget', 'wp_widget_plugin'), $widget_ops, $control_ops );
}

	
        // widget form creation
        function form($instance) {

            // Check values
            if( $instance) {
                 $title = esc_attr($instance['title']);
                 $text = esc_attr($instance['text']);
                 $textarea = apply_filters( 'widget_textarea', empty( $instance['textarea'] ) ? '' : $instance['textarea'], $instance );
            } else {
                 $title = '';
                 $text = '';
                 $textarea = '';
            }


?>

<p>
<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Widget Title', 'wp_widget_plugin'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
</p>

<p>
<label for="<?php echo $this->get_field_id('text'); ?>"><?php _e('Text:', 'wp_widget_plugin'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('text'); ?>" name="<?php echo $this->get_field_name('text'); ?>" type="text" value="<?php echo $text; ?>" />
</p>

<p>
<label for="<?php echo $this->get_field_id('textarea'); ?>"><?php _e('Textarea:', 'wp_widget_plugin'); ?></label>
<textarea class="widefat" id="<?php echo $this->get_field_id('textarea'); ?>" name="<?php echo $this->get_field_name('textarea'); ?>"><?php echo $textarea; ?></textarea>
</p>
<?php
}

        
        // update widget
        function update($new_instance, $old_instance) {
            $instance = $old_instance;
            // Fields
            $instance['title'] = strip_tags($new_instance['title']);
            $instance['text'] = strip_tags($new_instance['text']);
            if ( current_user_can('unfiltered_html') )
		$instance['textarea'] =  $new_instance['textarea'];
            else
		$instance['textarea'] = stripslashes( wp_filter_post_kses( addslashes($new_instance['textarea']) ) );
            return $instance;
        }        

	
        // display widget
        function widget($args, $instance) {
           extract( $args );
           // these are the widget options
            $title = apply_filters('widget_title', $instance['title']);
           $text = $instance['text'];
           $textarea = $instance['textarea'];
           echo $before_widget;
           // Display the widget
           echo '<div class="widget-text wp_widget_plugin_box">';
        
           // Check if title is set
           if ( $title ) {
              echo $before_title . $title . $after_title;
           }
        
                   // Check if text is set
           if( $text ) {
              echo '<p class="wp_widget_plugin_text">'.$text.'</p>';
           }
           // Check if textarea is set
           if( $textarea ) { echo wpautop($textarea); }
           echo '</div>';
           echo $after_widget;
        }

}


// register widget
add_action('widgets_init', create_function('', 'return register_widget("wp_my_plugin");'));


?>