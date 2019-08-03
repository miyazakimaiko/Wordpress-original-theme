<?php
/*
    Template Name: Home Page
 */

get_header();
?>

<!--=========================================
SCREEN AREA
==========================================-->
<main>
    <div id="screen" data-type="background" data-speed="5" class="screen-area clearfix">
        <article>
            <h3 class="screen-text"><? bloginfo('description'); ?></h3>
        </article>
	</div><!-- screen area -->

	<!--=========================================
    ARTICLE AREA
    ==========================================-->

    <section class="flexbox">
        <div class="article-container">
            <div class="article-area">
                
                <?php if(have_posts()): while(have_posts()): the_post(); ?>
                
                <div class="each-article">
                    <a href=""><div class="eyecatch-screen"></div></a>
                    <a href=""><h2 class="article-title"><?php the_title(); ?></h2></a>
                    <p class="date-written">26-07-2019</p>
                    <article class="article-summary"><?php the_content(); ?></article>
                    <div class="read-more-btn">
                        <a href="">Read More...</a>
                    </div>
                </div>

                <?php endwhile; endif; ?>

			</div><!-- article-area -->
		</div><!-- article-container -->

		<!--=========================================
		SIDE BAR
		==========================================-->
		<div class="side-bar">
		<?php get_sidebar(); ?>
		</div><!-- sidebar -->

	</section><!-- flexbox -->

<?php

get_footer();
