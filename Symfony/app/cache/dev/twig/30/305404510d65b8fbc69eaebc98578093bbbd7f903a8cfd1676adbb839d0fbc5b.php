<?php

/* IvoryCKEditorBundle:Form:ckeditor_widget.html.twig */
class __TwigTemplate_4e4d3ea7cabe805280867208cc4d3899bd70334767375647898b27bda08febfd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'ckeditor_widget' => array($this, 'block_ckeditor_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4b3740345e8b0448712cc228241abc4fecf1df90b0dfc56997b676962d2f556d = $this->env->getExtension("native_profiler");
        $__internal_4b3740345e8b0448712cc228241abc4fecf1df90b0dfc56997b676962d2f556d->enter($__internal_4b3740345e8b0448712cc228241abc4fecf1df90b0dfc56997b676962d2f556d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IvoryCKEditorBundle:Form:ckeditor_widget.html.twig"));

        // line 1
        $this->displayBlock('ckeditor_widget', $context, $blocks);
        
        $__internal_4b3740345e8b0448712cc228241abc4fecf1df90b0dfc56997b676962d2f556d->leave($__internal_4b3740345e8b0448712cc228241abc4fecf1df90b0dfc56997b676962d2f556d_prof);

    }

    public function block_ckeditor_widget($context, array $blocks = array())
    {
        $__internal_78e4604443a2966ec8e8a36d7fff53a5304ad933d6c8e65f26ff462b5cfaae3e = $this->env->getExtension("native_profiler");
        $__internal_78e4604443a2966ec8e8a36d7fff53a5304ad933d6c8e65f26ff462b5cfaae3e->enter($__internal_78e4604443a2966ec8e8a36d7fff53a5304ad933d6c8e65f26ff462b5cfaae3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ckeditor_widget"));

        // line 2
        echo "    <textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>

    ";
        // line 4
        if ((isset($context["enable"]) ? $context["enable"] : $this->getContext($context, "enable"))) {
            // line 5
            echo "        ";
            if ((isset($context["autoload"]) ? $context["autoload"] : $this->getContext($context, "autoload"))) {
                // line 6
                echo "            <script type=\"text/javascript\">
                var CKEDITOR_BASEPATH = \"";
                // line 7
                echo $this->env->getExtension('ivory_ckeditor')->renderBasePath((isset($context["base_path"]) ? $context["base_path"] : $this->getContext($context, "base_path")));
                echo "\";
            </script>
            <script type=\"text/javascript\" src=\"";
                // line 9
                echo $this->env->getExtension('ivory_ckeditor')->renderJsPath((isset($context["js_path"]) ? $context["js_path"] : $this->getContext($context, "js_path")));
                echo "\"></script>
            ";
                // line 10
                if ((isset($context["jquery"]) ? $context["jquery"] : $this->getContext($context, "jquery"))) {
                    // line 11
                    echo "                <script type=\"text/javascript\" src=\"";
                    echo $this->env->getExtension('ivory_ckeditor')->renderJsPath((isset($context["jquery_path"]) ? $context["jquery_path"] : $this->getContext($context, "jquery_path")));
                    echo "\"></script>
            ";
                }
                // line 13
                echo "        ";
            }
            // line 14
            echo "        <script type=\"text/javascript\">
            ";
            // line 15
            echo $this->env->getExtension('ivory_ckeditor')->renderDestroy((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")));
            echo "

            ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["plugins"]) ? $context["plugins"] : $this->getContext($context, "plugins")));
            foreach ($context['_seq'] as $context["plugin_name"] => $context["plugin"]) {
                // line 18
                echo "                ";
                echo $this->env->getExtension('ivory_ckeditor')->renderPlugin($context["plugin_name"], $context["plugin"]);
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['plugin_name'], $context['plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "
            ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) ? $context["styles"] : $this->getContext($context, "styles")));
            foreach ($context['_seq'] as $context["style_name"] => $context["style"]) {
                // line 22
                echo "                ";
                echo $this->env->getExtension('ivory_ckeditor')->renderStylesSet($context["style_name"], $context["style"]);
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['style_name'], $context['style'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "
            ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["templates"]) ? $context["templates"] : $this->getContext($context, "templates")));
            foreach ($context['_seq'] as $context["template_name"] => $context["template"]) {
                // line 26
                echo "                ";
                echo $this->env->getExtension('ivory_ckeditor')->renderTemplate($context["template_name"], $context["template"]);
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['template_name'], $context['template'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "
            ";
            // line 29
            echo $this->env->getExtension('ivory_ckeditor')->renderWidget((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), (isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), (isset($context["inline"]) ? $context["inline"] : $this->getContext($context, "inline")), (isset($context["input_sync"]) ? $context["input_sync"] : $this->getContext($context, "input_sync")));
            echo "
        </script>
    ";
        }
        
        $__internal_78e4604443a2966ec8e8a36d7fff53a5304ad933d6c8e65f26ff462b5cfaae3e->leave($__internal_78e4604443a2966ec8e8a36d7fff53a5304ad933d6c8e65f26ff462b5cfaae3e_prof);

    }

    public function getTemplateName()
    {
        return "IvoryCKEditorBundle:Form:ckeditor_widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  127 => 29,  124 => 28,  115 => 26,  111 => 25,  108 => 24,  99 => 22,  95 => 21,  92 => 20,  83 => 18,  79 => 17,  74 => 15,  71 => 14,  68 => 13,  62 => 11,  60 => 10,  56 => 9,  51 => 7,  48 => 6,  45 => 5,  43 => 4,  35 => 2,  23 => 1,);
    }
}
/* {% block ckeditor_widget %}*/
/*     <textarea {{ block('widget_attributes') }}>{{ value }}</textarea>*/
/* */
/*     {% if enable %}*/
/*         {% if autoload %}*/
/*             <script type="text/javascript">*/
/*                 var CKEDITOR_BASEPATH = "{{ ckeditor_base_path(base_path) }}";*/
/*             </script>*/
/*             <script type="text/javascript" src="{{ ckeditor_js_path(js_path) }}"></script>*/
/*             {% if jquery %}*/
/*                 <script type="text/javascript" src="{{ ckeditor_js_path(jquery_path) }}"></script>*/
/*             {% endif %}*/
/*         {% endif %}*/
/*         <script type="text/javascript">*/
/*             {{ ckeditor_destroy(id) }}*/
/* */
/*             {% for plugin_name, plugin in plugins %}*/
/*                 {{ ckeditor_plugin(plugin_name, plugin) }}*/
/*             {% endfor %}*/
/* */
/*             {% for style_name, style in styles %}*/
/*                 {{ ckeditor_styles_set(style_name, style) }}*/
/*             {% endfor %}*/
/* */
/*             {% for template_name, template in templates %}*/
/*                 {{ ckeditor_template(template_name, template) }}*/
/*             {% endfor %}*/
/* */
/*             {{ ckeditor_widget(id, config, inline, input_sync) }}*/
/*         </script>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
