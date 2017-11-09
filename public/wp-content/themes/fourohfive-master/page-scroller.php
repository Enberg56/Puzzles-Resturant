<?php
/**
 * Template Name: Scroller
 */
get_header(); ?>
<main>
	<div class="mid">
		<?php the_field('map') ?>
	</div>
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
					 <?php the_sub_field('ldesctiption'); ?>
					 <?php the_sub_field('lprice'); ?></li>			
				<?php endwhile; ?>				
				</ul>
			<?php endif; 
			// end first child loop ?>		
				<?php 
			// -----------------secound child loop
			if( have_rows('dinner') ): ?>
				<ul>
			    <?php while( have_rows('dinner') ) : the_row(); ?>				
					<li><b><?php the_sub_field('diname'); ?></b>
					 <?php the_sub_field('didesctiption'); ?>
					 <?php the_sub_field('diprice'); ?></li>
				<?php endwhile; ?>		
				</ul>
			<?php endif; 
			// --------------- end secound child loop ?>
			<?php
			// -----------------third child loop
			if( have_rows('dessert') ): ?>
				<ul>
			    <?php while( have_rows('dessert') ) : the_row(); ?>				
					<li><b><?php the_sub_field('dename'); ?></b>
					 <?php the_sub_field('dedesctiption'); ?>
					 <?php the_sub_field('deprice'); ?></li>
				<?php endwhile; ?>		
				</ul>
			<?php endif;
			// --------------- end third child loop	?>
						<?php
			// -----------------fourth child loop
			if( have_rows('drinks') ): ?>
				<ul>
			    <?php while( have_rows('drinks') ) : the_row(); ?>				
					<li><b><?php the_sub_field('drname'); ?></b>
					 <?php the_sub_field('drdesctiption'); ?>
					 <?php the_sub_field('drprice'); ?></li>
				<?php endwhile; ?>		
				</ul>
			<?php endif;
			// --------------- end fourth child loop	?>
		</div>
		<?php		
    endwhile;
endif;
// end parent loop-------------------
?>

	<?php
	while ( have_posts() ) : the_post();
		/* Get content-page.php */ ?>
	
		<?php
		get_template_part( 'template-parts/content-scroller', 'scroller' );

		

		/* If comments are open or we have at least one comment, load up the comment template. */
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;

	endwhile;
	?>
<p class="mid p4"><?php the_field('our_story') ?></p>
</main>
<?php
get_footer();