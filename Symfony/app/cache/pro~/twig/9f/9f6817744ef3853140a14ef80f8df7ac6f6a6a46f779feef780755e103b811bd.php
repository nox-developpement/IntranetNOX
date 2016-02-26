<?php

/* support/include/i18n/en_US/templates/premade.yaml */
class __TwigTemplate_791ea81978737cc08190016885322758f98c0a9ca5275ef7e3d75aacbb66d3af extends Twig_Template
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
}
/* #*/
/* # Canned response templates*/
/* #*/
/* ---*/
/* - isenabled: 1*/
/*   title: What is osTicket (sample)?*/
/*   response: |*/
/*     osTicket is a widely-used open source support ticket system, an*/
/*     attractive alternative to higher-cost and complex customer support*/
/*     systems - simple, lightweight, reliable, open source, web-based and easy*/
/*     to setup and use.*/
/*   notes: |*/
/* */
/*   attachments:*/
/*     - name: osTicket.txt*/
/*       type: text/plain*/
/*       data: Canned Attachments Rock!*/
/* */
/* - isenabled: 1*/
/*   title: Sample (with variables)*/
/*   response: |*/
/*     Hi %{ticket.name.first},*/
/*     <br>*/
/*     <br>*/
/*     Your ticket #%{ticket.number} created on %{ticket.create_date} is in*/
/*     %{ticket.dept.name} department.*/
/*   notes: |*/
/* */
