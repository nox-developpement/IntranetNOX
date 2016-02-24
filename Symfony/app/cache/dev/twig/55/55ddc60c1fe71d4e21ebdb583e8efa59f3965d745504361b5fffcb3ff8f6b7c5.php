<?php

/* @FMElfinder/Elfinder/helper/assets_js.html.twig */
class __TwigTemplate_1cc5612027e6726d59d3c876dc47bc804c8c99ae9ace2483583d141f52496d66 extends Twig_Template
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
        $__internal_b580dcd3b8a9b1dc33817ee593992ac2ebaf2abb280e65c0d3f7626a01535256 = $this->env->getExtension("native_profiler");
        $__internal_b580dcd3b8a9b1dc33817ee593992ac2ebaf2abb280e65c0d3f7626a01535256->enter($__internal_b580dcd3b8a9b1dc33817ee593992ac2ebaf2abb280e65c0d3f7626a01535256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FMElfinder/Elfinder/helper/assets_js.html.twig"));

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
        
        $__internal_b580dcd3b8a9b1dc33817ee593992ac2ebaf2abb280e65c0d3f7626a01535256->leave($__internal_b580dcd3b8a9b1dc33817ee593992ac2ebaf2abb280e65c0d3f7626a01535256_prof);

    }

    public function getTemplateName()
    {
        return "@FMElfinder/Elfinder/helper/assets_js.html.twig";
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
