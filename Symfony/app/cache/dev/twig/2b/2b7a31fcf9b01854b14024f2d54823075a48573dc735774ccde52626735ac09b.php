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
        $__internal_62764c9bc3f94ba007f7be7371020019c8f8b27592092a07429e07623310c439 = $this->env->getExtension("native_profiler");
        $__internal_62764c9bc3f94ba007f7be7371020019c8f8b27592092a07429e07623310c439->enter($__internal_62764c9bc3f94ba007f7be7371020019c8f8b27592092a07429e07623310c439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetSupportSIBundle:Support:licenses.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62764c9bc3f94ba007f7be7371020019c8f8b27592092a07429e07623310c439->leave($__internal_62764c9bc3f94ba007f7be7371020019c8f8b27592092a07429e07623310c439_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_392564c770bf4ecece3c65c6adf75bf6a1b3b569b7d418eaad0d4587cf5ebd16 = $this->env->getExtension("native_profiler");
        $__internal_392564c770bf4ecece3c65c6adf75bf6a1b3b569b7d418eaad0d4587cf5ebd16->enter($__internal_392564c770bf4ecece3c65c6adf75bf6a1b3b569b7d418eaad0d4587cf5ebd16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Licenses ";
        
        $__internal_392564c770bf4ecece3c65c6adf75bf6a1b3b569b7d418eaad0d4587cf5ebd16->leave($__internal_392564c770bf4ecece3c65c6adf75bf6a1b3b569b7d418eaad0d4587cf5ebd16_prof);

    }

    // line 5
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_8121cade7f0bff33037ca7211ebd3b8ddf7d0c3ef20e892a40b76e3591a027e3 = $this->env->getExtension("native_profiler");
        $__internal_8121cade7f0bff33037ca7211ebd3b8ddf7d0c3ef20e892a40b76e3591a027e3->enter($__internal_8121cade7f0bff33037ca7211ebd3b8ddf7d0c3ef20e892a40b76e3591a027e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 6
        echo "
    <div class=\"messageAcceuil\"> 
        <h2> Licenses </h2>
    </div>

";
        
        $__internal_8121cade7f0bff33037ca7211ebd3b8ddf7d0c3ef20e892a40b76e3591a027e3->leave($__internal_8121cade7f0bff33037ca7211ebd3b8ddf7d0c3ef20e892a40b76e3591a027e3_prof);

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
