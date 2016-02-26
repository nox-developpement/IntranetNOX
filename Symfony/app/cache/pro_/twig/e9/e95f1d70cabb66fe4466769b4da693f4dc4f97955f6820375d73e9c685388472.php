<?php

/* @NoxIntranetAdministration/AdministrationMateriel/administrationMateriel.html.twig */
class __TwigTemplate_70e8db950b3ba6535bb8591a2de78a62b7f4c980f75843586d944b922a22b204 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@NoxIntranetAdministration/AdministrationMateriel/administrationMateriel.html.twig", 1);
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
        echo " Administration matériel/logiciel ";
    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo " Administration matériel/logiciel ";
    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        // line 8
        echo "
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("class" => "formulaireAdministrationMateriel")));
        echo "
    ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "

    ";
        // line 12
        if (((isset($context["adresseHelpdesk"]) ? $context["adresseHelpdesk"] : null) == null)) {
            // line 13
            echo "
        <p> Pas d'adresse configué pour le Helpdesk </p> 

    ";
        } else {
            // line 17
            echo "
        <p> Adresse actuelle du Helpdesk : ";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["adresseHelpdesk"]) ? $context["adresseHelpdesk"] : null), "html", null, true);
            echo " </p> 

    ";
        }
        // line 21
        echo "
    ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'label', array("label_attr" => array("class" => "labelFormulaireAdministrationMaterielEmail"), "label" => "Nouvel email :"));
        echo "
    ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'errors');
        echo "
    ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'widget', array("attr" => array("class" => "FormulaireAdministrationMaterielEmail", "placeholder" => "ex: helpdek@groupe-nox.com")));
        echo "

    ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", array()), 'widget');
        echo "

    ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "modifier", array()), 'widget', array("attr" => array("class" => "submitformulaireAdministrationMateriel", "class" => "boutonFormulaire")));
        echo "

    ";
        // line 30
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

";
    }

    public function getTemplateName()
    {
        return "@NoxIntranetAdministration/AdministrationMateriel/administrationMateriel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 30,  95 => 28,  90 => 26,  85 => 24,  81 => 23,  77 => 22,  74 => 21,  68 => 18,  65 => 17,  59 => 13,  57 => 12,  52 => 10,  48 => 9,  45 => 8,  42 => 7,  36 => 5,  30 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %} Administration matériel/logiciel {% endblock %}*/
/* */
/* {% block messageAccueil %} Administration matériel/logiciel {% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     {{ form_start(form, {'attr': {'class': 'formulaireAdministrationMateriel'}}) }}*/
/*     {{ form_errors(form) }}*/
/* */
/*     {% if adresseHelpdesk == null %}*/
/* */
/*         <p> Pas d'adresse configué pour le Helpdesk </p> */
/* */
/*     {% else %}*/
/* */
/*         <p> Adresse actuelle du Helpdesk : {{ adresseHelpdesk }} </p> */
/* */
/*     {% endif %}*/
/* */
/*     {{ form_label(form.email, "Nouvel email :", {'label_attr': {'class': 'labelFormulaireAdministrationMaterielEmail'}}) }}*/
/*     {{ form_errors(form.email) }}*/
/*     {{ form_widget(form.email, {'attr': {'class': 'FormulaireAdministrationMaterielEmail', 'placeholder': 'ex: helpdek@groupe-nox.com'}}) }}*/
/* */
/*     {{ form_widget(form._token) }}*/
/* */
/*     {{ form_widget(form.modifier, {'attr': {'class': 'submitformulaireAdministrationMateriel', 'class': 'boutonFormulaire' }}) }}*/
/* */
/*     {{ form_end(form) }}*/
/* */
/* {% endblock %}*/
/* {# empty Twig template #}*/
/* */
