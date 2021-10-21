<?php
// Hier erstellen wir die Nabigation. Custom-Nav-Walker findest du in der walker.php

  // 5pectre Blank navigation
  function Spectre_nav()
  {
  	wp_nav_menu(
  	array(
  		'theme_location'  => 'main',
  		'menu'            => '',
  		'container'       => 'div',
  		'container_class' => 'menu-{menu slug}-container',
  		'container_id'    => '',
  		'menu_class'      => 'menu',
  		'menu_id'         => '',
  		'echo'            => true,
  		'fallback_cb'     => 'wp_page_menu',
  		'before'          => '',
  		'after'           => '',
  		'link_before'     => '',
  		'link_after'      => '',
  		'items_wrap'      => '<ul>%3$s</ul>',
  		'depth'           => 0,
  		'walker'          => ''
  		)
  	);
  }

  // Register Spectre Blank Navigation
  function register_menu()
  {
      register_nav_menus(array(
          'main' => __('Main Menu', 'Spectreblank'),
          'footer' => __('Footer Menu', 'Spectreblank'),
          'extra' => __('Extra Menu', 'Spectreblank'),
          // 'menu' => __('Menu Name', 'Spectreblank'),
      ));
  }
  add_action('init', 'register_menu');

  // Remove the <div> surrounding the dynamic navigation to cleanup markup
  function my_wp_nav_menu_args($args = '')
  {
      $args['container'] = false;
      return $args;
  }

  // Remove Injected classes, ID's and Page ID's from Navigation <li> items
  function my_css_attributes_filter($var)
  {
      return is_array($var) ? array() : '';
  }

?>
