<?php

/* FMElfinderBundle:Form:elfinder_widget.html.twig */
class __TwigTemplate_d142262272cea592fda3751551e54cae2f2f29a1a2c031dbffee1d0a2aca2bff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'elfinder_widget' => array($this, 'block_elfinder_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('elfinder_widget', $context, $blocks);
    }

    public function block_elfinder_widget($context, array $blocks = array())
    {
        // line 2
        echo "    <input type=\"text\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : null))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\" ";
        }
        echo " data-type=\"elfinder-input-field\" />
    ";
        // line 3
        if (((isset($context["enable"]) ? $context["enable"] : null) && array_key_exists("instance", $context))) {
            // line 4
            echo "        <script type=\"text/javascript\" charset=\"utf-8\">
            \$('[data-type=\"elfinder-input-field\"][id=\"";
            // line 5
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\"]').on(\"click\",function() {
                var childWin = window.open(\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("elfinder", array("instance" => (isset($context["instance"]) ? $context["instance"] : null), "homeFolder" => (isset($context["homeFolder"]) ? $context["homeFolder"] : null))), "html", null, true);
            echo "?id=";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\", \"popupWindow\", \"height=450, width=900\");
            });
            function setValue(value, element_id) {
                \$('[data-type=\"elfinder-input-field\"]' + (element_id ? '[id=\"'+ element_id +'\"]': '')).val(value).change();
            }
        </script>
    ";
        }
    }

    public function getTemplateName()
    {
        return "FMElfinderBundle:Form:elfinder_widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  46 => 6,  42 => 5,  39 => 4,  37 => 3,  26 => 2,  20 => 1,);
    }
}
/* {% block elfinder_widget %}*/
/*     <input type="text" {{ block('widget_attributes') }} {% if value is not empty %}value="{{ value }}" {% endif %} data-type="elfinder-input-field" />*/
/*     {% if enable and instance is defined %}*/
/*         <script type="text/javascript" charset="utf-8">*/
/*             $('[data-type="elfinder-input-field"][id="{{ id }}"]').on("click",function() {*/
/*                 var childWin = window.open("{{path('elfinder', {'instance': instance, 'homeFolder': homeFolder })}}?id={{ id }}", "popupWindow", "height=450, width=900");*/
/*             });*/
/*             function setValue(value, element_id) {*/
/*                 $('[data-type="elfinder-input-field"]' + (element_id ? '[id="'+ element_id +'"]': '')).val(value).change();*/
/*             }*/
/*         </script>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
