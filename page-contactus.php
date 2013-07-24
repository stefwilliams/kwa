<?php
/**
 * The Template for displaying all single pages.
 * Template Name: Contact Us
 */
get_header(); ?>

<script>
jQuery(function(){
  jQuery('.wpcf7-form').addClass('form-inline');

})

</script>

<!-- div class="container content"-->
  <div class="row">
    <div class="span3">

<?php if (have_posts()) : while (have_posts()) : the_post();?>
<?php the_content(); ?>
<?php endwhile; endif; ?>

    </div>
    <div class="span5">
      <div id="imageholder">
<iframe style="width:100%;height:100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=28%2BCathedral%2BRoad%2BCardiff(KWA)&ie=UTF8&z=12&t=m&iwloc=near&output=embed"></iframe>
      </div>
    </div>
    <div class="span4">
<?php 
$lang = ICL_LANGUAGE_CODE;

if ($lang == 'en') {
  echo do_shortcode( '[contact-form-7 id="94" title="Contact form"]' );
}
elseif ($lang == 'cy') {
  echo do_shortcode( '[contact-form-7 id="111" title="Contact form welsh"]' );
}
 ?>
    </div>
  </div>
<!-- /div -->
<?php get_footer(); ?>