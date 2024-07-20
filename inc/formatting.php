<?php

/**
 * Functions for formatting content.
 *
 * @package Seblog
 * @since 1.0.0
 */

/**
 * Format date.
 */

function seblog_date_formatted( $format = 'j F Y' ) {
	$region = get_bloginfo( 'language' );
	setlocale( LC_TIME, $region );

	$formatted_date = date_i18n( $format, strtotime( get_the_date() ) );
	echo esc_html( $formatted_date );
}