<?php

/* @NoxIntranetSupportSI/Support/licenses.html.twig */
class __TwigTemplate_4e3ab94f2b8e16aa133718986178f83189b464af3313160d2b309e3cc56ff1e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@NoxIntranetSupportSI/Support/licenses.html.twig", 1);
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
        echo " Licences ";
    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo "Licences";
    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        // line 8
        echo "


    <div style=\"width: 70%; margin: auto;\">
        <iframe id=\"doodleIframe\" src=\"http://doodle.com/poll/sgn6icw64hgiidt7\" style=\"width: 100%;\">
        </iframe>
    </div>

    <script type=\"text/javascript\">
        \$('#doodleIframe').height(\$('#contenu').height()*0.7);
    </script>

";
    }

    public function getTemplateName()
    {
        return "@NoxIntranetSupportSI/Support/licenses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  42 => 7,  36 => 5,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@NoxIntranetSupportSI/Support/licenses.html.twig", "C:\\wamp\\www\\Symfony\\src\\NoxIntranet\\SupportSIBundle\\Resources\\views\\Support\\licenses.html.twig");
    }
}
