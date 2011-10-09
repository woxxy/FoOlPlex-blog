<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">

		<!-- Use the .htaccess and remove these lines to avoid edge case issues.
			 More info: h5bp.com/b/378 -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- Mobile viewport optimized: j.mp/bplateviewport -->
		<meta name="viewport" content="width=device-width,initial-scale=1">

		<!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

		<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/style.css">

		<!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

		<!-- All JavaScript at the bottom, except this Modernizr build incl. Respond.js
			 Respond is a polyfill for min/max-width media queries. Modernizr enables HTML5 elements & feature detects; 
			 for optimal performance, create your own custom Modernizr build: www.modernizr.com/download/ -->
		<script src="<?php bloginfo('template_url') ?>/js/libs/modernizr-2.0.6.min.js"></script>

		<!-- Wordpress Head Items -->
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

		<?php wp_head(); ?>
	</head>

	<body>
		<div id="iamninetysixty"></div>
		<header>
			<div class="ninetysixty">
				<div id="logo">
					<a href="/blog"><h1>FoOl<span>Rulez</span></h1></a>
					<h3>We translate it because we want to read it.</h3>
					<img src="<?php bloginfo('template_url') ?>/images/twitter.png" />
					<img src="<?php bloginfo('template_url') ?>/images/facebook.png" />
					<img src="<?php bloginfo('template_url') ?>/images/RSS.png" />
				</div>

				<div id="head_funct">
					<ul class="tabs">
						<li><a href="/forums">Forum</a></li>
						<li><a href="/slide">Releases</a></li>
						<li><a href="/slide/reader/team/foolrulez">Team</a></li>
						<li><a href="http://ask.foolrulez.com">Help</a></li>
						<li><a href="http://foolslide.org">FoOlSlide</a></li>
					</ul>
				</div>
			</div>
		</header>

		<div role="main">