<section>
	<div class="container">
		<div class="article article-border">
			<h1><span>best</span> selling trips</h1>
			<p class="heading-img-2">
				<span>
					<img src="<?php echo esc_url(get_template_directory_uri('/')); ?>/assets/images/heading-decor-white.png" alt="">
				</span>
			</p>
			<p class="trekking-paragraph">Not sure what you're looking for and need a little inspiration? We can help. Check out our handpicked lists of topical trips you can take right now.</p>
		</div>
		<div class="best-seling-box">
			<div class="row">
				<div class="col-lg-6 col-md-12 col-sm-12">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<h1 class="seling-box-title">wildlife</h1>
							<p class="seling-box-paragraph">Get closer to nature. From the jungle of Nepal, our small group tours takes you to the heart of nature. From elephant silhouetted against Poonhil sunset to orangutans swining in the treetops...</p>
							<a href="<?php echo site_url(); ?>/category/destination/" class="btn btn-lg btn-color box-spacing">VIEW TRIP</a>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="row">
								<?php
									$args = array(
										'posts_per_page' => 4,
										'post_status' => 'publish',
										'cat' => 3,

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
									<div class="col-lg-6 col-md-3 col-sm-6 col-xs-12 box-spacing">
										<div class="seling-trip-box">
											<img src="<?php echo $attachment[0]; ?>" alt="" class="img-responsive">
											<div class="seling-box-img-caption-2">
												<div class="title">
													<h3><?php the_title(); ?></h3>
												</div>
											</div>
										</div>
									</div>
								<?php 
									endwhile;
								?>
								<?php 
									endif;
								 ?>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-12 col-sm-12 give-some-spacing">
					<div class="best-seling-box-img">
						<?php
							$args = array(
								'posts_per_page' => 1,
								'post_status' => 'publish',
								'cat' => 8,

								);

							$the_query = new WP_Query($args);
							if($the_query->have_posts()):
							?>
								<?php
								while($the_query->have_posts()):
									$the_query->the_post();
									$id = get_the_ID();
									$format = get_post_format();
									$destination_days = get_post_meta($id, 'destination_days',1);
									$destination_price = get_post_meta($id, 'destination_price',1);
									$featured_img_id = get_post_meta($id,'_thumbnail_id',1);
									$attachment = wp_get_attachment_image_src($featured_img_id,'small',true);
						?>
							<img src="<?php echo $attachment[0]; ?>" alt="">
							<div class="seling-box-img-caption">
								<h3><?php echo $destination_days; ?> days from Rs <?php echo $destination_price; ?>/-</h3>
							</div>
						<?php 
							endwhile;
						?>
						<?php 
							endif;
						 ?>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</section>