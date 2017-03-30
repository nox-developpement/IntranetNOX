$(window).ready(function () {

    Recherche('.selectFormulaireSelectionVersion');

});

function Recherche(selecteur) {

    if ($(selecteur).width() !== null) {
        var options = $(selecteur + ' option');

        var champRecherche = $('#rechercehSuivi');

        champRecherche.width($(selecteur).width() * 0.98 - 2);

//        champRecherche.keyup(function () {
//            options.each(function () {
//                $(this).show();
//                if ($(this).text().search(new RegExp(champRecherche.val(), 'i')) === -1) {
//                    $(this).hide();
//                }
//            });
//        });
    }

    $(selecteur + ' option').each(function () {
        $(this).attr('title', $(this).text());
    });
    $(selecteur + ' option:nth-child(even)').css('background', 'SeaShell');
//    $(selecteur + ' option:nth-child(odd)').css('background', 'lightgray');
}

function assistantAffaireToggle(section, contexte) {
    $(section).each(function () {
        $(this).slideToggle(1000, 'easeOutQuart');

    });
    $(contexte).find('img').toggle();
}