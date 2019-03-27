<?php get_header(); ?>
<style>
.gal {


-webkit-column-count: 3; /* Chrome, Safari, Opera */
-moz-column-count: 3; /* Firefox */
column-count: 3;


}
.gal img{ width: 100%; padding: 7px 0;}
@media (max-width: 500px) {

.gal {


-webkit-column-count: 1; /* Chrome, Safari, Opera */
-moz-column-count: 1; /* Firefox */
column-count: 1;


}

}
</style>
<div class="container">
	<section>
		<div class="container" style="padding: 100px 0px;">
			<div class="article article-border">
				<h1>our <span>Gallery</span></h1>
				<p class="heading-img-2">
					<span>
						<img src="<?php echo esc_url(get_template_directory_uri('/')) ?>/assets/images/heading-decor-white.png" alt="">
					</span>
				</p>
			</div>
		</div>
	</section>
	<div class="col-md-12">
		<div class="row">
			<hr>
			<div class="gal">
				<?php 
					while(have_posts()):the_post();
						$id = get_the_ID();
						$format = get_post_format();
						$featured_img_id = get_post_meta($id,'_thumbnail_id',1);
						$attachment = wp_get_attachment_image_src($featured_img_id,'small',true);
				 ?>
					<!-- content post -->
					<img src="<?php echo $attachment[0]; ?>" alt="">
				<?php 
					endwhile;
				?>		
			</div>	
		</div>
	</div>
</div>
<?php get_footer(); ?>