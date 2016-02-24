<?php

/* @FMElfinder/Elfinder/helper/_summernote.html.twig */
class __TwigTemplate_74c0c1ad17ca0d309b1b78aedbb646e553f165d3fdb461f11395075ef511e13c extends Twig_Template
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
        $__internal_844a401314df4238fb8870c23a667432243e755ca1e783813e0a8ba7f9a1510a = $this->env->getExtension("native_profiler");
        $__internal_844a401314df4238fb8870c23a667432243e755ca1e783813e0a8ba7f9a1510a->enter($__internal_844a401314df4238fb8870c23a667432243e755ca1e783813e0a8ba7f9a1510a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FMElfinder/Elfinder/helper/_summernote.html.twig"));

        // line 1
        echo "<script type=\"text/javascript\">
    function elFinderBrowser(){
            window.open(
                \"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("elfinder", array("instance" => (isset($context["instance"]) ? $context["instance"] : $this->getContext($context, "instance")))), "html", null, true);
        echo "\",
                \"\",
                \"width=";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["width"]) ? $context["width"] : $this->getContext($context, "width")), "html", null, true);
        echo ", height=";
        echo twig_escape_filter($this->env, (isset($context["height"]) ? $context["height"] : $this->getContext($context, "height")), "html", null, true);
        echo ", resizable=yes, scrollbars=no, status=no, toolbar=no\"
            );
            return false;
        }
</script>";
        
        $__internal_844a401314df4238fb8870c23a667432243e755ca1e783813e0a8ba7f9a1510a->leave($__internal_844a401314df4238fb8870c23a667432243e755ca1e783813e0a8ba7f9a1510a_prof);

    }

    public function getTemplateName()
    {
        return "@FMElfinder/Elfinder/helper/_summernote.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 6,  27 => 4,  22 => 1,);
    }
}
/* <script type="text/javascript">*/
/*     function elFinderBrowser(){*/
/*             window.open(*/
/*                 "{{ url('elfinder', {'instance': instance}) }}",*/
/*                 "",*/
/*                 "width={{ width }}, height={{ height }}, resizable=yes, scrollbars=no, status=no, toolbar=no"*/
/*             );*/
/*             return false;*/
/*         }*/
/* </script>*/
