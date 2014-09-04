<?php
/**
 * @package boiler
 */
?>
	<?php
		$author = get_the_author();
	?>
	<section class="featured_post_area">
		
		<div class="featured_image">
			<img src="<?php bloginfo('template_url'); ?>/images/waino-header.jpg" alt=""/>
		</div><!-- featured_image -->
		
		<div class="container">
			<article class="featured_post">
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<div class="featured_preview">
					<?php the_field('short_description'); ?>
				</div><!-- featured_preview -->
				<?php if ($author) : ?>
					<div class="byline">
						by <?php the_author_posts_link(); ?>
					</div><!-- end featured by_line -->
				<?php endif; ?>
			</article><!-- featured_post -->
			
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
			
		</div><!-- end container -->
		
		<div class="featured_arrow_side featured_arrow_side-left"></div>
		<div class="featured_arrow">
			<img src="<?php bloginfo('template_url'); ?>/images/arrow.png" />
		</div><!-- featured_arrow -->
		<div class="featured_arrow_side featured_arrow_side-right"></div>
		
	</section><!-- featured_post_area -->