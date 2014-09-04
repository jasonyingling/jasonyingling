<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package boiler
 */
?>
	<article class="sidebar">	
		<?php do_action( 'before_sidebar' ); ?>
		<div id="google-ads-1" class="google-ads-sidebar">
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
		<?php get_template_part('content', 'author'); ?>
	</article>