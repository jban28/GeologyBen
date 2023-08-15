<!DOCTYPE html>
<html>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
    <?php wp_head(); ?>
  </head>
  <body>
    <?php wp_body_open(); ?>
    <?php get_header() ?>
    <main>
      <h1><?php the_title()?></h1>
    <?php the_content(); ?>
    </main>
  </body>
</html