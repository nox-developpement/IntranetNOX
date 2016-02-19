
function buttonInit() {
    $('.modifier').prop('disabled', 'true');
    $('.modifier').css('background-color', 'rgb(242,242,242)');
    $('.modifier').css('color', 'rgb(31,78,121)');
    $('.modifier').css('cursor', 'not-allowed');
}

$(window).ready(function () {
    buttonInit();
});

function checkboxPublicateurClick(context) {

    $(context).parent().parent().find('.modifier').css('background-color', 'rgb(31,78,121)');
    $(context).parent().parent().find('.modifier').css('color', 'white');
    $(context).parent().parent().find('.modifier:hover').css('background-color', 'white');
    $(context).parent().parent().find('.modifier:hover').css('color', 'rgb(31,78,121)');
    $(context).parent().parent().find('.modifier').removeAttr("disabled");
    $(context).parent().parent().find('.modifier').css('cursor', 'pointer');
}

function checkboxAdminClick(context) {

    $(context).parent().parent().parent().find('.modifier').css('background-color', 'rgb(31,78,121)');
    $(context).parent().parent().parent().find('.modifier').css('color', 'white');
    $(context).parent().parent().parent().find('.modifier:hover').css('background-color', 'white');
    $(context).parent().parent().parent().find('.modifier:hover').css('color', 'rgb(31,78,121)');
    $(context).parent().parent().parent().find('.modifier').removeAttr("disabled");
    $(context).parent().parent().parent().find('.modifier').css('cursor', 'pointer');
}


