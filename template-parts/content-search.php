<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Colors
 */

?>

<article class="each-article" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<?php colors_post_thumbnail(); ?>
	
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="article-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>

			<div class="post-details">
				<p class="date-written"><i class="fa fa-clock-o"></i><?php the_date(); ?></p>
				<p class="categories"><i class="fa fa-folder"></i><?php the_category(', '); ?></p>
				<?php edit_post_link( 'Edit', '<p class="edit-link"><i class="fa fa-pencil"></i>', '</p>' ); ?>
			</div>
			<article class="article-summary"><?php the_excerpt(); ?></article>

		<?php endif; ?>
	</header><!-- .entry-header -->


</article><!-- #post-<?php the_ID(); ?> -->
