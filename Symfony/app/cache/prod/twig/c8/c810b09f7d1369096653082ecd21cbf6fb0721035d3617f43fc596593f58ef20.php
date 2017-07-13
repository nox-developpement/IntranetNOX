<?php

/* support/include/upgrader/streams/core/d0e37dca-1da1bcba.patch.sql */
class __TwigTemplate_9422091b3724d9f4edcabc1b94cea5e71b6710e3e1cd926505213a7c7573221a extends Twig_Template
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
        echo "/**
 * @version v1.7 RC3
 * @signature 1da1bcbafcedc65efef58f142a48ac91
 *
 *  Upgrade from 1.6 RC3 + filters
 *
 */

DROP TABLE IF EXISTS `%TABLE_PREFIX%filter`;
RENAME TABLE  `%TABLE_PREFIX%email_filter` TO  `%TABLE_PREFIX%filter`;

DROP TABLE IF EXISTS `%TABLE_PREFIX%filter_rule`;
RENAME TABLE  `%TABLE_PREFIX%email_filter_rule` TO  `%TABLE_PREFIX%filter_rule`;

ALTER TABLE  `%TABLE_PREFIX%filter` CHANGE  `reject_email`  `reject_ticket` TINYINT( 1 ) UNSIGNED NOT NULL DEFAULT  '0';

ALTER TABLE  `%TABLE_PREFIX%filter`
    ADD  `target` ENUM(  'Any',  'Web',  'Email',  'API' ) NOT NULL DEFAULT  'Any' AFTER  `sla_id` ,
    ADD INDEX (  `target` );

UPDATE `%TABLE_PREFIX%filter` SET `target` = 'Email' WHERE `email_id` != 0;

-- Finished with patch
UPDATE `%TABLE_PREFIX%config`
    SET `schema_signature`='1da1bcbafcedc65efef58f142a48ac91';
";
    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/d0e37dca-1da1bcba.patch.sql";
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
        return new Twig_Source("", "support/include/upgrader/streams/core/d0e37dca-1da1bcba.patch.sql", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\upgrader\\streams\\core\\d0e37dca-1da1bcba.patch.sql");
    }
}
