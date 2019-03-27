<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
get_header();?>
get_template_part(header);
<div id="primary"class="content-area">
<main id="main" class="site-main"role="main">
<?php

while(have_posts()):the_post();
$id=get_the_Id();
$format=get_post_format();



?>
<?php get_template_part('content',get_post_format());?>