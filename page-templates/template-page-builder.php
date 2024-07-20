<?php
/**
 * Template Name: Page Builder (Seblog)
 *
 * This is the template that displays page content used in page builder
 *
 * It contains header, footer and content
 *
 * @package Seblog
 * @since 1.0.0
 */

if ( have_posts() ) :
	while ( have_posts() ) : the_post();
		the_content();
	endwhile;
endif;