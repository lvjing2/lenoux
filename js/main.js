function text_on_img_location(){
	var ot = $(".nav").offset().left;
	var text = $("[id^=text-on-img]").each(function(index, element) {
		$(this).css({
			left: ot
			});
    });
}

$(function() {
	var bannerSlider = new Slider($('#banner_tabs'), {
		time: 5000,
		delay: 400,
		event: 'hover',
		auto: true,
		mode: 'fade',
		controller: $('#bannerCtrl'),
		activeControllerCls: 'active'
	});
	$('#banner_tabs .flex-prev').click(function() {
		bannerSlider.prev()
	});
	$('#banner_tabs .flex-next').click(function() {
		bannerSlider.next()
	});
	text_on_img_location();
	$(window).resize(function(){
		text_on_img_location();
		});
});






