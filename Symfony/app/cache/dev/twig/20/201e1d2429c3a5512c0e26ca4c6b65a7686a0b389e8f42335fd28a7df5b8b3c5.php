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
        $__internal_f2fccc38b7d7485f3daad7d7c5be9008d83e52596f12844c683e3a72cbad64c8 = $this->env->getExtension("native_profiler");
        $__internal_f2fccc38b7d7485f3daad7d7c5be9008d83e52596f12844c683e3a72cbad64c8->enter($__internal_f2fccc38b7d7485f3daad7d7c5be9008d83e52596f12844c683e3a72cbad64c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetAdministrationBundle:AdministrationNews:administrationNews.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2fccc38b7d7485f3daad7d7c5be9008d83e52596f12844c683e3a72cbad64c8->leave($__internal_f2fccc38b7d7485f3daad7d7c5be9008d83e52596f12844c683e3a72cbad64c8_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_55506aa4a423ec24100b4e791c2022fb4e1ed7387bd337ac629460315e03182d = $this->env->getExtension("native_profiler");
        $__internal_55506aa4a423ec24100b4e791c2022fb4e1ed7387bd337ac629460315e03182d->enter($__internal_55506aa4a423ec24100b4e791c2022fb4e1ed7387bd337ac629460315e03182d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Administration news SI
";
        
        $__internal_55506aa4a423ec24100b4e791c2022fb4e1ed7387bd337ac629460315e03182d->leave($__internal_55506aa4a423ec24100b4e791c2022fb4e1ed7387bd337ac629460315e03182d_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_e0d075c398197749b9ec3fe26e2b08aa82423960211858b7fdee35fe5e20664f = $this->env->getExtension("native_profiler");
        $__internal_e0d075c398197749b9ec3fe26e2b08aa82423960211858b7fdee35fe5e20664f->enter($__internal_e0d075c398197749b9ec3fe26e2b08aa82423960211858b7fdee35fe5e20664f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Administration news SI";
        
        $__internal_e0d075c398197749b9ec3fe26e2b08aa82423960211858b7fdee35fe5e20664f->leave($__internal_e0d075c398197749b9ec3fe26e2b08aa82423960211858b7fdee35fe5e20664f_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_4f20f3b6916685873fbb422179514c0211043441f7d7ca6e31dbb50375db2434 = $this->env->getExtension("native_profiler");
        $__internal_4f20f3b6916685873fbb422179514c0211043441f7d7ca6e31dbb50375db2434->enter($__internal_4f20f3b6916685873fbb422179514c0211043441f7d7ca6e31dbb50375db2434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 10
        echo "
    <div class=\"iconContener\">

        <div id=\"menuAdminNewsSI\" class='menuAdmin'>
            <h3> Interface de gestion de contenu </h3>
            <h3> <a href=\"#\"> Ouvrir le gestionnaire de fichier </a> </h3>
        </div>

    </div>


";
        
        $__internal_4f20f3b6916685873fbb422179514c0211043441f7d7ca6e31dbb50375db2434->leave($__internal_4f20f3b6916685873fbb422179514c0211043441f7d7ca6e31dbb50375db2434_prof);

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
/*             <h3> <a href="#"> Ouvrir le gestionnaire de fichier </a> </h3>*/
/*         </div>*/
/* */
/*     </div>*/
/* */
/* */
/* {% endblock %}*/
/* {# empty Twig template #}*/
/* */
