<?php

/* support/scp/css/dashboard.css */
class __TwigTemplate_50d9be140ab68820c6cadc2560fc77e6beeb845acf7a09203dd3416f4cab16b5 extends Twig_Template
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
        echo "#line-chart-here {
    padding: 0.4em;
    margin-bottom: 1em;
    border-radius: 0.3em;
    border: 0.2em solid #ccc;
    background: rgb(246,248,249); /* Old browsers */
    background: -moz-linear-gradient(top, rgba(246,248,249,1) 0%, rgba(229,235,238,1) 50%, rgba(215,222,227,1) 51%, rgba(245,247,249,1) 100%); /* FF3.6+ */
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(246,248,249,1)), color-stop(50%,rgba(229,235,238,1)), color-stop(51%,rgba(215,222,227,1)), color-stop(100%,rgba(245,247,249,1))); /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(top, rgba(246,248,249,1) 0%,rgba(229,235,238,1) 50%,rgba(215,222,227,1) 51%,rgba(245,247,249,1) 100%); /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(top, rgba(246,248,249,1) 0%,rgba(229,235,238,1) 50%,rgba(215,222,227,1) 51%,rgba(245,247,249,1) 100%); /* Opera 11.10+ */
    background: -ms-linear-gradient(top, rgba(246,248,249,1) 0%,rgba(229,235,238,1) 50%,rgba(215,222,227,1) 51%,rgba(245,247,249,1) 100%); /* IE10+ */
    background: linear-gradient(top, rgba(246,248,249,1) 0%,rgba(229,235,238,1) 50%,rgba(215,222,227,1) 51%,rgba(245,247,249,1) 100%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f6f8f9', endColorstr='#f5f7f9',GradientType=0 ); /* IE6-9 */
}
#line-chart-here tspan {
    font-family: Monaco, Calibri, Sans Serif;
    font-size: 8pt;
}
#line-chart-legend {
    margin: 0.6em;
    line-height: 140%;
}
span.label.disabled {
    opacity: 0.5;
    background-color: #555 !important;
}
span.label {
    cursor: pointer;
}
#table-here tr :not(:first-child) {
    text-align: right;
    padding-right: 2.3em;
    width: 12%;
}
#table-here tr :not(:first-child) div {
    position: relative;
    margin-right: -1em;
}
#table-here tr :not(:first-child) div div {
    position: absolute;
    -moz-border-radius: 1em;
    -webkit-border-radius: 1em;
    border-radius: 1em;
}


";
    }

    public function getTemplateName()
    {
        return "support/scp/css/dashboard.css";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "support/scp/css/dashboard.css", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\scp\\css\\dashboard.css");
    }
}
