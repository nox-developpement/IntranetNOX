<?php

/* @NoxIntranetAdministration/AdministrationMateriel/administrationMateriel.html.twig */
class __TwigTemplate_b32220bdb45deb72edd399e6f4945a799ea943812c94d581cfa9e93231e233aa extends Twig_Template
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
        $__internal_3485d67b4d2049fec1ca6d955b0ba0dc51415adceb8a4968659fe89e8224c0ec = $this->env->getExtension("native_profiler");
        $__internal_3485d67b4d2049fec1ca6d955b0ba0dc51415adceb8a4968659fe89e8224c0ec->enter($__internal_3485d67b4d2049fec1ca6d955b0ba0dc51415adceb8a4968659fe89e8224c0ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NoxIntranetAdministration/AdministrationMateriel/administrationMateriel.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3485d67b4d2049fec1ca6d955b0ba0dc51415adceb8a4968659fe89e8224c0ec->leave($__internal_3485d67b4d2049fec1ca6d955b0ba0dc51415adceb8a4968659fe89e8224c0ec_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_bc6c3ef8c3b07d25a5ce3af190e725ec34dccaf318b2b945a90fb56b53b69660 = $this->env->getExtension("native_profiler");
        $__internal_bc6c3ef8c3b07d25a5ce3af190e725ec34dccaf318b2b945a90fb56b53b69660->enter($__internal_bc6c3ef8c3b07d25a5ce3af190e725ec34dccaf318b2b945a90fb56b53b69660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Administration matériel/logiciel ";
        
        $__internal_bc6c3ef8c3b07d25a5ce3af190e725ec34dccaf318b2b945a90fb56b53b69660->leave($__internal_bc6c3ef8c3b07d25a5ce3af190e725ec34dccaf318b2b945a90fb56b53b69660_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_64e1f5ca5e1647ca2ec4ede14b6af2f2b373a402ed0c9ae0dd044af3fdf34883 = $this->env->getExtension("native_profiler");
        $__internal_64e1f5ca5e1647ca2ec4ede14b6af2f2b373a402ed0c9ae0dd044af3fdf34883->enter($__internal_64e1f5ca5e1647ca2ec4ede14b6af2f2b373a402ed0c9ae0dd044af3fdf34883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo " Administration matériel/logiciel ";
        
        $__internal_64e1f5ca5e1647ca2ec4ede14b6af2f2b373a402ed0c9ae0dd044af3fdf34883->leave($__internal_64e1f5ca5e1647ca2ec4ede14b6af2f2b373a402ed0c9ae0dd044af3fdf34883_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_e27fc427009b4b83df0295cc8ebe3043d3f3c37ff82172216654a14971c7e6f6 = $this->env->getExtension("native_profiler");
        $__internal_e27fc427009b4b83df0295cc8ebe3043d3f3c37ff82172216654a14971c7e6f6->enter($__internal_e27fc427009b4b83df0295cc8ebe3043d3f3c37ff82172216654a14971c7e6f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 8
        echo "
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "formulaireAdministrationMateriel")));
        echo "
    ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

    ";
        // line 12
        if (((isset($context["adresseHelpdesk"]) ? $context["adresseHelpdesk"] : $this->getContext($context, "adresseHelpdesk")) == null)) {
            // line 13
            echo "
        <p> Pas d'adresse configué pour le Helpdesk </p> 

    ";
        } else {
            // line 17
            echo "
        <p> Adresse actuelle du Helpdesk : ";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["adresseHelpdesk"]) ? $context["adresseHelpdesk"] : $this->getContext($context, "adresseHelpdesk")), "html", null, true);
            echo " </p> 

    ";
        }
        // line 21
        echo "
    ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label', array("label_attr" => array("class" => "labelFormulaireAdministrationMaterielEmail"), "label" => "Nouvel email :"));
        echo "
    ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
    ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "FormulaireAdministrationMaterielEmail", "placeholder" => "ex: helpdek@groupe-nox.com")));
        echo "

    ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "

    ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "modifier", array()), 'widget', array("attr" => array("class" => "submitformulaireAdministrationMateriel", "class" => "boutonFormulaire")));
        echo "

    ";
        // line 30
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_e27fc427009b4b83df0295cc8ebe3043d3f3c37ff82172216654a14971c7e6f6->leave($__internal_e27fc427009b4b83df0295cc8ebe3043d3f3c37ff82172216654a14971c7e6f6_prof);

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
        return array (  121 => 30,  116 => 28,  111 => 26,  106 => 24,  102 => 23,  98 => 22,  95 => 21,  89 => 18,  86 => 17,  80 => 13,  78 => 12,  73 => 10,  69 => 9,  66 => 8,  60 => 7,  48 => 5,  36 => 3,  11 => 1,);
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
