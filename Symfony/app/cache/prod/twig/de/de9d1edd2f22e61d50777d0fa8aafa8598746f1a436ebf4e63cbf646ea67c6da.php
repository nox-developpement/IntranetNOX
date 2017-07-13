<?php

/* support/include/class.priority.php */
class __TwigTemplate_5f680c57f444af677ca1040699b6bec384f71763038e489abf0f334da6a9dce9 extends Twig_Template
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
    class.priority.php

    Priority handle

    Peter Rotich <peter@osticket.com>
    Copyright (c)  2006-2013 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/

class Priority {

    var \$id;
    var \$ht;

    function Priority(\$id){

        \$this->id =0;
        \$this->load(\$id);
    }

    function load(\$id) {
        if(!\$id && !(\$id=\$this->getId()))
            return false;


        \$sql='SELECT *  FROM '.PRIORITY_TABLE
            .' WHERE priority_id='.db_input(\$id);
        if(!(\$res=db_query(\$sql)) || !db_num_rows(\$res))
            return false;

        \$this->ht= db_fetch_array(\$res);
        \$this->id= \$this->ht['priority_id'];

        return true;;
    }

    function getId() {
        return \$this->id;
    }

    function getTag() {
        return \$this->ht['priority'];
    }

    function getDesc() {
        return \$this->ht['priority_desc'];
    }

    function getColor() {
        return \$this->ht['priority_color'];
    }

    function getUrgency() {
        return \$this->ht['priority_urgency'];
    }

    function isPublic() {
        return (\$this->ht['ispublic']);
    }

    function __toString() {
        return \$this->getDesc();
    }

    /* ------------- Static ---------------*/
    function lookup(\$id) {
        return (\$id && is_numeric(\$id) && (\$p=new Priority(\$id)) && \$p->getId()==\$id)?\$p:null;
    }

    function getPriorities( \$publicOnly=false) {

        \$priorities=array();
        \$sql ='SELECT priority_id, priority_desc FROM '.PRIORITY_TABLE;
        if(\$publicOnly)
            \$sql.=' WHERE ispublic=1';

        if((\$res=db_query(\$sql)) && db_num_rows(\$res)) {
            while(list(\$id, \$name)=db_fetch_row(\$res))
                \$priorities[\$id] = \$name;
        }

        return \$priorities;
    }

    function getPublicPriorities() {
        return self::getPriorities(true);
    }
}
?>
";
    }

    public function getTemplateName()
    {
        return "support/include/class.priority.php";
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
        return new Twig_Source("", "support/include/class.priority.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\class.priority.php");
    }
}
