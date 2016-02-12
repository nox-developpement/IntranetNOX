<?php

/* NoxIntranetRessourcesBundle:AssistantAffaire:assistantaffairecreation.html.twig */
class __TwigTemplate_ce5a2d94efdfe39788e3a6e12ec19c7f794e8172ac91ee195a428c50d960b9b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetRessourcesBundle:AssistantAffaire:assistantaffairecreation.html.twig", 1);
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
        $__internal_be09760b78cac8f5f4281a8ca1692860121404322f08c9d083680ca232be983b = $this->env->getExtension("native_profiler");
        $__internal_be09760b78cac8f5f4281a8ca1692860121404322f08c9d083680ca232be983b->enter($__internal_be09760b78cac8f5f4281a8ca1692860121404322f08c9d083680ca232be983b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetRessourcesBundle:AssistantAffaire:assistantaffairecreation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be09760b78cac8f5f4281a8ca1692860121404322f08c9d083680ca232be983b->leave($__internal_be09760b78cac8f5f4281a8ca1692860121404322f08c9d083680ca232be983b_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_a2893c8f7d474c456aeaf7135524467e41f4d5e982dbd5ea37bf182b71a9eb1a = $this->env->getExtension("native_profiler");
        $__internal_a2893c8f7d474c456aeaf7135524467e41f4d5e982dbd5ea37bf182b71a9eb1a->enter($__internal_a2893c8f7d474c456aeaf7135524467e41f4d5e982dbd5ea37bf182b71a9eb1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Création de suivi ";
        
        $__internal_a2893c8f7d474c456aeaf7135524467e41f4d5e982dbd5ea37bf182b71a9eb1a->leave($__internal_a2893c8f7d474c456aeaf7135524467e41f4d5e982dbd5ea37bf182b71a9eb1a_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_da250302833de01e5927fdd403e5215aec2a61cb417251de63e1b4ce563012de = $this->env->getExtension("native_profiler");
        $__internal_da250302833de01e5927fdd403e5215aec2a61cb417251de63e1b4ce563012de->enter($__internal_da250302833de01e5927fdd403e5215aec2a61cb417251de63e1b4ce563012de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Création de suivi";
        
        $__internal_da250302833de01e5927fdd403e5215aec2a61cb417251de63e1b4ce563012de->leave($__internal_da250302833de01e5927fdd403e5215aec2a61cb417251de63e1b4ce563012de_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_0b10f0ed7e57d918f651b515b9af6ec11fb16aa57b08d5823b2a29bcdd5ddb5b = $this->env->getExtension("native_profiler");
        $__internal_0b10f0ed7e57d918f651b515b9af6ec11fb16aa57b08d5823b2a29bcdd5ddb5b->enter($__internal_0b10f0ed7e57d918f651b515b9af6ec11fb16aa57b08d5823b2a29bcdd5ddb5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 8
        echo "
    <div id=\"DivCreationSuivi\">

        ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "formulaireCreationSuivi")));
        echo "
        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

        <fieldset>

            <legend><span>Ajouter un suivi</span></legend>

            <p>

                ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Nom", array()), 'label', array("label_attr" => array("class" => "labelFormulaireCreationSuivi"), "label" => "Nom du suivi :"));
        echo "
                ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Nom", array()), 'errors');
        echo "
                ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Nom", array()), 'widget', array("attr" => array("class" => "textFormulaireCreationSuivi")));
        echo "

                <br />

                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Agence", array()), 'label', array("label_attr" => array("class" => "labelFormulaireCreationSuivi"), "label" => "Agence :"));
        echo "
                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Agence", array()), 'errors');
        echo "
                ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Agence", array()), 'widget', array("attr" => array("class" => "textFormulaireCreationSuivi")));
        echo "

                <br />

                ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "NumeroGX", array()), 'label', array("label_attr" => array("class" => "labelFormulaireCreationSuivi"), "label" => "Numéro GX :"));
        echo "
                ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "NumeroGX", array()), 'errors');
        echo "
                ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "NumeroGX", array()), 'widget', array("attr" => array("class" => "textFormulaireCreationSuivi", "min" => 1, "step" => 1)));
        echo "

                <br />

                ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Profil", array()), 'label', array("label_attr" => array("class" => "labelFormulaireCreationSuivi"), "label" => "Profil :"));
        echo "
                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Profil", array()), 'errors');
        echo "
                ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Profil", array()), 'widget', array("attr" => array("class" => "selectFormulaireCreationSuivi")));
        echo "

                ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "

                <br />

                ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Créer", array()), 'widget', array("label" => "Créer suivi", "attr" => array("class" => "submitFormulaireCreationSuivi")));
        echo "

            </p>

        </fieldset> 

        ";
        // line 52
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    </div>

