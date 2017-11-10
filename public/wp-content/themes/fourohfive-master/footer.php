<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package fourohfive
 */

?>

			<?php /* Close the #content div from header.php */ ?>
			</div>

			<footer class="container">
				<p>Copyright &copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>. All rights reserved. </p>
				<script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?key=AIzaSyClOyBv3G6udf76f7nDpDGF359e0Ivak9Q'></script>

			</footer>
		
		<?php wp_footer(); ?>
	</body>
</html>
