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
        $__internal_cd029158db880651c534b1c12d02915f1aee887a87945b69d04c340e03b86c22 = $this->env->getExtension("native_profiler");
        $__internal_cd029158db880651c534b1c12d02915f1aee887a87945b69d04c340e03b86c22->enter($__internal_cd029158db880651c534b1c12d02915f1aee887a87945b69d04c340e03b86c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetSupportSIBundle:Support:information.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd029158db880651c534b1c12d02915f1aee887a87945b69d04c340e03b86c22->leave($__internal_cd029158db880651c534b1c12d02915f1aee887a87945b69d04c340e03b86c22_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_8c6bb1de451d8045bed86fb41fcc1bf17ab2aaa1d5d7213df49ee2df9e6fe846 = $this->env->getExtension("native_profiler");
        $__internal_8c6bb1de451d8045bed86fb41fcc1bf17ab2aaa1d5d7213df49ee2df9e6fe846->enter($__internal_8c6bb1de451d8045bed86fb41fcc1bf17ab2aaa1d5d7213df49ee2df9e6fe846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Information
";
        
        $__internal_8c6bb1de451d8045bed86fb41fcc1bf17ab2aaa1d5d7213df49ee2df9e6fe846->leave($__internal_8c6bb1de451d8045bed86fb41fcc1bf17ab2aaa1d5d7213df49ee2df9e6fe846_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_26588239c6c9b28a23b15b4c19080c3341749346ef64f05f3f4f68421b1a62a6 = $this->env->getExtension("native_profiler");
        $__internal_26588239c6c9b28a23b15b4c19080c3341749346ef64f05f3f4f68421b1a62a6->enter($__internal_26588239c6c9b28a23b15b4c19080c3341749346ef64f05f3f4f68421b1a62a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Information";
        
        $__internal_26588239c6c9b28a23b15b4c19080c3341749346ef64f05f3f4f68421b1a62a6->leave($__internal_26588239c6c9b28a23b15b4c19080c3341749346ef64f05f3f4f68421b1a62a6_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_ce412e3863b3555fa1d56820899053e287fe45ebbf3f4dd8c6826f5138812dd8 = $this->env->getExtension("native_profiler");
        $__internal_ce412e3863b3555fa1d56820899053e287fe45ebbf3f4dd8c6826f5138812dd8->enter($__internal_ce412e3863b3555fa1d56820899053e287fe45ebbf3f4dd8c6826f5138812dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        
        $__internal_ce412e3863b3555fa1d56820899053e287fe45ebbf3f4dd8c6826f5138812dd8->leave($__internal_ce412e3863b3555fa1d56820899053e287fe45ebbf3f4dd8c6826f5138812dd8_prof);

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
