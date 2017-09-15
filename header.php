<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>><?php wp_title(' | ', true, 'right'); ?><?php bloginfo('name'); ?></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/style.css">
<style>
	.title_box_list{
		background-image: url("<?php echo get_template_directory_uri() ?>/img/arrangement-2264812_1920.jpg");
	}
</style>
</head>
<body>
<div class="header">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<nav class="navbar">
					<div class="container">
						<div class="collapse navbar-collapse">
						<form class="navbar-form navbar-right navbar-top" role="search">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="search keywords">
								<button type="Submit" class="btn btn-default">SEARCH
								</button>
							</div>
						</form>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</div>
</div>
<?php wp_head(); ?>
