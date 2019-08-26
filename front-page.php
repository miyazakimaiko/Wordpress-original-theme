<?php
 /*
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Colors
 */

get_header();
?>
	<div id="front" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'front-page' );

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
  "@context": "https://schema.org/",
  "@type": "Person",
  "name": "Maiko Miyazaki",
  "url": "https://miyazakimaiko.com",
  "image": "https://miyazakimaiko.com/wp-content/themes/colors/assets/img/face.jpg",
  "sameAs": "https://www.linkedin.com/in/maiko-miyazaki-442ab0169/",
  "jobTitle": "Junior Web Developer",
  "email": "hello@miyazakimaiko.com"
}
</script>
