<?php
/**
 * Template Name: News Listing
 * The template for displaying achive listings
 *
 */
?>
<?php get_header(); ?>

<div class="container content">
	<div class="row">
		<div class="span3">
			<img src="<?php echo get_template_directory_uri(); ?>/img/riba-chartered-logo.png" alt="RIBA Chartered Practice"/>
			<p><?php _e('Directors', 'kwa'); ?>:</p>
			<p>Maja Kotzmuth-Clarke <br />BSc, B(Arch), RIBA</p>
			<p>Siôn Williams <br />BSc, B(Arch), RIBA</p>
		</div>
		<div class="span5">
			<?php get_template_part('slides'); ?>
		</div>
		<div class="span4">
			<?php get_template_part('content'); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>