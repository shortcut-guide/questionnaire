<?php
/**
 * @package mimizuku
 * @author inc2734
 * @license GPL-2.0+
 */

$comments_by_type = $wp_query->comments_by_type;
if ( ! comments_open() && empty( $comments_by_type['comment'] ) ) {
	return;
}
?>

<section class="p-comments c-entry-aside">
	<h2 class="p-comments__title c-entry-aside__title"><?php esc_html_e( 'Comments on this post', 'mimizuku' ); ?></h2>

	<?php if ( ! empty( $comments_by_type['comment'] ) ) : ?>
		<ol class="p-comments__list">
			<?php
			wp_list_comments( [
				'type'     => 'comment',
				'callback' => function( $comment, $args, $depth ) {
					?>
					<li <?php comment_class( [ 'p-comments__item' ] ); ?> id="li-comment-<?php comment_ID(); ?>">
						<?php
						wpvc_get_template_part( 'template-parts/comment', [
							'_comment' => $comment,
							'_args'    => $args,
							'_depth'   => $depth,
						] );
						?>
					<?php
				},
			] );
			?>
		</ol>

		<?php get_template_part( 'template-parts/comments-pagination' ); ?>

	<?php else : ?>
		<p class="p-comments__nocomments">
			<?php esc_html_e( 'No comments.', 'mimizuku' ); ?>
		</p>
	<?php endif; ?>

	<?php if ( comments_open() ) : ?>
		<div id="respond" class="p-comments__respond">
			<div class="p-comments__form">
				<?php comment_form(); ?>
			</div>
		</div>
	<?php endif; ?>
</section>
