<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 *
 * @package Seblog
 * @since 1.0.0
 *
 * This is the index.php file for the Seblog theme.
 */

$with_sidebar = true;

get_header();

if ( $with_sidebar ) {
	get_template_part( 'template-parts/content-page', 'sidebar' );
} else {
	get_template_part( 'template-parts/content-page', 'full' );
}

get_footer();