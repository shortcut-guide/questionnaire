<?php
/**
 * @package mimizuku
 * @author inc2734
 * @license GPL-2.0+
 */

use Inc2734\WP_Customizer_Framework\Customizer_Framework;

$customizer = Customizer_Framework::init();
$panel      = $customizer->get_panel( 'seo-sns' );
$section    = $customizer->get_section( 'like-me-box' );

$customizer->control( 'text', 'mwt-facebook-page-name', [
	'transport'   => 'postMessage',
	'type'        => 'option',
	'label'       => __( 'Facebook page name', 'mimizuku' ),
	'description' => sprintf(
		_x( 'Please enter %1$s of %2$s', 'facebook-page-name', 'mimizuku' ),
		'<code>xxxxx</code>',
		'<code>https://www.facebook.com/xxxxx</code>'
	),
] );

$control = $customizer->get_control( 'mwt-facebook-page-name' );
$control->join( $section )->join( $panel );
$control->partial( [
	'selector'            => '.wp-like-me-box',
	'container_inclusive' => true,
	'render_callback'     => function() {
		get_template_part( 'template-parts/like-me-box' );
	},
] );
