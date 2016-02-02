$(window).ready(function () {
    if ($("#radioLien").is(':checked')) {
        $("label[for=lien]").show();
        $("#lien").show();
        $("label[for=categorie]").show();
        $("#categorie").show();
    }
    if ($("#radioCategorie").is(':checked')) {
        $("label[for=lien]").hide();
        $("#lien").hide();
        $("label[for=categorie]").hide();
        $("#categorie").hide();
    }
    $("#radioLien").change(function () {
        if ($("#radioLien").is(':checked')) {
            $("label[for=lien]").show();
            $("#lien").show();
            $("label[for=categorie]").show();
            $("#categorie").show();
        }
        if ($("#radioCategorie").is(':checked')) {
            $("label[for=lien]").hide();
            $("#lien").hide();
            $("label[for=categorie]").hide();
            $("#categorie").hide();
        }
    });
    $("#radioCategorie").change(function () {
        if ($("#radioLien").is(':checked')) {
            $("label[for=lien]").show();
            $("#lien").show();
            $("label[for=categorie]").show();
            $("#categorie").show();
        }
        if ($("#radioCategorie").is(':checked')) {
            $("label[for=lien]").hide();
            $("#lien").hide();
            $("label[for=categorie]").hide();
            $("#categorie").hide();
        }
    });
    
    $("#selectLien").change(function () {
        if ($("#radioLien").is(':checked')) {
            $("label[for=lien]").show();
            $("#lien").show();
            $("label[for=categorie]").show();
            $("#categorie").show();
        }
        if ($("#radioCategorie").is(':checked')) {
            $("label[for=lien]").hide();
            $("#lien").hide();
            $("label[for=categorie]").hide();
            $("#categorie").hide();
        }
    });

});
