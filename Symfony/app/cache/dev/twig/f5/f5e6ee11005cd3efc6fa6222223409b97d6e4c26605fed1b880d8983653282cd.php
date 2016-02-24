<?php

/* FMElfinderBundle:Elfinder/helper:_tinymce4.html.twig */
class __TwigTemplate_75e91a5ae635e845d875719fe2f9ed4a2667fef43c765400d9a2c0251fda304a extends Twig_Template
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
        $__internal_3389af96b219644dd03bcf1aa6430a2552545f15ac7e09cbb264399f4e6e91b2 = $this->env->getExtension("native_profiler");
        $__internal_3389af96b219644dd03bcf1aa6430a2552545f15ac7e09cbb264399f4e6e91b2->enter($__internal_3389af96b219644dd03bcf1aa6430a2552545f15ac7e09cbb264399f4e6e91b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FMElfinderBundle:Elfinder/helper:_tinymce4.html.twig"));

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
        
        $__internal_3389af96b219644dd03bcf1aa6430a2552545f15ac7e09cbb264399f4e6e91b2->leave($__internal_3389af96b219644dd03bcf1aa6430a2552545f15ac7e09cbb264399f4e6e91b2_prof);

    }

    public function getTemplateName()
    {
        return "FMElfinderBundle:Elfinder/helper:_tinymce4.html.twig";
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
