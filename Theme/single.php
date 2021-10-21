<?php
/* 		POST-TEMPLATE

	*		TODO: Post-Seitentemplate nach Design erstellen
	*		TODO: ACF einbinden
	*		TODO: AOS-Animationen erstellen

*/

get_header(); ?>

<main role="main">
	<?php
	include 'sections/03_parts/hero.php';
	include 'sections/02_content/wp_content.php';
	include 'sections/01_ui/pagebuild.php';
	?>
</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
