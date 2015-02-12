<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package boiler
 */

get_header(); ?>

	<?php if (has_post_thumbnail()) : ?>
		<section class="featured_post_area">
			
			<div class="featured_image">
				<?php the_post_thumbnail('full'); ?>
			</div><!-- featured_image -->
			
			<div class="container">
				<article class="featured_post">
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				</article><!-- featured_post -->
			</div><!-- end container -->
			
			<div class="featured_arrow_side featured_arrow_side-left"></div>
			<div class="featured_arrow">
				<img src="<?php bloginfo('template_url'); ?>/images/arrow.png" />
			</div><!-- featured_arrow -->
			<div class="featured_arrow_side featured_arrow_side-right"></div>
			
		</section><!-- featured_post_area -->
	<?php endif; ?>

	<section class="page_content <?php if (has_post_thumbnail()) { echo 'page_content_featured'; } ?>">
		<div class="post_copy">
			<?php while ( have_posts() ) : the_post(); ?>
	
				<?php get_template_part( 'content', 'page' ); ?>
	
				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() )
						comments_template();
				?>
	
			<?php endwhile; // end of the loop. ?>
		</div>

	</section>
	
<?php get_footer(); ?>
