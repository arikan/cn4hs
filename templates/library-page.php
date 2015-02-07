<?php
/*
Template Name: Library Template
*/
?>

<?php get_template_part('templates/page', 'header'); ?>

<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; query_posts("cat=7&paged=$paged"); ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', get_post_format()); ?>
<?php endwhile; ?>

