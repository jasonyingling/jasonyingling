<?php

function quote($atts, $content = null) {
	extract (shortcode_atts(array(
		'author' => 'null',
		'source' => 'null',
		'link'	=> 'null',
		'bg'	=> 'null',
		'color' => 'null',
		'effects' => 'null',
	), $atts));
	return "
	<div class='fixed_wrap'>
	<div class='fixed_image_area $effects' style='background-image: url($bg);'></div><!-- end fixed_image_area -->
		<div class='background_image $color'>
			<div class='container'>
				<div class='fixed_quote'>
					<h3>$content</h3>
					<div class='quotee'>
						<p>- $author</p>
						<p class='source_material'><a href='$link'>$source</a></p>
					</div>
				</div>
			</div>
		</div>
	
	</div>
	";
}

add_shortcode( 'quote', 'quote' );

function image($atts, $content = null) {
	extract (shortcode_atts(array(
		'url'	=> 'null',
		'alt'   => 'null',
		'bg'	=> 'null',
		'color' => 'null',
		'effects' => 'null',
	), $atts));
	return "
	<div class='fixed_wrap'>
		<div class='fixed_image_area $effects' style='background-image: url($bg);'></div><!-- end fixed_image_area -->
		<div class='background_image $color'>
			<div class='container'>
				<div class='fixed_image'>
					<img src='$url' alt='$alt' />
				</div>
			</div>
		</div>
	</div>
	";
}

add_shortcode( 'image', 'image' );

function ad($atts, $content = null) {
	extract (shortcode_atts(array(
		'id'	=> 'null',
		'width'   => 'null',
		'height'	=> 'null',
		'slot'	=> 'null',
		'align' => 'null',
	), $atts));
	return "
	<div id='google-ads-$id' class='google-ads-$align'>
		<script type='text/javascript'>
		
			adUnit   = document.getElementById('google-ads-$id');
			adWidth  = adUnit.offsetWidth;
			//console.log('add size: '+adWidth);
			
			/* Replace this with your AdSense Publisher ID */
			google_ad_client = 'ca-pub-3955437953066356';
			
			google_ad_slot 	= '$slot';
			google_ad_width 	= $width;
			google_ad_height 	= $height;
		
		</script>
		
		<script type='text/javascript'    
			src='http://pagead2.googlesyndication.com/pagead/show_ads.js'>
		</script>
	</div>
	";
}

add_shortcode( 'ad', 'ad' );

?>