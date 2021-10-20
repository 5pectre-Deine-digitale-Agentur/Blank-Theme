<?php

// Enque Header Scripts (header.php)
function my_header_enqueue()
{

  // Splide
  wp_register_script( 'splide.js', get_template_directory_uri() . '/js/lib/splide/dist/js/splide.min.js', array(), '1.0',false );
  wp_enqueue_script( 'splide.js' );

  // Modernizr
  wp_register_script( 'modernizr.js', get_template_directory_uri() . '/js/lib/modernizr.js', array(), '1.0',false );
  wp_enqueue_script( 'modernizr.js' );

  // Conditionizr
  wp_register_script( 'conditionizr.js', get_template_directory_uri() . '/js/lib/conditionizr.min.js', array(), '1.0',false );
  wp_enqueue_script( 'conditionizr.js' );

  // jQuery
  wp_register_script( 'jQuery.js', get_template_directory_uri() . '/js/lib/jQuery.min.js', array(), '1.0', false );
  wp_enqueue_script( 'jQuery.js' );
}
add_action('init', 'my_header_enqueue');

// Enque Footer Scripts (footer.php)
function my_footer_enqueue()
{
  // Basic Scripts
  wp_register_script( 'scripts.js', get_template_directory_uri() . '/js/script.js', array(), '1.0', true );
  wp_enqueue_script( 'scripts.js' );

  // BOOTSTRAP
  wp_register_script( 'bootstrap', get_template_directory_uri() . '/js/lib/bootstrap/js/bootstrap.min.js', array(), '1.0', true );
  wp_enqueue_script( 'bootstrap' );

  // FONTAWESOME
  wp_register_script( 'fontawesome', get_template_directory_uri() . '/js/lib/fontawesome/js/all.js', array(), '1.0', true );
  wp_enqueue_script( 'fontawesome' );

  // Bei Bedarf freischalten und Informationen einfügen
  // wp_register_script( '// ** scriptname **//', '// ** scriptsource ** //', array(), '1.0', true );
  // wp_enqueue_script( '// ** scriptname **//' );
}
add_action( 'wp_enqueue_scripts', 'my_footer_enqueue' );

// Load Admin Scripts
function custom_admin_js() {
    $url = get_bloginfo('template_directory') . '/js/wp-admin.js';
    echo '"<script type="text/javascript" src="'. $url . '"></script>"';
}
add_action('admin_footer', 'custom_admin_js');

?>
