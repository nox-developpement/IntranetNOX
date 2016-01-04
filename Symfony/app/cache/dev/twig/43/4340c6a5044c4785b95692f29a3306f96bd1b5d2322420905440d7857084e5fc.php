<?php

/* NoxIntranetCommunicationBundle:Marketing:communicationMarketing.html.twig */
class __TwigTemplate_7e632fede14a81d5b69cb06b5478384d1b1eabb471bf05049614f070b80b38b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetCommunicationBundle:Marketing:communicationMarketing.html.twig", 1);
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
        $__internal_9b5bc9741dd9752434be1c98e9fae826df5c07741b11ebe8c880001d03e77913 = $this->env->getExtension("native_profiler");
        $__internal_9b5bc9741dd9752434be1c98e9fae826df5c07741b11ebe8c880001d03e77913->enter($__internal_9b5bc9741dd9752434be1c98e9fae826df5c07741b11ebe8c880001d03e77913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetCommunicationBundle:Marketing:communicationMarketing.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b5bc9741dd9752434be1c98e9fae826df5c07741b11ebe8c880001d03e77913->leave($__internal_9b5bc9741dd9752434be1c98e9fae826df5c07741b11ebe8c880001d03e77913_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_5d8025176eb57ebc7a1774e2fc79bb573044ffa727e1369085cd0fc4065d3294 = $this->env->getExtension("native_profiler");
        $__internal_5d8025176eb57ebc7a1774e2fc79bb573044ffa727e1369085cd0fc4065d3294->enter($__internal_5d8025176eb57ebc7a1774e2fc79bb573044ffa727e1369085cd0fc4065d3294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Communication marketing
";
        
        $__internal_5d8025176eb57ebc7a1774e2fc79bb573044ffa727e1369085cd0fc4065d3294->leave($__internal_5d8025176eb57ebc7a1774e2fc79bb573044ffa727e1369085cd0fc4065d3294_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_c5cc6d7b7dd5a4e11aa3341cd97856a3576bfc57f880c4a49075d362e9589701 = $this->env->getExtension("native_profiler");
        $__internal_c5cc6d7b7dd5a4e11aa3341cd97856a3576bfc57f880c4a49075d362e9589701->enter($__internal_c5cc6d7b7dd5a4e11aa3341cd97856a3576bfc57f880c4a49075d362e9589701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Communication marketing";
        
        $__internal_c5cc6d7b7dd5a4e11aa3341cd97856a3576bfc57f880c4a49075d362e9589701->leave($__internal_c5cc6d7b7dd5a4e11aa3341cd97856a3576bfc57f880c4a49075d362e9589701_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_558ca79066a7939d3b2488f425ceb9be51c49421a514c73436263be3972e20c8 = $this->env->getExtension("native_profiler");
        $__internal_558ca79066a7939d3b2488f425ceb9be51c49421a514c73436263be3972e20c8->enter($__internal_558ca79066a7939d3b2488f425ceb9be51c49421a514c73436263be3972e20c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 10
        echo "
    <div class=\"sousMessageAcceuil\"> 
        <h4 onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/noxALaConqueteLecture', 'Nox à la conquête');\"> Nox à la conquête </h4>
    </div>
    
    <div class=\"sousMessageAcceuil\"> 
        <h4 onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/ilYAForcementPlusSimpleLecture', 'Il y a forcément plus simple');\"> Il y a forcément plus simple </h4>
    </div>
    
    <div class=\"sousMessageAcceuil\"> 
        <h4 onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/noxFournisseurDeTalentsLecture', 'Nox fournisseur de talents');\"> Nox fournisseur de talents </h4>
    </div>
    
    <div class=\"sousMessageAcceuil\"> 
        <h4 onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/nos5ValeursLecture', 'Nos 5 valeurs');\"> Nos 5 valeurs </h4>
    </div>

";
        
        $__internal_558ca79066a7939d3b2488f425ceb9be51c49421a514c73436263be3972e20c8->leave($__internal_558ca79066a7939d3b2488f425ceb9be51c49421a514c73436263be3972e20c8_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetCommunicationBundle:Marketing:communicationMarketing.html.twig";
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
/*     Communication marketing*/
/* {% endblock %}*/
/* */
/* {% block messageAccueil %}Communication marketing{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     <div class="sousMessageAcceuil"> */
/*         <h4 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/noxALaConqueteLecture', 'Nox à la conquête');"> Nox à la conquête </h4>*/
/*     </div>*/
/*     */
/*     <div class="sousMessageAcceuil"> */
/*         <h4 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/ilYAForcementPlusSimpleLecture', 'Il y a forcément plus simple');"> Il y a forcément plus simple </h4>*/
/*     </div>*/
/*     */
/*     <div class="sousMessageAcceuil"> */
/*         <h4 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/noxFournisseurDeTalentsLecture', 'Nox fournisseur de talents');"> Nox fournisseur de talents </h4>*/
/*     </div>*/
/*     */
/*     <div class="sousMessageAcceuil"> */
/*         <h4 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/nos5ValeursLecture', 'Nos 5 valeurs');"> Nos 5 valeurs </h4>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
/* {# empty Twig template #}*/
/* */
