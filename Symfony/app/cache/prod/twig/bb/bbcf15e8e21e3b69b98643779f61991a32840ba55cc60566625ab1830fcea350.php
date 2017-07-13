<?php

/* support/css/rtl.css */
class __TwigTemplate_bc4e50978a8efb95049292675a00cbb6d950fe6feb0962542b70ef8cad0612a8 extends Twig_Template
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
        echo ".rtl {
    direction: rtl;
    unicode-bidi: embed;
}
.rtl .pull-left {
    float: right;
}
.rtl .pull-right {
    float: left;
}
.rtl table.list thead th a {
    background-position: 0% 50%;
    padding-right: 3px;
    padding-left: 15px;
}
.rtl table.list thead th,
.rtl table.list caption,
.rtl .dialog th,
.rtl .tip_box th {
    text-align: right;
}
.rtl .dialog h3 {
    padding-right: inherit;
    padding-left: 3em;
}
.rtl .dialog a.close {
    right: auto;
    left: 1em;
}
.rtl #nav .inactive li,
.rtl #sub_nav li {
    text-align: right;
}
.rtl #nav .inactive li a,
.rtl #sub_nav li a {
    background-position: 100% 50%;
    padding-left: 0;
    padding-right: 24px;
}
.rtl #nav li.inactive > ul {
    left: auto;
    right: -1px;
}
.rtl #sub_nav li + li > a {
    margin-left: 0;
    margin-right: 10px;
}
.rtl .tip_close {
    right: auto;
    left: 0.5em;
}
.rtl .tip_content h1 {
    padding-right: 0;
    padding-left: 1.5em;
}
.rtl #msg_notice,
.rtl #warning_bar,
.rtl #msg_warning,
.rtl #msg_error,
.rtl .error-banner {
    background-position: 99% 50%;
    background-position: calc(100% - 10px) 50%;
    padding-left: 10px;
    padding-right: 36px;
}
.rtl .form_table th, .rtl div.section-break {
    text-align: right;
}
.rtl .flush-right {
    text-align: left;
}
.rtl .flush-left {
    text-align: right;
}
.rtl .draft-saved {
    right: initial;
    left: 0.5em;
}
.rtl #sequences .manage-buttons {
    margin-right: initial;
    margin-left: 60px;
}
.rtl .row-item .button-group {
    right: initial;
    left: 0;
}
.rtl .row-item .button-group div {
    padding-left: 9px;
    padding-right: 12px;
}
.rtl .row-item .delete {
    border-left: none;
    border-right: 1px solid rgba(0,0,0,0.7);
}
.rtl [class^=\"icon-\"].pull-left, [class*=\" icon-\"].pull-right {
    margin-right: 0;
    margin-left: 0.3em;
}
.rtl ul.tabs {
    padding-left: 4px;
    padding-right: 20px;
    text-align:right;
}
.rtl #response_options ul.tabs {
    padding-right:190px;
    padding-left: 4px;
}
.rtl .action-button i.icon-caret-down {
    border-left: none;
    border-right: 1px solid #aaa;
    margin-left: 0;
    margin-right: 5px;
    padding-left: 0;
    padding-right: 5px;
}
.rtl .action-dropdown ul {
    text-align: right;
}
.rtl .file {
    padding-left: initial;
    padding-right: 20px;
    margin-right: initial;
    margin-left: 20px;
    background: url(../scp/images/icons/file.gif) 100% 50% no-repeat;
}
.rtl .floating-options {
    right: auto;
    left: 0;
    padding-right: initial;
    padding-left: 5px;
}
.rtl .quicknote .header .header-right {
    right: auto;
    left: 1em;
}
.rtl .quicknote .header .options {
    border-right: 1px solid rgba(0,0,0,0.2);
    border-left: none;
    padding-right: 10px;
    padding-left: initial;
    margin-right: 5px;
    margin-left: initial;
}
.rtl i.note-type {
    border-left: 1px solid rgba(0, 0, 0, 0.2);
    border-right: none;
    padding-left: 8px;
    padding-right: initial;
}
";
    }

    public function getTemplateName()
    {
        return "support/css/rtl.css";
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
        return new Twig_Source("", "support/css/rtl.css", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\css\\rtl.css");
    }
}
