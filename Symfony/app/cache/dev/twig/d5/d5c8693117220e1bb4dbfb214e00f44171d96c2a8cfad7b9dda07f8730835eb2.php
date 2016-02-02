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
        $__internal_d98c1c804443a18996e77fd5908b5d37b9d8e788cf924d1605dedc2da7dfaaad = $this->env->getExtension("native_profiler");
        $__internal_d98c1c804443a18996e77fd5908b5d37b9d8e788cf924d1605dedc2da7dfaaad->enter($__internal_d98c1c804443a18996e77fd5908b5d37b9d8e788cf924d1605dedc2da7dfaaad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetAdministrationBundle:Administration:administrationAdminMDP.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d98c1c804443a18996e77fd5908b5d37b9d8e788cf924d1605dedc2da7dfaaad->leave($__internal_d98c1c804443a18996e77fd5908b5d37b9d8e788cf924d1605dedc2da7dfaaad_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_2992e71931cfb260ba046a9e637e3f8130a930a1722567ceb82affb88493c371 = $this->env->getExtension("native_profiler");
        $__internal_2992e71931cfb260ba046a9e637e3f8130a930a1722567ceb82affb88493c371->enter($__internal_2992e71931cfb260ba046a9e637e3f8130a930a1722567ceb82affb88493c371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo "Administration Mot de passe";
        
        $__internal_2992e71931cfb260ba046a9e637e3f8130a930a1722567ceb82affb88493c371->leave($__internal_2992e71931cfb260ba046a9e637e3f8130a930a1722567ceb82affb88493c371_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_cbe1ca5ddabf2c2e164dfb46782600e18bf96cd91a6afa8ace60e9ba25e889f1 = $this->env->getExtension("native_profiler");
        $__internal_cbe1ca5ddabf2c2e164dfb46782600e18bf96cd91a6afa8ace60e9ba25e889f1->enter($__internal_cbe1ca5ddabf2c2e164dfb46782600e18bf96cd91a6afa8ace60e9ba25e889f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Changer de mot de passe";
        
        $__internal_cbe1ca5ddabf2c2e164dfb46782600e18bf96cd91a6afa8ace60e9ba25e889f1->leave($__internal_cbe1ca5ddabf2c2e164dfb46782600e18bf96cd91a6afa8ace60e9ba25e889f1_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_74edf436f172f4bfa134a75635f6c2df307a91ca498523f29d0a98c750ff5ae7 = $this->env->getExtension("native_profiler");
        $__internal_74edf436f172f4bfa134a75635f6c2df307a91ca498523f29d0a98c750ff5ae7->enter($__internal_74edf436f172f4bfa134a75635f6c2df307a91ca498523f29d0a98c750ff5ae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        
        $__internal_74edf436f172f4bfa134a75635f6c2df307a91ca498523f29d0a98c750ff5ae7->leave($__internal_74edf436f172f4bfa134a75635f6c2df307a91ca498523f29d0a98c750ff5ae7_prof);

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
