$(window).ready(function () {

    Recherche('.selectFormulaireAdministrationAjoutProfil');

    Recherche('.selectFormulaireSelectionVersion');

});

function Recherche(selecteur) {
    var options = $(selecteur + ' option');

    var champRecherche = $('#rechercehSuivi');

    champRecherche.width($(selecteur).width());

    champRecherche.keyup(function () {
        options.each(function () {
            $(this).show();
            if ($(this).text().search(new RegExp(champRecherche.val(), 'i')) === -1) {
                $(this).hide();
            }
        });
    });
}