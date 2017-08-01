<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

	<nav class="navbar navbar-inverse navbar-fixed-top row" id="website_nav">
	  <div class="container-fluid">
	  <div class="container">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>

	      <a class="navbar-brand" href="<?php echo get_site_url(); ?>" data-id="home" >
			<img src="<?php echo get_template_directory_uri(); ?>-child/assets/images/tutor_wizard.png" alt="">
	      </a>

	    </div>

	    <div class="collapse navbar-collapse" id="myNavbar">
	    	<li style="list-style: none; float:right; "> 
	        	<button data-id="sign-up" class="btn sign_up  waves-effect waves-button waves-float">Sign Up</button>
	        	<button data-id="login" class="btn login navigate login_nw_color waves-effect waves-button waves-float">Login</button>
	        </li>
	    	<?php if ( has_nav_menu( 'top' ) ) : ?> 
	    		
						<?php wp_nav_menu( array(
							'theme_location' => 'top',
							'menu_class' => 'nav navbar-nav pull-right',
							'menu_id' => 'nav', 
						) ); ?> 
				 
			<?php endif; ?>
 			
	    </div>
	    </div>
	  </div>
	</nav>

<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'twentyseventeen' ); ?>">
	<button class="menu-toggle" aria-controls="top-menu" aria-expanded="false">
		<?php
		echo twentyseventeen_get_svg( array( 'icon' => 'bars' ) );
		echo twentyseventeen_get_svg( array( 'icon' => 'close' ) );
		_e( 'Menu', 'twentyseventeen' );
		?>
	</button>


</nav><!-- #site-navigation -->
