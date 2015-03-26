<?php
/**
Template Name: Contatos
*/
?>

<?php get_header(); ?>


<div class="pages inside sobre-juliana">   
   <div class="rContainer">
      <div class="breadcrumbs">
	 <?php wp_custom_breadcrumbs(); ?>
      </div>
   </div>
   <div class="headPage styleDefault">
      <div class="rContainer">
	 <div class="title">
	  <h1>
            <?php
                  echo get_the_title();
            ?>   
	  </h1>
	 </div>
	 <div class="info"></div>
      </div>
   </div>
    <div class="content one-columns">
        <div class="rContainer">
            <div class="block full content">
                
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>