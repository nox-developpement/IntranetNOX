
function resizeLogin() {
    var height = $('#bandeau').height() - 1;

    $('#login').height(height);
    $('#identifiants').height(height);
    $('#divRoleUtilisateur').css('float', 'right');
    $('#administrationBouton').css('float', 'right');

    //var marge = parseInt($('.messageAcceuil').css('margin-left')) + (($('.messageAcceuil').width() - $('#divNews').width()) / 2);
    //$('#divNews').css('margin-left', marge);

}

function resizeTootltipLogin() {

    // Taille du Login/2 - taille de la Tooltip/2 - padding supérieur de la Tooltip.
    var top = $('.tooltipLogin').height() / 2 - $('.tooltipLogin .tooltipLoginText').height() / 2 - 5;

    $('.tooltipLogin .tooltipLoginText').css('top', top);
}

$(window).ready(function () {
    setTimeout(function () {
        resizeLogin();
    }, 10);
    setTimeout(function () {
        resizeTootltipLogin();
    }, 10);

    $('#Keywords p').css('font-size', $('#Keywords p').height());
});

$(window).resize(function () {
    resizeLogin();
    resizeTootltipLogin();
});

