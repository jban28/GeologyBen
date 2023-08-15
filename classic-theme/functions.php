<?php 
  function register_menus() {
    register_nav_menus(
      array(
        'primary' => __('Primary')
      )
    );
  }
  add_action('init', 'register_menus');
?>