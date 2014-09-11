<?php
/**
 * @package boiler
 */
?>

	<article class="category_one post_quote">
		<header>
			
			<div class="container">
				<div class="post_heading">
					<h2><a href="<?php the_field('quote_source_link') ?>"><?php the_field('quote'); ?></a></h2>
					<div class="byline">
						<a href="<?php the_field('quote_source_link') ?>" target="_blank">- <?php echo the_field('quoter'); ?></a>
						<a href="<?php the_field('quote_source_link') ?>" target="_blank"><?php echo the_field('quote_source'); ?></a>
					</div><!-- end featured by_line -->
				</div>
			</div>
		</header>
	</article>
