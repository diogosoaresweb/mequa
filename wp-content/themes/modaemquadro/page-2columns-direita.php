<?php
/**
Template Name: Page sideBar Right */
?>


<?php get_header(); ?>


<div class="pages inside">   
   <div class="rContainer">
      <div class="breadcrumbs">
	 <?php wp_custom_breadcrumbs(); ?>
      </div>
   </div>
   
   <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
   
   <div class="headPage styleDefault">
      <div class="rContainer">
	 <div class="title">
            <?php if (is_search()) { echo '<h1>PESQUISA</h1>'; } else { ?>
	  <h1>
            <?php  echo get_the_title(); ?>   
	  </h1>
          <? } ?>
	 </div>
	 <div class="info"></div>
      </div>
   </div>
    
    <div class="content two-columns-right">
        <div class="rContainer">
            <div class="block main content">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
                

    <?php endwhile; ?>
  <?php endif; ?>
</div>

<?php get_footer(); ?>