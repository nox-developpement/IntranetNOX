<?php

/* @NoxIntranetRessources/AssistantAffaire/SuiviEnCours/assistantaffaireremplissageformulaire.html.twig */
class __TwigTemplate_dbb7cb4bcdc020bc823ebf8033c617f95388e035b8f583998403c48027c3eb9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@NoxIntranetRessources/AssistantAffaire/SuiviEnCours/assistantaffaireremplissageformulaire.html.twig", 1);
        $this->blocks = array(
            'titrePage' => array($this, 'block_titrePage'),
            'messageAccueil' => array($this, 'block_messageAccueil'),
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        echo " Edition de feuille de suivi ";
    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo "Edition de feuille de suivi - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["suivi"]) ? $context["suivi"] : null), "Nom", array()), "html", null, true);
    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        // line 8
        echo "
    <div id='DivFormulaireSelectionVersionSuivi'>

        ";
        // line 11
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formSelectionVersionSuivi"]) ? $context["formSelectionVersionSuivi"] : null), 'form_start', array("attr" => array("class" => "formulaireSelectionVersionSuivi")));
        echo "
        ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["formSelectionVersionSuivi"]) ? $context["formSelectionVersionSuivi"] : null), 'errors');
        echo "

        <fieldset>

            <legend>Version</legend>

            ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionVersionSuivi"]) ? $context["formSelectionVersionSuivi"] : null), "version", array()), 'label', array("label_attr" => array("class" => "labelFormulaireSelectionVersionSuivi"), "label" => "Selection de la version :"));
        echo "
            ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionVersionSuivi"]) ? $context["formSelectionVersionSuivi"] : null), "version", array()), 'errors');
        echo "
            ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionVersionSuivi"]) ? $context["formSelectionVersionSuivi"] : null), "version", array()), 'widget', array("attr" => array("class" => "selectFormulaireSelectionVersionSuivi")));
        echo "

            ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionVersionSuivi"]) ? $context["formSelectionVersionSuivi"] : null), "Supprimer", array()), 'widget', array("attr" => array("class" => "boutonFormulaire")));
        echo "

        </fieldset>

        ";
        // line 26
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formSelectionVersionSuivi"]) ? $context["formSelectionVersionSuivi"] : null), 'form_end');
        echo "

    </div>

    <div id=\"DivChoixActionInfo\" style='width: 70%; margin: auto; text-align: center; margin-bottom: 2%;'>
        <div style='display: inline-block; width: 33.33%; text-align: center;'>
            <button type=\"button\" name='informationsSuivi' class='boutonFormulaire' style='font-size: 0.9vw;'>Informations</button>
        </div><!--
        --><div style='display: inline-block; width: 33.33%; text-align: center;'>
            <button type=\"button\" name='remplissageSuivi' class='boutonFormulaire' style='font-size: 0.9vw;'>Remplissage</button>
        </div><!--
        --><div style='display: inline-block; width: 33.33%; text-align: center;'>
            <button type=\"button\" name='cloturationSuivi' class='boutonFormulaire' style='font-size: 0.9vw;'>Cloturation</button>
        </div>
    </div>

    <div id=\"DivFormulaireCloturationSuivi\" style='display: none;'>

        ";
        // line 44
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formCloturationSuivi"]) ? $context["formCloturationSuivi"] : null), 'form_start', array("attr" => array("class" => "formulaireCloturationSuivi")));
        echo "
        ";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["formCloturationSuivi"]) ? $context["formCloturationSuivi"] : null), 'errors');
        echo "

        <fieldset>

            <legend>Cloturation du suivi</legend>

            ";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formCloturationSuivi"]) ? $context["formCloturationSuivi"] : null), "Cloturer", array()), 'widget', array("label" => "Cloturer le suivi", "attr" => array("class" => "boutonFormulaire")));
        echo "

        </fieldset> 

        ";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formCloturationSuivi"]) ? $context["formCloturationSuivi"] : null), "_token", array()), 'widget');
        echo "
        ";
        // line 56
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formCloturationSuivi"]) ? $context["formCloturationSuivi"] : null), 'form_end');
        echo "
    </div>

    <div id=\"DivInfoSuivi\">

        <form class=\"formInfo\">
            <fieldset>
                <legend>Informations du suivi</legend>
                <div id='formInfoChampsManquants'>
                    <p style='text-align: center; color: red; margin: 0;'>Attention les informations suivantes sont manquantes :</p>
                    <ul style='color: red; display: inline-block; margin: 1.5% 0 1.5% 0;'>
                    </ul>
                </div>
                <div style='display: flex; justify-content: center; border-bottom: 1px solid #1F4E79; padding-bottom: 2%; '>             
                    <div id=\"formInfoInfoSuivi\" style='display: inline-block; width: 85%; align-self: center;'>
                        <label for='agence'>Agence: </label><input name='agence' type='text' value='";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["suivi"]) ? $context["suivi"] : null), "Agence", array()), "html", null, true);
        echo "' disabled><br />
                        <label for='numGX'>Numéro GX: </label><input name='numGX' type='text' value='";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["suivi"]) ? $context["suivi"] : null), "NumeroGX", array()), "html", null, true);
        echo "' disabled><br />
                        <label for='commune'>Commune: </label><input name='commune' type='text' value='";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["suivi"]) ? $context["suivi"] : null), "Commune", array()), "html", null, true);
        echo "' disabled><br />
                        <label for='marche'>Marché: </label><input name='marche' type='text' value='";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["suivi"]) ? $context["suivi"] : null), "Marche", array()), "html", null, true);
        echo "' disabled><br />   
                        <label for='objet'>Objet: </label><input name='objet' type='text' value='";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["suivi"]) ? $context["suivi"] : null), "Objet", array()), "html", null, true);
        echo "' disabled><br />
                        <label for='ningediabep'>N° INGEDIA BEP: </label><input name='ningediabep' type='text' value='";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["suivi"]) ? $context["suivi"] : null), "NoINGEDIABEP", array()), "html", null, true);
        echo "' disabled><br />
                        <label for='estimatif'>Estimatif: </label><input name='estimatif' type='text' value='";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["suivi"]) ? $context["suivi"] : null), "Estimatif", array()), "html", null, true);
        echo "' disabled><br />
                        <label for='nclient'>N° Client: </label><input name='nclient' type='text' value='";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["suivi"]) ? $context["suivi"] : null), "NoClient", array()), "html", null, true);
        echo "' disabled><br />
                        <label for='nomClient'>Client: </label><input name='nomClient' type='text' value='";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "NomCLient", array()), "html", null, true);
        echo "' disabled><br />
                        <label for='adresseClient'>Adresse client: </label><input name='adresseClient' type='text' title=\"Cliquez-ici pour l'adresse du client.\" value='Cliquez-ici.' style='text-align: center; cursor: pointer;' readonly><br />
                        <label>Interlocuteur: </label>
                        <select type='text' name='interlocuteur' disabled>
                            ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["interlocuteurs"]) ? $context["interlocuteurs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["interlocuteur"]) {
            // line 84
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["interlocuteur"], "NContact", array()), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($context["interlocuteur"], "NContact", array()) == $this->getAttribute((isset($context["interlocuteurActuel"]) ? $context["interlocuteurActuel"] : null), "NContact", array()))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["interlocuteur"], "PrenomContact", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["interlocuteur"], "NomContact", array()), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['interlocuteur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "                        </select>
                    </div><!--
                    --><div id='fomInfoSuiviLocking' title=\"Verrouiller/Déverrouiller l'édition du contenu.\" style='display: inline-block; width: 15%; align-self: center;  cursor: pointer;' locked=true><!--
                        --><img id='fomInfoSuiviLockingImgLocked' src='";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/Lock-128.png"), "html", null, true);
        echo "' alt='Déverrouiller modification.' style='width: 70%;'><!--
                        --><img id='fomInfoSuiviLockingImgUnlocked' src='";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/Lock-Open-128.png"), "html", null, true);
        echo "' alt='Verrouiller modification.' style='width: 70%; display: none;'><!--                                             
                        --></div>
                </div>
                <div id=\"formInfoNoCommande\">
                    <label for='addNoCommandeName' style='display: inline-block; width: 100%; text-align: center; margin-top: 2%;'>N°Commande</label><br />
                    <input name='addNoCommandeName' type='text' style='width: 30%; margin: 0; margin-bottom: 1%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box; text-align: center;'><button type='button' name='addNoCommande' class='boutonFormulaire' style='width: 9%; margin-left: 1%;'>+</button><br />
                    <select name='noCommandeSelector' style='width: 40%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;' size='5'>
                        ";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["suivi"]) ? $context["suivi"] : null), "NoCommande", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["nCommande"]) {
            // line 98
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $context["nCommande"], "html", null, true);
            echo "\" style='text-align: center;'>";
            echo twig_escape_filter($this->env, $context["nCommande"], "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nCommande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "                    </select><br />
                    <button name='deleteNoCommande' type='button' class='boutonFormulaire' style='width: 40%; font-size: 0.8vw; margin-top: 1%;'>Supprimer</button>
                </div>
                <div id='ajaxSearchAffairesDiv' style='position: absolute; top: 0; left: 0; background-color: white; border: 1px solid rgb(165, 172, 178); font-size: 0.8vw; display: none;'>
                </div>
            </fieldset>
        </form>

    </div>

    <div id=\"DivFormulaireRemplissageSuivi\" style=\"margin-bottom: 5%; display: none;\">

        ";
        // line 112
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formDonneesSuivi"]) ? $context["formDonneesSuivi"] : null), 'form_start', array("attr" => array("class" => "formulaireRemplissageSuivi")));
        echo "
        ";
        // line 113
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["formDonneesSuivi"]) ? $context["formDonneesSuivi"] : null), 'errors');
        echo "

        <fieldset>

            <legend>Remplissage de ";
        // line 117
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["suivi"]) ? $context["suivi"] : null), "Nom", array()), "html", null, true);
        echo "</legend>

            ";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["champsViews"]) ? $context["champsViews"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["champ"]) {
            // line 120
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formDonneesSuivi"]) ? $context["formDonneesSuivi"] : null), $this->getAttribute($context["champ"], "Champ", array())), 'errors');
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['champ'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "
            <p><!--
                ";
        // line 124
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["champsViews"]) ? $context["champsViews"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["champ"]) {
            // line 125
            echo "                    -->";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formDonneesSuivi"]) ? $context["formDonneesSuivi"] : null), $this->getAttribute($context["champ"], "Champ", array())), 'label', array("label_attr" => array("class" => "")) + (twig_test_empty($_label_ = ($this->getAttribute($context["champ"], "Nom", array()) . ": ")) ? array() : array("label" => $_label_)));
            echo " <!--  
                    -->";
            // line 126
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formDonneesSuivi"]) ? $context["formDonneesSuivi"] : null), $this->getAttribute($context["champ"], "Champ", array())), 'widget');
            echo "<!--
                    --><br />

                    ";
            // line 129
            if (($this->getAttribute($context["champ"], "Type", array()) == "Nombre")) {
                // line 130
                echo "                        <script>
                            var fax = document.getElementById('formDonneesSuivi_";
                // line 131
                echo twig_escape_filter($this->env, $this->getAttribute($context["champ"], "Champ", array()), "html", null, true);
                echo "');
                            var phoneRegex = new RegExp(/^[-+]?[0-9]*\\.?[0-9]+\$/);
                            var checkValidPhoneNumber = function () {
                                if (!phoneRegex.test(fax.value)) {
                                    fax.style.borderColor = 'red';
                                    fax.setCustomValidity(\"Veuillez entrer un nombre. Les dÃ©cimaux doivent Ãªtre sÃ©parÃ© par un point.\");
                                } else {
                                    fax.style.borderColor = 'initial';
                                    fax.setCustomValidity('');
                                }
                            };
                            \$('#formDonneesSuivi_";
                // line 142
                echo twig_escape_filter($this->env, $this->getAttribute($context["champ"], "Champ", array()), "html", null, true);
                echo "').keyup(function () {
                                checkValidPhoneNumber();
                            });
                        </script>
                    ";
            }
            // line 147
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['champ'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        echo "
                ";
        // line 150
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formDonneesSuivi"]) ? $context["formDonneesSuivi"] : null), "Generate", array()), 'widget', array("label" => "Générer fichier Excel", "attr" => array("class" => "boutonFormulaire")));
        echo "
                ";
        // line 151
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formDonneesSuivi"]) ? $context["formDonneesSuivi"] : null), "Save", array()), 'widget', array("label" => "Sauvegarder le suivi", "attr" => array("class" => "boutonFormulaire")));
        echo "

            </p>

        </fieldset> 

        ";
        // line 157
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formDonneesSuivi"]) ? $context["formDonneesSuivi"] : null), 'form_end');
        echo "
    </div>

    <script>
        \$(window).load(function () {
            checkMissingInfo();
            hideAndShowDataAdding();
            openClientPopup();
            ajaxAddNoCommand();
            ajaxDeleteNoCommande();
            lockUnlockDataModifying();
            getGXAffaires();
            ajaxSaveNewInfo();
            selectInterlocuteurAction();
        });

        // Ouvre un fenêtre pop-up contenant la/les adresse(s) du client.
        function openClientPopup() {
            // Lors du clic sur le bouton des adresses...
            \$(\"input[name='adresseClient']\").click(function () {

                // On récupére la taille et la position de qu'on va attribuer à la pop-up.
                var screenHeight = \$(window).outerHeight() / 2;
                var screenWidth = \$(window).outerWidth() / 3;
                var topPosition = \$(window).outerHeight() / 10;
                var leftPosition = \$(window).outerWidth() / 15;
                // On ouvre une fenêtre pop-up avec le code des adresses du client.
                var newwindow = window.open('', '', 'height=' + screenHeight + ',width=' + screenWidth + ',top=' + topPosition + ',left=' + leftPosition);
                newwindow.document.write(\"";
        // line 185
        echo (isset($context["clientAdr"]) ? $context["clientAdr"] : null);
        echo "\");
                // On applique le fond de l'intranet à la fenêtre pop-up.
                \$(newwindow.document).contents().find('body').css('background-image', \$('#section_principal').css('background-image'));
                // On rempli l'attribut title de chaque input avec sa valeur.
                \$(newwindow.document).contents().find('input').each(function () {
                    \$(this).attr('title', \$(this).val());
                });
                // On focus la fenêtre pop-up.
                if (window.focus) {
                    newwindow.focus();
                }
                return false;
            });
        }

        // Ajoute une numéro de commande au suivi courant.
        function ajaxAddNoCommand() {
            // Lors d'un clic sur le bouton d'ajout de N°Commande.
            \$(\"button[name='addNoCommande']\").click(function () {
                // Si le numéro de commande n'est pas vide.
                if (\$.trim(\$(\"input[name='addNoCommandeName']\").val()).length > 0) {
                    // On change le contenu du bouton d'ajout de numéro de commande par un gif de chargement et on le désactive.
                    \$(\"button[name='addNoCommande']\").attr('disabled', true);
                    \$(\"button[name='addNoCommande']\").html('&nbsp;');
                    \$(\"button[name='addNoCommande']\").css({
                        'background-image': \"url(";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/noCommandeTraitement.gif"), "html", null, true);
        echo ")\",
                        'background-position': 'center center',
                        'background-repeat': 'no-repeat',
                        'background-size': 'auto 50%'
                    });
                    // On sauvegarde le numéro en base de donnée avec une fonction Ajax.        
                    \$.ajax({
                        url: '";
        // line 217
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_assistant_affaire_ajax_nocommande_add");
        echo "',
                        type: 'POST',
                        data: {'IDSuivi': '";
        // line 219
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["suivi"]) ? $context["suivi"] : null), "id", array()), "html", null, true);
        echo "', 'noCommandes': \$(\"input[name='addNoCommandeName']\").val()},
                        success: function (response) {
                            // On change le contenu du bouton par celui d'origine et on le réactive.
                            \$(\"button[name='addNoCommande']\").removeAttr('disabled');
                            \$(\"button[name='addNoCommande']\").html('+');
                            \$(\"button[name='addNoCommande']\").css({
                                'background-image': \"none\",
                                'background-position': 'center center',
                                'background-repeat': 'no-repeat',
                                'background-size': 'auto 50%'
                            });
                            // Si le numéro d'affaire n'existe pas déjà.
                            if (response === 'true') {
                                // On fait apparaître le nouveau numéro dans le selecteur de numéros.
                                var newOption = \$(\"<option value='\" + \$(\"input[name='addNoCommandeName']\").val() + \"' style='text-align: center; background-color: green;'>\" + \$(\"input[name='addNoCommandeName']\").val() + \"</option>\");
                                \$(\"select[name='noCommandeSelector']\").append(newOption);
                                // On scroll en bas du sélécteur de numéro.
                                \$(\"select[name='noCommandeSelector']\").scrollTop(\$(\"select[name='noCommandeSelector']\")[0].scrollHeight);
                                // On anime la couleur de fond du nouveau numéro.
                                newOption.animate({
                                    backgroundColor: 'white'
                                }, 3000);
                                // On efface le contenue de nouveau numéro.
                                \$(\"input[name='addNoCommandeName']\").val('');
                            }
                            // Si le numéro d'affaire existe déjà.
                            else {
                                // On efface le contenue de nouveau numéro et on affiche un message d'avertissement.
                                var messageErreur = \$(\"<p style='display: inline-block; margin: 0% 0% 1% 0%; color: red;'>Le numéro de commande existe déjà !</p>\");
                                \$(\"label[for='addNoCommandeName']\").after(messageErreur);
                                setTimeout(function () {
                                    messageErreur.fadeOut(1000, function () {
                                        messageErreur.remove();
                                    });
                                }, 4000);
                                \$(\"input[name='addNoCommandeName']\").val('');
                                //alert('Le numéro d\\'affaire existe déjà !');
                            }
                        }
                    });
                }
            });
        }

        // Supprime un numéro de commande du suivi courant.
        function ajaxDeleteNoCommande() {
            // Lors d'un clic sur le bouton de suppression de numéro de commande.
            \$(\"button[name='deleteNoCommande']\").click(function () {
                // Si une valeur est séléctionnée.
                if (\$(\"select[name='noCommandeSelector']\").val() !== null) {
                    // On change le contenu du bouton de suppression de numéro de commande par un gif de chargement et on le désactive.
                    \$(\"button[name='deleteNoCommande']\").attr('disabled', true);
                    \$(\"button[name='deleteNoCommande']\").html('&nbsp;');
                    \$(\"button[name='deleteNoCommande']\").css({
                        'background-image': \"url(";
        // line 273
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/noCommandeTraitement.gif"), "html", null, true);
        echo ")\",
                        'background-position': 'center center',
                        'background-repeat': 'no-repeat',
                        'background-size': 'auto 50%'
                    });
                    // On supprime le numéro de la base de données avec une fonction Ajax.
                    \$.ajax({
                        url: '";
        // line 280
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_assistant_affaire_ajax_nocommande_delete");
        echo "',
                        type: 'POST',
                        data: {'IDSuivi': '";
        // line 282
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["suivi"]) ? $context["suivi"] : null), "id", array()), "html", null, true);
        echo "', 'noCommandes': \$(\"select[name='noCommandeSelector']\").val()},
                        success: function () {
                            // On change le contenu du bouton par celui d'origine et on le réactive.
                            \$(\"button[name='deleteNoCommande']\").removeAttr('disabled');
                            \$(\"button[name='deleteNoCommande']\").html('Supprimer');
                            \$(\"button[name='deleteNoCommande']\").css({
                                'background-image': \"none\",
                                'background-position': 'center center',
                                'background-repeat': 'no-repeat',
                                'background-size': 'auto 50%'
                            });
                            // On efface le numéros de commande dans le sélécteur de numéro.
                            \$(\"select[name='noCommandeSelector'] option:selected\").remove();
                        }
                    });

                }
            });
        }

        // Vérrouille/Déverrouille l'édition des champs d'informations lors du clic sur le cadena.
        function lockUnlockDataModifying() {
            // Lors d'un clic sur le cadena...
            \$('#fomInfoSuiviLocking').click(function () {
                // Si le cadena est vérrouillé.
                if (\$(this).attr('locked') === 'true') {
                    \$(this).attr('locked', 'false'); // On change l'attribut de vérrouillage de la 'div'.

                    // On change l'image du cadena.
                    \$('#fomInfoSuiviLockingImgLocked').hide();
                    \$('#fomInfoSuiviLockingImgUnlocked').show();

                    \$(\"#formInfoInfoSuivi input:not(input[name='nclient'], input[name='nomClient'], input[name='adresseClient']), #formInfoInfoSuivi select\").removeAttr('disabled'); // On active les 'input' d'information.
                }
                // Si le cadena est déverrouiller
                else {
                    \$(this).attr('locked', 'true'); // On change l'attribut de vérrouillage de la 'div'.

                    // On change l'image du cadena.
                    \$('#fomInfoSuiviLockingImgLocked').show();
                    \$('#fomInfoSuiviLockingImgUnlocked').hide();


                    \$(\"#formInfoInfoSuivi input:not(input[name='nclient'], input[name='nomClient'], input[name='adresseClient']), #formInfoInfoSuivi select\").attr('disabled', true); // On désactive les 'input' d'information.
                }
            });
        }

        // Détécte les modification du contenu des champs d'info et éxecute une requête Ajax pour sauvegarder les changements.
        function ajaxSaveNewInfo() {

            // Initialisation d'un timer pour executer la fonction après 1 seconde sans frappe.
            var typewatch = (function () {
                var timer = 0;
                return function (callback, ms) {
                    clearTimeout(timer);
                    timer = setTimeout(callback, ms);
                };
            })();
            // Execute la fonction Ajax lorsque le contenu d'un champ est modifié.
            \$(\"#formInfoInfoSuivi input:not(input[name='nclient'], input[name='nomClient'], input[name='adresseClient'], input[name='numGX'])\").on('keyup paste change', function () {
                var champ = \$(this);
                typewatch(function () {
                    \$.ajax({
                        url: '";
        // line 346
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_assistant_affaire_ajax_save_new_infos");
        echo "',
                        type: 'POST',
                        data: {'IDSuivi': '";
        // line 348
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["suivi"]) ? $context["suivi"] : null), "id", array()), "html", null, true);
        echo "', 'row': champ.attr('name'), 'newInfo': champ.val()},
                        success: function (response) {
                            if (response === 'Saved') {
                                // On change la fond du champ en vert.
                                champ.stop().css('background-color', 'green');
                                // On remet le fond par défaut au bout de 3 secondes.
                                champ.animate({
                                    backgroundColor: 'initial'
                                }, 3000, function () {
                                    champ.removeAttr('style');
                                });
                            }
                            checkMissingInfo();
                        }
                    });
                }, 500);
            });
            // Execute la fonction Ajax lorsque la valeur du sélécteur est modifié.
            \$(\"select[name='interlocuteur']\").on('change', function () {
                var champ = \$(this);
                typewatch(function () {
                    \$.ajax({
                        url: '";
        // line 370
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_assistant_affaire_ajax_save_new_infos");
        echo "',
                        type: 'POST',
                        data: {'IDSuivi': '";
        // line 372
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["suivi"]) ? $context["suivi"] : null), "id", array()), "html", null, true);
        echo "', 'row': champ.attr('name'), 'newInfo': champ.val()},
                        success: function (response) {
                            if (response === 'Saved') {
                                // On change la fond du champ en vert.
                                champ.stop().css('background-color', 'green');
                                // On remet le fond par défaut au bout de 3 secondes.
                                champ.animate({
                                    backgroundColor: 'initial'
                                }, 3000, function () {
                                    champ.removeAttr('style');
                                });
                            }
                            checkMissingInfo();
                        }

                    });
                }, 500);
            });
        }

        // Renvoi les affaires dont le numéro contient la chaine \"search\".
        function getGXAffaires() {

            // Supprime les triggers d'event déjà existant.
            \$(\"input[name='numGX']\").unbind('blur');
            \$(\"input[name='numGX']\").unbind('keyup');
            \$(\"input[name='numGX']\").unbind('paste');
            //\$('#tableFeuillePointage tr:nth-child(2) .project').unbind('input');

            // Pour toutes action dans une cellule titre d'affaire.
            \$(\"input[name='numGX']\").on('keyup paste', function () {

                // Si le champ de recherche n'est pas vide.
                if (\$(this).val() !== '') {
                    \$('#ajaxSearchAffairesDiv').hide();
                    var search = \$(this).val();
                    var celluleProject = \$(this);
                    var affaires = \"http://\" + window.location.hostname + \"/Symfony/web/DatabasesCSV/AffairesEncode.csv\";
                    var compteur = 0;
                    // Supprime les paragraphes de résultats existants.
                    \$('#ajaxSearchAffairesDiv').empty();
                    // Fixe la largeur minimale de la 'div' des résultats a 1.1 fois la taille de la cellule.
                    var minWidth = celluleProject.outerWidth() * 1.1;
                    \$('#ajaxSearchAffairesDiv').css('min-width', minWidth);
                    // Cherche la chaine saisi dans le fichier csv des affaires et ajoute une balise 'p' par résultats.
                    if (search !== '') {
                        \$.get(affaires, function (data) {
                            var lineByLine = data.split(\"\\n\");
                            var numsAffaires = [];
                            \$.each(lineByLine, function (index, value) {
                                var donnes = value.split(';');
                                numsAffaires.push(donnes[0]);
                                if (compteur < 10 && donnes[0].indexOf(search) >= 0 && (search.trim() !== donnes[0].trim())) {
                                    \$('#ajaxSearchAffairesDiv').append(\"<p class='ajaxSearchAffairesDivResults' data-numaffaire='\" + donnes[0] + \"' data-nomaffaire='\" + donnes[1] + \"' style='background-color: white; text-align: center; margin: 0; padding: 0.5vw 0.5vw 0.5vw 0.5vw;'>\" + donnes[0] + \" \" + donnes[1] + \"</p>\");
                                    compteur++;
                                }
                            });
                            // Effet visuel au passage de la souris sur les résultats.
                            \$('.ajaxSearchAffairesDivResults').hover(function () {
                                \$(this).css('background-color', 'rgb(217, 217, 217)');
                            }, function () {
                                \$(this).css('background-color', 'white');
                            });
                            // Lors du clique sur un résultat on remplace le contenu de la recherche par le résultat et on sauvegarde le résultat en base de données.
                            \$('.ajaxSearchAffairesDivResults').mousedown(function () {
                                celluleProject.val(\$(this).attr('data-numaffaire'));
                                celluleProject.attr('title', \$(this).attr('data-nomaffaire'));
                                // Requête Ajax pour la sauvegarde en base de données.
                                \$.ajax({
                                    url: '";
        // line 441
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_assistant_affaire_ajax_save_new_infos");
        echo "',
                                    type: 'POST',
                                    data: {'IDSuivi': '";
        // line 443
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["suivi"]) ? $context["suivi"] : null), "id", array()), "html", null, true);
        echo "', 'row': celluleProject.attr('name'), 'newInfo': celluleProject.val()},
                                    success: function (response) {
                                        if (response === 'Saved') {
                                            // On change la fond du champ en vert.
                                            celluleProject.stop().css('background-color', 'green');
                                            // On remet le fond par défaut au bout de 3 secondes.
                                            celluleProject.animate({
                                                backgroundColor: 'initial'
                                            }, 3000, function () {
                                                celluleProject.removeAttr('style');
                                            });
                                        }
                                        checkMissingInfo();
                                    }
                                });

                            });
                            // Positione la 'div' contenant les résultats sous la cellules focus.
                            \$('#ajaxSearchAffairesDiv').css('top', celluleProject.offset().top + celluleProject.outerHeight());
                            \$('#ajaxSearchAffairesDiv').css('left', celluleProject.offset().left);
                            // Affiche la 'div' des résultats si elle n'est pas vide.
                            if (compteur > 0 && \$('#form_NumeroGX').val() !== '') {
                                \$('#ajaxSearchAffairesDiv').show();
                            }

                            // Cache la div des résultats lors du blur du champ de recherche et vide la cellule si le contenu n'est pas un numéro d'affaire existant.
                            celluleProject.blur(function () {
                                \$('#ajaxSearchAffairesDiv').empty();
                                \$('#ajaxSearchAffairesDiv').hide();
                                // Si le numéro d'affaire n'existe pas on vide la cellule et on la sauvegarde en base de données.
                                if (\$.inArray(celluleProject.val(), numsAffaires) === -1) {
                                    celluleProject.val('');
                                    // Requête Ajax pour la sauvegarde en base de données.
                                    \$.ajax({
                                        url: '";
        // line 477
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_assistant_affaire_ajax_save_new_infos");
        echo "',
                                        type: 'POST',
                                        data: {'IDSuivi': '";
        // line 479
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["suivi"]) ? $context["suivi"] : null), "id", array()), "html", null, true);
        echo "', 'row': celluleProject.attr('name'), 'newInfo': celluleProject.val()},
                                        success: function (response) {
                                            if (response === 'Saved') {
                                                // On change la fond du champ en vert.
                                                celluleProject.stop().css('background-color', 'green');
                                                // On remet le fond par défaut au bout de 3 secondes.
                                                celluleProject.animate({
                                                    backgroundColor: 'initial'
                                                }, 3000, function () {
                                                    celluleProject.removeAttr('style');
                                                });
                                            }
                                            checkMissingInfo();
                                        }
                                    });
                                }
                            });
                        });
                    }
                }
            });
        }

        // Vérifie le contenu des champs d'information et affiche le nom des champs vides.
        function checkMissingInfo() {
            var newLiHTML = ''; // Initialisation du nouveau contenu HTML;

            // Pour chaque input du formulaire.
            \$(\"#formInfoInfoSuivi input:not(input[name='nclient'], input[name='nomClient'], input[name='adresseClient'])\").each(function () {
                // Si la du champ est nul.
                if (\$(this).val() === '') {
                    // On ajout un 'li' avec le texte du label associé au champ.
                    newLiHTML += \"<li style='text-align: left;'>\" + \$(\"label[for='\" + \$(this).attr('name') + \"'\").text().replace(':', '') + '</li>';
                }
            });
            // Si le nouveau contenu HTML n'est pas vide.
            if (newLiHTML !== '') {
                // On fait apparaître la 'div' des informations manquantes.
                \$('#formInfoChampsManquants').show();
            }
            // Si le nouveau contenu HTML est vide.
            else {
                // On fait disparaitre la 'div' des informations manquantes.
                \$('#formInfoChampsManquants').hide();
            }
            // On remplace le contenu de 'ul' par le nouveau contenu HTML.
            \$('#formInfoChampsManquants ul').html(newLiHTML);
        }

        // Affiche/Cache les 'div' de cloturation/information/remplissage du suivi.
        function selectInterlocuteurAction() {
            // Lors d'un clique sur le bouton de cloturation du suivi.
            \$(\"button[name='cloturationSuivi']\").click(function () {
                \$('#DivFormulaireCloturationSuivi').show(); // Affiche la 'div' de cloturation du suivi.
                \$('#DivInfoSuivi').hide(); // Cache la 'div' d'information du suivi.
                \$('#DivFormulaireRemplissageSuivi').hide(); // Cache la 'div' de remplissage du suivi.
            });
            // Lors d'un clique sur le bouton d'information suivi.
            \$(\"button[name='informationsSuivi']\").click(function () {
                \$('#DivFormulaireCloturationSuivi').hide(); // Cache la 'div' de cloturation du suivi.
                \$('#DivInfoSuivi').show(); // Affiche la 'div' d'information du suivi.
                \$('#DivFormulaireRemplissageSuivi').hide(); // Cache la 'div' de remplissage du suivi.
            });
            // Lors d'un clique sur le bouton de remplissage du suivi.
            \$(\"button[name='remplissageSuivi']\").click(function () {
                \$('#DivFormulaireCloturationSuivi').hide(); // Cache la 'div' de cloturation du suivi.
                \$('#DivInfoSuivi').hide(); // Cache la 'div' d'information du suivi.
                \$('#DivFormulaireRemplissageSuivi').show(); // Affiche la 'div' de remplissage du suivi.
            });
        }

    </script>

