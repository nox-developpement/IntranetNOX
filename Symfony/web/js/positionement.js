
function resizeLogin() {
    var height = $('#bandeau').height() - 1;

    $('#login').height(height);
    $('#identifiants').height(height);
    $('#divRoleUtilisateur').css('float', 'right');
    $('#administrationBouton').css('float', 'right');

    //var marge = parseInt($('.messageAcceuil').css('margin-left')) + (($('.messageAcceuil').width() - $('#divNews').width()) / 2);
    //$('#divNews').css('margin-left', marge);

}

$(window).ready(function () {
    setTimeout(function () {
        resizeLogin();
    }, 10);
    
    $('#Keywords p').css('font-size', $('#Keywords p').height());
});

$(window).resize(function () {
    resizeLogin();
});

