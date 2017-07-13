<?php

/* Emails/MatriceCompetences/competences_update_request.html.twig */
class __TwigTemplate_da5213499fc63f5c3863cab8969c9f0997a63e8282ea5f9ca410cd870d744bb7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<p>
    Bonjour ";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["N1"]) ? $context["N1"] : null), "Firstname", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["N1"]) ? $context["N1"] : null), "Lastname", array()), "html", null, true);
        echo ",<br />
    <br />
    Les matrices de compétences du/des collaborateur(s) suivant(s) doit/doivent êtres complété(s) :
</p>
<ul>
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Collaborateurs"]) ? $context["Collaborateurs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["collaborateur"]) {
            // line 8
            echo "        <li>
            <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_matrice_collaborateur_selection_collaborateur", array("Collaborateur" => $this->getAttribute($context["collaborateur"], "id", array())))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["collaborateur"], "Firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["collaborateur"], "Lastname", array()), "html", null, true);
            echo "</a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['collaborateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "</ul>
<p>
    Merci de la/les remplir(s) dès que possible.
</p>
";
    }

    public function getTemplateName()
    {
        return "Emails/MatriceCompetences/competences_update_request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 12,  39 => 9,  36 => 8,  32 => 7,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Emails/MatriceCompetences/competences_update_request.html.twig", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\Emails\\MatriceCompetences\\competences_update_request.html.twig");
    }
}
