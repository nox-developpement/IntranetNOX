<?php

/* NoxIntranetCommunicationBundle:Accueil:BIM.html.twig */
class __TwigTemplate_c8753c7c76f9e8e208c9c4d17a912abca19279405214dabb3aaa2c93dfbc5f8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetCommunicationBundle:Accueil:BIM.html.twig", 1);
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
        $__internal_4d39bdc8f9406099e7ec1e8c6f3e416bc0fb21be04b89cacd066d27326e327b6 = $this->env->getExtension("native_profiler");
        $__internal_4d39bdc8f9406099e7ec1e8c6f3e416bc0fb21be04b89cacd066d27326e327b6->enter($__internal_4d39bdc8f9406099e7ec1e8c6f3e416bc0fb21be04b89cacd066d27326e327b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetCommunicationBundle:Accueil:BIM.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d39bdc8f9406099e7ec1e8c6f3e416bc0fb21be04b89cacd066d27326e327b6->leave($__internal_4d39bdc8f9406099e7ec1e8c6f3e416bc0fb21be04b89cacd066d27326e327b6_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_dc1ac456e45309ed5017e730962205ee9e410fd2adf454f945dc5ec5ef06f348 = $this->env->getExtension("native_profiler");
        $__internal_dc1ac456e45309ed5017e730962205ee9e410fd2adf454f945dc5ec5ef06f348->enter($__internal_dc1ac456e45309ed5017e730962205ee9e410fd2adf454f945dc5ec5ef06f348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    BIM
";
        
        $__internal_dc1ac456e45309ed5017e730962205ee9e410fd2adf454f945dc5ec5ef06f348->leave($__internal_dc1ac456e45309ed5017e730962205ee9e410fd2adf454f945dc5ec5ef06f348_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_9330c70722181428893f212c9cab20992dc7a2c3c11799d5ce4e0365fb47a86e = $this->env->getExtension("native_profiler");
        $__internal_9330c70722181428893f212c9cab20992dc7a2c3c11799d5ce4e0365fb47a86e->enter($__internal_9330c70722181428893f212c9cab20992dc7a2c3c11799d5ce4e0365fb47a86e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "BIM";
        
        $__internal_9330c70722181428893f212c9cab20992dc7a2c3c11799d5ce4e0365fb47a86e->leave($__internal_9330c70722181428893f212c9cab20992dc7a2c3c11799d5ce4e0365fb47a86e_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_6619512d4bb72c3c7347fb4496d4197ce01374a1ce82f347c12e70baa2c46177 = $this->env->getExtension("native_profiler");
        $__internal_6619512d4bb72c3c7347fb4496d4197ce01374a1ce82f347c12e70baa2c46177->enter($__internal_6619512d4bb72c3c7347fb4496d4197ce01374a1ce82f347c12e70baa2c46177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 10
        echo "
    ";
        // line 11
        if ($this->env->getExtension('security')->isGranted("ROLE_COMMUNICATION")) {
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
        
        $__internal_6619512d4bb72c3c7347fb4496d4197ce01374a1ce82f347c12e70baa2c46177->leave($__internal_6619512d4bb72c3c7347fb4496d4197ce01374a1ce82f347c12e70baa2c46177_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetCommunicationBundle:Accueil:BIM.html.twig";
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
/*     BIM*/
/* {% endblock %}*/
/* */
/* {% block messageAccueil %}BIM{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     {% if is_granted('ROLE_COMMUNICATION') %}*/
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
