<?php

/* FMElfinderBundle:Elfinder:tinymce4.html.twig */
class __TwigTemplate_0b7e631b853619a95837a9222a29f71156cbf6d164124312c35bbdae2f07c4c3 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
<head>
";
        // line 4
        if ((isset($context["includeAssets"]) ? $context["includeAssets"] : null)) {
            // line 5
            echo "    ";
            $this->loadTemplate("FMElfinderBundle:Elfinder:helper/assets_css.html.twig", "FMElfinderBundle:Elfinder:tinymce4.html.twig", 5)->display($context);
        }
        // line 7
        echo "</head>
<body>
";
        // line 9
        if ((isset($context["includeAssets"]) ? $context["includeAssets"] : null)) {
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ef_connect", array("instance" => (isset($context["instance"]) ? $context["instance"] : null), "homeFolder" => (isset($context["homeFolder"]) ? $context["homeFolder"] : null))), "html", null, true);
        echo "',  // connector URL
            lang : '";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : null), "html", null, true);
        echo "',
            getFileCallback: function(file) { // editor callback
                ";
        // line 32
        if ((isset($context["relative_path"]) ? $context["relative_path"] : null)) {
            // line 33
            echo "                        FileBrowserDialogue.mySubmit('";
            echo twig_escape_filter($this->env, (isset($context["pathPrefix"]) ? $context["pathPrefix"] : null), "html", null, true);
            echo "'+file.url.replace(\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "schemeAndHttpHost", array()), "html", null, true);
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
        return array (  82 => 37,  78 => 35,  70 => 33,  68 => 32,  63 => 30,  59 => 29,  40 => 12,  36 => 10,  34 => 9,  30 => 7,  26 => 5,  24 => 4,  19 => 1,);
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
