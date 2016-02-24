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
        $__internal_783f7dd0b6f20076b2f9da1271e78799d2d617c47978a4fe5f5de3a9f3f3acc4 = $this->env->getExtension("native_profiler");
        $__internal_783f7dd0b6f20076b2f9da1271e78799d2d617c47978a4fe5f5de3a9f3f3acc4->enter($__internal_783f7dd0b6f20076b2f9da1271e78799d2d617c47978a4fe5f5de3a9f3f3acc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetSupportSIBundle:Support:licenses.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_783f7dd0b6f20076b2f9da1271e78799d2d617c47978a4fe5f5de3a9f3f3acc4->leave($__internal_783f7dd0b6f20076b2f9da1271e78799d2d617c47978a4fe5f5de3a9f3f3acc4_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_45d6d0eac30865ef69b8bba7975a1c42f90ff313e63ac00ff8e1e22643ce02c2 = $this->env->getExtension("native_profiler");
        $__internal_45d6d0eac30865ef69b8bba7975a1c42f90ff313e63ac00ff8e1e22643ce02c2->enter($__internal_45d6d0eac30865ef69b8bba7975a1c42f90ff313e63ac00ff8e1e22643ce02c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Licences ";
        
        $__internal_45d6d0eac30865ef69b8bba7975a1c42f90ff313e63ac00ff8e1e22643ce02c2->leave($__internal_45d6d0eac30865ef69b8bba7975a1c42f90ff313e63ac00ff8e1e22643ce02c2_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_6db73731e0b3df10b5a9f9cd55df54da518531c531955cd85a4bd51ccb24a0fc = $this->env->getExtension("native_profiler");
        $__internal_6db73731e0b3df10b5a9f9cd55df54da518531c531955cd85a4bd51ccb24a0fc->enter($__internal_6db73731e0b3df10b5a9f9cd55df54da518531c531955cd85a4bd51ccb24a0fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Licences";
        
        $__internal_6db73731e0b3df10b5a9f9cd55df54da518531c531955cd85a4bd51ccb24a0fc->leave($__internal_6db73731e0b3df10b5a9f9cd55df54da518531c531955cd85a4bd51ccb24a0fc_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_32d0f39447c28fffad0a38dac43e19a02e98da8d37a356244d6a76c1355b0bdb = $this->env->getExtension("native_profiler");
        $__internal_32d0f39447c28fffad0a38dac43e19a02e98da8d37a356244d6a76c1355b0bdb->enter($__internal_32d0f39447c28fffad0a38dac43e19a02e98da8d37a356244d6a76c1355b0bdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 8
        echo "
    <div id=\"DivIframeLicences\">
        <iframe id='licencesIframe' src=\"http://192.168.69.11:7019/EasyAdmin2/#{'include_obsolete':false,'server':'','vendor':'','license_type':[],'additional_key':'','feature':[],'products':[],'timeformat':'dd/mm/yyyy hh:mm:ss','timezone':'W. Europe Standard Time','module':'ea-licenses','windowSize':{'width':932,'height':600,'maximized':false}}\"></iframe>
    </div>

";
        
        $__internal_32d0f39447c28fffad0a38dac43e19a02e98da8d37a356244d6a76c1355b0bdb->leave($__internal_32d0f39447c28fffad0a38dac43e19a02e98da8d37a356244d6a76c1355b0bdb_prof);

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
