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
        $__internal_d8db8ff7c6cd2f41d406ccacdc10d6df797e0c1b67dd5284e6c90f3c28f17032 = $this->env->getExtension("native_profiler");
        $__internal_d8db8ff7c6cd2f41d406ccacdc10d6df797e0c1b67dd5284e6c90f3c28f17032->enter($__internal_d8db8ff7c6cd2f41d406ccacdc10d6df797e0c1b67dd5284e6c90f3c28f17032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetCommunicationBundle:Marketing:communicationMarketing.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8db8ff7c6cd2f41d406ccacdc10d6df797e0c1b67dd5284e6c90f3c28f17032->leave($__internal_d8db8ff7c6cd2f41d406ccacdc10d6df797e0c1b67dd5284e6c90f3c28f17032_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_4e12fe18ecc32f13cc31d0e1b1cdc11894d1ee4b3b40b3b0ef09a62737aba949 = $this->env->getExtension("native_profiler");
        $__internal_4e12fe18ecc32f13cc31d0e1b1cdc11894d1ee4b3b40b3b0ef09a62737aba949->enter($__internal_4e12fe18ecc32f13cc31d0e1b1cdc11894d1ee4b3b40b3b0ef09a62737aba949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Communication marketing
";
        
        $__internal_4e12fe18ecc32f13cc31d0e1b1cdc11894d1ee4b3b40b3b0ef09a62737aba949->leave($__internal_4e12fe18ecc32f13cc31d0e1b1cdc11894d1ee4b3b40b3b0ef09a62737aba949_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_259ffe7838f2947335ef4fac98e74864ea89653e21c382c9a90463fd5f033f83 = $this->env->getExtension("native_profiler");
        $__internal_259ffe7838f2947335ef4fac98e74864ea89653e21c382c9a90463fd5f033f83->enter($__internal_259ffe7838f2947335ef4fac98e74864ea89653e21c382c9a90463fd5f033f83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Communication marketing";
        
        $__internal_259ffe7838f2947335ef4fac98e74864ea89653e21c382c9a90463fd5f033f83->leave($__internal_259ffe7838f2947335ef4fac98e74864ea89653e21c382c9a90463fd5f033f83_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_68544a03ae3fe525ed8207b20a579764ea24eeb17e6ed51c5efb574047d80c35 = $this->env->getExtension("native_profiler");
        $__internal_68544a03ae3fe525ed8207b20a579764ea24eeb17e6ed51c5efb574047d80c35->enter($__internal_68544a03ae3fe525ed8207b20a579764ea24eeb17e6ed51c5efb574047d80c35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        
        $__internal_68544a03ae3fe525ed8207b20a579764ea24eeb17e6ed51c5efb574047d80c35->leave($__internal_68544a03ae3fe525ed8207b20a579764ea24eeb17e6ed51c5efb574047d80c35_prof);

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
