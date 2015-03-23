<?php
//Imagens Destacadas dos posts e paginas
 add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 395, 296 );


//Menu do Tema

add_action('init', 'register_nav_menus_on_init');

function register_nav_menus_on_init() {
	register_nav_menus(array(
		'top-pages-menu' => 'Menu > Topo da página',
		'top-cat-menu' => 'Menu > Topo categorias',
		'footer-link-menu' => 'Menu > Links no rodapé',
	));
        
}
        

//WIDGETS




if (function_exists('register_sidebar'))
{
    register_sidebar(array(
        'name'          => 'Sidebar',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ));

	register_sidebar(array(
		'name' => __( 'Widget Perfil - Container' ),
		'id' => 'home-sidebar-profile',
		'description' => __( 'Widget do Perdil do(a) Autor(a) do Portal' ),
		'before_widget' => '<li id="%1$s" class="%2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));


	register_sidebar(array(
		'name' => __( 'Widget Rodapé' ),
		'id' => 'widget-footer',
		'description' => __( 'Arraste os widgets desejados até aqui' ),
		'before_widget' => '<li id="%1$s" class="%2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
        
        
        register_sidebar(array(
		'name' => __( 'Widget Posts' ),
		'id' => 'widget-posts',
		'description' => __( 'Arraste os widgets desejados até aqui' ),
		'before_widget' => '<li id="%1$s" class="%2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
        

}







// Posts na HOME

   //Posts da Home/Main/Layout-1 separados por categorias
 function categoryHome ($layout, $slugCatName, $postLimit, $class) {
        
        $idObj = get_category_by_slug($slugCatName);
        
        
        
        $id_cat = $idObj->term_id;
        $title_cat = get_cat_name($id_cat);
        $link_cat = get_category_link($id_cat);

                    
           // The Query
            query_posts( array ( 'category__in' => $id_cat, 'posts_per_page' => $postLimit, 'meta_key' => '_thumbnail_id'  ) );
            //query_posts( array ( 'category_id' => $id_cat, 'posts_per_page' => $postLimit, 'meta_key' => '_thumbnail_id'  ) );
           
          
           

        echo '<div class="title centerBox">
                <h1>'.$title_cat.'</h1>
              </div>
            
            <ul class="posts '.$class.'">';
                        
               if(have_posts()):
                         
                // The Loop
                while ( have_posts() ) : the_post();
                    
                    $linkPost = get_permalink();
                    //if ( has_post_thumbnail() ): Se existe uma imagem destacada inserida no post
                    $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
                        
                        //MAIN POSTS
                         // Layouts dos blocos do Main
                         if($layout == 'layout-1' OR $layout == 'layout-2'):
                         
                    echo '<li class="post">'; 
                        
                        echo '<a class="img" href="'.$linkPost.'">';
                            
                            the_post_thumbnail( 'thumbnail' );    
                            
                            echo '<h2 class="text">';
                            the_title();
                            echo '</h2>';
                        
                            
                        echo '</a>';
                        echo '</li>';
                        
                        //FIM DO MAIN POSTS
                        
                        // VIDEO POSTS
                        
                        elseif($layout == 'videos'):
                        
                        echo '<li class="coll block post">'; 
                        
                        echo '<a class="blockLink" href="'.$linkPost.'">';
                           
                             echo '<div class="img">';
                            
                                    the_post_thumbnail( 'thumbnail' );
                            
                             echo '</div>';
                            
                             echo '<h2 class="text">';
                             the_title();
                             echo '</h2>';
                             
                           echo '</a>';
                        echo '</li>';
                        
                        endif;
                        //FIM DO VIDEO POSTS
                        
                        
                    //endif; //Se existe o thumb, fim 
                endwhile; 
                // Reset Query
                wp_reset_query();
                
                else:
                
                echo '<p class="noContentBlock">Por enquanto, não há postagens aqui.</p>';
                
                endif;
           
        echo '</ul>';
                        
        echo '<div class="more">
                <a class="link-more" href="'.$link_cat.'"><span>+</span> MAIS</a>
            </div>';
                        
    }
    

//BreadCrumbs

function wp_custom_breadcrumbs() {
 
  $showOnHome = 0; // 1 - show breadcrumbs on the homepage, 0 - don't show
  $delimiter = '&raquo;'; // delimiter between crumbs
  $home = 'Home'; // text for the 'Home' link
  $showCurrent = 1; // 1 - show current post/page title in breadcrumbs, 0 - don't show
  $before = '<span class="current">'; // tag before the current crumb
  $after = '</span>'; // tag after the current crumb
 
  global $post;
  $homeLink = get_bloginfo('url');
 
  if (is_home() || is_front_page()) {
 
    if ($showOnHome == 1) echo '<div id="crumbs"><a href="' . $homeLink . '">' . $home . '</a></div>';
 
  } else {
 
    echo '<div id="crumbs"><a href="' . $homeLink . '">' . $home . '</a> ' . $delimiter . ' ';
 
    if ( is_category() ) {
      $thisCat = get_category(get_query_var('cat'), false);
      if ($thisCat->parent != 0) echo get_category_parents($thisCat->parent, TRUE, ' ' . $delimiter . ' ');
      echo $before . '' . single_cat_title('', false) . '' . $after;
 
    } elseif ( is_search() ) {
      echo $before . 'Resultados da Pesquisa"' . get_search_query() . '"' . $after;
 
    } elseif ( is_day() ) {
      echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
      echo '<a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
      echo $before . get_the_time('d') . $after;
 
    } elseif ( is_month() ) {
      echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
      echo $before . get_the_time('F') . $after;
 
    } elseif ( is_year() ) {
      echo $before . get_the_time('Y') . $after;
 
    } elseif ( is_single() && !is_attachment() ) {
      if ( get_post_type() != 'post' ) {
        $post_type = get_post_type_object(get_post_type());
        $slug = $post_type->rewrite;
        echo '<a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a>';
        if ($showCurrent == 1) echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
      } else {
        $cat = get_the_category(); $cat = $cat[0];
        $cats = get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
        if ($showCurrent == 0) $cats = preg_replace("#^(.+)\s$delimiter\s$#", "$1", $cats);
        echo $cats;
        if ($showCurrent == 1) echo $before . get_the_title() . $after;
      }
 
    } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
      $post_type = get_post_type_object(get_post_type());
      echo $before . $post_type->labels->singular_name . $after;
 
    } elseif ( is_attachment() ) {
      $parent = get_post($post->post_parent);
      $cat = get_the_category($parent->ID); $cat = $cat[0];
      echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
      echo '<a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a>';
      if ($showCurrent == 1) echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
 
    } elseif ( is_page() && !$post->post_parent ) {
      if ($showCurrent == 1) echo $before . get_the_title() . $after;
 
    } elseif ( is_page() && $post->post_parent ) {
      $parent_id  = $post->post_parent;
      $breadcrumbs = array();
      while ($parent_id) {
        $page = get_page($parent_id);
        $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
        $parent_id  = $page->post_parent;
      }
      $breadcrumbs = array_reverse($breadcrumbs);
      for ($i = 0; $i < count($breadcrumbs); $i++) {
        echo $breadcrumbs[$i];
        if ($i != count($breadcrumbs)-1) echo ' ' . $delimiter . ' ';
      }
      if ($showCurrent == 1) echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
 
    } elseif ( is_tag() ) {
      echo $before . 'Posts tagged "' . single_tag_title('', false) . '"' . $after;
 
    } elseif ( is_author() ) {
       global $author;
      $userdata = get_userdata($author);
      echo $before . 'Articles posted by ' . $userdata->display_name . $after;
 
    } elseif ( is_404() ) {
      echo $before . 'Error 404' . $after;
    }
 
    if ( get_query_var('paged') ) {
      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
      echo __('Page') . ' ' . get_query_var('paged');
      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
    }
 
    echo '</div>';
 
  }
}
// end wp_custom_breadcrumbs()
    
    
    add_action ( 'genesis_before_content', 'sk_show_category_name' );
function sk_show_category_name() {
$category = get_the_category();
if (is_category()) {
    echo '<div id="cat-name">' . $category[0]->cat_name . '</div>';
}
}


//Limitar Caracteres

 //Posts da Home/Main/Layout-1 separados por categorias
 function limitaCaracteres ($string, $maxLength) {
  

if (strlen($string) > $maxLength) {
    $stringCut = substr($string, 0, $maxLength);
    $string = substr($stringCut, 0, strrpos($stringCut, ' ')); 
}

echo $string;

// output: The quick brown fox


 }
 
 // Limitando palavras via The_Except
 
 function custom_excerpt_length($length) {
	return 8;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );



//NAV SIDEBAR

$navDefault = array(
	'theme_location'  => '',
	'menu'            => '',
	'container'       => 'div',
	'container_class' => '',
	'container_id'    => '',
	'menu_class'      => 'menu',
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	'depth'           => 0,
	'walker'          => ''
);