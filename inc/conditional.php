<?php

/**
 * Functions for conditional checks.
 *
 * @package Seblog
 * @since 1.0.0
 */

/**
 * Check if a post is using a page builder.
 *
 * @param $post_id
 *
 * @return bool
 */
function is_using_page_builder( $post_id ) {
	// Get post object
	$post = get_post( $post_id );
	if ( ! $post ) {
		return false;
	}

	$content = $post->post_content;

	// Check if the post content has blocks
	if ( has_blocks( $content ) ) {
		return true;
	}

	// Check if the post content has shortcodes that are used by popular page builders
	$page_builder_shortcodes = array(
		'elementor',
		'vc_row',
		'fusion_builder_container'
	); // Add more shortcodes if needed

	foreach ( $page_builder_shortcodes as $shortcode ) {
		if ( has_shortcode( $content, $shortcode ) ) {
			return true;
		}
	}

	return false;
}
