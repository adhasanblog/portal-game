<?php
/**
 * Template Name: Full Width Page (Seblog)
 *
 * This is the template that displays full width page without sidebar
 *
 * It contains header, footer and 100% width content
 *
 * @package Seblog
 */


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


if ( have_posts() ):
	while ( have_posts() ): the_post();
		get_template_part( 'template-parts/content-page', 'full' );
	endwhile;
endif;
