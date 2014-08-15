<?php
/**
 * @package boiler
 */
?>

<article <?php //post_class('post-content'); ?> class="category_one">
	<header>
	
		<div class="featured_image">
			<img src="<?php bloginfo('template_url'); ?>/images/waino-header.jpg" alt=""/>
		</div><!-- featured_image -->
		
		<div class="container">
				<div class="post_heading">
					<h2><a href="#"><?php the_title(); ?></a></h2>
					<div class="byline">
						<a href="#">by Jason Yingling</a>
					</div><!-- end featured by_line -->
				</div>
			
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
		</div>
	</header>

	<div class="copy">
		<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Nullam id dolor id nibh ultricies vehicula ut id elit. Sed posuere consectetur est at lobortis. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
		<div class="post_meta">
			<ul class="tags">
				<li><a href="#">#design</a></li>
				<li><a href="#">#dev</a></li>
				<li><a href="#">#birds</a></li>
			</ul><!-- end tags -->
		</div>
	</div>

</article>

<article <?php //post_class('post-content'); ?> class="category_one post_quote">
	<header>
		
		<div class="container">
			<div class="post_heading">
				<h2><a href="#">Nibh Euismod Venenatis Dapibus Sit Bibendum Ligula.</a></h2>
				<div class="byline">
					<a href="#">- Quote McQuoterson</a>
				</div><!-- end featured by_line -->
			</div>
		</div>
	</header>

</article>
