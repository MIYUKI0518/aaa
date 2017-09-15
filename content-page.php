<section id="post-<?php the_ID(); ?>" <?php post_class('container'); ?>>
  <header class="header_title">
    <?php the_title( '<h1>', '</h1>' ); ?>
  </header>
  <article class="row">
    <?php the_content(); ?>
    <?php the_post_thumbnail( array( 648, 648 ) )?>
  </article>
</section>

<?php get_footer(); ?>
