<?php 
	global $speedOptions;
	$current_user = wp_get_current_user();
	$user_role = $current_user->roles[0];
	$roles = get_editable_roles();
	$unitValues = array(
		'ms' => 'Milliseconds',
		's' => 'Seconds'
	);
?>

<?php 
    if($_POST['speedreadout_hidden'] == 'Y') {
        //Form data sent
        $speedUnit = $_POST['speedreadout_unit_val'];
        $speedTime = $_POST['speedreadout_time_val'];
        $speedRole = $_POST['speedreadout_role_val'];
        $updateOptions = array(
        	'unit' => $speedUnit,
			'goal' => $speedTime,
			'user' => $speedRole,
        );
        update_option('speed_readout_settings', $updateOptions);
        ?>
        <div class="updated"><p><strong><?php _e('Options saved.' ); ?></strong></p></div>
        <?php
    } else {
        //Normal page display
        $speedUnit = $speedOptions['unit'];
        $speedTime = $speedOptions['goal'];
        $speedRole = $speedOptions['role'];
    }
?>

<div class="wrap">
    <?php    echo "<h2>" . __( 'Speed Readout Settings', 'speedreadout_trdom' ) . "</h2>"; ?>
     
    <form name="speedreadout_form" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
    	<input type="hidden" name="speedreadout_hidden" value="Y">
        <?php    echo "<h4>" . __( 'Readout Settings', 'speedreadout_trdom' ) . "</h4>"; ?>
        <!--
<p><?php _e("Unit of time: " ); ?>
        	<select class="js-unit_time" name="speedreadout_unit_val">
        		<?php foreach ($unitValues as $unitAbrev => $unit) : ?>
        			<?php if ($speedUnit === $unitAbrev) {
	        			$selected = 'selected';
        			} else {
	        			$selected = '';
        			} ?>
        			<option value="<?php echo $unitAbrev; ?>" <?php echo $selected; ?>><?php echo $unit; ?> (<?php echo $unitAbrev; ?>)</option>
        		<?php endforeach; ?>
			</select>
		</p>
-->
        <p><?php _e("Goal in (<span class='js-time_label'>".$speedOptions['unit']."</span>): " ); ?><input type="text" name="speedreadout_time_val" value="<?php echo $speedTime; ?>" size="20"><?php _e(" ex: 1000" ); ?></p>
       <!--
 <p><?php _e("Display to user role: " ); ?>
        	<select class="js-user_role" name="speedreadout_role_val">
        		<?php foreach ($roles as $roleSlug => $role) : ?>
				<?php if ($speedRole === $roleSlug) {
        			$selectedRole = 'selected';
    			} else {
        			$selectedRole = '';
    			} ?>
	        	<option value="<?php echo $roleSlug; ?>" <?php echo $selectedRole; ?>><?php echo $role['name']; ?></option>
	        	<?php endforeach; ?>
			</select>
		</p>
-->
     
        <p class="submit">
        <input type="submit" name="Submit" value="<?php _e('Update Options', 'speedreadout_trdom' ) ?>" />
        </p>
    </form>
</div>

<script type="text/javascript">
jQuery(document).ready(function($) {
	$('.js-unit_time').change(function() {
		$('.js-time_label').html($('.js-unit_time').val());
	});
});
</script>