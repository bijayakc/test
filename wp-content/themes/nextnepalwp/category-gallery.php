<?php
/*template name:Gallery*/
get_header();
?>
<section class="image-section">
    <div class="top-heading" style="margin-top: 4rem;">
    <img src="<?php echo esc_url(get_template_directory_uri('/'));?>/assets/images/flower.png" width="100">
    <h3 class="gallery--heading2 text-center">Gallery</h3>
    <img src="<?php echo esc_url(get_template_directory_uri('/'));?>/assets/images/flower.png" width="100" style="transform: scaleX(-1);">
    </div>
    <div class="container">
        <h4 class="gallery--subheading">Images</h4>
            <div class="row" id="lightgallery">
          <a class="image col-md-3" href="<?php echo esc_url(get_template_directory_uri('/'));?>/assets/images/gallery/bigpiper.jpg">
                            <img src="<?php echo esc_url(get_template_directory_uri('/'));?>/assets/images/gallery/bigpiper.jpg" class="singleimage">
                        </a>
                 <?php
            $args = array(
                'posts_per_page' => 18,
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
                        <a class="image col-md-3" href="<?php echo $attachment[0]; ?>">
                            <img src="<?php echo $attachment[0]; ?>" class="singleimage">
                        </a>
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