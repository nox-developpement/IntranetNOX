<?php

/* @NoxIntranetRessources/AssistantAffaire/NouveauSuivi/assistantaffairecreationchoixinterlocuteur.html.twig */
class __TwigTemplate_0367157f5a8aa7100ad1a04f737bc030c642b42735be80cb9c39dec91401687c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@NoxIntranetRessources/AssistantAffaire/NouveauSuivi/assistantaffairecreationchoixinterlocuteur.html.twig", 1);
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
        echo " Choix de l'interlocuteur ";
    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo "Choix de l'interlocuteur";
    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        // line 8
        echo "
    <div class=\"DivCreationSuiviRetour\">
        <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_assistant_affaire_nouvelle_choix_client", array("IdSuivi" => (isset($context["IdSuivi"]) ? $context["IdSuivi"] : null))), "html", null, true);
        echo "\"><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/Left-Arrow-48.png"), "html", null, true);
        echo "' alt='Flêche retour'>Retourner au choix du client</a>
    </div>

    <div id=\"DivChoixActionInterlocuteur\" style='width: 70%; margin: auto; text-align: center; margin-bottom: 2%;'>
        <div style='display: inline-block; width: 50%; text-align: right;'>
            <button type=\"button\" name='choixInterlocuteur' class='boutonFormulaire' style='font-size: 0.8vw; margin-right: 10%;'>Choix d'un interlocuteur</button>
        </div><!--
        --><div style='display: inline-block; width: 50%; text-align: left;'>
            <button type=\"button\" name='ajoutInterlocuteur' class='boutonFormulaire' style='font-size: 0.8vw; margin-left: 10%;'>Ajout d'un interlocuteur</button>
        </div>
    </div>

    <div id=\"DivFormulaireChoixInterlocuteur\">

        ";
        // line 24
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formSelectionInterlocuteur"]) ? $context["formSelectionInterlocuteur"] : null), 'form_start', array("attr" => array("class" => "formulaireChoixInterlocuteur")));
        echo "
        ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["formSelectionInterlocuteur"]) ? $context["formSelectionInterlocuteur"] : null), 'errors');
        echo "

        <fieldset>

            <legend>Choisir un interlocuteur</legend>

            <p style='margin: 0;'><!--
                --><label for=\"rechercheSuivi\">Recherche</label><br /><!--
                --><input placeholder=\"Ex : Ventes 2016\" name='rechercheSuivi' type=\"text\" id=\"rechercheSuivi\" style='width: 70%; margin-bottom: 2%; box-sizing: border-box;'/><br /><!--
                -->";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionInterlocuteur"]) ? $context["formSelectionInterlocuteur"] : null), "NoInterlocuteur", array()), 'errors');
        echo "<!--
                -->";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionInterlocuteur"]) ? $context["formSelectionInterlocuteur"] : null), "NoInterlocuteur", array()), 'widget', array("attr" => array("class" => "selectFormulaireChoixInterlocuteur champChoixInterlocuteur", "size" => "15", "style" => "width: 70%; margin-bottom: 2%;")));
        echo "<!--

                --><br /><!--

                -->";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionInterlocuteur"]) ? $context["formSelectionInterlocuteur"] : null), "Choisir", array()), 'widget', array("label" => "Choisir cet interlocuteur", "attr" => array("class" => "boutonFormulaire")));
        echo "<!--
                --></p>
        </fieldset> 

        ";
        // line 43
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formSelectionInterlocuteur"]) ? $context["formSelectionInterlocuteur"] : null), 'form_end');
        echo "

    </div>

    <div id=\"DivFormulaireAjoutInterlocuteur\" style='display: none;'>

        ";
        // line 49
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formAjoutInterlocuteur"]) ? $context["formAjoutInterlocuteur"] : null), 'form_start', array("attr" => array("class" => "formulaireAjoutClient")));
        echo "
        ";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["formAjoutInterlocuteur"]) ? $context["formAjoutInterlocuteur"] : null), 'errors');
        echo "

        <fieldset>

            <legend>Ajouter un interlocuteur</legend>

            <p style=\"margin: 0;\">
                ";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutInterlocuteur"]) ? $context["formAjoutInterlocuteur"] : null), "Nom_Contact", array()), 'label', array("label_attr" => array("class" => "labelFormulaireAjoutClient"), "label" => "Nom de l'interlocuteur :"));
        echo "
                ";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutInterlocuteur"]) ? $context["formAjoutInterlocuteur"] : null), "Nom_Contact", array()), 'errors');
        echo "
                ";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutInterlocuteur"]) ? $context["formAjoutInterlocuteur"] : null), "Nom_Contact", array()), 'widget', array("attr" => array("class" => "textFormulaireAjoutClient champAjoutClient")));
        echo "

                <br />

                ";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutInterlocuteur"]) ? $context["formAjoutInterlocuteur"] : null), "Prenom_Contact", array()), 'label', array("label_attr" => array("class" => "labelFormulaireAjoutClient"), "label" => "Prénom de l'interlocuteur :"));
        echo "
                ";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutInterlocuteur"]) ? $context["formAjoutInterlocuteur"] : null), "Prenom_Contact", array()), 'errors');
        echo "
                ";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutInterlocuteur"]) ? $context["formAjoutInterlocuteur"] : null), "Prenom_Contact", array()), 'widget', array("attr" => array("class" => "textFormulaireAjoutClient champAjoutClient")));
        echo "

                <br />

                ";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutInterlocuteur"]) ? $context["formAjoutInterlocuteur"] : null), "Titre", array()), 'label', array("label_attr" => array("class" => "labelFormulaireAjoutClient"), "label" => "Titre :"));
        echo "
                ";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutInterlocuteur"]) ? $context["formAjoutInterlocuteur"] : null), "Titre", array()), 'errors');
        echo "

                <span style=\"display: inline-block; width: 40%; margin-right: 10%; margin-bottom: 1%; border: 2px solid transparent; text-align: center;\"> 
                    <span style=\"display: inline-block; text-align: left;\">
                        ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["formAjoutInterlocuteur"]) ? $context["formAjoutInterlocuteur"] : null), "Titre", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 75
            echo "                            <span> 
                                ";
            // line 76
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["option"], 'widget', array("attr" => array("style" => "margin-right: 2%; width: auto;")));
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["option"], 'label', array("label_attr" => array("style" => "float: none; text-align: left;")) + (twig_test_empty($_label_ = $context["option"]) ? array() : array("label" => $_label_)));
            echo "
                            </span><br />
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "     
                    </span>
                </span>

                <br />

                ";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutInterlocuteur"]) ? $context["formAjoutInterlocuteur"] : null), "Nom_Ville", array()), 'label', array("label_attr" => array("class" => "labelFormulaireAjoutClient"), "label" => "Ville :"));
        echo "
                ";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutInterlocuteur"]) ? $context["formAjoutInterlocuteur"] : null), "Nom_Ville", array()), 'errors');
        echo "
                ";
        // line 86
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutInterlocuteur"]) ? $context["formAjoutInterlocuteur"] : null), "Nom_Ville", array()), 'widget', array("attr" => array("class" => "textFormulaireAjoutClient champAjoutClient")));
        echo "

                <br />

                ";
        // line 90
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutInterlocuteur"]) ? $context["formAjoutInterlocuteur"] : null), "Nom_Pays", array()), 'label', array("label_attr" => array("class" => "labelFormulaireAjoutClient"), "label" => "Pays :"));
        echo "
                ";
        // line 91
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutInterlocuteur"]) ? $context["formAjoutInterlocuteur"] : null), "Nom_Pays", array()), 'errors');
        echo "
                ";
        // line 92
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutInterlocuteur"]) ? $context["formAjoutInterlocuteur"] : null), "Nom_Pays", array()), 'widget', array("attr" => array("class" => "textFormulaireAjoutClient champAjoutClient")));
        echo "

                <br />

                ";
        // line 96
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutInterlocuteur"]) ? $context["formAjoutInterlocuteur"] : null), "Code_Postal", array()), 'label', array("label_attr" => array("class" => "labelFormulaireAjoutClient"), "label" => "Code Postal :"));
        echo "
                ";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutInterlocuteur"]) ? $context["formAjoutInterlocuteur"] : null), "Code_Postal", array()), 'errors');
        echo "
                ";
        // line 98
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutInterlocuteur"]) ? $context["formAjoutInterlocuteur"] : null), "Code_Postal", array()), 'widget', array("attr" => array("class" => "textFormulaireAjoutClient champAjoutClient")));
        echo "

                <br />

                ";
        // line 102
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutInterlocuteur"]) ? $context["formAjoutInterlocuteur"] : null), "Ligne_Directe", array()), 'label', array("label_attr" => array("class" => "labelFormulaireAjoutClient"), "label" => "Ligne directe :"));
        echo "
                ";
        // line 103
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutInterlocuteur"]) ? $context["formAjoutInterlocuteur"] : null), "Ligne_Directe", array()), 'errors');
        echo "
                ";
        // line 104
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutInterlocuteur"]) ? $context["formAjoutInterlocuteur"] : null), "Ligne_Directe", array()), 'widget', array("attr" => array("class" => "textFormulaireAjoutClient champAjoutClient")));
        echo "

                <br />

                ";
        // line 108
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutInterlocuteur"]) ? $context["formAjoutInterlocuteur"] : null), "Portable", array()), 'label', array("label_attr" => array("class" => "labelFormulaireAjoutClient"), "label" => "Portable"));
        echo "
                ";
        // line 109
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutInterlocuteur"]) ? $context["formAjoutInterlocuteur"] : null), "Portable", array()), 'errors');
        echo "
                ";
        // line 110
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutInterlocuteur"]) ? $context["formAjoutInterlocuteur"] : null), "Portable", array()), 'widget', array("attr" => array("class" => "textFormulaireAjoutClient champAjoutClient")));
        echo "

                <br />

                ";
        // line 114
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutInterlocuteur"]) ? $context["formAjoutInterlocuteur"] : null), "Fax", array()), 'label', array("label_attr" => array("class" => "labelFormulaireAjoutClient"), "label" => "Fax"));
        echo "
                ";
        // line 115
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutInterlocuteur"]) ? $context["formAjoutInterlocuteur"] : null), "Fax", array()), 'errors');
        echo "
                ";
        // line 116
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutInterlocuteur"]) ? $context["formAjoutInterlocuteur"] : null), "Fax", array()), 'widget', array("attr" => array("class" => "textFormulaireAjoutClient champAjoutClient")));
        echo "

                <br />

                ";
        // line 120
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutInterlocuteur"]) ? $context["formAjoutInterlocuteur"] : null), "Ajouter", array()), 'widget', array("label" => "Ajouter un interlocuteur", "attr" => array("class" => "boutonFormulaire", "style" => "margin-top: 1%;")));
        echo "

            </p>
        </fieldset> 

        ";
        // line 125
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formAjoutInterlocuteur"]) ? $context["formAjoutInterlocuteur"] : null), 'form_end');
        echo "

    </div>

    <script>
        \$(window).load(function () {
            selectInterlocuteurAction();
            searchInSelector('#rechercheSuivi', '";
        // line 132
        echo twig_escape_filter($this->env, (isset($context["noClient"]) ? $context["noClient"] : null), "html", null, true);
        echo "', '.selectFormulaireChoixInterlocuteur', '";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_assistant_affaire_ajax_interlocuteur_getter");
        echo "');
        });

        // Effectue une requête Ajax pour retourné la liste des elements correspondant au critére de recherche.
        function searchInSelector(champRecherche, client, selecteur, ajaxPath) {

            // Initialisation d'un timer pour executer la fonction après 1 seconde sans frappe.
            var typewatch = (function () {
                var timer = 0;
                return function (callback, ms) {
                    clearTimeout(timer);
                    timer = setTimeout(callback, ms);
                };
            })();
            // Lorsque on entre une valeur de le champ de recherche.
            \$(champRecherche).on(\"keyup paste input\", function () {
                typewatch(function () {
                    // On remplace le contenu du sélécteur par une image de chargement.
                    \$(selecteur).find(\"option\").remove();
                    \$(selecteur).css('background', \"white url('http://\" + window.location.hostname + \"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/loading.gif"), "html", null, true);
        echo "\" + \"') no-repeat center\");
                    \$(selecteur).css('background-size', '50%');
                    \$.ajax({
                        type: 'POST',
                        url: ajaxPath,
                        data: {'critere': \$(champRecherche).val(), 'numClient': client},
                        success: function (response) {
                            // On remplace i'image de chargement par un fond blanc.
                            \$(selecteur).css('background', 'white');
                            // On ajout la liste des clients retourné par la requête Ajax.
                            \$(selecteur).find(\"option\").remove();
                            \$.each(response, function (i, item) {
                                \$(selecteur).append(new Option(item.nom, item.numero));
                            });
                            // On change la couleur de fond des résultats pair pour simplifier la lecture.
                            \$(selecteur + ' option:nth-child(even)').css('background', 'SeaShell');
                            // On donne le nom du client à l'attribut title.
                            \$(selecteur + ' option').each(function () {
                                \$(this).attr('title', \$(this).text());
                            });
                        }
                    });
                }, 500);
            });
        }

        // Affiche/Cache les 'div' de séléction/ajout d'interlocuteur.
        function selectInterlocuteurAction() {
            // Lors d'un clique sur le bouton de choix d'interlocuteur.
            \$(\"button[name='choixInterlocuteur']\").click(function () {
                \$('#DivFormulaireChoixInterlocuteur').show(); // Affiche la 'div' de choix du client.
                \$('#DivFormulaireAjoutInterlocuteur').hide(); // Cache la 'div' d'ajout de client.
            });
            // Lors d'un clique sur le bouton d'ajout d'interlocuteur.
            \$(\"button[name='ajoutInterlocuteur']\").click(function () {
                \$('#DivFormulaireChoixInterlocuteur').hide(); // Cache la 'div' de choix du client.
                \$('#DivFormulaireAjoutInterlocuteur').show(); // Affiche la 'div' d'ajout de client.
            });
        }
    </script>

