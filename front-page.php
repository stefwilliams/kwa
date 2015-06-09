<?php
/**
 * Template Name: Front Page Template
 *
 *
 * @file           index.php
 * @package        kwa 
 * @author         Stef Williams
 * @copyright      2013
 * @license        
 * @version        Release: 1.0
 * @filesource     wp-content/themes/lmw/index.php
 * @link           http://codex.wordpress.org/Theme_Development#Index_.28index.php.29
 * @since          available since Release 1.0
 */
?>

<?php get_header(); ?>

<!-- div class="container content" -->
	<div class="row">
		<div class="span3">
			<a href="http://www.architecture.com/FindAnArchitect/ArchitectPractices/kotzmuth-williamsarchitects/kotzmuth-williamsarchitects.aspx"><img src="<?php echo get_template_directory_uri(); ?>/img/riba-chartered-logo.png" alt="RIBA Chartered Practice"/></a>
			<p><?php _e('Directors', 'kwa'); ?>:</p>
			<p>Maja Kotzmuth-Clarke <br />BSc, B(Arch), RIBA</p>
			<p>Siôn Williams <br />BSc, B(Arch), RIBA</p>
		</div>
		<div class="span5">
<script type="text/javascript">
$(document).ready(function() {

  $("[class^=slide]").on('click mouseover', function() {
      // $(".slide_main").hide();
      $("[id^=slide_]:not([id=" + $(this).attr("class") + "])").fadeOut(150);  
      $("#" + $(this).attr("class")).fadeIn(150);    
    });
  
});

</script>


			<div id="imageholder">
				<div id="slide_1" style="display:block;"><?php echo get_the_post_thumbnail(); ?> </div>
				<div id="slide_2"><?php kd_mfi_the_featured_image( 'featured-image-2', 'page', 'full' ); ?></div>
				<div id="slide_3"><?php kd_mfi_the_featured_image( 'featured-image-3', 'page', 'full' ); ?></div>
			</div>
			<a class="slide_1"><?php echo get_the_post_thumbnail(); ?></a>
			<a class="slide_2"><?php kd_mfi_the_featured_image( 'featured-image-2', 'page', 'full' ); ?></a>
			<a class="slide_3"><?php kd_mfi_the_featured_image( 'featured-image-3', 'page', 'full' ); ?></a>
		</div>
		<div class="span4">
			<?php get_template_part('content'); ?>
		</div>
	</div>
<!-- /div -->
<?php get_footer(); ?>