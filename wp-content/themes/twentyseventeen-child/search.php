<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="section container-fluid section1 blog" > 
	<div class="content"> 
	 	 <div class="container">
			
			<div class="row">
				
				<div class="col-md-12">
					<?php if ( have_posts() ) : ?>
						<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentyseventeen' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
					<?php else : ?>
						<h1 class="page-title"><?php _e( 'Nothing Found', 'twentyseventeen' ); ?></h1>
					<?php endif; ?>

				</div>
				<div class="col-sm-9 col-md-9 col-lg-9 left_container">
 

					<?php
					if ( have_posts() ) :
						/* Start the Loop */
						while ( have_posts() ) : the_post();

							/**
							 * Run the loop for the search to output the results.
							 * If you want to overload this in a child theme then include a file
							 * called content-search.php and that will be used instead.
							 */
							get_template_part( 'template-parts/post/content', 'excerpt' );
							echo "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis maiores, molestiae iste? Ratione dignissimos autem est, quaerat dolores error tempora molestiae temporibus fugit modi cupiditate repellendus maxime dolor, sint tempore!";

						endwhile; // End of the loop.

						the_posts_pagination( array(
							'prev_text' => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'twentyseventeen' ) . '</span>',
							'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
							'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyseventeen' ) . ' </span>',
						) );

					else : ?>

						<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'twentyseventeen' ); ?></p>
						<?php
							get_search_form();

					endif;
					?>

				</div>

				<div class="col-sm-3 col-md-3 col-lg-3 right_container"> 
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer();
