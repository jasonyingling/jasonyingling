<?php
/**
 * @package boiler
 */
?>

	<section class="featured_post_area">
		
		<div class="featured_image">
			<img src="<?php bloginfo('template_url'); ?>/images/waino-header.jpg" alt=""/>
		</div><!-- featured_image -->
		
		<div class="container">
			<article class="featured_post">
				<h2><a href="#"><?php the_title(); ?></a></h2>
				<div class="featured_preview">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed posuere consectetur est at lobortis. Donec ullamcorper nulla non metus auctor fringilla.</p>
				</div><!-- featured_preview -->
				<div class="byline">
					by Jason Yingling
				</div><!-- end featured by_line -->
			</article><!-- featured_post -->
			
			<div class="reading_time post_meta_overlays">
				<p><a href="#"><i class="fa fa-clock-o"></i>10 min</a></p>
			</div>
			
			<div class="post_date post_meta_overlays">
				<a href="#">
					<p>01/12/2014</p>
					<p>3:52 PM</p>
				</a>
			</div>
			
			<div class="taxonomies post_meta_overlays">
				<ul class="category">
					<li><a href="#">#design</a></li>
				</ul>
			</div>
			
			<div class="comments post_meta_overlays">
				<p><a href="#"><i class="fa fa-comments-o"></i>4 comments</a></p>
			</div>
			
		</div><!-- end container -->
		
		<div class="featured_arrow_side featured_arrow_side-left"></div>
		<div class="featured_arrow">
			<img src="<?php bloginfo('template_url'); ?>/images/arrow.png" />
		</div><!-- featured_arrow -->
		<div class="featured_arrow_side featured_arrow_side-right"></div>
		
	</section><!-- featured_post_area -->