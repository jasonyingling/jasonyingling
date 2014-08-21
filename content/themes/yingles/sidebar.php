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
		 <div class="about_author">
			 <div class="author_pic">
			 	<img src="<?php bloginfo('template_url'); ?>/images/me.png" alt="" />
			 </div><!-- end author_pic -->
			 <h3>Jason Yingling</h3>
			 <a href="#">@jason_yingling</a>
			 <div class="author_bio">
				 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
			 </div><!-- end author_bio -->
			 <button class="expand_bio"><i class="fa fa-plus"></i></button><!-- expand_bio -->
		 </div><!-- end about_author -->
	</article>