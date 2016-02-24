<?php

/* @FMElfinder/Elfinder/helper/_tinymce4.html.twig */
class __TwigTemplate_b56d22ac62922390d338820b7c18a74d837eedf5257a440310c82ae02cf91b88 extends Twig_Template
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
        $__internal_11b1cc26ef1800def828b3bf5781f287a4a43ed6d04bb9931f9e0b0046910eb6 = $this->env->getExtension("native_profiler");
        $__internal_11b1cc26ef1800def828b3bf5781f287a4a43ed6d04bb9931f9e0b0046910eb6->enter($__internal_11b1cc26ef1800def828b3bf5781f287a4a43ed6d04bb9931f9e0b0046910eb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FMElfinder/Elfinder/helper/_tinymce4.html.twig"));

        // line 1
        echo "<script type=\"text/javascript\">
    function elFinderBrowser (field_name, url, type, win) {
        tinymce.activeEditor.windowManager.open({
            file:\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("elfinder", array("instance" => (isset($context["instance"]) ? $context["instance"] : $this->getContext($context, "instance")))), "html", null, true);
        echo "\",
            title: \"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "\",
            width: ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["width"]) ? $context["width"] : $this->getContext($context, "width")), "html", null, true);
        echo ",
            height: ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["height"]) ? $context["height"] : $this->getContext($context, "height")), "html", null, true);
        echo ",
            resizable: 'yes'
        }, {
            setUrl: function (url) {
                win.document.getElementById(field_name).value = url;
            }
        });
        return false;
    }
</script>
";
        
        $__internal_11b1cc26ef1800def828b3bf5781f287a4a43ed6d04bb9931f9e0b0046910eb6->leave($__internal_11b1cc26ef1800def828b3bf5781f287a4a43ed6d04bb9931f9e0b0046910eb6_prof);

    }

    public function getTemplateName()
    {
        return "@FMElfinder/Elfinder/helper/_tinymce4.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/* <script type="text/javascript">*/
/*     function elFinderBrowser (field_name, url, type, win) {*/
/*         tinymce.activeEditor.windowManager.open({*/
/*             file:"{{ url('elfinder', {'instance': instance}) }}",*/
/*             title: "{{ title }}",*/
/*             width: {{ width }},*/
/*             height: {{ height }},*/
/*             resizable: 'yes'*/
/*         }, {*/
/*             setUrl: function (url) {*/
/*                 win.document.getElementById(field_name).value = url;*/
/*             }*/
/*         });*/
/*         return false;*/
/*     }*/
/* </script>*/
/* */
