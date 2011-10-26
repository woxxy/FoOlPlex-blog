<?php
get_header();

$counter = 0;
?>

<div class="ninetysixty">
	<aside class="notice">
		<h4>Welcome at FoOls.</h4>
		<p>We are a team composed of translators, proofreaders, graphic editors and web developers.</p>
		<p>Our focus lies in amateur translation of Japanese manga and tool development for such.</p>
		<p>Contact with us can be established through comments to our posts, <a href="/forums">the forum</a>, <a href="">IRC</a>, by <a href="http://ask.foolrulez.com">asking us questions</a> or by <a href="http://github.com/FoOlRulez">filing a bug report</a>.</p>
		<br/>
		<p>For the latest releases, look no further:
		<ul>
			<li>Sora no Otoshimono Vol.13 Chapter 54</li>
			<li>Seitokai Yakuindomo Vol.4 Chapter 85</li>
			<li>Zero no Tsukaima: Chevalier Vol.1 Chapter 4</li>
			<li>Seitokai Yakuindomo Vol.4 Chapter 84</li>
			<li>Seitokai Yakuindomo Vol.2 Chapter 15</li>
			<li>Tonnura-san Vol.2 Chapter 8</li>
		</ul>	
		</p>
	</aside>
	<div class="sixtyfourty" style="float:right;">
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>

				<article <?php post_class('small-article') ?> id="post-<?php the_ID(); ?>">
					<div class="text">
						<header>
							<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
							<time datetime="<?php the_time('Y-m-d') ?>"><?php the_time('F jS, Y') ?></time>
							<span class="author">by <?php the_author() ?></span>
						</header>
						<div class="wrapped"><?php the_excerpt(); ?></div>
					</div>
					<div class="image"><a href="<?php the_permalink() ?>"><?php
		get_the_image(array('custom_key' => array('Feature', 'feature'),
			'default_size' => 'type-home',
			'link_to_post' => false, 'width' => 260, 'height' => 150));
				?></a>
						<footer>
							<?php comments_popup_link('<img src="' . get_bloginfo('template_url') . '/images/comments.png" /> 0', ' <img src="' . get_bloginfo('template_url') . '/images/comments.png" />1', '<img src="' . get_bloginfo('template_url') . '/images/comments.png" /> %', '', ' <img src="' . get_bloginfo('template_url') . '/images/comments.png" /> Off'); ?>
						</footer>
					</div>
				</article>
<div class="clearfix"></div>
		<?php
			endwhile;
			?>
		</div>
	<div class="clearfix"></div>
		<nav>
			<div><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</nav>
<div class="clearfix"></div>
	<?php else : ?>

		<h2>Not Found</h2>
		<p>Sorry, but you are looking for something that isn't here.</p>
		<?php get_search_form(); ?>

	<?php endif; ?>
</div>

<?php
get_footer();
?>