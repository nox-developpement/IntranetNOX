$(document).ready(function () {
    accueilEditoEdition();
});

// Affiche cache la zone d'édtion du texte de l'édito de l'accueil.
function accueilEditoEdition() {
    // Lors d'un click sur le bouton d'édition de l'édito...
    $("#texteEditButton").on("click", function () {
        $("#zoneEditionAccueil").removeClass("hidden");
        $("#texteEditCancelButton").removeClass("hidden");
        $("#texteEditButton").addClass("hidden");
        $("#zoneTexteAccueilContainer").addClass("hidden");
    });

    // Lors d'un click sur le bouton d'annulation de l'édito.
    $("#texteEditCancelButton").on("click", function () {
        $("#zoneEditionAccueil").addClass("hidden");
        $("#texteEditCancelButton").addClass("hidden");
        $("#texteEditButton").removeClass("hidden");
        $("#zoneTexteAccueilContainer").removeClass("hidden");
    });
}

// Récupére la liste des news.
function ajaxGetNews(getNewsPath /* Url de la fonction de récupération des news. */) {
    $.ajax({
        url: getNewsPath,
        type: "POST",
        success: function (newsJSON) {
            // Liste des news au format objet.
            var newsByCategorie = JSON.parse(newsJSON);

            // Appel de la fonction d'injection des news.
            appendNews(newsByCategorie);
        }
    });
}

// Ajoute les news à la zone des news catégorie par catégorie.
function appendNews(newsByCategorie) {
    // Zone d'affichage des news.
    var zoneNews = $("#zoneNewsAccueil");

    // Pour chaques categorie de news...
    $.each(newsByCategorie, function (categorie, newsList) {
        // Si la catégorie contient des news...
        if (newsList.length > 0) {
            // Génération du code HTML du conteneur et du titre de la catégorie des news.
            var newsCategorieRow = $("<div class='accueil_news_row row'></div>");
            var newsCategorieCol = $("<div class='accueil_news_container col-lg-12'></div>");
            var newsCategorieTitle = $("<p class='accueil_news_categorie_title background-blue text-white'>" + categorie + "</p>");
            var newsListContainer = $("<div class='accueil_news_list_container'></div>");

            // Ajout du titre de catégorie au container de news.
            newsCategorieCol.append(newsCategorieTitle);

            // Pour chaques news de la catégorie...
            $.each(newsList, function (index, news) {
                // Génération du code HTML de le la news.
                var newsDiv = $("<p class='accueil_news_link text-center background-transparent-white'><a href='" + news.Lien + "' target='_blank'>" + news.Nom + "</a></p>");

                // Ajout de la news au container de catégorie.
                newsListContainer.append(newsDiv);
            });

            // Ajout de la liste des news au container des news puis du container à la ligne d'affichage.
            newsCategorieCol.append(newsListContainer);
            newsCategorieRow.append(newsCategorieCol);

            // Ajout de la ligne à la zone d'affichage des news.
            zoneNews.append(newsCategorieRow);

            // Lancement de la rotation des news visible.
            newsListRotation(newsListContainer);
        }
    });

    // Lancement de la rotation des catégories.
    //newsCategorieRotation(zoneNews);
}

// Assure une rotation de la news visible dans le container de news passé en paramètre.
function newsListRotation(newsListContainer) {
    // Les news du container.
    var news = newsListContainer.find(".accueil_news_link");
    // Nombre total de news dans le container.
    var newsCount = news.length;
    // Index de la news actuellement visible.
    var visibleNewsIndex = 0;

    // Changement de la news visible.
    function switchVisbleNews() {
        // Pour chaques news...
        news.each(function (index, link) {
            // Si l'index de la news est égale à celui de la news qui doit être visible...
            if (index === visibleNewsIndex) {
                // On retire la classe hidden.
                $(link).css("transform", "translationX(100%)");
                $(link).removeClass('hidden');
                $(link).transition("transform", "translationX(0%)", 2000);

            }
            // Sinon...
            else {
                // On ajoute le classe hidden.
                $(link).addClass('hidden');

            }
        });

        // Incrémentation de l'index de la news visible.
        visibleNewsIndex++;

        // Si l'index de la news visible dépasse le nombre de news...
        if (visibleNewsIndex > (newsCount - 1)) {
            // On le réinitialise à 0.
            visibleNewsIndex = 0;
        }
    }

    // Première appel.
    switchVisbleNews();

    // Toutes les 3 secondes...
    setInterval(function () {
        // On change la news visible;
        //switchVisbleNews();
    }, 5000);
}

// Alterne l'ordre d'affichage des catégories de news.
function newsCategorieRotation(zoneNews) {
    setInterval(function () {
        // Ligne des catégories.
        var newsCategories = zoneNews.find($(".accueil_news_row"));

        // On récupére la première et la dernière catégorie.
        var first = newsCategories.first();
        var last = newsCategories.last();

        // On place la dernière catégorie avant la première.
        last.insertBefore(first);
    }, 10000);
}