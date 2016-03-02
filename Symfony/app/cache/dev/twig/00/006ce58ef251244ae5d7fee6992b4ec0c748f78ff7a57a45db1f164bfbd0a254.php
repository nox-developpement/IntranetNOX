<?php

/* NoxIntranetAdministrationBundle:AdministrationAffaires:administrationaffaireseditionchamp.html.twig */
class __TwigTemplate_b143fb206fef7045bcd4afa06ac5295a2eb79d5d1f8a82dca841962a05611acc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetAdministrationBundle:AdministrationAffaires:administrationaffaireseditionchamp.html.twig", 1);
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
        $__internal_c1c6c791f8b3eaaebdcc191b3c64ca7ccc1ceac3df901908485291d18830e971 = $this->env->getExtension("native_profiler");
        $__internal_c1c6c791f8b3eaaebdcc191b3c64ca7ccc1ceac3df901908485291d18830e971->enter($__internal_c1c6c791f8b3eaaebdcc191b3c64ca7ccc1ceac3df901908485291d18830e971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetAdministrationBundle:AdministrationAffaires:administrationaffaireseditionchamp.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1c6c791f8b3eaaebdcc191b3c64ca7ccc1ceac3df901908485291d18830e971->leave($__internal_c1c6c791f8b3eaaebdcc191b3c64ca7ccc1ceac3df901908485291d18830e971_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_18ed2fa37b5628523111bb78f4f75b799bb4c5362304be174e5e1475cada2cb6 = $this->env->getExtension("native_profiler");
        $__internal_18ed2fa37b5628523111bb78f4f75b799bb4c5362304be174e5e1475cada2cb6->enter($__internal_18ed2fa37b5628523111bb78f4f75b799bb4c5362304be174e5e1475cada2cb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Edition de champ ";
        
        $__internal_18ed2fa37b5628523111bb78f4f75b799bb4c5362304be174e5e1475cada2cb6->leave($__internal_18ed2fa37b5628523111bb78f4f75b799bb4c5362304be174e5e1475cada2cb6_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_e46752f823ecb01f50cb19ab2f1b6f65f25bf3f29a4e6e88bc18ceff89a9008c = $this->env->getExtension("native_profiler");
        $__internal_e46752f823ecb01f50cb19ab2f1b6f65f25bf3f29a4e6e88bc18ceff89a9008c->enter($__internal_e46752f823ecb01f50cb19ab2f1b6f65f25bf3f29a4e6e88bc18ceff89a9008c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Edition de champ - ";
        echo twig_escape_filter($this->env, (isset($context["champ"]) ? $context["champ"] : $this->getContext($context, "champ")), "html", null, true);
        
        $__internal_e46752f823ecb01f50cb19ab2f1b6f65f25bf3f29a4e6e88bc18ceff89a9008c->leave($__internal_e46752f823ecb01f50cb19ab2f1b6f65f25bf3f29a4e6e88bc18ceff89a9008c_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_d84282f608876805211e469a524fc2c16ae46b14b5eb70568f1683c6eaee3e0d = $this->env->getExtension("native_profiler");
        $__internal_d84282f608876805211e469a524fc2c16ae46b14b5eb70568f1683c6eaee3e0d->enter($__internal_d84282f608876805211e469a524fc2c16ae46b14b5eb70568f1683c6eaee3e0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 8
        echo "
    <div class='DivFormulaireAjoutDonnee'>

        ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formAjoutDonnee"]) ? $context["formAjoutDonnee"] : $this->getContext($context, "formAjoutDonnee")), 'form_start', array("attr" => array("class" => "formulaireAjoutDonnee")));
        echo "
        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formAjoutDonnee"]) ? $context["formAjoutDonnee"] : $this->getContext($context, "formAjoutDonnee")), 'errors');
        echo "

        <fieldset>

            <legend>Ajouter une donnée</legend>       

            <p>
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutDonnee"]) ? $context["formAjoutDonnee"] : $this->getContext($context, "formAjoutDonnee")), "Donnee", array()), 'label', array("label_attr" => array("class" => "labelFormulaireAjoutDonnee"), "label" => "Donnée :"));
        echo "
                ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutDonnee"]) ? $context["formAjoutDonnee"] : $this->getContext($context, "formAjoutDonnee")), "Donnee", array()), 'errors');
        echo "
                ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutDonnee"]) ? $context["formAjoutDonnee"] : $this->getContext($context, "formAjoutDonnee")), "Donnee", array()), 'widget', array("attr" => array("class" => "selectFormulaireAjoutDonnee")));
        echo "
            </p>

            <p>
                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutDonnee"]) ? $context["formAjoutDonnee"] : $this->getContext($context, "formAjoutDonnee")), "_token", array()), 'widget');
        echo " 

                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutDonnee"]) ? $context["formAjoutDonnee"] : $this->getContext($context, "formAjoutDonnee")), "Ajouter", array()), 'widget', array("attr" => array("class" => "submitFormulaireAjoutDonne", "class" => "boutonFormulaire")));
        echo "
            </p>

        </fieldset> 

        ";
        // line 32
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formAjoutDonnee"]) ? $context["formAjoutDonnee"] : $this->getContext($context, "formAjoutDonnee")), 'form_end');
        echo "

    </div>

    <div class='DivFormulaireSuppressionDonnee'>

        ";
        // line 38
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSuppressionDonnee"]) ? $context["formSuppressionDonnee"] : $this->getContext($context, "formSuppressionDonnee")), 'form_start', array("attr" => array("class" => "formulaireSuppresionDonnee")));
        echo "
        ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formSuppressionDonnee"]) ? $context["formSuppressionDonnee"] : $this->getContext($context, "formSuppressionDonnee")), 'errors');
        echo "

        <fieldset>

            <legend>Supprimer une donnée</legend>       

            <p>
                ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppressionDonnee"]) ? $context["formSuppressionDonnee"] : $this->getContext($context, "formSuppressionDonnee")), "Donnees", array()), 'label', array("label_attr" => array("class" => "labelFormulaireSuppressionDonnee"), "label" => "Donnée :"));
        echo "
                ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppressionDonnee"]) ? $context["formSuppressionDonnee"] : $this->getContext($context, "formSuppressionDonnee")), "Donnees", array()), 'errors');
        echo "
                ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppressionDonnee"]) ? $context["formSuppressionDonnee"] : $this->getContext($context, "formSuppressionDonnee")), "Donnees", array()), 'widget', array("attr" => array("class" => "selectFormulaireSuppressionDonnee")));
        echo "
            </p>

            <p>
                ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppressionDonnee"]) ? $context["formSuppressionDonnee"] : $this->getContext($context, "formSuppressionDonnee")), "_token", array()), 'widget');
        echo " 

                ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppressionDonnee"]) ? $context["formSuppressionDonnee"] : $this->getContext($context, "formSuppressionDonnee")), "Supprimer", array()), 'widget', array("attr" => array("class" => "submitFormulaireSuppressionDonne", "class" => "boutonFormulaire")));
        echo "
            </p>

        </fieldset> 

        ";
        // line 59
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSuppressionDonnee"]) ? $context["formSuppressionDonnee"] : $this->getContext($context, "formSuppressionDonnee")), 'form_end');
        echo "

    </div>

";
        
        $__internal_d84282f608876805211e469a524fc2c16ae46b14b5eb70568f1683c6eaee3e0d->leave($__internal_d84282f608876805211e469a524fc2c16ae46b14b5eb70568f1683c6eaee3e0d_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetAdministrationBundle:AdministrationAffaires:administrationaffaireseditionchamp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 59,  157 => 54,  152 => 52,  145 => 48,  141 => 47,  137 => 46,  127 => 39,  123 => 38,  114 => 32,  106 => 27,  101 => 25,  94 => 21,  90 => 20,  86 => 19,  76 => 12,  72 => 11,  67 => 8,  61 => 7,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %} Edition de champ {% endblock %}*/
/* */
/* {% block messageAccueil %}Edition de champ - {{ champ }}{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     <div class='DivFormulaireAjoutDonnee'>*/
/* */
/*         {{ form_start(formAjoutDonnee, {'attr': {'class': 'formulaireAjoutDonnee'}}) }}*/
/*         {{ form_errors(formAjoutDonnee) }}*/
/* */
/*         <fieldset>*/
/* */
/*             <legend>Ajouter une donnée</legend>       */
/* */
/*             <p>*/
/*                 {{ form_label(formAjoutDonnee.Donnee, "Donnée :", {'label_attr': {'class': 'labelFormulaireAjoutDonnee'}}) }}*/
/*                 {{ form_errors(formAjoutDonnee.Donnee) }}*/
/*                 {{ form_widget(formAjoutDonnee.Donnee, {'attr': {'class': 'selectFormulaireAjoutDonnee' }}) }}*/
/*             </p>*/
/* */
/*             <p>*/
/*                 {{ form_widget(formAjoutDonnee._token) }} */
/* */
/*                 {{ form_widget(formAjoutDonnee.Ajouter, {'attr': {'class': 'submitFormulaireAjoutDonne', 'class': 'boutonFormulaire' }}) }}*/
/*             </p>*/
/* */
/*         </fieldset> */
/* */
/*         {{ form_end(formAjoutDonnee) }}*/
/* */
/*     </div>*/
/* */
/*     <div class='DivFormulaireSuppressionDonnee'>*/
/* */
/*         {{ form_start(formSuppressionDonnee, {'attr': {'class': 'formulaireSuppresionDonnee'}}) }}*/
/*         {{ form_errors(formSuppressionDonnee) }}*/
/* */
/*         <fieldset>*/
/* */
/*             <legend>Supprimer une donnée</legend>       */
/* */
/*             <p>*/
/*                 {{ form_label(formSuppressionDonnee.Donnees, "Donnée :", {'label_attr': {'class': 'labelFormulaireSuppressionDonnee'}}) }}*/
/*                 {{ form_errors(formSuppressionDonnee.Donnees) }}*/
/*                 {{ form_widget(formSuppressionDonnee.Donnees, {'attr': {'class': 'selectFormulaireSuppressionDonnee' }}) }}*/
/*             </p>*/
/* */
/*             <p>*/
/*                 {{ form_widget(formSuppressionDonnee._token) }} */
/* */
/*                 {{ form_widget(formSuppressionDonnee.Supprimer, {'attr': {'class': 'submitFormulaireSuppressionDonne', 'class': 'boutonFormulaire' }}) }}*/
/*             </p>*/
/* */
/*         </fieldset> */
/* */
/*         {{ form_end(formSuppressionDonnee) }}*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
