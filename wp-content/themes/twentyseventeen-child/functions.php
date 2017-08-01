<?php




function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '-child/assets/css/bootstrap.min.css' );
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '-child/assets/css/font-awesome.min.css' );
    wp_enqueue_style( 'animate', get_template_directory_uri() . '-child/assets/css/animate.css' );
    wp_enqueue_style( 'hover', get_template_directory_uri() . '-child/assets/css/hover.min.css' );
    wp_enqueue_style( 'waves', get_template_directory_uri() . '-child/assets/css/waves.min.css' );
    wp_enqueue_style( 'main-stylesheet', get_template_directory_uri() . '-child/assets/css/stylesheet.css' );
    wp_enqueue_style( 'main-stylesheet-responsive', get_template_directory_uri() . '-child/assets/css/responsive.css' );


}

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );



function my_theme_enqueue_scripts() {
	wp_enqueue_script( 'modernizr-2.8.3', 'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js' );
    wp_enqueue_script( 'jquery-1.12.4', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js' );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '-child/assets/js/bootstrap.min.js' );
    wp_enqueue_script( 'parallax', get_template_directory_uri() . '-child/assets/js/parallax.min.js' );
    wp_enqueue_script( 'jquery-easing-1.3', 'http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js' );
    wp_enqueue_script( 'wow', get_template_directory_uri() . '-child/assets/js/wow.min.js' );
    wp_enqueue_script( 'waves', get_template_directory_uri() . '-child/assets/js/waves.min.js' );
    wp_enqueue_script( 'scrollspy', get_template_directory_uri() . '-child/assets/js/scrollspy.js' ); 
    wp_enqueue_script( 'stacktable', get_template_directory_uri() . '-child/assets/js/stacktable.js' );
    wp_enqueue_script( 'masonry1', 'https://unpkg.com/masonry-layout@4.1.1/dist/masonry.pkgd.min.js' ); 
    wp_enqueue_script( 'bootbox', 'https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js' );
    wp_enqueue_script( 'custom-app', get_template_directory_uri() . '-child/assets/js/app.js' );

}

add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');


function wpb_custom_new_menu() {
  register_nav_menus(
    array(
      'footer' => __( 'Footer Menu' ),
      'terms' => __( 'Terms Menu' ),
    )
  );
}

add_action( 'init', 'wpb_custom_new_menu' );


function custom_widgets_init() {
 
    // First footer widget area, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'Copyright Text', 'copyright' ),
        'id' => 'first-footer-widget-area',
        'description' => __( 'Company copyright for footer', 'copyright' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
  
    register_sidebar( array(
        'name' => __( 'Footer Social Links', 'tutsplus' ),
        'id' => 'second-footer-widget-area',
        'description' => __( 'The second footer widget area', 'tutsplus' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) ); 
         
}
 
// Register sidebars by running tutsplus_widgets_init() on the widgets_init hook.
add_action( 'widgets_init', 'custom_widgets_init' );



function getCustomPost($postID){
		$post_content = get_post($postID);
		edit_post_link('<i class="fa fa-pencil" aria-hidden="true"></i> Edit', '', '', $postID, 'edit');
		$content = $post_content->post_content;
		echo do_shortcode( $content );//executing shortcodes
}

add_action( 'init', 'getCustomPost' );


function getCustomPostWithHeading($postID){
		$post_content = get_post($postID);
		edit_post_link('<i class="fa fa-pencil" aria-hidden="true"></i> Edit', '', '', $postID, 'edit');
		$content = $post_content->post_content;
		echo do_shortcode( $content );//executing shortcodes
}

add_action( 'init', 'getCustomPostWithHeading' );


 



remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );








?>