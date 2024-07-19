<?php
/**
 * Template part for displaying main navigation
 *
 * @package Seblog
 * @since 1.0.0
 *
 */

wp_nav_menu( array(
	'theme_location' => 'primary',
	'container'      => 'ul',
	'menu_class'     => 'navbar-nav me-auto mb-2 mb-lg-0',
) );