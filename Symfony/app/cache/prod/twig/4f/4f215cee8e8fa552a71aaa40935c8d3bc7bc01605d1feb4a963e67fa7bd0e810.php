<?php

/* :Emails/MatriceCompetences:new_user_update_competences_request.html.twig */
class __TwigTemplate_477ac68b9d5af7ace6730a06d8e7d5ec8a90ea3646d146139a040c414aaa63ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Emails/base_email_template.html.twig", ":Emails/MatriceCompetences:new_user_update_competences_request.html.twig", 1);
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
        echo "Compétences collaborateur";
    }

    // line 5
    public function block_mail_content($context, array $blocks = array())
    {
        // line 6
        echo "    <tr>
        <td>
            <p>
                Bonjour,<br />
                <br />
                Suite à l’embauche de ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "Firstname", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "Lastname", array()), "html", null, true);
        echo " au sein de votre équipe,<br />
                nous vous remercions de bien vouloir compléter la matrice des compétences sur l’intranet via RESSOURCES/RH/RH au quotidien/Saisie des compétences
                ou en <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_matrice_collaborateur_selection_collaborateur", array("Collaborateur" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "Id", array())))), "html", null, true);
        echo "\">cliquant ici</a>.<br />
                <br />
                Cordialement,<br /> 
                La Direction des Ressources Humaines. 
            </p>
        </td>
    </tr>
";
    }

    public function getTemplateName()
    {
        return ":Emails/MatriceCompetences:new_user_update_competences_request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 13,  45 => 11,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":Emails/MatriceCompetences:new_user_update_competences_request.html.twig", "C:\\wamp\\www\\Symfony\\app/Resources\\views/Emails/MatriceCompetences/new_user_update_competences_request.html.twig");
    }
}
