<?php
/**
 * @package mimizuku
 * @author inc2734
 * @license GPL-2.0+
 */

use Inc2734\WP_Customizer_Framework\Customizer_Framework;

$customizer = Customizer_Framework::init();
$panel      = $customizer->get_panel( 'seo-sns' );
$section    = $customizer->get_section( 'google-analytics' );

$customizer->control( 'text', 'mwt-google-analytics-tracking-id', array(
	'label'       => __( 'Tracking ID', 'mimizuku' ),
	'description' => __( 'e.g. UA-1111111-11', 'mimizuku' ),
	'type'        => 'option',
) );

$control = $customizer->get_control( 'mwt-google-analytics-tracking-id' );
$control->join( $section )->join( $panel );
