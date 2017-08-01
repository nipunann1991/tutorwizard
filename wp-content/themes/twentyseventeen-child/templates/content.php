<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	if ( is_sticky() && is_home() ) :
		echo twentyseventeen_get_svg( array( 'icon' => 'thumb-tack' ) );
	endif;
	?>
	<header class="entry-header">
		<?php
		 

		if ( is_single() ) {
			the_title( '<h1 class="entry-title">', '</h1>' );
			twentyseventeen_edit_link();
			echo '<small>'.get_the_date().'</small>';
		} elseif ( is_front_page() && is_home() ) {
			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		} else {
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			twentyseventeen_edit_link();
			echo '<small>'.get_the_date().'</small>';

		}
		?>
	</header><!-- .entry-header -->

	<?php if ( '' !== get_the_post_thumbnail() && ! is_single() ) : ?>
		<div class="post-thumbnail">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail( 'twentyseventeen-featured-image' ); ?>
			</a>
		</div><!-- .post-thumbnail -->
	<?php endif; ?>

	<div class="entry-content">
	 	<?php 
	 		$content = get_the_content();

	 		if (is_single() ) { 
	 			$trimmed_content = $content;
	 		}else{
	 			$trimmed_content = wp_trim_words( $content, 60, '<a href="'. get_permalink() .'">...[ read more ]</a>' );
	 		}

		  ?>
		  <p><?php echo $trimmed_content; ?></p>

		<?php 
		 

		wp_link_pages( array(
			'before'      => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
			'after'       => '</div>',
			'link_before' => '<span class="page-number">',
			'link_after'  => '</span>',
		) );
		?>
	</div><!-- .entry-content -->
	<small>Author: <?php echo get_author_name(); ?></small>;
	<?php
	// if ( is_single() ) {
	// 	twentyseventeen_entry_footer();
	// }
	?>

</article><!-- #post-## -->
