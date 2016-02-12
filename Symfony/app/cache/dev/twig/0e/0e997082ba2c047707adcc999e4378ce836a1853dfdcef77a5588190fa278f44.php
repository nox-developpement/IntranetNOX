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
        $__internal_f99acdee4da8ae22830020b192c35a030799b97a7ea4be5ee26454fb90430082 = $this->env->getExtension("native_profiler");
        $__internal_f99acdee4da8ae22830020b192c35a030799b97a7ea4be5ee26454fb90430082->enter($__internal_f99acdee4da8ae22830020b192c35a030799b97a7ea4be5ee26454fb90430082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetRessourcesBundle:AssistantAffaire:assistantaffairecreation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f99acdee4da8ae22830020b192c35a030799b97a7ea4be5ee26454fb90430082->leave($__internal_f99acdee4da8ae22830020b192c35a030799b97a7ea4be5ee26454fb90430082_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_24e344521d9aa8938813885bdd38a8da508e06e90230c74d741715d10f04098c = $this->env->getExtension("native_profiler");
        $__internal_24e344521d9aa8938813885bdd38a8da508e06e90230c74d741715d10f04098c->enter($__internal_24e344521d9aa8938813885bdd38a8da508e06e90230c74d741715d10f04098c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Création de suivi ";
        
        $__internal_24e344521d9aa8938813885bdd38a8da508e06e90230c74d741715d10f04098c->leave($__internal_24e344521d9aa8938813885bdd38a8da508e06e90230c74d741715d10f04098c_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_13ae7a297f022af62b5d62896422c6bd20ae3dea86822e244a8bbd1528b4f437 = $this->env->getExtension("native_profiler");
        $__internal_13ae7a297f022af62b5d62896422c6bd20ae3dea86822e244a8bbd1528b4f437->enter($__internal_13ae7a297f022af62b5d62896422c6bd20ae3dea86822e244a8bbd1528b4f437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Création de suivi";
        
        $__internal_13ae7a297f022af62b5d62896422c6bd20ae3dea86822e244a8bbd1528b4f437->leave($__internal_13ae7a297f022af62b5d62896422c6bd20ae3dea86822e244a8bbd1528b4f437_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_3d1f804d86fe50dab471c8b8853f9f68aaff622fe46c13db65405061cbec1fd5 = $this->env->getExtension("native_profiler");
        $__internal_3d1f804d86fe50dab471c8b8853f9f68aaff622fe46c13db65405061cbec1fd5->enter($__internal_3d1f804d86fe50dab471c8b8853f9f68aaff622fe46c13db65405061cbec1fd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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

            <legend>Ajouter un suivi</legend>

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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Créer", array()), 'widget', array("label" => "Créer suivi", "attr" => array("class" => "submitFormulaireCreationSuivi", "class" => "boutonFormulaire")));
        echo "

            </p>

        </fieldset> 

        ";
        // line 52
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    </div>

";
        
        $__internal_3d1f804d86fe50dab471c8b8853f9f68aaff622fe46c13db65405061cbec1fd5->leave($__internal_3d1f804d86fe50dab471c8b8853f9f68aaff622fe46c13db65405061cbec1fd5_prof);

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
/*             <legend>Ajouter un suivi</legend>*/
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
/*                 {{ form_widget(form.Créer, {'label': 'Créer suivi', 'attr': {'class': 'submitFormulaireCreationSuivi', 'class': 'boutonFormulaire' }}) }}*/
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
