<?php

/* @NoxIntranetRessources/Archives/archives.html.twig */
class __TwigTemplate_114aebf659d33405066a79559edafc778d53f678e315841ed9cabb59ff29466f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@NoxIntranetRessources/Archives/archives.html.twig", 1);
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
        $__internal_8a878e0f7078d8892917302148c8ef582cca9dcee221fa8f31d875b97fef5ae0 = $this->env->getExtension("native_profiler");
        $__internal_8a878e0f7078d8892917302148c8ef582cca9dcee221fa8f31d875b97fef5ae0->enter($__internal_8a878e0f7078d8892917302148c8ef582cca9dcee221fa8f31d875b97fef5ae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NoxIntranetRessources/Archives/archives.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a878e0f7078d8892917302148c8ef582cca9dcee221fa8f31d875b97fef5ae0->leave($__internal_8a878e0f7078d8892917302148c8ef582cca9dcee221fa8f31d875b97fef5ae0_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_fd81e31f16b3469b724df9b945461cadc47f5001483da18a2ad0bfb7d36d3676 = $this->env->getExtension("native_profiler");
        $__internal_fd81e31f16b3469b724df9b945461cadc47f5001483da18a2ad0bfb7d36d3676->enter($__internal_fd81e31f16b3469b724df9b945461cadc47f5001483da18a2ad0bfb7d36d3676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Archives
";
        
        $__internal_fd81e31f16b3469b724df9b945461cadc47f5001483da18a2ad0bfb7d36d3676->leave($__internal_fd81e31f16b3469b724df9b945461cadc47f5001483da18a2ad0bfb7d36d3676_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_1b9306340a5294ec44fc91672d807708d51aae50fc082280aaab3392f8e668f6 = $this->env->getExtension("native_profiler");
        $__internal_1b9306340a5294ec44fc91672d807708d51aae50fc082280aaab3392f8e668f6->enter($__internal_1b9306340a5294ec44fc91672d807708d51aae50fc082280aaab3392f8e668f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Archives";
        
        $__internal_1b9306340a5294ec44fc91672d807708d51aae50fc082280aaab3392f8e668f6->leave($__internal_1b9306340a5294ec44fc91672d807708d51aae50fc082280aaab3392f8e668f6_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_25fcfbfc1237db36d80c5b0db5b571543b09dab8f401c7db91af6f2b4ac457d3 = $this->env->getExtension("native_profiler");
        $__internal_25fcfbfc1237db36d80c5b0db5b571543b09dab8f401c7db91af6f2b4ac457d3->enter($__internal_25fcfbfc1237db36d80c5b0db5b571543b09dab8f401c7db91af6f2b4ac457d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 10
        echo "    
        <div class='zoneEdition'>

            ";
        // line 13
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 14
            echo "            
            <button id='texteEditButton' class='boutonFormulaire'>Editer</button>
            
            ";
        }
        // line 18
        echo "   
            ";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'form_start', array("attr" => array("id" => "formulaireTexte")));
        echo "

            ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'errors');
        echo "

            ";
        // line 24
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "text", array()), 'errors');
        echo "

            ";
        // line 27
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "text", array()), 'widget', array("attr" => array("class" => "textField")));
        echo "

            ";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'form_end');
        echo "

        </div>

        <div class='zoneTexte'>
            ";
        // line 34
        echo (isset($context["texte"]) ? $context["texte"] : $this->getContext($context, "texte"));
        echo "
        </div>
        
";
        
        $__internal_25fcfbfc1237db36d80c5b0db5b571543b09dab8f401c7db91af6f2b4ac457d3->leave($__internal_25fcfbfc1237db36d80c5b0db5b571543b09dab8f401c7db91af6f2b4ac457d3_prof);

    }

    public function getTemplateName()
    {
        return "@NoxIntranetRessources/Archives/archives.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 34,  106 => 29,  100 => 27,  94 => 24,  89 => 21,  84 => 19,  81 => 18,  75 => 14,  73 => 13,  68 => 10,  62 => 9,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %}*/
/*     Archives*/
/* {% endblock %}*/
/* */
/* {% block messageAccueil %}Archives{% endblock %}*/
/* */
/* {% block contenu %}*/
/*     */
/*         <div class='zoneEdition'>*/
/* */
/*             {% if is_granted('ROLE_ADMIN') %}*/
/*             */
/*             <button id='texteEditButton' class='boutonFormulaire'>Editer</button>*/
/*             */
/*             {% endif %}*/
/*    */
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
/*         <div class='zoneTexte'>*/
/*             {{ texte|raw }}*/
/*         </div>*/
/*         */
/* {% endblock %}*/
/* {# empty Twig template #}*/
/* */
