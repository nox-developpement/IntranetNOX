<?php

/* @NoxIntranetRessources/AssistantAffaire/NouveauSuivi/assistantaffairecreation.html.twig */
class __TwigTemplate_741a5dec66e3cae74e6dababb6b32831891c84665738b7469bc2c29c6b909408 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@NoxIntranetRessources/AssistantAffaire/NouveauSuivi/assistantaffairecreation.html.twig", 1);
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
        echo " Création de suivi ";
    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo "Création de suivi";
    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        // line 8
        echo "
    <div id=\"DivCreationSuivi\">

        ";
        // line 11
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("class" => "formulaireCreationSuivi")));
        echo "
        ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "

        <fieldset>

            <legend>Ajouter un suivi</legend>

            <p>

                ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Nom", array()), 'label', array("label_attr" => array("class" => "labelFormulaireCreationSuivi"), "label" => "Nom du suivi :"));
        echo "
                ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Nom", array()), 'errors');
        echo "
                ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Nom", array()), 'widget', array("attr" => array("class" => "textFormulaireCreationSuivi", "style" => "box-sizing: border-box;")));
        echo "

                <br />

                ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Agence", array()), 'label', array("label_attr" => array("class" => "labelFormulaireCreationSuivi"), "label" => "Agence :"));
        echo "
                ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Agence", array()), 'errors');
        echo "
                ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Agence", array()), 'widget', array("attr" => array("class" => "textFormulaireCreationSuivi", "style" => "box-sizing: border-box;")));
        echo "

                <br />

                ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "NumeroGX", array()), 'label', array("label_attr" => array("class" => "labelFormulaireCreationSuivi"), "label" => "Numéro GX :"));
        echo "
                ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "NumeroGX", array()), 'errors');
        echo "
                ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "NumeroGX", array()), 'widget', array("attr" => array("class" => "textFormulaireCreationSuivi", "style" => "box-sizing: border-box;")));
        echo "

                <br />

                ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Profil", array()), 'label', array("label_attr" => array("class" => "labelFormulaireCreationSuivi", "style" => "box-sizing: border-box;"), "label" => "Profil :"));
        echo "
                ";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Profil", array()), 'errors');
        echo "
                ";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Profil", array()), 'widget', array("attr" => array("class" => "selectFormulaireCreationSuivi", "style" => "box-sizing: border-box;")));
        echo "

                ";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", array()), 'widget');
        echo "

                <br />

                ";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Créer", array()), 'widget', array("label" => "Créer suivi", "attr" => array("class" => "submitFormulaireCreationSuivi")));
        echo "

            </p>

            <div id='ajaxSearchAffairesDiv' style='position: absolute; top: 0; left: 0; background-color: white; border: 1px solid rgb(165, 172, 178); font-size: 0.8vw; display: none;'>
            </div>

        </fieldset> 

        ";
        // line 55
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

    </div>

    <script>
        \$(window).load(function () {
            getGXAffaires();
        });

        // Renvoi les affaires dont le numéro contient la chaine \"search\".
        function getGXAffaires() {

            // Supprime les triggers d'event déjà existant.
            \$('#form_NumeroGX').unbind('blur');
            \$('#form_NumeroGX').unbind('keyup');
            \$('#form_NumeroGX').unbind('paste');
            //\$('#tableFeuillePointage tr:nth-child(2) .project').unbind('input');

            // Pour toutes action dans une cellule titre d'affaire.
            \$('#form_NumeroGX').on('blur keyup paste', function () {

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

                        // Lors du clique sur un résultat on remplace le contenu de la recherche par le résultat.
                        \$('.ajaxSearchAffairesDivResults').mousedown(function () {
                            celluleProject.val(\$(this).attr('data-numaffaire'));
                            celluleProject.attr('title', \$(this).attr('data-nomaffaire'));
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

                            if (\$.inArray(celluleProject.val(), numsAffaires) === -1) {
                                celluleProject.val('');
                            }
                        });
                    });
                }

            });
        }
    </script>

";
    }

    public function getTemplateName()
    {
        return "@NoxIntranetRessources/AssistantAffaire/NouveauSuivi/assistantaffairecreation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 55,  130 => 46,  123 => 42,  118 => 40,  114 => 39,  110 => 38,  103 => 34,  99 => 33,  95 => 32,  88 => 28,  84 => 27,  80 => 26,  73 => 22,  69 => 21,  65 => 20,  54 => 12,  50 => 11,  45 => 8,  42 => 7,  36 => 5,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@NoxIntranetRessources/AssistantAffaire/NouveauSuivi/assistantaffairecreation.html.twig", "C:\\wamp\\www\\Symfony\\src\\NoxIntranet\\RessourcesBundle\\Resources\\views\\AssistantAffaire\\NouveauSuivi\\assistantaffairecreation.html.twig");
    }
}
