<?php
/**
 * Template Name: Left sidebar
 *
 * @package mimizuku
 * @author inc2734
 * @license GPL-2.0+
 */

$controller = new Mimizuku_Controller();
$controller->layout( 'left-sidebar' );
$controller->render( 'content', get_post_type() );
