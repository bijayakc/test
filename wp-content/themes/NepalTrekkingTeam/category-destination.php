<?php get_header(); ?>
<section>
	<div class="container" style="padding: 100px 0px;">
		<div class="article article-border">
			<h1>top <span>Destitation</span></h1>
			<p class="heading-img-2">
				<span>
					<img src="<?php echo esc_url(get_template_directory_uri('/')) ?>/assets/images/heading-decor-white.png" alt="">
				</span>
			</p>
		</div>
	</div>
</section>
<div class="container">
	<section id="blog-section" >
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="row">
						<?php 
							while(have_posts()):the_post();
								$id = get_the_ID();
								$format = get_post_format();
								$destination_days = get_post_meta($id, 'destination_days',1);
								$destination_price = get_post_meta($id, 'destination_price',1);
								$destination_shortdesc = get_post_meta($id, 'destination_shortdesc',1);
								$destination_cat = get_post_meta($id, 'destination_cat',1);
								$featured_img_id = get_post_meta($id,'_thumbnail_id',1);
								$attachment = wp_get_attachment_image_src($featured_img_id,'small',true);
						 ?>
							<!-- content post -->
							<div class="col-lg-6 col-md-6">
								<aside>
									<img src="<?php echo $attachment[0]; ?>" class="img-responsive responsive-hw">
									<div class="content-title">
										<div class="text-center">
											<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
										</div>
									</div>
									<div class="content-footer">
										<span style="font-size: 16px;color: #fff;"><?php echo $destination_cat; ?></span>
										<span class="pull-right">
											<a href="" data-toggle="tooltip" data-placement="left" title="Days"><i class="fa fa-sun-o" ></i><?php echo $destination_days; ?> days</a>
											<a href="" data-toggle="tooltip" data-placement="right" title="Package Rate"><i class="fa fa-money"></i> Rs <?php echo $destination_price; ?>/-</a>
										</span>
										<div class="user-ditels">
											<span class="user-full-ditels">
												<h3><?php the_title(); ?></h3>
												<p><?php echo $destination_shortdesc; ?></p>
											</span>
										</div>
									</div>
								</aside>
							</div>
						<?php 
							endwhile;
						?>
					</div>
				</div>
				
				<!--
				===========
				RECENT POST
				===========
				-->
				<div class="col-lg-4">
					<div class="widget-sidebar">
						<h2 class="title-widget-sidebar">// RECENT POST</h2>
						<div class="content-widget-sidebar">
							<ul>
								<?php
									$args = array(
										'posts_per_page' => 4,
										'post_status' => 'publish',
										'post_type' => 'post',
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
									<li class="recent-post">
										<div class="post-img">
											<img src="<?php echo $attachment[0]; ?>" class="img-responsive">
										</div>
										<a href="<?php the_permalink(); ?>"><h5><?php the_title(); ?></h5></a>
										<p><small><i class="fa fa-calendar" data-original-title="" title=""></i><?php the_date(); ?></small></p>
									</li>
									<hr>
								<?php 
									endwhile;
								?>
								<?php
									endif;  
									 wp_reset_postdata();
								?>
							</ul>
						</div>
					</div>
					
					<div class="widget-sidebar">
						<h2 class="title-widget-sidebar">// ARCHIVES</h2>
						<div class="last-post">
							<button class="accordion">21/4/2016</button>
							<div class="panel">
								<li class="recent-post">
									<div class="post-img">
										<img src="https://lh3.googleusercontent.com/-13DR8P0-AN4/WM1ZIz1lRNI/AAAAAAAADeo/XMfJ7CM-pQg9qfRuCgSnphzqhaj3SQg6QCJoC/w424-h318-n-rw/thumbnail4.jpg" class="img-responsive">
									</div>
									<a href="#"><h5>Excepteur sint occaecat cupi non proident laborum.</h5></a>
									<p><small><i class="fa fa-calendar" data-original-title="" title=""></i> 30 Juni 2014</small></p>
								</li>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.   Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							</div>
						</div>
						<hr>
						<div class="last-post">
							<button class="accordion">5/7/2016</button>
							<div class="panel">
								<li class="recent-post">
									<div class="post-img">
										<img src="https://lh3.googleusercontent.com/-QlnwuVgbxus/WM1ZI1FKQiI/AAAAAAAADeo/nGSd1ExnnfIfIBF27xs8-EdBdfglqFPZgCJoC/w424-h318-n-rw/thumbnail2.jpg" class="img-responsive">
									</div>
									<a href="#"><h5>Excepteur sint occaecat cupi non proident laborum.</h5></a>
									<p><small><i class="fa fa-calendar" data-original-title="" title=""></i> 30 Juni 2014</small></p>
								</li>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.   Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							</div>
						</div>
						<hr>
						<div class="last-post">
							<button class="accordion">15/9/2016</button>
							<div class="panel">
								<li class="recent-post">
									<div class="post-img">
										<img src="https://lh3.googleusercontent.com/-wRHL_FOH1AU/WM1ZIxQZ3DI/AAAAAAAADeo/lwJr8xndbW4MHI-lOB7CQ-14FJB5f5SWACJoC/w424-h318-n-rw/thumbnail5.jpg" class="img-responsive">
									</div>
									<a href="#"><h5>Excepteur sint occaecat cupi non proident laborum.</h5></a>
									<p><small><i class="fa fa-calendar" data-original-title="" title=""></i> 30 Juni 2014</small></p>
								</li>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.   Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							</div>
						</div>
						<hr>
						<div class="last-post">
							<button class="accordion">2/3/2017</button>
							<div class="panel">
								<li class="recent-post">
									<div class="post-img">
										<img src="https://lh3.googleusercontent.com/-QlnwuVgbxus/WM1ZI1FKQiI/AAAAAAAADeo/nGSd1ExnnfIfIBF27xs8-EdBdfglqFPZgCJoC/w424-h318-n-rw/thumbnail2.jpg" class="img-responsive">
									</div>
									<a href="#"><h5>Excepteur sint occaecat cupi non proident laborum.</h5></a>
									<p><small><i class="fa fa-calendar" data-original-title="" title=""></i> 30 Juni 2014</small></p>
								</li>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.   Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							</div>
						</div>
					</div>
					
					<!--
					==========
					CATEGORIES
					==========
					-->
					<div class="widget-sidebar">
						<h2 class="title-widget-sidebar">// CATEGORIES</h2>
						<button class="categories-btn">Audio</button>
						<button class="categories-btn">Blog</button>
						<button class="categories-btn">Gallery</button>
						<button class="categories-btn">Images</button>
					</div>
					
					<!--
					==========
					NEWSLATTER
					==========
					-->
					<div class="widget-sidebar">
						<h2 class="title-widget-sidebar">// NEWSLATTER</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor ut .</p>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
							<input id="email" type="text" class="form-control" name="email" placeholder="Email">
						</div>
						<button type="button" class="btn btn-lg btn-color btn-margin-top">Subscribe</button>
					</div>
				</div>
			</div>
		</div>
		
	</section>
</div>
<?php get_footer(); ?>