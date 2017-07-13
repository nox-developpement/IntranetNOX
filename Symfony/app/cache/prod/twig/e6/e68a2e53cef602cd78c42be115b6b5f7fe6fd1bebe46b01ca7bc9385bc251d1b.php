<?php

/* @NoxIntranetAccueil/CharteInformatique/charteInformatiqueMonitoring.html.twig */
class __TwigTemplate_eb01a732a4df07797527505f1dc0a339720cb4059dbcb563a7b475418332cf0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@NoxIntranetAccueil/CharteInformatique/charteInformatiqueMonitoring.html.twig", 1);
        $this->blocks = array(
            'titrePage' => array($this, 'block_titrePage'),
            'messageAccueil' => array($this, 'block_messageAccueil'),
            'sousMessageAccueil' => array($this, 'block_sousMessageAccueil'),
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
        echo " Monitoring charte informatique ";
    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo "Monitoring charte informatique";
    }

    // line 7
    public function block_sousMessageAccueil($context, array $blocks = array())
    {
        echo "Année ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " | <a href='";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Préparation à l'Entretien de Développement Professionnel.pdf"), "html", null, true);
        echo "' target=\"_blank\">Préparation à l'Entretien de Développement Professionnel</a>";
    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        // line 10
        echo "    <style>
        #charte_informatique_collaborateurs_list_container {
            width: 70%;
            height: 60%;
            margin: auto;
        }

        #collaborateurs_who_read_charte_informatique_container, #collaborateurs_who_hasnt_read_charte_informatique_container {
            width: 50%;
            height: 100%;
            display: inline-block;
        }

        #collaborateurs_who_read_charte_informatique_container {
            float: left;
        }

        #collaborateurs_who_hasnt_read_charte_informatique_container {
            float: right;
        }

        #collaborateurs_who_read_charte_informatique, #collaborateurs_who_hasnt_read_charte_informatique {
            list-style-type: none;
            overflow: auto;
            height: 100%;
        }

        #collaborateurs_who_read_charte_informatique li, #collaborateurs_who_hasnt_read_charte_informatique li {
            text-align: center;
        }

        h4 {
            text-align: center;
        }
    </style>

    <div id=\"charte_informatique_collaborateurs_list_container\">
        <div id=\"collaborateurs_who_read_charte_informatique_container\">
            <h4>Collaborateurs qui ont imprimé la charte informatique</h4>
            <ul id=\"collaborateurs_who_read_charte_informatique\">
                ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["collaborateurWhoHasReadCharteInformatique"]) ? $context["collaborateurWhoHasReadCharteInformatique"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["collaborateur"]) {
            // line 51
            echo "                    <li>
                        <span>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["collaborateur"], "Lastname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["collaborateur"], "Firstname", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["collaborateur"], "charteInformatiqueReadingDate", array()), "d/m/Y"), "html", null, true);
            echo ")</span> <a href='";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_charte_informatique_reset", array("collaborateurUsername" => $this->getAttribute($context["collaborateur"], "Username", array()))), "html", null, true);
            echo "' title='Réinitialise la lecture de la charte informatique.'>Reset</a>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['collaborateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "            </ul>
        </div>
        <div id=\"collaborateurs_who_hasnt_read_charte_informatique_container\">
            <h4>Collaborateurs qui n'ont pas vues la charte informatique</h4>
            <ul id=\"collaborateurs_who_hasnt_read_charte_informatique\">
                ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["collaborateurWhoHasntReadCharteInformatique"]) ? $context["collaborateurWhoHasntReadCharteInformatique"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["collaborateur"]) {
            // line 61
            echo "                    <li>
                        ";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["collaborateur"], "Lastname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["collaborateur"], "Firstname", array()), "html", null, true);
            echo "
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['collaborateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "            </ul>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "@NoxIntranetAccueil/CharteInformatique/charteInformatiqueMonitoring.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 65,  134 => 62,  131 => 61,  127 => 60,  120 => 55,  105 => 52,  102 => 51,  98 => 50,  56 => 10,  53 => 9,  43 => 7,  37 => 5,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@NoxIntranetAccueil/CharteInformatique/charteInformatiqueMonitoring.html.twig", "C:\\wamp\\www\\Symfony\\src\\NoxIntranet\\AccueilBundle\\Resources\\views\\CharteInformatique\\charteInformatiqueMonitoring.html.twig");
    }
}
