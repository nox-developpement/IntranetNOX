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
        $__internal_878926f8f3369659881f4ba7170dfc13faf7d2aa178ee093f091a95d18f90d11 = $this->env->getExtension("native_profiler");
        $__internal_878926f8f3369659881f4ba7170dfc13faf7d2aa178ee093f091a95d18f90d11->enter($__internal_878926f8f3369659881f4ba7170dfc13faf7d2aa178ee093f091a95d18f90d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetRessourcesBundle:AssistantAffaire:assistantaffaireremplissageformulaire.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_878926f8f3369659881f4ba7170dfc13faf7d2aa178ee093f091a95d18f90d11->leave($__internal_878926f8f3369659881f4ba7170dfc13faf7d2aa178ee093f091a95d18f90d11_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_3ca782fe1edaebe58d712357bf895919fe1a95791114ff3a44a73cf3dbffeeea = $this->env->getExtension("native_profiler");
        $__internal_3ca782fe1edaebe58d712357bf895919fe1a95791114ff3a44a73cf3dbffeeea->enter($__internal_3ca782fe1edaebe58d712357bf895919fe1a95791114ff3a44a73cf3dbffeeea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Edition de feuille de suivi ";
        
        $__internal_3ca782fe1edaebe58d712357bf895919fe1a95791114ff3a44a73cf3dbffeeea->leave($__internal_3ca782fe1edaebe58d712357bf895919fe1a95791114ff3a44a73cf3dbffeeea_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_d3256bd67f56a7c231baabc6b742f0772b48d926a9b7c7acff74be3dc099923f = $this->env->getExtension("native_profiler");
        $__internal_d3256bd67f56a7c231baabc6b742f0772b48d926a9b7c7acff74be3dc099923f->enter($__internal_d3256bd67f56a7c231baabc6b742f0772b48d926a9b7c7acff74be3dc099923f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Edition de feuille de suivi - ";
        echo twig_escape_filter($this->env, (isset($context["suivi"]) ? $context["suivi"] : $this->getContext($context, "suivi")), "html", null, true);
        
        $__internal_d3256bd67f56a7c231baabc6b742f0772b48d926a9b7c7acff74be3dc099923f->leave($__internal_d3256bd67f56a7c231baabc6b742f0772b48d926a9b7c7acff74be3dc099923f_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_73586d18bbc2e2c618637ad639d5e04f68a7138f24f285b474c2f1b4399ab15b = $this->env->getExtension("native_profiler");
        $__internal_73586d18bbc2e2c618637ad639d5e04f68a7138f24f285b474c2f1b4399ab15b->enter($__internal_73586d18bbc2e2c618637ad639d5e04f68a7138f24f285b474c2f1b4399ab15b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
            // line 66
            if (($this->getAttribute($context["champ"], "Type", array()) == "Nombre")) {
                // line 67
                echo "                        <script>
                            var fax = document.getElementById('formDonneesSuivi_";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute($context["champ"], "Champ", array()), "html", null, true);
                echo "');
                            var phoneRegex = new RegExp(/^[-+]?[0-9]*\\.?[0-9]+\$/);
                            var checkValidPhoneNumber = function () {
                                if (!phoneRegex.test(fax.value)) {
                                    fax.style.borderColor = 'red';
                                    fax.setCustomValidity(\"Veuillez entrer un nombre. Les décimaux doivent être séparé par un point.\");
                                } else {
                                    fax.style.borderColor = 'initial';
                                    fax.setCustomValidity('');
                                }
                            };
                            \$('#formDonneesSuivi_";
                // line 79
                echo twig_escape_filter($this->env, $this->getAttribute($context["champ"], "Champ", array()), "html", null, true);
                echo "').keyup(function () {
                                checkValidPhoneNumber();
                            });
                        </script>
                    ";
            }
            // line 84
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['champ'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "
                ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formDonneesSuivi"]) ? $context["formDonneesSuivi"] : $this->getContext($context, "formDonneesSuivi")), "Generate", array()), 'widget', array("label" => "Générer fichier Excel", "attr" => array("class" => "boutonFormulaire")));
        echo "
                ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formDonneesSuivi"]) ? $context["formDonneesSuivi"] : $this->getContext($context, "formDonneesSuivi")), "Save", array()), 'widget', array("label" => "Sauvegarder le suivi", "attr" => array("class" => "boutonFormulaire")));
        echo "

            </p>
        </fieldset> 

        ";
        // line 93
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formDonneesSuivi"]) ? $context["formDonneesSuivi"] : $this->getContext($context, "formDonneesSuivi")), 'form_end');
        echo "
    </div>

";
        
        $__internal_73586d18bbc2e2c618637ad639d5e04f68a7138f24f285b474c2f1b4399ab15b->leave($__internal_73586d18bbc2e2c618637ad639d5e04f68a7138f24f285b474c2f1b4399ab15b_prof);

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
        return array (  243 => 93,  235 => 88,  231 => 87,  228 => 86,  221 => 84,  213 => 79,  199 => 68,  196 => 67,  194 => 66,  188 => 63,  183 => 62,  179 => 61,  175 => 59,  166 => 57,  162 => 56,  157 => 54,  150 => 50,  146 => 49,  138 => 44,  134 => 43,  127 => 39,  118 => 33,  114 => 32,  105 => 26,  98 => 22,  93 => 20,  89 => 19,  85 => 18,  76 => 12,  72 => 11,  67 => 8,  61 => 7,  48 => 5,  36 => 3,  11 => 1,);
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
/* */
/*                     {% if champ.Type == 'Nombre' %}*/
/*                         <script>*/
/*                             var fax = document.getElementById('formDonneesSuivi_{{ champ.Champ }}');*/
/*                             var phoneRegex = new RegExp(/^[-+]?[0-9]*\.?[0-9]+$/);*/
/*                             var checkValidPhoneNumber = function () {*/
/*                                 if (!phoneRegex.test(fax.value)) {*/
/*                                     fax.style.borderColor = 'red';*/
/*                                     fax.setCustomValidity("Veuillez entrer un nombre. Les décimaux doivent être séparé par un point.");*/
/*                                 } else {*/
/*                                     fax.style.borderColor = 'initial';*/
/*                                     fax.setCustomValidity('');*/
/*                                 }*/
/*                             };*/
/*                             $('#formDonneesSuivi_{{ champ.Champ }}').keyup(function () {*/
/*                                 checkValidPhoneNumber();*/
/*                             });*/
/*                         </script>*/
/*                     {% endif %}*/
/* */
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
