<?php
/**
 * Template Name: Scroller
 */
get_header(); ?>
<main class="container">
	<div class="mid p4" id="resturants">

		<?php //-------------start map

$location = get_field('map');

if( !empty($location) ):
?>
<div class="acf-map">
	<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
</div>
<?php endif;//--------------- end map ?>

	</div>
			<h3 class="mid">Our menues</h3>
<?php 
// parent loop
if( have_rows('menu_types') ):
    while( have_rows('menu_types') ) : the_row();    
    	?>		
		<nav class="main-navigation" id="menu-nav">			
			<?php 				
			// child loop
			if( have_rows('lunch') ): ?>
				<ul class="menu">
<<<<<<< HEAD
					<li class="menu-dropdown"><a href="#">Lunch</a>
						<ul class="sub-menu">
					    <?php while( have_rows('lunch') ) : the_row(); ?>				
							<li><a href="#"><?php the_sub_field('lname'); ?>
							 <?php the_sub_field('ldesctiption'); ?>
							 <?php the_sub_field('lprice'); ?></a></li>			
						<?php endwhile; ?>				
						</ul>
					</li>
			<?php endif; // end first child loop ?>		
=======
					<li class="menu-dropdown"><a href="#">Lunch</a></li>
					<ul class="sub-menu">
				    <?php while( have_rows('lunch') ) : the_row(); ?>				
						<li><a href="#"><?php the_sub_field('lname'); ?>
						 <?php the_sub_field('ldesctiption'); ?>
						 <?php the_sub_field('lprice'); ?></a></li>			
					<?php endwhile; ?>				
					</ul>
			<?php endif; 
			// end first child loop ?>		
>>>>>>> parent of 1f92e5b... it fucking worked!!!
				<?php 
			// -----------------secound child loop
			if( have_rows('dinner') ): ?>
				<li class="menu-dropdown"><a href="#">Dinner</a>
					<ul class="sub-menu">
				    <?php while( have_rows('dinner') ) : the_row(); ?>				
						<li><a href="#"><?php the_sub_field('diname'); ?>
						 <?php the_sub_field('didesctiption'); ?>
						 <?php the_sub_field('diprice'); ?></a></li>
					<?php endwhile; ?>		
					</ul>
				</li>
			<?php endif; 
			// --------------- end secound child loop ?>
			<?php
			// -----------------third child loop
			if( have_rows('dessert') ): ?>
				<li class="menu-dropdown"><a href="#">Dessert</a>
					<ul class="sub-menu">
				    <?php while( have_rows('dessert') ) : the_row(); ?>				
						<li><a href="#"><?php the_sub_field('dename'); ?>
						 <?php the_sub_field('dedesctiption'); ?>
						 <?php the_sub_field('deprice'); ?></a></li>
					<?php endwhile; ?>
					</ul>
				</li>
			<?php endif;
			// --------------- end third child loop	?>
						<?php
			// -----------------fourth child loop
			if( have_rows('drinks') ): ?>
				<li class="menu-dropdown"><a href="#">Drinks</a>
					<ul>
				    <?php while( have_rows('drinks') ) : the_row(); ?>			
						<li><a href="#"><?php the_sub_field('drname'); ?>
						 <?php the_sub_field('drdesctiption'); ?>
						 <?php the_sub_field('drprice'); ?></a></li>
					<?php endwhile; ?>		
					</ul>
				</li>
			<?php endif;
			// --------------- end fourth child loop	?>
		</ul>
		</nav>
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
<p class="mid p2" id="about"><?php the_field('our_story') ?></p>
</main>
<?php
get_footer();