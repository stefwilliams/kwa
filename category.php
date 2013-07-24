<?php
/**
 * The template for displaying Category pages.
 *
 * Used to display archive-type pages for posts in a category.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
<?php get_header(); ?>

<!-- div class="container content" -->
	<div class="row">
		<div class="span3">
			<?php
//get category ID number
			global $wp_query;

			$cat_ID = get_query_var('cat');

//get all posts in category
			$nav_args = array(
				'posts_per_page'	=> -1,
				'category'			=> $cat_ID,
				'post_status'		=> 'publish',
				'orderby'			=> 'menu_order'
				);
			$posts_array = get_posts( $nav_args );

			echo '<ul class="nav nav-pills nav-stacked">';
			foreach ($posts_array as $post) {
				echo '<li><a href='.get_permalink().'>'.$post->post_title.'</a></li>';
			}
			echo '</ul>';


			$first_post = $posts_array[0];
			?>


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
				<div id="slide_1" style="display:block;"><?php echo get_the_post_thumbnail($first_post->ID); ?> </div>
				<div id="slide_2"><?php kd_mfi_the_featured_image( 'featured-image-2', 'post', 'full', $first_post->ID ); ?></div>
				<div id="slide_3"><?php kd_mfi_the_featured_image( 'featured-image-3', 'post', 'full', $first_post->ID ); ?></div>
			</div>
			<a class="slide_1"><?php echo get_the_post_thumbnail($first_post->ID); ?></a>
			<a class="slide_2"><?php kd_mfi_the_featured_image( 'featured-image-2', 'post', 'full', $first_post->ID ); ?></a>
			<a class="slide_3"><?php kd_mfi_the_featured_image( 'featured-image-3', 'post', 'full', $first_post->ID ); ?></a>
		</div>
		<div class="span4">
			<?php 

			echo '<h2>'.$first_post->post_title.'</h2>';
			echo wpautop ($first_post->post_content);
			?>
		</div>
	</div>
<!-- /div -->
<?php get_footer(); ?>