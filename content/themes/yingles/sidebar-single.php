<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package boiler
 */
?>

	<?php $currentPost = $post->ID; ?>
	<article class="sidebar_single">	
		<?php do_action( 'before_sidebar' ); ?>
		 <?php 
		 	$relatedCats = get_the_category();
		 	$relatedPosts = array();
		 	foreach ($relatedCats as $cats) {
			 	array_push($relatedPosts, $cats->term_id);
		 	}
		 ?>

		 <div class="related_stories">
			 <h4>Related Stories</h4>
			 <ul>
			 	<?php
				 	$args = array (
				 		'category__in' => $relatedPosts,
				 		'post__not_in' => array($currentPost),
				 		'posts_per_page' => 3,
				 	);
				 
				 	$related = new WP_Query($args);
				 
				 	if ( $related->have_posts() ) : while( $related->have_posts() ) : $related->the_post();
				 ?>
				 	<li>
					 	<a href="<?php the_permalink(); ?>">
						 	<div class="featured_image">
							 	<?php the_post_thumbnail('home-post'); ?>
						 	</div>
						 	<h3><?php the_title(); ?></h3>
					 	</a>
					 </li>
				 <?php endwhile; else : ?>
				 	<li class="no_related">
					 	No related stores. I'll get on that.
					</li>
				 <?php endif; wp_reset_postdata(); ?>
			 </ul>
		 </div><!-- end related_posts -->
		 
	</article>