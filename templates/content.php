<article <?php post_class(); ?>>
  <div class="pull-left" style="margin-right:15px">
     <?php if ( has_post_thumbnail()) : ?>
       <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
        <?php the_post_thumbnail(array(100,100)); ?>
       </a>
     <?php endif; ?>
  </div>
  <header>
    <h4 class="entry-title">
      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h4>
    <?php get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div>
  <footer>

    <!-- <?php the_tags('<ul class="entry-tags"><li><span class="label">','</span></li><li><span class="label">','</span></li></ul>'); ?> -->
  </footer>
</article>