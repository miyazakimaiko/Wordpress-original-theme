<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Colors
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<!--=========================================
SIDE BAR
==========================================-->
		<aside class="side-bar">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>

				<div class="flex-responsive">
				<?php dynamic_sidebar( 'sidebar-2' ); ?>
				</div>

		</aside><!-- side bar end -->
	</section><!-- flexbox end -->
</main>