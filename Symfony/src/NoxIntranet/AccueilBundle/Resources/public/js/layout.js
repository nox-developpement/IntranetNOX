$(document).ready(function () {
    // Positionnement et dimensionnnement de la zone de texte principal.
    $("body").css("padding-top", $("header").height());
    $("body").css("padding-bottom", $("footer").height());
    $("#central_content_row").css("height", "calc(100% - " + $("#page_title_row").height() + "px)");

    // Lors du redimensionnement de la fenêtre.
    $(window).resize(function () {
        // Positionnement et dimensionnnement de la zone de texte principal.
        $("body").css("padding-top", $("header").height());
        $("body").css("padding-bottom", $("footer").height());
        $("#central_content_row").css("height", "calc(100% - " + $("#page_title_row").height() + "px)");
    });
});
