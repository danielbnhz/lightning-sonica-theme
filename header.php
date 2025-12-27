<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">
  
  <!-- Full-width left-hugging header text -->
  <div class="full-width-header-text">
      <h1>Lightning Sonica</h1>
  </div>

  <!-- Normal site navigation -->
  <div class="container">
      <?php
      if (has_nav_menu('primary')) {
          wp_nav_menu([
              'theme_location' => 'primary',
              'menu_class' => 'primary-menu',
          ]);
      }
      ?>
  </div>

</header>
