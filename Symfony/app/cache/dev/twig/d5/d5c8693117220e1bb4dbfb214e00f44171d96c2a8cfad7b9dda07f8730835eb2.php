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
        $__internal_63c4dce4beb7f4332a1432d5cf63edfe3bb5d37818aebfc715b3ed0d9dcc3514 = $this->env->getExtension("native_profiler");
        $__internal_63c4dce4beb7f4332a1432d5cf63edfe3bb5d37818aebfc715b3ed0d9dcc3514->enter($__internal_63c4dce4beb7f4332a1432d5cf63edfe3bb5d37818aebfc715b3ed0d9dcc3514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetAdministrationBundle:Administration:administrationAdminMDP.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63c4dce4beb7f4332a1432d5cf63edfe3bb5d37818aebfc715b3ed0d9dcc3514->leave($__internal_63c4dce4beb7f4332a1432d5cf63edfe3bb5d37818aebfc715b3ed0d9dcc3514_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_a294d7de56a4af1f233fcc9dca8ce41f79ff4f78886b5bbe7a556c64c767d96d = $this->env->getExtension("native_profiler");
        $__internal_a294d7de56a4af1f233fcc9dca8ce41f79ff4f78886b5bbe7a556c64c767d96d->enter($__internal_a294d7de56a4af1f233fcc9dca8ce41f79ff4f78886b5bbe7a556c64c767d96d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo "Administration Mot de passe";
        
        $__internal_a294d7de56a4af1f233fcc9dca8ce41f79ff4f78886b5bbe7a556c64c767d96d->leave($__internal_a294d7de56a4af1f233fcc9dca8ce41f79ff4f78886b5bbe7a556c64c767d96d_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_8f82eabf3cebe3be519f8c0e973295c5ae0ecfaef549cfe2c736bbe34df6600b = $this->env->getExtension("native_profiler");
        $__internal_8f82eabf3cebe3be519f8c0e973295c5ae0ecfaef549cfe2c736bbe34df6600b->enter($__internal_8f82eabf3cebe3be519f8c0e973295c5ae0ecfaef549cfe2c736bbe34df6600b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Changer de mot de passe";
        
        $__internal_8f82eabf3cebe3be519f8c0e973295c5ae0ecfaef549cfe2c736bbe34df6600b->leave($__internal_8f82eabf3cebe3be519f8c0e973295c5ae0ecfaef549cfe2c736bbe34df6600b_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_1dec0b21ca30603bfbdfea2a8cf16fe6561cf72ce10727d72b06c54449a82f7c = $this->env->getExtension("native_profiler");
        $__internal_1dec0b21ca30603bfbdfea2a8cf16fe6561cf72ce10727d72b06c54449a82f7c->enter($__internal_1dec0b21ca30603bfbdfea2a8cf16fe6561cf72ce10727d72b06c54449a82f7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        
        $__internal_1dec0b21ca30603bfbdfea2a8cf16fe6561cf72ce10727d72b06c54449a82f7c->leave($__internal_1dec0b21ca30603bfbdfea2a8cf16fe6561cf72ce10727d72b06c54449a82f7c_prof);

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
