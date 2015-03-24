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
	    TAG'S:
	    <?php
	       echo single_tag_title('', false);
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
	       
	        <ul id="content" class="colls colls-2 posts">
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
		     
		     <div class="resume-content"><?php the_excerpt(); ?></div>
		     
                    </li>
		    
		    <?php  endif; ?>

		
		<?php endwhile; ?>
		
		
		</ul>

		
		<?php else: ?>
	         <p><?php _e('Nenhum post encontrado.'); ?></p>
	       <?php endif; ?>
	       
	       
	       
	       
	       
		  
		  <div class="navPages" id="nav-below">
		     <p><?php posts_nav_link(' &#8212; ', __('Pr&oacute;xima p&aacute;gina &raquo;'), __('&laquo; P&aacute;gina anterior')); ?></p>
		  </div>
		 
		 
	       
	       
	    </div>
	    
	    
	    <div class="block sidebar">
	       <div class="colls colls-1">
                    <div class="block box">
	       
			   <?php dynamic_sidebar(); ?>
		     </div>
                 </div>    
	       
	       <!------- NAV CATEGORY -------->
                 <!--<div class="colls colls-1">
                    <div class="block box">
		     
			<?php // wp_nav_menu( $navDefault ); ?>
                        
                    </div>
                 </div>-->
                <!------- NAV CATEGORY - FIM-------->
       
                <!----- SEARCH------ -->
                <div class="colls colls-1 search">
                    <div class="block box-free hLines">
                        <div class="title icon">
                            <h1>PESQUISE MAT&Eacute;RIAS</h1>
                        </div>
                        <div class="form">
                            <form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
                                <input type="text" name="s" id="s" class="text" placeholder="O QUE VOCÊ EST&Aacute; PROCURANDO?" />
                                <input type="submit" id="searchsubmit" class="submit" value=""/>
                            </form>
                        </div>
                    </div>
                </div>
		<!----- SEARCH------ FIM -->
		
		<!----- PUBLICIDADE------ -->
		<div class="colls colls-1 publicidade box">
                    <div class="block box">
                           <!-- <h1>PUBLICIDADE</h1>-->
                           <?php
                            if(function_exists( 'wp_bannerize' ))
                            wp_bannerize( 'group=homeQuad' );
                           ?>
                    </div>
                </div>
		
		<!----- PUBLICIDADE ------ FIM -->
                
		<!----- NEWSLETTER------ -->
                
                <div class="colls colls-1 newsletter">
                    <div class="block box-free hLines">
                        
                        <div class="title icon">
                            <h1>RECEBA NOVIDADES</h1>
                        </div>
                        <div class="form">
                            
                            <?php
                        
                                $widgetNL = new WYSIJA_NL_Widget(true);
                                echo $widgetNL->widget(array('form' => 1, 'form_type' => 'php'));
                        
                            ?>
                            
                        </div>
                    </div>
                </div>
		<!----- NEWSLETTER ------ FIM -->
		
	       
	    </div>
	</div>
    </div>
</div>
<?php get_footer(); ?>