<?php

/* @Twig/Exception/error.html.twig */
class __TwigTemplate_613dc890f8f35f556a7848d63a003044c95953e35f70118a7f5461ce6f8a31cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@Twig/Exception/error.html.twig", 1);
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
        echo " Erreur: ";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : null), "html", null, true);
        echo " ";
    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo "Erreur: ";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : null), "html", null, true);
    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        // line 8
        echo "
    <div style=\"width: 70%; margin: auto;\">
        <p style=\"font-size: 0.9vw;\">
            Une erreur s'est produite, vous pouvez contacter l'administateur de l'intranet à l'adresse <a href=\"mailto:t.besson@groupe-nox.com?subject=Erreur: ";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : null), "html", null, true);
        echo "&body=%0D%0A%0D%0ACode erreur: ";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : null), "html", null, true);
        echo "%0D%0ATexte erreur: ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : null), "html", null, true);
        echo "\">t.besson@groupe-nox.com</a> en lui précisant ce que vous étiez en train de faire au moment de l'erreur.
        </p>
    </div>

";
    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 11,  48 => 8,  45 => 7,  38 => 5,  30 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %} Erreur: {{ status_code }} {% endblock %}*/
/* */
/* {% block messageAccueil %}Erreur: {{ status_code }}{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     <div style="width: 70%; margin: auto;">*/
/*         <p style="font-size: 0.9vw;">*/
/*             Une erreur s'est produite, vous pouvez contacter l'administateur de l'intranet à l'adresse <a href="mailto:t.besson@groupe-nox.com?subject=Erreur: {{ status_code }}&body=%0D%0A%0D%0ACode erreur: {{ status_code }}%0D%0ATexte erreur: {{ status_text }}">t.besson@groupe-nox.com</a> en lui précisant ce que vous étiez en train de faire au moment de l'erreur.*/
/*         </p>*/
/*     </div>*/
/* */
/* {% endblock %}*/
