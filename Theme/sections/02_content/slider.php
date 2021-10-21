<?php if( have_rows('slider') ):
  $slide_count = 0; ?>
  <div class="splide" id="slider">
  	<div class="splide__track">
  		<div class="splide__list">
        <?php while ( have_rows('slider') ) : the_row();
          $slide_image = get_sub_field('image');
          $slide_title = get_sub_field('title');
          $slide_text = get_sub_field('text'); ?>

    			<div class="splide__slide slide-<?php echo $slide_count; $slide_count++; ?>">
            <div class="background__image">
              <img src="<?php echo esc_url($slide_image['url']); ?>" alt="<?php echo esc_attr($slide_image['alt']); ?>">
            </div>
            <div class="slide__content">
              <h1><?php echo $slide_title ?></h1>
              <p><?php echo $slide_text ?></p>
            </div>
          </div>

        <?php endwhile; ?>
  		</div>
  	</div>
  </div>
<?php endif; ?>

<script type="text/javascript">
  // Splide Dokumentation unter https://splidejs.com/category/users-guide/
  document.addEventListener( 'DOMContentLoaded', function () {
    var elms = document.getElementsByClassName( 'splide' );
    for ( var i = 0, len = elms.length; i < len; i++ ) {
    	new Splide( elms[ i ], {
        'type': 'loop',
        'arrows': true,
        'pagination': true,
        'autoplay': true,
        'interval': 3000,
        'start': 0,
        'lazload': true,
        'drag': true,
        // 'cover': false,
        // 'gap': 50,
        // 'focus': 'center',
        // 'breakpoints': {
        //   1400: {
        //     //options
        //   },
        //   1200: {
        //     //options
        //   },
        //   992: {
        //     //options
        //   },
        //   768: {
        //     //options
        //   },
        //   576: {
        //     //options
        //   },
        //   300: {
        //
        //   }
        // },
      } ).mount();
    }
  });

  // Die Optionen für Splide findest du hier https://splidejs.com/options/
</script>
