<!-- SECTION
  TODO: Sections werden in Feldgruppen angelegt
-->

<?php if( have_rows('section') ): ?>
  <?php while( have_rows('section') ): the_row(); ?>

    <section class="section" id="section" style="background: url(<?php echo get_template_directory_uri(); ?>/img/assets/background.png); background-size: cover; background-position: center">
      <div class="wrapper">
        <div class="centered">
          <h1 class="section_title"><?php echo the_sub_field('sample');?></h1>
        </div>
      </div>
    </section>

  <?php endwhile; ?>
<?php endif; ?>
