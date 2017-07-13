<?php

/* NoxIntranetRessourcesBundle:PrestationsInternes:validationD1.html.twig */
class __TwigTemplate_1f4193f856be5843e8022f9d9b68b35de06e5e23c911a348fade0cb76599bd0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetRessourcesBundle:PrestationsInternes:validationD1.html.twig", 1);
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
        echo " Nouvelle demande de prestation interne ";
    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo "Nouvelle demande de prestation interne";
    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        echo " 

    <div id='pointageSavingNotification' style='display: none; position: fixed; z-index: 500; background-color: rgba(41,154,11, 0.7); border: 1px outset white; border-radius: 10px; padding: 0.5%;'><p style='display: inline-block; margin: 0; font-size: 0.8vw; color: white;'>Sauvegarde en cours <img src='";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetpointage/images/savingNotification.svg"), "html", null, true);
        echo "' style='vertical-align: middle; height: 2em;'></p></div>

    <table id='validationD1Sum'>
        <tr>
            <th class='trLabel' colspan='2' style='padding-top: 5%; padding-bottom: 5%;'>Demande de prestation interne<br />Les champs éditables sont marqués d'un *.</th>
        </tr>
        <tr>
            <td class='trLabel'>Libellé*</td>
            <td class='editableField' contenteditable='true' field='Libelle'>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "Libelle", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td class='trLabel'>Demandeur</td>
            <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demandeur"]) ? $context["demandeur"] : null), "Firstname", array(), "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demandeur"]) ? $context["demandeur"] : null), "Lastname", array(), "method"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td class='trLabel'>Lieu de l'opération*</td>
            <td class='editableField' contenteditable='true' field='LieuOperation'>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "LieuOperation", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td class='trLabel'>Lieu de la prestation*</td>
            <td class='editableField' contenteditable='true' field='LieuPrestation'>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "LieuPrestation", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr class='editableField' contenteditable='true' field='Descriptif'>
            <td class='trLabel'>Descriptif de la prestation*</td>
            <td style='padding: 0;'>
                <div class='editableField' contenteditable='true' field='Descriptif' style=\"height: 10em; overflow: auto; word-wrap: break-word;\">";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "Descriptif", array()), "html", null, true);
        echo "</div>
            </td>
        </tr>
        <tr class='editableField' contenteditable='true' field='Deplacement'>
            <td class='trLabel'>Déplacements à prévoir*</td>
            <td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "Deplacement", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td class='trLabel'>Date de démarrage de la prestation*</td>
            <td class='editableFieldDate' field='DateDemarrage'>
                <select class='editableFieldDateDay'>
                    ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 46
            echo "                        <option value='";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "' ";
            if ((twig_date_format_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "DateDemarrage", array()), "d") == $context["i"])) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                </select>
                <select class='editableFieldDateMonth'>
                    ";
        // line 50
        $context["months"] = array(1 => "Janvier", 2 => "Février", 3 => "Mars", 4 => "Avril", 5 => "Mai", 6 => "Juin", 7 => "Juillet", 8 => "Août", 9 => "Septembre", 10 => "Octobre", 11 => "Novembre", 12 => "Décembre");
        // line 51
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 52
            echo "                        <option value='";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "' ";
            if ((twig_date_format_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "DateDemarrage", array()), "m") == $context["i"])) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["months"]) ? $context["months"] : null), $context["i"], array(), "array"), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "     
                </select>
                <select class='editableFieldDateYear'>
                    ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range((twig_date_format_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "DateDemarrage", array()), "Y") - 50), (twig_date_format_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "DateDemarrage", array()), "Y") + 50)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 57
            echo "                        <option value='";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "' ";
            if ((twig_date_format_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "DateDemarrage", array()), "Y") == $context["i"])) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "     
                </select>
            </td>
        </tr>
        <tr>
            <td class='trLabel'>Date de rendu*</td>
            <td class='editableFieldDate' field='DateRendu'>
                <select class='editableFieldDateDay'>
                    ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 67
            echo "                        <option value='";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "' ";
            if ((twig_date_format_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "DateRendu", array()), "d") == $context["i"])) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "                </select>
                <select class='editableFieldDateMonth'>
                    ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 72
            echo "                        <option value='";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "' ";
            if ((twig_date_format_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "DateRendu", array()), "m") == $context["i"])) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["months"]) ? $context["months"] : null), $context["i"], array(), "array"), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "     
                </select>
                <select class='editableFieldDateYear'>
                    ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range((twig_date_format_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "DateRendu", array()), "Y") - 50), (twig_date_format_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "DateRendu", array()), "Y") + 50)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 77
            echo "                        <option value='";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "' ";
            if ((twig_date_format_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "DateRendu", array()), "Y") == $context["i"])) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "     
                </select>
            </td>
        </tr>
        <tr>
            <td class='trLabel'>Livrables attendus*</td>
            <td style='padding: 0;'>
                <div class='editableField' contenteditable='true' field='Livrables' style=\"height: 10em; overflow: auto; word-wrap: break-word;\">";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "Livrables", array()), "html", null, true);
        echo "</div>
            </td>
        </tr>
        <tr>
            <td class='trLabel'>Volume de sous traitance envisagé (€)*</td>
            <td class='editableField' contenteditable='true' field='VolumeSousTraitance' title='La valeur doit être un chiffre.'>";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "VolumeSousTraitance", array()), "html", null, true);
        echo "</td>
        </tr>
    </table>

    ";
        // line 94
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formValidationRefus"]) ? $context["formValidationRefus"] : null), 'form_start', array("attr" => array("style" => "font-size: 0.8vw; border: 2px outset #1F4E79; background-color: rgba(255,255,255, 0.6);")));
        echo "

    <div style='display: inline-block; width: 100%;'>
        <div style='display: inline-bloc; float: left;'>
            ";
        // line 98
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["formValidationRefus"]) ? $context["formValidationRefus"] : null), "ValidationRefus", array()), "children", array()), 0, array(), "array"), 'label', array("label_attr" => array("style" => "vertical-align: middle;")) + (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["formValidationRefus"]) ? $context["formValidationRefus"] : null), "ValidationRefus", array()), "children", array()), 0, array(), "array"), "vars", array()), "label", array())) ? array() : array("label" => $_label_)));
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["formValidationRefus"]) ? $context["formValidationRefus"] : null), "ValidationRefus", array()), "children", array()), 0, array(), "array"), 'widget', array("attr" => array("style" => "vertical-align: middle;")));
        echo "
        </div>
        <div style='display: inline-bloc; float: right;'>
            ";
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["formValidationRefus"]) ? $context["formValidationRefus"] : null), "ValidationRefus", array()), "children", array()), 1, array(), "array"), 'label', array("label_attr" => array("style" => "vertical-align: middle;")) + (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["formValidationRefus"]) ? $context["formValidationRefus"] : null), "ValidationRefus", array()), "children", array()), 1, array(), "array"), "vars", array()), "label", array())) ? array() : array("label" => $_label_)));
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["formValidationRefus"]) ? $context["formValidationRefus"] : null), "ValidationRefus", array()), "children", array()), 1, array(), "array"), 'widget', array("attr" => array("style" => "vertical-align: middle;")));
        echo "
        </div>
    </div>

    <p style='margin: 1% 0 1% 0; display: none; text-align: center;' id='refusDemandeRaison'>
        ";
        // line 106
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formValidationRefus"]) ? $context["formValidationRefus"] : null), "RaisonRefus", array()), 'label', array("label" => "Si vous le souhaitez, indiquer la raison du refus."));
        echo "<br />
        ";
        // line 107
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formValidationRefus"]) ? $context["formValidationRefus"] : null), "RaisonRefus", array()), 'widget', array("attr" => array("style" => "box-sizing: border-box;")));
        echo "
    </p>

    <div style='display: inline-block; width: 100%; position: relative; margin-top: 1%;' id='validationSelectionDA'><!--
        --><label style='display: inline-block; text-align: center; width: 100%; margin-bottom: 2%;'>Séléctionnez les directeurs d'agences à contacter.</label><!--
        --><p style='display: inline-block; width: 40%; margin: 0; float: left; text-align: center;'><!--
            -->";
        // line 113
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formValidationRefus"]) ? $context["formValidationRefus"] : null), "ChoixDA2", array()), 'label', array("label" => "Disponible(s)"));
        echo "<!--
            -->";
        // line 114
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formValidationRefus"]) ? $context["formValidationRefus"] : null), "ChoixDA2", array()), 'widget', array("attr" => array("size" => 5, "style" => "width: 100%;")));
        echo "<!--
            --></p><!--
        --><p style='display: inline-block; width: 20%; margin: 0; position: absolute; top: 77.5%; left: 50%; transform: translateY(-77.5%) translateX(-50%); text-align: center;'><!--
            --><button type='button' class=\"boutonFormulaire\" name='addDA' style='width: 50%; font-size: 0.8vw; margin-bottom: 2%; padding: 3%;'>>></button><br /><!--
            --><button type='button' class=\"boutonFormulaire\" name='removeDA' style='width: 50%; font-size: 0.8vw; margin-top: 2%; padding: 3%;'><<</button><!--
            --></p><!--
        --><p style='display: inline-block; width: 40%; margin: 0; float: right; text-align: center;'><!--
            -->";
        // line 121
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formValidationRefus"]) ? $context["formValidationRefus"] : null), "SelectionDA2", array()), 'label', array("label" => "Sélectionné(s)"));
        echo "<!--
            -->";
        // line 122
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formValidationRefus"]) ? $context["formValidationRefus"] : null), "SelectionDA2", array()), 'widget', array("attr" => array("size" => 5, "style" => "width: 100%;")));
        echo "<!--
            --></p><!--
        --></div>

    <p style='text-align: center; margin-bottom: 0;'>
        ";
        // line 127
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formValidationRefus"]) ? $context["formValidationRefus"] : null), "Valider", array()), 'widget', array("attr" => array("class" => "boutonFormulaire")));
        echo "
    </p>

    ";
        // line 130
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formValidationRefus"]) ? $context["formValidationRefus"] : null), 'form_end');
        echo "

    <script>

        \$(window).load(function () {
            toggleFormValidationRefus();
            selectAndRemoveDA();
            checkAndSendForm();
            editDemande();
            \$('.editableField').tooltip({
                position: {
                    my: \"left+10% center\",
                    at: \"right center\"
                },
                disabled: true,
                hide: {
                    fixed: true
                }
            });
        });

        // Affiche un écran de chargement lors de l'exéction de requettes ajax lourdes.
        \$(document).ajaxSend(function (event, request, settings) {
            var ajaxUrl = settings.url.substr(settings.url.lastIndexOf('/') + 1); // Retourne une URL relative.
            if (ajaxUrl === \"ajax-edition-demande-prestation-interne\") {
                savingNotification();
                \$('#pointageSavingNotification').finish().css('display', 'inline-block');
            }
        });

        // Cache l'écran de chargement et la notification de sauvegarde quand les requêtes ajax de chargement de la page et de sauvegarde sont terminées.
        \$(document).ajaxComplete(function () {
            if (\$.active <= 1) {
                \$('#pointageSavingNotification').finish().delay(2000).fadeOut();
            }
        });

        // Affiche/Caches les élément du formulaire en fonction du radiobutton séléctionné.
        function toggleFormValidationRefus() {
            // Lors de la séléction d'un radiobutton.
            \$(\"input[name='formValidationRefus[ValidationRefus]']\").change(function () {
                // Si le boutton séléctionné est 'Accepter'.
                if (\$(this).val() === 'Validation') {
                    // On cache la zone de texte d'explication du refus.
                    \$('#refusDemandeRaison').hide();
                    // On affiche la séléction des DA.
                    \$('#validationSelectionDA').show();
                    // On rend la séléction de DA obligatoire.
                    \$('#formValidationRefus_SelectionDA2').attr('required', true);
                }
                // Si le button séléctionné est 'Refuser'.
                else if (\$(this).val() === 'Refus') {
                    // On affiche la zone de texte d'explication du refus.
                    \$('#refusDemandeRaison').show();
                    // On cache la séléction des DA.
                    \$('#validationSelectionDA').hide();
                    // On rend la séléction de DA optionnelle.
                    \$('#formValidationRefus_SelectionDA2').attr('required', false);
                }
            });
        }

        // Permet d'ajouter/retirer des DA.
        function selectAndRemoveDA() {
            // Lorsque le selecteur de choix de DA est séléctionné.
            \$('#formValidationRefus_ChoixDA2').focus(function () {
                \$(\"button[name='addDA']\").attr('disabled', false); // On active le bouton d'ajout de DA.
                \$(\"button[name='removeDA']\").attr('disabled', true); // On désactive le bouton de retrait de DA.
            });

            // Lorsque le sélécteur de DA choisis est séléctionné.
            \$('#formValidationRefus_SelectionDA2').focus(function () {
                \$(\"button[name='addDA']\").attr('disabled', true); // On désactive le bouton d'ajout de DA.
                \$(\"button[name='removeDA']\").attr('disabled', false); // On active le bouton de retrait de DA.
            });

            // Lors d'un clic sur le bouton d'ajout de DA.
            \$(\"button[name='addDA']\").click(function () {
                // Pour chaque option du sélécteur de choix de DA.
                \$('#formValidationRefus_ChoixDA2 option').each(function () {
                    // Si la valeur est séléctionné.
                    if (\$(this).is(':selected')) {
                        \$(this).hide(); // On la cache.
                        \$(\"#formValidationRefus_SelectionDA2 option[value='\" + \$(this).val() + \"']\").show(); // On affiche son équivalent dans le sélécteur de DA choisis.
                        \$('#formValidationRefus_SelectionDA2').focus(); // On focus le sélécteur de DA choisis.
                    }
                });
            });
            // Lors d'un clic sur le bouton de retrait de DA.
            \$(\"button[name='removeDA']\").click(function () {
                // Pour chaque option du sélécteur de DA choisi.
                \$('#formValidationRefus_SelectionDA2 option').each(function () {
                    // Si la valeur est séléctionné.
                    if (\$(this).is(':selected')) {
                        \$(this).hide(); // On la cache.
                        \$(\"#formValidationRefus_ChoixDA2  option[value='\" + \$(this).val() + \"']\").show(); // On affiche son équivalent dans le sélécteur de choix de DA.
                        \$('#formValidationRefus_ChoixDA2').focus(); // On focus le sélécteur de choix de DA.
                    }
                });
            });
        }

        // Traite envoi le formulaire.
        function checkAndSendForm() {
            // Lors d'un clic sur le bouton de validation du formulaire.
            \$('#formValidationRefus_Valider').click(function () {
                // Pour chaque option visible du sélecteur de DA choisis.
                \$('#formValidationRefus_SelectionDA2 option:visible').each(function () {
                    \$(this).attr('selected', true); // On la séléctionne.
                });
                \$('#formValidationRefus_Validator').click(); // On effectu un clic sur un submit caché pour envoyer le formulaire tous en gardant le contrôle de formulaire HTML5.
            });
        }

        // Permet d'éditer les valeurs des champs de la demande.
        function editDemande() {
            // Lorsqu'un champ text est séléctionné.
            \$('#validationD1Sum .editableField').focus(function () {
                \$(this).css('background-color', 'seashell'); // On change la couleur de fond.
            });
            // Lorsqu'un champ texte n'est plus séléctionné.
            \$('#validationD1Sum .editableField').blur(function () {
                \$(this).css('background-color', 'initial'); // On lui redonne sa couleur d'origine.
            });

            // Initialisation d'un timer pour executer la fonction après # seconde sans frappe.
            var typewatch = (function () {
                var timer = 0;
                return function (callback, ms) {
                    clearTimeout(timer);
                    timer = setTimeout(callback, ms);
                };
            })();

            // Lorsqu'on modifie la valeur d'un champ texte.
            \$('#validationD1Sum .editableField').on(\"keyup paste input\", function () {


                var ajaxFieldInput = \$(this); // On récupére le champ.
                typewatch(function () {
                    // On enregistre sa nouvelle valeur avec un appel Ajax.
                    \$.ajax({
                        type: 'POST',
                        url: '";
        // line 273
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_ajax_edit_demande");
        echo "',
                        data: {'field': ajaxFieldInput.attr('field'), 'value': ajaxFieldInput.text(), 'cleDemande': '";
        // line 274
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "CleDemande", array()), "html", null, true);
        echo "'},
                        success: function (result) {
                            // Si la sauvegarde retourne une erreur de type de données (valeurs non numériques pour le volume de sous traitance.
                            if (result === 'VolumeSousTraitance error') {
                                ajaxFieldInput.css('background-color', '#FF6666'); // On color les bordure du champ en rouge.
                                ajaxFieldInput.tooltip(\"option\", \"disabled\", false); // On active l'affichage de la tooltip d'erreur.
                                ajaxFieldInput.tooltip('open'); // On ouvre la tooltip d'erreur.
                                ajaxFieldInput.off(\"mouseleave\"); // On désactive la disparition de la tooltip lors du survol de la souris.
                                // Lorsque on focus le champ.
                                ajaxFieldInput.focus(function () {
                                    ajaxFieldInput.tooltip(\"option\", \"disabled\", true); // On fait disparaitre la tooltip.
                                    ajaxFieldInput.css('border-color', 'black'); // On redonne la couleur d'origine à la bordure.
                                });
                            }
                            // Si la sauvegarde s'est déroulé avec succé.
                            else if (ajaxFieldInput.is(':focus')) {
                                ajaxFieldInput.css('background-color', 'seashell'); // On redonne la couleur de focus au champ.
                            }
                        }
                    });
                }, 500);
            });

            // Lorsque qu'on modifie les valeurs des sélécteurs de date.
            \$('#validationD1Sum .editableFieldDate select').change(function () {
                // On récupére la nouvelle date.
                var date = \$(this).parent('.editableFieldDate').children('.editableFieldDateYear').val() + '-' + \$(this).parent('.editableFieldDate').children('.editableFieldDateMonth').val() + '-' + \$(this).parent('.editableFieldDate').children('.editableFieldDateDay').val();
                // On enregistre sa nouvelle valeur avec un appel Ajax.        
                \$.ajax({
                    type: 'POST',
                    url: '";
        // line 304
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_ajax_edit_demande");
        echo "',
                    data: {'field': \$(this).parent('.editableFieldDate').attr('field'), 'value': date, 'cleDemande': '";
        // line 305
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "CleDemande", array()), "html", null, true);
        echo "'}
                });
            });
        }

        // Affiche une fenêtre de notification de sauvegarde qui suit la souris.
        function savingNotification() {
            // Lorsque la souris bouge.
            \$(document).mousemove(function (event) {
                \$('#pointageSavingNotification').css('left', event.pageX + 20);
                \$('#pointageSavingNotification').css('top', event.pageY);
            });
        }

    </script>

";
    }

    public function getTemplateName()
    {
        return "NoxIntranetRessourcesBundle:PrestationsInternes:validationD1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  531 => 305,  527 => 304,  494 => 274,  490 => 273,  344 => 130,  338 => 127,  330 => 122,  326 => 121,  316 => 114,  312 => 113,  303 => 107,  299 => 106,  290 => 101,  283 => 98,  276 => 94,  269 => 90,  261 => 85,  252 => 78,  237 => 77,  233 => 76,  228 => 73,  213 => 72,  209 => 71,  205 => 69,  190 => 67,  186 => 66,  176 => 58,  161 => 57,  157 => 56,  152 => 53,  137 => 52,  132 => 51,  130 => 50,  126 => 48,  111 => 46,  107 => 45,  98 => 39,  90 => 34,  82 => 29,  75 => 25,  66 => 21,  59 => 17,  48 => 9,  42 => 7,  36 => 5,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "NoxIntranetRessourcesBundle:PrestationsInternes:validationD1.html.twig", "C:\\wamp\\www\\Symfony\\src\\NoxIntranet\\RessourcesBundle/Resources/views/PrestationsInternes/validationD1.html.twig");
    }
}
