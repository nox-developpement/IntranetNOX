<?php

/* NoxIntranetSupportSIBundle:Support:information.html.twig */
class __TwigTemplate_645f8754bbe03b72f28d31d05fada3d314ef29426feb50d37f1142bc0f02e29b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetSupportSIBundle:Support:information.html.twig", 1);
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
        $__internal_63ac04de1c8570bee678e5a2bc1c45f127002bf451374ecd75a596d7b407921f = $this->env->getExtension("native_profiler");
        $__internal_63ac04de1c8570bee678e5a2bc1c45f127002bf451374ecd75a596d7b407921f->enter($__internal_63ac04de1c8570bee678e5a2bc1c45f127002bf451374ecd75a596d7b407921f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetSupportSIBundle:Support:information.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63ac04de1c8570bee678e5a2bc1c45f127002bf451374ecd75a596d7b407921f->leave($__internal_63ac04de1c8570bee678e5a2bc1c45f127002bf451374ecd75a596d7b407921f_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_7129a44502d5935728a4aaca2c624e0b9d3a719fccb376051e9d5cd648df03c3 = $this->env->getExtension("native_profiler");
        $__internal_7129a44502d5935728a4aaca2c624e0b9d3a719fccb376051e9d5cd648df03c3->enter($__internal_7129a44502d5935728a4aaca2c624e0b9d3a719fccb376051e9d5cd648df03c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Information
";
        
        $__internal_7129a44502d5935728a4aaca2c624e0b9d3a719fccb376051e9d5cd648df03c3->leave($__internal_7129a44502d5935728a4aaca2c624e0b9d3a719fccb376051e9d5cd648df03c3_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_dc6f54f1416b77884ab1b103cd59dae326bcdee8f3672bba6517fd6662ddee00 = $this->env->getExtension("native_profiler");
        $__internal_dc6f54f1416b77884ab1b103cd59dae326bcdee8f3672bba6517fd6662ddee00->enter($__internal_dc6f54f1416b77884ab1b103cd59dae326bcdee8f3672bba6517fd6662ddee00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Information";
        
        $__internal_dc6f54f1416b77884ab1b103cd59dae326bcdee8f3672bba6517fd6662ddee00->leave($__internal_dc6f54f1416b77884ab1b103cd59dae326bcdee8f3672bba6517fd6662ddee00_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_d52850c731e4ca690b41a9f2cf1935b23389055277bb81fc205eeef2a71ff72c = $this->env->getExtension("native_profiler");
        $__internal_d52850c731e4ca690b41a9f2cf1935b23389055277bb81fc205eeef2a71ff72c->enter($__internal_d52850c731e4ca690b41a9f2cf1935b23389055277bb81fc205eeef2a71ff72c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        
        $__internal_d52850c731e4ca690b41a9f2cf1935b23389055277bb81fc205eeef2a71ff72c->leave($__internal_d52850c731e4ca690b41a9f2cf1935b23389055277bb81fc205eeef2a71ff72c_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetSupportSIBundle:Support:information.html.twig";
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
