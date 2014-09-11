<?php
/**
 * @package boiler
 */
?>

<article class="single_post_content">
	
	<div class="post_copy">
		<div class="container-post">
			
			<div id="google-ads-1" class="google-ads-right">
			 <script type="text/javascript">
			 
				adUnit   = document.getElementById("google-ads-1");
				adWidth  = adUnit.offsetWidth;
				//console.log("add size: "+adWidth);
			 
				/* Replace this with your AdSense Publisher ID */
				google_ad_client = "ca-pub-3955437953066356";
			 
				/* Medium Rectangle (300 x 250) */
				google_ad_slot 	= "7569185153";
				google_ad_width 	= 300;
				google_ad_height 	= 250;

			 </script>
			 
			 <script type="text/javascript"    
			   src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
			 </script>
			</div>
		
			<?php the_content(); ?>
			
			<?php if( have_rows('sources') ): ?>
				<ul class="sources">
					<li>Sources:</li>
					<?php while ( have_rows('sources') ) : the_row(); ?>
				
				    	<li><a href="<?php the_sub_field('source_link'); ?>" target="_blank"><?php the_sub_field('source_title'); ?></a></li>
				
					<?php endwhile; ?>
				</ul>
			<?php endif; ?>
			
		</div>
	</div>
	
	<footer>
		<div class="container">
			<?php get_sidebar('single'); ?>
			
			<div class="comments">
			
				<?php get_template_part('content', 'footer-author'); ?>
				
				<?php get_template_part('content', 'comments'); ?>
			
			</div>
	
		</div>
	</footer>
	
</article>
