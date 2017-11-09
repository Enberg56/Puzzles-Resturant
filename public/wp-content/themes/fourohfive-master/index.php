<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @package fourohfive
 */

/**
 * The header is loaded here using the get_header() function, it's basically
 * the same thing as an include() function.
 */
get_header(); ?>

<main class="container">

    <?php
    /* Check if there are any posts in the database. */
    if ( have_posts() ) :

        /* Start the loop if there are posts and display posts here. */
        while ( have_posts() ) :

            /* This is the post. */
            the_post();

            /**
             * Get the post template. Again, this is basically an include().
             * The first argument is a link to the template file.
             * The second argument — 'home' — is referencing the template type.
             *
             * Example: content-home.php
             *
             * In otherwords, the second argument is the name that comes
             * after the hyphen.
             */
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
/* Get the sidebar, which often contains widget areas. */
get_sidebar();

/* Get the footer. */
get_footer();
