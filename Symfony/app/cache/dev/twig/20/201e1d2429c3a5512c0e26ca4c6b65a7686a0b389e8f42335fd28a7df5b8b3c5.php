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
        $__internal_11d6afa6ee930fc2c0eab47027b980838172a166fe1b8a73f37e2e3ef2b8c59a = $this->env->getExtension("native_profiler");
        $__internal_11d6afa6ee930fc2c0eab47027b980838172a166fe1b8a73f37e2e3ef2b8c59a->enter($__internal_11d6afa6ee930fc2c0eab47027b980838172a166fe1b8a73f37e2e3ef2b8c59a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetAdministrationBundle:AdministrationNews:administrationNews.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11d6afa6ee930fc2c0eab47027b980838172a166fe1b8a73f37e2e3ef2b8c59a->leave($__internal_11d6afa6ee930fc2c0eab47027b980838172a166fe1b8a73f37e2e3ef2b8c59a_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_5e44abe48622db2c5a6cdfa9571433ae98b24d229a63802caf75a928b09654ed = $this->env->getExtension("native_profiler");
        $__internal_5e44abe48622db2c5a6cdfa9571433ae98b24d229a63802caf75a928b09654ed->enter($__internal_5e44abe48622db2c5a6cdfa9571433ae98b24d229a63802caf75a928b09654ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Administration news SI
";
        
        $__internal_5e44abe48622db2c5a6cdfa9571433ae98b24d229a63802caf75a928b09654ed->leave($__internal_5e44abe48622db2c5a6cdfa9571433ae98b24d229a63802caf75a928b09654ed_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_01b1e2e877cf052c74a79eb96dc4cfaf8e7e35b2c3fede2982dfaecfbffd49f3 = $this->env->getExtension("native_profiler");
        $__internal_01b1e2e877cf052c74a79eb96dc4cfaf8e7e35b2c3fede2982dfaecfbffd49f3->enter($__internal_01b1e2e877cf052c74a79eb96dc4cfaf8e7e35b2c3fede2982dfaecfbffd49f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Administration news SI";
        
        $__internal_01b1e2e877cf052c74a79eb96dc4cfaf8e7e35b2c3fede2982dfaecfbffd49f3->leave($__internal_01b1e2e877cf052c74a79eb96dc4cfaf8e7e35b2c3fede2982dfaecfbffd49f3_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_3e4fe4489ad038de589a786f0815b8d7914ec4a944a65f956b0cfd87436f6e2c = $this->env->getExtension("native_profiler");
        $__internal_3e4fe4489ad038de589a786f0815b8d7914ec4a944a65f956b0cfd87436f6e2c->enter($__internal_3e4fe4489ad038de589a786f0815b8d7914ec4a944a65f956b0cfd87436f6e2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        
        $__internal_3e4fe4489ad038de589a786f0815b8d7914ec4a944a65f956b0cfd87436f6e2c->leave($__internal_3e4fe4489ad038de589a786f0815b8d7914ec4a944a65f956b0cfd87436f6e2c_prof);

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
