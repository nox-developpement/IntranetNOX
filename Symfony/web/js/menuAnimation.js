// Fait défiller les catégories et les news au sein des catégories sur la page d'accueil.
function DivNewsSliding() {
    if ($('.DivMaj').length) {
        $('.DivMaj').delay(10000).each(function (index) {
            $(this).delay(10000 * index).slideToggle(1500, 'easeOutQuart', function () {
                $('#zoneNewsAccueil').append($(this));
                $(this).slideToggle(1500, 'easeOutQuart');
            });
        }).promise().done(function () {
            DivNewsSliding();
        });
    }
}

// Fait disparaitre les alertes après 7 secondes d'affichage.
function alertSlideUp() {
    $('.alert').each(function () {
        $(this).delay(7000).slideUp(1500, 'linear');
    });
}

$(window).load(function () {
    alertSlideUp();
});
