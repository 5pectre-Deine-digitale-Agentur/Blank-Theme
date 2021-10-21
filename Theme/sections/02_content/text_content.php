<?php if ( have_rows( 'tetxt_content' ) ):
  while ( have_rows('tetxt_content') ) : the_row(); ?>

  <div class="content__wrapper">
    <?php if (get_sub_field('title')): ?>
      <h2 class="h2"><?php echo the_sub_field('title'); ?></h2>
    <?php endif; ?>
    <?php if (get_sub_field('subtitle')): ?>
      <span class="subtitle"><?php echo the_sub_field('subtitle'); ?></span>
    <?php endif; ?>
    <?php if (get_sub_field('text')): ?>
      <div class="text">
        <?php echo the_sub_field('text'); ?>
      </div>
    <?php endif; ?>
    <?php if (get_sub_field('button')): ?>
      <div class="button">
        <a href="<?php echo esc_url(get_sub_field('button')['url']); ?>"><?php echo esc_html( get_sub_field('button')['title'] ); ?></a>
      </div>
    <?php endif; ?>
  </div>

<?php endwhile;
endif; ?>
