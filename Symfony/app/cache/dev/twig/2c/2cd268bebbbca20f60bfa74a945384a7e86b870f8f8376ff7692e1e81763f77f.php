<?php

/* @NoxIntranetRessources/Procedures/procedures.html.twig */
class __TwigTemplate_2cbde1bf19bc599b6ee94ca7dafe82bb392a51668ddae68879e0c3b871b7d77e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@NoxIntranetRessources/Procedures/procedures.html.twig", 1);
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
        $__internal_203ef73f3ea31dbc1e36ae7b8140005a6a54ce81a77f6a50c96eb797fc31c082 = $this->env->getExtension("native_profiler");
        $__internal_203ef73f3ea31dbc1e36ae7b8140005a6a54ce81a77f6a50c96eb797fc31c082->enter($__internal_203ef73f3ea31dbc1e36ae7b8140005a6a54ce81a77f6a50c96eb797fc31c082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NoxIntranetRessources/Procedures/procedures.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_203ef73f3ea31dbc1e36ae7b8140005a6a54ce81a77f6a50c96eb797fc31c082->leave($__internal_203ef73f3ea31dbc1e36ae7b8140005a6a54ce81a77f6a50c96eb797fc31c082_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_3c79ddc38acacf830c8410c025d5aed120a6761bf84dc6a919709ecef717d628 = $this->env->getExtension("native_profiler");
        $__internal_3c79ddc38acacf830c8410c025d5aed120a6761bf84dc6a919709ecef717d628->enter($__internal_3c79ddc38acacf830c8410c025d5aed120a6761bf84dc6a919709ecef717d628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Procédures
";
        
        $__internal_3c79ddc38acacf830c8410c025d5aed120a6761bf84dc6a919709ecef717d628->leave($__internal_3c79ddc38acacf830c8410c025d5aed120a6761bf84dc6a919709ecef717d628_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_f8c22b1fd0c8a9f9854e941904f73e00d949f87cd2b4d478c5dcf15a58f02809 = $this->env->getExtension("native_profiler");
        $__internal_f8c22b1fd0c8a9f9854e941904f73e00d949f87cd2b4d478c5dcf15a58f02809->enter($__internal_f8c22b1fd0c8a9f9854e941904f73e00d949f87cd2b4d478c5dcf15a58f02809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Procédures";
        
        $__internal_f8c22b1fd0c8a9f9854e941904f73e00d949f87cd2b4d478c5dcf15a58f02809->leave($__internal_f8c22b1fd0c8a9f9854e941904f73e00d949f87cd2b4d478c5dcf15a58f02809_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_dbd579b72f53411a12aa4c0af17417e079667e887f9529207da60904aeb77f81 = $this->env->getExtension("native_profiler");
        $__internal_dbd579b72f53411a12aa4c0af17417e079667e887f9529207da60904aeb77f81->enter($__internal_dbd579b72f53411a12aa4c0af17417e079667e887f9529207da60904aeb77f81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 10
        echo "
    

";
        
        $__internal_dbd579b72f53411a12aa4c0af17417e079667e887f9529207da60904aeb77f81->leave($__internal_dbd579b72f53411a12aa4c0af17417e079667e887f9529207da60904aeb77f81_prof);

    }

    public function getTemplateName()
    {
        return "@NoxIntranetRessources/Procedures/procedures.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 10,  62 => 9,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %}*/
/*     Procédures*/
/* {% endblock %}*/
/* */
/* {% block messageAccueil %}Procédures{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     */
/* */
/* {% endblock %}*/
/* {# empty Twig template #}*/
/* */
/* */
