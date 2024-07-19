<?php
/**
 * Seblog functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Seblog
 * @since 1.0.0
 *
 * This is the functions.php file for the Seblog theme.
 */

/**
 * Enqueue scripts and styles.
 */

function seblog_scripts_and_styles_register() {
	wp_enqueue_style( 'seblog-style', get_template_directory_uri() . '/assets/css/style.css', array(), filemtime( get_template_directory() . '/assets/css/style.css' ), 'all' );
	wp_enqueue_style( 'seblog-satoshi-font', get_template_directory_uri() . '/assets/css/satoshi.css', array(), '1.0' );

	wp_register_script( 'main-script', get_template_directory_uri() . '/build/index.js', array(), '1.0', true );
	wp_enqueue_script( 'main-script' );
}

add_action( 'wp_enqueue_scripts', 'seblog_scripts_and_styles_register' );

/**
 * Register widget area.
 */

function seblog_widgets_init() {

}

add_action( 'widgets_init', 'seblog_widgets_init' );

///**
// * Custom template tags for this theme.
// */
//
//require get_template_directory() . '/inc/template-tags.php';

///**
// * Custom functions that act independently of the theme templates.
// */
//
//require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */

//require get_template_directory() . '/inc/customizer.php';


/**
 * Register navigation menus.
 */

function seblog_register_menus() {
	register_nav_menus( array(
		'top'     => esc_html__( 'Top', 'seblog' ),
		'primary' => esc_html__( 'Primary', 'seblog' ),
		'footer'  => esc_html__( 'Footer', 'seblog' )
	) );
}

add_action( 'init', 'seblog_register_menus' );

/**
 * Add prefix to menu class.
 */


function seblog_add_custom_class_menu_item( $classes, $item, $args ) {

	foreach ( $classes as $key => $class ) {
		if ( $class === 'menu-item' ) {
			$classes[ $key ] = 'nav-item';
		}
		if ( strpos( $class, 'menu-item' ) !== false ) {
			$classes[ $key ] = str_replace( 'menu-item', 'nav-item', $class );
		}
	}

	if ( in_array( 'nav-item-has-children', $classes ) ) {
		$classes[] = 'dropdown';
	}

	return $classes;
}

function seblog_add_custom_class_submenu( $classes, $args, $depth ) {

	$classes   = array_diff( $classes, array( 'sub-menu' ) );
	$classes[] = 'seblog-sub-menu dropdown-menu';

	return $classes;
}

function seblog_add_custom_class_nav_links( $atts, $item, $args, $depth ) {
	if ( $depth === 0 ) {
		if ( isset( $atts['class'] ) ) {
			$atts['class'] .= ' nav-link';
		} else {
			$atts['class'] = 'nav-link';
		}
	}


	if ( $depth > 0 ) {
		$atts['class'] = 'dropdown-item';
	}

	if ( in_array( 'menu-item-has-children', $item->classes ) ) {
		$atts['href']           = '#';
		$atts['role']           = 'button';
		$atts['data-bs-toggle'] = 'dropdown';
		$atts['aria-expanded']  = 'false';
		$atts['class']          .= ' dropdown-toggle';
	}


	return $atts;
}

add_filter( 'nav_menu_submenu_css_class', 'seblog_add_custom_class_submenu', 10, 3 );
add_filter( 'nav_menu_css_class', 'seblog_add_custom_class_menu_item', 10, 3 );
add_filter( 'nav_menu_link_attributes', 'seblog_add_custom_class_nav_links', 10, 4 );

/**
 * Format date.
 */

function seblog_date_formatted( $format = 'j F Y' ) {
	$region = get_bloginfo( 'language' );
	setlocale( LC_TIME, $region );

	$formatted_date = date_i18n( $format, strtotime( get_the_date() ) );
	echo esc_html( $formatted_date );
}

/**
 * Register sidebars.
 */

function seblog_register_sidebars() {
	register_sidebar( array(
		'name'          => __( 'Primary Sidebar', 'seblog' ),
		'id'            => 'primary-sidebar',
		'description'   => __( 'The main sidebar appears on the right on each page except the front page template', 'seblog' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}

add_action( 'widgets_init', 'seblog_register_sidebars' );


/**
 * Show admin bar.
 */

add_filter( 'show_admin_bar', '__return_false' );

/**
 * Setup theme.
 */

function seblog_theme_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
	add_theme_support( 'customize-selective-refresh-widgets' );
	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 400,
		'flex-height' => true,
		'flex-width'  => true
	) );
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link', 'gallery', 'audio' ) );
	add_theme_support( 'sidebar-widgets' );
}

add_action( 'after_setup_theme', 'seblog_theme_setup' );