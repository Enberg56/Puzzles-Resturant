<?php
the_post_thumbnail('full',['class' => 'img-fluid']); 
?>

<?php the_title('<h1>', '</h1>'); ?>
<h2>
<?php the_field('title'); ?>
</h2>

<p>
	<?php the_field('description'); ?>
</p>

<img src="<php the_field('photo');?>" alt="">
<?php the_content(); ?>