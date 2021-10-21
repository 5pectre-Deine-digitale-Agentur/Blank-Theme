<?php
// Hier kannst du einen eigenen Custom-Nav-Walker bauen.

// wp_nav_menu(
//   array(
//     'theme_location' => 'primary',
//     'menu_class'     => 'primary-menu',
//     'walker' => new spectre_Walker()
//     )
//   );

class spectre_Walker extends Walker_Nav_Menu {
  function start_el(&$output, $item, $depth=0, $args=array(), $id = 0) {
    $object = $item->object;
    $type = $item->type;
    $title = $item->title;
    $description = $item->description;
    $permalink = $item->url;

    $output .= "<li class='" .  implode(" ", $item->classes) . "'>";

    if( $permalink && $permalink != '#' ) {
      $output .= '<a href="' . $permalink . '">';
    } else {
      $output .= '<span>';
    }

    $output .= $title;

    if( $description != '' && $depth == 0 ) {
      $output .= '<small class="description">' . $description . '</small>';
    }

    if( $permalink && $permalink != '#' ) {
      $output .= '</a>';
    } else {
      $output .= '</span>';
    }
  }
}
?>
