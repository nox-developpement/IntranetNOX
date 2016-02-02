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
        $__internal_a819b5ec51a1ffea347c5b5d0adc6f2b7b3dab77479812758c873b935d71fcd9 = $this->env->getExtension("native_profiler");
        $__internal_a819b5ec51a1ffea347c5b5d0adc6f2b7b3dab77479812758c873b935d71fcd9->enter($__internal_a819b5ec51a1ffea347c5b5d0adc6f2b7b3dab77479812758c873b935d71fcd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetCommunicationBundle:Marketing:communicationMarketing.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a819b5ec51a1ffea347c5b5d0adc6f2b7b3dab77479812758c873b935d71fcd9->leave($__internal_a819b5ec51a1ffea347c5b5d0adc6f2b7b3dab77479812758c873b935d71fcd9_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_146c6e38d42de2416c63eebecc9276de689f76d06ad9952561f41b6e85606ec7 = $this->env->getExtension("native_profiler");
        $__internal_146c6e38d42de2416c63eebecc9276de689f76d06ad9952561f41b6e85606ec7->enter($__internal_146c6e38d42de2416c63eebecc9276de689f76d06ad9952561f41b6e85606ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Communication marketing
";
        
        $__internal_146c6e38d42de2416c63eebecc9276de689f76d06ad9952561f41b6e85606ec7->leave($__internal_146c6e38d42de2416c63eebecc9276de689f76d06ad9952561f41b6e85606ec7_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_da51756065c3499ca17fa7abe5e5867fece2d152d11217bd54aa76b0bc82bf29 = $this->env->getExtension("native_profiler");
        $__internal_da51756065c3499ca17fa7abe5e5867fece2d152d11217bd54aa76b0bc82bf29->enter($__internal_da51756065c3499ca17fa7abe5e5867fece2d152d11217bd54aa76b0bc82bf29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Communication marketing";
        
        $__internal_da51756065c3499ca17fa7abe5e5867fece2d152d11217bd54aa76b0bc82bf29->leave($__internal_da51756065c3499ca17fa7abe5e5867fece2d152d11217bd54aa76b0bc82bf29_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_e011c193ad61488c8afd9630745430408df5fc998ec49d9b1d607e2c38cbc5ab = $this->env->getExtension("native_profiler");
        $__internal_e011c193ad61488c8afd9630745430408df5fc998ec49d9b1d607e2c38cbc5ab->enter($__internal_e011c193ad61488c8afd9630745430408df5fc998ec49d9b1d607e2c38cbc5ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        
        $__internal_e011c193ad61488c8afd9630745430408df5fc998ec49d9b1d607e2c38cbc5ab->leave($__internal_e011c193ad61488c8afd9630745430408df5fc998ec49d9b1d607e2c38cbc5ab_prof);

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
