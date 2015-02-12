<?php
/**
 * @package boiler
 */
?>

<?php $authorID = get_the_author_meta('ID'); ?>

<div class="about_author">
	 <div class="author_pic">
	 	<img src="<?php bloginfo('template_url'); ?>/images/me.png" alt="" />
	 	<h3><?php the_author(); ?></h3>
	 	<a href="<?php the_field('twitter_link', 'user_'.$authorID.''); ?>" target="_blank">@<?php the_field('twitter_username', 'user_'.$authorID.''); ?></a>	
	 </div><!-- end author_pic -->
	 
	 <div class="author_bio">
		 <p><?php the_field('author_bio', 'user_'.$authorID.''); ?></p>
		 <div class="more_by">
			 <h4>More stories by <?php the_author_meta('first_name'); ?></h4>
			 <ul class="more_stories">
			 	<?php
			 		$args = array (
			 			'author' => $authorID,
			 			'posts_per_page' => 3,
			 		);
			 	
			 		$$moreAuthor = new WP_Query($args);
			 	
			 		while( $$moreAuthor->have_posts() ) : $$moreAuthor->the_post();
			 	?>
			 		<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
			 	<?php endwhile; wp_reset_postdata(); ?>
			 </ul>
		 </div><!-- end more_by -->
	 </div><!-- end author_bio -->
	 <!-- <button class="expand_bio"><i class="fa fa-plus"></i></button> --><!-- expand_bio -->
</div><!-- end about_author -->