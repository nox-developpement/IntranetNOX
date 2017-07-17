$(document).ready(function () {
    $("#texteEditButton").on("click", function () {
        $("#zoneEditionAccueil").removeClass("hidden");
        $("#texteEditCancelButton").removeClass("hidden");
        $("#texteEditButton").addClass("hidden");
        $("#zoneTexteAccueilContainer").addClass("hidden");
    });

    $("#texteEditCancelButton").on("click", function () {
        $("#zoneEditionAccueil").addClass("hidden");
        $("#texteEditCancelButton").addClass("hidden");
        $("#texteEditButton").removeClass("hidden");
        $("#zoneTexteAccueilContainer").removeClass("hidden");
    });
});


