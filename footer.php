<footer>
	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="col-xxl-8 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">
					<div class="logo">
						<a href="<?php echo home_url(); ?>">
							<img class="footer-logo" src="<?php echo get_template_directory_uri(); ?>/img/logos/logo.png" alt="Logo" class="logo-img">
						</a>
					</div>
					<div class="information">
						Am Wasserwerk 2<br>
						25355 Barmstedt
					</div>
				</div>
				<div class="col-xxl-2 col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3">
					<div class="sitemap">
						<h4>Sitemap</h4>
						<?php wp_nav_menu(array( 'theme_location' => 'main' )); ?>
					</div>
				</div>
				<div class="col-xxl-2 col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3">
					<div class="rechtliches">
						<h4>Rechtliches</h4>
						<?php wp_nav_menu(array( 'theme_location' => 'legal' )); ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="copy">
		<div class="wrapper">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<p class="copyright">
							&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. <?php _e('Powered by', 'Spectreblank'); ?> <a href="https://5pectre.com" title="Spectre Blank">5pectre</a>.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

<!-- analytics -->
<script>
(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
ga('send', 'pageview');
</script>

</body>
</html>
