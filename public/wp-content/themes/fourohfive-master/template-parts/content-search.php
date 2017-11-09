<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @package fourohfive
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php the_post_thumbnail('medium', ['class' => 'img-fluid']); ?>
	<header>
		<?php
			the_title( '<h2><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' );
		?>

		<p>By <?php the_author(); ?> on <?php the_date(); ?></p>
	</header>

	<?php
		/**
		 * The <div> below is surrounding your post content. You can change it from a <div>
		 * to something else if you wish. You can also add classes to it, etc. It all
		 * depends on how you want to format things
		 */
	?>
	<div>
		<?php the_excerpt(); ?>
	</div>

	<footer>
		<p><?php the_category( ', ' ); ?></p>

		<?php

			/* Check if the post has any tags, and if so, display a headling and some tags. */
			if(get_the_tag_list()) {
				echo '<h2>Tags</h2>';
				echo get_the_tag_list('<ul><li>','</li><li>','</li></ul>');
			}

		?>
	</footer>
</article>