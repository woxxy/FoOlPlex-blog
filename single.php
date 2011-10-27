<?php
get_header();
?>

<div class="ninetysixty single">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<header>
					<aside class="single_right">
						<h3>Share this post</h3>
						<div style="margin:10px;"><a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-via="woxxy" data-related="foolrulez:Silent FoOlRulez account.">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script></div>
						<div style="margin:10px"><iframe src="http://www.facebook.com/plugins/like.php?href=<?php echo urlencode(the_permalink()); ?>&amp;layout=button_count&amp;show_faces=true&amp;width=250&amp;action=like&amp;font=arial&amp;colorscheme=light&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:250px; height:21px;" allowTransparency="true"></iframe></div>
						<div style="margin:10px">
							<g:plusone size="medium" href="<?php echo urlencode(the_permalink()); ?>"></g:plusone>
						</div>
					</aside>
					<aside class="single_left">
						<h3>The author</h3>
						<?php echo get_avatar(get_the_author_email(), '64'); ?><br/>
						<strong><?php the_author_meta("nickname"); ?></strong>
						<div style="text-align:left;">
							<?php if (strlen(get_the_author_meta("twitter")) > 0)
							{ ?><h4 style="padding-bottom:3px;margin-bottom:0;">@<a target="_blank"href="http://twitter.com/<?php the_author_meta("twitter"); ?>"><?php the_author_meta("twitter"); ?></a></h4><a target="_blank" class="twitter-follow-button" data-show-screen-name="false" href="http://twitter.com/<?php the_author_meta("twitter"); ?>">http://twitter.com/<?php the_author_meta("twitter"); ?></a><?php } ?>

							<?php
							if (get_the_author_meta("description"))
							{
								echo '<h4 style="padding-bottom:3px;margin-bottom:0;">Bio</h4>';
								echo '<div class="text">';
								the_author_meta("description");
								echo '</div>';
							}
							?>
						</div>
					</aside>

					<h2><?php the_title(); ?></a></h2>
					<div class="time"><time datetime="<?php the_time('Y-m-d') ?>"><?php the_time('l, F jS, Y') ?></time>
						at <time><?php the_time() ?></time></div>
					<div class="image"><?php
					get_the_image(array('custom_key' => array('Feature', 'feature'),
						'default_size' => 'large',
						'link_to_post' => false));
							?></div>
				</header>
				<div class="text">
					<?php the_content('Read the rest of this entry &raquo;'); ?>
					<div class="clearfix"></div>
					<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				</div>
				<footer>
					<?php the_tags('<p>Tags: ', ', ', '</p>'); ?>
					<p> This blogpost is part of <?php the_category(', ') ?>.
						You can follow any responses to this entry through the <?php post_comments_feed_link('RSS 2.0'); ?> feed.

						<?php
						if (comments_open() && pings_open())
						{
							// Both Comments and Pings are open 
							?>
							You can <a href="#respond">leave a response</a>, or <a href="<?php trackback_url(); ?>" rel="trackback">trackback</a> from your own site.

							<?php
						}
						elseif (!comments_open() && pings_open())
						{
							// Only Pings are Open  
							?>
							Responses are currently closed, but you can <a href="<?php trackback_url(); ?> " rel="trackback">trackback</a> from your own site.

							<?php
						}
						elseif (comments_open() && !pings_open())
						{
							// Comments are open, Pings are not 
							?>
							You can skip to the end and leave a response. Pinging is currently not allowed.

							<?php
						}
						elseif (!comments_open() && !pings_open())
						{
							// Neither Comments, nor Pings are open  
							?>
							Both comments and pings are currently closed.

						<?php } edit_post_link('Edit this entry', '', '.'); ?>
					</p>
				</footer>
				<nav>
					<div style="float:left;"><?php previous_post_link('&laquo; %link') ?></div>
					<div style="float:right;"><?php next_post_link('%link &raquo;') ?></div>
					<div class="clearfix"></div>
				</nav>

				<?php comments_template(); ?>

			</article>

		<?php endwhile;
	else: ?>

		<p>Sorry, no posts matched your criteria.</p>

	<?php endif; ?>

</div>

<?php get_footer(); ?>
