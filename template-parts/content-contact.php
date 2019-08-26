<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Colors
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php colors_post_thumbnail(); ?>

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

		<article class="article-container">
		
			<meta itemprop="about" content="<?php echo get_post_custom()['_aioseop_description'][0]; ?>">
			
			<section class="article-box-in-container">
			
				<div class="article-content" itemprop="articleBody">
                    
                    <form id="mailform" action="post">

                        <ul>
                            <div class="box-center">
                                <li class="contact-name">
                                    <label for="name-input" class="input-title">Full name</label>
                                    <input id="name-input" name="name-input" class="name-input" type="name" required>
                                </li>
                                <li class="contact-email">
                                    <label for="email-input" class="input-title">Email</label>
                                    <input id="email-input" name="email-input" class="email-input" type="email" required>
                                </li>
                                <li class="contact-comments">
                                    <label for="comments-input" class="input-title">Comments</label>
                                    <textarea id="comments-input" name="comments-input" class="comments-input" required></textarea>
                                    <button type="submit" class="contact-submit">Submit</button>
                                    <input id="referrer" type="hidden" name="referrer">
                                </li>
                            </div>
                        </ul>

                    </form>

                    <div id="dispmsg"></div>

				</div>

			</section>

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

<!-- JavaScript -->
<div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
jQuery(function ($) {
  $("#referrer").val(document.referrer);
  $("#mailform").submit(function(){ 
    $.ajax({
      url : '<?php bloginfo('template_directory'); ?>/sendmail.php',
      type: 'POST',
      dataType: 'json',
      data: $(this).serialize()
    })
    .done( function(data){
      $("#dispmsg").empty();
      $("#dispmsg").html(data.dispmsg);
      if(data.errflg != 1){
        $("#mailform").remove();
      }
    })
    .fail( function(data){
      alert('Error: Could not send the message. Please refresh the page then try it again.');
    })
    return false;
  });
});
</script>
</div>