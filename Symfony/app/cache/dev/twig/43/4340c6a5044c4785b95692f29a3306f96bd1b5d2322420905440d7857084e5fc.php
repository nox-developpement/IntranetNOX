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
        $__internal_080a1cfb160db6fb5aa1aad159c79f91429576a09803ddf8de14b7def915e420 = $this->env->getExtension("native_profiler");
        $__internal_080a1cfb160db6fb5aa1aad159c79f91429576a09803ddf8de14b7def915e420->enter($__internal_080a1cfb160db6fb5aa1aad159c79f91429576a09803ddf8de14b7def915e420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetCommunicationBundle:Marketing:communicationMarketing.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_080a1cfb160db6fb5aa1aad159c79f91429576a09803ddf8de14b7def915e420->leave($__internal_080a1cfb160db6fb5aa1aad159c79f91429576a09803ddf8de14b7def915e420_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_918b3fe034b8ddd94792b494f02f21cab66ecfb8f4503a0e2cad4b24be72c054 = $this->env->getExtension("native_profiler");
        $__internal_918b3fe034b8ddd94792b494f02f21cab66ecfb8f4503a0e2cad4b24be72c054->enter($__internal_918b3fe034b8ddd94792b494f02f21cab66ecfb8f4503a0e2cad4b24be72c054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Communication marketing
";
        
        $__internal_918b3fe034b8ddd94792b494f02f21cab66ecfb8f4503a0e2cad4b24be72c054->leave($__internal_918b3fe034b8ddd94792b494f02f21cab66ecfb8f4503a0e2cad4b24be72c054_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_e0d68129a96af1565bb2660aea1da79e5f2c6f27aaedd33f7b6eb04c122552de = $this->env->getExtension("native_profiler");
        $__internal_e0d68129a96af1565bb2660aea1da79e5f2c6f27aaedd33f7b6eb04c122552de->enter($__internal_e0d68129a96af1565bb2660aea1da79e5f2c6f27aaedd33f7b6eb04c122552de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Communication marketing";
        
        $__internal_e0d68129a96af1565bb2660aea1da79e5f2c6f27aaedd33f7b6eb04c122552de->leave($__internal_e0d68129a96af1565bb2660aea1da79e5f2c6f27aaedd33f7b6eb04c122552de_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_16b4f11d1dc629c9594c83d7b6766d6ecf75a0ae576f600866cb86e5e3ff7407 = $this->env->getExtension("native_profiler");
        $__internal_16b4f11d1dc629c9594c83d7b6766d6ecf75a0ae576f600866cb86e5e3ff7407->enter($__internal_16b4f11d1dc629c9594c83d7b6766d6ecf75a0ae576f600866cb86e5e3ff7407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        
        $__internal_16b4f11d1dc629c9594c83d7b6766d6ecf75a0ae576f600866cb86e5e3ff7407->leave($__internal_16b4f11d1dc629c9594c83d7b6766d6ecf75a0ae576f600866cb86e5e3ff7407_prof);

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
