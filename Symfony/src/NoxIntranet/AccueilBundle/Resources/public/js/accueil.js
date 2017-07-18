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


function ajaxGetNews(getNewsPath) {
    $.ajax({
        url: getNewsPath,
        type: "POST",
        success: function (newsJSON) {
            var news = JSON.parse(newsJSON);

            console.log(news);
        }
    });
}

function appendNews(news) {
    var zoneNews = $("#zoneNewsAccueil");
    
    var news = "<div class='col-lg-12'></div>";
}

var newsExterne = new Array();
function showNews(arr) {
    $('#majExterne p').fadeTo(500, 100, 'linear');
    $('#majExterne p').html(arr[0]);
    $('#majExterne p').fadeTo(4500, 0, 'easeInExpo'); // fade to "0" with a 100, easeInExpo0ms duration
    var i = 1;
    setInterval(
            function () {
                $('#majExterne p').fadeTo(500, 100, 'linear');
                $('#majExterne p').html(arr[i]);
                $('#majExterne p').fadeTo(4500, 0, 'easeInExpo'); // fade to "0" with a 100, easeInExpo0ms duration
                i++;
                if (i >= arr.length)
                    i = 0;
            }, 6000);
}

//showNews(newsExterne);