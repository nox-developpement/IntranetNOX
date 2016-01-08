<?php

/* Emails/demandeMateriel.html.twig */
class __TwigTemplate_11d705d78d4e5e2de66e00f837d2e99231730010e9f4f6711e4e7932a4d0f243 extends Twig_Template
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
        echo "N° ordre : ";
        echo twig_escape_filter($this->env, (isset($context["numOrdre"]) ? $context["numOrdre"] : null), "html", null, true);
        echo " <br /><br />

Bonjour, <br />

L'utilisateur <strong>";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["demandeur"]) ? $context["demandeur"] : null), "html", null, true);
        echo "</strong> situé dans l'agence de <strong>";
        echo twig_escape_filter($this->env, (isset($context["agence"]) ? $context["agence"] : null), "html", null, true);
        echo "</strong> à fait
la/les demande(s) suivante(s) : <br/><br/>
";
        // line 7
        if (((isset($context["materiel"]) ? $context["materiel"] : null) == "materiel")) {
            // line 8
            echo "   - Matériel :  <strong>";
            echo twig_escape_filter($this->env, (isset($context["categorie"]) ? $context["categorie"] : null), "html", null, true);
            echo "</strong>. <br />
";
        }
        // line 10
        if (((isset($context["logicielCheckbox"]) ? $context["logicielCheckbox"] : null) == "logicielCheckbox")) {
            // line 11
            echo "   - Logiciel : <strong>";
            echo twig_escape_filter($this->env, (isset($context["logiciel"]) ? $context["logiciel"] : null), "html", null, true);
            echo ".</strong> <br />
";
        }
        // line 13
        echo "<br />
Raison de la demande : ";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["raison"]) ? $context["raison"] : null), "html", null, true);
        echo "
<br /><br />
Date désirée : <strong>";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["date"]) ? $context["date"] : null), "html", null, true);
        echo "</strong>
<br /><br />
Nom du supérieur : <strong>";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["superieur"]) ? $context["superieur"] : null), "html", null, true);
        echo ".</strong>
";
    }

    public function getTemplateName()
    {
        return "Emails/demandeMateriel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 18,  58 => 16,  53 => 14,  50 => 13,  44 => 11,  42 => 10,  36 => 8,  34 => 7,  27 => 5,  19 => 1,);
    }
}
/* N° ordre : {{ numOrdre }} <br /><br />*/
/* */
/* Bonjour, <br />*/
/* */
/* L'utilisateur <strong>{{ demandeur }}</strong> situé dans l'agence de <strong>{{ agence }}</strong> à fait*/
/* la/les demande(s) suivante(s) : <br/><br/>*/
/* {% if materiel == 'materiel' %}*/
/*    - Matériel :  <strong>{{ categorie }}</strong>. <br />*/
/* {% endif %}*/
/* {% if logicielCheckbox == 'logicielCheckbox' %}*/
/*    - Logiciel : <strong>{{ logiciel }}.</strong> <br />*/
/* {% endif %}*/
/* <br />*/
/* Raison de la demande : {{ raison }}*/
/* <br /><br />*/
/* Date désirée : <strong>{{ date }}</strong>*/
/* <br /><br />*/
/* Nom du supérieur : <strong>{{ superieur }}.</strong>*/
/* */
