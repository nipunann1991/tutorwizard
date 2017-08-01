		<div class="section container-fluid section1 slider_content home" id="home">
			<div id="slider_bg" class="carousel slide carousel-fade" data-ride="carousel">
				  <!-- Indicators -->
				  <ol class="carousel-indicators">
				    <li data-target="#slider_bg" data-slide-to="0" class="active"></li>
				    <li data-target="#slider_bg" data-slide-to="1"></li>
				    <li data-target="#slider_bg" data-slide-to="2"></li>
				    <li data-target="#slider_bg" data-slide-to="3"></li>
				    <li data-target="#slider_bg" data-slide-to="4"></li>
				    <li data-target="#slider_bg" data-slide-to="5"></li>
				  </ol>
				  <!-- Wrapper for slides -->
				  <div class="carousel-inner" role="listbox">
				    <div class="item item1 active" data-image-src="<?php echo get_template_directory_uri(); ?>-child/assets/images/green_blue_bg.jpg" >
				    	<div class="container vertical_align"  >
				    		<div class="vertical_align_content">
					    		<div class="logo wow fadeInUp" data-wow-duration="1s">
					    			<img src="<?php echo get_template_directory_uri(); ?>-child/assets/images/logo_white.png"  alt="">
					    		</div>
					    		<?php  getCustomPost(66);  ?>
				    		</div>
				    	</div>
				    </div>
				    <div class="item">
				    	<div class="container vertical_align">
				    		<div class="slider_block col-lg-5 col-md-5 col-sm-5 col-xs-5 slider2_left hidden-xs">
				    			<div class="slider_block_inner slider2">
				    				<div class="top">
				    					<div class="logo">
				    						<img src="<?php echo get_template_directory_uri(); ?>-child/assets/images/logo_white.png"  alt="">
				    					</div>
				    				</div>
				    				<div class="bottom">
				    					<h3>Smart Learning</h3>
				    				</div>
				    			</div>
				    		</div>
				    		<div class="slider_block col-lg-7 col-md-7 col-sm-7 col-xs-12 slider2_right">
				    			<div class="slider_block_inner">
				    				<?php  getCustomPost(69);  ?>
				    			</div>
				    		</div>
				    	</div>
				    </div>
				    <div class="item slider3">
				    	<div class="container">
				    		<div class="slider_block slider3_left col-lg-5 col-md-5  col-sm-7 col-xs-7">
				    			<div class="slider_block_inner">
				    				<?php  getCustomPost(71);  ?>
				    			</div>
			    			</div>
			    			<div class="slider_block col-lg-7  col-sm-7  col-md-7  col-xs-7 slider3_right">
			    				<div class="slider_block_inner">
			    					<?php  getCustomPost(73);  ?>
			    				</div>
			    			</div>
			    			<div class="col-lg-12 slider_block_btn">
			    				 <button class="btn sign_up " data-id="sign-up">Sign Up</button>
			    			</div>
				    	</div>
				    </div>
				    <div class="item slider4">
				    	<div class="container vertical_align">
							<?php  getCustomPost(75);  ?>
				    	</div>
				    </div>
				     <div class="item slider5">
				    	<div class="container vertical_align">
				    		<div class="slider_block col-lg-5 col-md-5 col-sm-5 col-xs-12 slider5_left">
				    			<div class="slider_block_inner">
									<?php  getCustomPost(79);  ?>
				    			</div>
				    		</div>
				    		<div class="slider_block col-lg-7 col-md-7 col-sm-7 slider5_right">
				    			<div class="slider_block_inner">
				    			</div>
				    		</div>
				    	</div>
				    </div>
				    <div class="item slider6">
				    	<div class="container vertical_align">
				    		<div class="slider_block col-lg-5 col-md-5 col-sm-5 col-xs-12 slider6_left">
				    			<div class="slider_block_inner">
									<img src="<?php echo get_template_directory_uri(); ?>-child/assets/images/door.png" alt="">
				    			</div>
				    		</div>
				    		<div class="slider_block col-lg-7 col-md-7 col-sm-7 slider6_right">
				    			<div class="slider_block_inner">
				    				<?php  getCustomPost(354);  ?>
				    			</div>
				    		</div>
				    	</div>
				    </div>
				  </div>
			</div>
		</div>
	<div id="thing"></div>
		<div class="section container-fluid home section2 " id="section2">2
			<div class="content">
				<div class="content_inner">
					<div class="container">
						<h2 class="wow fadeInLeft" data-wow-delay="0s" data-wow-duration="1s"><span class="edit"><?php twentyseventeen_edit_link( get_the_ID() ); ?></span> <?php the_title(); ?></h2> 
						<div class="content_block wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1s" alt="">
						<?php // Show the selected frontpage content.
							if ( have_posts() ) :
								while ( have_posts() ) : the_post();
									the_content( sprintf(
										__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
										get_the_title()
									));
								endwhile;
						endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
	 
		<div class="section container-fluid home section3">
			<div class="content">
				<div class="content_inner">
					<div class="container"> 
						<?php  getCustomPost(17);  ?> 
					</div>
				</div>
			</div>
		</div>
		<div class="section section4 home container-fluid" id="">
			<div class="content">
				<div class="content_inner">
					<div class="container">
						<h2 class="wow fadeInLeft" data-wow-delay="0s" data-wow-duration="1s" >Why Tutor Wizard?</h2>
						<div class="grid row">
							<div class="grid-item hvr-grow col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-id="features/learning_zone" data-wow-delay="0.5s" data-wow-duration="1s">
							  	<div class="block bg_blue">
							  		<div class="block_inner">
 										<?php  getCustomPost(23);  ?> 
									</div>
							  	</div>
							</div>
							<div class="grid-item hvr-grow col-lg-8 col-md-8 col-sm-8 wow fadeInUp" data-id="features/assessment_center" data-wow-delay="0.5s" data-wow-duration="1s">
							  	<div class="block red_bg ">
							  		<div class="block_inner bg1 short_content">
									  <?php  getCustomPost(34);  ?> 
									</div>
								</div>
							</div>
							<div class="grid-item hvr-grow col-lg-8 col-md-8 col-sm-8 wow fadeInUp" data-id="features/performance" data-wow-delay="0.5s" data-wow-duration="1s">
							  	<div class="block green_bg ">
							  		<div class="block_inner bg2 short_content">
									  	<?php  getCustomPost(37);  ?> 
									</div>
								</div>
							</div>
							<div class="grid-item hvr-grow col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-id="features/tutor_help" data-wow-delay="0.5s" data-wow-duration="1s">
							  	<div class="block">
							  		<div class="block_inner bg3">
										<?php  getCustomPost(41);  ?>
									</div>
							  	</div>
							</div>
							<div class="grid-item hvr-grow col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-id="features/support" data-wow-delay="0.5s" data-wow-duration="1s">
							  	<div class="block orange_bg">
							  		<div class="block_inner bg4">
										<?php  getCustomPost(49);  ?>
									</div>
							  	</div>
							</div>
							<div class="grid-item hvr-grow col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-id="features/star_prizes" data-wow-delay="0.5s" data-wow-duration="1s">
							  	<div class="block yellow_bg">
							  		<div class="block_inner bg7">
										<?php  getCustomPost(51);  ?>
									</div>
							  	</div>
							</div>
							<div class="grid-item hvr-grow col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-id="features" data-wow-delay="0.5s" data-wow-duration="1s">
							  	<div class="block red_bg1">
							  		<div class="block_inner">
										<?php  getCustomPost(54);  ?>
									</div>
							  	</div>
							</div>
							<div class="grid-item hvr-grow col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-id="features/study_area" data-wow-delay="0.5s" data-wow-duration="1s">
							  	<div class="block green_bg">
							  		<div class="block_inner bg5">
										<?php  getCustomPost(56);  ?>
									</div>
							  	</div>
							</div>
							<div class="grid-item hvr-grow col-lg-8 col-md-8 col-sm-8 wow fadeInUp" data-id="features" data-wow-delay="0.5s" data-wow-duration="1s">
							  	<div class="block bg_blue_horizontal">
							  		<div class="block_inner bg6 short_content">
										<?php  getCustomPost(58);  ?>
									</div>
							  	</div>	  
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section container-fluid home section5">
			 <div class="content">
				<div class="content_inner">
					<div class="container">
						<?php  getCustomPost(61);  ?>
					</div>
				</div>
			</div>
		</div>
		<div class="section container-fluid home section6" >
			<div class="section_inner">
				<div class="content">
					<div class="content_inner">
						<div class="container">
							<?php  getCustomPost(64);  ?>
						</div> 
					</div> 
				</div> 
			</div>  
		</div> 