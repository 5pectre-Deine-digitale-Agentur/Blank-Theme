<?php
$args = array(
  'post_type' => 'Post' //Define Posttype. Standard is "Post"
);

$post_query = new WP_Query($args);
if($post_query->have_posts() ) :
	while($post_query->have_posts() ) :
		$post_query->the_post(); ?>

		<section name="post-<?php the_ID(); ?>" <?php post_class(); ?> id="post">
			<div class="container-fluid">
				<div class="row">
					<div class="col-4 image__container">
						<?php if ( has_post_thumbnail()) : ?>
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php the_post_thumbnail(); ?>
							</a>
						<?php endif; ?>
					</div>
					<div class="col-8 ">
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="post-link">
							<h3 class="h4">
								<?php the_title(); ?>
							</h3>
						</a>
						<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
						<span class="author"><?php _e( 'veröffentlicht von' ); ?> <?php the_author_posts_link(); ?></span>

						<?php the_content(); ?>

						<?php the_tags( __( 'Tags: ' ), ', ', '<br>'); ?>

						<p>
							<?php _e( 'Categorised in: ' ); the_category(', '); // Separated by commas ?>
						</p>
						<p>
							<?php _e( 'This post was written by ' ); the_author('name'); ?>
						</p>
						<div class="button">
							<?php edit_post_link(); ?>
						</div>
					</div>
				</div>
			</div>

		</section>

<?php endwhile; ?>

<?php else: ?>
	<section>
		<h2 class="h2"><?php _e( 'Sorry, nothing to display.' ); ?></h2>
	</section>
<?php endif; ?>
