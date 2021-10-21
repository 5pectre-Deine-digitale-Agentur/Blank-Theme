<?php get_header(); ?>

	<main role="main">
		<?php if( have_rows('hero','option') ): ?>
		  <?php while( have_rows('hero','option') ): the_row(); ?>

		    <section id="hero" style=" background:
		    <?php if(get_sub_field('background')): ?>
		      url(<?php echo the_sub_field('background'); ?>)
		    <?php else: ?>
		      #000
		    <?php endif; ?>; background-size: cover; background-position: center;">
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
		<div class="container">
			<div class="row">
				<div class="col-4 sidebar__container">
					<?php get_sidebar(); ?>
				</div>
				<div class="col-8">
					<section>
						<?php get_template_part('templates/loop'); ?>
						<?php get_template_part('templates/pagination'); ?>
					</section>
				</div>
			</div>
		</div>
	</main>

<?php get_footer(); ?>
