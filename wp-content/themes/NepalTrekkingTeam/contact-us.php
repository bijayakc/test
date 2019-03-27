<?php get_header();
	/* Template Name:contact us*/
 ?>
<section>
	<div class="container" style="padding: 100px 0px;">
		<div class="article article-border">
			<h1>contact <span>us</span></h1>
			<p class="heading-img-2">
				<span>
					<img src="<?php echo esc_url(get_template_directory_uri('/')) ?>/assets/images/heading-decor-white.png" alt="">
				</span>
			</p>
		</div>
	</div>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.086914085063!2d85.33118901465562!3d27.683708482801702!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19bfe9772bed%3A0x7e9a6bc711b74c0b!2sNext+Nepal+Group!5e0!3m2!1sen!2snp!4v1513327575774" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6">
				<div class="article article-border">
					<h1>contact <span>form</span></h1>
					<p class="heading-img-2">
						<span>
							<img src="<?php echo esc_url(get_template_directory_uri('/')) ?>/assets/images/heading-decor-white.png" alt="">
						</span>
					</p>
				</div>

				<?php echo do_shortcode('[contact-form-7 id="65" title="Contact Us"]'); ?>

				<!-- <div class="col-sm-6 form-line">
					<div class="form-group">
						<label for="exampleInputUsername">Your name</label>
						[text* your-name class:form-control placeholder "Name"]
					</div>
					<div class="form-group">
						<label for="exampleInputUsername">Subject</label>
						[text* your-subject class:form-control placeholder "Subject"]
					</div>
					<div class="form-group">
						<label for="exampleInputEmail">Email Address</label>
						[text* your-email class:form-control placeholder "Your Email"]
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<label for ="description"> Message</label>
						[textarea* your-message class:form-control x11 placeholder "Your Message"]
					</div>
					<div>
						[submit class:btn class:btn-default class:btn class:submit "Send Message"]
					</div>
				</div> -->
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6" style="border: 1px dashed #f3f3f3;">
				<div class="article article-border">
					<h1>Some <span>info</span></h1>
					<p class="heading-img-2">
						<span>
							<img src="<?php echo esc_url(get_template_directory_uri('/')) ?>/assets/images/heading-decor-white.png" alt="">
						</span>
					</p>
					<?php dynamic_sidebar('sidebar-5'); ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>