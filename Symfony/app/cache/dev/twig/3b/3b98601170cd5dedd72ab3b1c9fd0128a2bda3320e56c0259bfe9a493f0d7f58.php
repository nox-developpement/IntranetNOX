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
        $__internal_ebaa113fa307b2baf9d9220560e312741e1655528b187368028e3f5a49bf8b6f = $this->env->getExtension("native_profiler");
        $__internal_ebaa113fa307b2baf9d9220560e312741e1655528b187368028e3f5a49bf8b6f->enter($__internal_ebaa113fa307b2baf9d9220560e312741e1655528b187368028e3f5a49bf8b6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetRessourcesBundle:Procedures:procedures.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ebaa113fa307b2baf9d9220560e312741e1655528b187368028e3f5a49bf8b6f->leave($__internal_ebaa113fa307b2baf9d9220560e312741e1655528b187368028e3f5a49bf8b6f_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_8ed5e0fa2343c9a7b92aec3fbe50184ffe235e9b113bd314e14c127da212f191 = $this->env->getExtension("native_profiler");
        $__internal_8ed5e0fa2343c9a7b92aec3fbe50184ffe235e9b113bd314e14c127da212f191->enter($__internal_8ed5e0fa2343c9a7b92aec3fbe50184ffe235e9b113bd314e14c127da212f191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Procédures
";
        
        $__internal_8ed5e0fa2343c9a7b92aec3fbe50184ffe235e9b113bd314e14c127da212f191->leave($__internal_8ed5e0fa2343c9a7b92aec3fbe50184ffe235e9b113bd314e14c127da212f191_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_3dced2b5d4becdbd92cde84e3ae9ca5b11f74675fa9dc12decf397fce091926d = $this->env->getExtension("native_profiler");
        $__internal_3dced2b5d4becdbd92cde84e3ae9ca5b11f74675fa9dc12decf397fce091926d->enter($__internal_3dced2b5d4becdbd92cde84e3ae9ca5b11f74675fa9dc12decf397fce091926d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Procédures";
        
        $__internal_3dced2b5d4becdbd92cde84e3ae9ca5b11f74675fa9dc12decf397fce091926d->leave($__internal_3dced2b5d4becdbd92cde84e3ae9ca5b11f74675fa9dc12decf397fce091926d_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_4ee6f8eeb6550ff6d0817747816967e9da72b967aa2071be8b35edb99dc8942d = $this->env->getExtension("native_profiler");
        $__internal_4ee6f8eeb6550ff6d0817747816967e9da72b967aa2071be8b35edb99dc8942d->enter($__internal_4ee6f8eeb6550ff6d0817747816967e9da72b967aa2071be8b35edb99dc8942d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 10
        echo "
    

";
        
        $__internal_4ee6f8eeb6550ff6d0817747816967e9da72b967aa2071be8b35edb99dc8942d->leave($__internal_4ee6f8eeb6550ff6d0817747816967e9da72b967aa2071be8b35edb99dc8942d_prof);

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
