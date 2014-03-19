$(document).ready(function() {

	$(".vegPics").hover(function(){
		$(this).find(".vegPic").stop(true, false).animate({ 
			opacity: 0
		});
	}, function(){
	$(this).find(".vegPic").stop(true, false).animate({ 
			opacity: 1
		});
	});

});