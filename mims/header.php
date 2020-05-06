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
		<?php wp_head(); ?>
    </head>

<body <?php body_class(); ?>>
	<header id="masthead" class="site-header" role="banner">
		<hgroup>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</hgroup>

		<nav id="mims-navigation" role="navigation">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary-menu',
					'menu_class'     => 'nav-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->

	</header><!-- #masthead -->


