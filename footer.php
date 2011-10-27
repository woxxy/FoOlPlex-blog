</div> <!-- end of #main -->

<footer id="footer">
	<div class="ninetysixty">
		 <ul class="categories">
			<?php echo(wp_list_categories('title_li=&echo=0')); ?>

			<?php
			echo wp_list_bookmarks(
					array(
						"title_li" => "",
						"echo" => 0,
						'title_before' => '',
						'title_after' => '',
			));
			?>
			 <li>All the rest
				 <ul>
					 <li>This website is proudly powered by Wordpress.</li>
					 <li>This theme is FoOlPlex, created by us.</li>
					 <li>• • •</li>
					 <li>We make no claim to own the manga releases that we've translated and that we display on this site, and we'll be more than happy to remove the content if the owner asks us to, even informally, as long as we can identify him as such.</li>
					 <li>• • •</li>
					 <li>Unless stated otherwise, all our webpages are under <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/"><img height="15" width="80" alt="Creative Commons License" src="http://i.creativecommons.org/l/by-nc-sa/3.0/80x15.png" /></a> <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/">Creative Commons Attribution-NonCommercial-ShareAlike 3.0 Unported License</a>.</li>
					 <li>• • •</li>
					 <li>Remember that we are good boys and that we love hugs.</li>
				 </ul>
			 </li>
		</ul>
	</div>
</footer>


<!-- JavaScript at the bottom for fast page loading -->

<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php bloginfo('template_url') ?>/js/libs/jquery-1.6.4.min.js"><\/script>')</script>


<!-- scripts concatenated and minified via build script -->
<script defer src="<?php bloginfo('template_url') ?>/js/plugins.js"></script>
<script defer src="<?php bloginfo('template_url') ?>/js/script.js"></script>
<!-- end scripts -->


<!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID.
	 mathiasbynens.be/notes/async-analytics-snippet -->
<script>
	var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview'],['_trackPageLoadTime']];
	(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
		g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
		s.parentNode.insertBefore(g,s)}(document,'script'));
</script>

<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
	 chromium.org/developers/how-tos/chrome-frame-getting-started -->
<!--[if lt IE 7 ]>
  <script defer src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  <script defer>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
<![endif]-->

</body>
</html>
