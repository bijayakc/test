<?php
get_header();?>
<div class="singlepagecontainer">
    <div class="container">
    	<?php
				while(have_posts()):the_post();
					$id = get_the_ID();
					$format = get_post_format();
					$featured_img_id = get_post_meta($id,'_thumbnail_id',1);
					$attachment = wp_get_attachment_image_src($featured_img_id,'small',true);
			?>
        <!-- start: breadcrumbs -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>/home">Home</a></li>
                <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>/service">Services</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php the_title();?></li>
            </ol>
        </nav>
        <!-- end: breadcrumbs -->
        <div class="row">
            <div class="col-md-8">
                <!-- start: blog section-->
                <section class="blog">
                    <!-- post 1 -->
                    <article class="post ">
                        <div class="top-heading">
                            <img src="<?php echo esc_url(get_template_directory_uri('/'));?>/assets/images/flower.png" width="100">
                            <h3 class="gallery--heading2 text-center"><?php the_title();?></h3>
                            <img src="<?php echo esc_url(get_template_directory_uri('/'));?>/assets/images/flower.png" width="100" style="transform: scaleX(-1);">
                        </div>
                        <!-- adding post content -->
                        <div class="entry post-content">
                            <img src="<?php echo $attachment[0];?>" width="640" height="242" >
                            <p class="">
                                <?php the_content();?>
                            </p>
                        </div>

                    </article>
                    <!-- end post 1 -->
                </section>
                <!-- end: blog section -->
            </div>
            
            <div class="col-md-4">
                <div class="widget-sidebar">
                    <h2 class="title-widget-sidebar">Other related</h2>
                    <div class="content-widget-sidebar">
                        <ul class="remove-hr">
                            <?php
            $args = array(
                'post_status' => 'publish',
                'cat' => 8,
                'post__not_in' => array($id),
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
                            <li class="recent-post">
                                <div class="post-img">
                                    <img src="<?php echo $attachment[0];?>" class="img-responsive">
                                </div>

						          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                
                     
                            </li>
                            <hr>
                            <?php
            endwhile;
        ?>
        <?php
            endif;
    ?>
                        </ul>
                    </div>
                </div>
            </div>
           
            
        </div>
        <?php 
        endwhile;
        ?>
    </div>

</div>

<?php get_footer(); ?>