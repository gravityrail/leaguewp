<!doctype html>

  <html class="no-js"  <?php language_attributes(); ?>>

	<head>
		<meta charset="utf-8">
		
		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta class="foundation-mq">
		
		<!-- If Site Icon isn't set in customizer -->
		<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
			<!-- Icons & Favicons -->
			<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
			<link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon" />
			<!--[if IE]>
				<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
			<![endif]-->
			<meta name="msapplication-TileColor" content="#f01d4f">
			<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/images/win8-tile-icon.png">
	    	<meta name="theme-color" content="#121212">
	    <?php } ?>

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_head(); ?>

		<!-- Drop Google Analytics here -->
		<!-- end analytics -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	</head>
		
	<body <?php body_class(); ?>>

		<div class="off-canvas-wrapper">
			<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
		
      <!-- off-canvas title bar for 'small' screen -->
      <div class="title-bar" data-responsive-toggle="widemenu" data-hide-for="medium">
        <img class="logo" src="https://dl.dropboxusercontent.com/u/245807/lwv/logo.jpg" alt="League of Womens Voters Logo" width="50px">
        <p class="league-chapter">League of Women Voters<sup>&#174;</sup>
          <br>of Western Nevada County</p>
        <div class="title-bar-right">
          <span class="title-bar-title"></span>
          <button class="menu-icon" type="button" data-open="offCanvasRight"></button>
        </div>
      </div>

      <!-- off-canvas right menu -->
      <?php get_template_part('parts/content', 'offcanvas'); ?>

      <!-- "wider" top-bar menu for 'medium' and up -->
      <div id="widemenu" class="top-bar">
        <div class="column row">
          
          <div class="top-bar-left">
            <ul class="menu">
              	<?php joints_top_nav(); ?>
            </ul>
          </div>
          
          <div class="top-bar-right">
            <ul class="menu social">
              <li><a href="#"><i class="fa fa-facebook-square fa-lg"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter-square fa-lg"></i></a></li>
              <li><a href="#"><i class="fa fa-pinterest-square fa-lg"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus-square fa-lg"></i></a></li>
            </ul>
          </div>
          
        </div>
      </div>
      
      <header class="show-for-medium">
          <div class="row">
          <div class="small-12 medium-8 columns">
            <a class="branding" href="/"><img class="logo" src="https://dl.dropboxusercontent.com/u/245807/lwv/logo.jpg" alt="League of Womens Voters Logo" width="75px">
            <p class="league-chapter">League of Women Voters<sup>&#174;</sup>
              <br>of Western Nevada County</p></a>
          </div>
            <div class="small-12 medium-4 columns text-right show-for-medium">
              <img src="https://dl.dropboxusercontent.com/u/245807/lwv/mdw.png" alt="Making Democracy Work" width="170px"/>
          </div>
          </div>
        </header>
					
		 	<div class="off-canvas-content" data-off-canvas-content>