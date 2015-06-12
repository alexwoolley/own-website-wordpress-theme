<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		<?php 
			echo get_bloginfo();
			echo " | ";
			echo get_bloginfo ( 'description' ); 
		?>
	</title>
	<!-- jQuery -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<!-- BOOTSTRAP -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<!-- END BOOTSTRAP -->
	<!-- GOOGLE FONTS -->
	<link href='http://fonts.googleapis.com/css?family=Merriweather:400italic,400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Merriweather+Sans:300,400' rel='stylesheet' type='text/css'>
	<!-- END GOOGLE FONTS -->
	<!-- Own stylesheet -->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" type="text/css">
	<?php wp_head(); ?>
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="row">
				<div class="col-sm-10 col-md-offset-1">
				<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav">
							<?php
								//Get the Header Menu. Strip out div and ul tags.
								wp_nav_menu( array( 'theme_location' => 'header-menu', 'container' => false, 'items_wrap' => '%3$s' ) ); 
							?>
						</ul>
					</div>
				</div>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container -->
	</nav>
	<div class="container" role="main">
		<div class="row" id="masthead-row">
			<div class="col-sm-10 col-md-offset-1">
				<h1 id="masthead"><a href="<?php echo home_url(); ?>"><?php echo get_bloginfo(); ?></a></h1>
				<p>writes stuff. And this is the place to find it all.</p>
			</div>
		</div>
		<div class="row">
			<?php if ( is_page() ): ?>
				<div class="col-sm-10 col-md-offset-1">
			<?php else: ?>
				<div class="col-sm-6 col-md-offset-1">
			<?php endif; ?>