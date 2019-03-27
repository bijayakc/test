<div class="container">
    <div class="img-below">
        <div class="owl-carousel12 owl-carousel owl-theme">
            <?php
            $args = array(
                'posts_per_page' => 3,
                'post_status' => 'publish',
                'cat' => 6,

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
            <div class="item">
                <img src="<?php echo $attachment[0]; ?>" alt="no img">
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
   