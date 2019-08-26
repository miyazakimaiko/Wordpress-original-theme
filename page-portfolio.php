<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Colors
 */

get_header();
?>
	<div id="portfolioPage" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			//if ( comments_open() || get_comments_number() ) :
			//	comments_template();
			//endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://miyazakimaiko.com/portfolio"
  },
  "headline": "PORTFOLIO",
  "description": "My recent project: Vocabulary Notebook is a Chrome extension that users can leave new vocabulary and come back to it easily.",
  "image": {
    "@type": "ImageObject",
    "url": "https://miyazakimaiko.com/wp-content/uploads/2019/08/Web-1280-–-1-1024x640.png",
    "width": 1024,
    "height": 640
  },
  "author": {
    "@type": "Person",
    "name": "Maiko Miyazaki"
  },  
  "datePublished": "2019-08-26"
}
</script>