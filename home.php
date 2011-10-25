<?php
get_header();
?>

<div class="ninetysixty">
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

      <article <?php post_class('small-article') ?> id="post-<?php the_ID(); ?>">
        <header>
          <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
          <time datetime="<?php the_time('Y-m-d')?>"><?php the_time('F jS, Y') ?></time>
          <span class="author">by <?php the_author() ?></span>
        </header>
		<?php get_the_image(array('custom_key' => array('Feature', 'feature'), 'default_size' => 'type-home', 'link_to_post' => false, 'width' => 260, 'height' => 150)); ?> 
        <?php the_excerpt(); ?>
        <footer>
          <?php comments_popup_link('No opinions yet;', '1 opinion;', '% opinions;'); ?>
        </footer>
      </article>

    <?php endwhile; ?>

    <nav>
      <div><?php next_posts_link('&laquo; Older Entries') ?></div>
      <div><?php previous_posts_link('Newer Entries &raquo;') ?></div>
    </nav>

  <?php else : ?>

    <h2>Not Found</h2>
    <p>Sorry, but you are looking for something that isn't here.</p>
    <?php get_search_form(); ?>

  <?php endif; ?>
</div>

<?php
get_footer();
?>