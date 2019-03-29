
<?php
/*Template Name:Contact*/
 get_header();?>
<section class="section-contact">
    <div class="container">
        <div class="top-heading" style="margin-top: 4rem; margin-bottom: 2rem;">
            <img src="<?php echo esc_url(get_template_directory_uri('/'));?>/assets/images/flower.png" width="100">
            <h3 class="gallery--heading2 text-center">Contact Us</h3>
            <img src="<?php echo esc_url(get_template_directory_uri('/'));?>/assets/images/flower.png" width="100" style="transform: scaleX(-1);">
        </div>
        <div class="row" style="margin-top: 4rem;">
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
        $email = get_post_meta($id,'email',1);
        $phone_number=get_post_meta($id,'phone_number',1);
        $phone_number2=get_post_meta($id,'phone_number2',1);
        $map=get_post_meta($id,'map',1);
        ?>
            <div class="col-md-6">
                <p class="contact__text">Feel free to get in touch with Us. We are glad to provide services. You can
                    contact us in following detail</p>
                <p class="contact__text"><?php echo $email;?></p>
                <p class="contact__text"><?php echo $phone_number;?>&&<?php echo $phone_number2;?></p>
                    <?php echo do_shortcode('[contact-form-7 id="209" title="Contact form 1"]');?>

                     </div>
                     <div class="col-md-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3531.942421769272!2d85.34586331462019!3d27.719063982787116!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1964c46776c5%3A0xf2216ab2da075517!2sYubak+Brass+Band+Baja+Nepal!5e0!3m2!1sen!2snp!4v1552905229118"
                        width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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
get_footer();?>