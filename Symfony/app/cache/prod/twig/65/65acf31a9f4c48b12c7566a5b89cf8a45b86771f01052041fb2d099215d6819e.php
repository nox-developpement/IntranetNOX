<?php

/* support/include/i18n/README.md */
class __TwigTemplate_5d20c1424604b76f19a3eed8f92c16b80d1156c497781c5a7ba07dd8d9a205a8 extends Twig_Template
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
        echo "Note to Translators
===================
It is our hope that osTicket can and will be translated to the native
language of every osTicket administrator. If you are considering helping in
the translation effort, thank you.

Please use the project Github page to share your work and cooperate with
other translators and translations. If you are uncomfortable with git or
github, you can submit your changes and suggestions to i18n@osticket.com.

How to translate
----------------
Please note that translation is not the practice of turning words from one
language to another. It is the process of capturing and presenting the
spirit of a text into another language. Please take the time to understand
the context of the texts, phrases, and documents before describing them in
your target language.

What not to translate
---------------------
Comments are meant to serve as a consistent hint to the context of the text.

Starting a new translation
--------------------------
We are using Crowdin to manage our translations. Visit our translation page
at http://i18n.crowdin.com/
";
    }

    public function getTemplateName()
    {
        return "support/include/i18n/README.md";
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
        return new Twig_Source("", "support/include/i18n/README.md", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\i18n\\README.md");
    }
}
