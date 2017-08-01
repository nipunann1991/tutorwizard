<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>



	<?php
	while ( have_posts() ) : the_post();

		$post = get_post();

		switch ($post->ID) {
			case '86':  /* Features Page */
				get_template_part( 'templates/features');
				break;

			case '114':  /* Prizes Page */
				get_template_part( 'templates/prizes');
				break;

			case '124':  /* Benefits Page */
				get_template_part( 'templates/benifits'); 
				break;

			case '158':  /* Subscription Page */
				get_template_part( 'templates/subscription');
				break;

			case '183':  /* Competition Page */
				get_template_part( 'templates/competition');
				break;

			case '212':  /* Competition Page */
				get_template_part( 'templates/testimonials');
				break;

			case '218':  /* Competition Page */
				get_template_part( 'templates/contact');
				break;

			 

			default:
				get_template_part( 'templates/custom-page' );
				break;
		}




		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;

	endwhile; // End of the loop.
	?>


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