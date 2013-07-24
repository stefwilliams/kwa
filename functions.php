<?php
//Navigation
register_nav_menu( 'navbar', 'Main Menu' );
register_nav_menu('footer', 'Footer');

require_once('includes/navigation/twitter_bootstrap_nav_walker.php');


add_theme_support( 'post-thumbnails' ); 

// Remove standard WP jquery and replace it with bootstrap version, plus other bootstrap js files, then run the rest of wp_head()
function bootstrap_head() {
	//wp_deregister_script('jquery'); //deregister the standard WP jquery files (and dependent files)
	$template_path = get_template_directory_uri();

    wp_deregister_script('jquery'); //remove standard jQuery in favour of Bootstrap version;

	wp_register_script( 'jquery-bootstrap', $template_path.'/js/jquery.js', false, '1.9.1', false );
	wp_enqueue_script( 'jquery-bootstrap' );

	wp_register_script( 'bootstrap-min', $template_path.'/js/bootstrap.js', 'jquery-bootstrap', '2.3.1', true );
	wp_enqueue_script( 'bootstrap-min' );

	wp_register_script('bootstrap-transition', $template_path.'/js/bootstrap-transition.js', array('bootstrap-min'), false, true);
	wp_enqueue_script('bootstrap-transition');

	wp_register_script('bootstrap-collapse', $template_path.'/js/bootstrap-collapse.js', array('bootstrap-transition'), false, true);
	wp_enqueue_script('bootstrap-collapse');

	wp_head(); 
}


//register and enqueue Google Maps code for Contact us page
function enqueue_gmap_scripts () {
	if (is_page_template( 'page-contactus.php' )) {

		$template_path = get_template_directory_uri();
		wp_register_script('gmap-api', '//maps.googleapis.com/maps/api/js?v=3.exp&sensor=false', array('jquery-bootstrap'), false, true);
		wp_enqueue_script('gmap-api');
		wp_register_script('gmap', $template_path.'/js/page-contactus.js', array('jquery-bootstrap'), false, true);
		wp_enqueue_script('gmap');
	}	
}

add_action( 'wp_enqueue_scripts', 'enqueue_gmap_scripts' );

// Navigation stuff

//language toggle function - called from header.php
function language_selector_flags(){
    $languages = icl_get_languages('skip_missing=0&orderby=custom');
    if(!empty($languages)){
        foreach($languages as $l){
            echo '<li class="lang_switch">';
            if(!$l['active']) echo '<a href="'.$l['url'].'">';
            echo '<img src="'.$l['country_flag_url'].'" height="12" alt="'.$l['language_code'].'" width="18" />';
            if(!$l['active']) echo '</a>';
            echo '</li>';
        }
    }
}

//multiple featured images for posts

if( class_exists( 'kdMultipleFeaturedImages' ) ) {

        $args2 = array(
                'id' => 'featured-image-2',
                'post_type' => 'post',      // Set this to post or page
                'labels' => array(
                    'name'      => 'Featured image 2',
                    'set'       => 'Set featured image 2',
                    'remove'    => 'Remove featured image 2',
                    'use'       => 'Use as featured image 2',
                )
        );

        new kdMultipleFeaturedImages( $args2 );
}

if( class_exists( 'kdMultipleFeaturedImages' ) ) {

        $args3 = array(
                'id' => 'featured-image-3',
                'post_type' => 'post',      // Set this to post or page
                'labels' => array(
                    'name'      => 'Featured image 3',
                    'set'       => 'Set featured image 3',
                    'remove'    => 'Remove featured image 3',
                    'use'       => 'Use as featured image 3',
                )
        );

        new kdMultipleFeaturedImages( $args3 );
}


//multiple featured images for pages

if( class_exists( 'kdMultipleFeaturedImages' ) ) {

        $args4 = array(
                'id' => 'featured-image-2',
                'post_type' => 'page',      // Set this to post or page
                'labels' => array(
                    'name'      => 'Featured image 2',
                    'set'       => 'Set featured image 2',
                    'remove'    => 'Remove featured image 2',
                    'use'       => 'Use as featured image 2',
                )
        );

        new kdMultipleFeaturedImages( $args4 );
}

if( class_exists( 'kdMultipleFeaturedImages' ) ) {

        $args5 = array(
                'id' => 'featured-image-3',
                'post_type' => 'page',      // Set this to post or page
                'labels' => array(
                    'name'      => 'Featured image 3',
                    'set'       => 'Set featured image 3',
                    'remove'    => 'Remove featured image 3',
                    'use'       => 'Use as featured image 3',
                )
        );

        new kdMultipleFeaturedImages( $args5 );
}



?>
