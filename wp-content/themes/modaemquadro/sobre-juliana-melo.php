<?php
/**
Template Name: Sobre Juliana
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
                <div class="photo">
                    <img src="http://localhost:8888/mequa/wp-content/uploads/2015/03/img-test2.png" alt="" border="0" />
                </div>
                
                <div class="text">
                    <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
                    </p>
                </div>
                
                <h2>Tex textte xttex tt ex tt exte txtet xetx tet</h2>
                
                <ul class="gallery">
                    <li class="first">
                        <a href="#"><img src="http://localhost:8888/mequa/wp-content/uploads/2015/03/img-test2.png" alt="" border="0" /></a>
                    </li>
                    <li>
                        <a href="#"><img src="http://localhost:8888/mequa/wp-content/uploads/2015/03/img-test2.png" alt="" border="0" /></a>
                    </li>
                    <li class="last">
                        <a href="#"><img src="http://localhost:8888/mequa/wp-content/uploads/2015/03/img-test2.png" alt="" border="0" /></a>
                    </li>
                </ul>
                
                <ul class="socialMedia">
                    <li class="facebook">
                        <a href="#" title="">
                            <h3>facebook</h3>
                            <p>fb/julianamelo</p>
                        </a>
                    </li>
                    <li class="instagram">
                        <a href="#" title="">
                            <h3>instagram</h3>
                            <p>@julianamelo</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>