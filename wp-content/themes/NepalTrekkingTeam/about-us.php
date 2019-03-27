<?php get_header();
	/* Template Name:about us*/
 ?>
<section>
	<div class="container" style="padding: 100px 0px;">
		<div class="article article-border">
			<h1>about <span>us</span></h1>
			<p class="heading-img-2">
				<span>
					<img src="<?php echo esc_url(get_template_directory_uri('/')) ?>/assets/images/heading-decor-white.png" alt="">
				</span>
			</p>
		</div>
	</div>
	
	<div class="container">
				<article>
					<style type="text/css">
						.single-blog-page-header{
						    margin-top: 0;
						    background: url("<?php echo esc_url(get_template_directory_uri('/')) ?>/assets/images/cover.jpg");
						    min-height: 500px;
						    background-size: cover;
						    display: table;
						    width: 100%;
						}
					</style>
					<div class="single-blog-page-header">
						<h1>Who we are and what we do</h1>
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
											<img src="<?php echo esc_url(get_template_directory_uri('/')) ?>/assets/images/logo-2.png" class="img-circle" />
										</div>
										<div class="author-name">
											<h3>Nepal Trekking Team</h3>
										</div>
									</div>
									
									<div class="content-body">
										<?php dynamic_sidebar('sidebar-6'); ?>
									</div>
									
								</div>
								
							</div>
							
							<div class="hidden-xs col-sm-1 col-md-2">
								
							</div>
							
						</div>
					</section>
					
				</article>
			</div>
</section>
<?php get_footer(); ?>