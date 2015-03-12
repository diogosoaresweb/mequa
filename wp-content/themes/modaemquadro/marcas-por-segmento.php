<?php
/**
Template Name: Marcas por Segmento */
get_header();
?>

<div class="mainContent marcas">
 <div class="headerSession breadcrumbs">
  <div class="rContainer">
	<h1><?php echo get_the_title(); ?></h1>
	<div class="description">
	 <!--
	 <a class="button" href="#">VER TODAS</a>
	-->
	 <p class="text">Marcas de <?php echo '12'; // Número de segmentos cadastrados ?> segmentos de moda.</p>
	 <p class="bigText"><?php echo '300'; // Número de Marcas Cadastradas ?></p>
	</div>
  </div>
 </div>
 
 <div class="contentSession">
  <div class="rContainer">
   <ul class="colls colls-4 genders">
	<li class="coll gender masculino">
	 <a href="<?php echo get_site_url().'/marcas/marcas-masculinas'; ?>">
	  <h2 class="title">
	   <span>MARCAS</span>
	   <br />
	   MASCULINAS
	  </h2>
	  <img src="<?php echo  get_template_directory_uri(); ?>/images/marcasMasculinas.png" alt="Marcas Masculinas" />
	 </a>
	</li>
	<li class="coll gender feminino">
	 <a href="<?php echo get_site_url().'/marcas/marcas-femininas'; ?>">
	  <h2 class="title">
	   <span>MARCAS</span>
	   <br />
	   FEMININAS
	  </h2>
	  <img src="<?php echo  get_template_directory_uri(); ?>/images/marcasFemininas.png" alt="Marcas Masculinas" />
	 </a>
	</li>
	<li class="coll gender infantil">
	 <a href="<?php echo get_site_url().'/marcas/marcas-infantis'; ?>">
	  <h2 class="title">
	   <span>MARCAS</span>
	   <br />
	   INFANTIS
	  </h2>
	  <img src="<?php echo  get_template_directory_uri(); ?>/images/marcasInfantis.png" alt="Marcas Masculinas" />
	 </a>
	</li>
	<li class="coll gender last marcasUnissex">
	 <a href="<?php echo get_site_url().'/marcas/marcas-unissex'; ?>">
	 <h2 class="title">
	   <span>MARCAS</span>
	   <br />
	   UNISSEX
	  </h2>
	  <img src="<?php echo  get_template_directory_uri(); ?>/images/marcasUnissex.png" alt="Marcas Masculinas" />
	 </a>
	</li>
   </ul>
   <div id="autoScroll" class="colls colls-4 subSessionBar">
	<h2 class="coll option todas">
	 <a href="<?php echo get_site_url().'/marcas/'; ?>">
	  <span>
	   TODAS AS<br />
	   MARCAS
	  </span>
	 </a>
	</h2>
	<div class="coll option segmentos active">
	 <a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">
	  <span>
	   MARCAS POR<br />
	   SEGMENTO
	  </span>
	 </a>
	</div>
	<div class="coll option ordemAlfabetica">
	 <a href="<?php echo get_site_url().'/marcas/ordem-alfabetica/'; ?>">
	  <span>
	   MARCAS POR <br />
	   ORDEM ALFABÉTICA
	  </span>
	  </a>
	</div>
	<div class="coll last option busca">
	 <form class="" option="">
	  <input class="keyword" type="text" placeholder="MARCAS POR BUSCA" />
	  <input type="submit" class="submit" value="" />
	 </form>
	</div>
   </div>
   
   <div class="registers">
	<ul class="grids grids-4 first">
	 <!-- Segmento--------->
	 <li class="grid first">
	  <h3>
	   <a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">SEGMENTO EXEMPLO</a>
	  </h3>
	  <ul class="gridRegisters">
	   <li class="register first"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register last"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	  </ul>
	 </li>
	 
	 <!-- Segmento--------->
	 <li class="grid">
	  <h3>
	   <a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">SEGMENTO EXEMPLO</a>
	  </h3>
	  <ul class="gridRegisters">
	   <li class="register first"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register last"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	  </ul>
	 </li>
	 
	 <!-- Segmento--------->
	 <li class="grid">
	  <h3>
	   <a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">SEGMENTO EXEMPLO</a>
	  </h3>
	  <ul class="gridRegisters">
	   <li class="register first"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register last"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	  </ul>
	 </li>
	 
	 <!-- Segmento--------->
	 <li class="grid">
	  <h3>
	   <a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">SEGMENTO EXEMPLO</a>
	  </h3>
	  <ul class="gridRegisters">
	   <li class="register first"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register last"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	  </ul>
	 </li>
	 
	 <!-- Segmento--------->
	 <li class="grid">
	  <h3>
	   <a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">SEGMENTO EXEMPLO</a>
	  </h3>
	  <ul class="gridRegisters">
	   <li class="register first"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register last"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	  </ul>
	 </li>
	 
	 <!-- Segmento--------->
	 <li class="grid">
	  <h3>
	   <a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">SEGMENTO EXEMPLO</a>
	  </h3>
	  <ul class="gridRegisters">
	   <li class="register first"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register last"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	  </ul>
	 </li>
	 
	 <!-- Segmento--------->
	 <li class="grid">
	  <h3>
	   <a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">SEGMENTO EXEMPLO</a>
	  </h3>
	  <ul class="gridRegisters">
	   <li class="register first"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register last"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	  </ul>
	 </li>
	 
	 <!-- Segmento--------->
	 <li class="grid last">
	  <h3>
	   <a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">SEGMENTO EXEMPLO</a>
	  </h3>
	  <ul class="gridRegisters">
	   <li class="register first"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	   <li class="register last"><a href="<?php echo get_site_url().'/marcas/a-marca/'; ?>">BRAND EXEMPLO</a></li>
	  </ul>
	 </li>
	 
	 
	</ul>
	
	 
   </div>
   
  </div>
 </div>
 
 
</div>
 
<?php // get_sidebar(); ?>
<?php get_footer(); ?>
