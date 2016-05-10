$(function(){	
	
    var x = 22;
	var y = 20;
		
	$("a.smallimage").hover(function(e){
		$("body").append('<p id="bigimage"><img src="'+ this.rel + '" alt="" /></p>');
        $(this).find('img').stop().fadeTo('slow',0.5);
		widthJudge(e);
	    $("#bigimage").fadeIn('fast');
	},function(){
	    $(this).find('img').stop().fadeTo('slow',1);
		$("#bigimage").remove();
    });
	
	$("a.smallimage").mousemove(function(e){
		widthJudge(e);
	});
	
    function widthJudge(e){
		var marginRight = document.documentElement.clientWidth - e.pageX;
		var imageWidth = $("#bigimage").width();
		if(marginRight < imageWidth)
		{
		    x = imageWidth + 22;
			$("#bigimage").css({top:(e.pageY - y ) + 'px',left:(e.pageX - x ) + 'px'});
		}else{
		    x = 22;
		    $("#bigimage").css({top:(e.pageY - y ) + 'px',left:(e.pageX + x ) + 'px'});
        };
	}
});