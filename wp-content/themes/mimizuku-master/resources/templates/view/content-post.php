<?php
/**
 * @package mimizuku
 * @author inc2734
 * @license GPL-2.0+
 */
?>
<article <?php post_class(); ?>>
	<header class="c-entry__header">
		<h1 class="c-entry__title"><?php the_title(); ?></h1>
		<div class="c-entry__meta">
			<?php get_template_part( 'template-parts/entry-meta' ); ?>
		</div>
	</header>

	<?php
	wpvc_get_template_part( 'template-parts/share-buttons', [
		'_position' => 'top',
	] );
	?>

	<div class="c-entry__content">
		<?php get_template_part( 'template-parts/contents-outline' ); ?>

		<?php the_content(); ?>
		<?php get_template_part( 'template-parts/link-pages' ); ?>
	</div>

	<footer class="c-entry__footer">
		<?php
		wpvc_get_template_part( 'template-parts/share-buttons', [
			'_position' => 'bottom',
		] );
		?>

		<?php get_template_part( 'template-parts/profile-box' ); ?>

		<?php get_template_part( 'template-parts/like-me-box' ); ?>
	</footer>
</article>

<?php get_template_part( 'template-parts/contents-bottom-widget-area' ); ?>

<?php get_template_part( 'template-parts/related-posts' ); ?>

<?php
if ( comments_open() || pings_open() || get_comments_number() ) {
	comments_template( '', true );
}
