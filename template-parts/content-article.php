
<!--=========================================
SCREEN AREA
==========================================-->
<?php if( has_post_thumbnail() ) { ?>
    <div class="article-screen">
    <?php colors_post_thumbnail('post-thumbnail',array('itemprop'=>'image')); ?>
    </div><!-- screen area -->
<?php } ?>

<div class="breadcrumb">

	<span>
		<a href="<?php echo home_url(); ?>" itemprop="url">
			<span itemprop="title">HOME</span>
		</a>&gt;&nbsp;
	</span>

	<?php if ( is_single() ) { ?>

		<span class="breadcrumbs">
			<a href="<?php $cat = get_the_category(); echo get_category_link($cat[0]->cat_ID); ?>" itemprop="url">
				<span itemprop="title"><?php echo $cat[0]->name; ?></span>
			</a>&gt;&nbsp;
		</span>

	<?php } else { ?>
	<?php } ?>

	<strong style="color: #7B7B7B;font-size: 14px;font-weight: 300;"><?php the_title(); ?></strong>

</div>

<main>

	<article>

		<meta>
		
		<section class="article-box-in-container">
			<?php
				
				if ( 'post' === get_post_type() ) :
			?>
			
			<div class="post-details">
				<p class="date-written"><i class="fa fa-clock-o"></i><?php the_date(); ?></p>
				<p class="categories"><i class="fa fa-folder"></i><?php the_category(', '); ?></p>
				<?php edit_post_link( 'Edit', '<p class="edit-link"><i class="fa fa-pencil"></i>', '</p>' ); ?>
			</div>
			<div class="article-content">
				<?php the_content(); ?>
			</div>
		</section>

		<!--<p><i class="fa fa-tags"></i> <?php //the_tags(); ?></p>-->

	</article>

</main>

<?php endif; ?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BlogPosting",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "<?php esc_url( get_permalink() ); ?>"
  },
  "headline": "<?php the_title(); ?>",
  "description": "<?php echo get_the_excerpt(); ?>",
  "image": {
    "@type": "ImageObject",
    "url": "<?php the_post_thumbnail_url(); ?>",
    "width": 4496,
    "height": 3000
  },
  "author": {
    "@type": "Person",
    "name": "Maiko Miyazaki"
  },
  "datePublished": "<?php echo get_the_date(); ?>",
  "dateModified": "<?php echo get_the_modified_date(); ?>",
  "publisher": {
    "@type": "Organization",
    "name": "Maiko Miyazaki",
    "logo": {
      "@type": "ImageObject",
      "url": "https://miyazakimaiko.com/wp-content/uploads/2019/08/port-logo2-e1566910297561.png",
      "width": 348,
      "height": 48
    }
  }
}
</script>