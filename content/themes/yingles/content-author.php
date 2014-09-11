<?php
/**
 * @package boiler
 */
?>

<div class="about_author">
	<div class="author_pic">
		<img src="<?php bloginfo('template_url'); ?>/images/me.png" alt="" />
	</div><!-- end author_pic -->
	<h3><?php echo get_the_author_meta('display_name', 1); ?></h3>
	<a href="<?php the_field('twitter_link', 'user_1'); ?>" target="_blank">@<?php the_field('twitter_username', 'user_1'); ?></a>
	<ul class="social_links">
		<?php if( have_rows('social_links', 'user_1') ): ?>
		
			<?php while ( have_rows('social_links', 'user_1') ) : the_row(); ?>
				<?php $socialImg = get_sub_field('social_icon', 'user_1'); ?>
		        <li><a href="<?php the_sub_field('social_link', 'user_1'); ?>" target="_blank"><img src="<?php echo $socialImg['url']; ?>" alt="<?php echo $socialImg['alt']; ?>" /></a></li>
		
		    <?php endwhile; ?>
		
		<?php endif; ?>
	</ul>
	<?php if (get_field('author_bio', 'user_1')) : ?>
		<div class="author_bio">
			<?php the_field('author_bio', 'user_1'); ?>
		</div><!-- end author_bio -->
		<button class="expand_bio"><i class="fa fa-plus"></i></button><!-- expand_bio -->
	<?php endif; ?>
</div><!-- end about_author -->