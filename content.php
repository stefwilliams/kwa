<?php 
print_r($posts_array);

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
		echo '<h2>';
		the_title();
		echo '</h2>';
			//
			// Post Content here
		the_content();
			//
		} // end while
	} // end if
	?>