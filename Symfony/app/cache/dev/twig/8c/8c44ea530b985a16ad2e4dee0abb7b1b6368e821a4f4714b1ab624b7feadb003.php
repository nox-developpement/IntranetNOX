<?php

/* support/include/i18n/en_US/sequence.yaml */
class __TwigTemplate_6b4564c9da8fbf0b0a1b72e0f112baa498517b32bdf080d43cca76b4291bc725 extends Twig_Template
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
        $__internal_2a9025f78f1f1c41a95981f9e361d52298a8230d0854afdcd9a6feb08d0afa97 = $this->env->getExtension("native_profiler");
        $__internal_2a9025f78f1f1c41a95981f9e361d52298a8230d0854afdcd9a6feb08d0afa97->enter($__internal_2a9025f78f1f1c41a95981f9e361d52298a8230d0854afdcd9a6feb08d0afa97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/i18n/en_US/sequence.yaml"));

        // line 1
        echo "#
# Sequences installed with the system
#
# Fields:
# id:           PK
# name:         Name of the sequence
# next:         Next value of the sequence
# padding:      Padding character
# increment:    Distance between two numbers of the sequence
# flags:        Bitmask of flag settings. Currently known values are
#               INTERNAL:=0x0001 (restrict delete)
#
---
# ID:1 is reserved for upgrades. When transitioning to osTicket 1.10, the
# sequence ID:1 will be configured to start counting from the current
# MAX(ticket.ticket_id). The upgrade will miss this step if there is no
# sequence with ID:1
- id: 1
  name: \"General Tickets\"
  next: 1
  padding: '0'
  increment: 1
  flags: 1
";
        
        $__internal_2a9025f78f1f1c41a95981f9e361d52298a8230d0854afdcd9a6feb08d0afa97->leave($__internal_2a9025f78f1f1c41a95981f9e361d52298a8230d0854afdcd9a6feb08d0afa97_prof);

    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/sequence.yaml";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* #*/
/* # Sequences installed with the system*/
/* #*/
/* # Fields:*/
/* # id:           PK*/
/* # name:         Name of the sequence*/
/* # next:         Next value of the sequence*/
/* # padding:      Padding character*/
/* # increment:    Distance between two numbers of the sequence*/
/* # flags:        Bitmask of flag settings. Currently known values are*/
/* #               INTERNAL:=0x0001 (restrict delete)*/
/* #*/
/* ---*/
/* # ID:1 is reserved for upgrades. When transitioning to osTicket 1.10, the*/
/* # sequence ID:1 will be configured to start counting from the current*/
/* # MAX(ticket.ticket_id). The upgrade will miss this step if there is no*/
/* # sequence with ID:1*/
/* - id: 1*/
/*   name: "General Tickets"*/
/*   next: 1*/
/*   padding: '0'*/
/*   increment: 1*/
/*   flags: 1*/
/* */
