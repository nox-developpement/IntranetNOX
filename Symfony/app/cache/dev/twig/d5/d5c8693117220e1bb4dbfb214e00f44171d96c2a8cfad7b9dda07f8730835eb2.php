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
        $__internal_5b398b05c3c355a33ffda00e0b67cebe95311974800ed89d1150b9aaed84549c = $this->env->getExtension("native_profiler");
        $__internal_5b398b05c3c355a33ffda00e0b67cebe95311974800ed89d1150b9aaed84549c->enter($__internal_5b398b05c3c355a33ffda00e0b67cebe95311974800ed89d1150b9aaed84549c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetAdministrationBundle:Administration:administrationAdminMDP.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b398b05c3c355a33ffda00e0b67cebe95311974800ed89d1150b9aaed84549c->leave($__internal_5b398b05c3c355a33ffda00e0b67cebe95311974800ed89d1150b9aaed84549c_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_153fa3630de42b9991403e6867f72b10bc8c87297e2ef0cd8f62b6c3287ba0a3 = $this->env->getExtension("native_profiler");
        $__internal_153fa3630de42b9991403e6867f72b10bc8c87297e2ef0cd8f62b6c3287ba0a3->enter($__internal_153fa3630de42b9991403e6867f72b10bc8c87297e2ef0cd8f62b6c3287ba0a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo "Administration Mot de passe";
        
        $__internal_153fa3630de42b9991403e6867f72b10bc8c87297e2ef0cd8f62b6c3287ba0a3->leave($__internal_153fa3630de42b9991403e6867f72b10bc8c87297e2ef0cd8f62b6c3287ba0a3_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_3f8efc0e249c032e3b963cf73a8990f5a1652a4383543e07a4a87204fed71a7a = $this->env->getExtension("native_profiler");
        $__internal_3f8efc0e249c032e3b963cf73a8990f5a1652a4383543e07a4a87204fed71a7a->enter($__internal_3f8efc0e249c032e3b963cf73a8990f5a1652a4383543e07a4a87204fed71a7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Changer de mot de passe";
        
        $__internal_3f8efc0e249c032e3b963cf73a8990f5a1652a4383543e07a4a87204fed71a7a->leave($__internal_3f8efc0e249c032e3b963cf73a8990f5a1652a4383543e07a4a87204fed71a7a_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_70a58fbc670da8f6aaed666ab049eea8feed063c2da911161fc5da383452dead = $this->env->getExtension("native_profiler");
        $__internal_70a58fbc670da8f6aaed666ab049eea8feed063c2da911161fc5da383452dead->enter($__internal_70a58fbc670da8f6aaed666ab049eea8feed063c2da911161fc5da383452dead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        
        $__internal_70a58fbc670da8f6aaed666ab049eea8feed063c2da911161fc5da383452dead->leave($__internal_70a58fbc670da8f6aaed666ab049eea8feed063c2da911161fc5da383452dead_prof);

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
