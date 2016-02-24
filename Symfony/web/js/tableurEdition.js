
$(window).ready(function () {

    $('#formPlacementChamp_Colonne').on("keydown", function (event) {
// Allow controls such as backspace
        var arr = [8, 16, 17, 20, 35, 36, 37, 38, 39, 40, 45, 46];
        // Allow letters
        for (var i = 65; i <= 90; i++) {
            arr.push(i);
        }

// Prevent default if not in array
        if (jQuery.inArray(event.which, arr) === -1) {
            event.preventDefault();
        }
    });
});
//    ajoutLigne();
//    ajoutColonne();
//    editionCellule();
//});
//
//function nextLetter(s) {
//    return s.replace(/([a-zA-Z])[^a-zA-Z]*$/, function (a) {
//        var c = a.charCodeAt(0);
//        switch (c) {
//            case 90:
//                return 'A';
//            case 122:
//                return 'a';
//            default:
//                return String.fromCharCode(++c);
//        }
//    });
//}
//
//function ajoutLigne() {
//    $('body').on('click', '.ajoutLigne', function () {
//        $(this).remove();
//
//        $('#tableauExcel table tbody').append('<tr></tr>');
//        $('#tableauExcel table tbody tr:last-child').remove();
//
//        var nbCells = $("#tableauExcel table").find('tr')[0].cells.length - 2;
//        var nbRows = ($("#tableauExcel table").prop('rows').length) - 1;
//
//        $('#tableauExcel table tr:last-child').append('<th>' + nbRows + '</th>');
//
//        for (i = 0; i < nbCells; i++) {
//            $('#tableauExcel table tr:last-child').append('<td>&nbsp;</td>');
//        }
//
//        $('#tableauExcel table').append("<tr><th class='ajoutLigne' style='font-weight: bold'>+</th></tr>");
//        $('#tableauExcel table tr td').attr('contentEditable', 'true');
//    });
//}
//
//function ajoutColonne() {
//    $('body').on('click', '.ajoutColonne', function () {
//        $(this).remove();
//        $('#tableauExcel table tr').each(function ()
//        {
//            $(this).append('<td></td>');
//        });
//        $('#tableauExcel table tr:first-child td:last-child').remove();
//
//        var $lettre = $('#tableauExcel table tr:first-child th:last-child').html();
//        $('#tableauExcel table tr:first-child').append("<th>" + nextLetter($lettre) + "</th>");
//        $('#tableauExcel table tr:last-child td:last-child').remove();
//        $('#tableauExcel table tr:first-child').append("<th class='ajoutColonne' style='font-weight: bold'>+</th>");
//        $('#tableauExcel table tr td').attr('contentEditable', 'true');
//    });
//}
//
//function editionCellule() {
//    $('#tableauExcel table tr td').attr('contentEditable', 'true');
//
//    $('body').on('click', '#tableauExcel table tr td', function () {
//        $(this).attr('style', 'background-color: #f1f1f1');
//    });
//
//    $('body').on('keydown', '#tableauExcel table tr td', function (e) {
//        if (e.which === 13) {
//            e.preventDefault();
//            $(this).blur();
//        }
//    });
//
//    $('body').on('blur', '#tableauExcel table tr td', function () {
//        $(this).attr('style', 'background-color: white');
//    });
//}
//
//function exctractionTableau() {
//
//    var cellules = [[]];
//    var reWhiteSpace = new RegExp(/(\S)/);
//
//    $('#tableauExcel table tr').each(function () {
//        var coordonneLigne = $(this).find('th').text();
//        $(this).find('td').each(function () {
//            var coordonneColonne = $('#tableauExcel table tr').eq(0).find('th').eq($(this).index()).text();
//            var valeur = $(this).text();
//
//            if (coordonneLigne !== null && coordonneColonne !== null && valeur !== null) {
//                if (reWhiteSpace.test(valeur)) {
//                    cellules.push([coordonneLigne, coordonneColonne, valeur]);
//                }
//            }
//
//        });
//    });
//
//    Cookies.set('editionCellules', true);
//    Cookies.set('cellules', JSON.stringify(cellules));
