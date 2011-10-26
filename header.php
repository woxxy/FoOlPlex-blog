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
		<link href='http://fonts.googleapis.com/css?family=Antic' rel='stylesheet' type='text/css'>
		<?php wp_head(); ?>
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
					<img src="<?php bloginfo('template_url') ?>/images/twitter.png" />
					<img src="<?php bloginfo('template_url') ?>/images/facebook.png" />
					<img src="<?php bloginfo('template_url') ?>/images/RSS.png" />
				</div>
				<?php /*
				<ul id="header_panel">
					<li>
						<div id="forum_latest_panel">
							<h3>These are the most recent forum threads</h3>
							<p>Loading...</p>
						</div>
					</li>
					<li>
						<div id="slide_latest_panel">
							<h3>These are the most recent releases</h3>
							<p>Loading...</p>
						</div>
					</li>
					<li>
						<div>
							<h3>This is the list of all our team members</h3>
							<table style="width:100%;">
								<tr>
									<?php
									$ourcontacts = array(
										//"main" => array("name", "position", "website", "href", "twitter"),
										"Darais" => array("Darais", "boss and editor", "tumblr", "http://darais.tumblr.com/", "DaraisTenko"),
										"Z-Virus" => array("Z-Virus", "co-boss and proofreader", "", "", ""),
										"woxxy" => array("Woxxy", "secretary and programmer", "woxxy.org", "http://woxxy.org", "woxxy"),
										"guorbatschow" => array("guorbatschow", "substitute boss", "guorbatschow.org", "http://guorbatschow.com", "guorbatschow"),
										"gebakkenvis" => array("gebakkenvis", "always been here", "", "", "gebakkenvis"),
										"Sivert" => array("Sivert", "workpony", "", "", "siveruu"),
										"Necrophantasia" => array("Necrophantasia", "canasian in Japan", "ninjapan.org", "http://ninjapan.org", "necrophantasia"),
										"MLLofTUHC" => array("MLLofTUHC", "Dr.translator", "", "", "MLLofTUHC"),
										"Seito" => array("Seito", "SYDded", "", "", "seitokaiyakuin"),
										"formerly" => array("formerly", "Tonnura-fag", "pixiv", "http://www.pixiv.net/member.php?id=119705", "vedasisme"),
										"highwind" => array("highwind", "tinkle proofreader", "", "", "tinklewind"),
										"Fadamor" => array("fadamor", "busy proofreader", "", "", "fadamor"),
										"DKW" => array("DKW", "proofreader in CAPS", "", "", ""),
										"GBolt" => array("GBolt", "trollreader", "", "", "gbolt_0"),
										"Toshi" => array("Toshi", "proofreads them lolis", "", "", "acatirl"),
										"Elemhunter1" => array("Elemhunter1", "nick-proof", "", "", "Elemhunter1"),
										"asianaussie" => array("asianaussie", "proofing and slipping", "", "", ""),
										"scizzer12" => array("scizzer12", "edits on commodore", "", "", "scizzer12"),
										"muge" => array("muge", "editor... designer", "muge.hacked.jp", "http://muge.hacked.jp", "mugematic"),
										"alphonse" => array("alphonse", "fasteditor", "", "", "alphonse2000"),
										"urielmatt" => array("urielmatt", "artistic editor", "deviantart.com", "http://urielmatt.deviantart.com", "urielmatt"),
										"Entry-level" => array("Entry-level", "Entry level editor", "", "", ""),
										"clannad3" => array("Clannad3", "Another tinkleditor?", "", "", ""),
										"benner" => array("Benner", "beaner editor", "", "", "bennnner"),
										"scarlet_meister" => array("Scarlet_Meister", "Germaneditor", "", "", "")
									);

									$onecount = 0;
									foreach ($ourcontacts as $item)
									{
										if ($onecount % 4 == 0 && $onecount > 0)
										{
											echo '</tr><tr>';
										}

										echo '<td class="tdwithaline" style="font-size:12px; font-weigth:bold;">';
										if ($item[2] != "")
											echo '<a target="_blank" href="' . $item[3] . '">' . $item[0] . '</a>';
										else
											echo $item[0];
										echo '</td>';
										$onecount++;
									}
									?>
								</tr>
							</table>
						</div>
					</li>
					<li>
						<div>
							<p>Problem?</p>
							<h2>Ask FoOlRulez</h2>
							<p>Be it a question on scanlation, on our software, or if you have issues with your server, "Ask FoOlRulez" is where you (might) get your questions answered.</p>
							<p>Oh, and there are the achievements.<br/>That's the best part actually.</p>
						</div>
					</li>
					<li>
						<div>
							<h3>FoOlSlide is our Open Source comic manager</h3>
							<img src="http://i.imgur.com/ENx1c.png" style="width:300px;"/>
							<p>It won't help you saving the world, but sure as hell this is the best reading experience you can give to your users.</p>
						</div>
					</li>
				</ul>
				 * 
				 */?>
				<ul id="header_tabs">
					<li><a href="/blog">Blog</a></li>
					<li><a href="/forums">Forum</a></li>
					<li><a href="/slide">Releases</a></li>
					<li><a href="/slide/reader/team/foolrulez">Team</a></li>
					<li><a href="http://ask.foolrulez.com" target="_blank">Ask</a></li>
					<li><a href="http://wiki.foolslide.org" target="_blank">FoOlSlide</a></li>
				</ul>
			</div>
		</header>

		<div role="main">