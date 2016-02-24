<?php

/* @NoxIntranetSupportSI/Support/information.html.twig */
class __TwigTemplate_4be7925e48aa0b5325954cf984bee6b65eea23fe790114200e6e3f749d7c47aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@NoxIntranetSupportSI/Support/information.html.twig", 1);
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
        $__internal_4305235d3114477562054caad27a0c32f0bf6dd08e464a47c0adc67a47f268a6 = $this->env->getExtension("native_profiler");
        $__internal_4305235d3114477562054caad27a0c32f0bf6dd08e464a47c0adc67a47f268a6->enter($__internal_4305235d3114477562054caad27a0c32f0bf6dd08e464a47c0adc67a47f268a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NoxIntranetSupportSI/Support/information.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4305235d3114477562054caad27a0c32f0bf6dd08e464a47c0adc67a47f268a6->leave($__internal_4305235d3114477562054caad27a0c32f0bf6dd08e464a47c0adc67a47f268a6_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_78afbfa8f13494c075bdd249f74e69f338c05c6996562dadb82535d636849033 = $this->env->getExtension("native_profiler");
        $__internal_78afbfa8f13494c075bdd249f74e69f338c05c6996562dadb82535d636849033->enter($__internal_78afbfa8f13494c075bdd249f74e69f338c05c6996562dadb82535d636849033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Information
";
        
        $__internal_78afbfa8f13494c075bdd249f74e69f338c05c6996562dadb82535d636849033->leave($__internal_78afbfa8f13494c075bdd249f74e69f338c05c6996562dadb82535d636849033_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_b64aa676e588866bd36dbdd0a05d72429f5613e079806f1745b55c1f4ab9605b = $this->env->getExtension("native_profiler");
        $__internal_b64aa676e588866bd36dbdd0a05d72429f5613e079806f1745b55c1f4ab9605b->enter($__internal_b64aa676e588866bd36dbdd0a05d72429f5613e079806f1745b55c1f4ab9605b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Information";
        
        $__internal_b64aa676e588866bd36dbdd0a05d72429f5613e079806f1745b55c1f4ab9605b->leave($__internal_b64aa676e588866bd36dbdd0a05d72429f5613e079806f1745b55c1f4ab9605b_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_6602f3903504a772b3025d438decf7bf38ceace457255366bc001c94c56d7be2 = $this->env->getExtension("native_profiler");
        $__internal_6602f3903504a772b3025d438decf7bf38ceace457255366bc001c94c56d7be2->enter($__internal_6602f3903504a772b3025d438decf7bf38ceace457255366bc001c94c56d7be2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        
        $__internal_6602f3903504a772b3025d438decf7bf38ceace457255366bc001c94c56d7be2->leave($__internal_6602f3903504a772b3025d438decf7bf38ceace457255366bc001c94c56d7be2_prof);

    }

    public function getTemplateName()
    {
        return "@NoxIntranetSupportSI/Support/information.html.twig";
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
/*     Information*/
/* {% endblock %}*/
/* */
/* {% block messageAccueil %}Information{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     {% if is_granted('ROLE_ADMIN') %}*/
/* */
/*         <div class='zoneEdition'>*/
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
/* {# empty Twig template #}*/
/* */
