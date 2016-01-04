<?php

/* NoxIntranetAdministrationBundle:Administration:administrationAdminMDP.html.twig */
class __TwigTemplate_b3608965087fdb09bfd9484808dac11aaf9bc6fd34c8c6bd6e64db79c8551983 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetAdministrationBundle:Administration:administrationAdminMDP.html.twig", 1);
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
        $__internal_893ee15f7335ba07a386e12cdc04c39a666c353e23f10dca2a8dd096e902376c = $this->env->getExtension("native_profiler");
        $__internal_893ee15f7335ba07a386e12cdc04c39a666c353e23f10dca2a8dd096e902376c->enter($__internal_893ee15f7335ba07a386e12cdc04c39a666c353e23f10dca2a8dd096e902376c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetAdministrationBundle:Administration:administrationAdminMDP.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_893ee15f7335ba07a386e12cdc04c39a666c353e23f10dca2a8dd096e902376c->leave($__internal_893ee15f7335ba07a386e12cdc04c39a666c353e23f10dca2a8dd096e902376c_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_be51e22eb67c25c0b561c3487842a70b618ca9074176ad5ef98edbfd3a9c5cfc = $this->env->getExtension("native_profiler");
        $__internal_be51e22eb67c25c0b561c3487842a70b618ca9074176ad5ef98edbfd3a9c5cfc->enter($__internal_be51e22eb67c25c0b561c3487842a70b618ca9074176ad5ef98edbfd3a9c5cfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo "Administration Mot de passe";
        
        $__internal_be51e22eb67c25c0b561c3487842a70b618ca9074176ad5ef98edbfd3a9c5cfc->leave($__internal_be51e22eb67c25c0b561c3487842a70b618ca9074176ad5ef98edbfd3a9c5cfc_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_0c27239100c28e87119303b56d057dae91952bcee7360a4b3dbba1d1040f2d50 = $this->env->getExtension("native_profiler");
        $__internal_0c27239100c28e87119303b56d057dae91952bcee7360a4b3dbba1d1040f2d50->enter($__internal_0c27239100c28e87119303b56d057dae91952bcee7360a4b3dbba1d1040f2d50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Changer de mot de passe";
        
        $__internal_0c27239100c28e87119303b56d057dae91952bcee7360a4b3dbba1d1040f2d50->leave($__internal_0c27239100c28e87119303b56d057dae91952bcee7360a4b3dbba1d1040f2d50_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_0441da9a1ed7c44b149d80e6edac8e98d9244b43ad81425979eefc2ecb2e08ce = $this->env->getExtension("native_profiler");
        $__internal_0441da9a1ed7c44b149d80e6edac8e98d9244b43ad81425979eefc2ecb2e08ce->enter($__internal_0441da9a1ed7c44b149d80e6edac8e98d9244b43ad81425979eefc2ecb2e08ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 8
        echo "
    <div id=\"formChangementMDP\">
        <form action='";
        // line 10
        echo $this->env->getExtension('routing')->getPath("nox_intranet_admin_mdp_check");
        echo "' >
            <label for='oldpassword'> Mot de passe actuel : </label>
            <input type='password' name='oldpassword'> <br> <br>
            <label for='newpassword'> Nouveau mot de passe : </label>
            <input type='password' name='newpassword'> <br> <br>
            <label for='newpasswordcheck'> Entrer à nouveau : </label>
            <input type='password' name='newpasswordcheck'> <br> <br>
            <p> <input type='submit' name='modifier' value='Modifier' class='boutonFormulaire' > </p>
        </form>
    </div>

";
        
        $__internal_0441da9a1ed7c44b149d80e6edac8e98d9244b43ad81425979eefc2ecb2e08ce->leave($__internal_0441da9a1ed7c44b149d80e6edac8e98d9244b43ad81425979eefc2ecb2e08ce_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetAdministrationBundle:Administration:administrationAdminMDP.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 10,  66 => 8,  60 => 7,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %}Administration Mot de passe{% endblock %}*/
/* */
/* {% block messageAccueil %}Changer de mot de passe{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     <div id="formChangementMDP">*/
/*         <form action='{{ path('nox_intranet_admin_mdp_check') }}' >*/
/*             <label for='oldpassword'> Mot de passe actuel : </label>*/
/*             <input type='password' name='oldpassword'> <br> <br>*/
/*             <label for='newpassword'> Nouveau mot de passe : </label>*/
/*             <input type='password' name='newpassword'> <br> <br>*/
/*             <label for='newpasswordcheck'> Entrer à nouveau : </label>*/
/*             <input type='password' name='newpasswordcheck'> <br> <br>*/
/*             <p> <input type='submit' name='modifier' value='Modifier' class='boutonFormulaire' > </p>*/
/*         </form>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* {# empty Twig template #}*/
/* {# empty Twig template #}*/
/* */
