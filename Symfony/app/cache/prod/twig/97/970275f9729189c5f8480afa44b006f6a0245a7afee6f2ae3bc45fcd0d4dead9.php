<?php

/* support/include/i18n/en_US/sequence.yaml */
class __TwigTemplate_fac9fbdcf6cbe023419e98f14b27c2586fe92ca22a239dba0ec3398dfdc9478e extends Twig_Template
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
    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/sequence.yaml";
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
        return new Twig_Source("", "support/include/i18n/en_US/sequence.yaml", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\i18n\\en_US\\sequence.yaml");
    }
}
