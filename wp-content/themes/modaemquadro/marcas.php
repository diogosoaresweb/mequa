
<?php
/**
Template Name: Marcas */
get_header();
?>






<div id="autoScroll" class="mainContent marcas">
    <div class="headerSession breadcrumbs">
        <div class="rContainer">
            <h1><?php echo get_the_title(); ?></h1>
            <div class="description">
                <!--
                <a class="button" href="#">VER TODAS</a>
                -->
                <p class="text">Marcas de <?php echo '12'; // Número de segmentos cadastrados  ?> segmentos de moda.</p>
                <p class="bigText"><?php echo '300'; // Número de Marcas Cadastradas  ?></p>
            </div>
        </div>
    </div>

    <div class="contentSession">
        <div class="rContainer">
            <ul class="colls colls-4 genders">
                
                 <?php  
                    // Argumentos para filtrar categorias das marcas
                    $args = array(
                        'type'                     => 'post',
                        'child_of'                 => 9,
                        'orderby'                  => 'name',
                        'hide_empty'               => 0,
                        'hierarchical'             => 1,
                        'taxonomy'                 => 'category_brands',
                        'pad_counts'               => false 
                    );
                    // Filtra as categorias de acordo com os filtros
                    $categories = get_categories($args);
                    foreach ($categories as $cat):
                      
                ?>
                    <li class="coll gender <?php echo $cat->slug ?>">
                        <a href="<?php echo get_site_url() . 'category_brands/' . $cat->slug; ?>">
                            <h2 class="title">
                                <span>MARCAS</span>
                                <br />
                                <?php echo strtoupper($cat->name) ?>
                            </h2>
                            <img src="<?php echo z_taxonomy_image_url($cat->term_id) ?>" alt="<?php echo $cat->name ?>" />
                        </a>
                    </li>
                
                <?php endforeach; ?>
            </ul>
            <div class="colls colls-4 subSessionBar">
                <h2 class="coll option todas active">
                    <a href="<?php echo get_site_url() . '/marcas/'; ?>">
                        <span>
                            TODAS AS<br />
                            MARCAS
                        </span>
                    </a>
                </h2>
                <div class="coll option segmentos">
                    <a href="<?php echo get_site_url() . '/marcas/segmentos/'; ?>">
                        <span>
                            MARCAS POR<br />
                            SEGMENTO
                        </span>
                    </a>
                </div>
                <div class="coll option ordemAlfabetica">
                    <a href="<?php echo get_site_url() . '/marcas/ordem-alfabetica/'; ?>">
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
                <ul class="colls colls-4 list first">
                    <li class="coll register first">
                        <a href="<?php echo get_site_url() . '/marcas/a-marca/'; ?>">BRAND EXEMPLE</a>
                    </li>
                    <li class="coll register">
                        <a href="<?php echo get_site_url() . '/marcas/a-marca/'; ?>">BRAND EXEMPLE</a>
                    </li>
                    <li class="coll register">
                        <a href="<?php echo get_site_url() . '/marcas/a-marca/'; ?>">BRAND EXEMPLE</a>
                    </li>
                    <li class="coll register last">
                        <a href="<?php echo get_site_url() . '/marcas/a-marca/'; ?>">BRAND EXEMPLE</a>
                    </li>
                </ul>

                <ul class="colls colls-4 list">
                    <li class="coll register first">
                        <a href="<?php echo get_site_url() . '/marcas/a-marca/'; ?>">BRAND EXEMPLE</a>
                    </li>
                    <li class="coll register">
                        <a href="<?php echo get_site_url() . '/marcas/a-marca/'; ?>">BRAND EXEMPLE</a>
                    </li>
                    <li class="coll register">
                        <a href="<?php echo get_site_url() . '/marcas/a-marca/'; ?>">BRAND EXEMPLE</a>
                    </li>
                    <li class="coll register last">
                        <a href="<?php echo get_site_url() . '/marcas/a-marca/'; ?>">BRAND EXEMPLE</a>
                    </li>
                </ul>


                <ul class="colls colls-4 list">
                    <li class="coll register first">
                        <a href="<?php echo get_site_url() . '/marcas/a-marca/'; ?>">BRAND EXEMPLE</a>
                    </li>
                    <li class="coll register">
                        <a href="<?php echo get_site_url() . '/marcas/a-marca/'; ?>">BRAND EXEMPLE</a>
                    </li>
                    <li class="coll register">
                        <a href="<?php echo get_site_url() . '/marcas/a-marca/'; ?>">BRAND EXEMPLE</a>
                    </li>
                    <li class="coll register last">
                        <a href="<?php echo get_site_url() . '/marcas/a-marca/'; ?>">BRAND EXEMPLE</a>
                    </li>
                </ul>

                <ul class="colls colls-4 list">
                    <li class="coll register first">
                        <a href="<?php echo get_site_url() . '/marcas/a-marca/'; ?>">BRAND EXEMPLE</a>
                    </li>
                    <li class="coll register">
                        <a href="<?php echo get_site_url() . '/marcas/a-marca/'; ?>">BRAND EXEMPLE</a>
                    </li>
                    <li class="coll register">
                        <a href="<?php echo get_site_url() . '/marcas/a-marca/'; ?>">BRAND EXEMPLE</a>
                    </li>
                    <li class="coll register last">
                        <a href="<?php echo get_site_url() . '/marcas/a-marca/'; ?>">BRAND EXEMPLE</a>
                    </li>
                </ul>

                <ul class="colls colls-4 list">
                    <li class="coll register first">
                        <a href="<?php echo get_site_url() . '/marcas/a-marca/'; ?>">BRAND EXEMPLE</a>
                    </li>
                    <li class="coll register">
                        <a href="<?php echo get_site_url() . '/marcas/a-marca/'; ?>">BRAND EXEMPLE</a>
                    </li>
                    <li class="coll register">
                        <a href="<?php echo get_site_url() . '/marcas/a-marca/'; ?>">BRAND EXEMPLE</a>
                    </li>
                    <li class="coll register last">
                        <a href="<?php echo get_site_url() . '/marcas/a-marca/'; ?>">BRAND EXEMPLE</a>
                    </li>
                </ul>

                <ul class="colls colls-4 list">
                    <li class="coll register first">
                        <a href="<?php echo get_site_url() . '/marcas/a-marca/'; ?>">BRAND EXEMPLE</a>
                    </li>
                    <li class="coll register">
                        <a href="<?php echo get_site_url() . '/marcas/a-marca/'; ?>">BRAND EXEMPLE</a>
                    </li>
                    <li class="coll register">
                        <a href="<?php echo get_site_url() . '/marcas/a-marca/'; ?>">BRAND EXEMPLE</a>
                    </li>
                    <li class="coll register last">
                        <a href="<?php echo get_site_url() . '/marcas/a-marca/'; ?>">BRAND EXEMPLE</a>
                    </li>
                </ul>

                <ul class="colls colls-4 list">
                    <li class="coll register first">
                        <a href="<?php echo get_site_url() . '/marcas/a-marca/'; ?>">BRAND EXEMPLE</a>
                    </li>
                    <li class="coll register">
                        <a href="<?php echo get_site_url() . '/marcas/a-marca/'; ?>">BRAND EXEMPLE</a>
                    </li>
                    <li class="coll register">
                        <a href="<?php echo get_site_url() . '/marcas/a-marca/'; ?>">BRAND EXEMPLE</a>
                    </li>
                    <li class="coll register last">
                        <a href="<?php echo get_site_url() . '/marcas/a-marca/'; ?>">BRAND EXEMPLE</a>
                    </li>
                </ul>

                <ul class="colls colls-4 last list ">
                    <li class="coll register first">
                        <a href="<?php echo get_site_url() . '/marcas/a-marca/'; ?>">BRAND EXEMPLE</a>
                    </li>
                    <li class="coll register">
                        <a href="<?php echo get_site_url() . '/marcas/a-marca/'; ?>">BRAND EXEMPLE</a>
                    </li>
                    <li class="coll register">
                        <a href="<?php echo get_site_url() . '/marcas/a-marca/'; ?>">BRAND EXEMPLE</a>
                    </li>
                    <li class="coll register last">
                        <a href="<?php echo get_site_url() . '/marcas/a-marca/'; ?>">BRAND EXEMPLE</a>
                    </li>
                </ul>

            </div>

        </div>
    </div>
</div>
 
<?php // get_sidebar(); ?>
<?php get_footer(); ?>
