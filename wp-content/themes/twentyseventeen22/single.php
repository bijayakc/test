<?php
get_template_part(header2);
 ?>
<div class="cw-services">
<div class="container">
	<div class="cw-service-wrapper">
	<?php
			while(have_posts()):the_post();
					$id = get_the_ID();
					$format = get_post_format();
					$featured_img_id = get_post_meta($id,'_thumbnail_id',1);
					$attachment = wp_get_attachment_image_src($featured_img_id,'small',true);
		?>
			<div class="cw-services-header">
				<h2 class="cw-services-title"><?php the_title(); ?></h2>
			</div>
			<div class="cw-services-image text-center">
				<img src="<?php echo $attachment[0];?>" class="img-responsive">
			</div>
			<div class="cw-services-content">
				<?php the_content(); ?>
			</div>
			<?php
				endwhile;
			?>
		</div>

	</div>
</div>
<?php get_template_part(footer2); ?>
