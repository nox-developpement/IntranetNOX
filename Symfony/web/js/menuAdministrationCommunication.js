
function showSubMenu(sousMenu, contexte) {

    $('.menuImg').show();
    $('.menuImgDown').hide();

    $('.sousMenu').each(function () {
        if ('#' + $(this).attr('id') !== sousMenu) {
            $(this).hide();
        }
    });

    $(sousMenu).slideToggle(function () {
        if ($(sousMenu).is(':visible')) {
            $(contexte).find('.menuImg').hide();
            $(contexte).find('.menuImgDown').show();
        } else {
            $(contexte).find('.menuImg').show();
            $(contexte).find('.menuImgDown').hide();
        }
    });
}

function showSubMenu2(sousMenu, contexte) {

    $('.menuImg').show();
    $('.menuImgDown').hide();

    $('.sousMenu').each(function () {
        if ('#' + $(this).attr('id') !== sousMenu) {
            $(this).hide();
        }
    });

    $('.menu').each(function () {
        if ('#' + $(this).attr('id') !== sousMenu) {
            $(this).hide();
        }
    });

    $(sousMenu).slideToggle(function () {
        if ($(sousMenu).is(':visible')) {
            $(contexte).find('.menuImg').hide();
            $(contexte).find('.menuImgDown').show();
        } else {
            $(contexte).find('.menuImg').show();
            $(contexte).find('.menuImgDown').hide();
        }
    });
}