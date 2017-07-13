<?php

/* :Emails/DeveloppementProfessionnel:AttenteValidationEDP.html.twig */
class __TwigTemplate_c79b946089c931a212da588206d4e1afb8f6d91efaafb3dc9616f1af6e32cbef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Emails/base_email_template.html.twig", ":Emails/DeveloppementProfessionnel:AttenteValidationEDP.html.twig", 1);
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
        echo "Validation développement professionnel";
    }

    // line 5
    public function block_mail_content($context, array $blocks = array())
    {
        // line 6
        echo "    <tr>
        <td>
            <p>
                Le ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["valideurGrade"]) ? $context["valideurGrade"] : null), "html", null, true);
        echo " a validé l’entretien de Développement Professionnel de ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collaborateur"]) ? $context["collaborateur"] : null), "Firstname", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collaborateur"]) ? $context["collaborateur"] : null), "Lastname", array()), "html", null, true);
        echo ", <a href='";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_developpement_professionnel_formulaire", array("collaborateurUsername" => $this->getAttribute((isset($context["collaborateur"]) ? $context["collaborateur"] : null), "Username", array())))), "html", null, true);
        echo "'>cliquez sur le lien suivant</a> pour avoir accès à la lecture de cet entretien et à la validation.
            </p>
        </td>
    </tr>
";
    }

    public function getTemplateName()
    {
        return ":Emails/DeveloppementProfessionnel:AttenteValidationEDP.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 9,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":Emails/DeveloppementProfessionnel:AttenteValidationEDP.html.twig", "C:\\wamp\\www\\Symfony\\app/Resources\\views/Emails/DeveloppementProfessionnel/AttenteValidationEDP.html.twig");
    }
}
