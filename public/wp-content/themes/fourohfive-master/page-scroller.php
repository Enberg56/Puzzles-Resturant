<?php
/**
 * Template Name: Scroller
 */

get_header(); ?>

<main>

	<?php the_field('map') ?>
	
<?php 

// parent loop
if( have_rows('menu_types') ):
    while( have_rows('menu_types') ) : the_row();    
    	?>		
		<div class="row">			
			<h3><?php the_sub_field('Our menues'); ?></h3>
			<?php 				
			// child loop
			if( have_rows('lunch') ): ?>
				<ul>
			    <?php while( have_rows('lunch') ) : the_row(); ?>				
					<li><b><?php the_sub_field('lname'); ?></b>
					 <?php the_sub_field('ldescription'); ?>
					 <?php the_sub_field('lprice'); ?></li>			
				<?php endwhile; ?>				
				</ul>			
			<?php endif;
			// end child loop			
			?>			
		</div>
		<?php		
    endwhile;
endif;
// end parent loop
?>

	<?php
	while ( have_posts() ) : the_post();
		/* Get content-page.php */ ?>
	
		<?php
		get_template_part( 'template-parts/content', 'scroller' );

		

		/* If comments are open or we have at least one comment, load up the comment template. */
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;

	endwhile;
	?>

</main>

<?php
get_footer();