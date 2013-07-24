<?php
/**
 * The Template for displaying all single posts.
 *
 */
get_header(); ?>

<!-- div class="container content"-->
  <div class="row">
    <div class="span3">
<?php
//get category ID number
global $wp_query;

$cat_ID = get_the_category();

//get all posts in category
$nav_args = array(
  'posts_per_page'  => -1,
  'category'      => $cat_ID[0]->cat_ID,
  'post_status'   => 'publish',
  'orderby'     => 'menu_order'
);

$posts_array = get_posts( $nav_args );
echo '<ul class="nav nav-pills nav-stacked">';
foreach ($posts_array as $the_post) {
  echo '<li><a href="'.get_permalink($the_post->ID).'">'.$the_post->post_title.'</a></li>';
}
echo '</ul>';

?>


    </div>
    <div class="span5">
      <?php get_template_part('slides'); ?>
    </div>
    <div class="span4">
      <?php get_template_part( 'content' ); ?>
    </div>
  </div>
<!--/div>
<?php get_footer(); ?>