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
});

