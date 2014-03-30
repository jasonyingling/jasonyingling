<?php
/**
 * Plugin Name: Speed Readout
 * Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
 * Description: A brief description of the Plugin.
 * Version: The Plugin's Version Number, e.g.: 1.0
 * Author: Name Of The Plugin Author
 * Author URI: http://URI_Of_The_Plugin_Author
 * License: A "Slug" license name e.g. GPL2
 */
 
 /*  Copyright YEAR  PLUGIN_AUTHOR_NAME  (email : PLUGIN AUTHOR EMAIL)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

$defaultSettings = array(
	'unit' => 'ms',
	'goal' => 1000,
	'user' => 'administrator',
);

add_option('speed_readout_settings', $defaultSettings);

$speedOptions = get_option('speed_readout_settings');

function speedread_admin() {
    include('speed_readout_import_admin.php');
}

function speedread_admin_actions() {
	add_options_page("Speed Readout Settings", "Speed Readout", "manage_options", "speed-readout-settings", "speedread_admin");
}

add_action('admin_menu', 'speedread_admin_actions');

add_action( 'admin_bar_menu', 'toolbar_speed_readout', 999 );

function toolbar_speed_readout( $wp_admin_bar ) {
	if (current_user_can('manage_options')) {
		$args = array(
			'id'    => 'speed_readout',
			'title' => 'Speed',
			'meta'  => array( 'class' => 'speed_readout' )
		);
		$wp_admin_bar->add_node( $args );
		
		echo 
		'<style>
			.over_speed div {
				background: #971414;
			}
			.warning_speed div {
				background: #e3e315;
				color: #000;
			}
			.good_speed div {
				background: #2c8236;
			}
		</style>';
		
		$speedOptions = get_option('speed_readout_settings');
		
		echo '<script type="text/javascript">
			var goalSpeed = '; echo $speedOptions['goal']; echo ';
		</script>';	
	}
}

//wp_enqueue_script( 'jquery' , array(), '', true );
wp_enqueue_script( 'speed-readout', plugins_url() . '/speed-readout/js/speed-readout.js', 'jquery', '0.1', true );

?>