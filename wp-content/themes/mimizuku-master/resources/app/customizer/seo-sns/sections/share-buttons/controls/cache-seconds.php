<?php
/**
 * @package mimizuku
 * @author inc2734
 * @license GPL-2.0+
 */

use Inc2734\WP_Customizer_Framework\Customizer_Framework;

$customizer = Customizer_Framework::init();
$panel      = $customizer->get_panel( 'seo-sns' );
$section    = $customizer->get_section( 'share-buttons' );

$customizer->control( 'text', 'mwt-share-buttons-cache-seconds', [
	'label'    => __( 'Share counts cache time (seconds)', 'mimizuku' ),
	'priority' => 130,
	'default'  => 300,
	'type'     => 'option',
] );

$control = $customizer->get_control( 'mwt-share-buttons-cache-seconds' );
$control->join( $section )->join( $panel );
