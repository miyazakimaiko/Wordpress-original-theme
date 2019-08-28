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
	<div id="page" class="content-area">
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
    "@id": "https://miyazakimaiko.com/about-me"
  },
  "headline": "ABOUT ME",
  "description": "Hi I’m Maiko Miyazaki, a web coder, self-taught web developer and part-time barista in Dublin. I started coding in Feb 2019. That time, I was looking for something new to learn which has a common sense to my life-long hobby that is to create products by hand, then I came across programming.",
  "image": {
    "@type": "ImageObject",
    "url": "https://miyazakimaiko.com/wp-content/themes/colors/assets/img/face.jpg",
    "width": 323,
    "height": 326
  },
  "author": {
    "@type": "Person",
    "name": "Maiko Miyazaki"
  },
  "publisher": {
    "@type": "Organization",
    "name": "Maiko Miyazaki",
    "logo": {
      "@type": "ImageObject",
      "url": "https://miyazakimaiko.com/wp-content/uploads/2019/08/port-logo2-e1566910297561.png",
      "width": 348,
      "height": 48
    }
  },
  "datePublished": "2019-08-26",
  "dateModified": "2019-08-26"
}
</script>