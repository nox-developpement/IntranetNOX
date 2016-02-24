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
        $__internal_f5110d25e230313aa8a5e544695a9254c24f718d310b76cebb77c0b42650391f = $this->env->getExtension("native_profiler");
        $__internal_f5110d25e230313aa8a5e544695a9254c24f718d310b76cebb77c0b42650391f->enter($__internal_f5110d25e230313aa8a5e544695a9254c24f718d310b76cebb77c0b42650391f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NoxIntranetSupportSI/Support/licenses.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5110d25e230313aa8a5e544695a9254c24f718d310b76cebb77c0b42650391f->leave($__internal_f5110d25e230313aa8a5e544695a9254c24f718d310b76cebb77c0b42650391f_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_6e4d7d7943ec734333f9b48d3b5bacc6d8b05e7ee64290b57d6ce0c6c221c1bb = $this->env->getExtension("native_profiler");
        $__internal_6e4d7d7943ec734333f9b48d3b5bacc6d8b05e7ee64290b57d6ce0c6c221c1bb->enter($__internal_6e4d7d7943ec734333f9b48d3b5bacc6d8b05e7ee64290b57d6ce0c6c221c1bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Licences ";
        
        $__internal_6e4d7d7943ec734333f9b48d3b5bacc6d8b05e7ee64290b57d6ce0c6c221c1bb->leave($__internal_6e4d7d7943ec734333f9b48d3b5bacc6d8b05e7ee64290b57d6ce0c6c221c1bb_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_0184f6a5facd96b3741db380adbef368f5920aaf533a234f060ef155be5ef41a = $this->env->getExtension("native_profiler");
        $__internal_0184f6a5facd96b3741db380adbef368f5920aaf533a234f060ef155be5ef41a->enter($__internal_0184f6a5facd96b3741db380adbef368f5920aaf533a234f060ef155be5ef41a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Licences";
        
        $__internal_0184f6a5facd96b3741db380adbef368f5920aaf533a234f060ef155be5ef41a->leave($__internal_0184f6a5facd96b3741db380adbef368f5920aaf533a234f060ef155be5ef41a_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_22778a17e7c7303678b13092557530e1b63dd320257a7dd27acc8ccb4c7eaf20 = $this->env->getExtension("native_profiler");
        $__internal_22778a17e7c7303678b13092557530e1b63dd320257a7dd27acc8ccb4c7eaf20->enter($__internal_22778a17e7c7303678b13092557530e1b63dd320257a7dd27acc8ccb4c7eaf20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 8
        echo "
    <div id=\"DivIframeLicences\">
        <iframe id='licencesIframe' src=\"http://192.168.69.11:7019/EasyAdmin2/#{'include_obsolete':false,'server':'','vendor':'','license_type':[],'additional_key':'','feature':[],'products':[],'timeformat':'dd/mm/yyyy hh:mm:ss','timezone':'W. Europe Standard Time','module':'ea-licenses','windowSize':{'width':932,'height':600,'maximized':false}}\"></iframe>
    </div>

";
        
        $__internal_22778a17e7c7303678b13092557530e1b63dd320257a7dd27acc8ccb4c7eaf20->leave($__internal_22778a17e7c7303678b13092557530e1b63dd320257a7dd27acc8ccb4c7eaf20_prof);

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
