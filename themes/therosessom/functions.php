<?php
/**
 * Therosessom Custom Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Therosessom_Theme
 */

if (!function_exists('therosessom_setup')) :
  function therosessom_setup() {
    // Add default feed links to head
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails
    add_theme_support('post-thumbnails');

    // Register menus
    register_nav_menus(array(
      'primary'        => esc_html__('Primary Menu', 'therosessom'),
      'header-button'  => esc_html__('Header Button Menu', 'therosessom'),
      'mobile-menu'    => esc_html__('Mobile Menu', 'therosessom'),
      'footer-menu'    => esc_html__('Footer Menu', 'therosessom'),
      'privacy-menu'   => esc_html__('Privacy Policy Menu', 'therosessom'),
    ));

    // Enable support for HTML5 markup in certain elements
    add_theme_support('html5', array(
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    ));
  }
endif;
add_action('after_setup_theme', 'therosessom_setup');

// Set content width based on theme design
function therosessom_content_width() {
  $GLOBALS['content_width'] = apply_filters('therosessom_content_width', 640);
}
add_action('after_setup_theme', 'therosessom_content_width', 0);

// Register widget areas
function therosessom_widgets_init() {
  register_sidebar(array(
    'name'          => esc_html__('Sidebar', 'therosessom'),
    'id'            => 'sidebar-1',
    'description'   => esc_html__('Add widgets here.', 'therosessom'),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ));
}
add_action('widgets_init', 'therosessom_widgets_init');

// Enqueue styles and scripts
function therosessom_enqueue_assets() {
  wp_enqueue_style(
    'main-style',
    get_template_directory_uri() . '/dist/main.css',
    [],
    filemtime(get_template_directory() . '/dist/main.css')
  );
  wp_enqueue_script('main-script', get_template_directory_uri() . '/dist/main.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'therosessom_enqueue_assets');

function enqueue_vite_assets() {
  $is_local = strpos($_SERVER['HTTP_HOST'], 'localhost') !== false || 
              strpos($_SERVER['HTTP_HOST'], '.test') !== false ||
              strpos($_SERVER['HTTP_HOST'], '.local') !== false;
              
  if ($is_local && file_exists(get_template_directory() . '/package.json')) {
      wp_enqueue_script('vite-client', 'http://localhost:5173/@vite/client', array(), null, true);
      wp_enqueue_style('vite-css', 'http://localhost:5173/src/input.css', array(), null);
  } else {
      wp_enqueue_style('theme-styles', get_template_directory_uri() . '/dist/main.css', array(), '1.0.0');
  }
}
add_action('wp_enqueue_scripts', 'enqueue_vite_assets');

// Remove theme/plugin editor links for security reasons (optional)
function therosessom_remove_submenus() {
  remove_submenu_page('themes.php', 'theme-editor.php');
  remove_submenu_page('plugins.php', 'plugin-editor.php');
}
add_action('admin_menu', 'therosessom_remove_submenus', 110);

