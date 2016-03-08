<?php

/* FMElfinderBundle:Elfinder/helper:_summernote.html.twig */
class __TwigTemplate_14fb5fa1489454e2601085a72fd699c8a01c537204df5d80eff746f159f09b8a extends Twig_Template
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
        // line 1
        echo "<script type=\"text/javascript\">
    function elFinderBrowser(){
            window.open(
                \"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("elfinder", array("instance" => (isset($context["instance"]) ? $context["instance"] : null))), "html", null, true);
        echo "\",
                \"\",
                \"width=";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["width"]) ? $context["width"] : null), "html", null, true);
        echo ", height=";
        echo twig_escape_filter($this->env, (isset($context["height"]) ? $context["height"] : null), "html", null, true);
        echo ", resizable=yes, scrollbars=no, status=no, toolbar=no\"
            );
            return false;
        }
</script>";
    }

    public function getTemplateName()
    {
        return "FMElfinderBundle:Elfinder/helper:_summernote.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 6,  24 => 4,  19 => 1,);
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
