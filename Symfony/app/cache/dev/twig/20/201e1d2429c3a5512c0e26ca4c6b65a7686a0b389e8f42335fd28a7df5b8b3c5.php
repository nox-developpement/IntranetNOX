<?php

/* NoxIntranetAdministrationBundle:AdministrationNews:administrationNews.html.twig */
class __TwigTemplate_e072262fb0242d999364c86336f2eb49e29549b2e07afb6b5bc60e93fc362232 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetAdministrationBundle:AdministrationNews:administrationNews.html.twig", 1);
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
        $__internal_6425cb0889b3b7875339d1d353dde0670e9f78cad331915033863ed1ce575bb6 = $this->env->getExtension("native_profiler");
        $__internal_6425cb0889b3b7875339d1d353dde0670e9f78cad331915033863ed1ce575bb6->enter($__internal_6425cb0889b3b7875339d1d353dde0670e9f78cad331915033863ed1ce575bb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetAdministrationBundle:AdministrationNews:administrationNews.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6425cb0889b3b7875339d1d353dde0670e9f78cad331915033863ed1ce575bb6->leave($__internal_6425cb0889b3b7875339d1d353dde0670e9f78cad331915033863ed1ce575bb6_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_0bb0619598c77d8a103bf3ff049199ae64ede874aa6acfeae8ae78a57e2b28bd = $this->env->getExtension("native_profiler");
        $__internal_0bb0619598c77d8a103bf3ff049199ae64ede874aa6acfeae8ae78a57e2b28bd->enter($__internal_0bb0619598c77d8a103bf3ff049199ae64ede874aa6acfeae8ae78a57e2b28bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Administration news SI
";
        
        $__internal_0bb0619598c77d8a103bf3ff049199ae64ede874aa6acfeae8ae78a57e2b28bd->leave($__internal_0bb0619598c77d8a103bf3ff049199ae64ede874aa6acfeae8ae78a57e2b28bd_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_b66ab7859a7ebb535048de6fd99ff70ed039602a7be8a6dbea30d8168193357b = $this->env->getExtension("native_profiler");
        $__internal_b66ab7859a7ebb535048de6fd99ff70ed039602a7be8a6dbea30d8168193357b->enter($__internal_b66ab7859a7ebb535048de6fd99ff70ed039602a7be8a6dbea30d8168193357b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Administration news SI";
        
        $__internal_b66ab7859a7ebb535048de6fd99ff70ed039602a7be8a6dbea30d8168193357b->leave($__internal_b66ab7859a7ebb535048de6fd99ff70ed039602a7be8a6dbea30d8168193357b_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_de0c3221cc0798127c6249ac7009ee6493ccf5bc847d0822d002e73341f61699 = $this->env->getExtension("native_profiler");
        $__internal_de0c3221cc0798127c6249ac7009ee6493ccf5bc847d0822d002e73341f61699->enter($__internal_de0c3221cc0798127c6249ac7009ee6493ccf5bc847d0822d002e73341f61699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 10
        echo "
    <div class=\"iconContener\">

        <div id=\"menuAdminNewsSI\" class='menuAdmin'>
            <h3> Interface de gestion de contenu </h3>
            <a onclick=\"openFichiersPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/newsSI', 'Gestionnaire de fichiers - News SI');\"> 
                <h3>  Ouvrir le gestionnaire de fichier </h3> 
            </a>
        </div>

    </div>


";
        
        $__internal_de0c3221cc0798127c6249ac7009ee6493ccf5bc847d0822d002e73341f61699->leave($__internal_de0c3221cc0798127c6249ac7009ee6493ccf5bc847d0822d002e73341f61699_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetAdministrationBundle:AdministrationNews:administrationNews.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 10,  62 => 9,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %}*/
/*     Administration news SI*/
/* {% endblock %}*/
/* */
/* {% block messageAccueil %}Administration news SI{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     <div class="iconContener">*/
/* */
/*         <div id="menuAdminNewsSI" class='menuAdmin'>*/
/*             <h3> Interface de gestion de contenu </h3>*/
/*             <a onclick="openFichiersPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/newsSI', 'Gestionnaire de fichiers - News SI');"> */
/*                 <h3>  Ouvrir le gestionnaire de fichier </h3> */
/*             </a>*/
/*         </div>*/
/* */
/*     </div>*/
/* */
/* */
/* {% endblock %}*/
/* {# empty Twig template #}*/
/* */
