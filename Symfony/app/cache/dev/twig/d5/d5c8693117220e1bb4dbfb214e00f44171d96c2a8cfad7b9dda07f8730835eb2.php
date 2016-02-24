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
        $__internal_63d5f5df62362592ae5d4a9fc752ca464dbfd1f31f604d19e757d6102323104b = $this->env->getExtension("native_profiler");
        $__internal_63d5f5df62362592ae5d4a9fc752ca464dbfd1f31f604d19e757d6102323104b->enter($__internal_63d5f5df62362592ae5d4a9fc752ca464dbfd1f31f604d19e757d6102323104b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetAdministrationBundle:Administration:administrationAdminMDP.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63d5f5df62362592ae5d4a9fc752ca464dbfd1f31f604d19e757d6102323104b->leave($__internal_63d5f5df62362592ae5d4a9fc752ca464dbfd1f31f604d19e757d6102323104b_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_f057dbd166a465de965355a319ee9512540ba15081bd135818cf1f14b7b2aced = $this->env->getExtension("native_profiler");
        $__internal_f057dbd166a465de965355a319ee9512540ba15081bd135818cf1f14b7b2aced->enter($__internal_f057dbd166a465de965355a319ee9512540ba15081bd135818cf1f14b7b2aced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo "Administration Mot de passe";
        
        $__internal_f057dbd166a465de965355a319ee9512540ba15081bd135818cf1f14b7b2aced->leave($__internal_f057dbd166a465de965355a319ee9512540ba15081bd135818cf1f14b7b2aced_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_4e53978b970aa9213b0595fd69a76bf3b64152da98ed52bf61450aeba985f27b = $this->env->getExtension("native_profiler");
        $__internal_4e53978b970aa9213b0595fd69a76bf3b64152da98ed52bf61450aeba985f27b->enter($__internal_4e53978b970aa9213b0595fd69a76bf3b64152da98ed52bf61450aeba985f27b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Changer de mot de passe";
        
        $__internal_4e53978b970aa9213b0595fd69a76bf3b64152da98ed52bf61450aeba985f27b->leave($__internal_4e53978b970aa9213b0595fd69a76bf3b64152da98ed52bf61450aeba985f27b_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_0af5897b51d826708301a422f26dc92c8613d9f594b92a4247283067d9ca40f1 = $this->env->getExtension("native_profiler");
        $__internal_0af5897b51d826708301a422f26dc92c8613d9f594b92a4247283067d9ca40f1->enter($__internal_0af5897b51d826708301a422f26dc92c8613d9f594b92a4247283067d9ca40f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        
        $__internal_0af5897b51d826708301a422f26dc92c8613d9f594b92a4247283067d9ca40f1->leave($__internal_0af5897b51d826708301a422f26dc92c8613d9f594b92a4247283067d9ca40f1_prof);

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
