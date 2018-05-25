<?php
/**
 * @package mimizuku
 * @author inc2734
 * @license GPL-2.0+
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> data-sticky-footer="true">
<?php get_template_part( 'vendor/inc2734/mimizuku-core/src/view/template-parts/head' ); ?>

<body <?php body_class( [ 'l-body--blank' ] ); ?>>
	<?php do_action( 'mimizuku_prepend_body' ); ?>

	<?php $_view_controller->view(); ?>
<?php wp_footer(); ?>
</body>
</html>
