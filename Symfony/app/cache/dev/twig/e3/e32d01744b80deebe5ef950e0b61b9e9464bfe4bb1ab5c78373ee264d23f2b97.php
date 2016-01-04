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
        $__internal_82be5c76b8a22fd3f333dd95ba4b451b8ee3c5d166776aaf8f2789b3481b924b = $this->env->getExtension("native_profiler");
        $__internal_82be5c76b8a22fd3f333dd95ba4b451b8ee3c5d166776aaf8f2789b3481b924b->enter($__internal_82be5c76b8a22fd3f333dd95ba4b451b8ee3c5d166776aaf8f2789b3481b924b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FMElfinderBundle:Elfinder/helper:assets_js.html.twig"));

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
        
        $__internal_82be5c76b8a22fd3f333dd95ba4b451b8ee3c5d166776aaf8f2789b3481b924b->leave($__internal_82be5c76b8a22fd3f333dd95ba4b451b8ee3c5d166776aaf8f2789b3481b924b_prof);

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
