<?php

/* :Emails/MonitoringScripts:scriptErrorAlert.html.twig */
class __TwigTemplate_762237ba11ee7dccba0ed63b526ce114ed04c8f088d674801d825c2b846300d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Emails/base_email_template.html.twig", ":Emails/MonitoringScripts:scriptErrorAlert.html.twig", 1);
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
        echo "Erreur de script";
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
                <span style=\"color: red;\">L'exécution du script ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["script"]) ? $context["script"] : null), "ScriptName", array()), "html", null, true);
        echo " a rencontré un problème.</span><br />
                <br />
                Date de la dernière exécution : Le ";
        // line 13
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["script"]) ? $context["script"] : null), "Statut", array(0 => (isset($context["kernelRootDir"]) ? $context["kernelRootDir"] : null)), "method"), "lastIteration", array()), "d/m/Y à H:i:s"), "html", null, true);
        echo ".<br />
                Code de retour de la dernière exécution : ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["script"]) ? $context["script"] : null), "Statut", array(0 => (isset($context["kernelRootDir"]) ? $context["kernelRootDir"] : null)), "method"), "lastTaskResult", array()), "html", null, true);
        echo ".<br />
                <br />
                Vous pouvez accéder à l'interface de monitoring des scripts en <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_monitoring_scheduled_scripts")), "html", null, true);
        echo "\">cliquant ici</a>.
            </p>
        </td>
    </tr>
";
    }

    public function getTemplateName()
    {
        return ":Emails/MonitoringScripts:scriptErrorAlert.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 16,  54 => 14,  50 => 13,  45 => 11,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":Emails/MonitoringScripts:scriptErrorAlert.html.twig", "C:\\wamp\\www\\Symfony\\app/Resources\\views/Emails/MonitoringScripts/scriptErrorAlert.html.twig");
    }
}
