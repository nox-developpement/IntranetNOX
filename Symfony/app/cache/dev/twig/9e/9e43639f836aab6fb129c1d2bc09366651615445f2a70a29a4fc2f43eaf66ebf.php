<?php

/* NoxIntranetRessourcesBundle:AssistantAffaire:assistantaffaireremplissageformulaire.html.twig */
class __TwigTemplate_3ed563a9bbb26a4c72b92044aff74251c661dae33454afed5b7331133099ebb8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetRessourcesBundle:AssistantAffaire:assistantaffaireremplissageformulaire.html.twig", 1);
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
        $__internal_c96859be560f1c830d3ff9fde7a3cc9b3fc44030001bf154f0b661b2433a8984 = $this->env->getExtension("native_profiler");
        $__internal_c96859be560f1c830d3ff9fde7a3cc9b3fc44030001bf154f0b661b2433a8984->enter($__internal_c96859be560f1c830d3ff9fde7a3cc9b3fc44030001bf154f0b661b2433a8984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetRessourcesBundle:AssistantAffaire:assistantaffaireremplissageformulaire.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c96859be560f1c830d3ff9fde7a3cc9b3fc44030001bf154f0b661b2433a8984->leave($__internal_c96859be560f1c830d3ff9fde7a3cc9b3fc44030001bf154f0b661b2433a8984_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_ccd1a333a8aee820cf86f231cbde4fb8f51bac16eb5e902608c40e05216b1260 = $this->env->getExtension("native_profiler");
        $__internal_ccd1a333a8aee820cf86f231cbde4fb8f51bac16eb5e902608c40e05216b1260->enter($__internal_ccd1a333a8aee820cf86f231cbde4fb8f51bac16eb5e902608c40e05216b1260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Edition de feuille de suivi ";
        
        $__internal_ccd1a333a8aee820cf86f231cbde4fb8f51bac16eb5e902608c40e05216b1260->leave($__internal_ccd1a333a8aee820cf86f231cbde4fb8f51bac16eb5e902608c40e05216b1260_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_ec5494a14f239908f322492abfe4a6317f09f27b67f9d38125f9db4a329b4358 = $this->env->getExtension("native_profiler");
        $__internal_ec5494a14f239908f322492abfe4a6317f09f27b67f9d38125f9db4a329b4358->enter($__internal_ec5494a14f239908f322492abfe4a6317f09f27b67f9d38125f9db4a329b4358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Edition de feuille de suivi - ";
        echo twig_escape_filter($this->env, (isset($context["suivi"]) ? $context["suivi"] : $this->getContext($context, "suivi")), "html", null, true);
        
        $__internal_ec5494a14f239908f322492abfe4a6317f09f27b67f9d38125f9db4a329b4358->leave($__internal_ec5494a14f239908f322492abfe4a6317f09f27b67f9d38125f9db4a329b4358_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_21c50a5b3838c2301085092a69cbccdb064a1e5cb36d24ada2211d05dc1358e0 = $this->env->getExtension("native_profiler");
        $__internal_21c50a5b3838c2301085092a69cbccdb064a1e5cb36d24ada2211d05dc1358e0->enter($__internal_21c50a5b3838c2301085092a69cbccdb064a1e5cb36d24ada2211d05dc1358e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 8
        echo "
    <div id='DivFormulaireSelectionVersionSuivi'>

        ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSelectionVersionSuivi"]) ? $context["formSelectionVersionSuivi"] : $this->getContext($context, "formSelectionVersionSuivi")), 'form_start', array("attr" => array("class" => "formulaireSelectionVersionSuivi")));
        echo "
        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formSelectionVersionSuivi"]) ? $context["formSelectionVersionSuivi"] : $this->getContext($context, "formSelectionVersionSuivi")), 'errors');
        echo "

        <fieldset>

            <legend>Version</legend>

            ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionVersionSuivi"]) ? $context["formSelectionVersionSuivi"] : $this->getContext($context, "formSelectionVersionSuivi")), "version", array()), 'label', array("label_attr" => array("class" => "labelFormulaireSelectionVersionSuivi"), "label" => "Selection de la version :"));
        echo "
            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionVersionSuivi"]) ? $context["formSelectionVersionSuivi"] : $this->getContext($context, "formSelectionVersionSuivi")), "version", array()), 'errors');
        echo "
            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionVersionSuivi"]) ? $context["formSelectionVersionSuivi"] : $this->getContext($context, "formSelectionVersionSuivi")), "version", array()), 'widget', array("attr" => array("class" => "selectFormulaireSelectionVersionSuivi")));
        echo "

            ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionVersionSuivi"]) ? $context["formSelectionVersionSuivi"] : $this->getContext($context, "formSelectionVersionSuivi")), "Supprimer", array()), 'widget', array("attr" => array("class" => "boutonFormulaire")));
        echo "

        </fieldset>

        ";
        // line 26
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSelectionVersionSuivi"]) ? $context["formSelectionVersionSuivi"] : $this->getContext($context, "formSelectionVersionSuivi")), 'form_end');
        echo "

    </div>

    <div id=\"DivFormulaireCloturationSuivi\">

        ";
        // line 32
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formCloturationSuivi"]) ? $context["formCloturationSuivi"] : $this->getContext($context, "formCloturationSuivi")), 'form_start', array("attr" => array("class" => "formulaireCloturationSuivi")));
        echo "
        ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formCloturationSuivi"]) ? $context["formCloturationSuivi"] : $this->getContext($context, "formCloturationSuivi")), 'errors');
        echo "

        <fieldset>

            <legend>Cloturation</legend>

            ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formCloturationSuivi"]) ? $context["formCloturationSuivi"] : $this->getContext($context, "formCloturationSuivi")), "Cloturer", array()), 'widget', array("label" => "Cloturer le suivi", "attr" => array("class" => "boutonFormulaire")));
        echo "

        </fieldset> 

        ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formCloturationSuivi"]) ? $context["formCloturationSuivi"] : $this->getContext($context, "formCloturationSuivi")), "_token", array()), 'widget');
        echo "
        ";
        // line 44
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formCloturationSuivi"]) ? $context["formCloturationSuivi"] : $this->getContext($context, "formCloturationSuivi")), 'form_end');
        echo "
    </div>

    <div id=\"DivFormulaireRemplissageSuivi\">

        ";
        // line 49
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formDonneesSuivi"]) ? $context["formDonneesSuivi"] : $this->getContext($context, "formDonneesSuivi")), 'form_start', array("attr" => array("class" => "formulaireRemplissageSuivi")));
        echo "
        ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formDonneesSuivi"]) ? $context["formDonneesSuivi"] : $this->getContext($context, "formDonneesSuivi")), 'errors');
        echo "

        <fieldset>

            <legend>";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["suivi"]) ? $context["suivi"] : $this->getContext($context, "suivi")), "html", null, true);
        echo "</legend>

            <p>
                ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["champsViews"]) ? $context["champsViews"] : $this->getContext($context, "champsViews")));
        foreach ($context['_seq'] as $context["_key"] => $context["champ"]) {
            // line 58
            echo "                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formDonneesSuivi"]) ? $context["formDonneesSuivi"] : $this->getContext($context, "formDonneesSuivi")), $this->getAttribute($context["champ"], "Champ", array())), 'label', array("label_attr" => array("class" => "labelFormulaireRemplissageSuivi")) + (twig_test_empty($_label_ = ($this->getAttribute($context["champ"], "Nom", array()) . " : ")) ? array() : array("label" => $_label_)));
            echo "
                    ";
            // line 59
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formDonneesSuivi"]) ? $context["formDonneesSuivi"] : $this->getContext($context, "formDonneesSuivi")), $this->getAttribute($context["champ"], "Champ", array())), 'errors');
            echo "
                    ";
            // line 60
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formDonneesSuivi"]) ? $context["formDonneesSuivi"] : $this->getContext($context, "formDonneesSuivi")), $this->getAttribute($context["champ"], "Champ", array())), 'widget', array("attr" => array("class" => "champFormulaireRemplissageSuivi")));
            echo "
                    <br />
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['champ'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "
                ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formDonneesSuivi"]) ? $context["formDonneesSuivi"] : $this->getContext($context, "formDonneesSuivi")), "Generate", array()), 'widget', array("label" => "Générer fichier Excel", "attr" => array("class" => "boutonFormulaire", "title" => "Sauvegardez le suivi pour pouvoir générer un fichier Excel.")));
        echo "
                ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formDonneesSuivi"]) ? $context["formDonneesSuivi"] : $this->getContext($context, "formDonneesSuivi")), "Save", array()), 'widget', array("label" => "Sauvegarder le suivi", "attr" => array("class" => "boutonFormulaire")));
        echo "
            </p>

        </fieldset> 

        ";
        // line 70
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formDonneesSuivi"]) ? $context["formDonneesSuivi"] : $this->getContext($context, "formDonneesSuivi")), 'form_end');
        echo "
    </div>

";
        
        $__internal_21c50a5b3838c2301085092a69cbccdb064a1e5cb36d24ada2211d05dc1358e0->leave($__internal_21c50a5b3838c2301085092a69cbccdb064a1e5cb36d24ada2211d05dc1358e0_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetRessourcesBundle:AssistantAffaire:assistantaffaireremplissageformulaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 70,  192 => 65,  188 => 64,  185 => 63,  176 => 60,  172 => 59,  167 => 58,  163 => 57,  157 => 54,  150 => 50,  146 => 49,  138 => 44,  134 => 43,  127 => 39,  118 => 33,  114 => 32,  105 => 26,  98 => 22,  93 => 20,  89 => 19,  85 => 18,  76 => 12,  72 => 11,  67 => 8,  61 => 7,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %} Edition de feuille de suivi {% endblock %}*/
/* */
/* {% block messageAccueil %}Edition de feuille de suivi - {{ suivi }}{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     <div id='DivFormulaireSelectionVersionSuivi'>*/
/* */
/*         {{ form_start(formSelectionVersionSuivi, {'attr': {'class': 'formulaireSelectionVersionSuivi'}}) }}*/
/*         {{ form_errors(formSelectionVersionSuivi) }}*/
/* */
/*         <fieldset>*/
/* */
/*             <legend>Version</legend>*/
/* */
/*             {{ form_label(formSelectionVersionSuivi.version, "Selection de la version :", {'label_attr': {'class': 'labelFormulaireSelectionVersionSuivi'}}) }}*/
/*             {{ form_errors(formSelectionVersionSuivi.version) }}*/
/*             {{ form_widget(formSelectionVersionSuivi.version, {'attr': {'class': 'selectFormulaireSelectionVersionSuivi'}}) }}*/
/* */
/*             {{ form_widget(formSelectionVersionSuivi.Supprimer, {'attr': {'class': 'boutonFormulaire' }}) }}*/
/* */
/*         </fieldset>*/
/* */
/*         {{ form_end(formSelectionVersionSuivi) }}*/
/* */
/*     </div>*/
/* */
/*     <div id="DivFormulaireCloturationSuivi">*/
/* */
/*         {{ form_start(formCloturationSuivi, {'attr': {'class': 'formulaireCloturationSuivi'}}) }}*/
/*         {{ form_errors(formCloturationSuivi) }}*/
/* */
/*         <fieldset>*/
/* */
/*             <legend>Cloturation</legend>*/
/* */
/*             {{ form_widget(formCloturationSuivi.Cloturer, {'label': 'Cloturer le suivi', 'attr': {'class': 'boutonFormulaire'}}) }}*/
/* */
/*         </fieldset> */
/* */
/*         {{ form_widget(formCloturationSuivi._token) }}*/
/*         {{ form_end(formCloturationSuivi) }}*/
/*     </div>*/
/* */
/*     <div id="DivFormulaireRemplissageSuivi">*/
/* */
/*         {{ form_start(formDonneesSuivi, {'attr': {'class': 'formulaireRemplissageSuivi'}}) }}*/
/*         {{ form_errors(formDonneesSuivi) }}*/
/* */
/*         <fieldset>*/
/* */
/*             <legend>{{ suivi }}</legend>*/
/* */
/*             <p>*/
/*                 {% for champ in champsViews %}*/
/*                     {{ form_label(attribute(formDonneesSuivi, champ.Champ), champ.Nom ~ " : ", {'label_attr': {'class': 'labelFormulaireRemplissageSuivi'}}) }}*/
/*                     {{ form_errors(attribute(formDonneesSuivi, champ.Champ)) }}*/
/*                     {{ form_widget(attribute(formDonneesSuivi, champ.Champ), {'attr': {'class': 'champFormulaireRemplissageSuivi'}}) }}*/
/*                     <br />*/
/*                 {% endfor %}*/
/* */
/*                 {{ form_widget(formDonneesSuivi.Generate, {'label': 'Générer fichier Excel', 'attr': {'class': 'boutonFormulaire', 'title': 'Sauvegardez le suivi pour pouvoir générer un fichier Excel.' }}) }}*/
/*                 {{ form_widget(formDonneesSuivi.Save, {'label': 'Sauvegarder le suivi', 'attr': {'class': 'boutonFormulaire'}}) }}*/
/*             </p>*/
/* */
/*         </fieldset> */
/* */
/*         {{ form_end(formDonneesSuivi) }}*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* {# empty Twig template #}*/
/* */
