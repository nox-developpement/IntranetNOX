<?php

/* @NoxIntranetAdministration/Administration/administrationAdminMDP.html.twig */
class __TwigTemplate_aabcf8364d2a299f321994774798324f8f64a8616afc9385f66b92bdec81e1f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@NoxIntranetAdministration/Administration/administrationAdminMDP.html.twig", 1);
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
        $__internal_2c9b9ff7249e43564eed73c3e0ded102b4e7750d3ae550e7a17ec615a3030463 = $this->env->getExtension("native_profiler");
        $__internal_2c9b9ff7249e43564eed73c3e0ded102b4e7750d3ae550e7a17ec615a3030463->enter($__internal_2c9b9ff7249e43564eed73c3e0ded102b4e7750d3ae550e7a17ec615a3030463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NoxIntranetAdministration/Administration/administrationAdminMDP.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c9b9ff7249e43564eed73c3e0ded102b4e7750d3ae550e7a17ec615a3030463->leave($__internal_2c9b9ff7249e43564eed73c3e0ded102b4e7750d3ae550e7a17ec615a3030463_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_d16efc36fe16bc6cb01693eb53bfedd7aba2115b6c49b9dc77c368310fba2187 = $this->env->getExtension("native_profiler");
        $__internal_d16efc36fe16bc6cb01693eb53bfedd7aba2115b6c49b9dc77c368310fba2187->enter($__internal_d16efc36fe16bc6cb01693eb53bfedd7aba2115b6c49b9dc77c368310fba2187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo "Administration Mot de passe";
        
        $__internal_d16efc36fe16bc6cb01693eb53bfedd7aba2115b6c49b9dc77c368310fba2187->leave($__internal_d16efc36fe16bc6cb01693eb53bfedd7aba2115b6c49b9dc77c368310fba2187_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_a4890600e5d2b653075ad55d6825f96d54b1eb659ddda0bc9f8e1c9b671d5e57 = $this->env->getExtension("native_profiler");
        $__internal_a4890600e5d2b653075ad55d6825f96d54b1eb659ddda0bc9f8e1c9b671d5e57->enter($__internal_a4890600e5d2b653075ad55d6825f96d54b1eb659ddda0bc9f8e1c9b671d5e57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Changer de mot de passe";
        
        $__internal_a4890600e5d2b653075ad55d6825f96d54b1eb659ddda0bc9f8e1c9b671d5e57->leave($__internal_a4890600e5d2b653075ad55d6825f96d54b1eb659ddda0bc9f8e1c9b671d5e57_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_b58501555eb186f5eda72b17f2f75ba546e278b83027ba169739d3818ed3ab3e = $this->env->getExtension("native_profiler");
        $__internal_b58501555eb186f5eda72b17f2f75ba546e278b83027ba169739d3818ed3ab3e->enter($__internal_b58501555eb186f5eda72b17f2f75ba546e278b83027ba169739d3818ed3ab3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        
        $__internal_b58501555eb186f5eda72b17f2f75ba546e278b83027ba169739d3818ed3ab3e->leave($__internal_b58501555eb186f5eda72b17f2f75ba546e278b83027ba169739d3818ed3ab3e_prof);

    }

    public function getTemplateName()
    {
        return "@NoxIntranetAdministration/Administration/administrationAdminMDP.html.twig";
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
