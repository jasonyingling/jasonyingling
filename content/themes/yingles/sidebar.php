<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package boiler
 */
?>
	<article class="sidebar">	
		<?php do_action( 'before_sidebar' ); ?>
		 
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