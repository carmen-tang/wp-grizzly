<?php // ==== FUNCTIONS ==== //

// Load the configuration file for this installation; all options are set here
if ( is_readable( trailingslashit( get_stylesheet_directory() ) . 'functions-config.php' ) )
  require_once( trailingslashit( get_stylesheet_directory() ) . 'functions-config.php' );

// Load configuration defaults for this theme; anything not set in the custom configuration (above) will be set here
require_once( trailingslashit( get_stylesheet_directory() ) . 'functions-config-defaults.php' );

// An example of how to manage loading front-end assets (scripts, styles, and fonts)
require_once( trailingslashit( get_stylesheet_directory() ) . 'inc/assets.php' );

// Required to demonstrate WP AJAX Page Loader (as WordPress doesn't ship with even simple post navigation functions)
require_once( trailingslashit( get_stylesheet_directory() ) . 'inc/navigation.php' );

function voidx_setup() {

  // HTML5 support; mainly here to get rid of some nasty default styling that WordPress used to inject
  add_theme_support( 'html5', array( 'search-form', 'gallery' ) );

  // Automatic feed links
  add_theme_support( 'automatic-feed-links' );

  // title tag
  add_theme_support( 'title-tag' );

  // $content_width limits the size of the largest image size available via the media uploader
  // It should be set once and left alone apart from that; don't do anything fancy with it; it is part of WordPress core
  global $content_width;
  $content_width = 960;

  // Register header and footer menus
  register_nav_menu( 'header', __( 'Header menu', 'voidx' ) );
  register_nav_menu( 'footer', __( 'Footer menu', 'voidx' ) );

}
add_action( 'after_setup_theme', 'voidx_setup', 11 );

/**
 * Sidebar
 *
 */
function voidx_widgets_init() {
  register_sidebar( array(
    'name'          => __( 'Main sidebar', 'voidx' ),
    'id'            => 'sidebar-main',
    'description'   => __( 'Appears to the right side of most posts and pages.', 'voidx' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h2>',
    'after_title'   => '</h2>'
  ) );
}
add_action( 'widgets_init', 'voidx_widgets_init' );

/**
 * Hero Text Widget Area
 *
 */
function hero_widgets_init() {

  register_sidebar( array(
    'name' => 'Hero Text',
    'id' => 'hero_text',
    'before_widget' => '<div id="hero-text">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
  ) );
}
add_action( 'widgets_init', 'hero_widgets_init' );

/**
 * Content Widget Area
 *
 */
function content_widgets_init() {

  register_sidebar( array(
    'name' => 'Content Area',
    'id' => 'content_text',
    'before_widget' => '<p>',
    'after_widget' => '</p>',
    'before_title' => '<h4>',
    'after_title' => '</h4>',
  ) );
}
add_action( 'widgets_init', 'content_widgets_init' );

/**
 * Form Widget Area
 *
 */
function form_widgets_init() {

  register_sidebar( array(
    'name' => 'Form Field',
    'id' => 'form_field',
    'before_widget' => '<div>',
    'after_widget' => '</div>',
    'before_title' => '<h4>',
    'after_title' => '</h4>',
  ) );
}
add_action( 'widgets_init', 'form_widgets_init' );

/**
 * Insta Widget Area (not currently used)
 *
 */
function insta_widgets_init() {

  register_sidebar( array(
    'name' => 'Instagram Field',
    'id' => 'insta_field',
    'before_widget' => '<div>',
    'after_widget' => '</div>',
    'before_title' => '<h4>',
    'after_title' => '</h4>',
  ) );
}
add_action( 'widgets_init', 'insta_widgets_init' );  

