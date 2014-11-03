(function($){
	$(function() {
		$('#nav > ul').dropotron({
			offsetY: -22,
			mode: 'fade',
			noOpenerFade: true,
			speed: 300,
			detach: false
		});
	}); 

	$('.wonderplugin-gridgallery-item').on('hover', function(){
		$(this).css('border', '1px solid red');
	});
	
}); // end doc ready