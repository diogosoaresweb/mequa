<?php
/**
Template Name: Page Full */
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
    
    <div class="content one-columns">
        <div class="rContainer">
            <div class="block full content">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
                

    <?php endwhile; ?>
  <?php endif; ?>
</div>

<?php get_footer(); ?>