<?php
/**
 * @package boiler
 */
?>

<article class="single_post_content">
	
	<div class="lead_copy post_copy">
		<div class="container">
			<?php the_content(); ?>
		</div>
	</div>
	
	<div class="fixed_image_area">
		<div class="background_image">
			<div class="container">
				<div class="fixed_quote">
					<h3>Nullam id dolor id nibh ultricies vehicula ut id elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
					<div class="quotee">
						<p>- Quote McQuoterson</p>
					</div>
				</div>
			</div>
		</div>
	</div><!-- end fixed_image_area -->
	
	<div class="post_copy">
		<div class="container">
			<?php the_content(); ?>
		</div>
	</div>
	
	<footer>
		<div class="container">
			<?php edit_post_link( __( 'Edit', 'boiler' ), '<span class="edit-link">', '</span>' ); ?>
			
			<?php boiler_content_nav( 'nav-below' ); ?>
	
			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() )
					comments_template();
			?>
		</div>
	</footer>
</article>
