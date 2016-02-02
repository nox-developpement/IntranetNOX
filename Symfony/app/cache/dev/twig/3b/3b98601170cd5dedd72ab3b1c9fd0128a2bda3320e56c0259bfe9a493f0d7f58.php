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
        $__internal_fe59dfe1f71b5ee3a34e23a942d44d35c09e90e7053a4d921dceecd7976a345e = $this->env->getExtension("native_profiler");
        $__internal_fe59dfe1f71b5ee3a34e23a942d44d35c09e90e7053a4d921dceecd7976a345e->enter($__internal_fe59dfe1f71b5ee3a34e23a942d44d35c09e90e7053a4d921dceecd7976a345e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetRessourcesBundle:Procedures:procedures.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe59dfe1f71b5ee3a34e23a942d44d35c09e90e7053a4d921dceecd7976a345e->leave($__internal_fe59dfe1f71b5ee3a34e23a942d44d35c09e90e7053a4d921dceecd7976a345e_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_00192c1e656585359ce7d2a90af207ec283e3c177caf2a521af7fa975aab0068 = $this->env->getExtension("native_profiler");
        $__internal_00192c1e656585359ce7d2a90af207ec283e3c177caf2a521af7fa975aab0068->enter($__internal_00192c1e656585359ce7d2a90af207ec283e3c177caf2a521af7fa975aab0068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Procédures
";
        
        $__internal_00192c1e656585359ce7d2a90af207ec283e3c177caf2a521af7fa975aab0068->leave($__internal_00192c1e656585359ce7d2a90af207ec283e3c177caf2a521af7fa975aab0068_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_35621ed956aff974eee7f84542650e0dd2e1db3ad01a2c82a4af73f5d066d5d2 = $this->env->getExtension("native_profiler");
        $__internal_35621ed956aff974eee7f84542650e0dd2e1db3ad01a2c82a4af73f5d066d5d2->enter($__internal_35621ed956aff974eee7f84542650e0dd2e1db3ad01a2c82a4af73f5d066d5d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Procédures";
        
        $__internal_35621ed956aff974eee7f84542650e0dd2e1db3ad01a2c82a4af73f5d066d5d2->leave($__internal_35621ed956aff974eee7f84542650e0dd2e1db3ad01a2c82a4af73f5d066d5d2_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_d46235ddad0b50a6d385fec87cc2ff5b31b4810c0a41f8a134654b2e189a5def = $this->env->getExtension("native_profiler");
        $__internal_d46235ddad0b50a6d385fec87cc2ff5b31b4810c0a41f8a134654b2e189a5def->enter($__internal_d46235ddad0b50a6d385fec87cc2ff5b31b4810c0a41f8a134654b2e189a5def_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 10
        echo "
    

";
        
        $__internal_d46235ddad0b50a6d385fec87cc2ff5b31b4810c0a41f8a134654b2e189a5def->leave($__internal_d46235ddad0b50a6d385fec87cc2ff5b31b4810c0a41f8a134654b2e189a5def_prof);

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
