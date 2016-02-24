<?php

/* ::base.html.twig */
class __TwigTemplate_0c1529f478f93e6b526bdf7d573f5e5976af089e75bc2cb28579fc1901cbce55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b58204ba2b69667e1564415a8bd903bc27546eed33428fa5dcf911a1469d40b8 = $this->env->getExtension("native_profiler");
        $__internal_b58204ba2b69667e1564415a8bd903bc27546eed33428fa5dcf911a1469d40b8->enter($__internal_b58204ba2b69667e1564415a8bd903bc27546eed33428fa5dcf911a1469d40b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_b58204ba2b69667e1564415a8bd903bc27546eed33428fa5dcf911a1469d40b8->leave($__internal_b58204ba2b69667e1564415a8bd903bc27546eed33428fa5dcf911a1469d40b8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b3b9e2fb280ceb3d441a2546d6e66640ebb328444aca7a387903a7d664cfc866 = $this->env->getExtension("native_profiler");
        $__internal_b3b9e2fb280ceb3d441a2546d6e66640ebb328444aca7a387903a7d664cfc866->enter($__internal_b3b9e2fb280ceb3d441a2546d6e66640ebb328444aca7a387903a7d664cfc866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b3b9e2fb280ceb3d441a2546d6e66640ebb328444aca7a387903a7d664cfc866->leave($__internal_b3b9e2fb280ceb3d441a2546d6e66640ebb328444aca7a387903a7d664cfc866_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fbf8bf3053ef7b18af22e6b75d9c252e2e96220f63ccf2f19157e61e91e3e05c = $this->env->getExtension("native_profiler");
        $__internal_fbf8bf3053ef7b18af22e6b75d9c252e2e96220f63ccf2f19157e61e91e3e05c->enter($__internal_fbf8bf3053ef7b18af22e6b75d9c252e2e96220f63ccf2f19157e61e91e3e05c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_fbf8bf3053ef7b18af22e6b75d9c252e2e96220f63ccf2f19157e61e91e3e05c->leave($__internal_fbf8bf3053ef7b18af22e6b75d9c252e2e96220f63ccf2f19157e61e91e3e05c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b3315bf1f4b610e0a8f1de71df9205af7eadce57a1d9ff8735f2ee21dec4dbe = $this->env->getExtension("native_profiler");
        $__internal_4b3315bf1f4b610e0a8f1de71df9205af7eadce57a1d9ff8735f2ee21dec4dbe->enter($__internal_4b3315bf1f4b610e0a8f1de71df9205af7eadce57a1d9ff8735f2ee21dec4dbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4b3315bf1f4b610e0a8f1de71df9205af7eadce57a1d9ff8735f2ee21dec4dbe->leave($__internal_4b3315bf1f4b610e0a8f1de71df9205af7eadce57a1d9ff8735f2ee21dec4dbe_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_594cacdaf66f16f2f9201b622f88abb608f22775b6d705728dcbae52c7a50ab7 = $this->env->getExtension("native_profiler");
        $__internal_594cacdaf66f16f2f9201b622f88abb608f22775b6d705728dcbae52c7a50ab7->enter($__internal_594cacdaf66f16f2f9201b622f88abb608f22775b6d705728dcbae52c7a50ab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_594cacdaf66f16f2f9201b622f88abb608f22775b6d705728dcbae52c7a50ab7->leave($__internal_594cacdaf66f16f2f9201b622f88abb608f22775b6d705728dcbae52c7a50ab7_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
