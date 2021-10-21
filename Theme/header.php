<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<!-- META -->
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<!-- THEME-COLORS -->
		<meta name="theme-color" content="#ffffff" media="(prefers-color-scheme: light)">
		<meta name="theme-color" content="#ffffff" media="(prefers-color-scheme: dark)">

		<!-- FAVICONS -->
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicons/favicon.ico" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicons/apple-touch-icon.png" rel="apple-touch-icon-precomposed">

		<?php wp_head(); ?>

		<!-- Conditionizr -->
		<script type="text/javascript">
		// conditionizr.com
		// configure environment tests
		conditionizr.config({
			assets: '<?php echo esc_url( get_template_directory_uri() ); ?>',
			tests: {}
		});
		</script>

	</head>
	<body <?php body_class(); ?>>
		<?php include 'sections/01_ui/navigation.php';?>
