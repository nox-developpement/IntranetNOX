/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function menuAnimation() {

    $('.liens').mouseover(function () {
        $(this).animate({'color': 'rgb(31,78,121)', 'background-color': '#fff'}, '400');
    });

    $('.liens').mouseout(function () {
        $(this).animate({'background-color': 'rgb(31,78,121)', 'color': '#fff'}, '400');
    });
}

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
