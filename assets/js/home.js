var section1Image;
var section1;
$(function() {
	section1 = $(".section-1");
	section1Image = $(".section-1-image");
	
	if (!isMobile) {
		setParalax();
		container.on("scroll", setParalax);
	}

	$(".section-1").addClass("show");
	
	container.scroll();

	/*$(".person").on("click", function() {
		showPersonDetail();
	});*/

	$(".person-detail").on("click", function(e) {
		e.stopPropagation();
	});

	$(".person-detail-close, .person-detail-container").on("click", function() {
		closePersonDetail();
	});

	$(document).on("keydown", function(e) {
		if (e.which == 27) {
			closePersonDetail();
		}
	});

	$(window).on("resize", function() {
		if (!isMobile) {
			setParalax();
			container.on("scroll", setParalax);
		}
	});
});

function showPersonDetail() {
	$(".person-detail-container").addClass("show");
	$("body").addClass("fixed");
}

function closePersonDetail() {
	$(".person-detail-container").removeClass("show");
	$("body").removeClass("fixed");
}

function setParalax() {
	section1Image.css("transform", "translateY(" + (container.scrollTop() / 1.5) + "px)");
}