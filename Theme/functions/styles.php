<?php

// Load Spectre Blank styles
function my_stylesheets()
{
  wp_register_style('style', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
  wp_enqueue_style('style');

  // Bootstrap
  wp_register_style('bootstrap.css', get_template_directory_uri() . '/js/lib/bootstrap/css/bootstrap.min.css', array(), '1.0', 'all');
  wp_enqueue_style('bootstrap.css');

  // Splide
  wp_register_style( 'splide.css', get_template_directory_uri() . '/js/lib/splide/dist/css/splide.min.css', array(), '1.0', 'all' );
  wp_enqueue_style( 'splide.css' );

  // Splide
  wp_register_style( 'fontawesome.css', get_template_directory_uri() . '/js/lib/fontawesome/css/all.css', array(), '1.0', 'all' );
  wp_enqueue_style( 'fontawesome.css' );
}
add_action('wp_enqueue_scripts', 'my_stylesheets');

// Load Spectre Blank Admin Stylesheet
function my_admin_style() {
  wp_enqueue_style( 'admin-style', get_stylesheet_directory_uri() . '/admin-style.css' );
}
add_action( 'admin_enqueue_scripts', 'my_admin_style');

// Remove 'text/css' from our enqueued stylesheet
function Spectre_style_remove($tag)
{
    return preg_replace('~\s+type=["\'][^"\']++["\']~', '', $tag);
}

?>
