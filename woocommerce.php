<?php

/**

 * The template for displaying all pages.

 * This is the template that displays all pages by default.

 * Please note that this is the WordPress construct of pages

 * and that other 'pages' on your WordPress site may use a

 * different template.

 *

 * @link https://codex.wordpress.org/Template_Hierarchy

 *

 * @package Canyon Themes

 * @subpackage Better Health

 */



get_header();
?>
<div id="primary" class="col-md-8 col-sm-8">
 	<div class="content-area">
    <div class="post-wrapper">
      <article id="main" class="woocommerce-deft">
        <?php 
          if (have_posts()) :
            woocommerce_content();
          endif;
        ?>
      </article><!-- #main -->
     </div> 
  </div><!-- #primary -->
</div>          
<?php 
get_sidebar();
get_footer();