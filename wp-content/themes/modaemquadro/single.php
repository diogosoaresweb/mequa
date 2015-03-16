<?php get_header(); ?>

<div class="rContainer">
 
 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="pageContent page_content the_content">
  <div class="contentMain">
   <h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
   <?php the_content(); ?>
    
   <!--
    <div id="comments">
     <dl class="comment">
      <dt><?php the_author(); ?></dt>
      <dd class="date">dia <?php the_time('j \d\e\ F \d\e\ Y'); ?></dd>
     </dl>
    </div>
   -->
    
   <?php // comments_template(); ?>
   <?php endwhile; ?>
  <?php endif; ?>
  <?php posts_nav_link(' &#8212; ', __('&laquo; P&aacute;gina anterior'), __('Pr&oacute;xima p&aacute;gina &raquo;')); ?>
  
    
  </div>
</div>
</div>  

<?php get_footer(); ?>
