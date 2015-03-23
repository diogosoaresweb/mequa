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
                  $cat = get_the_category();
                  $cat = $cat[0];
                  echo $cat->name;
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
               
               <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
               
               <div class="headerPost">
                  <h2 class="title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                  <div class="info">
                     <div class="date">Postado em <?php the_time('j \d\e\ F \d\e\ Y'); ?></div>
                     <a class="countComments" href="#">35 Comentário(s)</a>
                  </div>  
               </div>
               <div class="contentPost">
                  <?php the_content(); ?>
               </div>
               
               
               <div class="colls colls-2">
                    <div class="block first free">
                        <div class="title centerBox">
                          <h1>TAG'S</h1>
                        </div>
                        
                        <div class="">
                           
                           <?php   if ( is_active_sidebar( 'widget-posts' ) ) :
                                        dynamic_sidebar( 'widget-posts' );
                                    endif;
                            ?>
                            
                        </div>
                        
                        
                        
                        
                    </div>
                    <div class="block last free">
                        
                        <div class="title centerBox">
                          <h1>COMPARTILHE</h1>
                        </div>
                        
                    </div>
                </div>
                  
                  
    
   
                  <div id="comments">
                     <dl class="comment">
                     <dt><?php the_author(); ?></dt>
                     
                     </dl>
                  </div>
   
    
   <?php  comments_template(); ?>
   <?php endwhile; ?>
  <?php endif; ?>
  <?php posts_nav_link(' &#8212; ', __('&laquo; P&aacute;gina anterior'), __('Pr&oacute;xima p&aacute;gina &raquo;')); ?>
  
               
               
               
            </div>
            <div class="block sidebar">
	       
	       <!------- NAV CATEGORY -------->
                 <div class="colls colls-1">
                    <div class="block box">
		     
			<?php wp_nav_menu( $navDefault ); ?>
                        
                    </div>
                 </div>
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