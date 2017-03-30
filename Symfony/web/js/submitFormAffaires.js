$(window).load(function () {

    $('.selectFormulaireSelectionAgence').change(function () {
        $('.formulaireSelectionAgence').submit();
    });

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

    $('#formAjoutChamp_Type').change(function () {
        toggleCheckboxAjoutDonnees();
    });

    $('#formSuppresionPositionChamp_Supprimer').click(function () {
        return confirm('Attention, si vous modifiez ce modèle toutes les données des suivis associés seront supprimées !');
    });

    if ($('#formCloturationSuivi_Cloturer').attr('disabled') === "disabled") {
        $('#formCloturationSuivi_Cloturer').wrap("<span class='tooltipButtonAACloturer'></span>");
        $('.tooltipButtonAACloturer').prepend("<span class='tooltipButtonAACloturerText'>Le suivi doit contenir au moins une sauvegarde pour être clôturé.</span>");
    }

    if ($('#formDonneesSuivi_Generate').attr('disabled') === "disabled") {
        $('#formDonneesSuivi_Generate').wrap("<span class='tooltipButtonAAGenerate'></span>");
        $('.tooltipButtonAAGenerate').prepend("<span class='tooltipButtonAAGenerateText'>Sauvegardez le suivi pour pouvoir générer un fichier Excel.</span>");
    }
});

function getMaxChildWidth(sel) {
    max = 0;
    sel.each(function () {
        c_width = ($(this).width());
        if (c_width > max) {
            max = c_width;
        }
    });
    return max;
}

function hideAndShowDataAdding() {

    $('.formulaireRemplissageSuivi select').each(function () {

        if ($(this).val() === '') {
            $('label[for=' + $(this).attr('id') + 'newData]').show();
            $("#" + $(this).attr('id') + "newData").attr('required', 'required');
            $("#" + $(this).attr('id') + "newData").show();
            $("#" + $(this).attr('id') + "newData").next().show();
        } else {
            $('label[for=' + $(this).attr('id') + 'newData]').hide();
            $("#" + $(this).attr('id') + "newData").val('');
            $("#" + $(this).attr('id') + "newData").removeAttr('required');
            $("#" + $(this).attr('id') + "newData").hide();
            $("#" + $(this).attr('id') + "newData").next().hide();
        }
    });

    $('.formulaireRemplissageSuivi select').change(function () {
        if ($(this).val() === '') {
            $('label[for=' + $(this).attr('id') + 'newData]').show();
            $("#" + $(this).attr('id') + "newData").attr('required', 'required');
            $("#" + $(this).attr('id') + "newData").show();
            $("#" + $(this).attr('id') + "newData").next().show();
        } else {
            $('label[for=' + $(this).attr('id') + 'newData]').hide();
            $("#" + $(this).attr('id') + "newData").val('');
            $("#" + $(this).attr('id') + "newData").removeAttr('required');
            $("#" + $(this).attr('id') + "newData").hide();
            $("#" + $(this).attr('id') + "newData").next().hide();
        }
    });
}