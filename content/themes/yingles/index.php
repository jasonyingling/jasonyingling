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
	<?php 
		$displayed = array(); 
		//$sevenDaysAgo = new DateTime('200 days ago');
		//$postAfter = $sevenDaysAgo->format('F j, Y');
	?>
	<?php
		$args = array (
		  'posts_per_page' => 1
		);
		
		$featured = new WP_Query($args);
		if ($featured->have_posts() ) : 
	?>
		<?php while( $featured->have_posts() ) : $featured->the_post(); ?>
			<?php get_template_part('content', 'featured'); ?>
			<?php $displayed[] = get_the_ID(); ?>
		<?php endwhile; ?>
	
	<?php endif; ?>

	<?php //get_template_part('content', 'popular'); ?>

	<section class="main_home_content">
	
		<div class="container">
			<div class="post_content">
				<?php
					$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
					$args = array(
						'post__not_in' => $displayed,
						'posts_per_page' => 10,
						'paged' => $paged,
					);
					query_posts($args); 
				?>
				<?php if ( have_posts() ) : ?>
		
					<?php while ( have_posts() ) : the_post(); ?>
		
						<?php $format = get_post_format(); ?>
						<?php get_template_part('post-formats/content', $format); ?>
		
					<?php endwhile; ?>
		
					<?php boiler_content_nav( 'nav-below' ); ?>
					<?php //r8_pagination(); ?>
		
				<?php else : ?>
		
					<?php //get_template_part( 'no-results', 'index' ); ?>
		
				<?php endif; ?>
			</div><!-- end post_content -->
			
			<?php get_sidebar(); ?>
		
		</div>
	</section>

<?php get_footer(); ?>