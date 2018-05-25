<?php
/**
 * @package mimizuku
 * @author inc2734
 * @license GPL-2.0+
 */

/**
 * @return void
 */
add_action( 'wp_enqueue_scripts', function() {
	$relative_path = '/assets/css/style.min.css';
	$src  = get_theme_file_uri( $relative_path );
	$path = get_theme_file_path( $relative_path );

	if ( ! file_exists( $path ) ) {
		return;
	}

	$handle = get_template();

	if ( is_child_theme() && file_exists( get_stylesheet_directory() . $relative_path ) ) {
		$handle = get_stylesheet();
	}

	wp_enqueue_style(
		$handle,
		$src,
		[],
		filemtime( $path )
	);
} );

/**
 * @return void
 */
add_action( 'wp_enqueue_scripts', function() {
	$relative_path = '/assets/js/app.js';
	$src  = get_theme_file_uri( $relative_path );
	$path = get_theme_file_path( $relative_path );

	if ( ! file_exists( $path ) ) {
		return;
	}

	$handle = get_template();

	if ( is_child_theme() && file_exists( get_stylesheet_directory() . $relative_path ) ) {
		$handle = get_stylesheet();
	}

	wp_enqueue_script(
		$handle,
		$src,
		[ 'jquery' ],
		filemtime( $path ),
		true
	);
} );

/**
 * @return void
 */
add_action( 'wp_enqueue_scripts', function() {
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
} );
