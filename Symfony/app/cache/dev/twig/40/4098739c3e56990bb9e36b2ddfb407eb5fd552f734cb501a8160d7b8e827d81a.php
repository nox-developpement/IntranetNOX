<?php

/* support/include/upgrader/streams/core/8aeda901-16fcef4a.task.php */
class __TwigTemplate_b2866e7427644fbfff49a157ce337a585d4afecdb4777963fb0b9eea6373d644 extends Twig_Template
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
        $__internal_8d15edb57df32c45fd1d5fbc2258dc1aa7d6cefec28061e45833d27227be17c0 = $this->env->getExtension("native_profiler");
        $__internal_8d15edb57df32c45fd1d5fbc2258dc1aa7d6cefec28061e45833d27227be17c0->enter($__internal_8d15edb57df32c45fd1d5fbc2258dc1aa7d6cefec28061e45833d27227be17c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/upgrader/streams/core/8aeda901-16fcef4a.task.php"));

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
        
        $__internal_8d15edb57df32c45fd1d5fbc2258dc1aa7d6cefec28061e45833d27227be17c0->leave($__internal_8d15edb57df32c45fd1d5fbc2258dc1aa7d6cefec28061e45833d27227be17c0_prof);

    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/8aeda901-16fcef4a.task.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php*/
/* require_once INCLUDE_DIR.'class.migrater.php';*/
/* */
/* class CryptoMigrater extends MigrationTask {*/
/*     var $description = "Migrating encrypted password";*/
/*     var $status ='Making the world a better place!';*/
/* */
/*     function run() {*/
/* */
/*         $sql='SELECT email_id, userpass, userid FROM '.EMAIL_TABLE*/
/*             ." WHERE userpass <> ''";*/
/*         if(($res=db_query($sql)) && db_num_rows($res)) {*/
/*             while(list($id, $passwd, $username) = db_fetch_row($res)) {*/
/*                 if(!$passwd) continue;*/
/*                 $ciphertext = Crypto::encrypt(self::_decrypt($passwd, SECRET_SALT), SECRET_SALT, $username);*/
/*                 $sql='UPDATE '.EMAIL_TABLE*/
/*                     .' SET userpass='.db_input($ciphertext)*/
/*                     .' WHERE email_id='.db_input($id);*/
/*                 db_query($sql);*/
/*             }*/
/*         }*/
/*     }*/
/* */
/*     /**/
/*       XXX: This is not a  good way of decrypting data - use to descrypt old*/
/*       data.*/
/*      *//* */
/*     function _decrypt($text, $salt) {*/
/* */
/*         if(!function_exists('mcrypt_encrypt') || !function_exists('mcrypt_decrypt'))*/
/*             return $text;*/
/* */
/*         return trim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $salt, base64_decode($text), MCRYPT_MODE_ECB,*/
/*                         mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB), MCRYPT_RAND)));*/
/*     }*/
/* }*/
/* return 'CryptoMigrater';*/
/* ?>*/
/* */
