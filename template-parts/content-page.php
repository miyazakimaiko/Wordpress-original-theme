<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Colors
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php colors_post_thumbnail(); ?>

<div class="breadcrumb">

	<span>
		<a href="<?php echo home_url(); ?>">
			<span>HOME</span>
		</a>&gt;&nbsp;
	</span>

	<?php if ( is_single() ) { ?>

		<span class="breadcrumbs">
			<a href="<?php $cat = get_the_category(); echo get_category_link($cat[0]->cat_ID); ?>">
				<span><?php echo $cat[0]->name; ?></span>
			</a>&gt;&nbsp;
		</span>

	<?php } else { ?>
	<?php } ?>

	<strong style="color: #7B7B7B;font-size: 14px;font-weight: 300;"><?php the_title(); ?></strong>

</div>

		<article class="article-container">
		
			<meta itemprop="about" content="<?php echo get_post_custom()['_aioseop_description'][0]; ?>">
			
			<section class="article-box-in-container">
			
				<div class="article-content" itemprop="articleBody">
					<?php
					the_content();

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'colors' ),
						'after'  => '</div>',
					) );
					?>
				</div>

			</section>

		</article><!-- .entry-content -->

		<?php if ( get_edit_post_link() ) : ?>
			<footer class="entry-footer">
				<?php
				edit_post_link(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Edit <span class="screen-reader-text">%s</span>', 'colors' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					),
					'<span class="edit-link">',
					'</span>'
				);
				?>
			</footer><!-- .entry-footer -->
			<?php endif; ?>


</div><!-- #post-<?php the_ID(); ?> -->
