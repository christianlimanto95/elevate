var submenuContainerOffset = 0;
$(function() {
    get_clients(page);

    $(document).on("click", ".page", function(e) {
        e.preventDefault();
        page = parseInt($(this).data("page-number"));
        history.pushState({page: page}, null, this.href);
        get_clients(page);

        if (!isMobile) {
            $(".section-title").velocity("scroll", {duration: 200, offset: -100});
        } else {
            $(".section-title").velocity("scroll", {duration: 200});
        }
    });

    window.onpopstate = function(e) {
        if (e.state != null) {
            page = parseInt(e.state.page);
        } else {
            page = 1;
        }

        get_clients(page);
    };
});

function get_clients(page) {
    $(".page.active").removeClass("active");
    $(".page[data-page-number='" + page + "']").addClass("active");
    var ajax = ajaxCall(get_clients_url + "?page=" + page, null, function(json) {
        var result = jQuery.parseJSON(json);
        var count = result.count;
        var data = result.data;
        
        var category_id = -1;
        var iLength = data.length;
        var element = "";
        for (var i = 0; i < iLength; i++) {
            if (category_id != data[i].category_id) {
                if (category_id != -1) {
                    element += "</div>";
                }
                element += "<div class='client-group'>";
                element += "<div class='group-title' data-anim='show-up' data-anim-threshold='self'>" + data[i].category_name + "</div>";
                category_id = data[i].category_id;
            }

            element += "<div class='client-name' data-anim='show-up' data-anim-threshold='self'>" + data[i].client_name + "</div>";
        }

        if (iLength > 0) {
            element += "</div>";
        }

        setPaging(count);
        $(".client-container").html(element);
        setScrollAnimFunction();
        container.scroll();
    });
}

function setPaging(itemCount) {
    var pageCount = itemCount / view_per_page;
    var intPageCount = parseInt(pageCount);
    if (pageCount > intPageCount) {
        pageCount = intPageCount + 1;
    }

    var element = "";
    for (var i = 2; i <= pageCount; i++) {
        element += "<a href='" + page_url + "?page=" + i + "' class='page' data-page-number='" + i + "'>" + i + "</a>";
    }

    $(".dynamic-page-container").html(element);
    $(".page.active").removeClass("active");
    $(".page[data-page-number='" + page + "']").addClass("active");
}