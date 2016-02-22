$(window).ready(function () {
    $('.selectFormulaireSelectionAgence').change(function () {
        $('.formulaireSelectionAgence').submit();
    });

    $('.selectFormulaireSelectionDossier').change(function () {
        $('.formulaireSelectionDossier').submit();
    });

    $('#formSelectionVersion_Supprimer').click(function () {
        return confirm('Voulez vous vraiment supprimer le fichier ' + $('.selectFormulaireSelectionVersion').val().replace(/.*(\/|\\)/, '') + " ?");
    });

    $('#formSelectionDossier_Supprimer').click(function () {
        return confirm('Voulez vous vraiment supprimer le suivi ' + $('.selectFormulaireSelectionDossier option:selected').text().replace(/.*(\/|\\)/, '') + " ?");
    });
});