";
    }

    public function getTemplateName()
    {
        return "@NoxIntranetRessources/AssistantAffaire/SuiviEnCours/assistantaffaireremplissageformulaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  720 => 479,  715 => 477,  678 => 443,  673 => 441,  601 => 372,  596 => 370,  571 => 348,  566 => 346,  499 => 282,  494 => 280,  484 => 273,  427 => 219,  422 => 217,  412 => 210,  384 => 185,  353 => 157,  344 => 151,  340 => 150,  337 => 149,  330 => 147,  322 => 142,  308 => 131,  305 => 130,  303 => 129,  297 => 126,  292 => 125,  288 => 124,  284 => 122,  275 => 120,  271 => 119,  266 => 117,  259 => 113,  255 => 112,  241 => 100,  230 => 98,  226 => 97,  216 => 90,  212 => 89,  207 => 86,  190 => 84,  186 => 83,  179 => 79,  175 => 78,  171 => 77,  167 => 76,  163 => 75,  159 => 74,  155 => 73,  151 => 72,  147 => 71,  129 => 56,  125 => 55,  118 => 51,  109 => 45,  105 => 44,  84 => 26,  77 => 22,  72 => 20,  68 => 19,  64 => 18,  55 => 12,  51 => 11,  46 => 8,  43 => 7,  36 => 5,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@NoxIntranetRessources/AssistantAffaire/SuiviEnCours/assistantaffaireremplissageformulaire.html.twig", "C:\\wamp\\www\\Symfony\\src\\NoxIntranet\\RessourcesBundle\\Resources\\views\\AssistantAffaire\\SuiviEnCours\\assistantaffaireremplissageformulaire.html.twig");
    }
}
