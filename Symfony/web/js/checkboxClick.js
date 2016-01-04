
function buttonInit() {
    $('.modifier').prop('disabled', 'true');
    $('.modifier').css('background-color', '#C6C6C6');
    $('.modifier').css('color', 'black');
}

$(window).ready(function () {
    buttonInit();
});

function checkboxPublicateurClick(context) {

    $(context).parent().parent().find('.modifier').css('background-color', '#021C2D');
    $(context).parent().parent().find('.modifier').css('color', 'white');
    $(context).parent().parent().find('.modifier:hover').css('background-color', 'white');
    $(context).parent().parent().find('.modifier:hover').css('color', '#021C2D');
    $(context).parent().parent().find('.modifier').removeAttr("disabled");
    $(context).parent().parent().find('.modifier').css('cursor', 'pointer');
}

function checkboxAdminClick(context) {

    $(context).parent().parent().parent().find('.modifier').css('background-color', '#021C2D');
    $(context).parent().parent().parent().find('.modifier').css('color', 'white');
    $(context).parent().parent().parent().find('.modifier:hover').css('background-color', 'white');
    $(context).parent().parent().parent().find('.modifier:hover').css('color', '#021C2D');
    $(context).parent().parent().parent().find('.modifier').removeAttr("disabled");
    $(context).parent().parent().parent().find('.modifier').css('cursor', 'pointer');
}


