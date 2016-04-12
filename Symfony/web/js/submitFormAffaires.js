$(window).load(function () {

//    $('form fieldset legend').delay(500).css('text-align', 'left');
//    $('form fieldset legend').delay(500).css('padding', '0% 0.5% 0% 0.5%');

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

    toggleCheckboxAjoutDonnees();

    $('#formAjoutChamp_Type').change(function () {
        toggleCheckboxAjoutDonnees();
    });

    $('#formSuppresionPositionChamp_Supprimer').click(function () {
        return confirm('Attention, si vous modifiez ce modèle toutes les données des suivis associés seront supprimées !');
    });

    resizeFormLabelAndData($('.labelFormulaireRemplissageSuiviCloture'), $('.champFormulaireRemplissageSuiviCloture'), $('.formulaireRemplissageSuiviCloture p'));

    $(window).resize(function () {
        if ($('.formulaireRemplissageSuivi').length) {
            location.reload();
        }
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

function resizeFormLabelAndData(label, data, formParagraph) {
    label.css({
        'display': 'block',
        /*    width: 40%;*/
        'float': 'left',
        'text-align': 'right',
        'white-space': 'nowrap'
    });
    formParagraph.css({
        'width': '70%',
        'margin': 'auto'
    });
    data.css({
        'margin-bottom': '2%',
        'text-align': 'center'
    });

    label.width(getMaxChildWidth(label));
    data.width((formParagraph.width() - label.width()) * 0.9);
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