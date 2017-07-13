<?php

/* NoxIntranetRessourcesBundle:PrestationsInternes:prestationsInternesMenu.html.twig */
class __TwigTemplate_6f33183866af2e9ebaeeaa3f44f9c877290e459c0d45d7bf1257b03b6acb87ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetRessourcesBundle:PrestationsInternes:prestationsInternesMenu.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        echo " Prestations internes ";
    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo "Prestations internes";
    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        // line 8
        echo "    <div style='width: 70%; margin: auto; text-align: center;'>
        <ul class='DRHAdministrationList'>
            <li>
                <a href='";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_prestation_search");
        echo "'>Faire une demande de prestation interne</a>
            </li>
            <li>
                <a href='";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_demande_prestation_perso_reporting");
        echo "'>Consulter mes demandes de prestation internes</a>
            </li>
            <li>
                <a href='";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_propositions_reporting");
        echo "'>Consulter mes propositions de prestations internes</a>
            </li>
            <li>
                <a href='";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_demande_prestation_reporting");
        echo "'>Consulter la liste des demandes de prestations internes</a>
            </li>
        </ul>
    </div>
";
    }

    public function getTemplateName()
    {
        return "NoxIntranetRessourcesBundle:PrestationsInternes:prestationsInternesMenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 20,  62 => 17,  56 => 14,  50 => 11,  45 => 8,  42 => 7,  36 => 5,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "NoxIntranetRessourcesBundle:PrestationsInternes:prestationsInternesMenu.html.twig", "C:\\wamp\\www\\Symfony\\src\\NoxIntranet\\RessourcesBundle/Resources/views/PrestationsInternes/prestationsInternesMenu.html.twig");
    }
}
