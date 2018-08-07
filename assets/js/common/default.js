var container = $(window);
var header;
var headerScrollDown = true;
var windowHeight = 0;
var submenuContainer, submenuOffset = 0;
var menuOpen = false;
var arrScrollFunction = [];
var headerMenuContainer, headerMenuRedLine, headerMenuItem;

$(function() {
    windowHeight = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
    header = $(".header");
    var body = $("body");
    submenuContainer = $(".submenu-container");
    headerMenuContainer = $(".header-menu-container");
    headerMenuRedLine = $(".header-menu-red-line");
    headerMenuItem = $(".header-menu");
    
    if (!isMobile) {
        if (submenuContainer.length > 0) {
            submenuOffset = submenuContainer.offset().top;
            
            if (container.scrollTop() >= submenuOffset) {
                container.on("scroll", submenuContainerAddFixed);
            } else {
                container.on("scroll", submenuContainerRemoveFixed);
            }
        }
    } else {
        if (container.scrollTop() > 5) {
            container.on("scroll", checkHeaderScrollDown);
        } else {
            container.on("scroll", checkHeaderScrollUp);
        }
    }

    setScrollAnimFunction();

    document.getElementById("menu-icon").addEventListener("click", function(e) {
        var menuIconLine1 = $(".menu-icon-line-1");
        if (!menuOpen) {
            menuOpen = true;
            menuIconLine1.off("webkitAnimationEnd oanimationend msAnimationEnd animationend");
            body.removeAttr("class").addClass("fixed").addClass("menu-opening").addClass("menu-inside-showing");
            menuIconLine1.one("webkitAnimationEnd oanimationend msAnimationEnd animationend", function(e) {
                body.addClass("menu-opened").removeClass("menu-opening");
            });
        } else {
            menuOpen = false;
            body.removeClass("fixed");
            menuIconLine1.off("webkitAnimationEnd oanimationend msAnimationEnd animationend");
            body.addClass("menu-opened").removeClass("menu-opening").addClass("menu-closing");
            menuIconLine1.one("webkitAnimationEnd oanimationend msAnimationEnd animationend", function(e) {
                body.removeClass("menu-closing").removeClass("menu-opened").removeClass("menu-inside-showing");
            });
        }
    });

    $(document).on("click", ".select", function(e) {
        var type = $(this).data("type");
        var selectedDropdown = $(".dropdown-container[data-type='" + type + "']");
        
        if (selectedDropdown.hasClass("show")) {
            selectedDropdown.removeClass("show");
        } else {
            $(".dropdown-container.show").removeClass("show");
            selectedDropdown.addClass("show");
        }
        
        e.stopPropagation();
    });

    $(document).on("click", ".dropdown-item", function(e) {
        var select = $(this).closest(".select");
        var data = [].filter.call(this.attributes, function(at) { return /^data-/.test(at.name); });
        var iLength = data.length;
        for (var i = 0; i < iLength; i++) {
            select.attr(data[i].name, data[i].value);
        }
        var text = $(this).html();
        select.find(".select-text").html(text);
        select.trigger("valueChanged");

        var dropdownContainer = $(this).parent();
        dropdownContainer.removeClass("show");
        e.stopPropagation();
    });

    $(document).on("click", function(e) {
        if ($(e.target).closest(".dropdown-container").length == 0) {
            $(".dropdown-container.show").removeClass("show");
        }
    });

    [].forEach.call(document.querySelectorAll("[data-src]"), function(element) {
        var image = new Image();
        
		if (element.tagName != "IMG") {
			image.onload = function() {
                element.style.backgroundImage = "url('" + image.src + "')";
                $(element).addClass("hide-wrapper");
            };
            image.src = element.getAttribute("data-src");
		} else {
			image.onload = function() {
                $(element).parent().addClass("hide-wrapper");
            };
            image.src = element.getAttribute("src");
		}
    });
    
    $(window).on("resize", function() {
        var vw = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
        var vh = Math.max(document.documentElement.clientHeight, window.innerHeight || 0);
        if (vw < 1025) {
            isMobile = true;
            if (vw >= 768) {
                isTablet = true;
            } else {
                isTablet = false;
            }
        } else {
            isMobile = false;
        }

        if (!isMobile) {
            if (submenuContainer.length > 0) {
                submenuContainer.removeClass("fixed");
                submenuOffset = submenuContainer.offset().top;
                
                if (container.scrollTop() >= submenuOffset) {
                    container.off("scroll", submenuContainerRemoveFixed);
                    container.on("scroll", submenuContainerAddFixed);
                } else {
                    container.off("scroll", submenuContainerAddFixed);
                    container.on("scroll", submenuContainerRemoveFixed);
                }
            }
        } else {
            container.off("scroll", submenuContainerAddFixed);
            container.off("scroll", submenuContainerRemoveFixed);

            if (container.scrollTop() > 5) {
                container.on("scroll", checkHeaderScrollDown);
                container.off("scroll", checkHeaderScrollUp);
            } else {
                container.on("scroll", checkHeaderScrollUp);
                container.off("scroll", checkHeaderScrollDown);
            }
        }

        setScrollAnimFunction();
        container.scroll();
    });
});

