<?php
/**
 * @package boiler
 */
?>

<article class="single_post_content">
	
	<div class="post_copy">
		<div class="container">
			
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
			
			<ul class="sources">
				<li>Sources:</li>
				<li><a href="#">http://google.com</a></li>
				<li><a href="#">http://google.com</a></li>
			</ul>
		</div>
	</div>
	
	<footer>
		<div class="container">
			<?php get_sidebar('single'); ?>
			
			<div class="comments">
			
				<div class="about_author">
					 <div class="author_pic">
					 	<img src="<?php bloginfo('template_url'); ?>/images/me.png" alt="" />
					 	<h3>Jason Yingling</h3>
					 	<a href="#">@jason_yingling</a>	
					 </div><!-- end author_pic -->
					 
					 <div class="author_bio">
						 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
						 <div class="more_by">
							 <h4>More stories by Jason</h4>
							 <ul class="more_stories">
							 	<li><a href="#">Parturient Quam Mollis Sollicitudin Ornare</a></li>
							 	<li><a href="#">Parturient Quam Mollis Sollicitudin Ornare</a></li>
							 	<li><a href="#">Parturient Quam Mollis Sollicitudin Ornare</a></li>
							 </ul>
						 </div><!-- end more_by -->
					 </div><!-- end author_bio -->
					 <!-- <button class="expand_bio"><i class="fa fa-plus"></i></button> --><!-- expand_bio -->
				</div><!-- end about_author -->
				
				<?php edit_post_link( __( 'Edit', 'boiler' ), '<span class="edit-link">', '</span>' ); ?>
				
				<?php boiler_content_nav( 'nav-below' ); ?>
		
				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() )
						comments_template();
				?>
			</div>
		</div>
	</footer>
</article>
