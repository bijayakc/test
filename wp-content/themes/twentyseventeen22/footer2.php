<!-- Footer -->
<div id="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-6 col-xs-12 links">
				<h3>CW-Restuarant</h3>
				<ul class="menu-links">
					<li><a href="#home">Home</a></li>
					<li><a href="<?php echo esc_url(home_url('/')); ?>#about">About</a></li>
					<li><a href="<?php echo esc_url(home_url('/')); ?>#services">Services</a></li>
					<li><a href="<?php echo site_url(); ?>/category/gallery">Gallery</a></li>
				</ul>
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
	$phone_2 = get_post_meta($id,'phone_2',1);
	$mobile_no = get_post_meta($id,'mobile_no',1);
	$email = get_post_meta($id,'email',1);
?>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<h3>GET HELP</h3>
				<ul>
					<li><a href="<?php echo esc_url(home_url('/')); ?>#contact">Contact Us</a></li>
					<li><a href="<?php echo $facebook_link; ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
					<li><a href="<?php echo $twitter_link; ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
					<li><a href="<?php echo $instagram_link; ?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
				</ul>
			</div>
			<div class="col-md-4 col-sm-12 col-xs-12 call">
				<h3>Call Us</h3>
				<h4><i class="fa fa-phone"></i>&nbsp;<?php echo $phone_1; ?></h4>
				<h4><i class="fa fa-phone"></i>&nbsp;<?php echo $phone_2; ?></h4>
				<h4><i class="fa fa-mobile"></i>&nbsp;<?php echo $mobile_no; ?></h4>
				<p><i class="fa fa-envelope"></i>&nbsp;<?php echo $email; ?></p>
			</div>
		<?php endwhile; ?>
<?php endif; ?>
		</div>
	</div>
</div>
</body>
<script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri('/'));?>/assets/js/jquery-3.2.1.js"></script>
<script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri('/'));?>/assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri('/'));?>/assets/js/prefixfree.min.js"></script>
<script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri('/'));?>/assets/js/zoom-slideshow.js"></script>
<script>

// Select all links with hashes
$('a[href*="#"]')
// Remove links that don't actually link to anything
.not('[href="#"]')
.not('[href="#0"]')
.not('[href="#cw-banner-slideshow"]')
.not('[href="#menu1"]')
.not('[href="#menu2"]')
.click(function(event) {
	// On-page links
	if (
		location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
		&&
		location.hostname == this.hostname
	) {
		// Figure out element to scroll to
		var target = $(this.hash);
		target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
		// Does a scroll target exist?
		if (target.length) {
			// Only prevent default if animation is actually gonna happen
			event.preventDefault();
			$('html, body').animate({
				scrollTop: target.offset().top
			}, 1000, function() {
				// Callback after animation
				// Must change focus!
				var $target = $(target);
				$target.focus();
				if ($target.is(":focus")) { // Checking if the target was focused
					return false;
				} else {
					$target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
					$target.focus(); // Set focus again
				};
			});
		}
	}
});
</script>

<script>
$(document).ready(function() {
	// Initialisation du plugin jQuery
	$('#view').setZoomPicture({
thumbsContainer: '#pics-thumbs',
prevContainer: '#nav-left-thumbs',
nextContainer: '#nav-right-thumbs',
zoomContainer: '#zoom',
zoomLevel: 2,
	});
});
</script>
</html>
