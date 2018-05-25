<?php
/**
 * @package mimizuku
 * @author inc2734
 * @license GPL-2.0+
 */

use Inc2734\WP_Basis\App\Model\Pagination;

if ( 1 >= get_comment_pages_count() || ! get_option( 'page_comments' ) ) {
	return;
}

Pagination::the_comments_pagination();
