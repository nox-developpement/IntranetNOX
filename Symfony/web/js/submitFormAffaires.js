$(window).ready(function () {
    $('.selectFormulaireSelectionAgence').change(function () {
        $('.formulaireSelectionAgence').submit();
    });

    $('.selectFormulaireSelectionDossier').change(function () {
        $('.formulaireSelectionDossier').submit();
//        $(document).ready(function () {
//            $(this).scrollTop(300);
//        });
    });

    if ($('.selectFormulaireSelectionDossier').val() !== '' && $('.selectFormulaireSelectionDossier').val() !== undefined) {
        $('#contenu').scrollTop($('#contenu')[0].scrollHeight);
    }

    $('#formSelectionSuivi_Supprimer').click(function () {
        return confirm('Voulez-vous vraiment supprimer le suivi ' + $('#formSelectionSuivi_Suivi option:selected').text() + " ?");
    });

    $('#formSelectionVersion_Supprimer').click(function () {
        return confirm('Voulez-vous vraiment supprimer le suivi ' + $('#formSelectionVersion_Suivi option:selected').text() + " ? Cela supprimera également toutes les liaison et suivis basés sur ce modèle.");
    });

    $('.selectFormulaireSelectionVersionSuivi').change(function () {
        $('.formulaireSelectionVersionSuivi').submit();
    });

    $('#formSuppresionProfil_Supprimer').click(function () {
        return confirm('Voulez-vous vraiment supprimer le profil ' + $('#formSuppresionProfil_Nom option:selected').text() + ' ? Cela supprimera également les modèles, champs et suivis associées.');
    });

    $('#formSuppressionChamp_Supprimer').click(function () {
        return confirm('Voulez-vous vraiment supprimer le champ ' + $('#formSuppressionChamp_Nom option:selected').text() + ' ? Cela supprimera également les modèles et suivis associées.');
    });

    $('#formCloturationSuivi_Cloturer').click(function () {
        return confirm('Voulez-vous vraiment cloturer le suivi ? Vous ne pourrez plus l\'éditer');
    });

    $('#formSelectionVersionSuivi_Supprimer').click(function () {
        return confirm('Voulez-vous vraiment supprimer cette version du suivi ? Vous ne pourez pas la récupérer.');
    });
});

