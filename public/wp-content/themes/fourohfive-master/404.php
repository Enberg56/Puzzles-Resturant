<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 * @package fourohfive
 */

get_header(); ?>

<main>
	<h1>Page Not Found</h1>
	<p>Well?</p>

	<?php
	/**
	 * Get a search form for the 404 page.
	 * It's the least we can do.
	 */
	get_search_form();
	?>
</main>

<?php
get_footer();
