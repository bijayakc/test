
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
          $facebook = get_post_meta($id,'facebook',1);
          $twitter = get_post_meta($id,'twitter',1);
          $instagram = get_post_meta($id,'instagram',1);
        $pinterest = get_post_meta($id,'pinterest',1);
        $email = get_post_meta($id,'email',1);
        $phone_number=get_post_meta($id,'phone_number',1);
        $phone_number2=get_post_meta($id,'phone_number2',1);
        $address=get_post_meta($id,'address',1);
        $map=get_post_meta($id,'map',1);
        ?>
<section class="footer-section">
    <footer class="footer container">
        <div class="row" style="align-items: center;">
            <div class="col-sm-6 col-6">
                <h1 class="footer--heading">Follow Us</h1>
                <div class="social--icon">
                    <ul class="social--icon__list">
                        <li class="social--icon__list1" style="padding-left: 0;"><a href="<?php echo $facebook;?>" target="_blank"><i class="fab fa-facebook-square"></i></a></li>
                        <li class="social--icon__list1"><a href="<?php echo $twitter;?>"target="_blank"><i class="fab fa-twitter-square"></i></a></li>
                        <li class="social--icon__list1"><a href="<?php echo $instragram;?>"target="_blank"><i class="fab fa-instagram"></i></a></li>
                        <li class="social--icon__list1"><a href="<?php echo $pinterest;?>"target="_blank"><i class="fab fa-pinterest-square"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-12">
                <div class="subscribe">
                    <form class="subscribe--form">
                        <div class="form-group">
                            <input type="text" class="form-control" id="inputtext" placeholder="subscribe">
                        </div>
                        <button type="submit" class="btn btn-primary abc">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </footer>
</section>
<section class="footer2">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h4 class="footer-head">Contact Us</h4>
                <ul class="footer-list-group">
                    <li class="footer-list">
                        <i class="fas fa-phone-volume"></i>
                      <span><?php echo $phone_number;?>&&<?php echo $phone_number2;?></span>
                    </li><br>
                    <li class="footer-list">
                        <i class="fas fa-envelope"></i>
                        <span><?php echo $email;?></span>
                    </li><br>
                    <li class="footer-list">
                        <i class="fas fa-map-marker-alt"></i>
                        <span><?php echo $address;?></span>
                    </li>
                </ul>
            </div>
            <div class="col-sm-4">
                <h4 class="footer-head">Quick link</h4>
                <ul class="footer-list-group">
                     <li class="footer-list"><i class="fas fa-chevron-right"></i><a href="<?php echo site_url();?>/home">Home</a></li>
                    <li class="footer-list"><i class="fas fa-chevron-right"></i><a href="<?php echo site_url();?>/gallery">Gallery</a></li>
                    <li class="footer-list"><i class="fas fa-chevron-right"></i><a href="<?php echo site_url();?>/service">Service</a></li>
                    <li class="footer-list"><i class="fas fa-chevron-right"></i><a href="<?php echo site_url();?>/contact">Contact</a></li>
                    <li class="footer-list"><i class="fas fa-chevron-right"></i><a href="<?php echo site_url();?>/about-us">About Us</a></li>
                </ul>
            </div>

            <div class="col-sm-4">
                <h4 class="footer-head">Map</h4>
                <?php echo $map;?>
        </div>
    </div>
</section>
<section class="footer--copyright">
    <div class="footer-centertext">
        <h6 class="text-center fs12" style="color: white;padding: 0.5rem 0;">&copy; Copyright Band Baja Nepal</h6>
    </div>
    <?php
            endwhile;
        ?>
        <?php
            endif;
    ?>
</section>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.12/js/lightgallery.min.js"></script>

<script>

    FontAwesomeConfig = {searchPseudoElements: true};
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>



<script src="<?php echo esc_url(get_template_directory_uri('/'));?>/assets/js/app.min.js"></script>
</body>
</html>