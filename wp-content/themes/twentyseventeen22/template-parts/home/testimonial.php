
 <div class="cw-container">
   <div id="testimonial" class="carousel slide" data-ride="carousel">
       <div class="carousel-inner">
         <?php
							$args = array(
								'posts_per_page' => 1,
								'post_type' => 'post',
								'post_status' => 'publish',
								'cat' => 5,

								);

							$the_query = new WP_Query($args);
							if($the_query->have_posts()):
							?>
								<?php
								while($the_query->have_posts()):
									$the_query->the_post();
								$id = get_the_ID();
								$starts_from = get_post_meta($id,'starts_from',1);
								$featured_img_id = get_post_meta($id,'_thumbnail_id',1);
								$attachment = wp_get_attachment_image_src($featured_img_id,'small',true);
								?>
         <div class="item active">
             <div class="row">
               <div class="col-md-4"></div>
               <div class="col-md-4">
                 <figure>
                   <img src="<?php echo $attachment[0];?>" class="img-responsive img-circle">
                 </figure>
               </div>
               <div class="col-md-4"></div>
             </div>
             <div class="testimonial text-center col-md-12">
               <?php the_content(); ?>
               <h3 class="text-center"><?php the_title(); ?></h3>
             </div>
         </div>
         <?php endwhile;
       endif; ?>
       <?php
            $args = array(
              'posts_per_page' => 2,
              'post_type' => 'post',
              'post_status' => 'publish',
              'cat' => 5,
              'offset' => 1
              );

            $the_query = new WP_Query($args);
            if($the_query->have_posts()):
            ?>
              <?php
              while($the_query->have_posts()):
                $the_query->the_post();
              $id = get_the_ID();
              $starts_from = get_post_meta($id,'starts_from',1);
              $featured_img_id = get_post_meta($id,'_thumbnail_id',1);
              $attachment = wp_get_attachment_image_src($featured_img_id,'small',true);
              ?>
         <div class="item">
             <div class="row">
               <div class="col-md-4"></div>
               <div class="col-md-4">
                 <figure>
                   <img src="<?php echo $attachment[0];?>" class="img-responsive img-circle">
                 </figure>
               </div>
               <div class="col-md-4"></div>
             </div>
             <div class="testimonial text-center col-md-12">
               <?php the_content(); ?>
               <h3 class="text-center"><?php the_title(); ?></h3>
             </div>
         </div>
       <?php endwhile;
     endif; ?>
       </div>
       <a class="left carousel-control" href="#testimonial" role="button" data-slide="prev">
         <span class="glyphicon glyphicon-chevron-left"></span>
         <span class="sr-only">Previous</span>
       </a>
       <a class="right carousel-control" href="#testimonial" role="button" data-slide="next">
         <span class="glyphicon glyphicon-chevron-right"></span>
       <span class="sr-only">Next</span>
       </a>
   </div>
 </div>


<!-- Manager message -->
<div id="message" class="cw-container">
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <figure>
          <img src="<?php echo esc_url(get_template_directory_uri('/'));?>/assets/images/ed.png" class="img-circle img-responsive">
        </figure>
        <h3 class="text-center">MR. CW-Restuarant</h3>
      </div>
      <div class="col-sm-9">
        <h2 class="text-center">Message From Executive Director</h2>
        <p class="text-center">"We believe quality is the major factor, in this high competition we are one of the leading restuarant and party palace because of the services that we provide to our customers. We give what we eat." MR. CW-Restuarant</p>
      </div>
    </div>
  </div>
</div>
