<?php
/**
 * @package mimizuku
 * @author inc2734
 * @license GPL-2.0+
 */
?>
<header class="l-header l-header--<?php echo esc_attr( get_theme_mod( 'header-layout' ) ); ?>" role="banner">
	<div class="l-<?php echo esc_attr( get_theme_mod( 'header-layout' ) ); ?>-header">
		<div class="l-<?php echo esc_attr( get_theme_mod( 'header-layout' ) ); ?>-header__row">
			<?php if ( has_nav_menu( 'drawer-nav' ) ) : ?>
				<div class="l-<?php echo esc_attr( get_theme_mod( 'header-layout' ) ); ?>-header__for-narrow"></div>
			<?php endif; ?>

			<div class="l-<?php echo esc_attr( get_theme_mod( 'header-layout' ) ); ?>-header__branding">
				<?php get_template_part( 'template-parts/site-branding' ); ?>
			</div>

			<?php if ( has_nav_menu( 'drawer-nav' ) ) : ?>
				<div class="l-<?php echo esc_attr( get_theme_mod( 'header-layout' ) ); ?>-header__for-narrow">
					<?php get_template_part( 'template-parts/hamburger-btn' ); ?>
				</div>
			<?php endif; ?>
		</div>

		<?php if ( has_nav_menu( 'global-nav' ) ) : ?>
			<div class="l-<?php echo esc_attr( get_theme_mod( 'header-layout' ) ); ?>-header__row">
				<div class="l-<?php echo esc_attr( get_theme_mod( 'header-layout' ) ); ?>-header__for-wide">
					<?php get_template_part( 'template-parts/global-nav' ); ?>
				</div>
			</div>
		<?php endif; ?>
	</div>
</header>
