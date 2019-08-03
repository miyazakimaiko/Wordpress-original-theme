<!--=========================================
SCREEN AREA
==========================================-->
<?php if( has_post_thumbnail() ) { ?>
    <div class="article-screen">
    <?php colors_post_thumbnail(); ?>
    </div><!-- screen area -->
<?php } ?>

<div class="article-container">
    <div class="article-box-in-container">
		<?php
			if ( is_singular() ) :
				the_title( '<h3 class="">', '</h3>' );
			else :
				the_title( '<h3 class="article-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
			endif;

			if ( 'post' === get_post_type() ) :
		?>
		
		<div class="post-details">
			<p class="date-written"><i class="fa fa-clock-o"></i><?php the_date(); ?></p>
			<p class="categories"><i class="fa fa-folder"></i><?php the_category(', '); ?></p>
			<?php edit_post_link( 'Edit', '<p class="edit-link"><i class="fa fa-pencil"></i>', '</p>' ); ?>
		</div>
        <article class="article-content"><?php the_content(); ?></article>
    </div>
</div>
	<?php endif; ?>

