<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>


	<?php get_template_part( 'templates/home'  ); ?>
 	
 	<script>
 		  Waves.init();
		  Waves.attach('.btn', ['waves-button', 'waves-float']);
		  Waves.attach('.nav a', ['waves-button', 'waves-float']);
		  Waves.attach('.navigation_links li', ['waves-button', 'waves-float']);
  
		$('.grid').masonry({
    		itemSelector: '.grid-item',

  		});
	</script>

<?php get_footer();
