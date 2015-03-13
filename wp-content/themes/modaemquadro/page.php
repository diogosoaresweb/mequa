<?php
/**
Template Name: pageExemple */
get_header();
?>

<div class="rContainer">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="headerPage">
   <div class="contentMain">
    <h2><?php the_title(); ?></h2>
   </div>
</div>
 
<div class="pageContent page_content the_content">
  <div class="contentMain">
     <?php the_content(); ?>
  </div>
</div>
   <?php endwhile; ?>
  <?php endif; ?>

</div>

<?php get_footer(); ?>
