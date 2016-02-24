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
        $__internal_194d286be438dbd76baec25348c95a2cf3a984e07bd3c20a3b49d955a46412a3 = $this->env->getExtension("native_profiler");
        $__internal_194d286be438dbd76baec25348c95a2cf3a984e07bd3c20a3b49d955a46412a3->enter($__internal_194d286be438dbd76baec25348c95a2cf3a984e07bd3c20a3b49d955a46412a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NoxIntranetAdministration/AdministrationNews/administrationNews.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_194d286be438dbd76baec25348c95a2cf3a984e07bd3c20a3b49d955a46412a3->leave($__internal_194d286be438dbd76baec25348c95a2cf3a984e07bd3c20a3b49d955a46412a3_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_1787c98d4d89e0b363964e8555abce1adb4b5b30d3a51a2c5a0c1402bf4b3de4 = $this->env->getExtension("native_profiler");
        $__internal_1787c98d4d89e0b363964e8555abce1adb4b5b30d3a51a2c5a0c1402bf4b3de4->enter($__internal_1787c98d4d89e0b363964e8555abce1adb4b5b30d3a51a2c5a0c1402bf4b3de4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Administration news SI
";
        
        $__internal_1787c98d4d89e0b363964e8555abce1adb4b5b30d3a51a2c5a0c1402bf4b3de4->leave($__internal_1787c98d4d89e0b363964e8555abce1adb4b5b30d3a51a2c5a0c1402bf4b3de4_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_77b941ba2d10e032956a7108693180f74592cf3882ddb849091aa9f3759a8bce = $this->env->getExtension("native_profiler");
        $__internal_77b941ba2d10e032956a7108693180f74592cf3882ddb849091aa9f3759a8bce->enter($__internal_77b941ba2d10e032956a7108693180f74592cf3882ddb849091aa9f3759a8bce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Administration news SI";
        
        $__internal_77b941ba2d10e032956a7108693180f74592cf3882ddb849091aa9f3759a8bce->leave($__internal_77b941ba2d10e032956a7108693180f74592cf3882ddb849091aa9f3759a8bce_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_3e3ba95b07b4b8e5f2a8e81054ef7fe78b6fd59c133636d0f243666624c7588b = $this->env->getExtension("native_profiler");
        $__internal_3e3ba95b07b4b8e5f2a8e81054ef7fe78b6fd59c133636d0f243666624c7588b->enter($__internal_3e3ba95b07b4b8e5f2a8e81054ef7fe78b6fd59c133636d0f243666624c7588b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        
        $__internal_3e3ba95b07b4b8e5f2a8e81054ef7fe78b6fd59c133636d0f243666624c7588b->leave($__internal_3e3ba95b07b4b8e5f2a8e81054ef7fe78b6fd59c133636d0f243666624c7588b_prof);

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
