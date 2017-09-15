<?php get_header(); ?>
<div class="title_box">
	<div class="title_box_list">
		<h1 class="title_box_list_title">MY FAVORITE</h1>
	</div>
</div>
<div class="container_block">
	<div class="row">
		<div class="col-sm-12">
			<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="true">
						<span class="sr-only">Toggle navigation</span>
              			<span class="icon-bar"></span>
              			<span class="icon-bar"></span>
              			<span class="icon-bar"></span>
              		</button>
              		<a class="navbar-brand" href="#">Menu</a>
              	</div>
              	<div class="navbar-collapse collapse in" id="bs-example-navbar-collapse-1" aria-expanded="true">
              		<ul class="nav navbar-nav">
              			<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">FOOD</a>
							<ul class="dropdown-menu aria-labelledby="Dropdown"> 
								<li><a>Sample</a></li>
								<li><a>Sample</a></li>
								<li><a>Sample</a></li>
								<li><a>Sample</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">MUSIC</a>
						<ul class="dropdown-menu aria-labelledby="Dropdown"> 
							<li><a>Sample</a></li>
							<li><a>Sample</a></li>
							<li><a>Sample</a></li>
							<li><a>Sample</a></li>
						</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">LIFE</a>
						<ul class="dropdown-menu aria-labelledby="Dropdown"> 
							<li><a>Sample</a></li>
							<li><a>Sample</a></li>
							<li><a>Sample</a></li>
							<li><a>Sample</a></li>
						</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">SPORT</a>
						<ul class="dropdown-menu aria-labelledby="Dropdown"> 
							<li><a>Sample</a></li>
							<li><a>Sample</a></li>
							<li><a>Sample</a></li>
							<li><a>Sample</a></li>
						</ul>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
</div>
<article class="container">
  <div class="row">
  <!--
    < ?php /*get_template_part_for_all_posts('content','home') */?>
    < ?php
                  global $post;
                  $args = array('numberposts'=>1, 'offset'=>0);
                  $myposts = get_posts( $args );
                
                        foreach( $myposts as $post ) :
                              setup_postdata($post);
                              get_template_part('content','home');
                        endforeach;
          
                  wp_reset_postdata();
            ?>
  </div>
  <p>< ?php previous_posts_link('< Previous Page'); ?>　<?php next_posts_link('Next Page >'); ?></p>
  -->
<?php if ( have_posts() ) : ?>

<!-- Add the pagination functions here. -->

<!-- Start of the main loop. -->
<?php
/*
	query_posts('offset=3&posts_per_page=3');
	*/
	query_posts($query_string.'posts_per_page=3&paged='.$paged);
?>
<?php while ( have_posts() ) : the_post();  ?>

<?php  get_template_part('content','home');?>
<!-- the rest of your theme's main loop -->

<?php endwhile; ?>
<!-- End of the main loop -->

<!-- Add the pagination functions here. -->
<div class="content_box">
	<li><img src="<?php echo get_template_directory_uri() ?>/img/access-1846056_1920.jpg";></li><li><img src="<?php echo get_template_directory_uri() ?>/img/coffee-2354882_1920.jpg"></li><li><img src="<?php echo get_template_directory_uri() ?>/img/cream-2341149_1920.jpg"></li><li><img src="<?php echo get_template_directory_uri() ?>/img/london-2393098_1920.jpg"></li><li><img src="<?php echo get_template_directory_uri() ?>/img/season-1985856_1920.jpg"></li><li><img src="<?php echo get_template_directory_uri() ?>/img/vancouver-2613994_1920.jpg"></li>
</div>
<?php the_posts_pagination(array('mid_size'=>2))?>

<?php else : ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>


<?php get_footer(); ?>