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
        $__internal_c055967026526e30556a6ed08255e7579585188d0ccdf7c0be5907dd90dd2f9f = $this->env->getExtension("native_profiler");
        $__internal_c055967026526e30556a6ed08255e7579585188d0ccdf7c0be5907dd90dd2f9f->enter($__internal_c055967026526e30556a6ed08255e7579585188d0ccdf7c0be5907dd90dd2f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetAdministrationBundle:AdministrationNews:administrationNews.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c055967026526e30556a6ed08255e7579585188d0ccdf7c0be5907dd90dd2f9f->leave($__internal_c055967026526e30556a6ed08255e7579585188d0ccdf7c0be5907dd90dd2f9f_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_28a67d29176125ebb173ba69629a33371e0f810a50c96c1b747d069b7432fb2b = $this->env->getExtension("native_profiler");
        $__internal_28a67d29176125ebb173ba69629a33371e0f810a50c96c1b747d069b7432fb2b->enter($__internal_28a67d29176125ebb173ba69629a33371e0f810a50c96c1b747d069b7432fb2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Administration news SI
";
        
        $__internal_28a67d29176125ebb173ba69629a33371e0f810a50c96c1b747d069b7432fb2b->leave($__internal_28a67d29176125ebb173ba69629a33371e0f810a50c96c1b747d069b7432fb2b_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_fefcc43061735f22a338798681e6c17688541129fadc35c2167d48a962244a24 = $this->env->getExtension("native_profiler");
        $__internal_fefcc43061735f22a338798681e6c17688541129fadc35c2167d48a962244a24->enter($__internal_fefcc43061735f22a338798681e6c17688541129fadc35c2167d48a962244a24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Administration news SI";
        
        $__internal_fefcc43061735f22a338798681e6c17688541129fadc35c2167d48a962244a24->leave($__internal_fefcc43061735f22a338798681e6c17688541129fadc35c2167d48a962244a24_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_6aedeaa37a6f7f5f30413fd27640e26c318dd2e7c4209dba2c88d1100c192742 = $this->env->getExtension("native_profiler");
        $__internal_6aedeaa37a6f7f5f30413fd27640e26c318dd2e7c4209dba2c88d1100c192742->enter($__internal_6aedeaa37a6f7f5f30413fd27640e26c318dd2e7c4209dba2c88d1100c192742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 10
        echo "
    <div class=\"iconContener\">

        <div id=\"menuAdminNewsSI\" class='menuAdmin'>
            <h3> Interface de gestion de contenu </h3>
            <a onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/newsSI', 'Gestionnaire de fichiers - News SI');\"> 
                <h3>  Ouvrir le gestionnaire de fichier </h3> 
            </a>
        </div>

    </div>


";
        
        $__internal_6aedeaa37a6f7f5f30413fd27640e26c318dd2e7c4209dba2c88d1100c192742->leave($__internal_6aedeaa37a6f7f5f30413fd27640e26c318dd2e7c4209dba2c88d1100c192742_prof);

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
/*             <a onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/newsSI', 'Gestionnaire de fichiers - News SI');"> */
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
