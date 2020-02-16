<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
            <meta name="theme-color" content="#121212">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>
		
		<!-- Facebook share button link -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.10&appId=1650578075155926";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
          

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

		<div id="container">
			<div class="row no-gutters hidden-sm-down">
				<div class="col-md-12">
					<header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">

						<div id="inner-header" class="wrap cf">
							<div class="row align-items-center">
								<div class="col-md-4 col-sm-12">
									<?php get_search_form(); ?>
								</div>

								<div class="col-md-4 col-sm-12">
									<?php // to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> ?>
									<p class="text-center"><a href="<?php echo home_url(); ?>"><img src="/wp-content/themes/<?php echo get_template() . '/library/images/main-logo.png'; ?>"></a></p>
									<p id="logo" class="h1 text-center" itemscope itemtype="http://schema.org/Organization"><a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></p>
									<p class="text-center"> <?php bloginfo('description'); ?> </p>							
								</div>
							</div>
							<nav  class="hidden-sm-down" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
                                    <?php wp_nav_menu(array(
                                        'container' => false,                           // remove nav container
                                        'container_class' => 'menu cf',                 // class of container (should you choose to use it)
                                        'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
                                        'menu_class' => 'nav nav-fill',               // adding custom nav class
                                        'theme_location' => 'main-nav',                 // where it's located in the theme
                                        'before' => '',                                 // before the menu
                                        'after' => '',                                  // after the menu
                                        'link_before' => '',                            // before each link
                                        'link_after' => '',                             // after each link
                                        'depth' => 0,                                   // limit the depth of the nav
                                        'fallback_cb' => ''                             // fallback function (if there is one)
                                    )); ?>
                            </nav>
						</div>
					</header>
				</div>
			</div>


			<div class="row no-gutters hidden-md-up ">
				<div class="col-sm-12 col-xs-12">
					<header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">
						<div id="inner-header" class="wrap cf">
							<div class="row">
								<div class="col-sm-12 col-xs-12">
									<nav class="hidden-md-up mobile-navi navbar navbar-toggleable-md navbar-light" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
										<button class="navbar-toggler navbar-toggler-left" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
											<span class="navbar-toggler-icon"></span>
										</button>

										<div class="collapse navbar-collapse" id="navbarSupportedContent">
											<?php wp_nav_menu(array(
												'container' => false,                           // remove nav container
												'container_class' => 'menu cf',                 // class of container (should you choose to use it)
												'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
												'menu_class' => 'mobile-nav',               // adding custom nav class
												'before' => '',                                 // before the menu
												'after' => '',                                  // after the menu
												'link_before' => '',                            // before each link
												'link_after' => '',                             // after each link
												'depth' => 0,                                   // limit the depth of the nav
												'fallback_cb' => ''                             // fallback function (if there is one)
											)); ?>
										</div>
									</nav>
								</div>
							</div>

							<div class="col-xs-12 col-sm-12">
								<?php // to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> ?>
								<p class="text-center"><a href="<?php echo home_url(); ?>"><img src="/wp-content/themes/<?php echo get_template() . '/library/images/main-logo.png'; ?>"></a></p>
								<p id="logo" class="h1 text-center" itemscope itemtype="http://schema.org/Organization"><a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></p>
								<p class="text-center"> <?php bloginfo('description'); ?> </p>
							</div>


							<div class="col-xs-12 col-sm-12">
								<?php get_search_form(); ?>
							</div>
						</div>
					</header>
				</div>
			</div>
