<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Yuwak Brass Band Baja Nepal</title>

    <?php 
    $custom_logo_id=get_theme_mod('custom_logo');
    $logo=wp_get_attachment_image_src($custom_logo_id,'full');?>
    <link rel="shortcut icon" href="<?php echo $logo[0];?>" type="image/x-icon" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    
    <link href="https://fonts.googleapis.com/css?family=Mukta:400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Tangerine:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Neuton" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.12/css/lightgallery.min.css">
    
   <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri('/'));?>/assets/css/app.min.css">
</head>
<body >
	<div class="">

<div class="container">
	<header class="header">
    <div class="img-top">
        <?php 
        $custom_logo_id=get_theme_mod('custom_logo');
        $logo=wp_get_attachment_image_src($custom_logo_id,'full');?>
        <img src="<?php echo $logo[0];?>"class="image-logo">

       <ul class="nav-menu">
           <li class="nav-list"><a href="<?php echo site_url(); ?>/home" class="nav-list-heading">Home</a></li>
           <li class="nav-list"><a href="<?php echo site_url(); ?>/gallery" class="nav-list-heading">Gallery</a></li>
           <li class="nav-list"><a href="<?php echo site_url(); ?>/service" class="nav-list-heading">Service</a></li>
           <li class="nav-list"><a href="<?php echo site_url(); ?>/contact" class="nav-list-heading">Contact</a></li>
           <li class="nav-list"><a href="<?php echo site_url(); ?>/about-us" class="nav-list-heading">About Us</a></li>
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
                    <li class="nav-item">
                        <a class="nav-link" href="gallery.html">
                            Gallery</a>
                            <div class="title">
                                    <h3 class="white">
                                   <p><!--<?php
if ( has_post_thumbnail() ) {
    $featured_image = get_the_post_thumbnail();
}
            ?>     -->               </div>
</p>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services.html">Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aboutus.html">About Us</a>
                    </li>
                </ul>
            </div>
        </nav>      
    

</header>
</div>