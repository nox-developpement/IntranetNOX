
function vignettesSliding(numPage) {
    $.ajax({url: '../php/ajaxProjectGetter.php',
        dataType: 'html',
        data: {numPage: numPage},
        type: 'post',
        success: function (projects) {

            var fadeInTime = 500;
            $('#vignettesProjet').html(projects);
            $('.vignettesContainer').css('opacity', 0);
            var rotateTime = 0;
            $('.vignettesContainer').each(function () {
                fadeInTime = fadeInTime + 50;
                $(this).delay(rotateTime).transition({
                    rotateY: '360deg',
                    opacity: 1
                }, 750);
                rotateTime = rotateTime + 50;
            });
        }
    });
}
