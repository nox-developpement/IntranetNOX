<?php

/* @NoxIntranetPointage/Pointage/pointagesCompilation.html.twig */
class __TwigTemplate_ecd490657f0b8b42ad1cbea920e416e371565b3a2bfe270e822fcff27becbb4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "@NoxIntranetPointage/Pointage/pointagesCompilation.html.twig", 1);
        $this->blocks = array(
            'titrePage' => array($this, 'block_titrePage'),
            'messageAccueil' => array($this, 'block_messageAccueil'),
            'sousMessageAccueil' => array($this, 'block_sousMessageAccueil'),
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["templateTitle"]) ? $context["templateTitle"] : null), "html", null, true);
    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["templateTitle"]) ? $context["templateTitle"] : null), "html", null, true);
    }

    // line 7
    public function block_sousMessageAccueil($context, array $blocks = array())
    {
        echo "<a href='";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Pointage/Aide/Prise en main des compilations.pdf"), "html", null, true);
        echo "' target='_blank' style='text-decoration: none;'>Prise en main des compilations</a>|<a href='";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Pointage/Aide/Prise en main du pointage Ass  Agence.pdf"), "html", null, true);
        echo "' target='_blank' style='text-decoration: none;'>Prise en main du pointage assistant(e) agence</a>";
    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        // line 10
        echo "
    <div id='loadingContent' style='display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; z-index: 100; background-image: url(";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/pointageLoading.svg"), "html", null, true);
        echo "); background-size: contain; background-repeat: no-repeat; background-position: center center;'></div>

    <div id='pointageSavingNotification' style='display: none; position: fixed; z-index: 500; background-color: rgba(41,154,11, 0.7); border: 1px outset white; border-radius: 10px; padding: 0.5%;'><p style='display: inline-block; margin: 0; font-size: 0.8vw; color: white;'>Sauvegarde en cours <img src='";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetpointage/images/savingNotification.svg"), "html", null, true);
        echo "' style='vertical-align: middle; height: 2em;'></p></div>

    <div id=\"pointageAlert\"><div id=\"pointageAlertText\"></div></div>

    <p id=\"validationStepNavigator\" style=\"width: 70%; margin: auto; margin-top: 0; text-align: center;\">
        <a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_pointages_compilation", array("validationStep" => "AA"));
        echo "\">Assistant(e)s agence - Correction/Validation compilation</a> |
        <a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_pointages_compilation", array("validationStep" => "DAManager"));
        echo "\">DA/Manager - Correction/Validation compilation</a> |
        <a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_pointages_compilation", array("validationStep" => "Final"));
        echo "\">Consultation des compilations validées</a>
    </p>

    <div class=\"pointageSelectionDateCompilation\">

        ";
        // line 25
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
        ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
        <fieldset>
            <legend>Compilation des pointages</legend>
            ";
        // line 29
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_RH")) {
            // line 30
            echo "                <div style=\"width: 100%; margin-bottom: 0.5em;\">
                    <label><input type=\"checkbox\" id=\"RHMode\" name=\"RHMode\" style=\"vertical-align: bottom;\" onchange=\"gestionPointageSetRHMode(\$(this));\" ";
            // line 31
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "cookies", array()), "get", array(0 => "RHMode"), "method") == "true")) {
                echo "checked";
            }
            echo ">Activer le mode DRH</label>
                </div><!--
            ";
        }
        // line 34
        echo "            --><div style=\"width: 50%; margin-bottom: 0.5em;\">
                ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Month", array()), 'label', array("label" => "Mois:"));
        echo "
                ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Month", array()), 'errors');
        echo "
                ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Month", array()), 'widget');
        echo "
            </div><!--
            --><div style=\"width: 50%; margin-bottom: 0.5em;\">
                ";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Year", array()), 'label', array("label" => "Année:"));
        echo "
                ";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Year", array()), 'errors');
        echo "
                ";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Year", array()), 'widget');
        echo "
            </div><!--
            --><div style=\"width: 100%; margin-bottom: 0.5em;\">
                ";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Etablissement", array()), 'label', array("label" => "Etablissement"));
        echo "<br />
                ";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Etablissement", array()), 'errors');
        echo "
                ";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Etablissement", array()), 'widget');
        echo "
            </div>
        </fieldset>
        ";
        // line 50
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "  

        <p id=\"pointageAValideNumber\" style=\"font-size: 1vw;\">
            Collaborateur(s) n'ayant pas remplis/validé leur pointage : <span id=\"collaborateurSansPointage\" style=\"color: red; text-decoration: underline; cursor: pointer;\">0</span>
        </p> 

    </div>

    <div id=\"pointageStatusDiv\">
        <div id=\"pointageStatusLabelGeneralContainer\">
            <div class='pointageStatusCompilationLabelContainer'><p class='pointageStatusLabel'>Assistant(e) agence</p></div><!--
            --><div class='pointageStatusCompilationLabelContainer'><p class='pointageStatusLabel'>DA/Manager</p></div><!--
            --><div class='pointageStatusCompilationLabelContainer'><p class='pointageStatusLabel'>Assistant(e) RH/DRH</p></div><!--
            --><div class='pointageStatusCompilationLabelContainer'><p class='pointageStatusLabel'>Validé</p></div><!--
            --></div>
        <div id=\"pointageStatus\">
            <div class='pointageStatusCompilationCircleContainer'><div class='pointageStatusCircle' step=0></div></div><!--
            --><div class='pointageStatusCompilationCircleContainer'><div class='pointageStatusCircle' step=1></div></div><!--
            --><div class='pointageStatusCompilationCircleContainer'><div class='pointageStatusCircle' step=2></div></div><!--
            --><div class='pointageStatusCompilationCircleContainer'><div class='pointageStatusCircle' step=3></div></div>
            <div class='pointageStatusLine'><div></div></div>
        </div>
    </div>

    <div id=\"compilationPointages\">
        <p onclick='downloadJustificatifsZip();' style=\"width: 50%; margin: 0 auto 1em auto; padding: 0.2em; cursor: pointer; border: 1px solid black; border-radius: 5px; background-color: #1F4E79; color: white; text-align: center;\">Télécharger les fichiers justificatifs</p>
        ";
        // line 76
        if (((isset($context["validationStep"]) ? $context["validationStep"] : null) != "Final")) {
            // line 77
            echo "            <p onclick='uploadJustificatifCompilation();' style=\"width: 50%; margin: 0 auto 1em auto; padding: 0.2em; cursor: pointer; border: 1px solid black; border-radius: 5px; background-color: #1F4E79; color: white; text-align: center;\">Ajouter des justificatifs supplémentaires</p>
        ";
        }
        // line 79
        echo "        <table id=\"compilationPointagesTable\">
            <tr>
                <th id=\"compilationPointageNomPrenom\">Nom/Prénom</th>
                <th id=\"compilationPointageNomPrenom\">Modulation</th>
                <th id=\"compilationPointageTitresRepas\">Titres repas</th>
                <th id=\"compilationPointageForfaitsDeplacement\">Forfaits déplacement</th>
                <th id=\"compilationPointagePrimesPanier\">Primes panier</th>
                <th id=\"compilationPointageTitreTransport\">Titre transport</th>
                <th id=\"compilationPointageRégularisation\">Régularisation</th>
                <th>Absences</th>
            </tr>
        </table>

        ";
        // line 92
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formValidation"]) ? $context["formValidation"] : null), 'form_start');
        echo "
        <p style=\"text-align: center;\">
            ";
        // line 94
        if (((isset($context["validationStep"]) ? $context["validationStep"] : null) == "Final")) {
            // line 95
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formValidation"]) ? $context["formValidation"] : null), "Compilation", array()), 'widget', array("label" => "Valider la compilation", "attr" => array("class" => "boutonCompilation", "style" => "display: none")));
            echo "
                <button type='button' class='boutonCompilation' onclick='ajaxGenerateExcelRecap();'>Générer le fichier Excel récapitulatif</button>
            ";
        } else {
            // line 98
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formValidation"]) ? $context["formValidation"] : null), "Compilation", array()), 'widget', array("label" => "Valider la compilation", "attr" => array("class" => "boutonCompilation")));
            echo "
            ";
        }
        // line 100
        echo "        </p>
        ";
        // line 101
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formValidation"]) ? $context["formValidation"] : null), 'form_end');
        echo "

    </div>

    <p style='text-align: center; font-size: 1vw; margin-bottom: 5%;' id='aucunPointageParagraphe'> Il n'y a aucun pointage à compiler. </p>

    <script>
        \$(window).load(function () {
            IECheck();

            // Affiche/cache le tableau et le message d'absence de pointage en fonction du nombre de pointage.
            pointageHide();

            //ajaxGetManagerList();
            ajaxGetPointagesCompilationByMonthYearManagerValidationStep();
            absencesToggle();
            ajaxSaveCompilationData();
            setSavedDateAndAgency();
            getSavedDateAndAgency();
            compilationValidation();
        });

        // Affiche un écran de chargement lors de l'exéction de requettes ajax lourdes.
        \$(document).ajaxSend(function (event, request, settings) {
            // Liens des requêtes de chargement de données.
            var loadRequestUrls = [
                \"pointage-compilation-ajax-get-status\",
                \"ajax-get-assistantes-agence-pointage-compilation-by-month-and-year\",
                \"pointage-compilation-ajax-get-status\",
                \"ajax-get-assistante-agence-unvalidate\",
                \"ajax-get-managers-list-aa-gestion\",
                \"ajax-compilation-pointage-rh-mode\"
            ];

            // Liens des requêtes de sauvegarde de données.
            var saveRequestUrls = [
                \"ajax-save-compilation-data\",
                \"ajax-save-compilation-absences\",
                \"ajax-update-regularisation\"
            ];

            var ajaxUrl = settings.url.substr(settings.url.lastIndexOf('/') + 1); // Retourne une URL relative.
            if (\$.inArray(ajaxUrl, loadRequestUrls) > -1) {
                \$('#loadingContent').show();
            }
            if (\$.inArray(ajaxUrl, saveRequestUrls) > -1) {
                savingNotification();
                \$('#pointageSavingNotification').finish().css('display', 'inline-block');
            }
        });

        // Cache l'écran de chargement et la notification de sauvegarde quand les requêtes ajax de chargement de la page et de sauvegarde sont terminées.
        \$(document).ajaxComplete(function () {
            if (\$.active <= 1) {
                \$('#loadingContent').hide();
                \$('#pointageSavingNotification').finish().delay(2000).fadeOut();
            }
        });

        // Retourne la compilation des pointages collaborateurs validés en fonction du mois, de l'année, de l'assistante d'agence et de l'établissement.
        function ajaxGetPointagesCompilationByMonthYearManagerValidationStep() {
            // Lorsqu'on séléctionne un mois, une année ou un manager...
            \$('#form_Month, #form_Year, #form_Etablissement').change(function () {
                // On met à jours la valeurs du formulaire de validation.
                \$('#formValidationRefus_month').val(\$('#form_Month').val());
                \$('#formValidationRefus_year').val(\$('#form_Year').val());
                \$('#formValidationRefus_etablissement').val(\$('#form_Etablissement').val());

                // On supprime la compilation existante.
                \$('#compilationPointagesTable tr:nth-child(n+2)').remove();

                // Si tous les champs sont séléctionné...
                if (\$('#form_Month').val() !== '' && \$('#form_Year').val() !== '' && \$('#form_Etablissement').val() !== '') {
                    \$.ajax({
                        type: 'POST',
                        url: '";
        // line 176
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_pointage_ajax_get_compilation_by_month_year_manager_validationstep");
        echo "',
                        data: {month: \$('#form_Month').val(), year: \$('#form_Year').val(), userStatus: '";
        // line 177
        echo twig_escape_filter($this->env, (isset($context["userStatus"]) ? $context["userStatus"] : null), "html", null, true);
        echo "', rhMode: \$('#RHMode').is(':checked'), etablissement: \$('#form_Etablissement').val(), validationStep: '";
        echo twig_escape_filter($this->env, (isset($context["validationStep"]) ? $context["validationStep"] : null), "html", null, true);
        echo "'},
                        success: function (response) {
                            // Conversion de la chaine JSON en Objet.
                            var responseObject = JSON.parse(response);

                            // On récupère les pointages sous forme d'objet.
                            var data = responseObject.Pointage;

                            // Si il existe des pointages...
                            if (data.length) {
                                var newHtmlContent = \"\";
                                \$.each(data, function (index) {
                                    // On récupere le nombre d'absences du matin.
                                    var nbAbsencesMatin = 0;
                                    \$.each(data[index].absences.matin, function (indexAbsence) {
                                        if (data[index].absences.matin[indexAbsence].valeur !== '' && data[index].absences.matin[indexAbsence].valeur !== undefined) {
                                            nbAbsencesMatin++;
                                        }
                                    });

                                    // On récupere le nombre d'absences de l'après-midi.
                                    var nbAbsencesAM = 0;
                                    \$.each(data[index].absences.am, function (indexAbsence) {
                                        if (data[index].absences.am[indexAbsence].valeur !== '' && data[index].absences.am[indexAbsence].valeur !== undefined) {
                                            nbAbsencesAM++;
                                        }
                                    });

                                    // On récuépre la valeur total de modulation.
                                    var mods = 0;
                                    \$.each(JSON.parse(data[index].mods), function (index, mod) {
                                        if (mod.value !== \"\") {
                                            mods += parseFloat(mod.value);
                                        }
                                    });

                                    // On récuépre la valeur total de forfaits deplacement.
                                    var forfaitsDeplacement = 0;
                                    \$.each(JSON.parse(data[index].forfaitsDeplacementDetails), function (index, forfaitDeplacement) {
                                        if (forfaitDeplacement.value !== \"\") {
                                            forfaitsDeplacement += parseFloat(forfaitDeplacement.value);
                                        }
                                    });

                                    newHtmlContent += \"<tr class='pointageCompile' username='\" + data[index].user + \"'>\";
                                    newHtmlContent += \"<td>\" + data[index].lastname + ' ' + data[index].firstname + \"</td>\";
                                    newHtmlContent += \"<td class='modulationCell'><span class='modulationValue'>\" + data[index].yearTotalMods.toFixed(2) + \"</span><br /><a href='#' onclick=\\\"openDetailsPopup('\" + data[index].detailsModsUrl + \"');\\\" title='Détails'>Détails</a></td>\";
                                    newHtmlContent += \"<td><input style='text-align: center; max-width: 100%;' type='number' name='titresRepas' step='1' min='0' value='\" + data[index].titresRepas + \"' \" + (('";
        // line 224
        echo twig_escape_filter($this->env, (isset($context["validationStep"]) ? $context["validationStep"] : null), "html", null, true);
        echo "' === 'Final') ? \"readonly\" : \"\") + \"></td>\";
                                    newHtmlContent += \"<td class='forfaitsDeplacementCell'><span class='forfaitsDeplacementValue'>\" + forfaitsDeplacement.toFixed(2) + \"</span><br /><a href='#' onclick=\\\"openDetailsPopup('\" + data[index].detailsForfaitDeplacementsUrl + \"');\\\" title='Détails'>Détails</a></td>\";
                                    newHtmlContent += \"<td><input style='text-align: center; max-width: 100%;' type='number' name='primesPanier' min='0' step='0.01' value='\" + data[index].primesPanier + \"' \" + (('";
        // line 226
        echo twig_escape_filter($this->env, (isset($context["validationStep"]) ? $context["validationStep"] : null), "html", null, true);
        echo "' === 'Final') ? \"readonly\" : \"\") + \"></td>\";
                                    newHtmlContent += \"<td><input style='text-align: center; max-width: 100%;' type='number' name='titreTransport' min='0' step='0.01' value='\" + data[index].titreTransport + \"' \" + (('";
        // line 227
        echo twig_escape_filter($this->env, (isset($context["validationStep"]) ? $context["validationStep"] : null), "html", null, true);
        echo "' === 'Final') ? \"readonly\" : \"\") + \"></td>\";
                                    newHtmlContent += \"<td title='Cliquez pour voir le texte complet.' style='cursor: help; word-wrap: break-word;' onclick=\\\"showFullTexte('\" + btoa(data[index].regularisation) + \"', \$(this));\\\">\" + truncateString(data[index].regularisation) + \"</td>\";
                                    newHtmlContent += \"<td style='background-color: white; padding-top: 1%; padding-bottom: 1%;'><div style='display: inline-block; vertical-align: middle;'>\" + (nbAbsencesMatin + nbAbsencesAM) / 2 + \"</div><img style='vertical-align: middle; width: 20%; cursor: pointer;' src='";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Right-32.png"), "html", null, true);
        echo "' alt='Déplier'><img style='vertical-align: middle; display: none; width: 20%; cursor: pointer;' src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-32.png"), "html", null, true);
        echo "' alt='Replier'></td>\";
                                    newHtmlContent += \"</tr>\";
                                    newHtmlContent += \"<tr>\";
                                    newHtmlContent += \"<td colspan='6' style='background-color: white; border-right: none; padding-bottom: 3%;' class='compilationPointagesTableAbsencesTd'>\";
                                    newHtmlContent += \"<div class='compilationPointagesTableAbsencesDiv'>\";
                                    newHtmlContent += \"<table class='compilationPointagesTableAbsences'>\";
                                    newHtmlContent += \"<tr>\";
                                    newHtmlContent += \"<th>Date</th>\";
                                    newHtmlContent += \"<th>Abscence matin</th>\";
                                    newHtmlContent += \"<th>Abscence après-midi</th>\";
                                    newHtmlContent += \"<th>Commentaires</th>\";
                                    newHtmlContent += \"</tr>\";

                                    // On récupére les jours fériés sous forme de 'timestamp'.
                                    var joursFeries = Array();
                                    \$.each(JSON.parse(\"";
        // line 244
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["joursFeries"]) ? $context["joursFeries"] : null)), "html", null, true);
        echo "\"), function (index, value) {
                                        joursFeries.push(new Date(value * 1000).getTime());
                                    });

                                    if ('";
        // line 248
        echo twig_escape_filter($this->env, (isset($context["validationStep"]) ? $context["validationStep"] : null), "html", null, true);
        echo "' === 'Final') {
                                        // Pour chaque jours...
                                        \$.each(data[index].absences.matin, function (indexAbsences) {
                                            newHtmlContent += \"<tr date='\" + data[index].absences.matin[indexAbsences].date + \"'>\";
                                            var stringDate = data[index].absences.matin[indexAbsences].date.split('-');
                                            var date = new Date(stringDate[2], stringDate[1] - 1, stringDate[0]);
                                            if (date.getDay() === 0 || date.getDay() === 6 || \$.inArray(date.getTime(), joursFeries) > -1) {
                                                newHtmlContent += \"<td style='background-color: rgb(166, 166, 166);'>\" + data[index].absences.matin[indexAbsences].date.replace('-', '/').replace('-', '/') + \"</td>\";
                                            } else {
                                                newHtmlContent += \"<td>\" + data[index].absences.matin[indexAbsences].date.replace('-', '/').replace('-', '/') + \"</td>\";
                                            }
                                            if (parseInt(date.getDay(), 10) === 0 || parseInt(date.getDay(), 10) === 6 || \$.inArray(date.getTime(), joursFeries) > -1) {
                                                newHtmlContent += \"<td class='compilationAbscenceMatin' data='matin' style='background: rgb(166, 166, 166);'>\";
                                                newHtmlContent += \"<select disabled=true>\";
                                                newHtmlContent += \"<option value='' \";
                                                if (data[index].absences.matin[indexAbsences].valeur !== undefined && data[index].absences.matin[indexAbsences].valeur === '') {
                                                    newHtmlContent += \"selected\";
                                                }
                                                newHtmlContent += '></option>';
                                                newHtmlContent += \"<option value='AT' \";
                                                if (data[index].absences.matin[indexAbsences].valeur !== undefined && data[index].absences.matin[indexAbsences].valeur === 'AT') {
                                                    newHtmlContent += \"selected\";
                                                }
                                                newHtmlContent += '>AT</option>';
                                                newHtmlContent += \"<option value='MT' \";
                                                if (data[index].absences.matin[indexAbsences].valeur !== undefined && data[index].absences.matin[indexAbsences].valeur === 'MT') {
                                                    newHtmlContent += \"selected\";
                                                }
                                                newHtmlContent += '>MT</option>';
                                                newHtmlContent += \"<option value='PA' \";
                                                if (data[index].absences.matin[indexAbsences].valeur !== undefined && data[index].absences.matin[indexAbsences].valeur === 'PA') {
                                                    newHtmlContent += \"selected\";
                                                }
                                                newHtmlContent += '>PA</option>';
                                                newHtmlContent += \"<option value='MA' \";
                                                if (data[index].absences.matin[indexAbsences].valeur !== undefined && data[index].absences.matin[indexAbsences].valeur === 'MA') {
                                                    newHtmlContent += \"selected\";
                                                }
                                                newHtmlContent += '>MA</option>';
                                                newHtmlContent += \"<option value='PM' \";
                                                if (data[index].absences.matin[indexAbsences].valeur !== undefined && data[index].absences.matin[indexAbsences].valeur === 'PM') {
                                                    newHtmlContent += \"selected\";
                                                }
                                            } else {
                                                newHtmlContent += \"<td class='compilationAbscenceMatin' data='matin'>\";
                                                newHtmlContent += \"<select disabled=true>\";
                                                newHtmlContent += \"<option value='' \";
                                                if (data[index].absences.matin[indexAbsences].valeur !== undefined && data[index].absences.matin[indexAbsences].valeur === '') {
                                                    newHtmlContent += \"selected\";
                                                }
                                                newHtmlContent += '></option>';
                                                newHtmlContent += \"<option value='AA' \";
                                                if (data[index].absences.matin[indexAbsences].valeur !== undefined && data[index].absences.matin[indexAbsences].valeur === 'AA') {
                                                    newHtmlContent += \"selected\";
                                                }
                                                newHtmlContent += '>AA</option>';
                                                newHtmlContent += \"<option value='TJ' \";
                                                if (data[index].absences.matin[indexAbsences].valeur !== undefined && data[index].absences.matin[indexAbsences].valeur === 'TJ') {
                                                    newHtmlContent += \"selected\";
                                                }
                                                newHtmlContent += '>TJ</option>';
                                                newHtmlContent += \"<option value='AT' \";
                                                if (data[index].absences.matin[indexAbsences].valeur !== undefined && data[index].absences.matin[indexAbsences].valeur === 'AT') {
                                                    newHtmlContent += \"selected\";
                                                }
                                                newHtmlContent += '>AT</option>';
                                                newHtmlContent += \"<option value='MT' \";
                                                if (data[index].absences.matin[indexAbsences].valeur !== undefined && data[index].absences.matin[indexAbsences].valeur === 'MT') {
                                                    newHtmlContent += \"selected\";
                                                }
                                                newHtmlContent += '>MT</option>';
                                                newHtmlContent += \"<option value='PA' \";
                                                if (data[index].absences.matin[indexAbsences].valeur !== undefined && data[index].absences.matin[indexAbsences].valeur === 'PA') {
                                                    newHtmlContent += \"selected\";
                                                }
                                                newHtmlContent += '>PA</option>';
                                                newHtmlContent += \"<option value='CS' \";
                                                if (data[index].absences.matin[indexAbsences].valeur !== undefined && data[index].absences.matin[indexAbsences].valeur === 'CS') {
                                                    newHtmlContent += \"selected\";
                                                }
                                                newHtmlContent += '>CS</option>';
                                                newHtmlContent += \"<option value='CP' \";
                                                if (data[index].absences.matin[indexAbsences].valeur !== undefined && data[index].absences.matin[indexAbsences].valeur === 'CP') {
                                                    newHtmlContent += \"selected\";
                                                }
                                                newHtmlContent += '>CP</option>';
                                                newHtmlContent += \"<option value='AV' \";
                                                if (data[index].absences.matin[indexAbsences].valeur !== undefined && data[index].absences.matin[indexAbsences].valeur === 'AV') {
                                                    newHtmlContent += \"selected\";
                                                }
                                                newHtmlContent += '>AV</option>';
                                                newHtmlContent += \"<option value='RT' \";
                                                if (data[index].absences.matin[indexAbsences].valeur !== undefined && data[index].absences.matin[indexAbsences].valeur === 'RT') {
                                                    newHtmlContent += \"selected\";
                                                }
                                                newHtmlContent += '>RT</option>';
                                                newHtmlContent += \"<option value='MA' \";
                                                if (data[index].absences.matin[indexAbsences].valeur !== undefined && data[index].absences.matin[indexAbsences].valeur === 'MA') {
                                                    newHtmlContent += \"selected\";
                                                }
                                                newHtmlContent += '>MA</option>';
                                                newHtmlContent += \"<option value='PM' \";
                                                if (data[index].absences.matin[indexAbsences].valeur !== undefined && data[index].absences.matin[indexAbsences].valeur === 'PM') {
                                                    newHtmlContent += \"selected\";
                                                }
                                                newHtmlContent += '>PM</option>';
                                                newHtmlContent += \"<option value='RE' \";
                                                if (data[index].absences.matin[indexAbsences].valeur !== undefined && data[index].absences.matin[indexAbsences].valeur === 'RE') {
                                                    newHtmlContent += \"selected\";
                                                }
                                                newHtmlContent += '>RE</option>';
                                                newHtmlContent += \"<option value='Autre' \";
                                                if (data[index].absences.matin[indexAbsences].valeur !== undefined && data[index].absences.matin[indexAbsences].valeur === 'Autre') {
                                                    newHtmlContent += \"selected\";
                                                }
                                                newHtmlContent += '>Autre</option>';
                                                newHtmlContent += '</select>';
                                            }
                                            newHtmlContent += '</td>';
                                            if (parseInt(date.getDay(), 10) === 0 || parseInt(date.getDay(), 10) === 6 || \$.inArray(date.getTime(), joursFeries) > -1) {
                                                newHtmlContent += \"<td class='compilationAbsenceAM' data='am' style='background: rgb(166, 166, 166);'>\";
                                                newHtmlContent += \"<select disabled=true>\";
                                                newHtmlContent += \"<option value='' \";
                                                if (data[index].absences.am[indexAbsences].valeur !== undefined && data[index].absences.am[indexAbsences].valeur === '') {
                                                    newHtmlContent += \"selected\";
                                                }
                                                newHtmlContent += '></option>';
                                                newHtmlContent += \"<option value='AT' \";
                                                if (data[index].absences.am[indexAbsences].valeur !== undefined && data[index].absences.am[indexAbsences].valeur === 'AT') {
                                                    newHtmlContent += \"selected\";
                                                }
                                                newHtmlContent += '>AT</option>';
                                                newHtmlContent += \"<option value='MT' \";
                                                if (data[index].absences.am[indexAbsences].valeur !== undefined && data[index].absences.am[indexAbsences].valeur === 'MT') {
                                                    newHtmlContent += \"selected\";
                                                }
                                                newHtmlContent += '>MT</option>';
                                                newHtmlContent += \"<option value='PA' \";
                                                if (data[index].absences.am[indexAbsences].valeur !== undefined && data[index].absences.am[indexAbsences].valeur === 'PA') {
                                                    newHtmlContent += \"selected\";
                                                }
                                                newHtmlContent += '>PA</option>';
                                                newHtmlContent += \"<option value='MA' \";
                                                if (data[index].absences.am[indexAbsences].valeur !== undefined && data[index].absences.am[indexAbsences].valeur === 'MA') {
                                                    newHtmlContent += \"selected\";
                                                }
                                                newHtmlContent += '>MA</option>';
                                            } else {
                                                newHtmlContent += \"<td class='compilationAbsenceAM' data='am'>\";
                                                newHtmlContent += \"<select disabled=true>\";
                                                newHtmlContent += \"<option value='' \";
                                                if (data[index].absences.am[indexAbsences].valeur !== undefined && data[index].absences.am[indexAbsences].valeur === '') {
                                                    newHtmlContent += \"selected\";
                                                }
                                                newHtmlContent += '></option>';
                                                newHtmlContent += \"<option value='AA' \";
                                                if (data[index].absences.am[indexAbsences].valeur !== undefined && data[index].absences.am[indexAbsences].valeur === 'AA') {
                                                    newHtmlContent += \"selected\";
                                                }
                                                newHtmlContent += '>AA</option>';
                                                newHtmlContent += \"<option value='TJ' \";
                                                if (data[index].absences.am[indexAbsences].valeur !== undefined && data[index].absences.am[indexAbsences].valeur === 'TJ') {
                                                    newHtmlContent += \"selected\";
                                                }
                                                newHtmlContent += '>TJ</option>';
                                                newHtmlContent += \"<option value='AT' \";
                                                if (data[index].absences.am[indexAbsences].valeur !== undefined && data[index].absences.am[indexAbsences].valeur === 'AT') {
                                                    newHtmlContent += \"selected\";
                                                }
                                                newHtmlContent += '>AT</option>';
                                                newHtmlContent += \"<option value='MT' \";
                                                if (data[index].absences.am[indexAbsences].valeur !== undefined && data[index].absences.am[indexAbsences].valeur === 'MT') {
                                                    newHtmlContent += \"selected\";
                                                }
                                                newHtmlContent += '>MT</option>';
                                                newHtmlContent += \"<option value='PA' \";
                                                if (data[index].absences.am[indexAbsences].valeur !== undefined && data[index].absences.am[indexAbsences].valeur === 'PA') {
                                                    newHtmlContent += \"selected\";
                                                }
                                                newHtmlContent += '>PA</option>';
                                                newHtmlContent += \"<option value='CS' \";
                                                if (data[index].absences.am[indexAbsences].valeur !== undefined && data[index].absences.am[indexAbsences].valeur === 'CS') {
                                                    newHtmlContent += \"selected\";
                                                }
                                                newHtmlContent += '>CS</option>';
                                                newHtmlContent += \"<option value='CP' \";
                                                if (data[index].absences.am[indexAbsences].valeur !== undefined && data[index].absences.am[indexAbsences].valeur === 'CP') {
                                                    newHtmlContent += \"selected\";
                                                }
                                                newHtmlContent += '>CP</option>';
                                                newHtmlContent += \"<option value='AV' \";
                                                if (data[index].absences.am[indexAbsences].valeur !== undefined && data[index].absences.am[indexAbsences].valeur === 'AV') {
                                                    newHtmlContent += \"selected\";
                                                }
                                                newHtmlContent += '>AV</option>';
                                                newHtmlContent += \"<option value='RT' \";
                                                if (data[index].absences.am[indexAbsences].valeur !== undefined && data[index].absences.am[indexAbsences].valeur === 'RT') {
                                                    newHtmlContent += \"selected\";
                                                }
                                                newHtmlContent += '>RT</option>';
                                                newHtmlContent += \"<option value='MA' \";
                                                if (data[index].absences.am[indexAbsences].valeur !== undefined && data[index].absences.am[indexAbsences].valeur === 'MA') {
                                                    newHtmlContent += \"selected\";
                                                }
                                                newHtmlContent += '>MA</option>';
                                                newHtmlContent += \"<option value='PM' \";
                                                if (data[index].absences.am[indexAbsences].valeur !== undefined && data[index].absences.am[indexAbsences].valeur === 'PM') {
                                                    newHtmlContent += \"selected\";
                                                }
                                                newHtmlContent += '>PM</option>';
                                                newHtmlContent += \"<option value='RE' \";
                                                if (data[index].absences.am[indexAbsences].valeur !== undefined && data[index].absences.am[indexAbsences].valeur === 'RE') {
                                                    newHtmlContent += \"selected\";
                                                }
                                                newHtmlContent += '>RE</option>';
                                                newHtmlContent += \"<option value='Autre' \";
                                                if (data[index].absences.am[indexAbsences].valeur !== undefined && data[index].absences.am[indexAbsences].valeur === 'Autre') {
                                                    newHtmlContent += \"selected\";
                                                }
                                                newHtmlContent += '>Autre</option>';
                                                newHtmlContent += '</select>';
                                            }
                                            newHtmlContent += '</td>';
                                            if (data[index].absences.matin[indexAbsences].commentaires !== undefined) {
                                                newHtmlContent += \"<td class='compilationAbsenceCommentaire' data='commentaires'>\" + data[index].absences.matin[indexAbsences].commentaires + \"</td>\";
                                            } else {
                                                newHtmlContent += \"<td class='compilationAbsenceCommentaire' data='commentaires'></td>\";
                                            }
                                            newHtmlContent += \"</tr>\";
                                        });
                                    } else {
                                        // Pour chaque jours...
                                        \$.each(data[index].absences.matin, function (indexAbsences) {
                                            newHtmlContent += \"<tr date='\" + data[index].absences.matin[indexAbsences].date + \"'>\";
                                            var stringDate = data[index].absences.matin[indexAbsences].date.split('-');
                                            var date = new Date(stringDate[2], stringDate[1] - 1, stringDate[0], 0, 0, 0, 0);
                                            if (parseInt(date.getDay(), 10) === 0 || parseInt(date.getDay(), 10) === 6 || \$.inArray(date.getTime(), joursFeries) > -1) {
                                                newHtmlContent += \"<td style='background-color: rgb(166, 166, 166);'>\" + data[index].absences.matin[indexAbsences].date.replace('-', '/').replace('-', '/') + \"</td>\";
                                            } else {
                                                newHtmlContent += \"<td>\" + data[index].absences.matin[indexAbsences].date.replace('-', '/').replace('-', '/') + \"</td>\";
                                            }
                                            if (parseInt(date.getDay(), 10) === 0 || parseInt(date.getDay(), 10) === 6 || \$.inArray(date.getTime(), joursFeries) > -1) {
                                                newHtmlContent += \"<td class='compilationAbscenceMatin' data='matin' style='background: rgb(166, 166, 166);'>\";
                                                newHtmlContent += \"<select>\";
                                                newHtmlContent += \"<option value='' \";
                                                if (data[index].absences.matin[indexAbsences].valeur !== undefined && data[index].absences.matin[indexAbsences].valeur === '') {
                                                    newHtmlContent += \"selected\";
                                                }
                                                newHtmlContent += '></option>';
                                                newHtmlContent += \"<option value='AT' \";
                                                if (data[index].absences.matin[indexAbsences].valeur !== undefined && data[index].absences.matin[indexAbsences].valeur === 'AT') {
                                                    newHtmlContent += \"selected\";
                                                }
                                                newHtmlContent += '>AT</option>';
                                                newHtmlContent += \"<option value='MT' \";
                                                if (data[index].absences.matin[indexAbsences].valeur !== undefined && data[index].absences.matin[indexAbsences].valeur === 'MT') {
                                                    newHtmlContent += \"selected\";
                                                }
                                                newHtmlContent += '>MT</option>';
                                                newHtmlContent += \"<option value='PA' \";
                                                if (data[index].absences.matin[indexAbsences].valeur !== undefined && data[index].absences.matin[indexAbsences].valeur === 'PA') {
                                                    newHtmlContent += \"selected\";
                                                }
                                                newHtmlContent += '>PA</option>';
                                                newHtmlContent += \"<option value='MA' \";
                                                if (data[index].absences.matin[indexAbsences].valeur !== undefined && data[index].absences.matin[indexAbsences].valeur === 'MA') {
                                                    newHtmlContent += \"selected\";
                                                }
                                                newHtmlContent += '>MA</option>';
                                            } else {
                                                newHtmlContent += \"<td class='compilationAbscenceMatin' data='matin'>\";
                                                newHtmlContent += \"<select>\";
                                                newHtmlContent += \"<option value='' \";
                                                if (data[index].absences.matin[indexAbsences].valeur !== undefined && data[index].absences.matin[indexAbsences].valeur === '') {
                                                    newHtmlContent += \"selected\";
                                                }
                                                newHtmlContent += '></option>';
                                                newHtmlContent += \"<option value='AA' \";
                                                if (data[index].absences.matin[indexAbsences].valeur !== undefined && data[index].absences.matin[indexAbsences].valeur === 'AA') {
                                                    newHtmlContent += \"selected\";
                                                }
                                                newHtmlContent += '>AA</option>';
                                                newHtmlContent += \"<option value='TJ' \";
                                                if (data[index].absences.matin[indexAbsences].valeur !== undefined && data[index].absences.matin[indexAbsences].valeur === 'TJ') {
                                                    newHtmlContent += \"selected\";
                                                }
                                                newHtmlContent += '>TJ</option>';
                                                newHtmlContent += \"<option value='AT' \";
                                                if (data[index].absences.matin[indexAbsences].valeur !== undefined && data[index].absences.matin[indexAbsences].valeur === 'AT') {
                                                    newHtmlContent += \"selected\";
                                                }
                                                newHtmlContent += '>AT</option>';
                                                newHtmlContent += \"<option value='MT' \";
                                                if (data[index].absences.matin[indexAbsences].valeur !== undefined && data[index].absences.matin[indexAbsences].valeur === 'MT') {
                                                    newHtmlContent += \"selected\";
                                                }
                                                newHtmlContent += '>MT</option>';
                                                newHtmlContent += \"<option value='PA' \";
                                                if (data[index].absences.matin[indexAbsences].valeur !== undefined && data[index].absences.matin[indexAbsences].valeur === 'PA') {
                                                    newHtmlContent += \"selected\";
                                                }
                                                newHtmlContent += '>PA</option>';
                                                newHtmlContent += \"<option value='CS' \";
                                                if (data[index].absences.matin[indexAbsences].valeur !== undefined && data[index].absences.matin[indexAbsences].valeur === 'CS') {
                                                    newHtmlContent += \"selected\";
                                                }
                                                newHtmlContent += '>CS</option>';
                                                newHtmlContent += \"<option value='CP' \";
                                                if (data[index].absences.matin[indexAbsences].valeur !== undefined && data[index].absences.matin[indexAbsences].valeur === 'CP') {
                                                    newHtmlContent += \"selected\";
                                                }
                                                newHtmlContent += '>CP</option>';
                                                newHtmlContent += \"<option value='AV' \";
                                                if (data[index].absences.matin[indexAbsences].valeur !== undefined && data[index].absences.matin[indexAbsences].valeur === 'AV') {
                                                    newHtmlContent += \"selected\";
                                                }
                                                newHtmlContent += '>AV</option>';
                                                newHtmlContent += \"<option value='RT' \";
                                                if (data[index].absences.matin[indexAbsences].valeur !== undefined && data[index].absences.matin[indexAbsences].valeur === 'RT') {
                                                    newHtmlContent += \"selected\";
                                                }
                                                newHtmlContent += '>RT</option>';
                                                newHtmlContent += \"<option value='MA' \";
                                                if (data[index].absences.matin[indexAbsences].valeur !== undefined && data[index].absences.matin[indexAbsences].valeur === 'MA') {
                                                    newHtmlContent += \"selected\";
                                                }
                                                newHtmlContent += '>MA</option>';
                                                newHtmlContent += \"<option value='PM' \";
                                                if (data[index].absences.matin[indexAbsences].valeur !== undefined && data[index].absences.matin[indexAbsences].valeur === 'PM') {
                                                    newHtmlContent += \"selected\";
                                                }
                                                newHtmlContent += '>PM</option>';
                                                newHtmlContent += \"<option value='RE' \";
                                                if (data[index].absences.matin[indexAbsences].valeur !== undefined && data[index].absences.matin[indexAbsences].valeur === 'RE') {
                                                    newHtmlContent += \"selected\";
                                                }
                                                newHtmlContent += '>RE</option>';
                                                newHtmlContent += \"<option value='Autre' \";
                                                if (data[index].absences.matin[indexAbsences].valeur !== undefined && data[index].absences.matin[indexAbsences].valeur === 'Autre') {
                                                    newHtmlContent += \"selected\";
                                                }
                                                newHtmlContent += '>Autre</option>';
                                                newHtmlContent += '</select>';
                                            }
                                            newHtmlContent += '</td>';
                                            if (parseInt(date.getDay(), 10) === 0 || parseInt(date.getDay(), 10) === 6 || \$.inArray(date.getTime(), joursFeries) > -1) {
                                                newHtmlContent += \"<td class='compilationAbsenceAM' data='am' style='background: rgb(166, 166, 166);'>\";
                                                newHtmlContent += \"<select>\";
                                                newHtmlContent += \"<option value='' \";
                                                if (data[index].absences.am[indexAbsences].valeur !== undefined && data[index].absences.am[indexAbsences].valeur === '') {
                                                    newHtmlContent += \"selected\";
                                                }
                                                newHtmlContent += '></option>';
                                                newHtmlContent += \"<option value='AT' \";
                                                if (data[index].absences.am[indexAbsences].valeur !== undefined && data[index].absences.am[indexAbsences].valeur === 'AT') {
                                                    newHtmlContent += \"selected\";
                                                }
                                                newHtmlContent += '>AT</option>';
                                                newHtmlContent += \"<option value='MT' \";
                                                if (data[index].absences.am[indexAbsences].valeur !== undefined && data[index].absences.am[indexAbsences].valeur === 'MT') {
                                                    newHtmlContent += \"selected\";
                                                }
                                                newHtmlContent += '>MT</option>';
                                                newHtmlContent += \"<option value='PA' \";
                                                if (data[index].absences.am[indexAbsences].valeur !== undefined && data[index].absences.am[indexAbsences].valeur === 'PA') {
                                                    newHtmlContent += \"selected\";
                                                }
                                                newHtmlContent += '>PA</option>';
                                                newHtmlContent += \"<option value='MA' \";
                                                if (data[index].absences.am[indexAbsences].valeur !== undefined && data[index].absences.am[indexAbsences].valeur === 'MA') {
                                                    newHtmlContent += \"selected\";
                                                }
                                                newHtmlContent += '>MA</option>';
                                            } else {
                                                newHtmlContent += \"<td class='compilationAbsenceAM' data='am'>\";
                                                newHtmlContent += \"<select>\";
                                                newHtmlContent += \"<option value='' \";
                                                if (data[index].absences.am[indexAbsences].valeur !== undefined && data[index].absences.am[indexAbsences].valeur === '') {
                                                    newHtmlContent += \"selected\";
                                                }
                                                newHtmlContent += '></option>';
                                                newHtmlContent += \"<option value='AA' \";
                                                if (data[index].absences.am[indexAbsences].valeur !== undefined && data[index].absences.am[indexAbsences].valeur === 'AA') {
                                                    newHtmlContent += \"selected\";
                                                }
                                                newHtmlContent += '>AA</option>';
                                                newHtmlContent += \"<option value='TJ' \";
                                                if (data[index].absences.am[indexAbsences].valeur !== undefined && data[index].absences.am[indexAbsences].valeur === 'TJ') {
                                                    newHtmlContent += \"selected\";
                                                }
                                                newHtmlContent += '>TJ</option>';
                                                newHtmlContent += \"<option value='AT' \";
                                                if (data[index].absences.am[indexAbsences].valeur !== undefined && data[index].absences.am[indexAbsences].valeur === 'AT') {
                                                    newHtmlContent += \"selected\";
                                                }
                                                newHtmlContent += '>AT</option>';
                                                newHtmlContent += \"<option value='MT' \";
                                                if (data[index].absences.am[indexAbsences].valeur !== undefined && data[index].absences.am[indexAbsences].valeur === 'MT') {
                                                    newHtmlContent += \"selected\";
                                                }
                                                newHtmlContent += '>MT</option>';
                                                newHtmlContent += \"<option value='PA' \";
                                                if (data[index].absences.am[indexAbsences].valeur !== undefined && data[index].absences.am[indexAbsences].valeur === 'PA') {
                                                    newHtmlContent += \"selected\";
                                                }
                                                newHtmlContent += '>PA</option>';
                                                newHtmlContent += \"<option value='CS' \";
                                                if (data[index].absences.am[indexAbsences].valeur !== undefined && data[index].absences.am[indexAbsences].valeur === 'CS') {
                                                    newHtmlContent += \"selected\";
                                                }
                                                newHtmlContent += '>CS</option>';
                                                newHtmlContent += \"<option value='CP' \";
                                                if (data[index].absences.am[indexAbsences].valeur !== undefined && data[index].absences.am[indexAbsences].valeur === 'CP') {
                                                    newHtmlContent += \"selected\";
                                                }
                                                newHtmlContent += '>CP</option>';
                                                newHtmlContent += \"<option value='AV' \";
                                                if (data[index].absences.am[indexAbsences].valeur !== undefined && data[index].absences.am[indexAbsences].valeur === 'AV') {
                                                    newHtmlContent += \"selected\";
                                                }
                                                newHtmlContent += '>AV</option>';
                                                newHtmlContent += \"<option value='RT' \";
                                                if (data[index].absences.am[indexAbsences].valeur !== undefined && data[index].absences.am[indexAbsences].valeur === 'RT') {
                                                    newHtmlContent += \"selected\";
                                                }
                                                newHtmlContent += '>RT</option>';
                                                newHtmlContent += \"<option value='MA' \";
                                                if (data[index].absences.am[indexAbsences].valeur !== undefined && data[index].absences.am[indexAbsences].valeur === 'MA') {
                                                    newHtmlContent += \"selected\";
                                                }
                                                newHtmlContent += '>MA</option>';
                                                newHtmlContent += \"<option value='PM' \";
                                                if (data[index].absences.am[indexAbsences].valeur !== undefined && data[index].absences.am[indexAbsences].valeur === 'PM') {
                                                    newHtmlContent += \"selected\";
                                                }
                                                newHtmlContent += '>PM</option>';
                                                newHtmlContent += \"<option value='RE' \";
                                                if (data[index].absences.am[indexAbsences].valeur !== undefined && data[index].absences.am[indexAbsences].valeur === 'RE') {
                                                    newHtmlContent += \"selected\";
                                                }
                                                newHtmlContent += '>RE</option>';
                                                newHtmlContent += \"<option value='Autre' \";
                                                if (data[index].absences.am[indexAbsences].valeur !== undefined && data[index].absences.am[indexAbsences].valeur === 'Autre') {
                                                    newHtmlContent += \"selected\";
                                                }
                                                newHtmlContent += '>Autre</option>';
                                                newHtmlContent += '</select>';
                                            }
                                            newHtmlContent += '</td>';
                                            if (data[index].absences.matin[indexAbsences].commentaires !== undefined) {
                                                newHtmlContent += \"<td class='compilationAbsenceCommentaire' data='commentaires' contenteditable=true>\" + data[index].absences.matin[indexAbsences].commentaires + \"</td>\";
                                            } else {
                                                newHtmlContent += \"<td class='compilationAbsenceCommentaire' data='commentaires' contenteditable=true></td>\";
                                            }
                                            newHtmlContent += \"</tr>\";
                                        });
                                    }
                                    newHtmlContent += \"</table>\";
                                    newHtmlContent += \"</div>\";
                                    newHtmlContent += \"</td>\";
                                    newHtmlContent += \"</tr>\";
                                });

                                \$('#compilationPointagesTable').append(newHtmlContent);
                                absencesToggle();
                                //ajaxSaveCompilationData();
                                pointageShow();
                            } else {
                                pointageHide();
                            }
                        }
                    });

                    ajaxGetUnvalidate('AA'); // On récupére le nombre de pointage non validé.
                    ajaxGetPointageCompilationStatus(); // On récupére le status de la compilation.
                }
            });
        }

        // Affiche/Cache le tableau des abscences du collaborateur sélectionné.
        function absencesToggle() {
            \$('#compilationPointagesTable td img').click(function () {
                \$(this).parent('td').parent('tr').next('tr').find(\$('.compilationPointagesTableAbsencesTd')).show();
                \$(this).parent('td').parent('tr').next('tr').find(\$('.compilationPointagesTableAbsencesDiv')).slideToggle(function () {
                    if (\$(this).css('display') === 'none') {
                        \$(this).parent('.compilationPointagesTableAbsencesTd').hide();
                    }
                });
                \$(this).toggle();
                \$(this).siblings('img').toggle();
            });
        }

        // Sauvegarde les modification sur les pointages en base de données.
        function ajaxSaveCompilationData() {
            var delay = (function () {
                var timer = 0;
                return function (callback, ms) {
                    clearTimeout(timer);
                    timer = setTimeout(callback, ms);
                };
            })();

            // Pour les données principales.
            \$('#contenu').on('keyup paste change', '#compilationPointagesTable input', function () {
                var input = \$(this);

                delay(function () {
                    \$.ajax({
                        type: 'POST',
                        url: '";
        // line 758
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_ajax_save_compilation_data");
        echo "',
                        data: {username: input.parent('td').parent('tr').attr('username'), month: \$('#form_Month').val(), year: \$('#form_Year').val(), input: input.attr('name'), value: input.val()}
                    });
                }, 500);
            });

            // Pour les types d'abscences.
            \$('#contenu').on('change', '#compilationPointagesTable .compilationAbscenceMatin select, #compilationPointagesTable .compilationAbsenceAM select', function () {
                var username = \$(this).parents('tr').prev('.pointageCompile').attr('username');
                var date = \$(this).parent('td').parent('tr').attr('date');
                var data = \$(this).parent('td').attr('data');
                \$.ajax({
                    type: 'POST',
                    url: '";
        // line 771
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_ajax_save_compilation_absences");
        echo "',
                    data: {username: username, month: \$('#form_Month').val(), year: \$('#form_Year').val(), date: date, data: data, value: \$(this).val()}
                });
            });

            // Pour les commentaires d'abscences.
            \$('#contenu').on('keyup paste', '#compilationPointagesTable .compilationAbsenceCommentaire', function () {
                var username = \$(this).parents('tr').prev('.pointageCompile').attr('username');
                var date = \$(this).parent('tr').attr('date');
                var data = \$(this).attr('data');
                var value = \$(this).text();

                delay(function () {
                    \$.ajax({
                        type: 'POST',
                        url: '";
        // line 786
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_ajax_save_compilation_absences");
        echo "',
                        data: {username: username, month: \$('#form_Month').val(), year: \$('#form_Year').val(), date: date, data: data, value: value}
                    });
                }, 1500);
            });
        }

        // Affiche le tableau des pointages et cache le paragraphe d'absence de pointage.
        function pointageShow() {
            \$('#compilationPointages').show();
            \$('#aucunPointageParagraphe').hide();
        }

        // Cache le tableau des pointages et affiche le paragraphe d'absence de pointage.
        function pointageHide() {
            \$('#compilationPointages').hide();
            \$('#aucunPointageParagraphe').show();
        }

        // Vérifie le status de la feuille de pointage, colore la barre d'avancement en conséquence.
        function ajaxGetPointageCompilationStatus() {
            \$('.pointageStatusLine div').width('12.5%');
            \$(\".pointageStatusCircle\").css('background-color', 'lightgrey');
            \$(\".pointageStatusCircle\").filter(function () {
                return  \$(this).attr(\"step\") <= 0;
            }).css('background-color', 'green');
            \$.ajax({
                type: 'POST',
                url: '";
        // line 814
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_pointage_compilation_ajax_get_status");
        echo "',
                data: {month: \$('#form_Month').val(), year: \$('#form_Year').val(), etablissement: \$('#form_Etablissement').val(), userStatus: '";
        // line 815
        echo twig_escape_filter($this->env, (isset($context["userStatus"]) ? $context["userStatus"] : null), "html", null, true);
        echo "'},
                success: function (response) {
                    var width = null;
                    var cercleNb = null;
                    switch (response) {
                        case '2':
                            width = 12.5;
                            cercleNb = 0;
                            break;
                        case '3':
                            width = 37.5;
                            cercleNb = 1;
                            break;
                        case '4':
                            width = 62.5;
                            cercleNb = 2;
                            break;
                        case '5':
                            width = 100;
                            cercleNb = 3;
                            break;
                    }

                    \$('.pointageStatusLine div').width(width + '%');
                    \$(\".pointageStatusCircle\").filter(function () {
                        return  \$(this).attr(\"step\") <= cercleNb;
                    }).css('background-color', 'green');
                }
            });
        }

        // Vérifie si le navigateur utilisé est Internet Explorer et affiche un message d'erreur dans ce cas.
        function IECheck() {

            var ms_ie = false;
            var ua = window.navigator.userAgent;
            var old_ie = ua.indexOf('MSIE ');
            var new_ie = ua.indexOf('Trident/');
            if ((old_ie > -1) || (new_ie > -1)) {
                ms_ie = true;
            }

            if (ms_ie) {
                alert('Le module de pointage n\\'est pas compatible avec Internet Explorer, veuillez utiliser Google Chrome ou Microsoft Edge à la place.');
            }
        }

        // Affiche une fenêtre de notification de sauvegarde qui suit la souris.
        function savingNotification() {
            // Lorsque la souris bouge.
            \$(document).mousemove(function (event) {
                \$('#pointageSavingNotification').css('left', event.pageX + 20);
                \$('#pointageSavingNotification').css('top', event.pageY);
            });
        }

        // Affiche un message de confirmation lorsque l'assitant tente de valider la compilation alors qu'il reste des pointages non validée.
        function preventUnvalidate(pointageEnAttenteValidationAA, collaborateurSansPointage, data) {
            // Si il reste des collaborateurs qui n'ont pas remplis/validé leur pointage.
            if (collaborateurSansPointage !== 0) {
                var collaborateurs = JSON.parse(data)['collaborateurSansPointage']; // On convertie la chaine de caractère d'entré en objet Javascript.
                var message = \"Attention les pointages suivant n'ont pas étés validés par les collaborateur :\\n\";
                \$.each(collaborateurs, function (index) {
                    message += '          - ' + collaborateurs[index] + '\\n'; // On ajout le nom du collaborateur au message.
                });
                message += \"\\nVoulez-vous valider la compilation quand même ?\";
                return confirm(message); // On affiche une fenêtre de confirmation.
            }
            // Si tous les pointages ont été complété et remplis.
            else {
                return true; // On envoi le formulaire.
            }
        }

        // Affiche une popup avec la liste des collaborateurs qui n'ont pas remplis/validé leur pointage.
        function showUnvalidateCollaborateurs(data) {
            var collaborateurs = JSON.parse(data)['collaborateurSansPointage']; // On convertie la chaine de caractère d'entré en objet Javascript.
            var message = \"Les collaborateurs suivant n'ont pas remplis/validé leur pointage :<br />\"; // On initialise le message d'alert.
            //
            // Pour chaque collaborateur.        
            message += \"<ul>\";
            \$.each(collaborateurs, function (index) {
                message += '<li>' + collaborateurs[index] + '</li>'; // On ajout le nom du collaborateur au message.
            });
            message += \"</ul>\";

            // On affiche le message.
            \$(\"#pointageAlertText\").html(message);
            \$(\"#pointageAlert\").dialog({
                resizable: false,
                height: \"auto\",
                maxHeight: 0.5 * \$(document).height(),
                width: \"30%\",
                modal: true,
                draggable: false,
                dialogClass: \"pointage-alert-content-class\",
                title: \"Pointage non remplis/validé.\",
                buttons: {
                    // Si l'utilisateur valide...
                    \"OK\": function () {
                        \$(this).dialog(\"close\");
                    }
                }
            });
            \$('.ui-dialog :button').blur();
        }

        // Récupére le nombre de pointage non validé par un assistant d'agence et le nombre de collaborateur qui n'ont pas remplis/validé leur pointage en fonction du mois et de l'année.
        function ajaxGetUnvalidate() {
            \$.ajax({
                type: 'POST',
                url: '";
        // line 926
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_pointage_ajax_get_assistante_agence_unvalidate");
        echo "',
                data: {month: \$('#form_Month').val(), year: \$('#form_Year').val(), etablissement: \$('#form_Etablissement').val(), userStatus: '";
        // line 927
        echo twig_escape_filter($this->env, (isset($context["userStatus"]) ? $context["userStatus"] : null), "html", null, true);
        echo "', rhMode: \$('#RHMode').is(':checked')},
                success: function (response) {
                    var pointages = JSON.parse(response); // On convertie le JSON en object Javascript.
                    \$('#pointageEnAttenteValidationAA').text(Object.keys(pointages['pointageEnAttenteValidationAA']).length); // On remplace le nombre du compteur de pointage non validé par un assistant d'agence.
                    \$('#collaborateurSansPointage').text(Object.keys(pointages['collaborateurSansPointage']).length); // On remplace le nombre du compteur de collaborateur qui n'ont pas remplis/validé leur pointage.
                    \$('#collaborateurSansPointage').attr('onclick', \"showUnvalidateCollaborateurs(\" + JSON.stringify(response) + \")\"); // Met à jours les données de la fonction d'affichage des collaborateur qui n'ont pas remplis/validé leur pointage.
                    //\$('#formValidationRefus_Compilation').attr('onclick', \"return preventUnvalidate(\" + Object.keys(pointages['pointageEnAttenteValidationAA']).length + \",\" + Object.keys(pointages['collaborateurSansPointage']).length + \",\" + JSON.stringify(response) + \")\"); // Met à jours les donnée de la fonction de prévention d'envoi de compilation incomplète.
                    \$('#formValidationRefus_collaborateursSansPointage').val(JSON.stringify(pointages['collaborateurSansPointage'])); // On attribue la liste des collaborateurs sans pointages au formulaire de compilation (pour l'envoi de mail).
                }
            });
        }

        // Lance le téléchargement du fichier Excel récapitulatif du pointage courant.
        function ajaxGenerateExcelRecap() {
            \$.ajax({
                type: 'POST',
                url: '";
        // line 943
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_pointage_ajax_generate_excel_recap");
        echo "',
                data: {month: \$('#form_Month').val(), year: \$('#form_Year').val(), etablissement: \$('#form_Etablissement').val(), userStatus: '";
        // line 944
        echo twig_escape_filter($this->env, (isset($context["userStatus"]) ? $context["userStatus"] : null), "html", null, true);
        echo "', rhMode: \$('#RHMode').is(':checked')},
                success: function (response) {
                    window.location = response; // Redirige vers l'URL du fichier à télécharger.
                }
            });
        }

        // Sauvegarde la valeur des sélécteur dans les cookies lors des changements.
        function setSavedDateAndAgency() {
            // Lorqu'on change la date ou l'établissement...
            \$('#form_Month, #form_Year, #RHMode, #form_Etablissement').change(function () {
                // Temps d'expiration du cookie (1 heure).
                var inOneHour = new Date(new Date().getTime() + 60 * 60 * 1000);

                // Si il existe un cookie pour le sélécteur...
                if (Cookies.get(\$(this).attr('id')) !== undefined) {
                    Cookies.remove(\$(this).attr('id')); // On le supprime
                }

                // On crée un cookie avec la nom et la valeur du sélécteur.
                if (\$(this).attr('id') === 'RHMode') {
                    Cookies.set(\$(this).attr('id'), \$(this).is(':checked'), {expires: inOneHour});
                } else {
                    Cookies.set(\$(this).attr('id'), \$(this).val(), {expires: inOneHour});
                }
            });
        }

        // Récupére les valeurs des cookies des sélécteurs.
        function getSavedDateAndAgency() {
            // Initialisation de la liste des sélécteurs.
            var selectors = ['form_Month', 'form_Year', 'form_Etablissement'];

            // Pour chaques sélécteurs...
            \$.each(selectors, function (index, value) {
                // Si il existe un cookie pour le sélécteur et qu'il n'est pas vide...
                if (Cookies.get(value) !== undefined && Cookies.get(value) !== '') {
                    // On assigne la valeur du cookie au sélécteur.
                    \$('#' + value).val(Cookies.get(value));

                    // On déclanche le changement du sélécteur pour déclancher les fonctions associées.
                    if (index === selectors.length - 1) {
                        \$('#' + value).trigger('change');
                    }
                }
            });
        }

        // Permet de télécharger les justificatifs des pointages de la compilation.
        function downloadJustificatifsZip() {
            // On récupére la listes des usernames des collaborateur de la compilation sous forme de tableau.
            var collaborateursUsernames = [];
            \$('.pointageCompile').each(function () {
                collaborateursUsernames.push(\$(this).attr('username'));
            });

            // On génére un objet contenant le mois, l'année et les usernames de la compilation.
            var justificatifsZipInfo = {
                'month': \$('#form_Month').val(),
                'year': \$('#form_Year').val(),
                'usernames': collaborateursUsernames,
                'etablissement': \$('#form_Etablissement').val()
            };

            // Rêquette Ajax qui lance la génération du fichier ZIP.
            \$.ajax({
                url: '";
        // line 1010
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_pointage_ajax_download_justificatifs_zip");
        echo "',
                data: {'justificatifsZipInfo': JSON.stringify(justificatifsZipInfo)},
                success: function (response) {
                    // Si il n'y a pas de fichiers justificatif...
                    if (response === \"No files found\") {
                        // On affiche un message.
                        \$(\"#pointageAlertText\").text(\"Il n'y a aucun fichier justificatif pour cette compilation.\");
                        \$(\"#pointageAlert\").dialog({
                            resizable: false,
                            height: \"auto\",
                            width: \"30%\",
                            modal: true,
                            draggable: false,
                            dialogClass: \"pointage-alert-content-class\",
                            title: \"Pas de justificatif.\",
                            buttons: {
                                // Si l'utilisateur valide...
                                \"OK\": function () {
                                    \$(this).dialog(\"close\");
                                }
                            }
                        });
                        \$('.ui-dialog :button').blur();
                    }
                    // Sinon
                    else {
                        window.location.href = response; // Redirige vers le lien de téléchargement du fichier ZIP.
                    }
                }
            });
        }

        // Ouvre une popup vers l'url de détails passé en paramêtre.
        function openDetailsPopup(detailsUrl) {
            // Ouverture de la popup.
            var detailsPopup = window.open(detailsUrl, 'Details', 'width=350, height=600');

            // Quand la popup est fermée...
            detailsPopup.onunload = function () {
                //\$(\"#form_Month\").trigger('change'); // On recharge la liste des pointages de la compilation.
            };

            return false;
        }

        // Met à jours la liste des managers en fonction du mode RH.
        function gestionPointageSetRHMode(checkbox) {
            console.log(checkbox.is(':checked') ? 'Mode RH activé.' : 'Mode RH désactivé.');

            // Cache les pointages déjà affiché.
            pointageHide();

            \$.ajax({
                url: '";
        // line 1063
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_pointage_ajax_compilation_pointages_rh_mode");
        echo "',
                type: 'POST',
                data: {rhMode: \$('#RHMode').is(':checked'), validationStep: '";
        // line 1065
        echo twig_escape_filter($this->env, (isset($context["validationStep"]) ? $context["validationStep"] : null), "html", null, true);
        echo "'},
                success: function (etablissements) {
                    // On récupère la liste des managers sous forme de tableau.
                    var etablissementsArray = JSON.parse(etablissements);

                    // On supprime les choix de manager déjà existant.
                    \$('#form_Etablissement option').remove();

                    // On ajoute le choix par défaut.
                    \$('#form_Etablissement').append(\"<option value='' selected='selected'>Choisir un etablissement</option>\");

                    // Pour chaques managers de la liste...
                    \$.each(etablissementsArray, function (index, value) {
                        // On ajoute un choix au sélécteur de manager.
                        \$('#form_Etablissement').append(\"<option value='\" + value + \"'>\" + value + \"</option>\");
                    });

                    // On met a jour la valeur de RHMode du formulaire de validation.
                    \$('#formValidationRefus_rhMode').val(\$('#RHMode').is(':checked'));

                    // On déclanche un changement sur le sélécteur de manager pour mettre à jours l'affichage.
                    \$('#form_Etablissement').trigger('change');
                }
            });
        }

        // Affiche un message de confirmation et valide la compilation lors du clique sur le bouton de validation.
        function compilationValidation() {
            // Affiche un message de confirmation lors du clique sur le bouton de compilation.
            \$('#formValidationRefus_Compilation').click(function (event) {
                event.preventDefault();

                // On affiche une fenêtre indiquant qu'il n'y a pas de justificatif de transport.
                \$(\"#pointageAlertText\").text('Confirmer la validation de la compilation ? Celle-ci ne sera plus modifiable.');
                \$(\"#pointageAlert\").dialog({
                    resizable: false,
                    height: \"auto\",
                    width: \"30%\",
                    modal: true,
                    draggable: false,
                    dialogClass: \"pointage-alert-content-class\",
                    title: \"Confirmer la validation ?\",
                    buttons: {
                        // Si l'utilisateur valide...
                        \"Valider\": function () {
                            \$(this).dialog(\"close\");
                            // On valide le formulaire de compilation.
                            \$(\"form[name='formValidationRefus']\").submit();
                        },
                        // Si l'utilisateur annule, on ferme la fenêtre.
                        \"Annuler\": function () {
                            \$(this).dialog(\"close\");
                        }
                    }
                });
                \$('.ui-dialog :button').blur();
            });
        }

        // Coupe une chaîne de charactères plus grande que 30 lettres et ajout '...' à la fin.
        function truncateString(string) {
            if (string && string.length > 30) {
                return string.substring(0, 30) + '...';
            } else {
                return string;
            }
        }

        // Affiche une popup contenant le texte complet et permet d'éditer le texte.
        function showFullTexte(string, element) {
            // Fonction de delay entre les frappes.
            var delay = (function () {
                var timer = 0;
                return function (callback, ms) {
                    clearTimeout(timer);
                    timer = setTimeout(callback, ms);
                };
            })();

            // On ajoute une zone d'édition de texte à la popup.
            \$(\"#pointageAlertText\").html(\"<textarea id='regularisationTextarea' style='box-sizing: border-box; width: 100%; height: 100px; max-width: 100%; max-height: 100px;'\" + ('";
        // line 1145
        echo twig_escape_filter($this->env, (isset($context["validationStep"]) ? $context["validationStep"] : null), "html", null, true);
        echo "' === 'Final' ? \"disabled='disabled'\" : \"\") + \">\" + atob(string) + \"</textarea>\");

            // On récupère l'username du pointage.
            var username = element.parents('tr').attr('username');

            // Lors de l'édition de texte...
            \$('#regularisationTextarea').on('keyup paste', function () {
                // On récupère le texte.
                var regularisation_text = \$(this).val();

                // On sauvegarde la nouvelle valeur de régularisation.
                delay(function () {
                    \$.ajax({
                        url: \"";
        // line 1158
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_pointage_ajax_update_regularisation");
        echo "\",
                        type: 'POST',
                        data: {regularisationText: regularisation_text, username: username, month: \$('#form_Month').val(), year: \$('#form_Year').val()},
                        success: function () {
                            // On met à jour la fonction d'affichage du texte complet et le texte de la cellule de régularisation.
                            element.attr('onclick', \"showFullTexte('\" + btoa(regularisation_text) + \"', \$(this));\");
                            element.text(truncateString(regularisation_text));
                        }
                    });
                }, 1000);
            });

            // On affiche le message.
            \$(\"#pointageAlert\").dialog({
                resizable: false,
                height: \"auto\",
                maxHeight: 0.5 * \$(document).height(),
                width: \"30%\",
                modal: true,
                draggable: false,
                dialogClass: \"pointage-alert-content-class\",
                title: \"Régularisation\",
                buttons: {
                    \"Fermer\": function () {
                        \$(this).dialog(\"close\");
                    }
                }
            });
            \$('#regularisationTextarea').blur();
            \$('.ui-dialog :button').blur();
        }

        // Permet d'ajouter des fichiers justificatifs complémentaires à la compilation.
        function uploadJustificatifCompilation() {
            function sendFiles(popup) {
                // Vérifie qu'un fichier est séléctionné.
                if (\$('#uploadJustificatifCompilationFileForm').find(\"input[name='files[]']\").val() === \"\") {
                    return false;
                }

                // Lors de l'envoi du formulaire.
                \$('#uploadJustificatifCompilationFileForm').on('submit', function (e) {
                    // On bloque l'envoi du formulaire.
                    e.preventDefault();

                    // On récupère les données du formulaire.
                    var formData = new FormData(\$('#uploadJustificatifCompilationFileForm')[0]);

                    // On envoi les données du formulaire.
                    \$.ajax({
                        url: '";
        // line 1208
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_pointage_ajax_upload_justificatif_compilation");
        echo "',
                        type: 'POST',
                        data: formData,
                        contentType: false,
                        processData: false,
                        success: function () {
                            // Affichage d'un message de confirmation et fermeture de la fenêtre.
                            \$(\"#pointageAlert\").html(\"<p style='color: green; text-align: center;'>Envoi terminé, fermeture de la fenêtre dans 3 secondes...</p>\");
                            var timer = 2;
                            var closingMessageInterval = setInterval(function () {
                                if (timer === 0) {
                                    clearInterval(closingMessageInterval);
                                    popup.dialog(\"close\");
                                }
                                \$(\"#pointageAlert\").html(\"<p style='color: green; text-align: center;'>Envoi terminé, fermeture de la fenêtre dans \" + timer + \" secondes...</p>\");
                                timer--;
                            }, 1000);
                        }
                    });

                    // Affichage d'un message de confirmation d'envoi en cours et on cache le bouton d'ajout.
                    \$(\"#pointageAlert\").html(\"<p style='text-align: center;'>Envoi en cours...</p>\");
                    \$(\":button:contains('Ajouter')\").hide();
                });

                // On envoi le formulaire.
                \$('#uploadJustificatifCompilationFileForm').submit();
            }

            // Ouverture d'une pop-up d'envoi de fichiers.
            var form = \"<form id='uploadJustificatifCompilationFileForm' type='POST' enctype='multipart/form-data' style='border: none;'>\";
            form += \"<input name='files[]' type='file' multiple>\";
            form += \"<input name='month' type='hidden' value='\" + \$(\"#form_Month\").val() + \"'>\";
            form += \"<input name='year' type='hidden' value='\" + \$(\"#form_Year\").val() + \"'>\";
            form += \"<input name='etablissement' type='hidden' value='\" + \$(\"#form_Etablissement\").val() + \"'>\";
            form += \"</form>\";
            \$(\"#pointageAlert\").html(form);
            \$(\"#pointageAlert\").dialog({
                resizable: false,
                height: \"auto\",
                maxHeight: 0.5 * \$(document).height(),
                width: \"30%\",
                modal: true,
                draggable: false,
                dialogClass: \"pointage-alert-content-class\",
                title: \"Ajouter un justificatif\",
                buttons: {
                    \"Ajouter\": function () {
                        sendFiles(\$(this));
                    },
                    \"Fermer\": function () {
                        \$(this).dialog(\"close\");
                    }
                }
            });
            \$(\"#uploadJustificatifCompilationFileForm input\").blur();
        }
    </script>

";
    }

    public function getTemplateName()
    {
        return "@NoxIntranetPointage/Pointage/pointagesCompilation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1409 => 1208,  1356 => 1158,  1340 => 1145,  1257 => 1065,  1252 => 1063,  1196 => 1010,  1127 => 944,  1123 => 943,  1104 => 927,  1100 => 926,  986 => 815,  982 => 814,  951 => 786,  933 => 771,  917 => 758,  404 => 248,  397 => 244,  377 => 229,  372 => 227,  368 => 226,  363 => 224,  311 => 177,  307 => 176,  229 => 101,  226 => 100,  220 => 98,  213 => 95,  211 => 94,  206 => 92,  191 => 79,  187 => 77,  185 => 76,  156 => 50,  150 => 47,  146 => 46,  142 => 45,  136 => 42,  132 => 41,  128 => 40,  122 => 37,  118 => 36,  114 => 35,  111 => 34,  103 => 31,  100 => 30,  98 => 29,  92 => 26,  88 => 25,  80 => 20,  76 => 19,  72 => 18,  64 => 13,  59 => 11,  56 => 10,  53 => 9,  43 => 7,  37 => 5,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@NoxIntranetPointage/Pointage/pointagesCompilation.html.twig", "C:\\wamp\\www\\Symfony\\src\\NoxIntranet\\PointageBundle\\Resources\\views\\Pointage\\pointagesCompilation.html.twig");
    }
}
