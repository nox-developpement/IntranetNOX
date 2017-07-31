$(window).ready(function () {
    $("body").css("padding-top", $("header").height());
    $("body").css("padding-bottom", $("footer").height());
    $("#central_content_row").css("height", "calc(100% - " + $("#page_title_row").height() + "px)");
    console.log($("#central_content_row").css("height"));

    $(window).resize(function () {
        $("body").css("padding-top", $("header").height());
        $("body").css("padding-bottom", $("footer").height());
        $("#central_content_row").css("height", "calc(100% - " + $("#page_title_row").height() + "px)");
        console.log($("#central_content_row").height());
    });

});
