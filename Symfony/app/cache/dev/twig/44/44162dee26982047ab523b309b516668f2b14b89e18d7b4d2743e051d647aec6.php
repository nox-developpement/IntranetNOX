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
        $__internal_bcb5e29d7e5d6e25a0f0b06a90cca4e3f7aefcc42add40e95d46d9453c43944b = $this->env->getExtension("native_profiler");
        $__internal_bcb5e29d7e5d6e25a0f0b06a90cca4e3f7aefcc42add40e95d46d9453c43944b->enter($__internal_bcb5e29d7e5d6e25a0f0b06a90cca4e3f7aefcc42add40e95d46d9453c43944b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NoxIntranetSupportSI/Support/information.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bcb5e29d7e5d6e25a0f0b06a90cca4e3f7aefcc42add40e95d46d9453c43944b->leave($__internal_bcb5e29d7e5d6e25a0f0b06a90cca4e3f7aefcc42add40e95d46d9453c43944b_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_1a86564d01e9081e4f22665435d57cce9df965697ffeebbcb0b6d70cfa1f1484 = $this->env->getExtension("native_profiler");
        $__internal_1a86564d01e9081e4f22665435d57cce9df965697ffeebbcb0b6d70cfa1f1484->enter($__internal_1a86564d01e9081e4f22665435d57cce9df965697ffeebbcb0b6d70cfa1f1484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Information
";
        
        $__internal_1a86564d01e9081e4f22665435d57cce9df965697ffeebbcb0b6d70cfa1f1484->leave($__internal_1a86564d01e9081e4f22665435d57cce9df965697ffeebbcb0b6d70cfa1f1484_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_514ca5a1d582bcfed55f6ccc197b7162af73359aaa347f47ff785dba09b48110 = $this->env->getExtension("native_profiler");
        $__internal_514ca5a1d582bcfed55f6ccc197b7162af73359aaa347f47ff785dba09b48110->enter($__internal_514ca5a1d582bcfed55f6ccc197b7162af73359aaa347f47ff785dba09b48110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Information";
        
        $__internal_514ca5a1d582bcfed55f6ccc197b7162af73359aaa347f47ff785dba09b48110->leave($__internal_514ca5a1d582bcfed55f6ccc197b7162af73359aaa347f47ff785dba09b48110_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_2131c1338df280ff62b6ab2fac832b7113b2e2953fd90f3074efd42c58951579 = $this->env->getExtension("native_profiler");
        $__internal_2131c1338df280ff62b6ab2fac832b7113b2e2953fd90f3074efd42c58951579->enter($__internal_2131c1338df280ff62b6ab2fac832b7113b2e2953fd90f3074efd42c58951579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        
        $__internal_2131c1338df280ff62b6ab2fac832b7113b2e2953fd90f3074efd42c58951579->leave($__internal_2131c1338df280ff62b6ab2fac832b7113b2e2953fd90f3074efd42c58951579_prof);

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
