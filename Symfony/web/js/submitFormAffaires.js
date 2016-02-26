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
        return confirm('Voulez-vous vraiment supprimer le suivi ' + $('.selectFormulaireSelectionVersion:selected').text() + " ?");
    });

    $('.selectFormulaireSelectionVersionSuivi').change(function () {
        $('.formulaireSelectionVersionSuivi').submit();
    });

    $('#formSelectionSuivi_Supprimer').click(function () {
        return confirm('Voulez-vous vraiment supprimer le suivi ' + $('.selectFormulaireAdministrationAjoutProfil:selected').text() + " ?");
    });

    $('#formSuppresionProfil_Supprimer').click(function () {
        return confirm('Voulez-vous vraiment supprimer le profil ? Cela supprimera également les modèle, champs et suivis associées.');
    });

    $('#formSuppressionChamp_Supprimer').click(function () {
        return confirm('Voulez-vous vraiment supprimer le champ ? Cela supprimera également les modèle.');
    });

    $('#formDonneesSuivi_Cloturer').click(function () {
        return confirm('Voulez-vous vraiment cloturer le suivi ? Vous ne pourrez plus l\'éditer');
    });

});

