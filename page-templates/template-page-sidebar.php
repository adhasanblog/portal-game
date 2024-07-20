<?php
///**
// * Template Name: Sidebar Page (Seblog)
// *
// * This is the template that displays page with sidebar
// *
// * It contains header, footer and content with sidebar
// *
// * @package Seblog
// */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


if ( have_posts() ):
	while ( have_posts() ): the_post();
		get_template_part( 'template-parts/content-page', 'sidebar' );
	endwhile;
endif;

