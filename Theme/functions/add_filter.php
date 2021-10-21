<?php
// DIESER BEREICH IST FÜR DICH UNINTERESSANT

  add_filter('avatar_defaults', 'Spectreblankgravatar'); // Custom Gravatar in Settings > Discussion
  add_filter('body_class', 'add_slug_to_body_class'); // Add slug to body class (Starkers build)
  add_filter('widget_text', 'do_shortcode'); // Allow shortcodes in Dynamic Sidebar
  add_filter('widget_text', 'shortcode_unautop'); // Remove <p> tags in Dynamic Sidebars (better!)
  add_filter('wp_nav_menu_args', 'my_wp_nav_menu_args'); // Remove surrounding <div> from WP Navigation
  // add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected classes (Commented out by default)
  // add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected ID (Commented out by default)
  // add_filter('page_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> Page ID's (Commented out by default)
  add_filter('the_category', 'remove_category_rel_from_category_list'); // Remove invalid rel attribute
  add_filter('the_excerpt', 'shortcode_unautop'); // Remove auto <p> tags in Excerpt (Manual Excerpts only)
  add_filter('the_excerpt', 'do_shortcode'); // Allows Shortcodes to be executed in Excerpt (Manual Excerpts only)
  add_filter('excerpt_more', 'Spectre_blank_view_article'); // Add 'View Article' button instead of [...] for Excerpts
  add_filter('show_admin_bar', 'remove_admin_bar'); // Remove Admin bar
  add_filter('style_loader_tag', 'Spectre_style_remove'); // Remove 'text/css' from enqueued stylesheet
  add_filter('post_thumbnail_html', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to thumbnails
  add_filter('image_send_to_editor', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to post images

?>
