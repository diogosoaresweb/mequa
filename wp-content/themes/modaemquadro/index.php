<?php get_header(); ?>
<div class="pages home">
    <div class="slider">
        <div class="rContainer_bkp">
            <a href="javascript:;" class="slideControl prev" id="prev" title="prev"></a>
            <a href="javascript:;" class="slideControl next" id="next" title="next"></a>
            
             <?php echo do_shortcode("[huge_it_slider id='1']"); ?>
             
        </div>
    </div>
   
    <div class="content two-columns-right">
        <div class="rContainer">
            <div class="block main">
                
                <div class="colls colls-2 line-1">
                    <div class="block first free layout-1">
                        
                        <?php
                            categoryHome('layout-1','eu-recomendo', '3', '');
                        ?>
                        
                    </div>
                    <div class="block last free layout-1">
                        
                        <?php categoryHome('layout-1','make-em-quadro', '3', ''); ?>
                        
                    </div>
                </div>
                <div class="colls colls-1 line-2 publicidade">
                    <div class="block horizFull">
                        <?php
                        
                            if(function_exists( 'wp_bannerize' ))
                                wp_bannerize( 'group=homeHoriz' );
                        
                        ?>
                    </div>
                </div>
                
                <div class="colls colls-3 line-3 fluid">
                    
                    
                    
                    <div class="block first free layout-2">
                         <?php categoryHome('layout-2','editorial', '2', 'secondary'); ?>
                    </div>
                    
                    <div class="block free layout-2">
                        <?php categoryHome('layout-2','entrevista', '2', 'secondary'); ?>
                    </div>
                    
                    <div class="block last free layout-2">
                        <?php categoryHome('layout-2','especial', '2', 'secondary'); ?>
                    </div>

                </div>
                
                <div class="colls colls-3 line-4 fluid">

                    
                    <div class="block first free layout-2">
                        <?php categoryHome('layout-2','full-ultilidades', '2', 'secondary'); ?>
                    </div>
                    
                    <div class="block free layout-2">
                        <?php categoryHome('layout-2','moda-das-estrelas', '2', 'secondary'); ?>
                    </div>
                    
                    <div class="block last free layout-2">
                        <?php categoryHome('layout-2','super-trend', '2', 'secondary'); ?>
                    </div>
                </div>
                
                <div class="colls colls-1 line-5 publicidade">
                    <div class="block horizFull">
                        
                        <?php
                        
                            if(function_exists( 'wp_bannerize' ))
                                wp_bannerize( 'group=homeHoriz_2' );
                        
                        ?>
                        
                    </div>
                </div>
                
                <div class="colls colls-2 line-6">
                    
                    <div class="block first free layout-1 modaDoBem">
                        <?php categoryHome('layout-1', 'moda-do-bem', '1', ''); ?>
                    </div>
                    
                    <div class="block last free layout-1 modaNaReal">
                        <?php categoryHome('layout-1', 'moda-na-real', '1', ''); ?>
                    </div>
                    
                    
                </div>
                
                
            </div>
            <div class="block sidebar">
                
                <?php   //get_sidebar(); ?>
                 
                 <!------- PERFIL-------->
                 <div class="colls colls-1 perfil">
                    <div class="block box layout-1">
                        
                        <ul class="posts">
                            
                            <?php   if ( is_active_sidebar( 'home-sidebar-profile' ) ) :
                                        dynamic_sidebar( 'home-sidebar-profile' );
                                    endif;
                            ?>
                        </ul>
                    </div>
                 </div>
                <!------- PERFIL FIM-------->
       
                <!------- PERFIL BACKUP -------->
                <!--
                <div class="colls colls-1 perfil">
                    <div class="block box layout-1">
                        
                        <ul class="posts">
                            <li class="post">
                                <a class="img" href="#">
                                    <img src="<?php echo  get_template_directory_uri(); ?>/images/img-test.png" alt="img tst" border="0" />
                                </a>
                                <div class="text">
                                    <h2>JULIANA MELO</h2>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
                                    </p>
                                    
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                 -->
                
                <!------- PERFIL BACKUP - FIM-------->
                
                <div class="colls colls-1 search">
                    <div class="block box-free hLines">
                        <div class="title icon">
                            <h1>PESQUISE MAT&Eacute;RIAS</h1>
                        </div>
                        <div class="form">
                            <form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
                                <input type="text" name="s" id="s" class="text" placeholder="O QUE VOCÊ EST&Aacute; PROCURANDO?" />
                                <input type="submit" id="searchsubmit" class="submit" value=""/>
                            </form>
                        </div>
                    </div>
                </div>
                
                
                <div class="colls colls-1 juResponde">
                    <div class="block box layout-2">
                        <?php categoryHome('layout-2','ju-responde', '4', ''); ?>
                    </div>
                </div>
                
                <div class="colls colls-1 publicidade box">
                    <div class="block box">
                           <!-- <h1>PUBLICIDADE</h1>-->
                           <?php
                            if(function_exists( 'wp_bannerize' ))
                            wp_bannerize( 'group=homeQuad' );
                           ?>
                    </div>
                </div>
                
                
                <div class="colls colls-1 newsletter">
                    <div class="block box-free hLines">
                        
                        <div class="title icon">
                            <h1>RECEBA NOVIDADES</h1>
                        </div>
                        <div class="form">
                            
                            <?php
                        
                                $widgetNL = new WYSIJA_NL_Widget(true);
                                echo $widgetNL->widget(array('form' => 1, 'form_type' => 'php'));
                        
                            ?>
                            <!--
                            <form>
                                <input type="text" class="text" placeholder="QUAL O SEU E-MAIL?" />
                                <input type="submit" class="submit" value=""/>
                            </form>
                            -->
                        </div>
                    </div>
                </div>
                
                
                
                <div class="colls colls-1 topBlogueiras">
                    <div class="block box layout-2">
                        <?php categoryHome('layout-2','top-blogueiras', '4', ''); ?>
                    </div>
                </div>
                
               
                
            </div>
        </div>
    
    </div>
    
    
    
     <div class="content one-column">
        <div class="rContainer">
            <div class="colls coll-1 line-1">
                <div class="block free layout-1 videos">
                    <?php categoryHome('videos','videos', '6', 'colls colls-6'); ?>
                </div>
            </div>
            
            
            <div class="colls colls-2 line-2 socialPosts">
                <div class="coll block first facebook">
                    <div class="block box">
                        <div class="title centerBox">
                            <h1><span>Facebook</span></h1>
                        </div>
                        
                        <?php// echo do_shortcode( '[efb_likebox fanpage_url="https://www.facebook.com/pages/modaemquadro" fb_appid="" box_width="250" box_height="230" locale="pt_BR" responsive="1" colorscheme="light" show_faces="1" show_header="0" show_stream="0" show_border="0"]' ); ?>
                        
                    </div>
                </div>
                <div class="coll block last instagram">
                    <div class="block box">
                        <div class="title centerBox">
                            <h1><span>Instagram</span></h1>
                        </div>
                    </div>
                </div>
            </div>
              
              
              
        </div>
     </div>
              
                
              

            </div>
        </div>
     </div>
     
</div>
<?php get_footer(); ?>
