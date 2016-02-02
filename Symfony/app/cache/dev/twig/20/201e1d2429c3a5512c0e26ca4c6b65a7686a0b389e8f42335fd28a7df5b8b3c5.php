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
        $__internal_0f6b9a3d278a8ef9ead236a12c9de06141ad019a87619145a93a1ed3baff1b71 = $this->env->getExtension("native_profiler");
        $__internal_0f6b9a3d278a8ef9ead236a12c9de06141ad019a87619145a93a1ed3baff1b71->enter($__internal_0f6b9a3d278a8ef9ead236a12c9de06141ad019a87619145a93a1ed3baff1b71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetAdministrationBundle:AdministrationNews:administrationNews.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f6b9a3d278a8ef9ead236a12c9de06141ad019a87619145a93a1ed3baff1b71->leave($__internal_0f6b9a3d278a8ef9ead236a12c9de06141ad019a87619145a93a1ed3baff1b71_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_d3a4d0127882a43c469a273db661486980c81077c7fd8884ad8b3c5962801697 = $this->env->getExtension("native_profiler");
        $__internal_d3a4d0127882a43c469a273db661486980c81077c7fd8884ad8b3c5962801697->enter($__internal_d3a4d0127882a43c469a273db661486980c81077c7fd8884ad8b3c5962801697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Administration news SI
";
        
        $__internal_d3a4d0127882a43c469a273db661486980c81077c7fd8884ad8b3c5962801697->leave($__internal_d3a4d0127882a43c469a273db661486980c81077c7fd8884ad8b3c5962801697_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_afb3f4df8bca4ffdf6f6478e6bbbdb5d66ca26048a91b270d76a1ed924878761 = $this->env->getExtension("native_profiler");
        $__internal_afb3f4df8bca4ffdf6f6478e6bbbdb5d66ca26048a91b270d76a1ed924878761->enter($__internal_afb3f4df8bca4ffdf6f6478e6bbbdb5d66ca26048a91b270d76a1ed924878761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Administration news SI";
        
        $__internal_afb3f4df8bca4ffdf6f6478e6bbbdb5d66ca26048a91b270d76a1ed924878761->leave($__internal_afb3f4df8bca4ffdf6f6478e6bbbdb5d66ca26048a91b270d76a1ed924878761_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_6d48dc6985c5c6d6dfee1c7b11baf25e2d34b52e21efedf493bcadb80709c41c = $this->env->getExtension("native_profiler");
        $__internal_6d48dc6985c5c6d6dfee1c7b11baf25e2d34b52e21efedf493bcadb80709c41c->enter($__internal_6d48dc6985c5c6d6dfee1c7b11baf25e2d34b52e21efedf493bcadb80709c41c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        
        $__internal_6d48dc6985c5c6d6dfee1c7b11baf25e2d34b52e21efedf493bcadb80709c41c->leave($__internal_6d48dc6985c5c6d6dfee1c7b11baf25e2d34b52e21efedf493bcadb80709c41c_prof);

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
