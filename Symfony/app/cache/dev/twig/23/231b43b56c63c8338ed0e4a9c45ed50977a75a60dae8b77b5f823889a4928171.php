<?php

/* NoxIntranetAdministrationBundle:AdministrationCommunication:communicationMarketing.html.twig */
class __TwigTemplate_8c7541131d25aab14920720e4d1537579d73e4eeb731e702c7310d162af27f17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetAdministrationBundle:AdministrationCommunication:communicationMarketing.html.twig", 1);
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
        $__internal_3aec4ff59f6580624999143184457a495883650fcbf9319e1fef5d669a48b0ab = $this->env->getExtension("native_profiler");
        $__internal_3aec4ff59f6580624999143184457a495883650fcbf9319e1fef5d669a48b0ab->enter($__internal_3aec4ff59f6580624999143184457a495883650fcbf9319e1fef5d669a48b0ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetAdministrationBundle:AdministrationCommunication:communicationMarketing.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3aec4ff59f6580624999143184457a495883650fcbf9319e1fef5d669a48b0ab->leave($__internal_3aec4ff59f6580624999143184457a495883650fcbf9319e1fef5d669a48b0ab_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_40dc8af9906ca0b5adde330a82bb60683ddc194640bd7ff405128fddcf6e2216 = $this->env->getExtension("native_profiler");
        $__internal_40dc8af9906ca0b5adde330a82bb60683ddc194640bd7ff405128fddcf6e2216->enter($__internal_40dc8af9906ca0b5adde330a82bb60683ddc194640bd7ff405128fddcf6e2216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Administration communication marketing
";
        
        $__internal_40dc8af9906ca0b5adde330a82bb60683ddc194640bd7ff405128fddcf6e2216->leave($__internal_40dc8af9906ca0b5adde330a82bb60683ddc194640bd7ff405128fddcf6e2216_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_60870dd388110352d4c0a50eb14bf07693095e8f413b422b2de286036f0d46e9 = $this->env->getExtension("native_profiler");
        $__internal_60870dd388110352d4c0a50eb14bf07693095e8f413b422b2de286036f0d46e9->enter($__internal_60870dd388110352d4c0a50eb14bf07693095e8f413b422b2de286036f0d46e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Administration communication marketing";
        
        $__internal_60870dd388110352d4c0a50eb14bf07693095e8f413b422b2de286036f0d46e9->leave($__internal_60870dd388110352d4c0a50eb14bf07693095e8f413b422b2de286036f0d46e9_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_8dbd1351893481cc7304a164f64140973c9e5d7c4725b896d3e5d43a42eb8ae5 = $this->env->getExtension("native_profiler");
        $__internal_8dbd1351893481cc7304a164f64140973c9e5d7c4725b896d3e5d43a42eb8ae5->enter($__internal_8dbd1351893481cc7304a164f64140973c9e5d7c4725b896d3e5d43a42eb8ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 10
        echo "
    <div class=\"sousMessageAcceuil\"> 
        <h4 onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/noxALaConquete', 'Nox à la conquête');\"> Nox à la conquête </h4>
    </div>
    
    <div class=\"sousMessageAcceuil\"> 
        <h4 onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/ilYAForcementPlusSimple', 'Il y a forcément plus simple');\"> Il y a forcément plus simple </h4>
    </div>
    
    <div class=\"sousMessageAcceuil\"> 
        <h4 onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/noxFournisseurDeTalents', 'Nox fournisseur de talents');\"> Nox fournisseur de talents </h4>
    </div>
    
    <div class=\"sousMessageAcceuil\"> 
        <h4 onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/nos5Valeurs', 'Nos 5 valeurs');\"> Nos 5 valeurs </h4>
    </div>

";
        
        $__internal_8dbd1351893481cc7304a164f64140973c9e5d7c4725b896d3e5d43a42eb8ae5->leave($__internal_8dbd1351893481cc7304a164f64140973c9e5d7c4725b896d3e5d43a42eb8ae5_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetAdministrationBundle:AdministrationCommunication:communicationMarketing.html.twig";
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
/*     Administration communication marketing*/
/* {% endblock %}*/
/* */
/* {% block messageAccueil %}Administration communication marketing{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     <div class="sousMessageAcceuil"> */
/*         <h4 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/noxALaConquete', 'Nox à la conquête');"> Nox à la conquête </h4>*/
/*     </div>*/
/*     */
/*     <div class="sousMessageAcceuil"> */
/*         <h4 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/ilYAForcementPlusSimple', 'Il y a forcément plus simple');"> Il y a forcément plus simple </h4>*/
/*     </div>*/
/*     */
/*     <div class="sousMessageAcceuil"> */
/*         <h4 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/noxFournisseurDeTalents', 'Nox fournisseur de talents');"> Nox fournisseur de talents </h4>*/
/*     </div>*/
/*     */
/*     <div class="sousMessageAcceuil"> */
/*         <h4 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/nos5Valeurs', 'Nos 5 valeurs');"> Nos 5 valeurs </h4>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
/* */
