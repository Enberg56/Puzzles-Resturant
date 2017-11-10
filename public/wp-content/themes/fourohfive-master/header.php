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
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body class="sticky-footer">
	<header id="masthead">
		<nav id="global-nav" class="global-nav">
			<ul>
			  <li><a class="active" href="#top">Top</a></li>
			  <li><a href="#resturants">Resturants/Reservations</a></li>
			  <li><a href="#menu-nav">Menu</a></li>
			  <li><a href="#about">About us</a></li>
			</ul>
		</nav>
	</header>

	<?php
		/**
		 * Don't delete that div — it acts as an anchor for the skip-nav above.
		 * We close it at the start of our footer.php fie.
		 */
	?>
	<div id="content">
