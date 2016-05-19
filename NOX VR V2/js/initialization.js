
function linkSlider() {
    $('#menuPlaquetteCommercialeDiv').click(function () {
        $('html, body').animate({
            scrollTop: $('#PlaquetteComDiv').offset().top
        }, 'slow');
    });

    $('#logoNOXVR').click(function () {
        $('html, body').animate({
            scrollTop: $('#NOXVRLogoDiv').offset().top
        }, 'slow');
    });
}

function imagesTitlePositioning() {
    $('.titleContainer h2').each(function () {
        var top = ($(this).parent('.titleContainer').height() - $(this).height()) / 2;
        $(this).css('top', top);
    });
}

function vignettesTitlePositioning() {
    $('.vignettesImageContainer h2').each(function () {
        var top = ($(this).parent('div').height() - $(this).height()) / 2;
        var width = $(this).prev('img').width();
        var left = ($(this).parent('div').width() - width) / 2;
        $(this).css('top', top);
        $(this).css('width', width);
        $(this).css('left', left);
    });
}

function diporamaPositioning() {
    var top = ($('#NOXVRLogoDiv').height() - $('.makeMeScrollable').height()) / 2;
    $('.makeMeScrollable').css('top', top);
}

function vignettesPositioning() {
    var marginTop = $('#vignettesProjet').height() - $('.vignettesImageContainer').height() * 2;
    $('.vignettesLink:nth-child(n+4) .vignettesImageContainer').css('margin-top', marginTop);
}

function diaporamaMaxHeight() {
    var maxHeight = $('#NOXVRLogoDiv').height() * 0.5;
    $('.makeMeScrollable img').css('height', maxHeight);
}

$(window).load(function () {
    linkSlider();
    diaporamaMaxHeight();
    diporamaPositioning();
    imagesTitlePositioning();
});

$(window).resize(function () {
    diaporamaMaxHeight();
    diporamaPositioning();
    imagesTitlePositioning();
});
