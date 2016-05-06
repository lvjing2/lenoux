$(function() {
	
	//滑动轮播
	$('.dev-desc .items').width(960*$('.dev-desc .items .item').length+'px');
	$('.dev-line .tab  a').mouseover(function(){
		$(this).addClass('active').siblings().removeClass('active');
		console.log($(this).html());
		var index = $(this).index();
		number = index;
		var distance = -960*index;
		$('.dev-desc .items').stop().animate({
			left:distance
		});
	});

	//自动轮播
	var auto = 1;  //等于1则自动切换，其他任意数字则不自动切换
	if(auto ==1){
		var number = 0;
		var maxNumber = $('.dev-line .tab a').length;
		function autotab(){
			number++;
			number == maxNumber? number = 0 : number;
			$('.dev-line .tab a:eq('+number+')').addClass('active').siblings().removeClass('active');
			var distance = -960*number;
			$('.dev-desc .items').stop().animate({
				left:distance
			});
		}
		var tabChange = setInterval(autotab,3000);
		//鼠标悬停暂停切换
		$('.dev-history').mouseover(function(){
			clearInterval(tabChange);
		});
		$('.dev-history').mouseout(function(){
			tabChange = setInterval(autotab,3000);
		});
	  } 
})