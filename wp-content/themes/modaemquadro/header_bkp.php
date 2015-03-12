<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php bloginfo('name'); ?></title>
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; <?php bloginfo('charset'); ?>" />
<link rel="stylesheet" id="main_css-css" href="<?php bloginfo('stylesheet_url'); ?>" media="all" type="text/css" />
<link rel="stylesheet" id="media_css-css" href="<?php echo  get_template_directory_uri(); ?>/css/media.css?ver=4.0" type="text/css" media="">
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
<!--<link href='//fonts.googleapis.com/css?family=Open+Sans+Condensed:100,200,300,400,700,600|Open+Sans:100,200,300,400,700,600' rel='stylesheet' type='text/css' />-->
<script type="text/javascript" src="<?php echo  get_template_directory_uri(); ?>/js/jquery-2.1.0.min.js"></script>
<!-- Temporários -->
<link rel="stylesheet" href="<?php echo  get_template_directory_uri(); ?>/css/style_temp.css" media="all" type="text/css" />
<!--
<script type="text/javascript" src="<?php echo  get_template_directory_uri(); ?>/js/scripts_temp.js"></script>
-->

<!--
<script type="text/javascript" src="<?php echo  get_template_directory_uri(); ?>/js/scripts.js"></script>
-->
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div class="globalContainer">
    <div class="header">
        <div class="rContainer">
	    
	    <ul class="socialMediaBar">
		<li class="facebook"><a href="javascript:;" title="Facebook Moda Em Quadro"></a></li>
		<li class="instagram"><a href="javascript:;" title="Instagram Moda Em Quadro"></a></li>
		<li class="youtube"><a href="javascript:;" title="Youtube Moda Em Quadro"></a></li>
		<li class="twitter"><a href="javascript:;" title="Twitter Moda Em Quadro"></a></li>
		<li class="gplus"><a href="javascript:;" title="Google Plus Moda Em Quadro"></a></li>
	    </ul>
            
            <div class="logotipo">
                <a href="<?php echo get_option('home');?>/" alt="" />
                    <img src="<?php echo  get_template_directory_uri(); ?>/images/logo_modaemquadro.png" alt="<?php bloginfo('name'); ?>" width="180" height="210"   />
                </a>
            </div>
	
	<div class="contentRight">
	    <div class="contact">
		<a href="javascript:;" title="Contato">Contato</a>
	    </div>
	    <form class="search">
		<input type="submit" class="submit" value="" />
		<input type="text" name="keyword" class="keyword" placeholder="PESQUISAR..."  />
	    </form>
	</div>
	
	    <img class="julianaFoto" src="<?php echo  get_template_directory_uri(); ?>/images/julianaTopo.png" alt="Juliana Melo" />
        </div>
    </div>
    
    <div class="nav">
        <div class="rContainer">
	    <ul class="mainMenu left">
		<li class="item nav-1 first">
		    <a href="javascript:;" title="Home">HOME</a>
		</li>
		<li class="item nav-1">
		    <a href="javascript:;" title="Home">EU RECOMENDO</a>
		</li>
		<li class="item nav-1">
		    <a href="javascript:;" title="Home">MAKE EM QUADRO</a>
		</li>
		<li class="item nav-1 last">
		    <a href="javascript:;" title="Home">MODA NA REAL</a>
		</li>
	    </ul>
	    
	    <ul class="mainMenu right">
		<li class="item nav-1 first">
		    <a href="javascript:;" title="Home">HOME</a>
		</li>
		<li class="item nav-1">
		    <a href="javascript:;" title="Home">HOME</a>
		</li>
		<li class="item nav-1">
		    <a href="javascript:;" title="Home">HOME</a>
		</li>
		<li class="item nav-1 last">
		    <a href="javascript:;" title="Home">HOME</a>
		</li>
	    </ul>
        </div>
        <?php // wp_nav_menu($defaults); ?>
        <div class="clear"></div>
    </div>
    
    <div class="clear"></div>