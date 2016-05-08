function location(){
	var ot = $(".nav").offset().left;
	$("#intern1").css({
			left: ot+100
	});
			
	$("#intern2").css({
			left: ot+400
	});
			
	$("#intern3").css({
			left: ot+150
	});
}

$(function(){
	location();
	$(window).resize(function(){
		location();
		});	
});