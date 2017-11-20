<?php
/**
 * Template Name: Scroller
 */
get_header(); ?>
<div class="fillgnav"></div>
<main>
<div>
	<?php 
    echo do_shortcode("[metaslider id=79]");
	?>
</div>
			<h3 class="mid tittle" id="menu-nav">MENU</h3>
<?php
// start loop ----------------////////////
if( have_rows('menu_types') ):
    while( have_rows('menu_types') ) : the_row();
    	?>
		<section>
			<?php
			// child loop
			if( have_rows('lunch') ): ?>
				<input id="tab-one" type="radio" name="grp" checked="checked"/>
				<label for="tab-one">Lunch</label>
			    <div class="divcont">
			    <?php while( have_rows('lunch') ) : the_row(); ?>	
					 <h3><?php the_sub_field('lname'); ?></h3>
					 <p><?php the_sub_field('ldesctiption'); ?></p>
					 <p><?php the_sub_field('lprice'); ?>.-</p>
					 <br>
				<?php endwhile; ?>
				</div>	
			<?php endif; // end first child loop ?>		
				<?php 
			// -----------------secound child loop
			if( have_rows('dinner') ): ?>
				<input id="tab-two" type="radio" name="grp" />
				<label for="tab-two">Dinner</label>
				<div class="divcont">
			    <?php while( have_rows('dinner') ) : the_row(); ?>
					<h3><?php the_sub_field('diname'); ?></h3>
					 <p><?php the_sub_field('didesctiption'); ?></p>
					 <p><?php the_sub_field('diprice'); ?>.-</p>
					 <br>
				<?php endwhile; ?>	
				</div>	
			<?php endif; 
			// --------------- end secound child loop ?>
			<?php
			// -----------------third child loop
			if( have_rows('dessert') ): ?>
					<input id="tab-three" type="radio" name="grp" />
					<label for="tab-three">Dessert</label>
					<div class="divcont">				    
				    <?php while( have_rows('dessert') ) : the_row(); ?>				
						<h3><?php the_sub_field('dename'); ?></h3>
						 <p><?php the_sub_field('dedesctiption'); ?></p>
						 <p><?php the_sub_field('deprice'); ?>.-</p>
						 <br> 
					<?php endwhile; ?>
					</div>
			<?php endif;
			// --------------- end third child loop	?>
			<?php
			// -----------------fourth child loop
			if( have_rows('drinks') ): ?>
				<input id="tab-four" type="radio" name="grp" />
				<label for="tab-four">The Bar</label>
				<div class="divcont">				    
				    <?php while( have_rows('drinks') ) : the_row(); ?>			
						<h3><?php the_sub_field('drname'); ?></h3>
						 <p><?php the_sub_field('drdesctiption'); ?></p>
						 <p><?php the_sub_field('drprice'); ?>.-</p>
						 <br>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
		</section>
		<?php		
    endwhile;
endif;
// end loop-------------------////////////////////////////
?>


<div class="p2 ps" id="about">
	<h3 class="tittle">This is us</h3>
	<div class="about">
	<?php if( get_field('crew_pic') ): ?>

	<img src="<?php the_field('crew_pic'); ?>" />

<?php endif; ?>
	</div>
	<?php the_field('our_story') ?>
</div>

<div class="mid p4" id="resturants">
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
</div>
</main>
<?php
get_footer();