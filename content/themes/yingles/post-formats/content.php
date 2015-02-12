<?php
/**
 * @package boiler
 */
?>
<?php
	$content = $post->post_content;
	$strippedContent = strip_shortcodes($content);
	$stripTagsContent = strip_tags($strippedContent);
	$wordCount = str_word_count($stripTagsContent);
	$readingTime = ceil($wordCount / 300);
?>
	<article class="category_one">
		<header>
		
			<div class="featured_image">
				<?php the_post_thumbnail('full'); ?>
			</div><!-- featured_image -->
			
			<div class="container">
					<div class="post_heading">
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<div class="byline">
							by <?php the_author_posts_link(); ?>
						</div><!-- end featured by_line -->
					</div>
				
				<div class="reading_time post_meta_overlays">
					<p><a href="#"><i class="fa fa-clock-o"></i><?php echo $readingTime; ?> min</a></p>
				</div>
				
				<div class="post_date post_meta_overlays">
					<p><?php the_time('F j, Y'); ?></p>
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
			<?php the_content(); ?>
			<div class="post_meta">
				<!--
<ul class="tags">
					<li><a href="#">#design</a></li>
					<li><a href="#">#dev</a></li>
					<li><a href="#">#birds</a></li>
				</ul>
--><!-- end tags -->
			</div>
		</div>
	
	</article>