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
        $__internal_593aecdcb142b300d1579bcef9dca60d4eb225b3e13b32e43aba687da5583d9a = $this->env->getExtension("native_profiler");
        $__internal_593aecdcb142b300d1579bcef9dca60d4eb225b3e13b32e43aba687da5583d9a->enter($__internal_593aecdcb142b300d1579bcef9dca60d4eb225b3e13b32e43aba687da5583d9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NoxIntranetRessources/Archives/archives.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_593aecdcb142b300d1579bcef9dca60d4eb225b3e13b32e43aba687da5583d9a->leave($__internal_593aecdcb142b300d1579bcef9dca60d4eb225b3e13b32e43aba687da5583d9a_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_f4da8dea63d64c77a25175bc17eba6588f095de29f1b880979db0a8f9058800b = $this->env->getExtension("native_profiler");
        $__internal_f4da8dea63d64c77a25175bc17eba6588f095de29f1b880979db0a8f9058800b->enter($__internal_f4da8dea63d64c77a25175bc17eba6588f095de29f1b880979db0a8f9058800b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Archives
";
        
        $__internal_f4da8dea63d64c77a25175bc17eba6588f095de29f1b880979db0a8f9058800b->leave($__internal_f4da8dea63d64c77a25175bc17eba6588f095de29f1b880979db0a8f9058800b_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_a5561ac45ffc8cfe90e858b32e7d5dd53d953c24955976eda95368875ba23c3b = $this->env->getExtension("native_profiler");
        $__internal_a5561ac45ffc8cfe90e858b32e7d5dd53d953c24955976eda95368875ba23c3b->enter($__internal_a5561ac45ffc8cfe90e858b32e7d5dd53d953c24955976eda95368875ba23c3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Archives";
        
        $__internal_a5561ac45ffc8cfe90e858b32e7d5dd53d953c24955976eda95368875ba23c3b->leave($__internal_a5561ac45ffc8cfe90e858b32e7d5dd53d953c24955976eda95368875ba23c3b_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_c573f09b00a8d72689902c625708db3d4209a3df7e29e5c6aa36c1503512c5ca = $this->env->getExtension("native_profiler");
        $__internal_c573f09b00a8d72689902c625708db3d4209a3df7e29e5c6aa36c1503512c5ca->enter($__internal_c573f09b00a8d72689902c625708db3d4209a3df7e29e5c6aa36c1503512c5ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        
        $__internal_c573f09b00a8d72689902c625708db3d4209a3df7e29e5c6aa36c1503512c5ca->leave($__internal_c573f09b00a8d72689902c625708db3d4209a3df7e29e5c6aa36c1503512c5ca_prof);

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
