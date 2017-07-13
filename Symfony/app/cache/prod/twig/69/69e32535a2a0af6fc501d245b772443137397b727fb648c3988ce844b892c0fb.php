<?php

/* NoxIntranetRessourcesBundle:AssistantAffaire/NouveauSuivi:assistantaffairecreationchoixclient.html.twig */
class __TwigTemplate_1e10645addc0755ba51d23a966def908306056269ace75c735c2b7f4caca94eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetRessourcesBundle:AssistantAffaire/NouveauSuivi:assistantaffairecreationchoixclient.html.twig", 1);
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
        echo " Choix du client ";
    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo "Choix du client";
    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        // line 8
        echo "
    <div class=\"DivCreationSuiviRetour\">
        <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_assistant_affaire_nouvelle_choix_modele", array("IdSuivi" => (isset($context["IdSuivi"]) ? $context["IdSuivi"] : null))), "html", null, true);
        echo "\"><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/Left-Arrow-48.png"), "html", null, true);
        echo "' alt='Flêche retour'>Retourner au choix du modèle</a>
    </div>

    <div id=\"DivChoixActionClient\" style='width: 70%; margin: auto; text-align: center; margin-bottom: 2%;'>
        <div style='display: inline-block; width: 50%; text-align: right;'>
            <button type=\"button\" name='choixClient' class='boutonFormulaire' style='font-size: 0.8vw; margin-right: 10%;'>Choix d'un client</button>
        </div><!--
        --><div style='display: inline-block; width: 50%; text-align: left;'>
            <button type=\"button\" name='ajoutClient' class='boutonFormulaire' style='font-size: 0.8vw; margin-left: 10%;'>Ajout d'un client</button>
        </div>
    </div>

    <div id=\"DivFormulaireChoixClient\">
        ";
        // line 23
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formClient"]) ? $context["formClient"] : null), 'form_start', array("attr" => array("class" => "formulaireChoixClient")));
        echo "
        ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["formClient"]) ? $context["formClient"] : null), 'errors');
        echo "

        <fieldset>

            <legend>Choisir un client</legend>

            <p style=\"margin: 0;\"><!--
                --><label for=\"rechercheSuivi\">Recherche</label><br /><!--
                --><input placeholder=\"Ex : Ventes 2016\" type=\"text\" id=\"rechercheSuivi\" /><!--
                -->";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formClient"]) ? $context["formClient"] : null), "noClient", array()), 'errors');
        echo "<!--
                -->";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formClient"]) ? $context["formClient"] : null), "noClient", array()), 'widget', array("attr" => array("class" => "selectFormulaireChoixClient champChoixClient", "size" => "15")));
        echo "<!--

                --><br /><!--

                -->";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formClient"]) ? $context["formClient"] : null), "Choisir", array()), 'widget', array("label" => "Choisir ce client", "attr" => array("class" => "boutonFormulaire")));
        echo "<!--
                --></p>
        </fieldset> 

        ";
        // line 42
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formClient"]) ? $context["formClient"] : null), 'form_end');
        echo "
    </div>

    <div id=\"DivFormulaireClientAdr\" style='display: none;'>
    </div>

    <div id=\"DivFormulaireAjoutClient\" style='display: none;'>

        ";
        // line 50
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formAjoutClient"]) ? $context["formAjoutClient"] : null), 'form_start', array("attr" => array("class" => "formulaireAjoutClient")));
        echo "
        ";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["formAjoutClient"]) ? $context["formAjoutClient"] : null), 'errors');
        echo "

        <fieldset>

            <legend>Ajouter un client</legend>

            <p style=\"margin: 0;\">
                ";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutClient"]) ? $context["formAjoutClient"] : null), "Nom_Client", array()), 'label', array("label_attr" => array("class" => "labelFormulaireAjoutClient"), "label" => "Nom du client :"));
        echo "
                ";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutClient"]) ? $context["formAjoutClient"] : null), "Nom_Client", array()), 'errors');
        echo "
                ";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutClient"]) ? $context["formAjoutClient"] : null), "Nom_Client", array()), 'widget', array("attr" => array("class" => "textFormulaireAjoutClient champAjoutClient")));
        echo "

                <br />

                ";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutClient"]) ? $context["formAjoutClient"] : null), "Tel", array()), 'label', array("label_attr" => array("class" => "labelFormulaireAjoutClient"), "label" => "Téléphone :"));
        echo "
                ";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutClient"]) ? $context["formAjoutClient"] : null), "Tel", array()), 'errors');
        echo "
                ";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutClient"]) ? $context["formAjoutClient"] : null), "Tel", array()), 'widget', array("attr" => array("class" => "textFormulaireAjoutClient champAjoutClient")));
        echo "

                <br />

                ";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutClient"]) ? $context["formAjoutClient"] : null), "Fax", array()), 'label', array("label_attr" => array("class" => "labelFormulaireAjoutClient"), "label" => "Fax :"));
        echo "
                ";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutClient"]) ? $context["formAjoutClient"] : null), "Fax", array()), 'errors');
        echo "
                ";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutClient"]) ? $context["formAjoutClient"] : null), "Fax", array()), 'widget', array("attr" => array("class" => "textFormulaireAjoutClient champAjoutClient")));
        echo "

                <br />

                ";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutClient"]) ? $context["formAjoutClient"] : null), "Email", array()), 'label', array("label_attr" => array("class" => "labelFormulaireAjoutClient"), "label" => "Email :"));
        echo "
                ";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutClient"]) ? $context["formAjoutClient"] : null), "Email", array()), 'errors');
        echo "
                ";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutClient"]) ? $context["formAjoutClient"] : null), "Email", array()), 'widget', array("attr" => array("class" => "textFormulaireAjoutClient champAjoutClient")));
        echo "

                <br />

                ";
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutClient"]) ? $context["formAjoutClient"] : null), "Nom_Ville", array()), 'label', array("label_attr" => array("class" => "labelFormulaireAjoutClient"), "label" => "Ville :"));
        echo "
                ";
        // line 83
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutClient"]) ? $context["formAjoutClient"] : null), "Nom_Ville", array()), 'errors');
        echo "
                ";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutClient"]) ? $context["formAjoutClient"] : null), "Nom_Ville", array()), 'widget', array("attr" => array("class" => "textFormulaireAjoutClient champAjoutClient")));
        echo "

                <br />

                ";
        // line 88
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutClient"]) ? $context["formAjoutClient"] : null), "Nom_Pays", array()), 'label', array("label_attr" => array("class" => "labelFormulaireAjoutClient"), "label" => "Pays :"));
        echo "
                ";
        // line 89
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutClient"]) ? $context["formAjoutClient"] : null), "Nom_Pays", array()), 'errors');
        echo "
                ";
        // line 90
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutClient"]) ? $context["formAjoutClient"] : null), "Nom_Pays", array()), 'widget', array("attr" => array("class" => "textFormulaireAjoutClient champAjoutClient")));
        echo "

                <br />

                ";
        // line 94
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutClient"]) ? $context["formAjoutClient"] : null), "Code_Postal", array()), 'label', array("label_attr" => array("class" => "labelFormulaireAjoutClient"), "label" => "Code Postal :"));
        echo "
                ";
        // line 95
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutClient"]) ? $context["formAjoutClient"] : null), "Code_Postal", array()), 'errors');
        echo "
                ";
        // line 96
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutClient"]) ? $context["formAjoutClient"] : null), "Code_Postal", array()), 'widget', array("attr" => array("class" => "textFormulaireAjoutClient champAjoutClient")));
        echo "

                <br />

                ";
        // line 100
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutClient"]) ? $context["formAjoutClient"] : null), "Adresse1", array()), 'label', array("label_attr" => array("class" => "labelFormulaireAjoutClient"), "label" => "Adresse :"));
        echo "
                ";
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutClient"]) ? $context["formAjoutClient"] : null), "Adresse1", array()), 'errors');
        echo "
                ";
        // line 102
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutClient"]) ? $context["formAjoutClient"] : null), "Adresse1", array()), 'widget', array("attr" => array("class" => "textFormulaireAjoutClient champAjoutClient")));
        echo "

                <br />

                ";
        // line 106
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutClient"]) ? $context["formAjoutClient"] : null), "Adresse2", array()), 'label', array("label_attr" => array("class" => "labelFormulaireAjoutClient", "style" => "opacity: 0")));
        echo "
                ";
        // line 107
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutClient"]) ? $context["formAjoutClient"] : null), "Adresse2", array()), 'errors');
        echo "
                ";
        // line 108
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutClient"]) ? $context["formAjoutClient"] : null), "Adresse2", array()), 'widget', array("attr" => array("class" => "textFormulaireAjoutClient champAjoutClient")));
        echo "

                <br />

                ";
        // line 112
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutClient"]) ? $context["formAjoutClient"] : null), "Adresse3", array()), 'label', array("label_attr" => array("class" => "labelFormulaireAjoutClient", "style" => "opacity: 0")));
        echo "
                ";
        // line 113
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutClient"]) ? $context["formAjoutClient"] : null), "Adresse3", array()), 'errors');
        echo "
                ";
        // line 114
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutClient"]) ? $context["formAjoutClient"] : null), "Adresse3", array()), 'widget', array("attr" => array("class" => "textFormulaireAjoutClient champAjoutClient")));
        echo "

                <br />

                ";
        // line 118
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutClient"]) ? $context["formAjoutClient"] : null), "Ajouter", array()), 'widget', array("label" => "Ajouter un client", "attr" => array("class" => "boutonFormulaire")));
        echo "

            </p>
        </fieldset> 

        ";
        // line 123
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formAjoutClient"]) ? $context["formAjoutClient"] : null), 'form_end');
        echo "

    </div>

    <script>
        \$(window).load(function () {
            selectClientAction();
            searchInSelector('#rechercheSuivi', '.selectFormulaireChoixClient', '";
        // line 130
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_assistant_affaire_ajax_client_getter");
        echo "');
            getClientAdrByNClient();
        });

        // Effectue une requête Ajax pour retourné la liste des elements correspondant au critére de recherche.
        function searchInSelector(champRecherche, selecteur, ajaxPath) {

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
                        data: 'critere=' + \$(champRecherche).val(),
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

        // Retourne les adresses en fonction du client.
        function getClientAdrByNClient() {
            // Lorsqu'un client est séléctionné.
            \$('#formClient_noClient').change(function () {
                var Nclient = \$(this).val(); // On récupére son numéro.
                \$('#DivFormulaireClientAdr').html(''); // On vide le contenu de la 'div' des adresses de client.
                \$.ajax({
                    type: 'POST',
                    url: '";
        // line 186
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_assistant_affaire_ajax_client_adr_getter");
        echo "',
                    data: 'NClient=' + Nclient,
                    success: function (response) {
                        // On initalise le nouveau contenu HTML et le nombre d'adresse.
                        var newInput = \"\";
                        var compteurCoordonnees = 1;

                        // Pour chaque adresse.
                        \$.each(response, function () {
                            // On génére le code HTML de l'adresse
                            newInput += \"<form class='formulaireClientAdr'> <fieldset> <legend>Coordonnées \" + compteurCoordonnees + \"</legend> <p>\";
                            \$.each(this, function (key, value) {
                                // Si la valeur est vide, on indique 'Aucune donnée.\"
                                if (value === '') {
                                    value = 'Aucune donnée.';
                                }
                                newInput += \"<label for=\\\"\" + key + \"\\\" class='labelFormulaireClientAdr'>\" + key + \" : </label>\";
                                newInput += \"<input name=\\\"\" + key + \"\\\" type=\\\"text\\\" title=\\\"\" + value + \"\\\" value=\\\"\" + value + \"\\\" class='champClientAdr' readonly> <br />\";
                            });
                            newInput += \"</p> </fieldset> </form> <br />\";
                            compteurCoordonnees++; // On incrémente le compteur d'adresse.
                        });

                        \$('#DivFormulaireClientAdr').html(newInput); // On injecte le code HTML dans la 'div' des adresses.
                        resizeFormLabelAndData(\$('.labelFormulaireClientAdr'), \$('.champClientAdr'), \$('.formulaireClientAdr p'));
                    }
                });
            });
        }

        // Affiche/Cache les 'div' de séléction/ajout de client.
        function selectClientAction() {
            // Lors d'un clique sur le bouton de choix de client.
            \$(\"button[name='choixClient']\").click(function () {
                \$('#DivFormulaireChoixClient').show(); // Affiche la 'div' de choix du client.
                \$('#DivFormulaireClientAdr').show(); // Affiche la 'div' d'adresse du client.
                \$('#DivFormulaireAjoutClient').hide(); // Cache la 'div' d'ajout de client.
            });
            // Lors d'un clique sur le bouton d'ajout de client.
            \$(\"button[name='ajoutClient']\").click(function () {
                \$('#DivFormulaireChoixClient').hide(); // Cache la 'div' de choix du client.
                \$('#DivFormulaireClientAdr').hide(); // Cache la 'div' d'adresse du client.
                \$('#DivFormulaireAjoutClient').show(); // Affiche la 'div' d'ajout de client.
            });
        }

    </script>

