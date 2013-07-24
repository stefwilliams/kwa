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
				<div id="slide_2"><?php kd_mfi_the_featured_image( 'featured-image-2', 'post', 'full' ); ?></div>
				<div id="slide_3"><?php kd_mfi_the_featured_image( 'featured-image-3', 'post', 'full' ); ?></div>
			</div>
			<a class="slide_1"><?php echo get_the_post_thumbnail(); ?></a>
			<a class="slide_2"><?php kd_mfi_the_featured_image( 'featured-image-2', 'post', 'full' ); ?></a>
			<a class="slide_3"><?php kd_mfi_the_featured_image( 'featured-image-3', 'post', 'full' ); ?></a>