<?php
function create_acf_pages() {
  if(function_exists('acf_add_options_page')) {
    acf_add_options_sub_page(array(
      'page_title'      => 'Archive', /* Use whatever title you want */
//    'parent_slug'     => 'edit.php?post_type=post', /* Change "services" to fit your situation */
      'parent_slug'     => 'edit.php', /* Change "services" to fit your situation */
      'capability' => 'manage_options'
    ));
  }
}
add_action('init', 'create_acf_pages');

function create_theme_pages() {
  if(function_exists('acf_add_options_page')) {
    acf_add_options_sub_page(array(
      'page_title'      => 'Theme Options', /* Use whatever title you want */
//    'parent_slug'     => 'edit.php?post_type=post', /* Change "services" to fit your situation */
      'parent_slug'     => 'themes.php', /* Change "services" to fit your situation */
      'capability' => 'manage_options'
    ));
  }
}
add_action('init', 'create_theme_pages');
?>
