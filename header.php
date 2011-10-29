<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
		<meta name="description" content="">
		<meta name="author" content="">
		<meta http-equiv="imagetoolbar" content="false" />
		<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale = 1.0">
		<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/style.css">
		<script src="<?php bloginfo('template_url') ?>/js/libs/modernizr-2.0.6.min.js"></script>

		<!-- Wordpress Head Items -->
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<?php
		wp_enqueue_script('comment-reply');
		wp_head();
		
		if(is_single()) { ?>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<meta property="og:title" content="<?php echo htmlentities(get_the_title()) ?>" />
			<meta property="og:description" content="<?php echo htmlentities(get_the_excerpt(), ENT_COMPAT) ?>" />
			<meta property="og:image" content="<?php
					$img_array = get_the_image(array('custom_key' => array('Feature', 'feature'),
						'default_size' => 'large', 'format' => 'array',
						'link_to_post' => false, 'echo' => false));
					echo $img_array["src"];
							?>" />
			<?php endwhile; endif; ?>
		<?php } ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="iamninetysixty"></div>
		<header id="header">
			<div class="ninetysixty">
				<div id="logo">
					<a href="/blog"><h1>FoOlRulez</h1></a>
					<h3>We translate it because we want to read it.</h3>
				</div>
				<div class="social">
					<a href="http://twitter.com/FoOlRulez" target="_blank" title="Official FoOlRulez Twitter account">
						<img class="icon_on" width="32" height="32" src="<?php bloginfo('template_url') ?>/images/twitter.png" />
						<img class="icon_off" width="32" height="32" src="<?php bloginfo('template_url') ?>/images/twitter_hover.png" />
					</a>
					<a href="http://facebook.com/FoOlRulez" target="_blank" title="Official FoOlRulez Facebook page">
						<img class="icon_on" width="32" height="32" src="<?php bloginfo('template_url') ?>/images/facebook.png" />
						<img class="icon_off" width="32" height="32" src="<?php bloginfo('template_url') ?>/images/facebook_hover.png" />
					</a>
					<a href="/blog/feed" title="Blog RSS feed">
						<img class="icon_on" width="32" height="32" src="<?php bloginfo('template_url') ?>/images/RSS.png" />
						<img class="icon_off" width="32" height="32" src="<?php bloginfo('template_url') ?>/images/RSS_hover.png" />
					</a>
				</div>
				<nav id="header_tabs">
					<a href="/blog" title="<?php bloginfo('name'); ?> blog">Blog</a>
					<a href="/forums" title="FoOlRulez Forums">Forum</a>
					<a href="/slide" title="Read our latest releases on our reader">Releases</a>
					<a href="/blog/the-team/" title="Discover who's part of FoOlRulez">Team</a>
					<a href="http://ask.foolrulez.com" target="_blank" title="Ask FoOlRulez some questions">Ask</a>
					<a href="http://wiki.foolslide.org" target="_blank" title="Explore FoOlSlide, our comics reader">FoOlSlide</a>
				</nav>
			</div>
		</header>

		<div role="main">