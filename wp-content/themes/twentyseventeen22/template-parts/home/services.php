<div id="services">
  <div class="container services__container">
    <div class="cw-services-header">
      <div class="services-header">
        <h1 class="text-center">OUR SERVICES</h1>
      </div>
      <p class="text-center">For Chinese, Indian Continental & All Varieties Of Nepalese Food And All Kinds Of Events Or conference</p>
    </div>
    <div class="cw-regular-services">
      <h4>Regular Services</h4>
      <ul>
        <li>Regular Chinese, Indian Continental & Nepali AL-cart Menu in moderate price.</li>
        <li>Buffet Lunch & Dinner</li>
        <li>Regular Official Lunch & Lunch Box with delivery service in order.</li>
        <li>Business Tiffen Box for Businessmen in the area of Putalisadak, Kamalpokhari, Bagbazar, Durbarmarg, Jamal, Ason etc.</li>
        <li>Home Delivery service around the city.</li>
        <li>Standard outdoor catering service.</li>
      </ul>
    </div>
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
    <div class="col-md-6 col-sm-6 col-xs-12 span-color-p">
      <figure>
        <img src="<?php echo $attachment[0]; ?>" class="img-responsive">
      </figure>
      <div class="cw-services-caption1 span-color">
        <div class="cw-services-title">
          <div class="col-xs-12">
            <h3 class="text-center"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          </div>
        </div>
        <div class="cw-services-content">
          <p class="text-center"><?php echo wp_trim_words(get_the_content(), 30, '...'); ?></p>
        </div>
        <div class="read-more-btn text-center">
          <a href="<?php the_permalink(); ?>" class="btn btn-default">Read More</a>
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


    <div class="cw-services-btn">
      <a href="<?php echo site_url();?>/category/services" class="btn btn-lg">VIEW SERVICES</a>
    </div>
  </div>
</div>
