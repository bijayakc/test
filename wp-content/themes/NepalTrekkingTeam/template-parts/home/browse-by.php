<section>
	<div class="container">
		<div class="article article-border">
			<h1><span>browse by</span> Nepal Trekking Team</h1>
			<p class="heading-img-2">
				<span>
					<img src="<?php echo esc_url(get_template_directory_uri('/')); ?>/assets/images/heading-decor-white.png" alt="">
				</span>
			</p>
			<p class="trekking-paragraph">Everyone loves to travel, but everyone loves to travel the same way. A Adventures Travel Styles gather trips of a feather together so we can spend less time and more time dreaming about where you'll go next.</p>
		</div>
		<div class="nepal-trekking-image-thumbnail">
			<?php
				$args = array(
					'posts_per_page' => 8,
					'post_status' => 'publish',
					'cat' => 7,

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
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 small-box-style-2">
					<div class="hovereffect">
						<img class="img-responsive" src="<?php echo $attachment[0]; ?>" alt="">
						<div class="overlay">
							<h2><?php the_title(); ?></h2>
							<p>
								<a href="<?php echo site_url(); ?>/category/gallery/">View Image</a>
							</p>
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
			<div class="clearfix"></div>
		</div>
	</div>
</section>