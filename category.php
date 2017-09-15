<?php
  $cat_info = get_category($cat);
?>
<?php get_header(); ?>
<header class="header_title">
  <h1><?php echo wp_specialchars( $cat_info->name ); ?></h1>
</header>
<?php query_posts('cat='.$cat);?>
<article class="container">
  <div class="row">
    <?php
    while(have_posts()) : the_post();

      get_template_part('content','home');

    endwhile;
    ?>
  </div>
  <?php
  pagination($additional_loop->max_num_pages);
   ?>
</article>
<?php get_footer(); ?>
