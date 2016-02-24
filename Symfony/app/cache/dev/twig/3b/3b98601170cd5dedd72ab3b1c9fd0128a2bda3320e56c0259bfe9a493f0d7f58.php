<?php

/* NoxIntranetRessourcesBundle:Procedures:procedures.html.twig */
class __TwigTemplate_e06e63590360e26aec10b07930bdf979b1384b24cb709b2bd1df6e6b62aaf559 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetRessourcesBundle:Procedures:procedures.html.twig", 1);
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
        $__internal_757b1b3582bfb35e133ff28c25eb9158e8a3de2cdf47f3cc8f68e355043815e9 = $this->env->getExtension("native_profiler");
        $__internal_757b1b3582bfb35e133ff28c25eb9158e8a3de2cdf47f3cc8f68e355043815e9->enter($__internal_757b1b3582bfb35e133ff28c25eb9158e8a3de2cdf47f3cc8f68e355043815e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetRessourcesBundle:Procedures:procedures.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_757b1b3582bfb35e133ff28c25eb9158e8a3de2cdf47f3cc8f68e355043815e9->leave($__internal_757b1b3582bfb35e133ff28c25eb9158e8a3de2cdf47f3cc8f68e355043815e9_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_57f8dfdc04b7237af1dc0424a10c0981a4eac811823bac875258216ee46a4b29 = $this->env->getExtension("native_profiler");
        $__internal_57f8dfdc04b7237af1dc0424a10c0981a4eac811823bac875258216ee46a4b29->enter($__internal_57f8dfdc04b7237af1dc0424a10c0981a4eac811823bac875258216ee46a4b29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Procédures
";
        
        $__internal_57f8dfdc04b7237af1dc0424a10c0981a4eac811823bac875258216ee46a4b29->leave($__internal_57f8dfdc04b7237af1dc0424a10c0981a4eac811823bac875258216ee46a4b29_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_fb6e4f8a68961f80765534ab00ecf448c014081d84f85841403cf51a989f8c1a = $this->env->getExtension("native_profiler");
        $__internal_fb6e4f8a68961f80765534ab00ecf448c014081d84f85841403cf51a989f8c1a->enter($__internal_fb6e4f8a68961f80765534ab00ecf448c014081d84f85841403cf51a989f8c1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Procédures";
        
        $__internal_fb6e4f8a68961f80765534ab00ecf448c014081d84f85841403cf51a989f8c1a->leave($__internal_fb6e4f8a68961f80765534ab00ecf448c014081d84f85841403cf51a989f8c1a_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_a9a62ab91de3718fbae4e219e47c510a19cf3bbe529675cc5782dbbbb029e900 = $this->env->getExtension("native_profiler");
        $__internal_a9a62ab91de3718fbae4e219e47c510a19cf3bbe529675cc5782dbbbb029e900->enter($__internal_a9a62ab91de3718fbae4e219e47c510a19cf3bbe529675cc5782dbbbb029e900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 10
        echo "
    

";
        
        $__internal_a9a62ab91de3718fbae4e219e47c510a19cf3bbe529675cc5782dbbbb029e900->leave($__internal_a9a62ab91de3718fbae4e219e47c510a19cf3bbe529675cc5782dbbbb029e900_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetRessourcesBundle:Procedures:procedures.html.twig";
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
