<?php

/* NoxIntranetRessourcesBundle:Procedures:procedures.html.twig */
class __TwigTemplate_e06e63590360e26aec10b07930bdf979b1384b24cb709b2bd1df6e6b62aaf559 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetRessourcesBundle:Procedures:procedures.html.twig", 1);
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
        $__internal_5883778b55d9f6ce63e0cc8752bea5a8e1e57474d89a608e0c180d56166ecacc = $this->env->getExtension("native_profiler");
        $__internal_5883778b55d9f6ce63e0cc8752bea5a8e1e57474d89a608e0c180d56166ecacc->enter($__internal_5883778b55d9f6ce63e0cc8752bea5a8e1e57474d89a608e0c180d56166ecacc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetRessourcesBundle:Procedures:procedures.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5883778b55d9f6ce63e0cc8752bea5a8e1e57474d89a608e0c180d56166ecacc->leave($__internal_5883778b55d9f6ce63e0cc8752bea5a8e1e57474d89a608e0c180d56166ecacc_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_bdd5e076c80a02092d0966349af6ef16cc313e9ddd0b2b942816ea624cc1c1d3 = $this->env->getExtension("native_profiler");
        $__internal_bdd5e076c80a02092d0966349af6ef16cc313e9ddd0b2b942816ea624cc1c1d3->enter($__internal_bdd5e076c80a02092d0966349af6ef16cc313e9ddd0b2b942816ea624cc1c1d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Procédures
";
        
        $__internal_bdd5e076c80a02092d0966349af6ef16cc313e9ddd0b2b942816ea624cc1c1d3->leave($__internal_bdd5e076c80a02092d0966349af6ef16cc313e9ddd0b2b942816ea624cc1c1d3_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_c5a38490f427a5555b10ac9d63a31efa95e99042ffe86c15102255589ed9ca4a = $this->env->getExtension("native_profiler");
        $__internal_c5a38490f427a5555b10ac9d63a31efa95e99042ffe86c15102255589ed9ca4a->enter($__internal_c5a38490f427a5555b10ac9d63a31efa95e99042ffe86c15102255589ed9ca4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Procédures";
        
        $__internal_c5a38490f427a5555b10ac9d63a31efa95e99042ffe86c15102255589ed9ca4a->leave($__internal_c5a38490f427a5555b10ac9d63a31efa95e99042ffe86c15102255589ed9ca4a_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_13ceda1ea29054c681dd1ac3af0ffcf80a8f6bc7390b16d56abc7e76536ec4d0 = $this->env->getExtension("native_profiler");
        $__internal_13ceda1ea29054c681dd1ac3af0ffcf80a8f6bc7390b16d56abc7e76536ec4d0->enter($__internal_13ceda1ea29054c681dd1ac3af0ffcf80a8f6bc7390b16d56abc7e76536ec4d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 10
        echo "
    

";
        
        $__internal_13ceda1ea29054c681dd1ac3af0ffcf80a8f6bc7390b16d56abc7e76536ec4d0->leave($__internal_13ceda1ea29054c681dd1ac3af0ffcf80a8f6bc7390b16d56abc7e76536ec4d0_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetRessourcesBundle:Procedures:procedures.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 10,  62 => 9,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %}*/
/*     Procédures*/
/* {% endblock %}*/
/* */
/* {% block messageAccueil %}Procédures{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     */
/* */
/* {% endblock %}*/
/* {# empty Twig template #}*/
/* */
/* */
