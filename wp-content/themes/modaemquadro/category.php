<?php get_header(); ?>

<div class="headerPage">
   <div class="contentMain">
    <h2><?php echo 'BLOG'; ?></h2>
   </div>
</div>

<div id="container">
    <div class="contentMain">
 <div id="primaryContent">
 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <?php if (is_search()) { echo '<h3>Resultados da pesquisa:'; } ?>
	<h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
  <?php the_content(); ?>
  <!--
  <div class="comments">
   <dl class="status">
    <dt><a href="<?php the_permalink(); ?>"><?php comments_number('Comente aqui', 'Um coment&aacute;rio', '% coment&aacute;rios' );?></a></dt>
   </dl>
   
   <dl class="comment">
    <dt><?php the_author(); ?></dt>
    <dd class="date">dia <?php the_time('j \d\e\ F \d\e\ Y'); ?></dd>
   </dl>
   </div>
    -->
   <?php endwhile; else: ?>
    <p><?php _e('Nenhum post encontrado.'); ?></p>
  <?php endif; ?>
  <p><?php posts_nav_link(' &#8212; ', __('Pr&oacute;xima p&aacute;gina &raquo;'), __('&laquo; P&aacute;gina anterior')); ?></p>
 </div>
 </div>

<?php // get_sidebar(); ?>
<?php get_footer(); ?>
