<div class="top-heading">
    <img src="<?php echo esc_url(get_template_directory_uri('/'));?>/assets/images/flower.png" width="100">
    <h3 class="gallery--heading2 text-center">Services</h3>
    <img src="<?php echo esc_url(get_template_directory_uri('/'));?>/assets/images/flower.png" width="100" style="transform: scaleX(-1);">
</div>
<section class="section--feature">
    <div class="container">
        <div class="row">
            
                     <?php
            $args = array(
                'posts_per_page' => 6,
                
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
        <div class="col-sm-4">
                <div class="featured--image">
        <img src="<?php echo $attachment[0]; ?>" class="service-img">
<div class="text-overlay">
    <a href="<?php the_permalink();?>"><?php the_title();?></a>
    
</div>

</div>
</div>
<?php
            endwhile;
        ?>
        <?php
            endif;
    ?>
    </divv>
    </div>
</section>
