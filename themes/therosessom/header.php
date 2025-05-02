<?php
/**
 * The header for our theme.
 *
 * @package Therosessom
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Performance: Preconnect + Prefetch -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="dns-prefetch" href="//fonts.googleapis.com">
  <link rel="dns-prefetch" href="//fonts.gstatic.com">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Anton&family=Manrope:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- Adobe Fonts -->
  <link rel="stylesheet" href="https://use.typekit.net/sxg0djz.css">

  <?php 
  wp_head();
  get_template_part('template-parts/header/header-scripts'); 
  ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div id="page" class="min-h-screen flex flex-col">

    <a class="skip-link sr-only focus:not-sr-only" href="#content">
      <?php esc_html_e('Skip to content', 'therosessom'); ?>
    </a>

    <header id="masthead" class="site-header" role="banner">
      <div class="site-branding">
        <h1 class="sr-only">
          <a href="<?= esc_url(home_url('/')); ?>" rel="home">
            <?php bloginfo('name'); ?>
          </a>
        </h1>
        <p class="text-sm text-gray-600"><?php bloginfo('description'); ?></p>
      </div>

      <nav id="site-navigation" class="main-navigation" role="navigation">
        <div class="container m-auto flex justify-between items-center py-4">

          <!-- Mobile Logo + Toggle -->
          <div class="flex items-center lg:hidden">
            <?php get_template_part('template-parts/logo/logo'); ?>
            <button id="toggle" aria-label="<?php esc_attr_e('Toggle Menu', 'therosessom'); ?>" aria-controls="popout" aria-expanded="false" class="ml-4">
              <span class="block w-5 h-0.5 bg-black mb-1"></span>
              <span class="block w-5 h-0.5 bg-black mb-1"></span>
              <span class="block w-5 h-0.5 bg-black"></span>
            </button>
          </div>

          <!-- Desktop Menu Left -->
          <div class="hidden lg:block">
            <?php wp_nav_menu([
              'theme_location' => 'primary',
              'menu_id'        => 'primary-menu',
              'menu_class'     => 'flex gap-6 text-base font-medium',
              'container'      => false,
            ]); ?>
          </div>

          <!-- Desktop Menu Right -->
          <div class="hidden lg:block">
            <?php wp_nav_menu([
              'theme_location' => 'header-button',
              'menu_id'        => 'header-button',
              'menu_class'     => 'flex gap-4 text-sm',
              'container'      => false,
            ]); ?>
          </div>

        </div>
      </nav>

      <!-- Mobile Popout Menu -->
      <div class="hidden" id="popout">
        <div class="bg-white shadow-md p-6">
          <?php wp_nav_menu([
            'theme_location'  => 'mobile-menu',
            'menu_id'         => 'mobile-menu',
            'menu_class'      => 'space-y-4',
            'container_class' => 'mobile-menu-container'
          ]); ?>
        </div>
      </div>

    </header>

    <main id="content" class="site-content flex-grow">
