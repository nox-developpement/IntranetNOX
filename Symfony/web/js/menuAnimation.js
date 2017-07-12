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

$(window).load(function () {
    $('.flashbag').each(function () {
        $(this).delay(7000).slideUp(1500, 'linear');
    });
    $('.flashbagErreur').each(function () {
        $(this).delay(7000).slideUp(1500, 'linear');
    });
});
