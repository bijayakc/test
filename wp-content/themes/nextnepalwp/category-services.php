
<?php
/*template name:Service*/
get_header();
?>


<section class="section-service">
    <div class="container">
        <div class="top-heading" style="margin-top: 4rem; margin-bottom: 2rem;">
            <img src="<?php echo esc_url(get_template_directory_uri('/'));?>/assets/images/flower.png" width="100">
            <h3 class="gallery--heading2 text-center">Services</h3>
            <img src="<?php echo esc_url(get_template_directory_uri('/'));?>/assets/images/flower.png" width="100">
        </div>
        <div class="row">
           
                      <?php
            $args = array(
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
                    $featured_img_id = get_post_meta($id,'_thumbnail_id',1);
                    $attachment = wp_get_attachment_image_src($featured_img_id,'small',true);
        ?>
               <div class="col-md-4">
                 <div class="card">
                  <img src="<?php echo $attachment[0]; ?>" class="card-img-top" alt="no img">
                  <div class="card-body">
                        <h3 class="card-title"><a href="<?php the_permalink();?>"><?php the_title();?></a><?php substr(the_content(), 0, 5);?></h3>
        </div>
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
</section>
<?php
get_footer();
?>