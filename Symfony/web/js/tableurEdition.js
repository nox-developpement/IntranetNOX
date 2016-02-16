

$(window).ready(function () {

    $('body').on('click', '#ajoutColonne', function () {
        $(this).remove();
        $('#tableauExcel table tr').each(function ()
        {
            $(this).append('<td></td>');
        });
        $('#tableauExcel table tr:first-child td:last-child').remove();

        var $lettre = $('#tableauExcel table tr:first-child th:last-child').html();
        $('#tableauExcel table tr:first-child').append("<th>" + nextLetter($lettre) + "</th>");
        $('#tableauExcel table tr:last-child td:last-child').remove();
        $('#tableauExcel table tr:first-child').append("<td id='ajoutColonne' style='font-weight: bold'>+</td>");
        $('#tableauExcel table tr td').attr('contentEditable', 'true');
    });

    $('body').on('click', '#ajoutLigne', function () {
        $(this).remove();

        $('#tableauExcel table tbody').append('<tr></tr>');
        $('#tableauExcel table tbody tr:last-child').remove();

        var nbCells = $("#tableauExcel table").find('tr')[0].cells.length - 2;
        var nbRows = ($("#tableauExcel table").prop('rows').length) - 1;

        $('#tableauExcel table tr:last-child').append('<th>' + nbRows + '</th>');

        for (i = 0; i < nbCells; i++) {
            $('#tableauExcel table tr:last-child').append('<td>&nbsp;</td>');
        }

        $('#tableauExcel table').append("<tr><td id='ajoutLigne' style='font-weight: bold'>+</td></tr>");
        $('#tableauExcel table tr td').attr('contentEditable', 'true');
    });

    $('#tableauExcel table tr td').attr('contentEditable', 'true');
    $('body').on('click', '#tableauExcel table tr td', function () {
        $(this).attr('style', 'background-color: #f1f1f1');
    });

    $('body').on('blur', '#tableauExcel table tr td', function () {
        $(this).attr('style', 'background-color: transparent');
    });
});

function nextLetter(s) {
    return s.replace(/([a-zA-Z])[^a-zA-Z]*$/, function (a) {
        var c = a.charCodeAt(0);
        switch (c) {
            case 90:
                return 'A';
            case 122:
                return 'a';
            default:
                return String.fromCharCode(++c);
        }
    });
}

//$(document).keypress(function(e) {
//    if(e.which == 13) {
//        alert('You pressed enter!');
//    }
//});