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
        $__internal_7338d8e89d22a4a65111aa8fc3214f973fe04154e21909eb7207c89fff319262 = $this->env->getExtension("native_profiler");
        $__internal_7338d8e89d22a4a65111aa8fc3214f973fe04154e21909eb7207c89fff319262->enter($__internal_7338d8e89d22a4a65111aa8fc3214f973fe04154e21909eb7207c89fff319262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetSupportSIBundle:Support:licenses.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7338d8e89d22a4a65111aa8fc3214f973fe04154e21909eb7207c89fff319262->leave($__internal_7338d8e89d22a4a65111aa8fc3214f973fe04154e21909eb7207c89fff319262_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_8a189b82a224694d410bf0215799109b2fc8200e34d5a57eb05d8925accb824b = $this->env->getExtension("native_profiler");
        $__internal_8a189b82a224694d410bf0215799109b2fc8200e34d5a57eb05d8925accb824b->enter($__internal_8a189b82a224694d410bf0215799109b2fc8200e34d5a57eb05d8925accb824b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Licenses ";
        
        $__internal_8a189b82a224694d410bf0215799109b2fc8200e34d5a57eb05d8925accb824b->leave($__internal_8a189b82a224694d410bf0215799109b2fc8200e34d5a57eb05d8925accb824b_prof);

    }

    // line 5
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_9c8fbba570fb909fc7e693c4acbb3fe4f85d0709830e63babe887b7c40319d54 = $this->env->getExtension("native_profiler");
        $__internal_9c8fbba570fb909fc7e693c4acbb3fe4f85d0709830e63babe887b7c40319d54->enter($__internal_9c8fbba570fb909fc7e693c4acbb3fe4f85d0709830e63babe887b7c40319d54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 6
        echo "
    <div class=\"messageAcceuil\"> 
        <h2> Licenses </h2>
    </div>

";
        
        $__internal_9c8fbba570fb909fc7e693c4acbb3fe4f85d0709830e63babe887b7c40319d54->leave($__internal_9c8fbba570fb909fc7e693c4acbb3fe4f85d0709830e63babe887b7c40319d54_prof);

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
