<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @package fourohfive
 */

get_header(); ?>

<main class="container">

	<?php
	/* Check if there are any posts that match our search query, and if so, display them. */
	if ( have_posts() ) : ?>

		<header>
			<?php
				/* Get the archive title, ex. date, category, tag, etc. */
				the_archive_title( '<h1>', '</h1>' );

				/* Get the archive description, if any. */
				the_archive_description( '<div>', '</div>' );
			?>
		</header>

		<?php
		/* Start the loop if there are posts and display posts here. */
		while ( have_posts() ) :

			/* This is the post. */
			the_post();

			/* Get content-search.php */
			get_template_part( 'template-parts/content', 'post' );

		/* This stops the while loop, but not the conditional that checks for posts. */
		endwhile;

		/* This displays the pagination options (previous/next page). */
		the_posts_navigation();

		/* Now we choose what gets shown if there are no posts to display. */
		else :

			/**
			 * Get the No Content template.
			 * This looks for content-none.php inside the template-parts folder.
			 */
			get_template_part( 'template-parts/content', 'none' );

	/* End the posts conditional. */
	endif; ?>

</main>

<?php
get_sidebar();
get_footer();