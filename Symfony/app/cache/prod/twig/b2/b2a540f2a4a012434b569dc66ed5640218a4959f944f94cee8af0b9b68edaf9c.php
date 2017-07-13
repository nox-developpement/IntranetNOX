<?php

/* support/include/i18n/en_US/templates/premade.yaml */
class __TwigTemplate_11fd07b3632538e847e58b909c1b4ece1b4e4f1ccb72640c16f8dbc68852d28a extends Twig_Template
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
        echo "#
# Canned response templates
#
---
- isenabled: 1
  title: What is osTicket (sample)?
  response: |
    osTicket is a widely-used open source support ticket system, an
    attractive alternative to higher-cost and complex customer support
    systems - simple, lightweight, reliable, open source, web-based and easy
    to setup and use.
  notes: |

  attachments:
    - name: osTicket.txt
      type: text/plain
      data: Canned Attachments Rock!

- isenabled: 1
  title: Sample (with variables)
  response: |
    Hi %{ticket.name.first},
    <br>
    <br>
    Your ticket #%{ticket.number} created on %{ticket.create_date} is in
    %{ticket.dept.name} department.
  notes: |
";
    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/templates/premade.yaml";
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
        return new Twig_Source("", "support/include/i18n/en_US/templates/premade.yaml", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\i18n\\en_US\\templates\\premade.yaml");
    }
}
