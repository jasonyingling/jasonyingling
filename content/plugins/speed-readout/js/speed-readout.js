jQuery(document).ready(function($) {

	function getLoadTime() {
		
		var now = new Date().getTime();
		
		// Get the performance object
		window.performance = window.performance || window.mozPerformance || window.msPerformance || window.webkitPerformance || {};
		var timing = performance.timing || {};
		
		if (timing) {
			var load_time = now - timing.navigationStart;
			var load_string = 'Load time:  ' + load_time + 'ms';
			
			// Check if speed is more than 1000ms over a set goal. If so show as red. Have to set to the db.
			if (load_time > (goalSpeed + 1000)) {
				$('.speed_readout').addClass('over_speed');
			} else if (load_time > goalSpeed) {
				$('.speed_readout').addClass('warning_speed');
			} else {
				$('.speed_readout').addClass('good_speed');
			}
			
			$('.speed_readout div').html(load_string);
		}
	}
	
	window.onload = function() {
		getLoadTime();
	}
});