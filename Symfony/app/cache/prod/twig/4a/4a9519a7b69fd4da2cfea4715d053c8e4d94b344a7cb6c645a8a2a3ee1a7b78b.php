<?php

/* support/include/class.timezone.php */
class __TwigTemplate_68d89b9616afd91b874444d5fa61f70b9be563ef90ff0c01a2254834c4fa0305 extends Twig_Template
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
    class.timezone.php

    Time zone get utils.

    Peter Rotich <peter@osticket.com>
    Copyright (c)  2006-2013 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/

class Timezone {

    var \$id;
    var \$ht;

    function Timezone(\$id){
        \$this->id=0;
        return \$this->load(\$id);
    }

    function load(\$id=0) {

        if(!\$id && !(\$id=\$this->getId()))
            return false;

        \$sql='SELECT * FROM '.TIMEZONE_TABLE.' WHERE id='.db_input(\$id);
        if(!(\$res=db_query(\$sql)) || !db_num_rows(\$res))
            return false;

        \$this->ht=db_fetch_array(\$res);
        \$this->id=\$this->ht['id'];
        
        return \$this->id;
    }

    function reload() {
        return \$this->load();
    }

    function getId() { 
        return \$this->id;
    }
        
    function getOffset() {
        return \$this->ht['offset'];    
    }

    function getName() {
        return \$this->info['timezone'];
    }

    function getDesc() {
        return \$this->getName();
    }

    /* static functions */
    function lookup(\$id) {
        return (\$id && is_numeric(\$id) && (\$tz= new Timezone(\$id)) && \$tz->getId()==\$id)?\$tz:null;
    }

    function getOffsetById(\$id) {
        return (\$tz=Timezone::lookup(\$id))?\$tz->getOffset():0;
    }
}
?>
";
    }

    public function getTemplateName()
    {
        return "support/include/class.timezone.php";
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
        return new Twig_Source("", "support/include/class.timezone.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\class.timezone.php");
    }
}
