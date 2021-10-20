<?php
// DIESER BEREICH IST FÜR DICH UNINTERESSANT

  // ADD THEMESUPPORT
  if (!isset($content_width))
  {
      $content_width = 900;
  }

  if (function_exists('add_theme_support'))
  {
      // MENU SUPPORT
      add_theme_support('menus');

      // THUMBNAIL SUPPORT
      add_theme_support('post-thumbnails');
      add_image_size('large', 700, '', true); // Large Thumbnail
      add_image_size('medium', 250, '', true); // Medium Thumbnail
      add_image_size('small', 120, '', true); // Small Thumbnail
      add_image_size('custom-size', 700, 200, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');

      // Add Support for Custom Backgrounds - Kommentare entfernen wenn benutzt werden soll.
      // add_theme_support('custom-background', array(
      // 	'default-color' => 'FFF',
      // 	'default-image' => get_template_directory_uri() . '/img/bg.jpg'
      // ));

      // Add Support for Custom Header - Kommentare entfernen wenn benutzt werden soll.
      // add_theme_support('custom-header', array(
      // 	'default-image'			=> get_template_directory_uri() . '/img/headers/default.jpg',
      // 	'header-text'			=> false,
      // 	'default-text-color'		=> '000',
      // 	'width'				=> 1000,
      // 	'height'			=> 198,
      // 	'random-default'		=> false,
      // 	'wp-head-callback'		=> $wphead_cb,
      // 	'admin-head-callback'		=> $adminhead_cb,
      // 	'admin-preview-callback'	=> $adminpreview_cb
      // ));

      // RSS FEED SUPPORT FÜR HEAD
      add_theme_support('automatic-feed-links');

      // ORTSFESTSTELLUNG FÜR DIE SPRACHE
      load_theme_textdomain('Spectreblank', get_template_directory() . '/languages');
  }

  // Remove thumbnail width and height dimensions that prevent fluid images in the_thumbnail
  function remove_thumbnail_dimensions( $html )
  {
      $html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
      return $html;
  }
  
?>
