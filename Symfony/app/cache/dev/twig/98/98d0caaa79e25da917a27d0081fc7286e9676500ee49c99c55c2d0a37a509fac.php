<?php

/* @NoxIntranetRessources/Liens/liens.html.twig */
class __TwigTemplate_8c853a02aef5a18e25325b2f458cb6e39d9faa080d9277705ce44bb6be9b38e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@NoxIntranetRessources/Liens/liens.html.twig", 1);
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
        $__internal_fbacd467e789068d3fd9c908d5f5112fdd0916d2d874e7014da9ba51d1141942 = $this->env->getExtension("native_profiler");
        $__internal_fbacd467e789068d3fd9c908d5f5112fdd0916d2d874e7014da9ba51d1141942->enter($__internal_fbacd467e789068d3fd9c908d5f5112fdd0916d2d874e7014da9ba51d1141942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NoxIntranetRessources/Liens/liens.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbacd467e789068d3fd9c908d5f5112fdd0916d2d874e7014da9ba51d1141942->leave($__internal_fbacd467e789068d3fd9c908d5f5112fdd0916d2d874e7014da9ba51d1141942_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_463de03807e3cb83ad13dd0b24da9fbcd57c9a43823458a374cdba1ba9c2f53b = $this->env->getExtension("native_profiler");
        $__internal_463de03807e3cb83ad13dd0b24da9fbcd57c9a43823458a374cdba1ba9c2f53b->enter($__internal_463de03807e3cb83ad13dd0b24da9fbcd57c9a43823458a374cdba1ba9c2f53b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Liens
";
        
        $__internal_463de03807e3cb83ad13dd0b24da9fbcd57c9a43823458a374cdba1ba9c2f53b->leave($__internal_463de03807e3cb83ad13dd0b24da9fbcd57c9a43823458a374cdba1ba9c2f53b_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_83918f31c0454d3d9d1a7d5e543816c07a34a2b3c2c5609839c60b47dd6f58e6 = $this->env->getExtension("native_profiler");
        $__internal_83918f31c0454d3d9d1a7d5e543816c07a34a2b3c2c5609839c60b47dd6f58e6->enter($__internal_83918f31c0454d3d9d1a7d5e543816c07a34a2b3c2c5609839c60b47dd6f58e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Liens";
        
        $__internal_83918f31c0454d3d9d1a7d5e543816c07a34a2b3c2c5609839c60b47dd6f58e6->leave($__internal_83918f31c0454d3d9d1a7d5e543816c07a34a2b3c2c5609839c60b47dd6f58e6_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_632e6a2b91cb0aad6d6ab1e2c24d03fef55305799dab0a17e39d72036ecc5ff4 = $this->env->getExtension("native_profiler");
        $__internal_632e6a2b91cb0aad6d6ab1e2c24d03fef55305799dab0a17e39d72036ecc5ff4->enter($__internal_632e6a2b91cb0aad6d6ab1e2c24d03fef55305799dab0a17e39d72036ecc5ff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 10
        echo "
    ";
        // line 11
        if ($this->env->getExtension('security')->isGranted("ROLE_LIENS")) {
            echo " 

        <div class='zoneEdition' id=\"zoneEditionLiens\">

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
    <div class='zoneTexte' id=\"zoneTexteLiens\">
        ";
        // line 34
        echo (isset($context["texte"]) ? $context["texte"] : $this->getContext($context, "texte"));
        echo "
    </di>

";
        
        $__internal_632e6a2b91cb0aad6d6ab1e2c24d03fef55305799dab0a17e39d72036ecc5ff4->leave($__internal_632e6a2b91cb0aad6d6ab1e2c24d03fef55305799dab0a17e39d72036ecc5ff4_prof);

    }

    public function getTemplateName()
    {
        return "@NoxIntranetRessources/Liens/liens.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 34,  110 => 32,  102 => 27,  96 => 25,  90 => 22,  85 => 19,  80 => 17,  71 => 11,  68 => 10,  62 => 9,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %}*/
/*     Liens*/
/* {% endblock %}*/
/* */
/* {% block messageAccueil %}Liens{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     {% if is_granted('ROLE_LIENS') %} */
/* */
/*         <div class='zoneEdition' id="zoneEditionLiens">*/
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
/*     <div class='zoneTexte' id="zoneTexteLiens">*/
/*         {{ texte|raw }}*/
/*     </di>*/
/* */
/* {% endblock %}*/
/* */
