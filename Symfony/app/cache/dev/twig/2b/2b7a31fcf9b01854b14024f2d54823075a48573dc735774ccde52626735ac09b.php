<?php

/* NoxIntranetSupportSIBundle:Support:licenses.html.twig */
class __TwigTemplate_eb26f71f7a5f3db3af6a548bfbb0d6067554e18288687f9ba3b3b8fbdb5bfc83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetSupportSIBundle:Support:licenses.html.twig", 1);
        $this->blocks = array(
            'titrePage' => array($this, 'block_titrePage'),
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3955419b917b4181df821d35327e5f2d89e5f917fb5906b56ade3f296a61d397 = $this->env->getExtension("native_profiler");
        $__internal_3955419b917b4181df821d35327e5f2d89e5f917fb5906b56ade3f296a61d397->enter($__internal_3955419b917b4181df821d35327e5f2d89e5f917fb5906b56ade3f296a61d397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetSupportSIBundle:Support:licenses.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3955419b917b4181df821d35327e5f2d89e5f917fb5906b56ade3f296a61d397->leave($__internal_3955419b917b4181df821d35327e5f2d89e5f917fb5906b56ade3f296a61d397_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_9e500b3e27444d882bae684f0dcd9e464a9b7c8ae8d56bc9d922c772ffeb593d = $this->env->getExtension("native_profiler");
        $__internal_9e500b3e27444d882bae684f0dcd9e464a9b7c8ae8d56bc9d922c772ffeb593d->enter($__internal_9e500b3e27444d882bae684f0dcd9e464a9b7c8ae8d56bc9d922c772ffeb593d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Licenses ";
        
        $__internal_9e500b3e27444d882bae684f0dcd9e464a9b7c8ae8d56bc9d922c772ffeb593d->leave($__internal_9e500b3e27444d882bae684f0dcd9e464a9b7c8ae8d56bc9d922c772ffeb593d_prof);

    }

    // line 5
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_cd3e75af8d5957adab1d34305a74eb9919784a68e98982abe6edca68cd35f34b = $this->env->getExtension("native_profiler");
        $__internal_cd3e75af8d5957adab1d34305a74eb9919784a68e98982abe6edca68cd35f34b->enter($__internal_cd3e75af8d5957adab1d34305a74eb9919784a68e98982abe6edca68cd35f34b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 6
        echo "
    <div class=\"messageAcceuil\"> 
        <h2> Licenses </h2>
    </div>

";
        
        $__internal_cd3e75af8d5957adab1d34305a74eb9919784a68e98982abe6edca68cd35f34b->leave($__internal_cd3e75af8d5957adab1d34305a74eb9919784a68e98982abe6edca68cd35f34b_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetSupportSIBundle:Support:licenses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %} Licenses {% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     <div class="messageAcceuil"> */
/*         <h2> Licenses </h2>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
