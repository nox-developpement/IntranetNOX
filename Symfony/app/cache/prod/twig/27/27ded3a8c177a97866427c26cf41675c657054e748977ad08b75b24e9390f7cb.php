<?php

/* NoxIntranetRessourcesBundle:AssistantAffaire/SuiviTermine:assistantaffaireconsultation.html.twig */
class __TwigTemplate_c1dc450445c3f5a58421372f0770beb0714141fc9370b921ee1140db661b49e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetRessourcesBundle:AssistantAffaire/SuiviTermine:assistantaffaireconsultation.html.twig", 1);
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
        echo " Consultation de feuille de suivi ";
    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo "Consultation de feuille de suivi - ";
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

        </fieldset>

        ";
        // line 24
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formSelectionVersionSuivi"]) ? $context["formSelectionVersionSuivi"] : null), 'form_end');
        echo "

    </div>

    <div id=\"DivChoixActionInfo\" style='width: 70%; margin: auto; text-align: center; margin-bottom: 2%;'>

        <div style='display: inline-block; width: 33.33%; text-align: center;'>
            <button type=\"button\" name='informationsSuivi' class='boutonFormulaire' style='font-size: 0.9vw;'>Informations</button>
        </div><!--
        --><div style='display: inline-block; width: 33.33%; text-align: center;'>
            <button type=\"button\" name='remplissageSuivi' class='boutonFormulaire' style='font-size: 0.9vw;'>Remplissage</button>
        </div>
    </div>

    <div id=\"DivInfoSuivi\">

        <form class=\"formInfo\">
            <fieldset>
                <legend>Informations du suivi</legend>
                <div style='display: flex; justify-content: center; border-bottom: 1px solid #1F4E79; padding-bottom: 2%; '>             
                    <div id=\"formInfoInfoSuivi\" style='display: inline-block; width: 85%; align-self: center;'>
                        <label for='agence'>Agence: </label><input name='agence' type='text' value='";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["suivi"]) ? $context["suivi"] : null), "Agence", array()), "html", null, true);
        echo "' disabled><br />
                        <label for='numGX'>Numéro GX: </label><input name='numGX' type='text' value='";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["suivi"]) ? $context["suivi"] : null), "NumeroGX", array()), "html", null, true);
        echo "' disabled><br />
                        <label for='commune'>Commune: </label><input name='commune' type='text' value='";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["suivi"]) ? $context["suivi"] : null), "Commune", array()), "html", null, true);
        echo "' disabled><br />
                        <label for='marche'>Marché: </label><input name='marche' type='text' value='";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["suivi"]) ? $context["suivi"] : null), "Marche", array()), "html", null, true);
        echo "' disabled><br />   
                        <label for='objet'>Objet: </label><input name='objet' type='text' value='";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["suivi"]) ? $context["suivi"] : null), "Objet", array()), "html", null, true);
        echo "' disabled><br />
                        <label for='ningediabep'>N° INGEDIA BEP: </label><input name='ningediabep' type='text' value='";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["suivi"]) ? $context["suivi"] : null), "NoINGEDIABEP", array()), "html", null, true);
        echo "' disabled><br />
                        <label for='estimatif'>Estimatif: </label><input name='estimatif' type='text' value='";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["suivi"]) ? $context["suivi"] : null), "Estimatif", array()), "html", null, true);
        echo "' disabled><br />
                        <label for='nclient'>N° Client: </label><input name='nclient' type='text' value='";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["suivi"]) ? $context["suivi"] : null), "NoClient", array()), "html", null, true);
        echo "' disabled><br />
                        <label for='nomClient'>Client: </label><input name='nomClient' type='text' value='";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "NomCLient", array()), "html", null, true);
        echo "' disabled><br />
                        <label for='adresseClient'>Adresse client: </label><input name='adresseClient' type='text' title=\"Cliquez-ici pour l'adresse du client.\" value='Cliquez-ici.' style='text-align: center; cursor: pointer;' readonly><br />
                        <label>Interlocuteur: </label>
                        <select type='text' name='interlocuteur' disabled>
                            ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["interlocuteurs"]) ? $context["interlocuteurs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["interlocuteur"]) {
            // line 58
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
        // line 60
        echo "                        </select>
                    </div>
                </div>
                <div id=\"formInfoNoCommande\">
                    <label for='addNoCommandeName' style='display: inline-block; width: 100%; text-align: center; margin-top: 2%;'>N°Commande</label><br />
                    <select name='noCommandeSelector' style='width: 40%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;' size='5'>
                        ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["suivi"]) ? $context["suivi"] : null), "NoCommande", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["nCommande"]) {
            // line 67
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
        // line 69
        echo "                    </select>
                </div>
            </fieldset>
        </form>

    </div>

    <div id=\"DivFormulaireRemplissageSuivi\" style=\"margin-bottom: 5%; display: none;\">

        ";
        // line 78
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formDonneesSuivi"]) ? $context["formDonneesSuivi"] : null), 'form_start', array("attr" => array("class" => "formulaireRemplissageSuivi")));
        echo "
        ";
        // line 79
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["formDonneesSuivi"]) ? $context["formDonneesSuivi"] : null), 'errors');
        echo "

        <fieldset>

            <legend>Remplissage de ";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["suivi"]) ? $context["suivi"] : null), "Nom", array()), "html", null, true);
        echo "</legend>

            ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["champsViews"]) ? $context["champsViews"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["champ"]) {
            // line 86
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formDonneesSuivi"]) ? $context["formDonneesSuivi"] : null), $this->getAttribute($context["champ"], "Champ", array())), 'errors');
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['champ'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "
            <p><!--
                ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["champsViews"]) ? $context["champsViews"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["champ"]) {
            // line 91
            echo "                    -->";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formDonneesSuivi"]) ? $context["formDonneesSuivi"] : null), $this->getAttribute($context["champ"], "Champ", array())), 'label', array("label_attr" => array("class" => "")) + (twig_test_empty($_label_ = ($this->getAttribute($context["champ"], "Nom", array()) . ": ")) ? array() : array("label" => $_label_)));
            echo " <!--  
                    -->";
            // line 92
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formDonneesSuivi"]) ? $context["formDonneesSuivi"] : null), $this->getAttribute($context["champ"], "Champ", array())), 'widget', array("attr" => array("disabled" => "disabled")));
            echo "<!--
                    --><br />

                    ";
            // line 95
            if (($this->getAttribute($context["champ"], "Type", array()) == "Nombre")) {
                // line 96
                echo "                        <script>
                            var fax = document.getElementById('formDonneesSuivi_";
                // line 97
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
                // line 108
                echo twig_escape_filter($this->env, $this->getAttribute($context["champ"], "Champ", array()), "html", null, true);
                echo "').keyup(function () {
                                checkValidPhoneNumber();
                            });
                        </script>
                    ";
            }
            // line 113
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['champ'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "
                ";
        // line 116
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formDonneesSuivi"]) ? $context["formDonneesSuivi"] : null), "Generate", array()), 'widget', array("label" => "Générer fichier Excel", "attr" => array("class" => "boutonFormulaire")));
        echo "

            </p>

        </fieldset> 

        ";
        // line 122
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formDonneesSuivi"]) ? $context["formDonneesSuivi"] : null), 'form_end');
        echo "
    </div>

    <script>
        \$(window).load(function () {
            openClientPopup();
            selectSuiviAction();
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
        // line 143
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

        // Affiche/Cache les 'div' d'information/remplissage du suivi.
        function selectSuiviAction() {
            // Lors d'un clique sur le bouton d'information suivi.
            \$(\"button[name='informationsSuivi']\").click(function () {
                \$('#DivFormulaireCloturationSuivi').hide(); // Cache la 'div' de cloturation du suivi.
                \$('#DivInfoSuivi').show(); // Affiche la 'div' d'information du suivi.
                \$('#DivFormulaireRemplissageSuivi').hide(); // Cache la 'div' de remplissage du suivi.
            });
            // Lors d'un clique sur le bouton d'information suivi.
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
        return "NoxIntranetRessourcesBundle:AssistantAffaire/SuiviTermine:assistantaffaireconsultation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  315 => 143,  291 => 122,  282 => 116,  279 => 115,  272 => 113,  264 => 108,  250 => 97,  247 => 96,  245 => 95,  239 => 92,  234 => 91,  230 => 90,  226 => 88,  217 => 86,  213 => 85,  208 => 83,  201 => 79,  197 => 78,  186 => 69,  175 => 67,  171 => 66,  163 => 60,  146 => 58,  142 => 57,  135 => 53,  131 => 52,  127 => 51,  123 => 50,  119 => 49,  115 => 48,  111 => 47,  107 => 46,  103 => 45,  79 => 24,  72 => 20,  68 => 19,  64 => 18,  55 => 12,  51 => 11,  46 => 8,  43 => 7,  36 => 5,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "NoxIntranetRessourcesBundle:AssistantAffaire/SuiviTermine:assistantaffaireconsultation.html.twig", "C:\\wamp\\www\\Symfony\\src\\NoxIntranet\\RessourcesBundle/Resources/views/AssistantAffaire/SuiviTermine/assistantaffaireconsultation.html.twig");
    }
}
