<?php

/* @FMElfinder/Elfinder/fm_tinymce.html.twig */
class __TwigTemplate_92c4ad460ed00a21afef966fab378c5eed4f1239657aaac27bfe12c83307efb1 extends Twig_Template
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
        $__internal_c651a81741f1dc84aa5a5f408edc3479a01fbf32eeaccb235e8adaa6e64cacb6 = $this->env->getExtension("native_profiler");
        $__internal_c651a81741f1dc84aa5a5f408edc3479a01fbf32eeaccb235e8adaa6e64cacb6->enter($__internal_c651a81741f1dc84aa5a5f408edc3479a01fbf32eeaccb235e8adaa6e64cacb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FMElfinder/Elfinder/fm_tinymce.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
";
        // line 4
        if ((isset($context["includeAssets"]) ? $context["includeAssets"] : $this->getContext($context, "includeAssets"))) {
            // line 5
            echo "    ";
            $this->loadTemplate("FMElfinderBundle:Elfinder:helper/assets_css.html.twig", "@FMElfinder/Elfinder/fm_tinymce.html.twig", 5)->display($context);
        }
        // line 7
        echo "</head>
<body>
";
        // line 9
        if ((isset($context["includeAssets"]) ? $context["includeAssets"] : $this->getContext($context, "includeAssets"))) {
            // line 10
            echo "    ";
            $this->loadTemplate("FMElfinderBundle:Elfinder:helper/assets_js.html.twig", "@FMElfinder/Elfinder/fm_tinymce.html.twig", 10)->display($context);
        }
        // line 12
        echo "<script type=\"text/javascript\" charset=\"utf-8\">
    var FileBrowserDialogue = {
        mySubmit: function (file, elf) {
            // pass selected file data to TinyMCE
            parent.tinymce.activeEditor.windowManager.getParams().oninsert(file, elf);
            // close popup window
            parent.tinymce.activeEditor.windowManager.close();
        }
    };
    \$(document).ready(function() {
        var elf = \$('.elfinder').elfinder({
            // set your elFinder options here
            url: '";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ef_connect", array("instance" => (isset($context["instance"]) ? $context["instance"] : $this->getContext($context, "instance")), "homeFolder" => (isset($context["homeFolder"]) ? $context["homeFolder"] : $this->getContext($context, "homeFolder")))), "html", null, true);
        echo "',  // connector URL
            lang : '";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "html", null, true);
        echo "',
            getFileCallback: function(file) { // editor callback
                ";
        // line 27
        if ((isset($context["relative_path"]) ? $context["relative_path"] : $this->getContext($context, "relative_path"))) {
            // line 28
            echo "                        file.url = '";
            echo twig_escape_filter($this->env, (isset($context["pathPrefix"]) ? $context["pathPrefix"] : $this->getContext($context, "pathPrefix")), "html", null, true);
            echo "' + file.url.replace(\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()), "html", null, true);
            echo "/\", \"\");
                        FileBrowserDialogue.mySubmit(file, elf); // pass selected file path to TinyMCE
                ";
        } else {
            // line 31
            echo "                    FileBrowserDialogue.mySubmit(file, elf); // pass selected file path to TinyMCE
                ";
        }
        // line 33
        echo "
            }
        }).elfinder('instance');
    });
</script>
<div class=\"elfinder\"></div>
</body>
</html>
";
        
        $__internal_c651a81741f1dc84aa5a5f408edc3479a01fbf32eeaccb235e8adaa6e64cacb6->leave($__internal_c651a81741f1dc84aa5a5f408edc3479a01fbf32eeaccb235e8adaa6e64cacb6_prof);

    }

    public function getTemplateName()
    {
        return "@FMElfinder/Elfinder/fm_tinymce.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 33,  77 => 31,  68 => 28,  66 => 27,  61 => 25,  57 => 24,  43 => 12,  39 => 10,  37 => 9,  33 => 7,  29 => 5,  27 => 4,  22 => 1,);
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
/*         mySubmit: function (file, elf) {*/
/*             // pass selected file data to TinyMCE*/
/*             parent.tinymce.activeEditor.windowManager.getParams().oninsert(file, elf);*/
/*             // close popup window*/
/*             parent.tinymce.activeEditor.windowManager.close();*/
/*         }*/
/*     };*/
/*     $(document).ready(function() {*/
/*         var elf = $('.elfinder').elfinder({*/
/*             // set your elFinder options here*/
/*             url: '{{ path('ef_connect', {'instance': instance, 'homeFolder': homeFolder }) }}',  // connector URL*/
/*             lang : '{{ locale }}',*/
/*             getFileCallback: function(file) { // editor callback*/
/*                 {% if relative_path %}*/
/*                         file.url = '{{ pathPrefix }}' + file.url.replace("{{ app.request.schemeAndHttpHost }}/", "");*/
/*                         FileBrowserDialogue.mySubmit(file, elf); // pass selected file path to TinyMCE*/
/*                 {% else %}*/
/*                     FileBrowserDialogue.mySubmit(file, elf); // pass selected file path to TinyMCE*/
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
