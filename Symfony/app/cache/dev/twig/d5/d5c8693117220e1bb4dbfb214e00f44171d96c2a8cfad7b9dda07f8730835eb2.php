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
        $__internal_5ca1e9eba21005a930182f3366050792c0ec97cc35dad59103979c8d2e63fb68 = $this->env->getExtension("native_profiler");
        $__internal_5ca1e9eba21005a930182f3366050792c0ec97cc35dad59103979c8d2e63fb68->enter($__internal_5ca1e9eba21005a930182f3366050792c0ec97cc35dad59103979c8d2e63fb68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetAdministrationBundle:Administration:administrationAdminMDP.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ca1e9eba21005a930182f3366050792c0ec97cc35dad59103979c8d2e63fb68->leave($__internal_5ca1e9eba21005a930182f3366050792c0ec97cc35dad59103979c8d2e63fb68_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_17b51643b7b6f2197375eef71b339b35f398b194cae6ab84c8e8fb3ae40e4927 = $this->env->getExtension("native_profiler");
        $__internal_17b51643b7b6f2197375eef71b339b35f398b194cae6ab84c8e8fb3ae40e4927->enter($__internal_17b51643b7b6f2197375eef71b339b35f398b194cae6ab84c8e8fb3ae40e4927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo "Administration Mot de passe";
        
        $__internal_17b51643b7b6f2197375eef71b339b35f398b194cae6ab84c8e8fb3ae40e4927->leave($__internal_17b51643b7b6f2197375eef71b339b35f398b194cae6ab84c8e8fb3ae40e4927_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_f03c1386e04be22357c37aa5dd2a79fb10064c30165962e1cb30a958270e2de0 = $this->env->getExtension("native_profiler");
        $__internal_f03c1386e04be22357c37aa5dd2a79fb10064c30165962e1cb30a958270e2de0->enter($__internal_f03c1386e04be22357c37aa5dd2a79fb10064c30165962e1cb30a958270e2de0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Changer de mot de passe";
        
        $__internal_f03c1386e04be22357c37aa5dd2a79fb10064c30165962e1cb30a958270e2de0->leave($__internal_f03c1386e04be22357c37aa5dd2a79fb10064c30165962e1cb30a958270e2de0_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_ba38fb9d4f2015cc3a1a51bbe05fc81b508f7cec610b4f72dc4293c1f04a7c80 = $this->env->getExtension("native_profiler");
        $__internal_ba38fb9d4f2015cc3a1a51bbe05fc81b508f7cec610b4f72dc4293c1f04a7c80->enter($__internal_ba38fb9d4f2015cc3a1a51bbe05fc81b508f7cec610b4f72dc4293c1f04a7c80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        
        $__internal_ba38fb9d4f2015cc3a1a51bbe05fc81b508f7cec610b4f72dc4293c1f04a7c80->leave($__internal_ba38fb9d4f2015cc3a1a51bbe05fc81b508f7cec610b4f72dc4293c1f04a7c80_prof);

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
