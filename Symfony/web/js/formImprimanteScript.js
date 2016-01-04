

if ($(".radioFormulaireImprimante input[value='tra']").is(':checked')) {
    $('.formTraceur').show();
} else {
    $('.formTraceur').hide();
}

$(".radioFormulaireImprimante").change(function () {
    if ($(".radioFormulaireImprimante input[value='tra']").is(':checked')) {
        $('.formTraceur').show();
    } else {
        $('.formTraceur').hide();
    }
});