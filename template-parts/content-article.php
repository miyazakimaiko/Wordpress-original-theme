
<!--=========================================
SCREEN AREA
==========================================-->
<?php if( has_post_thumbnail() ) { ?>
    <div class="article-screen" itemscope itemtype='http://schema.org/ImageObject' itemprop="image">
    <?php colors_post_thumbnail('post-thumbnail',array('itemprop'=>'image')); ?>
    </div><!-- screen area -->
<?php } ?>

<div class="breadcrumb">

	<span class="" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
		<a href="<?php echo home_url(); ?>" itemprop="url">
			<span itemprop="title">HOME</span>
		</a>&gt;&nbsp;
	</span>

	<?php if ( is_single() ) { ?>

		<span class="breadcrumbs" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
			<a href="<?php $cat = get_the_category(); echo get_category_link($cat[0]->cat_ID); ?>" itemprop="url">
				<span itemprop="title"><?php echo $cat[0]->name; ?></span>
			</a>&gt;&nbsp;
		</span>

	<?php } else { ?>
	<?php } ?>

	<strong style="color: #7B7B7B;font-size: 14px;font-weight: 300;"><?php the_title(); ?></strong>

</div>

<main itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">

	<article class="article-container" itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="blogPost">

		<meta itemprop="about" content="<?php echo get_post_custom()['_aioseop_description'][0]; ?>">
		
		<section class="article-box-in-container">
			<?php
				if ( is_singular() ) :
					the_title( '<h3 class="article-title" itemprop="name headline"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark"  title="'. the_title_attribute('echo=0'). '"itemprop="url">', '</a></h3>' );
				else :
					the_title( '<h3 class="article-title" itemprop="name headline"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark" title="'. the_title_attribute('echo=0'). '" itemprop="url">', '</a></h3>' );
				endif;

				if ( 'post' === get_post_type() ) :
			?>
			
			<div class="post-details">
				<p class="date-written"><i class="fa fa-clock-o"></i><?php the_date(); ?></p>
				<p class="categories"><i class="fa fa-folder"></i><?php the_category(', '); ?></p>
				<?php edit_post_link( 'Edit', '<p class="edit-link"><i class="fa fa-pencil"></i>', '</p>' ); ?>
			</div>
			<div class="article-content" itemprop="articleBody"><?php the_content(); ?></div>
		</section>

		<p itemprop="keywords"><i class="fa fa-tags"></i> <?php the_tags(); ?></p>

	</article>

</main>

<?php endif; ?>