";
    }

    public function getTemplateName()
    {
        return "NoxIntranetRessourcesBundle:AssistantAffaire/NouveauSuivi:assistantaffairecreationchoixclient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  356 => 186,  318 => 151,  294 => 130,  284 => 123,  276 => 118,  269 => 114,  265 => 113,  261 => 112,  254 => 108,  250 => 107,  246 => 106,  239 => 102,  235 => 101,  231 => 100,  224 => 96,  220 => 95,  216 => 94,  209 => 90,  205 => 89,  201 => 88,  194 => 84,  190 => 83,  186 => 82,  179 => 78,  175 => 77,  171 => 76,  164 => 72,  160 => 71,  156 => 70,  149 => 66,  145 => 65,  141 => 64,  134 => 60,  130 => 59,  126 => 58,  116 => 51,  112 => 50,  101 => 42,  94 => 38,  87 => 34,  83 => 33,  71 => 24,  67 => 23,  49 => 10,  45 => 8,  42 => 7,  36 => 5,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "NoxIntranetRessourcesBundle:AssistantAffaire/NouveauSuivi:assistantaffairecreationchoixclient.html.twig", "C:\\wamp\\www\\Symfony\\src\\NoxIntranet\\RessourcesBundle/Resources/views/AssistantAffaire/NouveauSuivi/assistantaffairecreationchoixclient.html.twig");
    }
}