";
        
        $__internal_0b10f0ed7e57d918f651b515b9af6ec11fb16aa57b08d5823b2a29bcdd5ddb5b->leave($__internal_0b10f0ed7e57d918f651b515b9af6ec11fb16aa57b08d5823b2a29bcdd5ddb5b_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetRessourcesBundle:AssistantAffaire:assistantaffairecreation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 52,  151 => 46,  144 => 42,  139 => 40,  135 => 39,  131 => 38,  124 => 34,  120 => 33,  116 => 32,  109 => 28,  105 => 27,  101 => 26,  94 => 22,  90 => 21,  86 => 20,  75 => 12,  71 => 11,  66 => 8,  60 => 7,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %} Création de suivi {% endblock %}*/
/* */
/* {% block messageAccueil %}Création de suivi{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     <div id="DivCreationSuivi">*/
/* */
/*         {{ form_start(form, {'attr': {'class': 'formulaireCreationSuivi'}}) }}*/
/*         {{ form_errors(form) }}*/
/* */
/*         <fieldset>*/
/* */
/*             <legend><span>Ajouter un suivi</span></legend>*/
/* */
/*             <p>*/
/* */
/*                 {{ form_label(form.Nom, "Nom du suivi :", {'label_attr': {'class': 'labelFormulaireCreationSuivi'}}) }}*/
/*                 {{ form_errors(form.Nom) }}*/
/*                 {{ form_widget(form.Nom, {'attr': {'class': 'textFormulaireCreationSuivi'}}) }}*/
/* */
/*                 <br />*/
/* */
/*                 {{ form_label(form.Agence, "Agence :", {'label_attr': {'class': 'labelFormulaireCreationSuivi'}}) }}*/
/*                 {{ form_errors(form.Agence) }}*/
/*                 {{ form_widget(form.Agence, {'attr': {'class': 'textFormulaireCreationSuivi'}}) }}*/
/* */
/*                 <br />*/
/* */
/*                 {{ form_label(form.NumeroGX, "Numéro GX :", {'label_attr': {'class': 'labelFormulaireCreationSuivi'}}) }}*/
/*                 {{ form_errors(form.NumeroGX) }}*/
/*                 {{ form_widget(form.NumeroGX, {'attr': {'class': 'textFormulaireCreationSuivi', 'min': 1 , 'step': 1 }}) }}*/
/* */
/*                 <br />*/
/* */
/*                 {{ form_label(form.Profil, "Profil :", {'label_attr': {'class': 'labelFormulaireCreationSuivi'}}) }}*/
/*                 {{ form_errors(form.Profil) }}*/
/*                 {{ form_widget(form.Profil, {'attr': {'class': 'selectFormulaireCreationSuivi'}}) }}*/
/* */
/*                 {{ form_widget(form._token) }}*/
/* */
/*                 <br />*/
/* */
/*                 {{ form_widget(form.Créer, {'label': 'Créer suivi', 'attr': {'class': 'submitFormulaireCreationSuivi' }}) }}*/
/* */
/*             </p>*/
/* */
/*         </fieldset> */
/* */
/*         {{ form_end(form) }}*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
