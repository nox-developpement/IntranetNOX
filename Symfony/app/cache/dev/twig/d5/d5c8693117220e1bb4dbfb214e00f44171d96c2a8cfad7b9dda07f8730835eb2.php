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
        $__internal_737bed591c3a73ed58229fcf92e3ba75bcc3a150a133c5d1a08f60df0e3cdb60 = $this->env->getExtension("native_profiler");
        $__internal_737bed591c3a73ed58229fcf92e3ba75bcc3a150a133c5d1a08f60df0e3cdb60->enter($__internal_737bed591c3a73ed58229fcf92e3ba75bcc3a150a133c5d1a08f60df0e3cdb60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetAdministrationBundle:Administration:administrationAdminMDP.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_737bed591c3a73ed58229fcf92e3ba75bcc3a150a133c5d1a08f60df0e3cdb60->leave($__internal_737bed591c3a73ed58229fcf92e3ba75bcc3a150a133c5d1a08f60df0e3cdb60_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_20ddb68bc1d782d425dd46ee03a23c000bf11c98767b83fb81cb7ad138c1cd4a = $this->env->getExtension("native_profiler");
        $__internal_20ddb68bc1d782d425dd46ee03a23c000bf11c98767b83fb81cb7ad138c1cd4a->enter($__internal_20ddb68bc1d782d425dd46ee03a23c000bf11c98767b83fb81cb7ad138c1cd4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo "Administration Mot de passe";
        
        $__internal_20ddb68bc1d782d425dd46ee03a23c000bf11c98767b83fb81cb7ad138c1cd4a->leave($__internal_20ddb68bc1d782d425dd46ee03a23c000bf11c98767b83fb81cb7ad138c1cd4a_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_ef7ffab8f405a268783fd047058b9236cff89adca3ac607290f9eb2fea764d51 = $this->env->getExtension("native_profiler");
        $__internal_ef7ffab8f405a268783fd047058b9236cff89adca3ac607290f9eb2fea764d51->enter($__internal_ef7ffab8f405a268783fd047058b9236cff89adca3ac607290f9eb2fea764d51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Changer de mot de passe";
        
        $__internal_ef7ffab8f405a268783fd047058b9236cff89adca3ac607290f9eb2fea764d51->leave($__internal_ef7ffab8f405a268783fd047058b9236cff89adca3ac607290f9eb2fea764d51_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_7f66b8fcde684a9b9cb51f1f5a42e3e0ba96acbe84894aa81be9eb318d15718c = $this->env->getExtension("native_profiler");
        $__internal_7f66b8fcde684a9b9cb51f1f5a42e3e0ba96acbe84894aa81be9eb318d15718c->enter($__internal_7f66b8fcde684a9b9cb51f1f5a42e3e0ba96acbe84894aa81be9eb318d15718c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        
        $__internal_7f66b8fcde684a9b9cb51f1f5a42e3e0ba96acbe84894aa81be9eb318d15718c->leave($__internal_7f66b8fcde684a9b9cb51f1f5a42e3e0ba96acbe84894aa81be9eb318d15718c_prof);

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
