/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function menuAnimation() {

    $('.liens').mouseover(function () {
        $(this).animate({'color': '#021C2D', 'background-color': '#fff'}, '400');
    });

    $('.liens').mouseout(function () {
        $(this).animate({'background-color': '#021C2D', 'color': '#fff'}, '400');
    });
}