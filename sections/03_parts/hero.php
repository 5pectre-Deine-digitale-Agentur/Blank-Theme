<?php if( have_rows('hero') ): ?>
  <?php while( have_rows('hero') ): the_row(); ?>

    <section id="hero">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h1 class="h1"><?php the_title(); ?></h1>
            <span class="h4"><?php echo the_sub_field('subtitle'); ?></span>
          </div>
        </div>
      </div>
    </section>

  <?php endwhile; ?>
<?php endif; ?>
