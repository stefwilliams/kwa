<?php ?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo bloginfo('name'); ?></title>
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/ico/favicon.ico" type="image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href="<?php echo get_template_directory_uri(); ?>/css/kwa-bootstrap.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-responsive.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">
	<?php 
	bootstrap_head();
	$lang = ICL_LANGUAGE_CODE;


	?>
</head>
<body class="<?php echo $lang; ?> <?php echo $post->post_name; ?>">
	<div class="container first">
		<div class="page-header">
			<div class="row">
				<div class="span3">
					<h1><?php echo bloginfo('name'); ?></h1>
					<a href="/"><div class="logo">
					</div></a>
				</div>
				<div class="span9">
					<!-- navbar -->
					<div class="navbar">
						<div class="navbar-inner">
							<div class="container">
								<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
								<a class="btn btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</a>

								<?php 
								$navoptions = array(
									'theme_location'  => 'navbar',
									'menu'            => 'Main Menu', 
									'container'       => 'div',
									'container_class' => 'nav-collapse collapse',
									'menu_class'      => 'nav', 
				//  'fallback_cb'     => 'wp_page_menu',
									'depth'           => 3,
									'walker'          =>  new twitter_bootstrap_nav_walker()
									);

									wp_nav_menu( $navoptions ); ?>
									<ul class="nav pull-right">
									<?php language_selector_flags(); ?>
									<?php // if ( function_exists( 'lang_switch' )) lang_switch(); ?>					
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		<!-- /div -->		
