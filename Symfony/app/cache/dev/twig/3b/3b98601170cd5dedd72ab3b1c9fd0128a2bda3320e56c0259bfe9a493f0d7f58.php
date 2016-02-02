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
        $__internal_7e1ce090afda6303255fd453809c20c0b6f2ddb3aefce64adf92ad6ee3041aa2 = $this->env->getExtension("native_profiler");
        $__internal_7e1ce090afda6303255fd453809c20c0b6f2ddb3aefce64adf92ad6ee3041aa2->enter($__internal_7e1ce090afda6303255fd453809c20c0b6f2ddb3aefce64adf92ad6ee3041aa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetRessourcesBundle:Procedures:procedures.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e1ce090afda6303255fd453809c20c0b6f2ddb3aefce64adf92ad6ee3041aa2->leave($__internal_7e1ce090afda6303255fd453809c20c0b6f2ddb3aefce64adf92ad6ee3041aa2_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_05c27daf6ef90f9af1277ebd10d7257cf53666e0a73e551396a4cac09e34ba85 = $this->env->getExtension("native_profiler");
        $__internal_05c27daf6ef90f9af1277ebd10d7257cf53666e0a73e551396a4cac09e34ba85->enter($__internal_05c27daf6ef90f9af1277ebd10d7257cf53666e0a73e551396a4cac09e34ba85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Procédures
";
        
        $__internal_05c27daf6ef90f9af1277ebd10d7257cf53666e0a73e551396a4cac09e34ba85->leave($__internal_05c27daf6ef90f9af1277ebd10d7257cf53666e0a73e551396a4cac09e34ba85_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_bb2910da4ea654cb204e000765bc34c2d9d9252bd32e0743ffba0c8dde91b0d5 = $this->env->getExtension("native_profiler");
        $__internal_bb2910da4ea654cb204e000765bc34c2d9d9252bd32e0743ffba0c8dde91b0d5->enter($__internal_bb2910da4ea654cb204e000765bc34c2d9d9252bd32e0743ffba0c8dde91b0d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Procédures";
        
        $__internal_bb2910da4ea654cb204e000765bc34c2d9d9252bd32e0743ffba0c8dde91b0d5->leave($__internal_bb2910da4ea654cb204e000765bc34c2d9d9252bd32e0743ffba0c8dde91b0d5_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_b58067e4f77676262321e118ab4a0e1674d4bb8e84960a8a6f9ab7c4875bd77d = $this->env->getExtension("native_profiler");
        $__internal_b58067e4f77676262321e118ab4a0e1674d4bb8e84960a8a6f9ab7c4875bd77d->enter($__internal_b58067e4f77676262321e118ab4a0e1674d4bb8e84960a8a6f9ab7c4875bd77d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 10
        echo "
    

";
        
        $__internal_b58067e4f77676262321e118ab4a0e1674d4bb8e84960a8a6f9ab7c4875bd77d->leave($__internal_b58067e4f77676262321e118ab4a0e1674d4bb8e84960a8a6f9ab7c4875bd77d_prof);

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
