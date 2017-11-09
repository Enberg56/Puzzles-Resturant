<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @package fourohfive
 */

?>

<section>
	<header>
		<h1>Nothing Found</h1>
	</header>

	<div>
		<?php
		/**
		 * This checks to see if we're on our home page, and if we're logged in and
		 * have permission to create content. If so, we can display a message to
		 * ourselves or other admins. Non-authenticated users cannot see this.
		 */
		if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p>You don&rsquo;t have anything posted yet. Go write something.</p>

		<?php
			/**
			 * This checks to see if its a failed search result, and if so, it
			 * displays an appropriate message.
			 */
			elseif ( is_search() ) : ?>

			<p>Sorry, but nothing matched your search terms. Please try again with some different keywords.</p>

		<?php

			/**
			 * Get a search form form for failed searches to try again.
			 * We do this because we can't count on admins including a search
			 * form on a sidebar or elsewhere (since it's dynamic(. At least
			 * this way we know a search form will appear.
			 */
			get_search_form();

		/**
		 * If we're neither logged in, and this missing content isn't the
		 * result of a failed search, then show the following message.
		 */				
		else : ?>

			<p>It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.</p>

			<?php

				/* Get a search form. */
				get_search_form();

		endif; ?>
	</div>
</section>
