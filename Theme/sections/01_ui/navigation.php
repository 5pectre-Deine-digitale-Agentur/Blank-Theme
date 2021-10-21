<?php
$term = get_term_by('name', 'main', 'nav_menu');
$menu_id = $term->term_id;
$menu = wp_get_nav_menu_object( $menu_id );
?>

<section id="navigation">
    <div class="container">
      <div class="row">
        <div class="col-xxl-4 col-lg-4 col-md-0 col-sm-0 col-xs-0 menu-item-col ninja d-flex">
          <?php wp_nav_menu(array( 'theme_location' => 'main' )); ?>
        </div>
        <div class="col-xxl-4 col-lg-4 col-md-6 col-sm-3 col-xs-6 nav-img-col">
          <?php if ( !empty(get_field('logo', $menu))):
            $logo = get_field('logo', $menu);
            if( !empty( $logo ) ): ?>

              <a href="<?php echo get_home_url();?>">
                <img class="logo" src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>">
              </a>

            <?php endif; ?>
          <?php else: ?>
            <img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/logos/logo.svg" alt="">
          <?php endif; ?>
        </div>
        <div class="col-xxl-4 col-lg-4 col-md-6 col-sm-6 col-xs-6  nav-icon-col d-flex flex-row">
          <?php wp_nav_menu(array( 'theme_location' => 'extra' )); ?>
        </div>
      </div>
    </div>
</section>
