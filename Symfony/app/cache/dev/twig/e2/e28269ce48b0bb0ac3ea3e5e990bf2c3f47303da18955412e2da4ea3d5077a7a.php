<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_bea8a5e4ed07835534a3f3600409818e12897fe29c6a4c28b085ade639eed57d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3e9cd764f3129f1e09f216132f5a8a3ba19c61d946c307c4ec39df30c7181145 = $this->env->getExtension("native_profiler");
        $__internal_3e9cd764f3129f1e09f216132f5a8a3ba19c61d946c307c4ec39df30c7181145->enter($__internal_3e9cd764f3129f1e09f216132f5a8a3ba19c61d946c307c4ec39df30c7181145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_3e9cd764f3129f1e09f216132f5a8a3ba19c61d946c307c4ec39df30c7181145->leave($__internal_3e9cd764f3129f1e09f216132f5a8a3ba19c61d946c307c4ec39df30c7181145_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_194fb72d80006d43cbb687b23bdd469b7828dff011bbccf6cda53123c089afc5 = $this->env->getExtension("native_profiler");
        $__internal_194fb72d80006d43cbb687b23bdd469b7828dff011bbccf6cda53123c089afc5->enter($__internal_194fb72d80006d43cbb687b23bdd469b7828dff011bbccf6cda53123c089afc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_194fb72d80006d43cbb687b23bdd469b7828dff011bbccf6cda53123c089afc5->leave($__internal_194fb72d80006d43cbb687b23bdd469b7828dff011bbccf6cda53123c089afc5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
