<!-- Replace with your Code -->
<section id="navigation">
    <div class="container">
      <div class="row">
        <div class="col-xxl-4 col-lg-4 col-md-0 col-sm-0 col-xs-0 menu-item-col ninja">
          <?php wp_nav_menu(array( 'theme_location' => 'main' )); ?>
        </div>
        <div class="col-xxl-4 col-lg-4 col-md-6 col-sm-3 col-xs-6 nav-img-col">
          <a href="<?php echo get_home_url();?>">
            <img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/logos/logo.png" alt="">
          </a>
        </div>
        <div class="col-xxl-4 col-lg-4 col-md-6 col-sm-6 col-xs-6  nav-icon-col">
          <?php wp_nav_menu(array( 'theme_location' => 'extra' )); ?>
        </div>
      </div>
    </div>
</section>
