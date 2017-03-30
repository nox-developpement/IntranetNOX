
function UrlExists(url, callback) {

    $('#contenu').append("<p id = 'message_chargement'> Veuillez patienter pendant l'accès à l'intranet <img src = '../images/loading.gif' alt = 'chargement' id = 'loadin' > </p>");
    $('#message_chargement').css('color', '#f6f09a');
    var http = new XMLHttpRequest();
    http.open('HEAD', url);
    http.onreadystatechange = function () {
        if (this.readyState === this.DONE) {
            callback(this.status === 200);
        }
    };
    http.send();
}


function redirection() {
    UrlExists('http://192.168.35.3/intranet/', function (callback) {
        if (callback) {

            $('#message_chargement').text("Vous allez être redirigé vers l'intranet dans 5 secondes."); // Redirige vers l'intranet.
            setTimeout("window.location.href='http://192.168.35.3/intranet';", 5000);
        }
        else {
            $('#message_chargement').css('color', 'red');
            $('#message_chargement').text("Impossible d'accéder à l'intranet depuis votre localisation, vous allez être redirigé vers l'accueil dans 5 secondes."); // Redirige vers l'accueil.
            setTimeout("window.location.href='./accueil.html';", 5000);
        }
    });
}

