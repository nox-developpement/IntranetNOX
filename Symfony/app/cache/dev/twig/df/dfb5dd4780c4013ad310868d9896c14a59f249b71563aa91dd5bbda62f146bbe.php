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
        $__internal_eadd0e46d496afcc04d3d67a5b2d0896af40d44ee360f67e72271a52ffc83f73 = $this->env->getExtension("native_profiler");
        $__internal_eadd0e46d496afcc04d3d67a5b2d0896af40d44ee360f67e72271a52ffc83f73->enter($__internal_eadd0e46d496afcc04d3d67a5b2d0896af40d44ee360f67e72271a52ffc83f73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetRessourcesBundle:Archives:archives.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eadd0e46d496afcc04d3d67a5b2d0896af40d44ee360f67e72271a52ffc83f73->leave($__internal_eadd0e46d496afcc04d3d67a5b2d0896af40d44ee360f67e72271a52ffc83f73_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_c7cff58eca457f1b6ce5ab76d8701710f2b8446ebdb95a4601ffc3d5d9e2e3d2 = $this->env->getExtension("native_profiler");
        $__internal_c7cff58eca457f1b6ce5ab76d8701710f2b8446ebdb95a4601ffc3d5d9e2e3d2->enter($__internal_c7cff58eca457f1b6ce5ab76d8701710f2b8446ebdb95a4601ffc3d5d9e2e3d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Archives
";
        
        $__internal_c7cff58eca457f1b6ce5ab76d8701710f2b8446ebdb95a4601ffc3d5d9e2e3d2->leave($__internal_c7cff58eca457f1b6ce5ab76d8701710f2b8446ebdb95a4601ffc3d5d9e2e3d2_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_beb88cb905d88c21c0a94789fdcb23f1d8473f5c8628c2032ae2c26cdf36cdc4 = $this->env->getExtension("native_profiler");
        $__internal_beb88cb905d88c21c0a94789fdcb23f1d8473f5c8628c2032ae2c26cdf36cdc4->enter($__internal_beb88cb905d88c21c0a94789fdcb23f1d8473f5c8628c2032ae2c26cdf36cdc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Archives";
        
        $__internal_beb88cb905d88c21c0a94789fdcb23f1d8473f5c8628c2032ae2c26cdf36cdc4->leave($__internal_beb88cb905d88c21c0a94789fdcb23f1d8473f5c8628c2032ae2c26cdf36cdc4_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_3608c5f3f119d9aeffc0895cf0c9869320a195ebe41be921a5dca57e44958a48 = $this->env->getExtension("native_profiler");
        $__internal_3608c5f3f119d9aeffc0895cf0c9869320a195ebe41be921a5dca57e44958a48->enter($__internal_3608c5f3f119d9aeffc0895cf0c9869320a195ebe41be921a5dca57e44958a48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        
        $__internal_3608c5f3f119d9aeffc0895cf0c9869320a195ebe41be921a5dca57e44958a48->leave($__internal_3608c5f3f119d9aeffc0895cf0c9869320a195ebe41be921a5dca57e44958a48_prof);

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
