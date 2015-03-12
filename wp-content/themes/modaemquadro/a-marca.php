<?php
/**
Template Name: A Marca */
get_header();
?>

<div id="autoScroll" class="mainContent marcas aMarca">
 <div class="headerSession breadcrumbs <?php echo 'breadcrumbsImg'; //Caso o post tenha "Imagem Destacada" cadastrada, ele incluirá classe "breadcrumbsImg", e colocará a imagem destacada como background do objeto. ?>" style="background:url('<?php echo  get_template_directory_uri(); ?>/images/brand_exemple.jpg') fixed !important;">
  <div class="rContainer">
	<h1>MARCAS</h1>
	<div class="description">
	 <p class="bigText">/KOKID</p>
	</div>
  </div>
 </div>
 
 <div class="contentSession">
  <div class="rContainer">
   
   <ul class="colls colls-4 dadosMarca">
	 <li class="coll first dados">
	  <p class="infor">
	   <span class="title">LOCALIZAÇÃO:</span>
	   MART 1 - Lojas 21 e 22
	 </p>
	 </li>
	 <li class="coll dados">
	  <p class="infor">
	   <span class="title">MÍNIMO POR PEDIDO:</span>
	  12 PEÇAS
	 </li>
	 <li class="coll dados">
	  <p class="infor">
	   <span class="title">FORMAS DE PAGAMENTO:</span>
	   BOLETO -  DEPÓSITO - CARTÕES
	 </li>
	 <li class="coll last dados bann">
	  <a href="#"><img src="<?php echo  get_template_directory_uri(); ?>/images/contactBrand.png" alt="" /></a>
	 </li>
   </ul>
   <div class="contentPage">
	
	<p>
	 Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
	</p>
	
	<h4>CATÁLOGO "INVERNO COLORIDO 2014"</h4>
	<ul class="colls colls-4 gallery">
	 <li class="coll first"><a href="#"><img src="<?php echo  get_template_directory_uri(); ?>/images/catalogo-exemple.jpg" /></a></li>
	 <li class="coll"><a href="#"><img src="<?php echo  get_template_directory_uri(); ?>/images/catalogo-exemple.jpg" /></a></li>
	 <li class="coll"><a href="#"><img src="<?php echo  get_template_directory_uri(); ?>/images/catalogo-exemple.jpg" /></a></li>
	 <li class="coll"><a href="#"><img src="<?php echo  get_template_directory_uri(); ?>/images/catalogo-exemple.jpg" /></a></li>
	 <li class="coll"><a href="#"><img src="<?php echo  get_template_directory_uri(); ?>/images/catalogo-exemple.jpg" /></a></li>
	 <li class="coll"><a href="#"><img src="<?php echo  get_template_directory_uri(); ?>/images/catalogo-exemple.jpg" /></a></li>
	 <li class="coll"><a href="#"><img src="<?php echo  get_template_directory_uri(); ?>/images/catalogo-exemple.jpg" /></a></li>
	 <li class="coll"><a href="#"><img src="<?php echo  get_template_directory_uri(); ?>/images/catalogo-exemple.jpg" /></a></li>
	 <li class="coll"><a href="#"><img src="<?php echo  get_template_directory_uri(); ?>/images/catalogo-exemple.jpg" /></a></li>
	 <li class="coll"><a href="#"><img src="<?php echo  get_template_directory_uri(); ?>/images/catalogo-exemple.jpg" /></a></li>
	</ul>
   </div>
   
   
  </div>
 </div>
 
 
</div>
 
<?php // get_sidebar(); ?>
<?php get_footer(); ?>
