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
      <?php get_template_part('template-parts/post-full');
      	// If comments are open or there is at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) {
          comments_template();
        }
      ?>

    </main>
  </body>
</html>