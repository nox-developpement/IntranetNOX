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
        $__internal_aa475c4c625654a31b4a35cc4ae2571ff39987af0288e838ebc499576163c882 = $this->env->getExtension("native_profiler");
        $__internal_aa475c4c625654a31b4a35cc4ae2571ff39987af0288e838ebc499576163c882->enter($__internal_aa475c4c625654a31b4a35cc4ae2571ff39987af0288e838ebc499576163c882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetRessourcesBundle:Archives:archives.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa475c4c625654a31b4a35cc4ae2571ff39987af0288e838ebc499576163c882->leave($__internal_aa475c4c625654a31b4a35cc4ae2571ff39987af0288e838ebc499576163c882_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_53768506b708a61df18dd9efbb1da9727f311b95a5a9a257609eeb43c5680413 = $this->env->getExtension("native_profiler");
        $__internal_53768506b708a61df18dd9efbb1da9727f311b95a5a9a257609eeb43c5680413->enter($__internal_53768506b708a61df18dd9efbb1da9727f311b95a5a9a257609eeb43c5680413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Archives
";
        
        $__internal_53768506b708a61df18dd9efbb1da9727f311b95a5a9a257609eeb43c5680413->leave($__internal_53768506b708a61df18dd9efbb1da9727f311b95a5a9a257609eeb43c5680413_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_a8a30a13bd90c6e2fe8e28463c41c5e939c2eccada245c9d5348f0dafc99abba = $this->env->getExtension("native_profiler");
        $__internal_a8a30a13bd90c6e2fe8e28463c41c5e939c2eccada245c9d5348f0dafc99abba->enter($__internal_a8a30a13bd90c6e2fe8e28463c41c5e939c2eccada245c9d5348f0dafc99abba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Archives";
        
        $__internal_a8a30a13bd90c6e2fe8e28463c41c5e939c2eccada245c9d5348f0dafc99abba->leave($__internal_a8a30a13bd90c6e2fe8e28463c41c5e939c2eccada245c9d5348f0dafc99abba_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_f6eeccb037b8bd5f8a05324832c62d3682e1cec16fb72106e9ab22c884d56bc1 = $this->env->getExtension("native_profiler");
        $__internal_f6eeccb037b8bd5f8a05324832c62d3682e1cec16fb72106e9ab22c884d56bc1->enter($__internal_f6eeccb037b8bd5f8a05324832c62d3682e1cec16fb72106e9ab22c884d56bc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        
        $__internal_f6eeccb037b8bd5f8a05324832c62d3682e1cec16fb72106e9ab22c884d56bc1->leave($__internal_f6eeccb037b8bd5f8a05324832c62d3682e1cec16fb72106e9ab22c884d56bc1_prof);

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
