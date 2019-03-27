<!DOCTYPE html>
<html lang="en" style="overflow-x: hidden;">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
		<title>Nepal Trekking team</title>
		<!--
		========================
		!!! style links here !!!
		========================
		-->
		<!-- reset.css -->
		<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri('/')); ?>/assets/css/reset.css">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<!-- fontawesome -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- blog-style-css -->
		<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri('/')); ?>/assets/css/blog-style.css">
		<!-- single-blog-post -->
		<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri('/')); ?>/assets/css/single-blog.css">
		<!-- skew-background-css -->
		<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri('/')); ?>/assets/css/skew-background.css">
		<!-- hover on overlay -->
		<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri('/')); ?>/assets/css/hover-overlay.css">
		<!-- custom links -->
		<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri('/')); ?>/assets/css/style.css">
	</head>
	<body>
		<a href="#" class="scrollToTop"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i></a>
		<div class="full-size-responsive">
			<!--
			=========================
			!!! header start here !!!
			=========================
			-->
			
			<header class="nepal-trakking-header-section">
				<div class="bottom-angle-style-1440"></div>
				<div class="bottom-angle-style"></div>
				<div class="bottom-angle-style-1024"></div>
				<div class="bottom-angle-style-768"></div>
				<div class="bottom-angle-style-425"></div>
				<div class="bottom-angle-style-320"></div>
				<nav class="container navbar navbar-inverse navbar-style">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand brand-style" href="<?php echo site_url(); ?>">Nepal Trekking Team</a>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<?php 
								wp_nav_menu(
									array(
										'menu' => 'Main Menu',
										'menu_class' => 'nav navbar-nav',
									)
								); 
							?>
							<!-- <ul class="nav navbar-nav">
								<li><a href="#">Home</a></li>
								<li><a href="#">Destination</a></li>
								<li><a href="#">Travel</a></li>
								<li><a href="#">Blog</a></li>
								<li><a href="#">Contact us</a></li>
							</ul> -->
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
			<section class="header-caption container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12">
						<h1>Nepal Trekking Team</h1>
						<h3>The Right Tour For The Right <strong>Travellers</strong></h3>
					</div>
					<div class="clearfix"></div>
				</div>
				<div style="height: 100px;"></div>
			</section>
		</header>