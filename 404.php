<?php
/**
 * The template for displaying 404 pages (Not Found)
**/
get_header(); ?>

	<main role="main" class="main" id="main">
		<section id="page-404">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="text-wrapper">
							<div class="title">
								 <h1 class="h1 special">404</h1>
							</div>

							<div class="subtitle" data-content="Oops, the page you're looking for doesn't exist">
									Oops, the page you're looking for doesn't exist.
							</div>

							<div class="button">
									<a class="button" href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'Spectreblank' ); ?></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

<?php get_footer(); ?>
