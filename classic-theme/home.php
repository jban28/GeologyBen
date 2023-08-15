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
    <?php get_header() ?>

    <main>
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
          $postcats = get_the_category();
          if ($postcats) { 
      ?>
      <h4>
      <?php
            $firstcat = true;
            foreach($postcats as $cat) {
              if (!$firstcat) {
                echo '&nbsp';
              }
              else {$firstcat = false;}
      ?>
        <span class="category"><?php echo $cat->name;?></span>
      <?php
              }
      ?>
      </h4>
      <?php 
          } 
      ?>

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
              echo $tag->name;
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
</html
