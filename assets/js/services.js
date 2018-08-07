$(function() {
    container.scroll();
    
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
});