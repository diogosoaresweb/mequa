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
                     <div class="countComments" href="#"><?php echo $post->comment_count; ?> Comentário(s)</div>
                  </div>  
               </div>
               <div class="contentPost">
                  <?php the_content(); ?>
               </div>
               
               
               <div class="colls colls-2">
                    
                    <div class="boll block first free socialShare">
                        
                        <div class="title centerBox">
                          <h1>COMPARTILHE</h1>
                        </div>
                    </div>
                    
                    <div class="coll block last free tags">
                        
                        <div class="title centerBox">
                          <h1>TAG'S</h1>
                        </div>
                        
                        <div class="">
                            <?php the_tags( '<ul><li> ', '</li><li>', '</li></ul>' ); ?> 
                        </div>
                    </div>
                    
                </div>
               
               <div class="colls colls-1">
                    
                    <div class="coll block first free comments">
                        
                        <div class="title centerBox">
                          <h1>COMENTÁRIOS</h1>
                        </div>
                    </div>
                    
                    <?php  comments_template(); ?>
                    
               </div>
    
   <?php endwhile; ?>
  <?php endif; ?>
  
            </div>
            
            <div class="block sidebar">
	       
	       <!------- NAV CATEGORY -------->
                 <div class="colls colls-1 navCategory">
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