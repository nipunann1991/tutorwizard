<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>-child/assets/images/favicon.png"/>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
 
 <div id="loader-wrapper">

    <div id="loader"> 
    	<div class="uil-flickr-css"> 
    		<div></div> 
    		<div></div> 
    	</div> 
    </div>  

    <div class="loader-section section-left"></div> 
    <div class="loader-section section-right"></div>  
</div>

<div id="page" class="site">
	 <?php get_template_part( 'nav', 'top' ); ?> 
	 
	<main id="main" class="site-main" role="main">
