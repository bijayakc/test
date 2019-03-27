<?php
/* Template name: Gallery */
get_template_part(header2);
 ?>

	<div class="container">
		<div class="row">
			<div id="zoom"></div>
			<div id="wrapper">
				<div id="content">
					<div id="view">
					  <img src="https://picsum.photos/1024/767/?random" alt="" />
					</div>
				  <div id="thumbs">
						<div id="nav-left-thumbs"><</div>
						<div id="pics-thumbs">
              <?php
                $posts = get_posts(array('category' => 2, 'post_type' => 'post'));
        				while(have_posts($posts)):the_post();
        					$id = get_the_ID();
        					$format = get_post_format();
        					$featured_img_id = get_post_meta($id,'_thumbnail_id',1);
        					$attachment = wp_get_attachment_image_src($featured_img_id,'small',true);
        			?>
							<img src="<?php echo $attachment[0]; ?>" alt="<?php the_title(); ?>" />
              <?php
        				endwhile;
        			?>
						</div>
						<div id="nav-right-thumbs">></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php get_template_part(footer2); ?>
