/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(window).ready(function () {
    $("#materiel").change(function () {
        if ($('#materiel').is(':checked')) {
            $('#materielSelection').show();
        } else {
            $('#materielSelection').hide();
        }
    });
    $("#logicielCheckbox").change(function () {
        if ($('#logicielCheckbox').is(':checked')) {
            $('#textAreaLogiciel').show();
        } else {
            $('#textAreaLogiciel').hide();
        }
    });
    $('#dateLivraison').on('keyup', function () {
        $('#dateLivraison').val($('#dateLivraison').val().replace(/ /g, ''));
        if ($('#dateLivraison').val().search(/[a-zA-Z]/) > -1) {
            $('#dateLivraison').val($('#dateLivraison').val().substring(0, $('#dateLivraison').val().length - 1));
            alert("Veuillez saisir uniquement des chiffres !");
        }
        if ($('#dateLivraison').val().replace(/ /g, '').length === 2) {
            $('#dateLivraison').val($('#dateLivraison').val() + '/');
        }
        if ($('#dateLivraison').val().replace(/ /g, '').length === 5) {
            $('#dateLivraison').val($('#dateLivraison').val() + '/');
        }
        if ($('#dateLivraison').val().replace(/ /g, '').length > 10) {
            $('#dateLivraison').val($('#dateLivraison').val().substring(0, $('#dateLivraison').val().length - 1));
            alert("Veuillez saisir une date de format 'jj/mm/aaaa' !");
        }
    });
});

