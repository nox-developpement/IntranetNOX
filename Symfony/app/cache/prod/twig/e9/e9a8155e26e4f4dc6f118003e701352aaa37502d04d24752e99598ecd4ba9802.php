<?php

/* support/include/upgrader/streams/core/8aeda901-16fcef4a.task.php */
class __TwigTemplate_737c32189380d6b6348ec809cca7a84cc682d336138ddc8dbef215a12058a377 extends Twig_Template
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
require_once INCLUDE_DIR.'class.migrater.php';

class CryptoMigrater extends MigrationTask {
    var \$description = \"Migrating encrypted password\";
    var \$status ='Making the world a better place!';

    function run() {

        \$sql='SELECT email_id, userpass, userid FROM '.EMAIL_TABLE
            .\" WHERE userpass <> ''\";
        if((\$res=db_query(\$sql)) && db_num_rows(\$res)) {
            while(list(\$id, \$passwd, \$username) = db_fetch_row(\$res)) {
                if(!\$passwd) continue;
                \$ciphertext = Crypto::encrypt(self::_decrypt(\$passwd, SECRET_SALT), SECRET_SALT, \$username);
                \$sql='UPDATE '.EMAIL_TABLE
                    .' SET userpass='.db_input(\$ciphertext)
                    .' WHERE email_id='.db_input(\$id);
                db_query(\$sql);
            }
        }
    }

    /*
      XXX: This is not a  good way of decrypting data - use to descrypt old
      data.
     */
    function _decrypt(\$text, \$salt) {

        if(!function_exists('mcrypt_encrypt') || !function_exists('mcrypt_decrypt'))
            return \$text;

        return trim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, \$salt, base64_decode(\$text), MCRYPT_MODE_ECB,
                        mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB), MCRYPT_RAND)));
    }
}
return 'CryptoMigrater';
?>
";
    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/8aeda901-16fcef4a.task.php";
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
        return new Twig_Source("", "support/include/upgrader/streams/core/8aeda901-16fcef4a.task.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\upgrader\\streams\\core\\8aeda901-16fcef4a.task.php");
    }
}
