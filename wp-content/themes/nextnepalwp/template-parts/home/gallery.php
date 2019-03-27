<div class="top-heading">
            <img src="<?php echo esc_url(get_template_directory_uri('/'));?>/assets/images/flower.png" width="100">
            <h3 class="gallery--heading2 text-center">Gallery</h3>
            <img src="<?php echo esc_url(get_template_directory_uri('/'));?>/assets/images/flower.png" width="100" style="transform: scaleX(-1);">
        </div>
        <div class="row gallery--all">

                            <?php
            $args = array(
                'posts_per_page' => 5,
                'post_status' => 'publish',
                'cat' => 4,

                );
            // Get all the available thumbnail sizes
    $sizes = get_intermediate_image_sizes();
    echo $sizes;
    $images = array();

            $the_query = new WP_Query($args);
            if($the_query->have_posts()):
            ?>
                <?php
                while($the_query->have_posts()):
                    $post = $the_query->the_post();
                    // $id = get_the_ID();
            // $images = get_field('image');
            // echo $images;
                    // $format = get_post_format();
                    // $featured_img_id = get_post_meta($id,'_thumbnail_id',1);
                    // $attachment = wp_get_attachment_image_src($featured_img_id,'small',true);
                    foreach ( $sizes as $key => $size ) {

                        $thumbnails[$key] = wp_get_attachment_image_src( get_the_ID(), $size)[0];
                    }

                    $images = array_merge( $thumbnails , $images );
        ?>
                          <?php
            endwhile;
        ?>
        <?php
            endif;
    ?>
            <div class="col-sm-4 flex-activities">

                <?php
                foreach(array_slice($images, 0, 2) as $value):
                    echo $value;
                ?>
                <div class="first-col">
                    <img src="<?php echo $value; ?>"
                         class="img-gallery">

                </div>
                <?php
                endforeach;
                ?>
                <!-- <div class="first-col1">
                    <img src="<?php echo $attachment[1]; ?>"
                         class="img-gallery">
                    
                </div>
                <div class="second-col">
                    <img src="<?php echo $attachment[2]; ?>"
                         class="img-gallery1">
                    
                </div>
                <div class="third-col">
                    <img src="<?php echo $attachment[3]; ?>" class="img-gallery">
                    
                </div>
                <div class="third-col1">
                    <img src="<?php echo $attachment[4]; ?>"
                         class="img-gallery">
                    
                </div> -->
            </div>
        </div>
         </div>
    </div>