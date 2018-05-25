<?php
/**
 * @package mimizuku
 * @author inc2734
 * @license GPL-2.0+
 */

use Inc2734\WP_Basis\App\Model\Pagination;

global $wp_query;

if ( empty( $wp_query->max_num_pages ) || $wp_query->max_num_pages < 2 ) {
	return;
}

Pagination::the_posts_pagination();
