
$(document).ready(function () {

    $('#formulaireTexteEncart').hide();
    $('#formulaireTexteEncart #form_modifier').hide();
    $('#formulaireTexteEncart').prev().css('display', 'inline-block');

    var edit = false;

    $('#texteEncartImg').click(function () {
        if (edit === true) {
            $('#formulaireTexteEncart').toggle();
            $('#form_modifier').click();

        } else {
            edit = true;
            $('.textEncartField').text($('.messageAcceuil h3').nextUntil("#formulaireTexteEncart"));
            $('.messageAcceuil h3').next().text('');
            $('#formulaireTexteEncart').toggle();
        }
    });
});





