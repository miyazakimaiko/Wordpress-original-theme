<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Colors
 */

?>

	<section class="each-article">
		
		<meta itemprop="about" content="<?php echo get_post_meta($post->ID, '_aioseop_description', true); ?>">

		<?php if( has_post_thumbnail() ) { ?>
		<div class="eyecatch-screen"><?php colors_post_thumbnail(); ?></div>
		<?php } ?>

		<?php
			if ( is_singular() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="article-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark" title="'.the_title_attribute('echo=0').'" itemprop="url">', '</a></h2>' );
			endif;

			if ( 'post' === get_post_type() ) :
		?>
		
		<div class="post-details">
			<p class="date-written"><i class="fa fa-clock-o"></i><?php the_date(); ?></p>
			<p class="categories"><i class="fa fa-folder"></i><?php the_category(', '); ?></p>
			<?php edit_post_link( 'Edit', '<p class="edit-link"><i class="fa fa-pencil"></i>', '</p>' ); ?>
		</div>

		<div class="article-summary"><?php the_excerpt(); ?></div>

	</section>
	<?php endif; ?>


