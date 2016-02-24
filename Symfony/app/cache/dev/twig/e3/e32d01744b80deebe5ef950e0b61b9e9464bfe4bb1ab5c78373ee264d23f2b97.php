<?php

/* FMElfinderBundle:Elfinder/helper:assets_js.html.twig */
class __TwigTemplate_7497a54bda44d910aa7e2368e3441987e60a276335cd9dbc070e766f073feac7 extends Twig_Template
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
        $__internal_b677a1cc41047fafa4f98a1bb5da815d8cb1cdf3247940b83abce7d231afeaad = $this->env->getExtension("native_profiler");
        $__internal_b677a1cc41047fafa4f98a1bb5da815d8cb1cdf3247940b83abce7d231afeaad->enter($__internal_b677a1cc41047fafa4f98a1bb5da815d8cb1cdf3247940b83abce7d231afeaad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FMElfinderBundle:Elfinder/helper:assets_js.html.twig"));

        // line 1
        echo "<script src=\"";
        echo twig_escape_filter($this->env, (isset($context["prefix"]) ? $context["prefix"] : $this->getContext($context, "prefix")), "html", null, true);
        echo "/jquery/jquery.js\"></script>
<script src=\"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["prefix"]) ? $context["prefix"] : $this->getContext($context, "prefix")), "html", null, true);
        echo "/jquery-ui/jquery-ui.min.js\"></script>
<script src=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["prefix"]) ? $context["prefix"] : $this->getContext($context, "prefix")), "html", null, true);
        echo "/elfinder/dist/js/elfinder.min.js\"></script>
<script src=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["prefix"]) ? $context["prefix"] : $this->getContext($context, "prefix")), "html", null, true);
        echo "/elfinder/dist/js/i18n/elfinder.";
        echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "html", null, true);
        echo ".js\"></script>

";
        
        $__internal_b677a1cc41047fafa4f98a1bb5da815d8cb1cdf3247940b83abce7d231afeaad->leave($__internal_b677a1cc41047fafa4f98a1bb5da815d8cb1cdf3247940b83abce7d231afeaad_prof);

    }

    public function getTemplateName()
    {
        return "FMElfinderBundle:Elfinder/helper:assets_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  31 => 3,  27 => 2,  22 => 1,);
    }
}
/* <script src="{{ prefix }}/jquery/jquery.js"></script>*/
/* <script src="{{ prefix }}/jquery-ui/jquery-ui.min.js"></script>*/
/* <script src="{{ prefix }}/elfinder/dist/js/elfinder.min.js"></script>*/
/* <script src="{{ prefix }}/elfinder/dist/js/i18n/elfinder.{{locale}}.js"></script>*/
/* */
/* */
