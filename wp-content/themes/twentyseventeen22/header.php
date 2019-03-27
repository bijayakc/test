<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CW Restaurant</title>
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri('/'));?>/assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri('/'));?>/assets/css/animate.css">
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri('/'));?>/assets/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri('/'));?>/assets/css/font-awesome.min.css">
	<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri('/'));?>/assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri('/'));?>/assets/css/responsive.css">
	<style>
		@import url('https://fonts.googleapis.com/css?family=Raleway:400,700,900');
	</style>
	<style>
    #wrapper { margin:50px auto;}
  </style>
	<script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri('/'));?>/assets/js/wow.min.js"></script>
	<script>
		new WOW().init();
	</script>
</head>
<body>
	<div id="home">
		<div class="container cw-header">
			<div class="row">
				<div class="col-md-5 col-sm-12 col-xs-12">
					
					<h4 class="text-center cw-title"><strong>CW</strong>- Cafe With Restro Bar</h4>
				</div>
				<?php
$args = array(
	'post_type' => 'restro_info',
	'post_status' => 'publish',

	);

$the_query = new WP_Query($args);
if($the_query->have_posts()):
?>
	<?php
	while($the_query->have_posts()):
		$the_query->the_post();
		$id = get_the_ID();
		$facebook_link = get_post_meta($id,'facebook_link',1);
		$twitter_link = get_post_meta($id,'twitter_link',1);
		$instagram_link = get_post_meta($id,'instagram_link',1);
		$phone_1 = get_post_meta($id,'phone_1',1);
		$opening_time = get_post_meta($id,'opening_time',1);
	?>
				<div class="col-md-5 col-sm-6 col-xs-12 header">
					<div class="cw-social">
						<ul class="cw-social-links">
							<li><a href="<?php echo $facebook_link; ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
							<li><a href="<?php echo $twitter_link; ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
							<li><a href="<?php echo $instagram_link; ?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
						</ul>
					</div>
					<div class="cw-opening-time">
						<ul class="cw-time">
							<li><i class="fa fa-clock-o" style="font-size: 20px;"></i></li>
							<li><p><?php echo $opening_time; ?></p></li>
						</ul>
					</div>
				</div>
				<div class="col-md-1 col-sm-6 col-xs-12 cw-phone hidden-xs pull-right">
					<div class="cw-phone-no">
						<i class="fa fa-phone" style="font-size: 20px;"></i> <?php echo $phone_1; ?>
					</div>
					<div class="cw-delivery-title">
						<p>For Home Delivery Services</p>
					</div>
				</div>
			<?php endwhile; ?>
<?php endif; ?>
			</div>
		</div>
	</div>

	<!-- <div class="cw-navbar"> -->
		<!-- Navigation Bar -->
		<nav class="navbar navbar-default navbar-static-top" role="navigation">

		    <div class="container">
		        <div class="navbar-header">
		            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#ci-navbar-collapse">
		                <span class="sr-only">Toggle navigation</span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		            </button>
		            <a class="navbar-brand" href="#home"><img src="<?php echo esc_url(get_template_directory_uri('/'));?>/assets/images/cw logo.jpg" alt="Logo" style="width: 115px; height: auto; margin-top: -15px;"></a>
		        </div>
		        <div class="collapse navbar-collapse" id="ci-navbar-collapse">
		            <ul class="nav navbar-nav pull-right">
		                <li class="nav-item"><a href="#home" class="nav-link">Home</a></li>
										<li class="nav-item"><a href="#about" class="nav-link">About Us</a></li>
										<li class="nav-item"><a href="#services" class="nav-link">Services</a></li>
										<li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
										<li class="nav-item"><a href="#menu" class="nav-link">Menu</a></li>
										<li class="nav-item"><a href="#testimonial" class="nav-link">Testimonials</a></li>
										<li class="nav-item"><a href="<?php echo site_url(); ?>/category/gallery" class="nav-link">Gallery</a></li>
		            </ul>
		        </div>
			</div>
		</nav>
	<!-- </div> -->
