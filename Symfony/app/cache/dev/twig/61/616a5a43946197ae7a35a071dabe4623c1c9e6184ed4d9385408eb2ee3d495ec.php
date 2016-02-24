<?php

/* Emails/demandeMateriel.html.twig */
class __TwigTemplate_f11e791e02dac2a386492097baeffe960924cb800199e748dbbbe81713e58498 extends Twig_Template
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
        $__internal_9796d5d65e8b884b9cfc2863e643ed567bf50a9999cd9f24b173ff9263f101ba = $this->env->getExtension("native_profiler");
        $__internal_9796d5d65e8b884b9cfc2863e643ed567bf50a9999cd9f24b173ff9263f101ba->enter($__internal_9796d5d65e8b884b9cfc2863e643ed567bf50a9999cd9f24b173ff9263f101ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Emails/demandeMateriel.html.twig"));

        // line 1
        echo "N° ordre : ";
        echo twig_escape_filter($this->env, (isset($context["numOrdre"]) ? $context["numOrdre"] : $this->getContext($context, "numOrdre")), "html", null, true);
        echo " <br /><br />

Bonjour, <br />

L'utilisateur <strong>";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["demandeur"]) ? $context["demandeur"] : $this->getContext($context, "demandeur")), "html", null, true);
        echo "</strong> situé dans l'agence de <strong>";
        echo twig_escape_filter($this->env, (isset($context["agence"]) ? $context["agence"] : $this->getContext($context, "agence")), "html", null, true);
        echo "</strong> à fait
la/les demande(s) suivante(s) : <br/><br/>
";
        // line 7
        if (((isset($context["materiel"]) ? $context["materiel"] : $this->getContext($context, "materiel")) == "materiel")) {
            // line 8
            echo "   - Matériel :  <strong>";
            echo twig_escape_filter($this->env, (isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "html", null, true);
            echo "</strong>. <br />
";
        }
        // line 10
        if (((isset($context["logicielCheckbox"]) ? $context["logicielCheckbox"] : $this->getContext($context, "logicielCheckbox")) == "logicielCheckbox")) {
            // line 11
            echo "   - Logiciel : <strong>";
            echo twig_escape_filter($this->env, (isset($context["logiciel"]) ? $context["logiciel"] : $this->getContext($context, "logiciel")), "html", null, true);
            echo ".</strong> <br />
";
        }
        // line 13
        echo "<br />
Raison de la demande : ";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["raison"]) ? $context["raison"] : $this->getContext($context, "raison")), "html", null, true);
        echo "
<br /><br />
Date désirée : <strong>";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "html", null, true);
        echo "</strong>
<br /><br />
Nom du supérieur : <strong>";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["superieur"]) ? $context["superieur"] : $this->getContext($context, "superieur")), "html", null, true);
        echo ".</strong>
";
        
        $__internal_9796d5d65e8b884b9cfc2863e643ed567bf50a9999cd9f24b173ff9263f101ba->leave($__internal_9796d5d65e8b884b9cfc2863e643ed567bf50a9999cd9f24b173ff9263f101ba_prof);

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
        return array (  66 => 18,  61 => 16,  56 => 14,  53 => 13,  47 => 11,  45 => 10,  39 => 8,  37 => 7,  30 => 5,  22 => 1,);
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
