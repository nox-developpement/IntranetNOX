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
        $__internal_87778faa06c55e2a7a4338cf917f10f4196a5584b620bb4aa9fc0bce66ab76be = $this->env->getExtension("native_profiler");
        $__internal_87778faa06c55e2a7a4338cf917f10f4196a5584b620bb4aa9fc0bce66ab76be->enter($__internal_87778faa06c55e2a7a4338cf917f10f4196a5584b620bb4aa9fc0bce66ab76be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetAdministrationBundle:Administration:administrationAdminMDP.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87778faa06c55e2a7a4338cf917f10f4196a5584b620bb4aa9fc0bce66ab76be->leave($__internal_87778faa06c55e2a7a4338cf917f10f4196a5584b620bb4aa9fc0bce66ab76be_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_44a40dcc0245fea6cfb47e55662e7cc0854756dbec31bcae5d3ddaa8864740eb = $this->env->getExtension("native_profiler");
        $__internal_44a40dcc0245fea6cfb47e55662e7cc0854756dbec31bcae5d3ddaa8864740eb->enter($__internal_44a40dcc0245fea6cfb47e55662e7cc0854756dbec31bcae5d3ddaa8864740eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo "Administration Mot de passe";
        
        $__internal_44a40dcc0245fea6cfb47e55662e7cc0854756dbec31bcae5d3ddaa8864740eb->leave($__internal_44a40dcc0245fea6cfb47e55662e7cc0854756dbec31bcae5d3ddaa8864740eb_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_08f687a9ac86551e7211af3c9c240adb98d714c38436fddafb12ce41cb04bbe5 = $this->env->getExtension("native_profiler");
        $__internal_08f687a9ac86551e7211af3c9c240adb98d714c38436fddafb12ce41cb04bbe5->enter($__internal_08f687a9ac86551e7211af3c9c240adb98d714c38436fddafb12ce41cb04bbe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Changer de mot de passe";
        
        $__internal_08f687a9ac86551e7211af3c9c240adb98d714c38436fddafb12ce41cb04bbe5->leave($__internal_08f687a9ac86551e7211af3c9c240adb98d714c38436fddafb12ce41cb04bbe5_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_fdb6cac10c019585ddb8d9abe036df9ae3ab9b0381d789966fff06fdbd0cc147 = $this->env->getExtension("native_profiler");
        $__internal_fdb6cac10c019585ddb8d9abe036df9ae3ab9b0381d789966fff06fdbd0cc147->enter($__internal_fdb6cac10c019585ddb8d9abe036df9ae3ab9b0381d789966fff06fdbd0cc147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        
        $__internal_fdb6cac10c019585ddb8d9abe036df9ae3ab9b0381d789966fff06fdbd0cc147->leave($__internal_fdb6cac10c019585ddb8d9abe036df9ae3ab9b0381d789966fff06fdbd0cc147_prof);

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
