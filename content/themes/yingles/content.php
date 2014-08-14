<?php
/**
 * @package boiler
 */
?>

<article class="post_content">
	<header>
	
		<div class="featured_image">
			<img src="<?php bloginfo('template_url'); ?>/images/waino-header.jpg" alt=""/>
		</div><!-- featured_image -->
		
		<div class="container">
				<div class="post_heading">
					<h2><a href="#"><?php the_title(); ?></a></h2>
					<div class="byline">
						<a href="#">by Jason Yingling<i class="fa fa-plus"></i></a>
					</div><!-- end featured by_line -->
				</div>
			
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
		</div>
	</header>

	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
		
			<?php the_excerpt(); ?>
		
	<?php else : ?>
	<div>
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'boiler' ) ); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'boiler' ),
				'after'  => '</div>',
			) );
		?>
	</div>
	<?php endif; ?>

	<footer>
		<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
			<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ', ', 'boiler' ) );
				if ( $categories_list && boiler_categorized_blog() ) :
			?>
			<span class="cat-links">
				<?php printf( __( 'Posted in %1$s', 'boiler' ), $categories_list ); ?>
			</span>
			<?php endif; // End if categories ?>

			<?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', __( ', ', 'boiler' ) );
				if ( $tags_list ) :
			?>
			<span class="sep"> | </span>
			<span class="tags-links">
				<?php printf( __( 'Tagged %1$s', 'boiler' ), $tags_list ); ?>
			</span>
			<?php endif; // End if $tags_list ?>
		<?php endif; // End if 'post' == get_post_type() ?>

		<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
		<span class="sep"> | </span>
		<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'boiler' ), __( '1 Comment', 'boiler' ), __( '% Comments', 'boiler' ) ); ?></span>
		<?php endif; ?>

		<?php edit_post_link( __( 'Edit', 'boiler' ), '<span class="sep"> | </span><span class="edit-link">', '</span>' ); ?>
	</footer>
</article>
