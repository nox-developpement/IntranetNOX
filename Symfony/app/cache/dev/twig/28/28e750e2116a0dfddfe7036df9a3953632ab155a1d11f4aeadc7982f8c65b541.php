<?php

/* NoxIntranetMenuBundle:Default:index.html.twig */
class __TwigTemplate_f18222ebcf661b9b546038fa693a70d881dc195ce4dfc541fea73949d2e9f819 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_af1eaf8a295c7138f9029fde93174c430624e95876fe80a2f6f2943aa5b4ea67 = $this->env->getExtension("native_profiler");
        $__internal_af1eaf8a295c7138f9029fde93174c430624e95876fe80a2f6f2943aa5b4ea67->enter($__internal_af1eaf8a295c7138f9029fde93174c430624e95876fe80a2f6f2943aa5b4ea67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetMenuBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_af1eaf8a295c7138f9029fde93174c430624e95876fe80a2f6f2943aa5b4ea67->leave($__internal_af1eaf8a295c7138f9029fde93174c430624e95876fe80a2f6f2943aa5b4ea67_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetMenuBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* Hello {{ name }}!*/
/* */
