<?php
/**
 * @package boiler
 */
?>
<?php if (has_post_format('quote')) : ?>

	<article class="category_one post_quote">
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

<?php else : ?>

	<article class="category_one">
		<header>
		
			<div class="featured_image">
				<img src="<?php bloginfo('template_url'); ?>/images/waino-header.jpg" alt=""/>
			</div><!-- featured_image -->
			
			<div class="container">
					<div class="post_heading">
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<div class="byline">
							by <?php the_author_posts_link(); ?>
						</div><!-- end featured by_line -->
					</div>
				
				<div class="reading_time post_meta_overlays">
					<p><a href="#"><i class="fa fa-clock-o"></i>10 min</a></p>
				</div>
				
				<div class="post_date post_meta_overlays">
					<p><?php the_time('F j, Y'); ?></p>
					<p><?php the_time('g:i A'); ?></p>
				</div>
				
				<div class="taxonomies post_meta_overlays">
					<ul class="category category_overlay">
						<li><?php the_category(' '); ?></li>
					</ul>
				</div>
				
				<div class="comments post_meta_overlays">
					<p><a href="<?php comments_link(); ?>"><i class="fa fa-comments-o"></i><?php comments_number('comment', '1 comment', '% comments'); ?></a></p>
				</div>
			</div>
		</header>
	
		<div class="copy">
			<?php the_excerpt(); ?>
			<div class="post_meta">
				<ul class="tags">
					<li><a href="#">#design</a></li>
					<li><a href="#">#dev</a></li>
					<li><a href="#">#birds</a></li>
				</ul><!-- end tags -->
			</div>
		</div>
	
	</article>
	
<?php endif; ?>
