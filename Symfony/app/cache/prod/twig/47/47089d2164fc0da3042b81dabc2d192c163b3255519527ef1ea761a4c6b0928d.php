<?php

/* NoxIntranetAdministrationBundle:AdministrationUser:collaborateursEnLigne.html.twig */
class __TwigTemplate_d0bc3d777371ce038875d5aef6dbadfecbb242096b7cc28f1ca17f3aaba7acd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetAdministrationBundle:AdministrationUser:collaborateursEnLigne.html.twig", 1);
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
        echo "Collaborateurs en ligne";
    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo "Collaborateurs en ligne";
    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        // line 8
        echo "    <style>
        #online_users_div {
            width: 70%;
            margin: auto;
        }

        #online_users_table {
            table-layout: fixed;
            width: auto;
            max-width: 100%;
            margin: auto;
        }

        #online_users_table, #online_users_table tr, #online_users_table th, #online_users_table td {
            border-collapse: collapse;
            border: 1px solid black;
            text-align: center;
        }

        #online_users_table th {
            color: white;
            background-color: #1F4E79;
        }

        #online_users_table td, #online_users_table th {
            padding-left: 0.5em;
            padding-right: 0.5em;
        }

        .last_viewed_page_td {
            word-break: break-all;
        }
    </style>

    <div id=\"online_users_div\">
        <table id=\"online_users_table\">
            <thead>
                <tr>
                    <th colspan=\"3\">Utilisateurs en ligne (";
        // line 46
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["online_users"]) ? $context["online_users"] : null)), "html", null, true);
        echo ")</th>
                </tr>
                <tr>
                    <th>Collaborateur</th>
                    <th>Dernière activitée</th>
                    <th>Dernière page consultée</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["online_users"]) ? $context["online_users"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 56
            echo "                    <tr>
                        <td>";
            // line 57
            echo twig_escape_filter($this->env, (($this->getAttribute($context["user"], "Lastname", array()) . " ") . $this->getAttribute($context["user"], "Firstname", array())), "html", null, true);
            echo "</td>
                        <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "LastActivity", array()), "d/m/Y à H:i:s"), "html", null, true);
            echo "</td>
                        <td class=\"last_viewed_page_td\">";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "LastViewedPage", array()), "route", array(), "array"), "html", null, true);
            echo "<br />(";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "LastViewedPage", array()), "path", array(), "array"), "html", null, true);
            echo ")</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "            </tbody>
        </table>
    </div>
";
    }

    public function getTemplateName()
    {
        return "NoxIntranetAdministrationBundle:AdministrationUser:collaborateursEnLigne.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 62,  112 => 59,  108 => 58,  104 => 57,  101 => 56,  97 => 55,  85 => 46,  45 => 8,  42 => 7,  36 => 5,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "NoxIntranetAdministrationBundle:AdministrationUser:collaborateursEnLigne.html.twig", "C:\\wamp\\www\\Symfony\\src\\NoxIntranet\\AdministrationBundle/Resources/views/AdministrationUser/collaborateursEnLigne.html.twig");
    }
}
