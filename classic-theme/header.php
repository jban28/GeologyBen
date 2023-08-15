<header>
  <div class="header-bar">
    <h1 class="site-title"><?php echo get_bloginfo( 'name' );?></h1>
  </div>
</header>
  <?php if (has_nav_menu('primary')) : ?>
  <nav class="navbar sticky">
    <?php
      wp_nav_menu(
      array(
        'theme_location'  => 'primary'
      )
    );  ?>
  </nav>
  <?php endif; ?>
