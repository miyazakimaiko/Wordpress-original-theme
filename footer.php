<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Colors
 */

?>

<?php wp_footer(); ?>
<!--=========================================
FOOTER
==========================================-->
<footer>
	<div class="footer-line-top"></div>
	<div class="footer-container">
	<?php dynamic_sidebar( 'footer' ); ?>
	</div>
</footer>

<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-3.4.1.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>
</body>
</html>