<?php get_header(); ?>

<div class="pages inside">
   
   <div class="rContainer">
      <div class="breadcrumbs">
	 <?php wp_custom_breadcrumbs(); ?>
      </div>
   </div>
   <div class="headPage styleDefault">
      
      <div class="rContainer">
	 <div class="title">
	  <?php if (is_search()) { echo '<h1>PESQUISA</h1>'; } else { ?>
	  <h1>
	    <?php
	       $category_id = get_query_var('cat');
	       echo get_cat_name( $category_id );
	    ?>	  
	  </h1>
	  <?php } ?>
	 </div>
	 <div class="info"></div>
      </div>
   </div>
    <div class="content two-columns-right">
        <div class="rContainer">
            <div class="block main content">
	       
	        <ul class="colls colls-2 posts">
		<?php
		if (have_posts()) : while (have_posts()) : the_post();
		  
		  if ( has_post_thumbnail() ): //Se existe uma imagem destacada inserida no post
                    
		    $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
		    
		     ?>
		    
                    <li class="coll block post">
		     <a class="img" href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
			<?php the_post_thumbnail( 'thumbnail' ); ?>
		     </a>
		     <a class="title" href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
			<h2><?php the_title(); ?></h2>
		     </a>
		     
		     <p class="date"><?php the_time('j \d\e\ F \d\e\ Y'); ?></p>
		     
		     <div class="resume-content"><?php the_content(); ?></div>
		     
                    </li>
		    
		    <?php  endif; ?>

		
		<?php endwhile; ?>
		
		
		</ul>
		
		<?php echo do_shortcode('[wpsp]'); ?>
		
		<?php else: ?>
	         <p><?php _e('Nenhum post encontrado.'); ?></p>
	       <?php endif; ?>
	       
	       
	       
	       <div id="infinite-handle"><span><button>Posts mais antigos</button></span></div>
	       
	       
		  
		  <div
		     <p><?php posts_nav_link(' &#8212; ', __('Pr&oacute;xima p&aacute;gina &raquo;'), __('&laquo; P&aacute;gina anterior')); ?></p>
		  </div>
		 
	       
	       
	    </div>
	    
	    
	    <div class="block sidebar"></div>
	</div>
    </div>
</div>