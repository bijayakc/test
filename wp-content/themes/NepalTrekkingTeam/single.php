<?php get_header(); ?>
<section>
	<div class="container" style="padding: 100px 0px;">
		<div class="article article-border">
			<h1>my <span>story</span></h1>
			<p class="heading-img-2">
				<span>
					<img src="<?php echo esc_url(get_template_directory_uri('/')); ?>/assets/images/heading-decor-white.png" alt="">
				</span>
			</p>
		</div>
	</div>
	<div class="container">
		<article>
			<?php
				while(have_posts()):the_post();
					$id = get_the_ID();
					$format = get_post_format();
					$featured_img_id = get_post_meta($id,'_thumbnail_id',1);
					$attachment = wp_get_attachment_image_src($featured_img_id,'small',true);
			?>
				
				<style type="text/css">
					.single-blog-page-header{
					    margin-top: 0;
					    background: url("<?php echo $attachment[0]; ?>");
					    min-height: 500px;
					    background-size: cover;
					    display: table;
					    width: 100%;
					}
				</style>

				<div class="single-blog-page-header">
					<h1><?php the_title(); ?></h1>
				</div>

				<!-- main-section -->
				<section class="container-fluid main-body">
					<div class="row">
						
						<div class="hidden-xs col-sm-1 col-md-2">
							
						</div>
						
						<div class="col-xs-12 col-sm-10 col-md-8">
							
							<div class="content-holder">
								
								<div class="content-description">
									
									<div class="author-avatar">
														<?php $avatar = get_avatar(get_the_author_meta('ID')) ?>
				                            <img src="<?php echo $avatar; ?>" class="img-circle">
									</div>
									<div class="author-name">
										<h3 style="text-transform: uppercase;"><?php the_author(); ?></h3>
									</div>
									<div class="row blog-info">
										<div class="col-xs-12 col-sm-6">
											<span class="lead text-muted"><i class="fa fa-clock-o"></i> Published: <?php the_date(); ?></span>
										</div>
										<div class="col-xs-12 col-sm-6">
											<!-- <span class="lead text-muted"><i class="fa fa-tags"></i></span> -->
										</div>
									</div>
									
								</div>
								
								<div class="content-body">
									<?php echo get_the_content(); ?>
								</div>
								
							</div>
							
						</div>
						
						<div class="hidden-xs col-sm-1 col-md-2">
							
						</div>
						
					</div>
				</section>



			<?php
				endwhile;
			?>
			
		</article>
	</div>
</section>
<?php get_footer(); ?>