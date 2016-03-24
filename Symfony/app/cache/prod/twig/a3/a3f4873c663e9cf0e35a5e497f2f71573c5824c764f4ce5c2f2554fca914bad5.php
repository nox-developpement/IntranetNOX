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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["donneesMessage"]) ? $context["donneesMessage"] : null), "numOrdre", array()), "html", null, true);
        echo " <br /><br />

Bonjour, <br />

L'utilisateur <strong>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["donneesMessage"]) ? $context["donneesMessage"] : null), "demandeur", array()), "html", null, true);
        echo "</strong> situé dans l'agence de <strong>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["donneesMessage"]) ? $context["donneesMessage"] : null), "agence", array()), "html", null, true);
        echo "</strong> à fait
la/les demande(s) suivante(s) : <br/><br/>
";
        // line 7
        if (($this->getAttribute((isset($context["donneesMessage"]) ? $context["donneesMessage"] : null), "materiel", array()) == "materiel")) {
            // line 8
            echo "    - Matériel :  <strong>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["donneesMessage"]) ? $context["donneesMessage"] : null), "categorie", array()), "html", null, true);
            echo "</strong>. <br />
";
        }
        // line 10
        if (($this->getAttribute((isset($context["donneesMessage"]) ? $context["donneesMessage"] : null), "logicielCheckbox", array()) == "logicielCheckbox")) {
            // line 11
            echo "    - Logiciel : <strong>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["donneesMessage"]) ? $context["donneesMessage"] : null), "logiciel", array()), "html", null, true);
            echo ".</strong> <br />
";
        }
        // line 13
        echo "<br />
Raison de la demande : ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["donneesMessage"]) ? $context["donneesMessage"] : null), "raison", array()), "html", null, true);
        echo "
<br /><br />
Date désirée : <strong>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["donneesMessage"]) ? $context["donneesMessage"] : null), "date", array()), "html", null, true);
        echo "</strong>
<br /><br />
Demande validée par : <strong>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["donneesMessage"]) ? $context["donneesMessage"] : null), "emailSuperieur", array()), "html", null, true);
        echo "</strong>
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
/* N° ordre : {{ donneesMessage.numOrdre }} <br /><br />*/
/* */
/* Bonjour, <br />*/
/* */
/* L'utilisateur <strong>{{ donneesMessage.demandeur }}</strong> situé dans l'agence de <strong>{{ donneesMessage.agence }}</strong> à fait*/
/* la/les demande(s) suivante(s) : <br/><br/>*/
/* {% if donneesMessage.materiel == 'materiel' %}*/
/*     - Matériel :  <strong>{{ donneesMessage.categorie }}</strong>. <br />*/
/* {% endif %}*/
/* {% if donneesMessage.logicielCheckbox == 'logicielCheckbox' %}*/
/*     - Logiciel : <strong>{{ donneesMessage.logiciel }}.</strong> <br />*/
/* {% endif %}*/
/* <br />*/
/* Raison de la demande : {{ donneesMessage.raison }}*/
/* <br /><br />*/
/* Date désirée : <strong>{{ donneesMessage.date }}</strong>*/
/* <br /><br />*/
/* Demande validée par : <strong>{{ donneesMessage.emailSuperieur }}</strong>*/
/* */
