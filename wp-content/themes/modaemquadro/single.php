<?php get_header(); ?>
<div id="container">
 <div id="primaryContent">
 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
  <?php the_content(); ?>
  <div id="comments">
   <dl class="comment">
    <dt><?php the_author(); ?></dt>
    <dd class="date">dia <?php the_time('j \d\e\ F \d\e\ Y'); ?></dd>
   </dl>
   </div>
   <?php comments_template(); ?>
   <?php endwhile; ?>
  <?php endif; ?>
 </div>
<?php posts_nav_link(' &#8212; ', ___('&laquo; P&aacute;gina anterior'), ___('Pr&oacute;xima p&aacute;gina &raquo;')); ?>
<?php // get_sidebar(); ?>
<?php get_footer(); ?>