function setScrollAnimFunction() {
    var animOffset = 60;
    if (isMobile) {
        animOffset = 20;
    }

    var iLength = arrScrollFunction.length;
    for (var i = 0; i < iLength; i++) {
        container.off("scroll", arrScrollFunction[i]);
    }

    var animElement = $("[data-anim-threshold='self']");
    var animElementLength = animElement.length;
	var lastThreshold = -1, lastDelay = 0;
	for (var i = 0; i < animElementLength; i++) {
		var animElementItem = animElement.eq(i);
        var itemThreshold = animElementItem.offset().top + 50;
		if (itemThreshold == lastThreshold) {
			lastDelay += 0.1;
		} else {
			lastThreshold = itemThreshold;
			lastDelay = 0;
		}

		var arrScrollFunctionIndex = arrScrollFunction.length;
        (function(item, threshold, index, delay) {
			var scrollFunction = function() {
				if (container.scrollTop() + windowHeight >= threshold) {
					item[0].style.WebkitAnimationDelay = delay + "s";
					item[0].style.animationDelay = delay + "s";
					item.addClass("show");

					container.off("scroll", arrScrollFunction[index]);
				}
			};
			container.on("scroll", scrollFunction);
			arrScrollFunction.push(scrollFunction);
        })(animElementItem, itemThreshold, arrScrollFunctionIndex, lastDelay);
	}
}

function submenuContainerAddFixed() {
    if (container.scrollTop() >= submenuOffset) {
        submenuContainer.addClass("fixed");
        container.off("scroll", submenuContainerAddFixed);
        container.on("scroll", submenuContainerRemoveFixed);
    }
}

function submenuContainerRemoveFixed() {
    if (container.scrollTop() <= submenuOffset) {
        submenuContainer.removeClass("fixed");
        container.on("scroll", submenuContainerAddFixed);
        container.off("scroll", submenuContainerRemoveFixed);
    }
}

function checkHeaderScrollDown() {
    if (container.scrollTop() > 5) {
        header.addClass("scroll");
        container.off("scroll", checkHeaderScrollDown);
        container.on("scroll", checkHeaderScrollUp);
    }
}

function checkHeaderScrollUp() {
    if (container.scrollTop() <= 5) {
        header.removeClass("scroll");
        container.on("scroll", checkHeaderScrollDown);
        container.off("scroll", checkHeaderScrollUp);
    }
}

function ajaxCall(url, data, callback) {
	return $.ajax({
		url: url,
		data: data,
		type: 'POST',
		error: function(jqXHR, exception) {
			if (exception != "abort") {
				console.log(jqXHR + " : " + jqXHR.responseText);
			}
		},
		success: function(result) {
			callback(result);
		}
	});
}