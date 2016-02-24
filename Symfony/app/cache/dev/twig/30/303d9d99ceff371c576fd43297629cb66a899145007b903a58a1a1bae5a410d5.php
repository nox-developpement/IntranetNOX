<?php

/* @NoxIntranetSupportSI/Support/licenses.html.twig */
class __TwigTemplate_916e4d8274b19c82a2535976a36b3efcedf899ccdb70b42f1f8b42290f7b7c6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@NoxIntranetSupportSI/Support/licenses.html.twig", 1);
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
        $__internal_d434969a4d29f998675f78466b7ad033aef355ea57d0c720dcbe99ab8e0cdc7e = $this->env->getExtension("native_profiler");
        $__internal_d434969a4d29f998675f78466b7ad033aef355ea57d0c720dcbe99ab8e0cdc7e->enter($__internal_d434969a4d29f998675f78466b7ad033aef355ea57d0c720dcbe99ab8e0cdc7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NoxIntranetSupportSI/Support/licenses.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d434969a4d29f998675f78466b7ad033aef355ea57d0c720dcbe99ab8e0cdc7e->leave($__internal_d434969a4d29f998675f78466b7ad033aef355ea57d0c720dcbe99ab8e0cdc7e_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_2438e009ac113793653fc5ff02fccf2bc024b2a92e264826e469b3f477392cfd = $this->env->getExtension("native_profiler");
        $__internal_2438e009ac113793653fc5ff02fccf2bc024b2a92e264826e469b3f477392cfd->enter($__internal_2438e009ac113793653fc5ff02fccf2bc024b2a92e264826e469b3f477392cfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Licences ";
        
        $__internal_2438e009ac113793653fc5ff02fccf2bc024b2a92e264826e469b3f477392cfd->leave($__internal_2438e009ac113793653fc5ff02fccf2bc024b2a92e264826e469b3f477392cfd_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_464f01f8933ba711aa34d7168b8f2ba423c07aa9074d12f1d711f0772d5f03fa = $this->env->getExtension("native_profiler");
        $__internal_464f01f8933ba711aa34d7168b8f2ba423c07aa9074d12f1d711f0772d5f03fa->enter($__internal_464f01f8933ba711aa34d7168b8f2ba423c07aa9074d12f1d711f0772d5f03fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Licences";
        
        $__internal_464f01f8933ba711aa34d7168b8f2ba423c07aa9074d12f1d711f0772d5f03fa->leave($__internal_464f01f8933ba711aa34d7168b8f2ba423c07aa9074d12f1d711f0772d5f03fa_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_4c850ecb3c12b39baaaa8073fd07e3be408f43baacaebabf96e3878ac379aa66 = $this->env->getExtension("native_profiler");
        $__internal_4c850ecb3c12b39baaaa8073fd07e3be408f43baacaebabf96e3878ac379aa66->enter($__internal_4c850ecb3c12b39baaaa8073fd07e3be408f43baacaebabf96e3878ac379aa66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 8
        echo "
    <div id=\"DivIframeLicences\">
        <iframe id='licencesIframe' src=\"http://192.168.69.11:7019/EasyAdmin2/#{'include_obsolete':false,'server':'','vendor':'','license_type':[],'additional_key':'','feature':[],'products':[],'timeformat':'dd/mm/yyyy hh:mm:ss','timezone':'W. Europe Standard Time','module':'ea-licenses','windowSize':{'width':932,'height':600,'maximized':false}}\"></iframe>
    </div>

";
        
        $__internal_4c850ecb3c12b39baaaa8073fd07e3be408f43baacaebabf96e3878ac379aa66->leave($__internal_4c850ecb3c12b39baaaa8073fd07e3be408f43baacaebabf96e3878ac379aa66_prof);

    }

    public function getTemplateName()
    {
        return "@NoxIntranetSupportSI/Support/licenses.html.twig";
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
