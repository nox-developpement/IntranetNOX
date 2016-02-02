<?php

/* NoxIntranetAdministrationBundle:AdministrationMateriel:administrationMateriel.html.twig */
class __TwigTemplate_051ccb456ea2a6ace5ed4272ced228c7af97b7d717aaa8c3540db19c21f9265c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetAdministrationBundle:AdministrationMateriel:administrationMateriel.html.twig", 1);
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
        $__internal_469cde04e63411374ee22c5a27a9e07c039f612a0bee3beed0fda5d9dc90fd1d = $this->env->getExtension("native_profiler");
        $__internal_469cde04e63411374ee22c5a27a9e07c039f612a0bee3beed0fda5d9dc90fd1d->enter($__internal_469cde04e63411374ee22c5a27a9e07c039f612a0bee3beed0fda5d9dc90fd1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetAdministrationBundle:AdministrationMateriel:administrationMateriel.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_469cde04e63411374ee22c5a27a9e07c039f612a0bee3beed0fda5d9dc90fd1d->leave($__internal_469cde04e63411374ee22c5a27a9e07c039f612a0bee3beed0fda5d9dc90fd1d_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_97b07a392b81c75839307586a97342a234d34f4e57e8bd5f31719a742611d718 = $this->env->getExtension("native_profiler");
        $__internal_97b07a392b81c75839307586a97342a234d34f4e57e8bd5f31719a742611d718->enter($__internal_97b07a392b81c75839307586a97342a234d34f4e57e8bd5f31719a742611d718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Administration matériel/logiciel ";
        
        $__internal_97b07a392b81c75839307586a97342a234d34f4e57e8bd5f31719a742611d718->leave($__internal_97b07a392b81c75839307586a97342a234d34f4e57e8bd5f31719a742611d718_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_45ee12d2aa25ba089d55dbea2d29fce1af22089b7df61ac8883c24b03797bf49 = $this->env->getExtension("native_profiler");
        $__internal_45ee12d2aa25ba089d55dbea2d29fce1af22089b7df61ac8883c24b03797bf49->enter($__internal_45ee12d2aa25ba089d55dbea2d29fce1af22089b7df61ac8883c24b03797bf49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo " Administration matériel/logiciel ";
        
        $__internal_45ee12d2aa25ba089d55dbea2d29fce1af22089b7df61ac8883c24b03797bf49->leave($__internal_45ee12d2aa25ba089d55dbea2d29fce1af22089b7df61ac8883c24b03797bf49_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_982d10795c3edbabec4db928b41c2677fb00d531ab1170b08ac4481d4c47abc1 = $this->env->getExtension("native_profiler");
        $__internal_982d10795c3edbabec4db928b41c2677fb00d531ab1170b08ac4481d4c47abc1->enter($__internal_982d10795c3edbabec4db928b41c2677fb00d531ab1170b08ac4481d4c47abc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        
        $__internal_982d10795c3edbabec4db928b41c2677fb00d531ab1170b08ac4481d4c47abc1->leave($__internal_982d10795c3edbabec4db928b41c2677fb00d531ab1170b08ac4481d4c47abc1_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetAdministrationBundle:AdministrationMateriel:administrationMateriel.html.twig";
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
