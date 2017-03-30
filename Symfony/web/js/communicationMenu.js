///* 
// * To change this license header, choose License Headers in Project Properties.
// * To change this template file, choose Tools | Templates
// * and open the template in the editor.
// */
//
//InterneActive = false;
//ExterneActive = false;
//SIActive = false;
//MarketingActive = false;
//InterneMouseout = $('#communicationInterneBouton figure img').attr('onmouseout');
//ExterneMouseout = $('#communicationExterneBouton figure img').attr('onmouseout');
//SIMouseout = $('#communicationSIBouton figure img').attr('onmouseout');
//MarketingMouseout = $('#marketingBouton figure img').attr('onmouseout');
//InterneSrc = $('#communicationInterneBouton figure img').attr('src');
//ExterneSrc = $('#communicationExterneBouton figure img').attr('src');
//SISrc = $('#communicationSIBouton figure img').attr('src');
//MarketingSrc = $('#marketingBouton figure img').attr('src');
//OrganigrammesActive = false;
//SupportActive = false;
//VideoActive = false;
//ReseauxSociauxActive = false;
//BanqueImageActive = false;
//function checkActive() {
//    if (InterneActive) {
//        $('#communicationInterneBouton figure img').removeAttr('onmouseout');
//    } else {
//        $('#communicationInterneBouton figure img').attr('onmouseout', InterneMouseout);
//        $('#communicationInterneBouton figure img').attr('src', InterneSrc);
//    }
//
//    if (ExterneActive) {
//        $('#communicationExterneBouton figure img').removeAttr('onmouseout');
//    } else {
//        $('#communicationExterneBouton figure img').attr('onmouseout', ExterneMouseout);
//        $('#communicationExterneBouton figure img').attr('src', ExterneSrc);
//    }
//
//    if (SIActive) {
//        $('#communicationSIBouton figure img').removeAttr('onmouseout');
//    } else {
//        $('#communicationSIBouton figure img').attr('onmouseout', SIMouseout);
//        $('#communicationSIBouton figure img').attr('src', SISrc);
//    }
//
//    if (MarketingActive) {
//        $('#marketingBouton figure img').removeAttr('onmouseout');
//    } else {
//        $('#marketingBouton figure img').attr('onmouseout', MarketingMouseout);
//        $('#marketingBouton figure img').attr('src', MarketingSrc);
//    }
//}
//
//
//$('#communicationInterneBouton').click(function () {
//
//    ExterneActive = false;
//    SIActive = false;
//    MarketingActive = false;
//    if (InterneActive === false) {
//        $('#communicationMenu').remove();
//        $('#espaceMenu').append("<ul id='communicationMenu'><li><a href='#' title='Trombinoscope'>Trombinoscope</a></li><li id='organigrammesBouton'><a title='Organigrammes' id='organigrammesLien'>Organigrammes</a></li><li><a href='#' title='aller à la section 1'>Annuaire Agences</a></li><li><a href='#' title='aller à la section 1'>NoxNews</a></li><li id='CEBouton'><a href='#' title='CE' id='CELien'>CE</a></li><li id='CHSCTBouton'><a href='#' title='CHSCT' id='CHSCTLien'>CHSCT</a></li></ul>");
//        InterneActive = true;
//        checkActive();
//    }
//
//});
//$('#communicationExterneBouton').click(function () {
//
//    InterneActive = false;
//    SIActive = false;
//    MarketingActive = false;
//    if (ExterneActive === false) {
//        $('#communicationMenu').remove();
//        $('#espaceMenu').append
//                (
//                        "<ul id='communicationMenu'>\n\
//<li id='supportsBouton'><a id='supportsLien' title='Supports'>Supports</a></li>\n\
//<li id='videoBouton'><a href='#' title='Vidéo Institutionnelle' id='videoLien'>Vidéo Institutionnelle</a></li>\n\
//<li><a href='" + Routing.generate('nox_intranet_coummunication_externe_noxletters') + "' title='NoxLetters'>NoxLetters</a></li>\n\
//<li><a href='" + Routing.generate('nox_intranet_coummunication_externe_noxdanslapresse') + "' title='Nox dans la presse'>Nox dans la presse</a></li>\n\
//<li id='reseauxSociauxBouton'><a id='reseauxSociauxLien' title='Nox sur les réseaux sociaux'>Nox sur les réseaux sociaux</a></li>\n\
//<li id='banqueImageBouton'><a id='banqueImageLien' title='Banque d&#39;images'>Banque d&#39;images</a></li>\n\
//</ul>"
//                        );
//        ExterneActive = true;
//        checkActive();
//    }
//
//});
//$('#communicationSIBouton').click(function () {
//
//    InterneActive = false;
//    ExterneActive = false;
//    MarketingActive = false;
//    if (SIActive === false) {
//        $('#communicationMenu').remove();
//        $('#espaceMenu').append("<ul id='communicationMenu'><li><a href='" + Routing.generate('nox_intranet_news_SI') + "' title='aller à la section 1'>News SI</a></li></ul>");
//        SIActive = true;
//        checkActive();
//    }
//
//});
//$('#marketingBouton').click(function () {
//
//    ExterneActive = false;
//    SIActive = false;
//    InterneActive = false;
//    if (MarketingActive === false) {
//        $('#communicationMenu').remove();
//        $('#espaceMenu').append("<ul id='communicationMenu'><li><a href='#' title='Nox à la conquête'>Nox à la conquête</a></li><li><a href='#' title='Il y a forcément plus simple'>Il y a forcément plus simple</a></li><li><a href='#' title='Nox fournisseur de talents'>Nox fournisseur de talents</a></li><li><a href='#' title='Nos 5 valeurs'>Nos 5 valeurs</a></li></ul>");
//        MarketingActive = true;
//        checkActive();
//    }
//
//});
//$('#espaceMenu').on('click', '#organigrammesLien', function () {
//    SupportActive = false;
//    VideoActive = false;
//    ReseauxSociauxActive = false;
//    BanqueImageActive = false;
//    if (OrganigrammesActive === false) {
//        $('#communicationSousMenu').remove();
//        $('#organigrammesBouton').append("<ul id='communicationSousMenu'><li><a href='#' title='Organigrammes Stratégique'>Organigrammes Stratégique</a></li><li><a href='" + Routing.generate('nox_intranet_communication_download') + "' title='Organigrammes Fonctionnel'>Organigrammes Fonctionnel</a></li><li><a href='#' title='Organigrammes Agence'>Organigrammes Agence</a></li></ul>");
//        $('#organigrammesLien:hover').css('background-color', '#021C2D');
//        $('#organigrammesLien:hover').css('color', 'white');
//        OrganigrammesActive = true;
//    } else {
//        $('#communicationSousMenu').remove();
//        OrganigrammesActive = false;
//    }
//});
//$('#espaceMenu').on('click', '#supportsLien', function () {
//    OrganigrammesActive = false;
//    VideoActive = false;
//    ReseauxSociauxActive = false;
//    BanqueImageActive = false;
//    if (SupportActive === false) {
//        $('#communicationSousMenu').remove();
//        $('#supportsBouton').append
//                (
//                        "<ul id='communicationSousMenu'>\n\
//<li><a href='" + Routing.generate('nox_intranet_coummunication_externe_supports_plaquetteinstitutionnelle') + "' title='Plaquette institutionnelle'>Plaquette institutionnelle</a></li>\n\
//<li><a href='" + Routing.generate('nox_intranet_coummunication_externe_supports_presentationpowerpoint') + "' title='Présentation Powerpoint'>Présentation Powerpoint</a></li>\n\
//<li><a href='" + Routing.generate('nox_intranet_coummunication_externe_supports_fichesmetier') + "' title='Fiches Métier'>Fiches Métier</a></li>\n\
//<li><a href='" + Routing.generate('nox_intranet_coummunication_externe_supports_dossiertypeappeloffre') + "' title='Dossier type appel d&#39;offre'>Dossier type appel d&#39;offre</a></li>\n\
//<li><a href='" + Routing.generate('nox_intranet_coummunication_externe_supports_cvtype') + "' title='CV Type'>CV Type</a></li>\n\
//<li><a href='" + Routing.generate('nox_intranet_coummunication_externe_supports_courrierstype') + "' title='Courriers Type'>Courriers Type</a></li>\n\
//<li><a href='" + Routing.generate('nox_intranet_coummunication_externe_supports_papierentete') + "' title='Papier à entête'>Papier à entête</a></li>\n\
//</ul>"
//                        );
//        $('#supportsLien:hover').css('background-color', '#021C2D');
//        $('#supportsLien:hover').css('color', 'white');
//        SupportActive = true;
//    } else {
//        $('#communicationSousMenu').remove();
//        SupportActive = false;
//    }
//});
//$('#espaceMenu').on('click', '#videoLien', function () {
//    OrganigrammesActive = false;
//    SupportActive = false;
//    ReseauxSociauxActive = false;
//    BanqueImageActive = false;
//    if (VideoActive === false) {
//        $('#communicationSousMenu').remove();
//        $('#videoBouton').append
//                (
//                        "<ul id='communicationSousMenu'>\n\
//<li><a href='" + Routing.generate('nox_intranet_coummunication_externe_videoinstitutionnelle_videoinstitutionnelle') + "' title='Vidéo Institutionnelle'>Vidéo Institutionnelle</a></li>\n\
//<li><a href='" + Routing.generate('nox_intranet_coummunication_externe_videoinstitutionnelle_survoldronepolygoneriviera') + "' title='Survol drone polygone Riviera'>Survol drone polygone Riviera</a></li>\n\
//</ul>"
//                        );
//        $('#videoLien:hover').css('background-color', '#021C2D');
//        $('#videoLien:hover').css('color', 'white');
//        VideoActive = true;
//    } else {
//        $('#communicationSousMenu').remove();
//        VideoActive = false;
//    }
//});
//$('#espaceMenu').on('click', '#reseauxSociauxLien', function () {
//    OrganigrammesActive = false;
//    SupportActive = false;
//    VideoActive = false;
//    BanqueImageActive = false;
//    if (ReseauxSociauxActive === false) {
//        $('#communicationSousMenu').remove();
//        $('#reseauxSociauxBouton').append
//                (
//                        "<ul id='communicationSousMenu'>\n\
//<li><a href='https://www.facebook.com/Groupe-Nox-140402782816064/' title='Facebook' target='_blank'>Facebook</a></li>\n\
//<li><a href='https://www.linkedin.com/company/groupe-nox' title='LinkedIn' target='_blank'>LinkedIn</a></li>\n\
//<li><a href='http://fr.viadeo.com/fr/company/groupe-nox' title='Viadeo' target='_blank'>Viadeo</a></li>\n\
//<li><a href='https://www.youtube.com/user/bammezn/videos' title='YouTube' target='_blank'>YouTube</a></li>\n\
//</ul>"
//                        );
//        $('#reseauxSociauxLien:hover').css('background-color', '#021C2D');
//        $('#reseauxSociauxLien:hover').css('color', 'white');
//        ReseauxSociauxActive = true;
//    } else {
//        $('#communicationSousMenu').remove();
//        ReseauxSociauxActive = false;
//    }
//});
//$('#espaceMenu').on('click', '#banqueImageLien', function () {
//    OrganigrammesActive = false;
//    SupportActive = false;
//    VideoActive = false;
//    ReseauxSociauxActive = false;
//    if (BanqueImageActive === false) {
//        $('#communicationSousMenu').remove();
//        $('#banqueImageBouton').append(
//                "<ul id='communicationSousMenu'>\n\
//<li><a href='" + Routing.generate('nox_intranet_coummunication_externe_banqueimage_logonox') + "' title='Logo Nox'>Logo Nox</a></li>\n\
//<li><a href='" + Routing.generate('nox_intranet_coummunication_externe_banqueimage_imagessiteinternet') + "' title='Celles du site internet'>Celles du site internet</a></li>\n\
//<li><a href='" + Routing.generate('nox_intranet_coummunication_externe_banqueimage_imagessupports') + "' title='Celles des supports'>Celles des supports</a></li>\n\
//</ul>"
//                );
//        $('#banqueImageLien:hover').css('background-color', '#021C2D');
//        $('#banqueImageLien:hover').css('color', 'white');
//        BanqueImageActive = true;
//    } else {
//        $('#communicationSousMenu').remove();
//        BanqueImageActive = false;
//    }
//});
//
//
