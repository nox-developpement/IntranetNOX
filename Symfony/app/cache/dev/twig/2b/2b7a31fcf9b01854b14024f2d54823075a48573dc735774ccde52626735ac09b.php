<?php

/* NoxIntranetSupportSIBundle:Support:licenses.html.twig */
class __TwigTemplate_eb26f71f7a5f3db3af6a548bfbb0d6067554e18288687f9ba3b3b8fbdb5bfc83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetSupportSIBundle:Support:licenses.html.twig", 1);
        $this->blocks = array(
            'titrePage' => array($this, 'block_titrePage'),
            'messageAccueil' => array($this, 'block_messageAccueil'),
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4824868e01008f2a5d0d7381bb88a8ce3bb977b77e6af5978f10c4d79b47f328 = $this->env->getExtension("native_profiler");
        $__internal_4824868e01008f2a5d0d7381bb88a8ce3bb977b77e6af5978f10c4d79b47f328->enter($__internal_4824868e01008f2a5d0d7381bb88a8ce3bb977b77e6af5978f10c4d79b47f328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetSupportSIBundle:Support:licenses.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4824868e01008f2a5d0d7381bb88a8ce3bb977b77e6af5978f10c4d79b47f328->leave($__internal_4824868e01008f2a5d0d7381bb88a8ce3bb977b77e6af5978f10c4d79b47f328_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_9d4b0fdf24e9c32cdc04e7aad052483868a786692d7843d8b59391453d8a5cbe = $this->env->getExtension("native_profiler");
        $__internal_9d4b0fdf24e9c32cdc04e7aad052483868a786692d7843d8b59391453d8a5cbe->enter($__internal_9d4b0fdf24e9c32cdc04e7aad052483868a786692d7843d8b59391453d8a5cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Licences ";
        
        $__internal_9d4b0fdf24e9c32cdc04e7aad052483868a786692d7843d8b59391453d8a5cbe->leave($__internal_9d4b0fdf24e9c32cdc04e7aad052483868a786692d7843d8b59391453d8a5cbe_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_4e9d8600439a912ca3d237bf60c828aa700eb80d08b6304ccad5f60b60f80357 = $this->env->getExtension("native_profiler");
        $__internal_4e9d8600439a912ca3d237bf60c828aa700eb80d08b6304ccad5f60b60f80357->enter($__internal_4e9d8600439a912ca3d237bf60c828aa700eb80d08b6304ccad5f60b60f80357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Licences";
        
        $__internal_4e9d8600439a912ca3d237bf60c828aa700eb80d08b6304ccad5f60b60f80357->leave($__internal_4e9d8600439a912ca3d237bf60c828aa700eb80d08b6304ccad5f60b60f80357_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_fd1004223614be9e92a2196ccbd1dafa48a7c89a291983ed3a747ed3f639d0ae = $this->env->getExtension("native_profiler");
        $__internal_fd1004223614be9e92a2196ccbd1dafa48a7c89a291983ed3a747ed3f639d0ae->enter($__internal_fd1004223614be9e92a2196ccbd1dafa48a7c89a291983ed3a747ed3f639d0ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 8
        echo "
    <div id=\"DivIframeLicences\">
        <iframe id='licencesIframe' src=\"http://192.168.69.11:7019/EasyAdmin2/#{'include_obsolete':false,'server':'','vendor':'','license_type':[],'additional_key':'','feature':[],'products':[],'timeformat':'dd/mm/yyyy hh:mm:ss','timezone':'W. Europe Standard Time','module':'ea-licenses','windowSize':{'width':932,'height':600,'maximized':false}}\"></iframe>
    </div>

";
        
        $__internal_fd1004223614be9e92a2196ccbd1dafa48a7c89a291983ed3a747ed3f639d0ae->leave($__internal_fd1004223614be9e92a2196ccbd1dafa48a7c89a291983ed3a747ed3f639d0ae_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetSupportSIBundle:Support:licenses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 8,  60 => 7,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '::layout.html.twig' %}*/
/* */
/* {% block titrePage %} Licences {% endblock %}*/
/* */
/* {% block messageAccueil %}Licences{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     <div id="DivIframeLicences">*/
/*         <iframe id='licencesIframe' src="http://192.168.69.11:7019/EasyAdmin2/#{'include_obsolete':false,'server':'','vendor':'','license_type':[],'additional_key':'','feature':[],'products':[],'timeformat':'dd/mm/yyyy hh:mm:ss','timezone':'W. Europe Standard Time','module':'ea-licenses','windowSize':{'width':932,'height':600,'maximized':false}}"></iframe>*/
/*     </div>*/
/* */
/* {% endblock %}*/
