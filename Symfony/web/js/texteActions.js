
$('#formulaireTexte').hide();
$('#formulaireTexte #form_modifier').hide();
$('#formulaireTexte').prev().css('display','inline-block');

$(document).ready(function () {
    var edit = false;

    $('#texteEditButton').click(function () {
        if (edit === true) {
            $('#formulaireTexte').toggle();
            $('#form_modifier').click();

        } else {
            edit = true;
            $('.zoneEdition').css('height','65%');
            $('#cke_1_contents').css('height', $('.zoneEdition').height());
            $('.textEncart').text($('.zoneTexte').text());
            $('.zoneTexte').text('');
            $('#texteEditButton').text('Sauvegarder');
            $('#formulaireTexte').toggle();
        }
    });
});





/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


