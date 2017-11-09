<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @package fourohfive
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('container'); ?>>
	<?php
		/**
		 * Gets the featured image.
		 * @link https://developer.wordpress.org/reference/functions/the_post_thumbnail/
		 */
		the_post_thumbnail('full', ['class' => 'img-fluid']);
	?>
	<header>
		<?php the_title( '<h1>', '</h1>' ); ?>
	</header>

	<?php
		/**
		 * The <div> below is surrounding your post content. You can change it from a <div>
		 * to something else if you wish. You can also add classes to it, etc. It all
		 * depends on how you want to format things
		 */
	?>
	<div>
		<?php

			/* This is your post content. */
			the_content();

			/**
			 * Display page numbers for entries that are split into multiple pages.
			 * The before/after array keys determine what content, if any, is used
			 * to wrap your page numbers.
			 *
			 * @link https://codex.wordpress.org/Function_Reference/wp_link_pages
			 */
			wp_link_pages( array(
				'before' => '<div>',
				'after'  => '</div>',
			) );

			/* Adds an Edit Page link. */
			edit_post_link('Edit Page', '<p>', '</p>');

		?>
	</div>
</article>
