<div class="section container-fluid section1 <?php the_title(); ?>" >
	<div class="content">
	 	<div class="content_inner">
	 		<div class="container">


			 <h1>
			 	<span class="edit"><?php twentyseventeen_edit_link( get_the_ID() ); ?></span>
			 	<?php the_title(); ?>
			 </h1>
		
	 
	 
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
				'after'  => '</div>',
			) );
		?>
	 		 
	 	</div>
	</div>
</div>