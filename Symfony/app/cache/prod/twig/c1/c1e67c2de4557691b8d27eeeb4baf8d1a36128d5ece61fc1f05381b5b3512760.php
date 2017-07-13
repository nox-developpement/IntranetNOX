<?php

/* NoxIntranetRessourcesBundle:AssistantAffaire/SuiviTermine:assistantaffairetermine.html.twig */
class __TwigTemplate_288bdf2888b19db99cf04d05202a5360b66fec603ce6c0a570fbbadd4bf6c05e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetRessourcesBundle:AssistantAffaire/SuiviTermine:assistantaffairetermine.html.twig", 1);
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
        echo " Parcourirs les suivis terminés ";
    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo "Parcourirs les suivis terminés";
    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        // line 8
        echo "
    <div id='DivFormulaireSelectionAgence'>

        ";
        // line 11
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formSelectionAgence"]) ? $context["formSelectionAgence"] : null), 'form_start', array("attr" => array("class" => "formulaireSelectionAgence")));
        echo "
        ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["formSelectionAgence"]) ? $context["formSelectionAgence"] : null), 'errors');
        echo "

        <fieldset>

            <legend><span>Agence</legend>

            ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionAgence"]) ? $context["formSelectionAgence"] : null), "Agences", array()), 'label', array("label_attr" => array("class" => "labelFormulaireSelectionAgence"), "label" => "Selection de l'agence :"));
        echo "
            ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionAgence"]) ? $context["formSelectionAgence"] : null), "Agences", array()), 'errors');
        echo "
            ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionAgence"]) ? $context["formSelectionAgence"] : null), "Agences", array()), 'widget', array("attr" => array("class" => "selectFormulaireSelectionAgence")));
        echo "

        </fieldset>

        ";
        // line 24
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formSelectionAgence"]) ? $context["formSelectionAgence"] : null), 'form_end');
        echo "

    </div>


    <div id='DivFormulaireParcourSuiviEnCours'>
        ";
        // line 30
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formSelectionSuivi"]) ? $context["formSelectionSuivi"] : null), 'form_start', array("attr" => array("class" => "formulaireParcourSuiviEnCours")));
        echo "
        ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["formSelectionSuivi"]) ? $context["formSelectionSuivi"] : null), 'errors');
        echo "

        <fieldset>

            <legend>Selection du suivi</legend>

            <p>
                <label for=\"rechercehSuivi\">Recherche</label>
                <input placeholder=\"Ex : Ventes 2016\" type=\"text\" name=\"rechercheSuivi\" id=\"rechercheSuivi\" style=\"width: 100%;\"/>
                ";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionSuivi"]) ? $context["formSelectionSuivi"] : null), "Suivi", array()), 'errors');
        echo "
                ";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionSuivi"]) ? $context["formSelectionSuivi"] : null), "Suivi", array()), 'widget', array("attr" => array("class" => "selectFormulaireAdministrationAjoutProfil", "size" => 15)));
        echo "
            </p>

            ";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionSuivi"]) ? $context["formSelectionSuivi"] : null), "_token", array()), 'widget');
        echo "

            <p>
                ";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionSuivi"]) ? $context["formSelectionSuivi"] : null), "Consulter", array()), 'widget', array("attr" => array("class" => "submitFormulaireParcourSuiviEnCours")));
        echo "
            </p>

        </fieldset>

        ";
        // line 52
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formSelectionSuivi"]) ? $context["formSelectionSuivi"] : null), 'form_end');
        echo "

    </div>

    <script>

        \$(window).load(function () {
            searchSuivi('#rechercheSuivi', '.selectFormulaireAdministrationAjoutProfil');
        });

        // Affiche les suivis selon le nom recherché.
        function searchSuivi(champRecherche, selecteur) {

            // Initialisation d'un timer pour executer la fonction après 1 seconde sans frappe.
            var typewatch = (function () {
                var timer = 0;
                return function (callback, ms) {
                    clearTimeout(timer);
                    timer = setTimeout(callback, ms);
                };
            })();

            // Lorsque une valeur est entré dans la barre de recherche.
            \$(champRecherche).keyup(function () {
                typewatch(function () {
                    // Pour chaque résultat.
                    \$(selecteur + ' option').each(function () {
                        // Si il ne correspond pas à la recherche...
                        if (\$(this).text().search(new RegExp(\$(champRecherche).val(), 'i')) === -1) {
                            \$(this).hide(); // ...On le cache.
                        }
                        // Si il correspond à la recherche.
                        else {
                            // On le montre et on lui donne son nom comme attribut 'title'.
                            \$(this).show();
                            \$(this).attr('title', \$(this).text());
                        }
                    });
                    // On applique une couleur différente au résultat pair et impair.
                    \$(selecteur + ' option:visible:odd').css('background', 'SeaShell');
                    \$(selecteur + ' option:visible:even').css('background', 'white');
                }, 500);
            });
        }

    </script>

";
    }

    public function getTemplateName()
    {
        return "NoxIntranetRessourcesBundle:AssistantAffaire/SuiviTermine:assistantaffairetermine.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 52,  119 => 47,  113 => 44,  107 => 41,  103 => 40,  91 => 31,  87 => 30,  78 => 24,  71 => 20,  67 => 19,  63 => 18,  54 => 12,  50 => 11,  45 => 8,  42 => 7,  36 => 5,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "NoxIntranetRessourcesBundle:AssistantAffaire/SuiviTermine:assistantaffairetermine.html.twig", "C:\\wamp\\www\\Symfony\\src\\NoxIntranet\\RessourcesBundle/Resources/views/AssistantAffaire/SuiviTermine/assistantaffairetermine.html.twig");
    }
}