";
    }

    public function getTemplateName()
    {
        return "@NoxIntranetRessources/AssistantAffaire/NouveauSuivi/assistantaffairecreationchoixinterlocuteur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  323 => 151,  299 => 132,  289 => 125,  281 => 120,  274 => 116,  270 => 115,  266 => 114,  259 => 110,  255 => 109,  251 => 108,  244 => 104,  240 => 103,  236 => 102,  229 => 98,  225 => 97,  221 => 96,  214 => 92,  210 => 91,  206 => 90,  199 => 86,  195 => 85,  191 => 84,  183 => 78,  173 => 76,  170 => 75,  166 => 74,  159 => 70,  155 => 69,  148 => 65,  144 => 64,  140 => 63,  133 => 59,  129 => 58,  125 => 57,  115 => 50,  111 => 49,  102 => 43,  95 => 39,  88 => 35,  84 => 34,  72 => 25,  68 => 24,  49 => 10,  45 => 8,  42 => 7,  36 => 5,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@NoxIntranetRessources/AssistantAffaire/NouveauSuivi/assistantaffairecreationchoixinterlocuteur.html.twig", "C:\\wamp\\www\\Symfony\\src\\NoxIntranet\\RessourcesBundle\\Resources\\views\\AssistantAffaire\\NouveauSuivi\\assistantaffairecreationchoixinterlocuteur.html.twig");
    }
}
