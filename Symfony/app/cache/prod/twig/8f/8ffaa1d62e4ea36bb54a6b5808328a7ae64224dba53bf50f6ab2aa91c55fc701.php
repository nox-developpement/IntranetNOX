<?php

/* support/include/class.banlist.php */
class __TwigTemplate_c6fe8590cd65d35c7ebee71afabaf213c971b829b8c641119304d3b4a67b78b3 extends Twig_Template
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
        echo "<?php
/*********************************************************************
    class.banlist.php

    Banned email addresses handle.

    Peter Rotich <peter@osticket.com>
    Copyright (c)  2006-2013 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/

require_once \"class.filter.php\";
class Banlist {
    
    function add(\$email,\$submitter='') {
        return self::getSystemBanList()->addRule('email','equal',\$email);
    }
    
    function remove(\$email) {
        return self::getSystemBanList()->removeRule('email','equal',\$email);
    }
    
    function isbanned(\$email) {
        return TicketFilter::isBanned(\$email);
    }

    function includes(\$email) {
        return self::getSystemBanList()->containsRule('email','equal',\$email);
    }

    function ensureSystemBanList() {

        if (!(\$id=Filter::getIdByName('SYSTEM BAN LIST')))
            \$id=self::createSystemBanList();

        return \$id;
    }

    function createSystemBanList() {
        # XXX: Filter::create should return the ID!!!
        \$errors=array();
        return Filter::create(array(
            'execorder'     => 99,
            'name'          => 'SYSTEM BAN LIST',
            'isactive'      => 1,
            'match_all_rules' => false,
            'reject_ticket'  => true,
            'rules'         => array(),
            'notes'         => __('Internal list for email banning. Do not remove')
        ), \$errors);
    }

    function getSystemBanList() {
        return new Filter(self::ensureSystemBanList());
    }

    function getFilter() {
        return self::getSystemBanList();
    }
}
";
    }

    public function getTemplateName()
    {
        return "support/include/class.banlist.php";
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
        return new Twig_Source("", "support/include/class.banlist.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\class.banlist.php");
    }
}
