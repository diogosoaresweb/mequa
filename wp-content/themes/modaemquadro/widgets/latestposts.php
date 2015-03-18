<?php
/**
 * Zertico Widget Latest Posts
 * 
 * @author Silvio Ribeiro <silvio@zertico.com>
 * @link http://www.zertico.com/
*/
class WidgetLatestPosts extends WP_Widget {
	public function WidgetLatestPosts() { parent::WP_Widget(false, $name = 'Zertico Widget LatestPosts'); }
	public function widget($args, $instance) {
		echo $args['before_widget'];
		?>
		<div style="text-align:center;">		
			<h1><? echo $instance['title']; ?></h1>
			<? if (isset($instance['checkall']) && $instance['checkall']) {
				query_posts(array('post_type' => 'post'));
			} else {
				query_posts('showposts='.(int)$instance['quantity']);
			} ?>
			<? while (have_posts()) : the_post(); ?>
				<h2><a href="<?php the_permalink(); ?>" ><h2><?php the_title(); ?></a></h2>
			<?php endwhile; ?>
		</div>
		<? echo $args['after_widget'];
	}
	public function update($new_instance, $old_instance) {	
	    $instance = array_merge($old_instance, $new_instance);
	    $instance[ 'checkall' ] = strip_tags($new_instance[ 'checkall' ]);
	    return $instance;		
	}
	public function form($instance) {	
		$widget['title'] = $instance[ 'title' ];
		$widget['quantity'] = $instance[ 'quantity' ];
		$widget['checkall'] = esc_attr($instance[ 'checkall' ]);
		?>
		<p>
  		  <?php _e('Titulo:'); ?>
		  <label for="<?php echo $this->get_field_id('title'); ?>">
      			<input id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>"   type="text" value="<?php echo $widget['title']; ?>" /> 
	  	  </label>
		</p>
        <p>
      	  <?php _e('Número de Artigos:'); ?>
		  <label for="<?php echo $this->get_field_id('quantity'); ?>">
      			<input id="<?php echo $this->get_field_id('quantity'); ?>" name="<?php echo $this->get_field_name('quantity'); ?>"   type="text" value="<?php echo $widget['quantity']; ?>" /> 
	  	  </label>
		</p>
		<p>
      		  <?php _e('Mostrar todos posts:'); ?>
		  <label for="<?php echo $this->get_field_id('checkall'); ?>">
      			<input id="<?php echo $this->get_field_id('checkall'); ?>" name="<?php echo $this->get_field_name('checkall'); ?>" type="checkbox" value="1" <?php checked( '1', $widget['checkall'] ); ?>/> 
	  	  </label>
		</p>
		<?php	
	}
}