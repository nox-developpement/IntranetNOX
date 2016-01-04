<?php

/* FMElfinderBundle:Elfinder:tinymce4.html.twig */
class __TwigTemplate_e7ad1e8021c8383b0c447d8090b6f133709094df697102c2184b0cc07058df9e extends Twig_Template
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
        $__internal_9af9579f0926aa76fb0698aa2eda23f703ca4f9b7d6331b0cf8b9c24d216b4ee = $this->env->getExtension("native_profiler");
        $__internal_9af9579f0926aa76fb0698aa2eda23f703ca4f9b7d6331b0cf8b9c24d216b4ee->enter($__internal_9af9579f0926aa76fb0698aa2eda23f703ca4f9b7d6331b0cf8b9c24d216b4ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FMElfinderBundle:Elfinder:tinymce4.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
";
        // line 4
        if ((isset($context["includeAssets"]) ? $context["includeAssets"] : $this->getContext($context, "includeAssets"))) {
            // line 5
            echo "    ";
            $this->loadTemplate("FMElfinderBundle:Elfinder:helper/assets_css.html.twig", "FMElfinderBundle:Elfinder:tinymce4.html.twig", 5)->display($context);
        }
        // line 7
        echo "</head>
<body>
";
        // line 9
        if ((isset($context["includeAssets"]) ? $context["includeAssets"] : $this->getContext($context, "includeAssets"))) {
            // line 10
            echo "    ";
            $this->loadTemplate("FMElfinderBundle:Elfinder:helper/assets_js.html.twig", "FMElfinderBundle:Elfinder:tinymce4.html.twig", 10)->display($context);
        }
        // line 12
        echo "<script type=\"text/javascript\" charset=\"utf-8\">
    var FileBrowserDialogue = {
        init: function () {
            // Here goes your code for setting your custom things onLoad.
        },
        mySubmit: function (URL) {
            // pass selected file path to TinyMCE
            top.tinymce.activeEditor.windowManager.getParams().setUrl(URL);

            // close popup window
            top.tinymce.activeEditor.windowManager.close();
        }
    };

    \$(document).ready(function() {
        var elf = \$('.elfinder').elfinder({
            // set your elFinder options here
            url: '";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ef_connect", array("instance" => (isset($context["instance"]) ? $context["instance"] : $this->getContext($context, "instance")), "homeFolder" => (isset($context["homeFolder"]) ? $context["homeFolder"] : $this->getContext($context, "homeFolder")))), "html", null, true);
        echo "',  // connector URL
            lang : '";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "html", null, true);
        echo "',
            getFileCallback: function(file) { // editor callback
                ";
        // line 32
        if ((isset($context["relative_path"]) ? $context["relative_path"] : $this->getContext($context, "relative_path"))) {
            // line 33
            echo "                        FileBrowserDialogue.mySubmit('";
            echo twig_escape_filter($this->env, (isset($context["pathPrefix"]) ? $context["pathPrefix"] : $this->getContext($context, "pathPrefix")), "html", null, true);
            echo "'+file.url.replace(\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()), "html", null, true);
            echo "/\", \"\")); // pass selected file path to TinyMCE
                ";
        } else {
            // line 35
            echo "                    FileBrowserDialogue.mySubmit(file.url); // pass selected file path to TinyMCE
                ";
        }
        // line 37
        echo "
            }
        }).elfinder('instance');
    });
</script>
<div class=\"elfinder\"></div>
</body>
</html>
";
        
        $__internal_9af9579f0926aa76fb0698aa2eda23f703ca4f9b7d6331b0cf8b9c24d216b4ee->leave($__internal_9af9579f0926aa76fb0698aa2eda23f703ca4f9b7d6331b0cf8b9c24d216b4ee_prof);

    }

    public function getTemplateName()
    {
        return "FMElfinderBundle:Elfinder:tinymce4.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 37,  81 => 35,  73 => 33,  71 => 32,  66 => 30,  62 => 29,  43 => 12,  39 => 10,  37 => 9,  33 => 7,  29 => 5,  27 => 4,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/* {% if includeAssets %}*/
/*     {% include "FMElfinderBundle:Elfinder:helper/assets_css.html.twig" %}*/
/* {% endif %}*/
/* </head>*/
/* <body>*/
/* {% if includeAssets %}*/
/*     {% include "FMElfinderBundle:Elfinder:helper/assets_js.html.twig" %}*/
/* {% endif %}*/
/* <script type="text/javascript" charset="utf-8">*/
/*     var FileBrowserDialogue = {*/
/*         init: function () {*/
/*             // Here goes your code for setting your custom things onLoad.*/
/*         },*/
/*         mySubmit: function (URL) {*/
/*             // pass selected file path to TinyMCE*/
/*             top.tinymce.activeEditor.windowManager.getParams().setUrl(URL);*/
/* */
/*             // close popup window*/
/*             top.tinymce.activeEditor.windowManager.close();*/
/*         }*/
/*     };*/
/* */
/*     $(document).ready(function() {*/
/*         var elf = $('.elfinder').elfinder({*/
/*             // set your elFinder options here*/
/*             url: '{{ path('ef_connect', {'instance': instance, 'homeFolder': homeFolder }) }}',  // connector URL*/
/*             lang : '{{ locale }}',*/
/*             getFileCallback: function(file) { // editor callback*/
/*                 {% if relative_path %}*/
/*                         FileBrowserDialogue.mySubmit('{{ pathPrefix }}'+file.url.replace("{{ app.request.schemeAndHttpHost }}/", "")); // pass selected file path to TinyMCE*/
/*                 {% else %}*/
/*                     FileBrowserDialogue.mySubmit(file.url); // pass selected file path to TinyMCE*/
/*                 {% endif %}*/
/* */
/*             }*/
/*         }).elfinder('instance');*/
/*     });*/
/* </script>*/
/* <div class="elfinder"></div>*/
/* </body>*/
/* </html>*/
/* */
