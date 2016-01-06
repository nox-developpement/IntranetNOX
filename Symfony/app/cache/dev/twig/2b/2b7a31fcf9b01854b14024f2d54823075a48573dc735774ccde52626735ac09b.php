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
        $__internal_2408f7953b647a15df7e1f77b141d633e3cdd6904ba441c1d1b2d76bae27e2c5 = $this->env->getExtension("native_profiler");
        $__internal_2408f7953b647a15df7e1f77b141d633e3cdd6904ba441c1d1b2d76bae27e2c5->enter($__internal_2408f7953b647a15df7e1f77b141d633e3cdd6904ba441c1d1b2d76bae27e2c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetSupportSIBundle:Support:licenses.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2408f7953b647a15df7e1f77b141d633e3cdd6904ba441c1d1b2d76bae27e2c5->leave($__internal_2408f7953b647a15df7e1f77b141d633e3cdd6904ba441c1d1b2d76bae27e2c5_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_d382a2d17bf2b71c17a7c80df5fb9fe39b90ef1f5ed8d2058994a5a43098def8 = $this->env->getExtension("native_profiler");
        $__internal_d382a2d17bf2b71c17a7c80df5fb9fe39b90ef1f5ed8d2058994a5a43098def8->enter($__internal_d382a2d17bf2b71c17a7c80df5fb9fe39b90ef1f5ed8d2058994a5a43098def8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Licenses ";
        
        $__internal_d382a2d17bf2b71c17a7c80df5fb9fe39b90ef1f5ed8d2058994a5a43098def8->leave($__internal_d382a2d17bf2b71c17a7c80df5fb9fe39b90ef1f5ed8d2058994a5a43098def8_prof);

    }

    // line 5
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_23fcc03acd21255b0a77785a1e44515e249718309678ec6a4ee52267acaa5d38 = $this->env->getExtension("native_profiler");
        $__internal_23fcc03acd21255b0a77785a1e44515e249718309678ec6a4ee52267acaa5d38->enter($__internal_23fcc03acd21255b0a77785a1e44515e249718309678ec6a4ee52267acaa5d38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 6
        echo "
    <div class=\"messageAcceuil\"> 
        <h2> Licenses </h2>
    </div>

";
        
        $__internal_23fcc03acd21255b0a77785a1e44515e249718309678ec6a4ee52267acaa5d38->leave($__internal_23fcc03acd21255b0a77785a1e44515e249718309678ec6a4ee52267acaa5d38_prof);

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
