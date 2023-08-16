<!DOCTYPE html>
<html>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
    <script src="https://kit.fontawesome.com/5148556b44.js" crossorigin="anonymous"></script>
    <?php wp_head(); ?>
  </head>
  <body>  
    <?php wp_body_open(); ?>
    <?php get_header()?>
    <main>
      <h1 class="page-title"><i class="fa-solid fa-tag"></i> <?php echo single_tag_title()?></h1>
      <?php
      if ( have_posts() ) {
        while ( have_posts() ) {
          the_post(); 
          get_template_part('template-parts/post-summary');
        }
      }
      ?>
    </main>
  </body>
</html>