<?php
/*
Template Name: Publications Template
*/
?>

<?php get_template_part('templates/page', 'header'); ?>

<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; query_posts("cat=50&paged=$paged"); ?>

<?php while (have_posts()) : the_post(); ?>
    <div class="box span3">
        <?php get_template_part('templates/content', get_post_format()); ?>
    </div>
<?php endwhile; ?>

<?php if ($wp_query->max_num_pages > 1) : ?>
  <nav class="post-nav">
    <ul class="pager">
      <li class="previous"><?php next_posts_link(__('&larr; Older posts', 'roots')); ?></li>
      <li class="next"><?php previous_posts_link(__('Newer posts &rarr;', 'roots')); ?></li>
    </ul>
  </nav>
<?php endif; ?>