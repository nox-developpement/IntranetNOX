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
        $__internal_aa28f93dc618af83b1c186cd422413fdc90863ba4aefc6677b91439aa0d409cd = $this->env->getExtension("native_profiler");
        $__internal_aa28f93dc618af83b1c186cd422413fdc90863ba4aefc6677b91439aa0d409cd->enter($__internal_aa28f93dc618af83b1c186cd422413fdc90863ba4aefc6677b91439aa0d409cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetSupportSIBundle:Support:licenses.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa28f93dc618af83b1c186cd422413fdc90863ba4aefc6677b91439aa0d409cd->leave($__internal_aa28f93dc618af83b1c186cd422413fdc90863ba4aefc6677b91439aa0d409cd_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_ea7fa81fd2f7f91ca2e4e94f865c22f0147433c941e9be6383015d7af19701df = $this->env->getExtension("native_profiler");
        $__internal_ea7fa81fd2f7f91ca2e4e94f865c22f0147433c941e9be6383015d7af19701df->enter($__internal_ea7fa81fd2f7f91ca2e4e94f865c22f0147433c941e9be6383015d7af19701df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Licences ";
        
        $__internal_ea7fa81fd2f7f91ca2e4e94f865c22f0147433c941e9be6383015d7af19701df->leave($__internal_ea7fa81fd2f7f91ca2e4e94f865c22f0147433c941e9be6383015d7af19701df_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_55e473e346e998e57f275b91e6c81484ac5a3b17884e113218e7a89bd6e73947 = $this->env->getExtension("native_profiler");
        $__internal_55e473e346e998e57f275b91e6c81484ac5a3b17884e113218e7a89bd6e73947->enter($__internal_55e473e346e998e57f275b91e6c81484ac5a3b17884e113218e7a89bd6e73947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Licences";
        
        $__internal_55e473e346e998e57f275b91e6c81484ac5a3b17884e113218e7a89bd6e73947->leave($__internal_55e473e346e998e57f275b91e6c81484ac5a3b17884e113218e7a89bd6e73947_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_a282620bc461bf04b5fea9ee8c358b9e25d6db6b3f67ce6f282345237bc9dec9 = $this->env->getExtension("native_profiler");
        $__internal_a282620bc461bf04b5fea9ee8c358b9e25d6db6b3f67ce6f282345237bc9dec9->enter($__internal_a282620bc461bf04b5fea9ee8c358b9e25d6db6b3f67ce6f282345237bc9dec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 8
        echo "
    <div id=\"DivIframeLicences\">
        <iframe id='licencesIframe' src=\"http://192.168.69.11:7019/EasyAdmin2/#{'include_obsolete':false,'server':'','vendor':'','license_type':[],'additional_key':'','feature':[],'products':[],'timeformat':'dd/mm/yyyy hh:mm:ss','timezone':'W. Europe Standard Time','module':'ea-licenses','windowSize':{'width':932,'height':600,'maximized':false}}\"></iframe>
    </div>

";
        
        $__internal_a282620bc461bf04b5fea9ee8c358b9e25d6db6b3f67ce6f282345237bc9dec9->leave($__internal_a282620bc461bf04b5fea9ee8c358b9e25d6db6b3f67ce6f282345237bc9dec9_prof);

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
