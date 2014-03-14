jQuery(document).ready(function($){

	var localDev = true;

	if(localDev == true) {
		loadReload();
	}
	
	$('body').flowtype({
		minimum   : 500,
		maximum   : 1200,
		minFont   : 14,
		maxFont   : 28,
		fontRatio : 50
	});
});