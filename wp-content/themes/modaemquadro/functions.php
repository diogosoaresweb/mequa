<?php
 add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 395, 296 );






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
    