<?php if (!have_posts()) : ?>
  <div class="alert">
    <?php _e('Sorry, no results were found.', 'roots'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; query_posts("cat=-6&paged=$paged"); ?>

<?php while (have_posts()) : the_post(); ?>
  <?php if (is_sticky()) : ?>
    <article <?php post_class(); ?>>
 <!--      <header>
        <h3 class="entry-title"><?php the_title(); ?></h3>
      </header>
  -->
      <div class="entry-content">
        <?php the_content(); ?>
      </div>
    </article>
  <?php else : ?>
    <?php get_template_part('templates/content', get_post_format()); ?>
  <?php endif; ?>
<?php endwhile; ?>

<?php if ($wp_query->max_num_pages > 1) : ?>
  <nav class="post-nav">
    <ul class="pager">
      <li class="previous"><?php next_posts_link(__('&larr; Older posts', 'roots')); ?></li>
      <li class="next"><?php previous_posts_link(__('Newer posts &rarr;', 'roots')); ?></li>
    </ul>
  </nav>
<?php endif; ?>