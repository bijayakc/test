<?php
/*template name:Gallery*/
get_template_part(header);
?>

<div class="container">
<header class="header">
    <div class="img-top">
        <!--<img src="https://images.pexels.com/photos/1760029/pexels-photo-1760029.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260" class="image-top">-->
        <img src="https://scontent.fktm7-1.fna.fbcdn.net/v/t1.0-9/46093435_2221138154767920_5503059231776964608_n.jpg?_nc_cat=101&_nc_ht=scontent.fktm7-1.fna&oh=7385d090f7c2bd4fe1cda05e38a8de55&oe=5D0FD878" class="image-logo">

       <ul class="nav-menu">
           <li class="nav-list"><a href="index.html" class="nav-list-heading">Home</a></li>
           <li class="nav-list"><a href="gallery.html" class="nav-list-heading">Gallery</a></li>
           <li class="nav-list"><a href="services.html" class="nav-list-heading">Service</a></li>
           <li class="nav-list"><a href="contact.html" class="nav-list-heading">Contact</a></li>
           <li class="nav-list"><a href="aboutus.html" class="nav-list-heading">About Us</a></li>
       </ul>
    </div>

        <nav class="navbar navbar-expand-lg navbar-light img-top1">
            <img src="https://scontent.fktm7-1.fna.fbcdn.net/v/t1.0-9/46093435_2221138154767920_5503059231776964608_n.jpg?_nc_cat=101&_nc_ht=scontent.fktm7-1.fna&oh=7385d090f7c2bd4fe1cda05e38a8de55&oe=5D0FD878" class="image-logo">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse navbar-drop" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                    </li>
                   <ul class="nav navbar-nav pull-right">
                        <li class="nav-item"><a href="<?php echo esc_url(home_url('/')); ?>#home" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="<?php echo esc_url(home_url('/')); ?>#home" class="nav-link">Gallery</a></li>
                                <li class="nav-item"><a href="<?php echo esc_url(home_url('/')); ?>about" class="nav-link">Services</a></li>
                                <li class="nav-item"><a href="<?php echo esc_url(home_url('/')); ?>services" class="nav-link">Contact</a></li>
                                <li class="nav-item"><a href="<?php echo esc_url(home_url('/')); ?>contact" class="nav-link">About-us</a></li>

                    </ul>s
                </ul>
            </div>
        </nav>

</header>
</div>
<section class="section-about">
    <div class="top-heading" style="margin-top: 4rem; margin-bottom: 2rem;">
        <img src="images/flower.png" width="100">
        <h3 class="gallery--heading2 text-center">About Us</h3>
        <img src="images/flower.png" width="100" style="transform: scaleX(-1);">
    </div>
    <div class="container">
        <div class="row" style="margin: 4rem 0;">
            <p class="about-text fs18 text-center">Our musical service since 1965, Wedding Band Baja In Nepal, Panche
                Baja Nepal,
                All variation of Musical service, Best Band Baja In Kathmandu.Yubak Brass Band is one of Nepal’s finest
                authentic and first national acclaimed brass band specialized in performing processions at festivals,
                weddings, and other high profile events. Yubak Brass Band has wide range of wedding horses (Ghori) for
                the groom. It is properly decorated by our team as per the client's requirements. We can offer our
                chariot (Baggi) with different decorations as according to the celebrations and client's requirements.
                We are open from 8AM to 9PM.</p>
            <div class="col-sm-6">
                <div class="team-member">

                </div>
            </div>
            <div class="col-sm-6">
                <div class="team-member">

                </div>
            </div>
        </div>

    </div>
</section>

<section class="footer-section">
    <footer class="footer container">
        <div class="row" style="align-items: center;">
            <div class="col-sm-6 col-6">
                <h1 class="footer--heading">Follow Us</h1>

                <div class="social--icon">
                    <ul class="social--icon__list">
                        <li class="social--icon__list1" style="padding-left: 0;"><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                        <li class="social--icon__list1"><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                        <li class="social--icon__list1"><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li class="social--icon__list1"><a href="#"><i class="fab fa-pinterest-square"></i></a></li>
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
                        <span>&nbsp 9851127729, 9803037729</span>
                    </li><br>
                    <li class="footer-list">
                        <i class="fas fa-envelope"></i>
                        <span>&nbsp dips.light@hotmail.com</span>
                    </li><br>
                    <li class="footer-list">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>&nbsp Chabahil Kathmandu, Nepal</span>
                    </li>
                </ul>
            </div>
            <div class="col-sm-4">
                <h4 class="footer-head">Quick link</h4>
                <ul class="footer-list-group">
                    <li class="footer-list"><i class="fas fa-chevron-right"></i><a href="index.html">Home</a></li>
                    <li class="footer-list"><i class="fas fa-chevron-right"></i><a href="gallery.html">Gallery</a></li>
                    <li class="footer-list"><i class="fas fa-chevron-right"></i><a href="service.html">Service</a></li>
                    <li class="footer-list"><i class="fas fa-chevron-right"></i><a href="contact.html">Contact</a></li>
                    <li class="footer-list"><i class="fas fa-chevron-right"></i><a href="aboutus.html">About Us</a></li>
                </ul>
            </div>

            <div class="col-sm-4">
                <h4 class="footer-head">Map</h4>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3531.942421769272!2d85.34586331462019!3d27.719063982787116!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1964c46776c5%3A0xf2216ab2da075517!2sYubak+Brass+Band+Baja+Nepal!5e0!3m2!1sen!2snp!4v1552905229118" width="100%" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>
<section class="footer--copyright">
    <div class="footer-centertext">
        <h6 class="text-center fs12" style="color: white;padding: 0.5rem 0;">&copy; Copyright Band Baja Nepal</h6>
    </div>
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


    
        
        
        
        
        
    

<script type="text/javascript">
    $(document).ready(function () {
        $("#lightgallery").lightGallery();
    });
</script>

<script>
    $('.owl-carousel12').owlCarousel({
        loop:true,
        margin:10,
        responsiveClass:true,
        navText: ["<i class='fas fa-angle-left fa-2x'></i>", "<i class='fas fa-angle-right fa-2x'></i>"],
        responsive:{
            0:{
                items:1,
                nav:true
            }
        }
    })
    $('.vendor-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        autoplay: true,
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    })
    $('.owl-carousel').owlCarousel({
        loop: false,
        margin: 10,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    })
    $('.arrival-carousel').owlCarousel({
        loop: false,
        margin: 10,
        nav: false,
        center: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 3
            }

        }
    })

</script>

<script src="js/app.min.js"></script>
</body>
</html>v