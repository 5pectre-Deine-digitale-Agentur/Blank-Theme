<?php
$images = get_sub_field('gallery');
$size = 'full'; // (thumbnail, medium, large, full or custom size)
if( $images ): ?>

  <section id="gallery">
    <?php foreach( $images as $image ): ?>
        <div class="image__container">
          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
        </div>
    <?php endforeach; ?>
  </section>

<?php endif; ?>
