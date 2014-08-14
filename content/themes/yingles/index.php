<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package boiler
 */

get_header(); ?>

	<section class="featured_post_area">
		
		<div class="featured_image">
			<img src="<?php bloginfo('template_url'); ?>/images/waino-header.jpg" alt=""/>
		</div><!-- featured_image -->
		
		<div class="container">
			<a href="#">
				<article class="featured_post">
					<h2>Nulla vitae elit libero</h2>
					<div class="featured_preview">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed posuere consectetur est at lobortis. Donec ullamcorper nulla non metus auctor fringilla.</p>
					</div><!-- featured_preview -->
					<div class="byline">
						by Jason Yingling<i class="fa fa-plus"></i>
					</div><!-- end featured by_line -->
				</article><!-- featured_post -->
			</a>
			
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
			
		</div><!-- end container -->
		
		<div class="featured_arrow_side featured_arrow_side-left"></div>
		<div class="featured_arrow">
			<img src="<?php bloginfo('template_url'); ?>/images/arrow.png" />
		</div><!-- featured_arrow -->
		<div class="featured_arrow_side featured_arrow_side-right"></div>
		
	</section><!-- featured_post_area -->
	
	<section class="popular_post_area">
		<div class="container">
			<article class="popular_post">
				<h2><a href="#">Vestibulum id ligula porta felis euismod semper</a></h2>
				<ul class="category">
					<li><a href="#">#design</a></li>
				</ul>
			</article><!-- end popular_posts -->
			
			<article class="popular_post">
				<h2><a href="#">Vestibulum id ligula porta felis euismod semper</a></h2>
				<ul class="category">
					<li><a href="#">#design</a></li>
				</ul>
			</article><!-- end popular_posts -->
			
			<article class="popular_post">
				<h2><a href="#">Vestibulum id ligula porta felis euismod semper</a></h2>
				<ul class="category">
					<li><a href="#">#design</a></li>
				</ul>
			</article><!-- end popular_posts -->
		</div>
	</section><!-- end popular_posts -->

	<section>
	
		<div class="container">
		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to overload this in a child theme then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php //boiler_content_nav( 'nav-below' ); ?>

		<?php else : ?>

			<?php //get_template_part( 'no-results', 'index' ); ?>

		<?php endif; ?>
		
		<?php get_sidebar(); ?>
		
		</div>
	</section>

<?php get_footer(); ?>