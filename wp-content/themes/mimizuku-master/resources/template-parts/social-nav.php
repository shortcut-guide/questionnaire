<?php
/**
 * @package mimizuku
 * @author inc2734
 * @license GPL-2.0+
 */

if ( ! has_nav_menu( 'social-nav' ) ) {
	return;
}
?>

<nav class="p-social-nav" role="navigation">
	<?php
	wp_nav_menu( [
		'theme_location' => 'social-nav',
		'container'      => false,
		'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
		'menu_class'     => 'c-navbar',
		'depth'          => 0,
	] );
	?>
</nav>
