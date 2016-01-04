<?php

/* FMElfinderBundle:Elfinder:summernote.html.twig */
class __TwigTemplate_f62994331f0407f3da51087c0336cf0273fe60cae34c7425b2f57b8dc0d2594b extends Twig_Template
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
        $__internal_ee6c942e5b36e35f1173b84597db033583e2f771c12accef809450627edaf2ea = $this->env->getExtension("native_profiler");
        $__internal_ee6c942e5b36e35f1173b84597db033583e2f771c12accef809450627edaf2ea->enter($__internal_ee6c942e5b36e35f1173b84597db033583e2f771c12accef809450627edaf2ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FMElfinderBundle:Elfinder:summernote.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    ";
        // line 4
        if ((isset($context["includeAssets"]) ? $context["includeAssets"] : $this->getContext($context, "includeAssets"))) {
            // line 5
            echo "        ";
            $this->loadTemplate("FMElfinderBundle:Elfinder:helper/assets_css.html.twig", "FMElfinderBundle:Elfinder:summernote.html.twig", 5)->display($context);
            // line 6
            echo "    ";
        }
        // line 7
        echo "</head>
<body>
";
        // line 9
        if ((isset($context["includeAssets"]) ? $context["includeAssets"] : $this->getContext($context, "includeAssets"))) {
            // line 10
            echo "    ";
            $this->loadTemplate("FMElfinderBundle:Elfinder:helper/assets_js.html.twig", "FMElfinderBundle:Elfinder:summernote.html.twig", 10)->display($context);
        }
        // line 12
        echo "<script type=\"text/javascript\" charset=\"utf-8\">
    \$(document).ready(function() {
        var elf = \$('.elfinder').elfinder({
            url : '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ef_connect", array("instance" => (isset($context["instance"]) ? $context["instance"] : $this->getContext($context, "instance")), "homeFolder" => (isset($context["homeFolder"]) ? $context["homeFolder"] : $this->getContext($context, "homeFolder")))), "html", null, true);
        echo "',  // connector URL
            lang : '";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "html", null, true);
        echo "',
            destroyOnClose : true,
            getFileCallback : function(files, fm) {
                window.opener.\$('.summernote').summernote('editor.insertImage',files.url);
                window.close();
            }
        }).elfinder('instance');
    });
</script>
<div class=\"elfinder\"></div>
</body>
</html>
";
        
        $__internal_ee6c942e5b36e35f1173b84597db033583e2f771c12accef809450627edaf2ea->leave($__internal_ee6c942e5b36e35f1173b84597db033583e2f771c12accef809450627edaf2ea_prof);

    }

    public function getTemplateName()
    {
        return "FMElfinderBundle:Elfinder:summernote.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 16,  50 => 15,  45 => 12,  41 => 10,  39 => 9,  35 => 7,  32 => 6,  29 => 5,  27 => 4,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     {% if includeAssets %}*/
/*         {% include "FMElfinderBundle:Elfinder:helper/assets_css.html.twig" %}*/
/*     {% endif %}*/
/* </head>*/
/* <body>*/
/* {% if includeAssets %}*/
/*     {% include "FMElfinderBundle:Elfinder:helper/assets_js.html.twig" %}*/
/* {% endif %}*/
/* <script type="text/javascript" charset="utf-8">*/
/*     $(document).ready(function() {*/
/*         var elf = $('.elfinder').elfinder({*/
/*             url : '{{ path('ef_connect', {'instance': instance, 'homeFolder': homeFolder }) }}',  // connector URL*/
/*             lang : '{{locale}}',*/
/*             destroyOnClose : true,*/
/*             getFileCallback : function(files, fm) {*/
/*                 window.opener.$('.summernote').summernote('editor.insertImage',files.url);*/
/*                 window.close();*/
/*             }*/
/*         }).elfinder('instance');*/
/*     });*/
/* </script>*/
/* <div class="elfinder"></div>*/
/* </body>*/
/* </html>*/
/* */
