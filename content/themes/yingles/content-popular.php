<?php
/**
 * @package boiler
 */
?>

	<section class="popular_post_area">
		<div class="container">
			<?php
				$args = array (
					'featured' => 'featured'
				);
			
				$popular = new WP_Query($args);
			
				while( $popular->have_posts() ) : $popular->the_post();
			?>
			
				<article class="popular_post">
					<h2><a href="<?php the_permalink(); ?>">
						<?php if (get_field('short_title')) : ?>
							<?php the_field('short_title'); ?>
						<?php else : ?>
							<?php the_title(); ?>
						<?php endif; ?>
					</a></h2>
					<ul class="category category_overlay">
						<li><?php the_category(); ?></li>
					</ul>
				</article><!-- end popular_posts -->
			
			<?php endwhile; ?>

		</div>
	</section><!-- end popular_posts -->
