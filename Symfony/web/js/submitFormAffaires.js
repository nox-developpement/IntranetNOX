$(window).ready(function () {
    $('.selectFormulaireSelectionAgence').change(function () {
        $('.formulaireSelectionAgence').submit();
    });

    $('.selectFormulaireSelectionDossier').change(function () {
        $('.formulaireSelectionDossier').submit();
        $(document).ready(function () {
            $(this).scrollTop(300);
        });
    });

    if ($('.selectFormulaireSelectionDossier').val() !== '') {
        $('#contenu').scrollTop($('#contenu').height());
    }

    $('#formSelectionVersion_Supprimer').click(function () {
        return confirm('Voulez vous vraiment supprimer le suivi ' + $('.selectFormulaireSelectionVersion:selected').text() + " ?");
    });

    $('.selectFormulaireSelectionVersionSuivi').change(function () {
        $('.formulaireSelectionVersionSuivi').submit();
    });

});

