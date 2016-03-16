<?php

/* TwigBundle:Exception:error404.html.twig */
class __TwigTemplate_5c31d0f02fb11a759da43a6a07d65f7e182513c811e4ec6493509f3fc1b56574 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "TwigBundle:Exception:error404.html.twig", 1);
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
        echo " Page introuvable ";
    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo "Page introuvable";
    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        // line 8
        echo "
    <div style=\"width: 70%; margin: auto;\">
        <p style=\"font-size: 0.9vw;\">
            La page à laquelle vous essayez d'accédé n'existe pas. <br />
            <br/>
            Si vous pensez que ce n'est pas normal, vous pouvez contacter l'administrateur de l'intranet à l'adresse <a href=\"mailto:t.besson@groupe-nox.com?subject=Erreur: ";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : null), "html", null, true);
        echo "&body=%0D%0A%0D%0ACode erreur: ";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : null), "html", null, true);
        echo "%0D%0ATexte erreur: ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : null), "html", null, true);
        echo "\">t.besson@groupe-nox.com</a>.
        </p>
    </div>

";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 13,  45 => 8,  42 => 7,  36 => 5,  30 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %} Page introuvable {% endblock %}*/
/* */
/* {% block messageAccueil %}Page introuvable{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     <div style="width: 70%; margin: auto;">*/
/*         <p style="font-size: 0.9vw;">*/
/*             La page à laquelle vous essayez d'accédé n'existe pas. <br />*/
/*             <br/>*/
/*             Si vous pensez que ce n'est pas normal, vous pouvez contacter l'administrateur de l'intranet à l'adresse <a href="mailto:t.besson@groupe-nox.com?subject=Erreur: {{ status_code }}&body=%0D%0A%0D%0ACode erreur: {{ status_code }}%0D%0ATexte erreur: {{ status_text }}">t.besson@groupe-nox.com</a>.*/
/*         </p>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
