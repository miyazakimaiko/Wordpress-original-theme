<?php
/**
 * Template part for displaying page content in front-page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Colors
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php colors_top_page_thumbnail(); ?>

<article class="article-container">

    <meta itemprop="about" content="<?php echo get_post_custom()['_aioseop_description'][0]; ?>">
    
    <div class="article-container-topPage">
    
        <div class="article-content" itemprop="articleBody">
            
            <section class="flex-flow1">

                <div class="img-face-container">
                    <img class="img-face" src="<?php bloginfo('template_directory'); ?>/assets/img/face.jpg" alt="Maiko Miyazaki">
                </div>

                <div class="topPage-wrapper1">
                    
                    <p><?php the_field('about_me')?></p>
                    
                    <div class="single-link-container">
                        <a class="single-link1" href="<?php the_field('read_more_link')?>">Read More About Me</a>
                    </div>
                
                </div>

            </section>

            <section class="flex-flow2">

                <div class="img-container-l-lg">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/desktop.png" alt="desktop" class="image-desktop">
                </div>

                <div class="topPage-wrapper2">
                    
                    <h3>What I do</h3>
                    
                    <div class="single-link-container">

                        <p style="margin-bottom:10px!important">Click on a technology or service to view example projects.</p>

                        <div class="tab-link-wrapper">

                            <div class="tab-link-container">
                                <a class="tab-link" href="<?php the_field('what_i_do_link_01')?>"><?php the_field('what_i_do_link_01_title')?></a>
                            </div>

                            <div class="tab-link-container">
                                <a class="tab-link" href="<?php the_field('what_i_do_link_02')?>"><?php the_field('what_i_do_link_02_title')?></a>
                            </div>

                            <div class="tab-link-container">
                                <a class="tab-link" href="<?php the_field('what_i_do_link_03')?>"><?php the_field('what_i_do_link_03_title')?></a>
                            </div>

                            <div class="tab-link-container">
                                <a class="tab-link" href="<?php the_field('what_i_do_link_04')?>"><?php the_field('what_i_do_link_04_title')?></a>
                            </div>

                            <div class="tab-link-container">
                                <a class="tab-link" href="<?php the_field('what_i_do_link_05')?>"><?php the_field('what_i_do_link_05_title')?></a>
                            </div>

                            <div class="tab-link-container">
                                <a class="tab-link" href="<?php the_field('what_i_do_link_06')?>"><?php the_field('what_i_do_link_06_title')?></a>
                            </div>

                        </div><!-- tab-link-wrapper -->

                    </div><!-- single-link-container -->
                
                </div><!-- topPage-wrapper1 -->

            </section><!-- flex-flow2 -->

            <section class="flex-flow3">

                <div class="img-container-r">
                    <a href="<?php the_field('my_portfolio_link')?>">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/window.png" alt="window" class="image-window">
                    </a>
                </div>

                <div class="topPage-wrapper3">
                    
                    <h3>My Portfolio</h3>
                    
                    <div class="single-link-container">

                        <p><?php the_field('my_portfolio_text')?></p>

                    </div><!-- single-link-container -->

                </div><!-- topPage-wrapper1 -->

            </section><!-- flex-flow3 -->

            <section class="flex-flow4">

                <div class="img-container-l">
                    <a href="<?php the_field('get_in_touch_link')?>">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/mail.png" alt="mail" class="image-mail">
                    </a>
                </div>

                <div class="topPage-wrapper4">
                    
                    <h3>Get in touch</h3>
                    
                    <div class="single-link-container">

                        <p><?php the_field('get_in_touch_text')?></p>

                    </div><!-- single-link-container -->

                </div><!-- topPage-wrapper1 -->

            </section><!-- flex-flow4 -->
        
        </div><!-- article-content -->

    </div><!-- article-box-in-container -->

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