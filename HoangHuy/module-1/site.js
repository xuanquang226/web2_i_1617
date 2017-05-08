
$(document).ready(function (){	
	var list_open = false;
	$('.fy-switch-theme').click(function () {	

	    if (list_open == true) {
			$('.switcher-list').removeClass('active');
			list_open = false;
		} else {
			$('.switcher-list').addClass('active');
			list_open = true;
		}	
		return false;	
	});
	$('.fy-bar').click(function () {	
		if(list_open == true)
		{
			$('.switcher-list').removeClass('active');	
			list_open = false;
		}	    	  	
	});

	$('div.fy-responsive>a').click(function() {	    
	    $('div.fy-responsive>a.active').removeClass('active');
		$(this).addClass('active');    
	});
	
	$('.fy-responsive a').each(function (i, el) {
		var element = $(el);
		var width = element.data('width');		
		element.on('click', function (e) {
			e.preventDefault();

			$('.container').css('width', width);

			$('.fy-responsive a.active').removeClass('active');
			$(this).addClass('active');
		});
	});
	$(".fy-button-close").click(function(){
	    $("div.fy-bar").remove();
	});
	
})
