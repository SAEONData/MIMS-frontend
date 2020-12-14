<?php
/**
 * The Header template for our theme
 */
?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<link rel="profile" href="https://gmpg.org/xfn/11">
        <!-- Google fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,700;0,800;1,400&display=swap" rel="stylesheet">

		<?php wp_head(); ?>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-175911450-1"></script>
		<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'UA-175911450-1');
		</script>
    </head>

<body <?php body_class(); ?>>
	<header class="mims-header" role="banner">
		<hgroup>
        <img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo-icon.png " />
		<span><strong>Marine Information Management System</strong><br />South Africa's oceans and coastal data archive<?php// bloginfo( 'description' ); ?></span>
		</hgroup>

		<nav id="navigation" role="navigation">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary-menu',
                    'depth'           => 2
				)
			);
			?>
		</nav><!-- #site-navigation -->
        

	</header><!-- #masthead -->


