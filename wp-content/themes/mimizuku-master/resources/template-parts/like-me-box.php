<?php
/**
 * @package mimizuku
 * @author inc2734
 * @license GPL-2.0+
 */

$facebook_page_name = get_option( 'mwt-facebook-page-name' );

if ( ! $facebook_page_name ) {
	return;
}

echo do_shortcode( '[wp_like_me_box facebook_page_name="' . $facebook_page_name . '"]' );
