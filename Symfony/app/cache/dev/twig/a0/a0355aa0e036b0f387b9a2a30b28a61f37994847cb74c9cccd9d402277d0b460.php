<?php

/* @NoxIntranetSupportSI/Support/avancementProjet.html.twig */
class __TwigTemplate_342d46a3568ebc018213b976b6bf80b12cf3b2699187fe7e9cd7fbffb5ed3736 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@NoxIntranetSupportSI/Support/avancementProjet.html.twig", 1);
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
        $__internal_ceb4a8651989109487322324ce79135dfe738cc08f3339303f445625802957a0 = $this->env->getExtension("native_profiler");
        $__internal_ceb4a8651989109487322324ce79135dfe738cc08f3339303f445625802957a0->enter($__internal_ceb4a8651989109487322324ce79135dfe738cc08f3339303f445625802957a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NoxIntranetSupportSI/Support/avancementProjet.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ceb4a8651989109487322324ce79135dfe738cc08f3339303f445625802957a0->leave($__internal_ceb4a8651989109487322324ce79135dfe738cc08f3339303f445625802957a0_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_e3c6d3152dbbcc8aa0a14c5c08890f39fb4f16ee6fbbb3674ca06339e717fcb1 = $this->env->getExtension("native_profiler");
        $__internal_e3c6d3152dbbcc8aa0a14c5c08890f39fb4f16ee6fbbb3674ca06339e717fcb1->enter($__internal_e3c6d3152dbbcc8aa0a14c5c08890f39fb4f16ee6fbbb3674ca06339e717fcb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Avancement projet
";
        
        $__internal_e3c6d3152dbbcc8aa0a14c5c08890f39fb4f16ee6fbbb3674ca06339e717fcb1->leave($__internal_e3c6d3152dbbcc8aa0a14c5c08890f39fb4f16ee6fbbb3674ca06339e717fcb1_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_27b263453844b3cef37b84bd8a2aa9a9933ffa20847a9624cd7fba53e90591ae = $this->env->getExtension("native_profiler");
        $__internal_27b263453844b3cef37b84bd8a2aa9a9933ffa20847a9624cd7fba53e90591ae->enter($__internal_27b263453844b3cef37b84bd8a2aa9a9933ffa20847a9624cd7fba53e90591ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Avancement projet";
        
        $__internal_27b263453844b3cef37b84bd8a2aa9a9933ffa20847a9624cd7fba53e90591ae->leave($__internal_27b263453844b3cef37b84bd8a2aa9a9933ffa20847a9624cd7fba53e90591ae_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_3993e3b693fd2baac55d9367f20645dbca1644ad0983a2b398b840a8dd107d0f = $this->env->getExtension("native_profiler");
        $__internal_3993e3b693fd2baac55d9367f20645dbca1644ad0983a2b398b840a8dd107d0f->enter($__internal_3993e3b693fd2baac55d9367f20645dbca1644ad0983a2b398b840a8dd107d0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 10
        echo "
    ";
        // line 11
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 12
            echo "
        <div class='zoneEdition'> 

            <button id='texteEditButton' class='boutonFormulaire'>Editer</button>

            ";
            // line 17
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'form_start', array("attr" => array("id" => "formulaireTexte")));
            echo "

            ";
            // line 19
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'errors');
            echo "

            ";
            // line 22
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "text", array()), 'errors');
            echo "

            ";
            // line 25
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "text", array()), 'widget', array("attr" => array("class" => "textField")));
            echo "

            ";
            // line 27
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'form_end');
            echo "

        </div>

    ";
        }
        // line 32
        echo "
    <div class='zoneTexte'>
        ";
        // line 34
        echo (isset($context["texte"]) ? $context["texte"] : $this->getContext($context, "texte"));
        echo "
    </di>

";
        
        $__internal_3993e3b693fd2baac55d9367f20645dbca1644ad0983a2b398b840a8dd107d0f->leave($__internal_3993e3b693fd2baac55d9367f20645dbca1644ad0983a2b398b840a8dd107d0f_prof);

    }

    public function getTemplateName()
    {
        return "@NoxIntranetSupportSI/Support/avancementProjet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 34,  110 => 32,  102 => 27,  96 => 25,  90 => 22,  85 => 19,  80 => 17,  73 => 12,  71 => 11,  68 => 10,  62 => 9,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %}*/
/*     Avancement projet*/
/* {% endblock %}*/
/* */
/* {% block messageAccueil %}Avancement projet{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     {% if is_granted('ROLE_ADMIN') %}*/
/* */
/*         <div class='zoneEdition'> */
/* */
/*             <button id='texteEditButton' class='boutonFormulaire'>Editer</button>*/
/* */
/*             {{ form_start(formulaire, {'attr': {'id': 'formulaireTexte' }}) }}*/
/* */
/*             {{ form_errors(formulaire) }}*/
/* */
/*             {# Affichage des erreurs pour ce champ précis. #}*/
/*             {{ form_errors(formulaire.text) }}*/
/* */
/*             {# Génération de l'input. #}*/
/*             {{ form_widget(formulaire.text, {'attr': {'class': 'textField' }}) }}*/
/* */
/*             {{ form_end(formulaire) }}*/
/* */
/*         </div>*/
/* */
/*     {% endif %}*/
/* */
/*     <div class='zoneTexte'>*/
/*         {{ texte|raw }}*/
/*     </di>*/
/* */
/* {% endblock %}*/
/* */
