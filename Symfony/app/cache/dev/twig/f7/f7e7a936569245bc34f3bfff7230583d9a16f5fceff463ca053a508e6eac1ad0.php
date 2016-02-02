<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_19cbc297835a0195ac84bd172cbe99f6c282b3a2af72f7451b50c1274c0e3771 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f9ce32aee9ec0fff408832ec1bdc3458188ff69b4a0e7b4b72bd32ae02746f7d = $this->env->getExtension("native_profiler");
        $__internal_f9ce32aee9ec0fff408832ec1bdc3458188ff69b4a0e7b4b72bd32ae02746f7d->enter($__internal_f9ce32aee9ec0fff408832ec1bdc3458188ff69b4a0e7b4b72bd32ae02746f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9ce32aee9ec0fff408832ec1bdc3458188ff69b4a0e7b4b72bd32ae02746f7d->leave($__internal_f9ce32aee9ec0fff408832ec1bdc3458188ff69b4a0e7b4b72bd32ae02746f7d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d24e64b923ecd2dc9a7579c45af40748261c85e9364e224662774b756bf1cd32 = $this->env->getExtension("native_profiler");
        $__internal_d24e64b923ecd2dc9a7579c45af40748261c85e9364e224662774b756bf1cd32->enter($__internal_d24e64b923ecd2dc9a7579c45af40748261c85e9364e224662774b756bf1cd32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_d24e64b923ecd2dc9a7579c45af40748261c85e9364e224662774b756bf1cd32->leave($__internal_d24e64b923ecd2dc9a7579c45af40748261c85e9364e224662774b756bf1cd32_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c964b6e799100afb9e9d3c37cbe38e99c14f48ab9e03b31f97fd43404d626480 = $this->env->getExtension("native_profiler");
        $__internal_c964b6e799100afb9e9d3c37cbe38e99c14f48ab9e03b31f97fd43404d626480->enter($__internal_c964b6e799100afb9e9d3c37cbe38e99c14f48ab9e03b31f97fd43404d626480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_c964b6e799100afb9e9d3c37cbe38e99c14f48ab9e03b31f97fd43404d626480->leave($__internal_c964b6e799100afb9e9d3c37cbe38e99c14f48ab9e03b31f97fd43404d626480_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_da07312e8d9c3778701ae137f2db1013c63b7280611cf3bd3f3651661268616e = $this->env->getExtension("native_profiler");
        $__internal_da07312e8d9c3778701ae137f2db1013c63b7280611cf3bd3f3651661268616e->enter($__internal_da07312e8d9c3778701ae137f2db1013c63b7280611cf3bd3f3651661268616e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_da07312e8d9c3778701ae137f2db1013c63b7280611cf3bd3f3651661268616e->leave($__internal_da07312e8d9c3778701ae137f2db1013c63b7280611cf3bd3f3651661268616e_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_184a6523d8a8985877daf5ae00a84a8bad08cb29f0296f6a84c9e1e13c927dfb = $this->env->getExtension("native_profiler");
        $__internal_184a6523d8a8985877daf5ae00a84a8bad08cb29f0296f6a84c9e1e13c927dfb->enter($__internal_184a6523d8a8985877daf5ae00a84a8bad08cb29f0296f6a84c9e1e13c927dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_184a6523d8a8985877daf5ae00a84a8bad08cb29f0296f6a84c9e1e13c927dfb->leave($__internal_184a6523d8a8985877daf5ae00a84a8bad08cb29f0296f6a84c9e1e13c927dfb_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "TwigBundle::layout.html.twig" %}*/
/* */
/* {% block head %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block title 'Web Configurator Bundle' %}*/
/* */
/* {% block body %}*/
/*     <div class="block">*/
/*         {% block content %}{% endblock %}*/
/*     </div>*/
/*     <div class="version">Symfony Standard Edition v.{{ version }}</div>*/
/* {% endblock %}*/
/* */
