var sectionOffset = [], sectionOffsetMargin = 50;
var section = 0;

$(function() {
    setSectionOffset();

    container.on("scroll", setSection);
    container.scroll();

    $(".submenu").on("click", function() {
        var sectionNumber = parseInt($(this).data("section"));
        jumpToSection(sectionNumber, true);
    });

    $(document).on("click", ".service-item", function() {
        var serviceItem = $(this);
        var description = $(this).find(".service-description");
        var show = $(this).attr("data-show");
        description.velocity("stop");
        if (show == "true") {
            description.velocity({
                height: "0px"
            }, 300, function() {
                setSectionOffset();
            });
            serviceItem.attr("data-show", "false");
        } else {
            description.velocity({
                height: description[0].scrollHeight
            }, 300, function() {
                setSectionOffset();
            });
            serviceItem.attr("data-show", "true");
        }
    });

    $(document).on("click", ".faq-item", function() {
        var faqItem = $(this);
        var answer = $(this).find(".faq-answer");
        var show = $(this).attr("data-show");
        answer.velocity("stop");
        if (show == "true") {
            answer.velocity({
                height: "0px"
            }, 300, function() {
                setSectionOffset();
            });
            faqItem.attr("data-show", "false");
        } else {
            answer.velocity({
                height: answer[0].scrollHeight
            }, 300, function() {
                setSectionOffset();
            });
            faqItem.attr("data-show", "true");
        }
    });

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
        setSectionOffset();
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

function setSectionOffset() {
    if (isMobile) {
        var section1Top = $(".section-1").offset().top;
        sectionOffsetMargin = section1Top - 20;
    } else {
        sectionOffsetMargin = 50;
    }

    sectionOffset = [];
    sectionOffset.push($(".section-1").offset().top - sectionOffsetMargin - 50, $(".section-2").offset().top - sectionOffsetMargin, $(".section-3").offset().top - sectionOffsetMargin, /*$(".section-4").offset().top - sectionOffsetMargin, */$(".section-5").offset().top - sectionOffsetMargin);
}

function jumpToSection(index, animation) {
    var duration = 0;
    if (animation) {
        duration = 300;
    }
    
    var offsetMargin = 5;
    $("html").velocity("scroll", {
        duration: duration,
        offset: (sectionOffset[index] + offsetMargin) + "px",
        mobileHA: false
    });
}

function setSection() {
    for (var i = 0; i < sectionOffset.length; i++) {
        if (container.scrollTop() < sectionOffset[i]) {
            if (i == 0) {
                changeSectionColor(i);
            } else {
                changeSectionColor(i - 1);
            }
            break;
        }
    }

    if (i == sectionOffset.length) {
        changeSectionColor(i - 1);
    }
}

function changeSectionColor(index) {
    $(".submenu.active").removeClass("active");
    $(".submenu[data-section='" + index + "']").addClass("active");
    section = index;
}