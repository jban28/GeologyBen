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
    <?php get_header()?>
    <main>
      <h1 class="page-title"><?php echo single_cat_title()?></h1>
      <?php
      if ( have_posts() ) {
        while ( have_posts() ) {
          the_post(); 
      ?>
      <div class="post">
      <h2>
        <a href=<?php echo get_permalink();?>>
      <?php
          echo get_the_title();
      ?>
      </a>
      </h2>

      <h3>
        <i class="fa-regular fa-calendar"></i> 
          <?php 
          echo get_the_date();
          ?>
      </h3>

      <?php
          $posttags = get_the_tags();
          if ($posttags) { 
      ?>
      <h5>
        <i class="fa-solid fa-tag"></i>
      <?php
            $firsttag = true;
            foreach($posttags as $tag) {
              if (!$firsttag) {
                echo ', ';
              }
              else {$firsttag = false;}
              ?>
        <a href=<?php echo get_tag_link($tag->term_id);?>><?php echo $tag->name;?></a>
              <?php
              }
      ?>
      </h5>
      <?php 
          }
      ?>
      <p>
      <?php echo get_the_excerpt();?>
      </p>
      </div>
      <?php
        }
      }
      ?>
    </main>
  </body>
</html>