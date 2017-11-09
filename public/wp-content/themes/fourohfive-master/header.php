<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package fourohfive
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body class="sticky-footer">

	<a class="sr-only" href="#content"><?php echo 'Skip to content'; ?></a>

	<header id="masthead">

		<?php

		/* This theme supports custom logos — see functions.php — so we load the logo here. */
		the_custom_logo();

		/**
		 * Check if we're on the homepage.
		 *
		 * If we're home, then display the site title with an <h1>, otherwise, display it with a <p>
		 * so we can use the <h1> for the post or page title.
		 */
		if ( is_front_page() && is_home() ) : ?>
			<h1>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
			</h1>
		<?php else : ?>
			<p>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
			</p>
		<?php
		endif; ?>

		<nav id="global-nav" class="global-nav">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php echo 'Menu'; ?></button>
			<?php
				/**
				 * This creates a menu area that we can edit via the dashboard.
				 * It's where our global nav will appear.
				 *
				 * @link https://developer.wordpress.org/reference/functions/wp_nav_menu/
				 */
				wp_nav_menu( array(
					'theme_location' => 'global-nav',
					'menu_id'        => 'global-nav',
				) );
			?>
		</nav>
	</header>

	<?php
		/**
		 * Don't delete that div — it acts as an anchor for the skip-nav above.
		 * We close it at the start of our footer.php fie.
		 */
	?>
	<div id="content">
