<?php
/**
 * @package boiler
 */
?>
				
	<?php edit_post_link( __( 'Edit', 'boiler' ), '<span class="edit-link">', '</span>' ); ?>
	
	<?php boiler_content_nav( 'nav-below' ); ?>

	<?php
		// If comments are open or we have at least one comment, load up the comment template
		if ( comments_open() || '0' != get_comments_number() )
			comments_template();
	?>
		
