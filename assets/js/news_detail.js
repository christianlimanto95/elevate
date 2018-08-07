$(function() {
    $(".button-share").on("click", function() {
        showShareDialog();
    });

    $(".share-dialog .dialog-close-button").on("click", function() {
        closeShareDialog();
    });

    $(window).on("keydown", function(e) {
        if (e.which == 27) {
            closeShareDialog();
        }
    });
});

function showShareDialog() {
    $(".share-dialog").addClass("show");
    $("body").addClass("fixed");
}

function closeShareDialog() {
    $(".share-dialog").removeClass("show");
    $("body").removeClass("fixed");
}