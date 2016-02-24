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
        $__internal_65a025ccfae00fbdda3a3bfc161602a4370cddec34b2f5a7a8ab7bcc8cc191bc = $this->env->getExtension("native_profiler");
        $__internal_65a025ccfae00fbdda3a3bfc161602a4370cddec34b2f5a7a8ab7bcc8cc191bc->enter($__internal_65a025ccfae00fbdda3a3bfc161602a4370cddec34b2f5a7a8ab7bcc8cc191bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NoxIntranetAdministration/AdministrationMateriel/administrationMateriel.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65a025ccfae00fbdda3a3bfc161602a4370cddec34b2f5a7a8ab7bcc8cc191bc->leave($__internal_65a025ccfae00fbdda3a3bfc161602a4370cddec34b2f5a7a8ab7bcc8cc191bc_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_91eab4e0c866c6b98490731163b9c8377a5106a3533de0ee22a65d67b7303d8e = $this->env->getExtension("native_profiler");
        $__internal_91eab4e0c866c6b98490731163b9c8377a5106a3533de0ee22a65d67b7303d8e->enter($__internal_91eab4e0c866c6b98490731163b9c8377a5106a3533de0ee22a65d67b7303d8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Administration matériel/logiciel ";
        
        $__internal_91eab4e0c866c6b98490731163b9c8377a5106a3533de0ee22a65d67b7303d8e->leave($__internal_91eab4e0c866c6b98490731163b9c8377a5106a3533de0ee22a65d67b7303d8e_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_52a871293f7fefb898d77a5f9f322f0aedf5dd6b71e36be4657fc91b20888429 = $this->env->getExtension("native_profiler");
        $__internal_52a871293f7fefb898d77a5f9f322f0aedf5dd6b71e36be4657fc91b20888429->enter($__internal_52a871293f7fefb898d77a5f9f322f0aedf5dd6b71e36be4657fc91b20888429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo " Administration matériel/logiciel ";
        
        $__internal_52a871293f7fefb898d77a5f9f322f0aedf5dd6b71e36be4657fc91b20888429->leave($__internal_52a871293f7fefb898d77a5f9f322f0aedf5dd6b71e36be4657fc91b20888429_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_7729b0e924c7a6c806f0bd5e013bcfe746d6d2567fe09a2eed0840c783580c20 = $this->env->getExtension("native_profiler");
        $__internal_7729b0e924c7a6c806f0bd5e013bcfe746d6d2567fe09a2eed0840c783580c20->enter($__internal_7729b0e924c7a6c806f0bd5e013bcfe746d6d2567fe09a2eed0840c783580c20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        
        $__internal_7729b0e924c7a6c806f0bd5e013bcfe746d6d2567fe09a2eed0840c783580c20->leave($__internal_7729b0e924c7a6c806f0bd5e013bcfe746d6d2567fe09a2eed0840c783580c20_prof);

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
