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
    <?php /*get_template_part_for_all_posts('content','home') */?>
    <?php
                  global $post;
                  $args = array('numberposts'=>3, 'offset'=>0);
                  $myposts = get_posts( $args );
                
                        foreach( $myposts as $post ) :
                              setup_postdata($post);
                              get_template_part('content','home');
                        endforeach;
          
                  wp_reset_postdata();
            ?>
  </div>
</article>
<?php get_footer(); ?>
<div class="footer">
	<h4 class="footer_title">Miyuki.M</h4>
</div>