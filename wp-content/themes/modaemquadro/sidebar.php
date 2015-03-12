 <div id="secondaryContent">
  <form id="searchform" method="get" action="<?php bloginfo('home'); ?>">
   <p><input type="text" name="s" id="s" value="Procurar..."  onblur="if(this.value=='') this.value='Procurar...';" onfocus="if(this.value=='Procurar...') this.value='';"/></p>
  </form>
  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
  <h3>Categorias</h3>
  <ul>
   <?php wp_list_categories('show_count=1&title_li='); ?>
  </ul>
  <h3>Arquivos</h3>
  <ul>
   <?php wp_get_archives('type=monthly'); ?>
  </ul>
  <h3>Blogroll</h3>
  <ul>
   <?php get_links(2, '<li>', '</li>', '', '', 'name'); ?>
  </ul>
  <?php endif; ?>
 </div>
<br class="clear" />
</div>
