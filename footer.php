<!-- FOOTER

  *   TODO: Footer nach Design umsetzen
	*		TODO:	Menüs einbinden
	*		TODO:	Kundeninformationen vollständig hinterlegen
	*		TODO: "designed and developed by <a href="https://5pectre.com">5pectre</a>" an letzte Stelle.

-->
<footer class="footer" role="contentinfo">
	<div class="w-wrapper grid-3x1">

		<!-- copyright -->
		<div class="info">
			<p class="copyright">
				&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. <?php _e('Powered by', 'Spectreblank'); ?>
				<a href="//wordpress.org" title="WordPress">WordPress</a> &amp; <a href="//Spectreblank.com" title="Spectre Blank">Spectre</a>.
			</p>
			<!-- /copyright -->

		</div>

		<div class="main-nav">
			<?php wp_nav_menu(array( 'theme_location' => 'main' )); ?>
		</div>

		<div class="legal-nav">
			<?php wp_nav_menu(array( 'theme_location' => 'legal' )); ?>
		</div>
	</div>

</footer>
<!-- /footer -->

<?php wp_footer(); ?>
<!-- scripts -->
<script src="https://kit.fontawesome.com/8928e65948.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js" integrity="sha512-WNLxfP/8cVYL9sj8Jnp6et0BkubLP31jhTG9vhL/F5uEZmg5wEzKoXp1kJslzPQWwPT1eyMiSxlKCgzHLOTOTQ==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.0/anime.js" charset="utf-8"></script>
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
