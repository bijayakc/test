
<div class="container">
    <div class="decorate">
        <img src="<?php echo esc_url(get_template_directory_uri('/'));?>/assets/images/decorate3.png" height="200px" width="100%">
    </div>
<div class="gallery text-center">
    <?php
        $args = array(
        'post_type' => 'site_info',
        'post_status' => 'publish',
        );
        $the_query = new WP_Query($args);
        if($the_query->have_posts()):
        ?>
        <?php
        while($the_query->have_posts()):
          $the_query->the_post();
          $id = get_the_ID();
          $text_box = get_post_meta($id,'text_box',1);
          ?>
        <h3 class="gallery--heading1 fs24">Welcome to Yubak Brass Band Nepal</h3>
        <p class="gallery--heading__detail"><?php echo $text_box;?>
        </p>
        <a href="<?php echo site_url();?>/about-us" class="btn btn-danger">Read more</a>
     <?php
            endwhile;
        ?>
        <?php
            endif;
    ?>
   