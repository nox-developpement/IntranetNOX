$(window).ready(function () {
    $('#divAffichageImages img').css('max-height', $(window).height() / 5);
    $('#divAffichageImages img').css('cursor', "url('http://" + $(location).attr('host') + "/Symfony/web/images/Plus-32.cur'), auto");

    var agrandi = false;

//    $('#divAffichageImages img').click(function () {
//        alert($(this).attr('src'));
//        download("C:/wamp/www" + $(this).attr('src'));
//    });

    $('#divAffichageImages img').click(function () {
        if ($(this).css('max-height') !== 'none') {
            $(this).removeAttr('style');
            $(this).css('width', $(this).naturalHeight);
            $(this).css('cursor', "url('http://" + $(location).attr('host') + "/Symfony/web/images/Minus-32.cur'), auto");
        } else {
            $(this).removeAttr('style');
            $(this).css('max-height', $(window).height() / 5);
            $(this).css('cursor', "url('http://" + $(location).attr('host') + "/Symfony/web/images/Plus-32.cur'), auto");
        }
    });
});


//function download(filename) {
//    window.location = Routing.generate('nox_intranet_downloadImages', {image: filename});
//}

