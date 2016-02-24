<?php

/* @NoxIntranetAdministration/AdministrationNews/administrationNews.html.twig */
class __TwigTemplate_c094d9aa0455de6097fde67883e1016c4bceb3439a32c5d967cb66bff50a8052 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@NoxIntranetAdministration/AdministrationNews/administrationNews.html.twig", 1);
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
        $__internal_ddae152694131942f2d80616d38a55ffad1f49ee874291a961620d19b63e0821 = $this->env->getExtension("native_profiler");
        $__internal_ddae152694131942f2d80616d38a55ffad1f49ee874291a961620d19b63e0821->enter($__internal_ddae152694131942f2d80616d38a55ffad1f49ee874291a961620d19b63e0821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NoxIntranetAdministration/AdministrationNews/administrationNews.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ddae152694131942f2d80616d38a55ffad1f49ee874291a961620d19b63e0821->leave($__internal_ddae152694131942f2d80616d38a55ffad1f49ee874291a961620d19b63e0821_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_98a0aadde826ca7a4d85b8ee597b7482a5431219f864eb131d6ebdad73911fc2 = $this->env->getExtension("native_profiler");
        $__internal_98a0aadde826ca7a4d85b8ee597b7482a5431219f864eb131d6ebdad73911fc2->enter($__internal_98a0aadde826ca7a4d85b8ee597b7482a5431219f864eb131d6ebdad73911fc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Administration news SI
";
        
        $__internal_98a0aadde826ca7a4d85b8ee597b7482a5431219f864eb131d6ebdad73911fc2->leave($__internal_98a0aadde826ca7a4d85b8ee597b7482a5431219f864eb131d6ebdad73911fc2_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_04c0ef8f4fdec43da517cf41e5498e30ef334ddfc921486cae5477a873e8cfd7 = $this->env->getExtension("native_profiler");
        $__internal_04c0ef8f4fdec43da517cf41e5498e30ef334ddfc921486cae5477a873e8cfd7->enter($__internal_04c0ef8f4fdec43da517cf41e5498e30ef334ddfc921486cae5477a873e8cfd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Administration news SI";
        
        $__internal_04c0ef8f4fdec43da517cf41e5498e30ef334ddfc921486cae5477a873e8cfd7->leave($__internal_04c0ef8f4fdec43da517cf41e5498e30ef334ddfc921486cae5477a873e8cfd7_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_76b20751336e9443d27da54128308814a2b20237b911d1621c60ed0b39371136 = $this->env->getExtension("native_profiler");
        $__internal_76b20751336e9443d27da54128308814a2b20237b911d1621c60ed0b39371136->enter($__internal_76b20751336e9443d27da54128308814a2b20237b911d1621c60ed0b39371136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        
        $__internal_76b20751336e9443d27da54128308814a2b20237b911d1621c60ed0b39371136->leave($__internal_76b20751336e9443d27da54128308814a2b20237b911d1621c60ed0b39371136_prof);

    }

    public function getTemplateName()
    {
        return "@NoxIntranetAdministration/AdministrationNews/administrationNews.html.twig";
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
