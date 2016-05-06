function moveScroller() {
    var move = function() {
        var st = $(window).scrollTop();
        var ot = $("#sticky-anchor-top").offset().top;
		var ob = $("#sticky-anchor-bottom").offset().top;
        var s = $("#sticky");
        if(st > ot && st < ob) {
            s.css({
                position: "fixed",
                top: "0px"
            });
        } else {
            if(st <= ot) {
                s.css({
                    position: "relative",
                    top: ""
                });
            }
        }
    };
    $(window).scroll(move);
    move();
}

$(function() {
    moveScroller();
});