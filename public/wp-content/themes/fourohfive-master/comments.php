<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @package fourohfive
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments">

	<?php
	/* Check to see if we have comments, and if so, show them. */
	if ( have_comments() ) : ?>

		<h2 class="comments-title">
			<?php
				$comment_count = get_comments_number();
				if ( $comment_count == 1 ) {
					echo 'One thought on &ldquo;'. get_the_title() .'&rdquo;';
				} elseif ($comment_count > 1) {
					echo $comment_count .'thoughts on &ldquo;'. get_the_title() .'&rdquo;';
				} else {
					echo 'No thoughts on &ldquo;'. get_the_title() .'&rdquo;';
				}
			?>
		</h2>

		<?php
			/* This loads comment pagination, ex. previous/next page. */
			the_comments_navigation();
		?>

		<ol class="comment-list">
			<?php
				/**
				 * The actually comments are displayed here, in an <ol>
				 * @link https://developer.wordpress.org/reference/functions/wp_list_comments/
				 */
				wp_list_comments( array(
					'style'      => 'ol',
					'short_ping' => true,
				) );
			?>
		</ol>

		<?php the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) : ?>
			<p>Comments are closed</p>
		<?php
		endif;

	/* Close the conditional that checks for comments. */
	endif;

	/* Get the comment form. */
	comment_form();
	?>

</div>
