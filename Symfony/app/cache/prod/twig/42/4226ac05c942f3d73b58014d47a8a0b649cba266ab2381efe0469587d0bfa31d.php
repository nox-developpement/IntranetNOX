<?php

/* :Emails/DemandeMateriel:demandeMateriel.html.twig */
class __TwigTemplate_1ce9db5682a8cb58d2ab622729dab10c480a91f3d19b01935ad5a31ff7989f11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Emails/base_email_template.html.twig", ":Emails/DemandeMateriel:demandeMateriel.html.twig", 1);
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
                L'utilisateur <strong>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["donneesMessage"]) ? $context["donneesMessage"] : null), "demandeur", array()), "html", null, true);
        echo "</strong> situé dans l'agence de <strong>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["donneesMessage"]) ? $context["donneesMessage"] : null), "agence", array()), "html", null, true);
        echo "</strong> a fait
                la/les demande(s) suivante(s) :<br/>
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
                ";
        // line 27
        if (((isset($context["prixEstime"]) ? $context["prixEstime"] : null) != null)) {
            // line 28
            echo "                    Le prix estimé par la DSI est de <strong>";
            echo twig_escape_filter($this->env, (isset($context["prixEstime"]) ? $context["prixEstime"] : null), "html", null, true);
            echo "</strong> €.<br />
                    <br />
                ";
        }
        // line 31
        echo "                Pour <span style='color: green;'>valider</span> la demande, merci de <a style=\"color: green;\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_demande_materiel_confirmation_superieur_hierarchique", array("cleDemande" => (isset($context["cle"]) ? $context["cle"] : null), "reponse" => "validation"))), "html", null, true);
        echo "\">cliquer ici</a>.
                Pour <span style='color: red;'>refuser</span> la demande, merci de <a style=\"color: red;\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_demande_materiel_confirmation_superieur_hierarchique", array("cleDemande" => (isset($context["cle"]) ? $context["cle"] : null), "reponse" => "rejet"))), "html", null, true);
        echo "\">cliquer ici</a>.
            </p>
        </td>
    </tr>
";
    }

    public function getTemplateName()
    {
        return ":Emails/DemandeMateriel:demandeMateriel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 32,  97 => 31,  90 => 28,  88 => 27,  83 => 25,  78 => 23,  75 => 22,  69 => 20,  66 => 19,  60 => 17,  58 => 16,  50 => 13,  43 => 9,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":Emails/DemandeMateriel:demandeMateriel.html.twig", "C:\\wamp\\www\\Symfony\\app/Resources\\views/Emails/DemandeMateriel/demandeMateriel.html.twig");
    }
}
