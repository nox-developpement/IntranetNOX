$(window).ready(function () {
    imageResizing();
});

$(window).resize(function () {
    imageResizing();
});

function imageResizing() {
    $('#divAffichageImages img').css('max-height', $(window).height() / 5);
    $('#divAffichageImages img').css('cursor', "url('http://" + $(location).attr('host') + "/Symfony/web/images/Plus-32.cur'), auto");

    var agrandi = false;

    $('#divAffichageImages img').click(function () {
        if ($(this).css('max-height') !== 'none') {
            $(this).removeAttr('style');
            if ($(this)[0].naturalHeight > $('#divAffichageImages').width()) {
                $(this).css('width', '100%');
            } else {
                $(this).css('width', $(this)[0].naturalHeight);
            }
            $(this).css('cursor', "url('http://" + $(location).attr('host') + "/Symfony/web/images/Minus-32.cur'), auto");
        } else {
            $(this).removeAttr('style');
            $(this).css('max-height', $(window).height() / 5);
            $(this).css('cursor', "url('http://" + $(location).attr('host') + "/Symfony/web/images/Plus-32.cur'), auto");
        }
    });
}

