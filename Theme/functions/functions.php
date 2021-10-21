<?php
// DIESER BEREICH IST FÜR DICH UNINTERESSANT

  function remove_category_rel_from_category_list($thelist)
  {
      return str_replace('rel="category tag"', 'rel="tag"', $thelist);
  }

  // FÜGE DEN PAGE-SLUG ALS KLASSE ZUM <body></body> HINZU
  function add_slug_to_body_class($classes)
  {
      global $post;
      if (is_home()) {
          $key = array_search('blog', $classes);
          if ($key > -1) {
              unset($classes[$key]);
          }
      } elseif (is_page()) {
          $classes[] = sanitize_html_class($post->post_name);
      } elseif (is_singular()) {
          $classes[] = sanitize_html_class($post->post_name);
      }

      return $classes;
  }

  // ADMIN BAR (true = anzeigen)
  function remove_admin_bar()
  {
      return false;
  }

  // CUSTOM GRAVATAR IN Settings > Discussion
  function Spectreblankgravatar ($avatar_defaults)
  {
      $myavatar = get_template_directory_uri() . '/img/logos/stamp.png';
      $avatar_defaults[$myavatar] = "5pectre Gravatar";
      return $avatar_defaults;
  }

?>
