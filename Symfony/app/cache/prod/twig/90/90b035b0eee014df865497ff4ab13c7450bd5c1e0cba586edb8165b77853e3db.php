<?php

/* support/include/upgrader/streams/core/9f3b454c-c0fd16f4.patch.sql */
class __TwigTemplate_9cb0abd0dc2c343426723631f782636203ecccef8e86dc1e3490c03e628eb653 extends Twig_Template
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
 * @version v1.7
 *
 * @schema c0fd16f4eaf99b920be9f7fc6ebead32
 */

-- Increment varchar size for various fields... based on feedback from users.

ALTER TABLE  `%TABLE_PREFIX%session`
    CHANGE `session_id` `session_id` VARCHAR(255) collate ascii_general_ci NOT NULL DEFAULT  '';

ALTER TABLE  `%TABLE_PREFIX%ticket` 
    CHANGE  `name`  `name` VARCHAR( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT  '',
    CHANGE  `email`  `email` VARCHAR( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT  '',
    CHANGE  `subject`  `subject` VARCHAR( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT  '[no subject]';

ALTER TABLE  `%TABLE_PREFIX%email` 
    CHANGE  `email`  `email` VARCHAR( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT  '',
    CHANGE  `name`  `name` VARCHAR( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT  '',
    CHANGE  `userid`  `userid` VARCHAR( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
    CHANGE  `mail_host`  `mail_host` VARCHAR( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
    CHANGE  `smtp_host`  `smtp_host` VARCHAR( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL;

ALTER TABLE  `%TABLE_PREFIX%department` 
    CHANGE  `dept_name`  `dept_name` VARCHAR( 128 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT  '';

UPDATE `%TABLE_PREFIX%config`
    SET `schema_signature`='c0fd16f4eaf99b920be9f7fc6ebead32';
";
    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/9f3b454c-c0fd16f4.patch.sql";
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
        return new Twig_Source("", "support/include/upgrader/streams/core/9f3b454c-c0fd16f4.patch.sql", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\upgrader\\streams\\core\\9f3b454c-c0fd16f4.patch.sql");
    }
}
