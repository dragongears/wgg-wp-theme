<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Bootstrap to WordPress
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<!-- Bootstrap core CSS -->
	<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.min.css" rel="stylesheet">

	<!-- FontAwesome Icons -->
	<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">

	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>

	<?php wp_head(); ?>

	<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wgg-2016' ); ?></a>

	<!-- HEADER
	================================================== -->
	<header class="site-header" role="banner">

		<!-- NAVBAR
		================================================== -->
		<div class="navbar-wrapper">

			<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">

				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>

						<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo-meeple-yellow.png" alt="Westchester Gaming Group"></a>

					</div><!-- navbar-header -->

					<!-- If the menu (WP admin area) is not set, then the "menu_class" is applied to "container". In other words, it overwrites the "container_class". Ref: http://wordpress.org/support/topic/wp_nav_menu-menu_class-usage-bug?replies=4 -->

					<?php
					wp_nav_menu( array(

						'theme_location'	=> 'primary',
						'container'			=> 'nav',
						'container_class'	=> 'navbar-collapse collapse',
						'menu_class'		=> 'nav navbar-nav navbar-right'

					) );
					?>

				</div><!-- container -->

			</div><!-- navbar -->

		</div><!-- navbar-wrapper -->

	</header>

	<!-- HERO
================================================== -->
	<section id="hero" data-type="background" data-speed="5">
		<article>
			<div class="container clearfix">
				<div class="row">

					<div class="col-sm-1">
					</div><!-- col -->
					<div class="col-sm-2">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/dice-blue.png" alt="" class="logo">
					</div>

					<div class="col-sm-2">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/wgg.png" alt="Westchester Gaming Group" class="logo">
					</div>

					<div class="col-sm-5 hero-text">
						<h1 class="sr-only">Westchester Gaming Group</h1>
						<p class="lead">RPG & Boardgames in Westchester&nbsp;County, New&nbsp;York</p>

					</div><!-- col -->

					<div id="social" class="col-sm-2">
						<a class="btn btn-lg" href="http://www.meetup.com/westchester-gaming-group/"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/meetup_24.png" alt="Meetup" />Meetup</a>
						<a class="btn btn-lg" href="http://www.facebook.com/westchestergaming"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/facebook_24.png" alt="Facebook" />Facebook</a>
					</div><!-- col -->

				</div><!-- row -->
			</div><!-- container -->
		</article>
	</section>
