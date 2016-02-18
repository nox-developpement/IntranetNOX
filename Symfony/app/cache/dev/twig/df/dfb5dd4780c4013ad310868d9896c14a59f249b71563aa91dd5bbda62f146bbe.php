<?php

/* NoxIntranetRessourcesBundle:Archives:archives.html.twig */
class __TwigTemplate_7e346ee3378d60bba8c896ee2a307fe88dd7011390e556ac773381936ae80666 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetRessourcesBundle:Archives:archives.html.twig", 1);
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
        $__internal_fda4646a366b0b0c5d7e44de88c8835f5a64b2d03623e9066fdb8247261116f6 = $this->env->getExtension("native_profiler");
        $__internal_fda4646a366b0b0c5d7e44de88c8835f5a64b2d03623e9066fdb8247261116f6->enter($__internal_fda4646a366b0b0c5d7e44de88c8835f5a64b2d03623e9066fdb8247261116f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetRessourcesBundle:Archives:archives.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fda4646a366b0b0c5d7e44de88c8835f5a64b2d03623e9066fdb8247261116f6->leave($__internal_fda4646a366b0b0c5d7e44de88c8835f5a64b2d03623e9066fdb8247261116f6_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_7d83b6808bdafed845ccc1c0911010ff3fd94df0d603cf6cb56acbc46e77b029 = $this->env->getExtension("native_profiler");
        $__internal_7d83b6808bdafed845ccc1c0911010ff3fd94df0d603cf6cb56acbc46e77b029->enter($__internal_7d83b6808bdafed845ccc1c0911010ff3fd94df0d603cf6cb56acbc46e77b029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Archives
";
        
        $__internal_7d83b6808bdafed845ccc1c0911010ff3fd94df0d603cf6cb56acbc46e77b029->leave($__internal_7d83b6808bdafed845ccc1c0911010ff3fd94df0d603cf6cb56acbc46e77b029_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_243a940edf5a3c11377340b6841be612e95941adfbca2f16b33be5354b65bebb = $this->env->getExtension("native_profiler");
        $__internal_243a940edf5a3c11377340b6841be612e95941adfbca2f16b33be5354b65bebb->enter($__internal_243a940edf5a3c11377340b6841be612e95941adfbca2f16b33be5354b65bebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Archives";
        
        $__internal_243a940edf5a3c11377340b6841be612e95941adfbca2f16b33be5354b65bebb->leave($__internal_243a940edf5a3c11377340b6841be612e95941adfbca2f16b33be5354b65bebb_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_6fd98fbb9a2efcb48f4ba415a006ee10b1a3ab8109db77ed3b5ace7003da1c3b = $this->env->getExtension("native_profiler");
        $__internal_6fd98fbb9a2efcb48f4ba415a006ee10b1a3ab8109db77ed3b5ace7003da1c3b->enter($__internal_6fd98fbb9a2efcb48f4ba415a006ee10b1a3ab8109db77ed3b5ace7003da1c3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        
        $__internal_6fd98fbb9a2efcb48f4ba415a006ee10b1a3ab8109db77ed3b5ace7003da1c3b->leave($__internal_6fd98fbb9a2efcb48f4ba415a006ee10b1a3ab8109db77ed3b5ace7003da1c3b_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetRessourcesBundle:Archives:archives.html.twig";
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
