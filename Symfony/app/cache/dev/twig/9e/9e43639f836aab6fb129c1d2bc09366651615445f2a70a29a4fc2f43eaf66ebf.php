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
        $__internal_d41c222963762673368b10e38c58a8c4f74cac776485196f8ec1bc4d2489460b = $this->env->getExtension("native_profiler");
        $__internal_d41c222963762673368b10e38c58a8c4f74cac776485196f8ec1bc4d2489460b->enter($__internal_d41c222963762673368b10e38c58a8c4f74cac776485196f8ec1bc4d2489460b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetRessourcesBundle:AssistantAffaire:assistantaffaireremplissageformulaire.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d41c222963762673368b10e38c58a8c4f74cac776485196f8ec1bc4d2489460b->leave($__internal_d41c222963762673368b10e38c58a8c4f74cac776485196f8ec1bc4d2489460b_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_f7977fec36327a643c8ff37acc5bc27bd1b8cbe093c5c756bc94d50ff6d203fe = $this->env->getExtension("native_profiler");
        $__internal_f7977fec36327a643c8ff37acc5bc27bd1b8cbe093c5c756bc94d50ff6d203fe->enter($__internal_f7977fec36327a643c8ff37acc5bc27bd1b8cbe093c5c756bc94d50ff6d203fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Edition de feuille de suivi ";
        
        $__internal_f7977fec36327a643c8ff37acc5bc27bd1b8cbe093c5c756bc94d50ff6d203fe->leave($__internal_f7977fec36327a643c8ff37acc5bc27bd1b8cbe093c5c756bc94d50ff6d203fe_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_6cce913002815e3cb4bb1e2cb74ec62ab7495b3ec054191dd8f3abf4f752f28c = $this->env->getExtension("native_profiler");
        $__internal_6cce913002815e3cb4bb1e2cb74ec62ab7495b3ec054191dd8f3abf4f752f28c->enter($__internal_6cce913002815e3cb4bb1e2cb74ec62ab7495b3ec054191dd8f3abf4f752f28c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Edition de feuille de suivi - ";
        echo twig_escape_filter($this->env, (isset($context["suivi"]) ? $context["suivi"] : $this->getContext($context, "suivi")), "html", null, true);
        
        $__internal_6cce913002815e3cb4bb1e2cb74ec62ab7495b3ec054191dd8f3abf4f752f28c->leave($__internal_6cce913002815e3cb4bb1e2cb74ec62ab7495b3ec054191dd8f3abf4f752f28c_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_a0bf06d0a38747563950738fe08cd34e877fb928bf0f351cbe0920b18619cd9c = $this->env->getExtension("native_profiler");
        $__internal_a0bf06d0a38747563950738fe08cd34e877fb928bf0f351cbe0920b18619cd9c->enter($__internal_a0bf06d0a38747563950738fe08cd34e877fb928bf0f351cbe0920b18619cd9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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

            ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["champsViews"]) ? $context["champsViews"] : $this->getContext($context, "champsViews")));
        foreach ($context['_seq'] as $context["_key"] => $context["champ"]) {
            // line 57
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formDonneesSuivi"]) ? $context["formDonneesSuivi"] : $this->getContext($context, "formDonneesSuivi")), $this->getAttribute($context["champ"], "Champ", array())), 'errors');
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['champ'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "
            <p>
                ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["champsViews"]) ? $context["champsViews"] : $this->getContext($context, "champsViews")));
        foreach ($context['_seq'] as $context["_key"] => $context["champ"]) {
            // line 62
            echo "                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formDonneesSuivi"]) ? $context["formDonneesSuivi"] : $this->getContext($context, "formDonneesSuivi")), $this->getAttribute($context["champ"], "Champ", array())), 'label', array("label_attr" => array("class" => "labelFormulaireRemplissageSuivi")) + (twig_test_empty($_label_ = ($this->getAttribute($context["champ"], "Nom", array()) . " : ")) ? array() : array("label" => $_label_)));
            echo "   
                    ";
            // line 63
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formDonneesSuivi"]) ? $context["formDonneesSuivi"] : $this->getContext($context, "formDonneesSuivi")), $this->getAttribute($context["champ"], "Champ", array())), 'widget');
            echo "
                    <br />
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['champ'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "
                ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formDonneesSuivi"]) ? $context["formDonneesSuivi"] : $this->getContext($context, "formDonneesSuivi")), "Generate", array()), 'widget', array("label" => "Générer fichier Excel", "attr" => array("class" => "boutonFormulaire")));
        echo "
                ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formDonneesSuivi"]) ? $context["formDonneesSuivi"] : $this->getContext($context, "formDonneesSuivi")), "Save", array()), 'widget', array("label" => "Sauvegarder le suivi", "attr" => array("class" => "boutonFormulaire")));
        echo "

            </p>
        </fieldset> 

        ";
        // line 73
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formDonneesSuivi"]) ? $context["formDonneesSuivi"] : $this->getContext($context, "formDonneesSuivi")), 'form_end');
        echo "
    </div>

";
        
        $__internal_a0bf06d0a38747563950738fe08cd34e877fb928bf0f351cbe0920b18619cd9c->leave($__internal_a0bf06d0a38747563950738fe08cd34e877fb928bf0f351cbe0920b18619cd9c_prof);

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
        return array (  212 => 73,  204 => 68,  200 => 67,  197 => 66,  188 => 63,  183 => 62,  179 => 61,  175 => 59,  166 => 57,  162 => 56,  157 => 54,  150 => 50,  146 => 49,  138 => 44,  134 => 43,  127 => 39,  118 => 33,  114 => 32,  105 => 26,  98 => 22,  93 => 20,  89 => 19,  85 => 18,  76 => 12,  72 => 11,  67 => 8,  61 => 7,  48 => 5,  36 => 3,  11 => 1,);
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
/*             {% for champ in champsViews %}*/
/*                 {{ form_errors(attribute(formDonneesSuivi, champ.Champ)) }}*/
/*             {% endfor %}*/
/* */
/*             <p>*/
/*                 {% for champ in champsViews %}*/
/*                     {{ form_label(attribute(formDonneesSuivi, champ.Champ), champ.Nom ~ " : ", {'label_attr': {'class': 'labelFormulaireRemplissageSuivi'}}) }}   */
/*                     {{ form_widget(attribute(formDonneesSuivi, champ.Champ)) }}*/
/*                     <br />*/
/*                 {% endfor %}*/
/* */
/*                 {{ form_widget(formDonneesSuivi.Generate, {'label': 'Générer fichier Excel', 'attr': {'class': 'boutonFormulaire' }}) }}*/
/*                 {{ form_widget(formDonneesSuivi.Save, {'label': 'Sauvegarder le suivi', 'attr': {'class': 'boutonFormulaire'}}) }}*/
/* */
/*             </p>*/
/*         </fieldset> */
/* */
/*         {{ form_end(formDonneesSuivi) }}*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* {# empty Twig template #}*/
/* */