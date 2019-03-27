<?php
get_template_part(header2);
 ?>

	<div class="cw-services">
		<div class="container">
			<h1 class="text-center">Services</h1>
      <?php
					while(have_posts()):the_post();
						$id = get_the_ID();
						$format = get_post_format();
						$featured_img_id = get_post_meta($id,'_thumbnail_id',1);
						$attachment = wp_get_attachment_image_src($featured_img_id,'small',true);
				 ?>
					<!-- content post -->
          <div class="col-sm-6">
    				<div class="cw-services-header">
    					<h2 class="cw-services-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    				</div>
    				<div class="cw-services-image">
    					<img src="<?php echo $attachment[0];?>" class="img-responsive">
    				</div>
    				<div class="cw-services-content">
    					<p><?php echo wp_trim_words(get_the_content(), 30, '...'); ?></p>
    				</div>
            <div class="read-more-btn text-center">
              <a href="<?php the_permalink(); ?>" class="btn btn-danger">Read More</a>
            </div>
            <div class="clearfix"></div>
    			</div>
				<?php
					endwhile;
				?>
		</div>
	</div>

  <?php
  get_template_part(footer2);
   ?>
