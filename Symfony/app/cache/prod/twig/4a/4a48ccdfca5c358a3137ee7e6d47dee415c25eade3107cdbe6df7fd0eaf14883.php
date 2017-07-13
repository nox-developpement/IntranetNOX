<?php

/* Emails/DemandeMateriel/demandeMaterielValide.html.twig */
class __TwigTemplate_7e946f9344ab5ba73c685db499281d49d68d01cbf9a92f593af42cd4b862861d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Emails/base_email_template.html.twig", "Emails/DemandeMateriel/demandeMaterielValide.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'mail_content' => array($this, 'block_mail_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Emails/base_email_template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Demande de matériel";
    }

    // line 5
    public function block_mail_content($context, array $blocks = array())
    {
        // line 6
        echo "    <tr>
        <td>
            <p>
                N° ordre : ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["donneesMessage"]) ? $context["donneesMessage"] : null), "numOrdre", array()), "html", null, true);
        echo "<br />
                <br />
                Bonjour,<br />
                <br />
                La demande de matériel/logiciel de l'utilisateur <strong>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["donneesMessage"]) ? $context["donneesMessage"] : null), "demandeur", array()), "html", null, true);
        echo "</strong> situé dans l'agence de <strong>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["donneesMessage"]) ? $context["donneesMessage"] : null), "agence", array()), "html", null, true);
        echo "</strong> a été
                validée par ";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["superieur"]) ? $context["superieur"] : null), "html", null, true);
        echo " :<br/>
                <br/>
                ";
        // line 16
        if (($this->getAttribute((isset($context["donneesMessage"]) ? $context["donneesMessage"] : null), "materielCheckbox", array()) == true)) {
            // line 17
            echo "                    - Matériel :  <strong>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["donneesMessage"]) ? $context["donneesMessage"] : null), "materiel", array()), "html", null, true);
            echo "</strong>.<br />
                ";
        }
        // line 19
        echo "                ";
        if (($this->getAttribute((isset($context["donneesMessage"]) ? $context["donneesMessage"] : null), "logicielCheckbox", array()) == true)) {
            // line 20
            echo "                    - Logiciel : <strong>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["donneesMessage"]) ? $context["donneesMessage"] : null), "logiciel", array()), "html", null, true);
            echo "</strong>.<br />
                ";
        }
        // line 22
        echo "                <br />
                Raison de la demande : ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["donneesMessage"]) ? $context["donneesMessage"] : null), "raison", array()), "html", null, true);
        echo "<br />
                <br />
                Date désirée : <strong>";
        // line 25
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["donneesMessage"]) ? $context["donneesMessage"] : null), "date", array()), "d/m/Y"), "html", null, true);
        echo "</strong><br />
                <br />
                Email du supérieur hiérarchique : ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["donneesMessage"]) ? $context["donneesMessage"] : null), "emailSuperieur", array()), "html", null, true);
        echo "
            </p>
        </td>
    </tr>
";
    }

    public function getTemplateName()
    {
        return "Emails/DemandeMateriel/demandeMaterielValide.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 27,  86 => 25,  81 => 23,  78 => 22,  72 => 20,  69 => 19,  63 => 17,  61 => 16,  56 => 14,  50 => 13,  43 => 9,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Emails/DemandeMateriel/demandeMaterielValide.html.twig", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\Emails\\DemandeMateriel\\demandeMaterielValide.html.twig");
    }
}
