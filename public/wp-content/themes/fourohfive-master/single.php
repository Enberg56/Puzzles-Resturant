<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 * @package fourohfive
 */

get_header(); ?>

<main class="container">

	<?php
	while ( have_posts() ) : the_post();

		/* Get content-post.php */
		get_template_part( 'template-parts/content', 'post' );

		/**
		 * Get previous/next posts to display after the post content.
		 * @link https://developer.wordpress.org/reference/functions/the_post_navigation/
		 */
		the_post_navigation();

		/* If comments are open or we have at least one comment, load up the comment template. */
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;

	endwhile;
	?>

</main>

<?php
get_sidebar();
get_footer();
