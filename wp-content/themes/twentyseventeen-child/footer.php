<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */
?>
		<span class="glyphicon glyphicon-menu-up scrollToTop" aria-hidden="true"></span>
		</main><!-- #content -->
		<div class="container-fluid footer" > 
			<div class="container" >
				<div class="top row">
					<div class="col-md-8 col-md-offset-2 padding0">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'footer',
								'menu_class'     => 'footer_nav',
								'menu_id' => 'footer_nav',
								'container' => false,
							) );
						?>
						<?php dynamic_sidebar( 'second-footer-widget-area' ); ?> 
					</div>  
					<div class="clearfix"></div>
				</div>
				<div class="mid row">
					<div class="col-md-7 col-md-offset-3 padding0">
					<?php
							wp_nav_menu( array(
								'theme_location' => 'terms',
								'menu_class'     => 'additional_links', 
								'container' => false,
							) );
						?>
				</div>
				<div class="clearfix"></div>
				</div>
				<div class="copyright">
					<?php dynamic_sidebar( 'first-footer-widget-area' ); ?> 
				</div>
			</div> 
		</div>
		<!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
