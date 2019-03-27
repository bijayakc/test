<section class="bg-color-newsletter">
	<div class="nepal-trakking-newsletter-section">
		<div class="overlay-custom-2"></div>
		<div class="bottom-angle-style border-b-bg-color-newsletter"></div>
		<div class="bottom-angle-style-1024 border-b-bg-color-newsletter"></div>
		<div class="bottom-angle-style-768 border-b-bg-color-newsletter"></div>
		<div class="bottom-angle-style-425 border-b-bg-color-newsletter"></div>
		<div class="bottom-angle-style-320 border-b-bg-color-newsletter"></div>
		<div class="container">
			<section class="mid-caption container text-align">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<h1 class="article-style"><span>subscribe for</span> newsletter</h1>
						<p class="newsletter-box-paragraph">Join our community of over 300,000 global readers who recived emails filled with news, promotion and other good stuff from Nepal trekking team.</p>
					</div>
				</div>
				<div class="row form-margin-top">
					<div class="col-lg-10 col-lg-offset-1 col-md-8 col-md-offset-2 col-sm-12">
						<form action="#" method="post">
							<input type="text" name="subscribe" class="form-style-custom" placeholder="Enter your email address.." />
							<input type="submit" name="submit" value="subscribe" class="btn btn-lg btn-subscribe">
						</form>
					</div>
				</div>
			</section>
		</div>
	</div>
	<div class="container">
		<div class="newsletter-top-heading">
			<h1><span>latest</span> blog post</h1>
			<p class="heading-img-newsletter">
				<span>
					<img src="<?php echo esc_url(get_template_directory_uri('/')); ?>/assets/images/heading-decor-white.png" alt="">
				</span>
			</p>
			<p class="trekking-paragraph-2">Enhanced monitoring procedures. Nutrition pain scores, volleyball various dui id. Corvallis iaculis eros. parent gate skirt element.</p>
		</div>
	</div>
	<div class="latest-blog-post">
		<div class="row">
			<?php
				$args = array(
					'posts_per_page' => 2,
					'post_status' => 'publish',
					'cat' => 4,

					);

				$the_query = new WP_Query($args);
				if($the_query->have_posts()):
				?>
					<?php
					while($the_query->have_posts()):
						$the_query->the_post();
						$id = get_the_ID();
						$format = get_post_format();
						$featured_img_id = get_post_meta($id,'_thumbnail_id',1);
						$attachment = wp_get_attachment_image_src($featured_img_id,'small',true);
			?>
				<div class="col-lg-6 col-md-6 col-sm-12 blog-margin-top">
					<div class="blog-post">
						<img src="<?php echo $attachment[0]; ?>" alt="">
						<div class="blog-post-overflow">
							<h1><?php the_title(); ?></h1>
							<p class="trekking-paragraph-3"><?php echo wp_trim_words(get_the_content(), 20, '...'); ?></p>
							<a href="<?php the_permalink(); ?>" class="btn btn-lg btn-color">Read More</a>
						</div>
					</div>
				</div>
			<?php 
				endwhile;
			?>
			<?php
				endif;  
				 wp_reset_postdata();
			?>
		</div>
	</div>
</section>