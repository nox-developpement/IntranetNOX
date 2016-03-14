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

    $('.formulaireRemplissageSuivi select').each(function () {
        if ($(this).val() === '') {
            $(this).next().next().show();
            $(this).next().next().next().attr('required', 'required');
            $(this).next().next().next().show();
        } else {
            $(this).next().next().hide();
            $(this).next().next().next().val('');
            $(this).next().next().next().removeAttr('required');
            $(this).next().next().next().hide();
        }
    });

    $('.formulaireRemplissageSuivi select').change(function () {
        if ($(this).val() === '') {
            $(this).next().next().show();
            $(this).next().next().next().attr('required', 'required');
            $(this).next().next().next().show();
        } else {
            $(this).next().next().hide();
            $(this).next().next().next().val('');
            $(this).next().next().next().removeAttr('required');
            $(this).next().next().next().hide();
        }
    });

    toggleCheckboxAjoutDonnees();

    $('#formAjoutChamp_Type').change(function () {
        toggleCheckboxAjoutDonnees();
    });

    $('#formSuppresionPositionChamp_Supprimer').click(function () {
        return confirm('Attention, si vous modifiez ce modèle toutes les données des suivis associés seront supprimées !');
    });
});

function toggleCheckboxAjoutDonnees() {
    if ($('#formAjoutChamp_Type option:selected').text() === 'Données') {
        $('label[for="formAjoutChamp_AjoutDonnees"]').show();
        $('#formAjoutChamp_AjoutDonnees').show();
        $('#formAjoutChamp_AjoutDonnees').attr('requierd', 'required');
    } else {
        $('label[for="formAjoutChamp_AjoutDonnees"]').hide();
        $('#formAjoutChamp_AjoutDonnees').hide();
        $('#formAjoutChamp_AjoutDonnees').removeAttr('requieed');
    }
}

