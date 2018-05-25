<?php
/**
 * @package mimizuku
 * @author inc2734
 * @license GPL-2.0+
 */

use Inc2734\WP_Customizer_Framework\Customizer_Framework;

$customizer = Customizer_Framework::init();
$panel      = $customizer->get_panel( 'seo-sns' );
$section    = $customizer->get_section( 'json-ld' );

$customizer->control( 'checkbox', 'mwt-json-ld', array(
	'label'    => __( 'Output structred data (JSON+LD)', 'mimizuku' ),
	'type'     => 'option',
	'priority' => 100,
	'default'  => true,
) );

$control = $customizer->get_control( 'mwt-json-ld' );
$control->join( $section )->join( $panel );
