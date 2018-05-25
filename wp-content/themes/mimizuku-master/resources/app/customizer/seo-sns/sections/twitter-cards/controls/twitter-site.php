<?php
/**
 * @package mimizuku
 * @author inc2734
 * @license GPL-2.0+
 */

use Inc2734\WP_Customizer_Framework\Customizer_Framework;

$customizer = Customizer_Framework::init();
$panel      = $customizer->get_panel( 'seo-sns' );
$section    = $customizer->get_section( 'twitter-cards' );

$customizer->control( 'text', 'mwt-twitter-site', array(
	'label'       => __( 'twitter:site', 'mimizuku' ),
	'priority'    => 110,
	'description' => sprintf(
		__( 'The Twitter account name of the site. Please enter in the form %1$s.', 'mimizuku' ),
		'<code>@username</code>'
	),
	'default' => '@',
	'type'    => 'option',
) );

$control = $customizer->get_control( 'mwt-twitter-site' );
$control->join( $section )->join( $panel );
