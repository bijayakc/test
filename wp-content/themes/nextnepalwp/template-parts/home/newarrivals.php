<div class="top-heading">
    <img src="<?php echo esc_url(get_template_directory_uri('/'));?>/assets/images/flower.png" width="100">
    <h3 class="gallery--heading2">New Arrival</h3>
    <img src="<?php echo esc_url(get_template_directory_uri('/'));?>/assets/images/flower.png" width="100" style="transform: scaleX(-1);">
</div>
<div class="gallery-whole">
    <div class="section--arrival">
    <div class="container">
                <div class="owl-carousel owl-theme arrival-carousel">
                  
                        <?php
            $args = array(
                'posts_per_page' => 3,
                'post_status' => 'publish',
                'cat' => 14,

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
          <div class="featured--image item">
            <img src="<?php echo $attachment[0]; ?>" alt="no img">
           <div class="text-overlay">
          <a href="<?php the_permalink();?>"><?php the_title();?></a>
    
          </div>
            </div>

            <?php
            endwhile;
        ?>
        <?php
            endif;
    ?>
</div>
</div>
</div>
</div>


                        


























                    </div>
                </div>
        </div>
    </div>
</div>