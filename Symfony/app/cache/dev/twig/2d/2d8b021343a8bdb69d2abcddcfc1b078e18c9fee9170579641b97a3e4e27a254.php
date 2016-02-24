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
        $__internal_066045d007f075138064ee46b47fbe42551fd77cd81227b15644fe0f7fbddfe4 = $this->env->getExtension("native_profiler");
        $__internal_066045d007f075138064ee46b47fbe42551fd77cd81227b15644fe0f7fbddfe4->enter($__internal_066045d007f075138064ee46b47fbe42551fd77cd81227b15644fe0f7fbddfe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NoxIntranetAdministration/Administration/administrationAdminMDP.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_066045d007f075138064ee46b47fbe42551fd77cd81227b15644fe0f7fbddfe4->leave($__internal_066045d007f075138064ee46b47fbe42551fd77cd81227b15644fe0f7fbddfe4_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_b37e85146be2090b6b03b72ebfa394014828f6f9a5f32d5317f90bd5a35b402a = $this->env->getExtension("native_profiler");
        $__internal_b37e85146be2090b6b03b72ebfa394014828f6f9a5f32d5317f90bd5a35b402a->enter($__internal_b37e85146be2090b6b03b72ebfa394014828f6f9a5f32d5317f90bd5a35b402a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo "Administration Mot de passe";
        
        $__internal_b37e85146be2090b6b03b72ebfa394014828f6f9a5f32d5317f90bd5a35b402a->leave($__internal_b37e85146be2090b6b03b72ebfa394014828f6f9a5f32d5317f90bd5a35b402a_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_ad1a45f4fdf8499ae80ed1da4ffa4bfb14d439e5b08d429555742b5d9242018a = $this->env->getExtension("native_profiler");
        $__internal_ad1a45f4fdf8499ae80ed1da4ffa4bfb14d439e5b08d429555742b5d9242018a->enter($__internal_ad1a45f4fdf8499ae80ed1da4ffa4bfb14d439e5b08d429555742b5d9242018a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Changer de mot de passe";
        
        $__internal_ad1a45f4fdf8499ae80ed1da4ffa4bfb14d439e5b08d429555742b5d9242018a->leave($__internal_ad1a45f4fdf8499ae80ed1da4ffa4bfb14d439e5b08d429555742b5d9242018a_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_9179bf2f766b70cd041b237919c17e0d50029c100cdceb73fb9f320fda9ff2d2 = $this->env->getExtension("native_profiler");
        $__internal_9179bf2f766b70cd041b237919c17e0d50029c100cdceb73fb9f320fda9ff2d2->enter($__internal_9179bf2f766b70cd041b237919c17e0d50029c100cdceb73fb9f320fda9ff2d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        
        $__internal_9179bf2f766b70cd041b237919c17e0d50029c100cdceb73fb9f320fda9ff2d2->leave($__internal_9179bf2f766b70cd041b237919c17e0d50029c100cdceb73fb9f320fda9ff2d2_prof);

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
